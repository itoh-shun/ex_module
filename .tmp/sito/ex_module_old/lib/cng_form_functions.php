<?php
$settingID = $SPIRAL->getParam('settingID');
if((isset($settingID))&&(strlen($settingID) == 10)&&(strpos($settingID, 'SET_') !== false)){
update_setting();
?>
<script type="text/javascript">
	window.alert('設定情報を更新しました。');
</script>

<?php 
}

function update_setting(){
	global $SPIRAL;
	$db = $SPIRAL->getDataBase("ExMod_moduleDB");
	$db->addEqualCondition("settingID", $SPIRAL->getParam('settingID'));
	$count = $db->doUpdate(array(
		"settingParam1" => $SPIRAL->getParam('settingParam1'),
		"settingParam2" => $SPIRAL->getParam('settingParam2'),
		"pageType" => implode(',',$SPIRAL->getParams('pageType')),
		"settingTitle" => $SPIRAL->getParam('settingTitle'),
		"priority" => $SPIRAL->getParam('priority'),
		"status" => $SPIRAL->getParam('status'),
		));

}

