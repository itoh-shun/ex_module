<?php

function h($str){
	htmlspecialchars($str, ENT_QUOTES, 'SJIS');
}

function SPIRAL_DB_to_selections($db_title, $value_field, $label_field, $name, $args, $required = false, $type = 'radio'){
	$args['field_list'] = array($value_field,$label_field);

	$records = SPIRAL_select($db_title,$args);

	foreach ($records['data']  as $label) {
		if ($required) {$req_code = 'required';}
		switch ($type) {
			case 'radio':
			if($_POST[$name]){
				echo '<li><label><input class="input" type="radio" name="'.$name.'" value="'.h($label[$value_field]).'" '.($_POST[$name]==$label[$value_field] ? 'checked' : '').' '.$req_code.'><span>'.h($label[$label_field]).'</span></label></li>';
			}else{
				echo '<li><label><input class="input" type="radio" name="'.$name.'" value="'.h($label[$value_field]).'" '.$req_code.'><span>'.h($label[$label_field]).'</span></label></li>';
			}
				break;
			case 'select':
			if($_POST[$name]){
				echo '<option value="'.h($label[$value_field]).'" '.($_POST[$name]==$label[$value_field] ? 'selected' : '').' >'.h($label[$label_field]).'</option>';
			}else{
				echo '<option value="'.h($label[$value_field]).'" >'.h($label[$label_field]).'</option>';
			}
				break;
			
			default:
				break;
		}
		$req_code = '';
	}
}



function SPIRAL_DBinfo($db){
	$return_array = array();
	if(class_exists('SPIRAL')){

		global $SPIRAL;
		// global $SPIRAL_API_TITLE;
		// $SPIRAL->setApiTokenTitle($SPIRAL_API_TITLE);
		$api_communicator = $SPIRAL->getSpiralApiCommunicator();

		$request = new SpiralApiRequest();
		$request->put("db_title", $db);

		$response = $api_communicator->request("database", "get", $request);
		$response_array = $response->entrySet();
		if(is_array($response_array['schema']->fieldList)){
			foreach ($response_array['schema']->fieldList as $field) {
				if($field->type != 'mm_image100k'){// 画像フィールドを除外
					$return_array[$field->title]['label'] = $field->name;
					if($field->label){
						foreach ($field->label->idAry as $key => $value) {
							$return_array[$field->title]['select'][$value] = $field->label->keywordAry[$key];
						}
					}
				}
			}
		}

		return $return_array;
	}
}




function SPIRAL_select($db_title, $args = null){
	if(class_exists('SPIRAL')){
		global $SPIRAL;
		// global $SPIRAL_API_TITLE;
		$result = array();

		// $SPIRAL->setApiTokenTitle($SPIRAL_API_TITLE);
		$db = $SPIRAL->getDataBase($db_title);
		if($args['equal_condition']){
			foreach ($args['equal_condition'] as $field => $value) {
				$db->addEqualCondition($field, $value);
			}
		}
		if($args['not_equal_condition']){
			foreach ($args['not_equal_condition'] as $field => $value) {
				$db->addNotEqualCondition($field, $value);
			}
		}
		if($args['greater_than_condition']){
			foreach ($args['greater_than_condition'] as $field => $value) {
				$db->addGreaterThanCondition($field, $value);
			}
		}
		if($args['less_than_condition']){
			foreach ($args['less_than_condition'] as $field => $value) {
				$db->addLessThanCondition($field, $value);
			}
		}
		if($args['greater_equal_condition']){
			foreach ($args['greater_equal_condition'] as $field => $value) {
				$db->addGreaterEqualCondition($field, $value);
			}
		}
		if($args['less_equal_condition']){
			foreach ($args['less_equal_condition'] as $field => $value) {
				$db->addLessEqualCondition($field, $value);
			}
		}
		if($args['null_condition']){
			foreach ($args['null_condition'] as $field) {
				$db->addNullCondition($field);
			}
		}
		if($args['not_null_condition']){
			foreach ($args['not_null_condition'] as $field) {
				$db->addNotNullCondition($field);
			}
		}
		if($args['cardId']){
			$db->addIdCondition($args['cardId']);
		}
		if($args['sort']){
			$db->addSortField($args['sort']['field'],$args['sort']['ASC']);
		}
		if($args['select_rule']){
			$db->addSelectNameCondition($args['select_rule']);
		}
		if($args['field_list']){
			$fields_array = $args['field_list'];
		}else{
			$fields_array = array_keys(SPIRAL_DBinfo($db_title));
		}
		$fields_array[] = 'id';
		foreach ($fields_array as $field) {
			$db->addSelectFields($field);
		}
		if($args['count']){
			$db->setLinesPerPage($args['count']);
		}else{
			$db->setLinesPerPage(1000);
		}
		$result = $db->doSelect();

		if($result['count'] != "0"){
			foreach ($result['data'] as $record_cnt => $record) {
				$cnt = 0;
				if($args['label']==true){
					foreach ($record as $field => $value) {
						if($result['label'][$cnt]!=array()){
							$result['data'][$record_cnt][$field] = $result['label'][$cnt][$value];
						}
						$cnt++;
					}
				}
			}
			if($args['return']=='single'){
				return $result['data'][0];
			}elseif($args['return']){
				return $result[$args['return']];
			}else{
				return $result;
			}
		}else{
			return 'no records';
		}
	}
}
