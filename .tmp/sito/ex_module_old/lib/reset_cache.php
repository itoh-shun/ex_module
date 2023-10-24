<?php
if($SPIRAL->getParam('settingCode')){
	include_once('ex_module/lib/functions.php');
	(new exModuleSettings($SPIRAL->getParam('settingCode')))->reset_cache();
?>

<script type="text/javascript">
	window.alert('このページのキャシュを削除しました。');
	history.back();
</script>

<?php } ?>

