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

-->
</style>


</head>
<body class="body">
<center>

<!-- 編集不可 start -->
<div class="body_tbl">

<!-- SMP_TEMPLATE_HEADER start -->

	<!--SMP:DISP:REG:START-->
	<p class="header_rmesg">必要事項をご入力の上、送信ボタンを押してください。</p>
	<!--SMP:DISP:REG:END-->

<!-- SMP_TEMPLATE_HEADER end -->

<!-- SMP_TEMPLATE_FORM start -->
	<form method="post" action="/regist/Reg2">
		<div class="smp_tmpl">
					<dl class="cf">
						<dt class="title">
							ページタイトル
						</dt><dd class="data ">
							
							<input class="input $errorInputColor:pageTitle$" type="text" name="pageTitle" value="$pageTitle$" maxlength="32" >
							<br>
							<span class="msg">$error:pageTitle$</span>
						</dd>
					</dl>
<!-- 					<dl class="cf">
						<dt class="title">
							メニューID
						</dt><dd class="data ">
							
							<input class="input $errorInputColor:menueID$" type="text" name="menueID" value="$menueID$" maxlength="32" >
							<br>
							<span class="msg">$error:menueID$</span>
						</dd>
					</dl> -->
					<dl class="cf">
						<dt class="title">
							シールID
						</dt><dd class="data ">
							
							<select class="input " type="text" name="sealID" >
								<option value="">SPIRALシールを設定しない</option>
<?php include ('ex_module/lib/reg_form_functions.php'); ?>
<?php SPIRAL_DB_to_selections('ExMod_sealDB', 'sealID', 'sealTitle', 'sealID', array(), true, 'select'); ?>
							</select>
							<br>
							<span class="msg">$error:sealID$</span>
						</dd>
					</dl>
<!-- 					<dl class="cf">
						<dt class="title">
							ページURL
						</dt><dd class="data ">
							
							<input class="input $errorInputColor:pageURL$" type="text" name="pageURL" value="$pageURL$" maxlength="128" >
							<br>
							<span class="msg">$error:pageURL$</span>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							ページタイプ
						</dt><dd class="data multi2">
							<ul class="radio cf">
								<li><label><input class="input" type="radio" name="pageType" value="1" $pageType:r1$><span>フォーム</span></label></li>
								<li><label><input class="input" type="radio" name="pageType" value="4" $pageType:r4$><span>一覧表</span></label></li>
								<li><label><input class="input" type="radio" name="pageType" value="5" $pageType:r5$><span>単票</span></label></li>
								<li><label><input class="input" type="radio" name="pageType" value="6" $pageType:r6$><span>マイエリア</span></label></li>
							</ul>
							<input type="hidden" value="" name="pageType">
							<span class="msg">$error:pageType$</span>
						</dd>
					</dl> -->
			</div>
		<input type="hidden" name="detect" value="判定">
		<!-- HIDDEN_PARAM START -->
		$form:hidden$<input type="hidden" name="id" value="$id$">
<input type="hidden" name="settingCode" value="$settingCode$">
		<!-- HIDDEN_PARAM END -->
		<input class="submit" type="submit" name="submit" value="送信">  
	</form>
<!-- SMP_TEMPLATE_FORM end -->

<!-- SMP_TEMPLATE_FOOTER start -->
<!-- SMP_TEMPLATE_FOOTER end -->

</div>
<!-- 編集不可 end -->


</center>

</body>
</html>

