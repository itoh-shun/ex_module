<?php

/**
 * 設定情報を読み込むクラス
 */
class exModuleSettings
{
    // private $setting_code;
    private $setting_array = [];
    private $module_array = [];
    private $setting_code;
    private $page_setting_info = [];

    function __construct($setting_code, $page_type = 6)
    {
        $this->setting_code = $setting_code;

        $this->setting_array = $this->return_setting_array(
            $setting_code,
            $page_type
        );
        // 設定情報からモジュールクラスを生成

        if (is_array($this->setting_array)) {
            foreach ($this->setting_array as $setting) {
                include_once 'exmod_' . $setting['moduleCode'] . '/index.php';
                if (
                    is_object($setting['settingParam1']) ||
                    is_array($setting['settingParam1'])
                ) {
                    $params = json_decode(
                        json_encode($setting['settingParam1']),
                        true
                    );
                } else {
                    $params = json_decode(
                        $this->convertEOL(
                            $setting['settingParam1'] .
                                $setting['settingParam2'],
                            '\n'
                        ),
                        true
                    );
                }
                // 実装ページタイプの値渡し
                $params['page_type'] = $page_type;
                $this->module_array[$setting['settingID']] = new $setting[
                    'moduleCode'
                ]($params);
            }
        }
    }

    // CSS出力関数
    public function output_css()
    {
        foreach ($this->module_array as $settingID => $module_class) {
            if (method_exists($module_class, 'output_css')) {
                $module_class->output_css();
            }
        }
    }

    // headタグ内スクリプト出力関数
    public function output_pre_scripts()
    {
        foreach ($this->module_array as $settingID => $module_class) {
            if (method_exists($module_class, 'output_pre_scripts')) {
                $module_class->output_pre_scripts();
            }
        }
    }

    // header前出力関数
    public function output_before_header()
    {
        $this->output_global_menu();
        foreach ($this->module_array as $settingID => $module_class) {
            if (method_exists($module_class, 'output_before_header')) {
                $module_class->output_before_header();
            }
        }
    }
    // header出力関数
    public function output_header()
    {
        foreach ($this->module_array as $settingID => $module_class) {
            if (method_exists($module_class, 'output_header')) {
                $module_class->output_header();
            }
        }
    }

    // コンテンツ関数
    public function output_contents()
    {
        foreach ($this->module_array as $settingID => $module_class) {
            if (method_exists($module_class, 'output_contents')) {
                $module_class->output_contents();
            }
        }
        $this->output_SPIRAL_seal();
    }

    // footer出力関数
    public function output_footer()
    {
        foreach ($this->module_array as $settingID => $module_class) {
            if (method_exists($module_class, 'output_footer')) {
                $module_class->output_footer();
            }
        }
    }

    // body終了タグ直前スクリプト出力関数
    public function output_after_scripts()
    {
        foreach ($this->module_array as $settingID => $module_class) {
            if (method_exists($module_class, 'output_after_scripts')) {
                $module_class->output_after_scripts();
            }
        }
    }

    private function convertEOL($string, $to = "\n")
    {
        return trim(preg_replace("/\r\n|\r|\n/", $to, $string));
    }
    private function output_global_menu()
    {
        // グローバルメニュー出力関数
        // global $SPIRAL;
        // $cache = $SPIRAL->getCache();
        // echo "<header><li>aaa</li><li>bbb</li></header>";

        // if(($this->page_setting_info)['sealID']){
        // 	if(!$cache->exists(($this->page_setting_info)['sealID'])){
        // 		$seal_record = $this->SPIRAL_select('ExMod_sealDB',array('return'=>'single','equal_condition'=>array('sealID'=>($this->page_setting_info)['sealID'])));

        // 		if(is_array($seal_record)){
        // 			echo($seal_record['sealScript']);
        // 			$cache->set(($this->page_setting_info)['sealID'], $seal_record['sealScript']);
        // 		}
        // 	}else{
        // 		echo($cache->get(($this->page_setting_info)['sealID']));
        // 	}
        // }
    }

    // SPIRALシール出力関数
    private function output_SPIRAL_seal()
    {
        global $SPIRAL;
        $cache = $SPIRAL->getCache();
        // echo "スパイラルシール";

        if ($this->page_setting_info['sealID']) {
            if (!$cache->exists($this->page_setting_info['sealID'])) {
                $seal_record = $this->SPIRAL_select('ExMod_sealDB', [
                    'return' => 'single',
                    'equal_condition' => [
                        'sealID' => $this->page_setting_info['sealID'],
                    ],
                ]);

                if (is_array($seal_record)) {
                    echo $seal_record['sealScript'];
                    $cache->set(
                        $this->page_setting_info['sealID'],
                        $seal_record['sealScript']
                    );
                }
            } else {
                echo $cache->get($this->page_setting_info['sealID']);
            }
        }
    }

    // キャッシュがあれば、キャッシュを参照し、なければDB参照する関数
    private function return_setting_array($setting_code, $page_type)
    {
        global $SPIRAL;
        $cache = $SPIRAL->getCache();
        // ページ設定情報を参照
        if (!$cache->exists($setting_code)) {
            // 設定情報をSelect
            $args = [
                'return' => 'single',
                'equal_condition' => [
                    'settingCode' => $setting_code,
                ],

            ];
            $page_setting_array = $this->SPIRAL_select('ExMod_pageDB', $args);
            $cache->set($setting_code, json_encode($page_setting_array));
            $this->page_setting_info = $page_setting_array;
        } else {
            $this->page_setting_info = json_decode(
                $cache->get($setting_code),
                true
            );
        }

        // モジュール設定情報を参照
        $key = $setting_code . '-' . $page_type;
        if (!$cache->exists($key)) {
            // 設定情報をSelect
            $args = [
                'return' => 'data',
                'equal_condition' => [
                    'settingCode' => $setting_code,
                    'status' => '1',
                ],
                'like_condition' => [
                    'pageType' => $page_type,
                ],
                'sort' => [
					'field' => 'priority',
					'ASC' => true,
                ],
            ];
            $setting_array = $this->SPIRAL_select('ExMod_moduleDB', $args);
            $cache->set($key, json_encode($setting_array));
        }
        return json_decode($cache->get($key), true);
    }

