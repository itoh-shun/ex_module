<?php // <!-- SMP_DYNAMIC_PAGE DISPLAY_ERRORS=OFF NAME=EX_MODULE_ADMIN_FORM --> ?>
<!DOCTYPE html>
<html id="SMP_STYLE">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=shift_jis">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
<title></title>
<style type="text/css">

<!--
<?php include ('ex_module/ds_blueberry/css/common.php'); ?>
<?php include ('ex_module/ds_blueberry/css/base_blueberry.php'); ?>
<?php include ('ex_module/ds_blueberry/css/form_pc_blueberry_bg_center.php'); ?>
<?php include ('ex_module/ds_blueberry/css/form_sp_blueberry_bg_center.php'); ?>
<?php
$includeFiles = $SPIRAL->getParam('includeFiles');
$moduleCode = $SPIRAL->getParam('moduleCode');
if((isset($includeFiles))&&(isset($moduleCode))){ 
	if(in_array('1',explode(',',$includeFiles))) include('exmod_'.$moduleCode.'/form/inc/custom_style.php');
} ?>
-->
</style>


</head>
<body class="body">
<center>

<!-- 編集不可 start -->
<div class="body_tbl">

<!-- SMP_TEMPLATE_HEADER start -->
	<h1>拡張モジュール設定編集</h1>

	<!--SMP:DISP:REG:START-->
	<p class="header_rmesg"></p>
	<!--SMP:DISP:REG:END-->


<!-- SMP_TEMPLATE_HEADER end -->

<!-- SMP_TEMPLATE_FORM start -->
	<form method="post" action="">
		<div class="smp_tmpl">
					<dl class="cf">
						<dt class="title">
							設定タイトル
						</dt><dd class="data">
							<input class="input" type="text" name="settingTitle" value="%val:usr:settingTitle%" maxlength="128" required="required">
                            <span class="sample">(全角64文字以内)</span><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							読込順序
						</dt><dd class="data real">
							<input class="input" type="number" name="priority" value="%val:usr:priority%" maxlength="20" style="text-align: right;" required="required">
                            <span class="sample">半角数字を入力してください。1→2→3の順でモジュールを読み込みます。</span><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							使用ステータス
						</dt><dd class="data real">
							<select class="input" name="status" value="%val:usr:status%" maxlength="20" style="text-align: right;" required="required">
								<option value="1" %val:usr:status:1%>ON</option>
								<option value="2" %val:usr:status:2%>OFF</option>
							</select>
							<br>
						</dd>
					</dl>
			<?php
			if((isset($includeFiles))&&(isset($moduleCode))){
				if(in_array('2',explode(',',$includeFiles))) include('exmod_'.$moduleCode.'/form/inc/custom_input.php');
			} ?>
		</div>
		<input type="hidden" name="detect" value="判定">
		<!-- HIDDEN_PARAM START -->
		<input type="hidden" name="moduleCategory" value="">
		<!-- moduleCodeはmoduleのディレクトリからexmod_を省いたもの -->
		<input type="hidden" name="moduleCode" value="%val:usr:moduleCode%">
		<input type="hidden" name="settingCode" value="%val:usr:settingCode%">
		<input type="hidden" name="settingID" value="%val:usr:settingID%">
		<input type="hidden" name="settingParam1" value="%val:usr:settingParam1%">
		<input type="hidden" name="settingParam2" value="%val:usr:settingParam2%">
		<!-- HIDDEN_PARAM END -->
		<input class="submit" type="submit" name="submit" value="更新する">
	</form>
<!-- SMP_TEMPLATE_FORM end -->

<!-- SMP_TEMPLATE_FOOTER start -->
<!-- SMP_TEMPLATE_FOOTER end -->

</div>
<!-- 編集不可 end -->


</center>

<?php
if((isset($includeFiles))&&(isset($moduleCode))){
	if(in_array('3',explode(',',$includeFiles))) include('exmod_'.$moduleCode.'/form/inc/scripts.php');
} ?>

<?php include ('ex_module/lib/cng_form_functions.php');// 更新処理の読み込み ?>
</body>
</html>
