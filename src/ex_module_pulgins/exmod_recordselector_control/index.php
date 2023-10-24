<?php 

require_once "exmod_recordselector_control/php/DatabaseSelect.php";

class recordselector_control{

	private $params;

	function __construct($params)
	{
		$this->params = $params;
	}

	// CSS出力関数
	public function output_css(){
	}

	// headタグ内スクリプト出力関数
	public function output_pre_scripts(){
		// include();
	}

	// body終了タグ直前スクリプト出力関数
	public function output_after_scripts(){
		global $SPIRAL;

		$selectedval = $SPIRAL->getParam($this->params['name']);

		$database = new DatabaseSelect($this->params['database']);
		if($this->params['select_name'] != ""){
			$database->setSelectTitle($this->params['select_name']);
		}

		$sortType = true;
		if($this->params['sort_type'] == "desc"){
			$sortType = false;
		}

		if($this->params['sort_name'] == ""){
			$this->params['sort_name'] = "id";
		}

		$database->setSort($this->params['sort_name'], $sortType);

		$labelRecord = $database->getLabelRecord($this->params['label_value'], $this->params['label_name']);

		$options = array(
			array(
				"value"=>'',
				"label"=>'----- 選択してください -----',
				"selected"=>''
				)
		);
		foreach($labelRecord['data'] as $labeldata){
			$selected = false;
			if($selectedval == $labeldata[$this->params['label_value']]){
				$selected = true;
				$label_text = $labeldata[$this->params['label_name']];
			}
			$options[] = array(
				"value"=>$labeldata[$this->params['label_value']],
				"label"=>$labeldata[$this->params['label_name']],
				"selected"=>$selected
			);
		}

		include_once('exmod_recordselector_control/js/scripts.php');
		?>

<script type="text/javascript">
	(function(){
		let options = <?= json_encode($options); ?>;
		recordselector_control_functions.selectorTargetRemove('<?= $this->params['name'] ?>');
		recordselector_control_functions.setSelectTag('<?= $this->params['name'] ?>', options, "$errorInputColor:<?= $this->params['name'] ?>$");
	})();
	recordselector_control_functions.pasteLabelText('<?= $this->params['name'] ?>', "<?= $label_text ?>", "<?= $selectedval ?>");

</script>
<?php
	}
}