    public function reset_cache()
    {
        global $SPIRAL;
        $cache = $SPIRAL->getCache();

        for ($i = 1; $i <= 6; $i++) {
            $key = $this->setting_code . '-' . $i;
            $cache->delete($key);
        }
        if ($this->setting_code) {
            $cache->delete($this->setting_code);
        }
        if ($this->page_setting_info['sealID']) {
            $cache->delete($this->page_setting_info['sealID']);
        }
    }

    // DB情報参照関数
    private function SPIRAL_DBinfo($db)
    {
        $return_array = [];
        if (class_exists('SPIRAL')) {
            global $SPIRAL;
            // global $SPIRAL_API_TITLE;
            // $SPIRAL->setApiTokenTitle($SPIRAL_API_TITLE);
            $api_communicator = $SPIRAL->getSpiralApiCommunicator();

            $request = new SpiralApiRequest();
            $request->put('db_title', $db);

            $response = $api_communicator->request('database', 'get', $request);
            $response_array = $response->entrySet();
            if (is_array($response_array['schema']->fieldList)) {
                foreach ($response_array['schema']->fieldList as $field) {
                    if (
                        $field->type != 'mm_image100k' &&
                        $field->type != 'mm_file'
                    ) {
                        // 画像フィールドとファイルフィールドを除外
                        $return_array[$field->title]['label'] = $field->name;
                        if ($field->label) {
                            foreach ($field->label->idAry as $key => $value) {
                                $return_array[$field->title]['select'][$value] =
                                    $field->label->keywordAry[$key];
                            }
                        }
                    }
                }
            }

            return $return_array;
        }
    }

    // select関数
    private function SPIRAL_select($db_title, $args = null)
    {
        if (class_exists('SPIRAL')) {
            global $SPIRAL;
            // global $SPIRAL_API_TITLE;
            $result = [];
            // $SPIRAL->setApiTokenTitle($SPIRAL_API_TITLE);
            $db = $SPIRAL->getDataBase($db_title);
            if ($args['equal_condition']) {
                foreach ($args['equal_condition'] as $field => $value) {
                    $db->addEqualCondition($field, $value);
                }
            }
            if ($args['not_equal_condition']) {
                foreach ($args['not_equal_condition'] as $field => $value) {
                    $db->addNotEqualCondition($field, $value);
                }
            }
            if ($args['greater_than_condition']) {
                foreach ($args['greater_than_condition'] as $field => $value) {
                    $db->addGreaterThanCondition($field, $value);
                }
            }
            if ($args['less_than_condition']) {
                foreach ($args['less_than_condition'] as $field => $value) {
                    $db->addLessThanCondition($field, $value);
                }
            }
            if ($args['greater_equal_condition']) {
                foreach ($args['greater_equal_condition'] as $field => $value) {
                    $db->addGreaterEqualCondition($field, $value);
                }
            }
            if ($args['less_equal_condition']) {
                foreach ($args['less_equal_condition'] as $field => $value) {
                    $db->addLessEqualCondition($field, $value);
                }
            }
            if ($args['like_condition']) {
                foreach ($args['like_condition'] as $field => $value) {
                    $db->addSearchCondition($field, $value, '||');
                }
            }
            if ($args['null_condition']) {
                foreach ($args['null_condition'] as $field) {
                    $db->addNullCondition($field);
                }
            }
            if ($args['cardId']) {
                $db->addIdCondition($args['cardId']);
            }
            if ($args['sort']) {
                $db->addSortField($args['sort']['field'], $args['sort']['ASC']);
            }
            if ($args['select_rule']) {
                $db->addSelectNameCondition($args['select_rule']);
            }
            if ($args['field_list']) {
                $fields_array = $args['field_list'];
            } else {
                $fields_array = array_keys($this->SPIRAL_DBinfo($db_title));
            }
            $fields_array[] = 'id';
            foreach ($fields_array as $field) {
                $db->addSelectFields($field);
            }
            $db->setLinesPerPage(1000);
            $result = $db->doSelect();

            if ($result['count'] != '0') {
                if ($args['return'] == 'single') {
                    if ($args['label'] == true) {
                        foreach ($result['data'][0] as $field => $value) {
                            if ($result['label'][$cnt] != []) {
                                $result['data'][$record_cnt][$field] =
                                    $result['label'][$cnt][$value];
                            }
                            $cnt++;
                        }
                    }
                    return $result['data'][0];
                } elseif ($args['return']) {
                    foreach ($result['data'] as $record_cnt => $record) {
                        $cnt = 0;
                        if ($args['label'] == true) {
                            foreach ($record as $field => $value) {
                                if ($result['label'][$cnt] != []) {
                                    $result['data'][$record_cnt][$field] =
                                        $result['label'][$cnt][$value];
                                }
                                $cnt++;
                            }
                        }
                    }
                    return $result[$args['return']];
                } else {
                    return $result;
                }
            } else {
                return 'no records';
            }
        }
    }
}
