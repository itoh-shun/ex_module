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

-->
</style>


</head>
<body class="body">
<center>

<!-- 編集不可 start -->
<div class="body_tbl">

<!-- SMP_TEMPLATE_HEADER start -->
	<h1>拡張モジュール設定追加</h1>

	<!--SMP:DISP:REG:START-->
	<p class="header_rmesg"></p>
	<!--SMP:DISP:REG:END-->


<!-- SMP_TEMPLATE_HEADER end -->

<!-- SMP_TEMPLATE_FORM start -->
	<form method="post" action="/regist/Reg2" target="_parent">
		<div class="smp_tmpl">
					<dl class="cf">
						<dt class="title">
							追加する拡張モジュール <span class="need">＊必須</span>
						</dt><dd class="data ">

							<!-- <input class="input " type="text" name="moduleCode" value="%val:usr:moduleCode%" maxlength="128" > -->
							<select class="input " type="text" name="moduleCode" id="moduleCode" maxlength="128" required="required">
							<?php include ('ex_module/lib/reg_form_functions.php'); ?>
							<?php SPIRAL_DB_to_selections('ExMod_moduleMst', 'moduleCode', 'moduleTitle', 'moduleCode', array(), true, 'select'); ?>
							</select>
							<br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							設定タイトル <span class="need">＊必須</span>
						</dt><dd class="data ">

							<input class="input " type="text" name="settingTitle" id="settingTitle" value="" maxlength="128" required="required">
							<br>
							<span class="sample">拡張モジュール適応ページ一覧で表示する項目となるので、識別しやすいタイトルをつけてください。例 [拡張モジュール名]：項目○○（全角64文字以内）</span><br>
						</dd>
					</dl>
			</div>
		<input type="hidden" name="detect" value="判定">
		<!-- 管理ID -->
		<input type="hidden" name="SMPFORM" value="%smpform:exmodReg%">
		<input type="hidden" name="settingID" value="%val:usr:settingID%">
		<input type="hidden" name="settingCode" value="%val:usr:settingCode%">
		<input type="hidden" name="status" value="2">
		<input type="hidden" name="priority" value="1">
		<input name="thankyou_url" type="hidden" value="https://<?= htmlspecialchars($_SERVER['SERVER_NAME'], ENT_QUOTES) ?>%url/card:exmod_pageCard%">
		<input class="submit" type="submit" name="submit" value="拡張モジュールを追加する">
	</form>
<!-- SMP_TEMPLATE_FORM end -->

<!-- SMP_TEMPLATE_FOOTER start -->
<!-- SMP_TEMPLATE_FOOTER end -->

</div>
<!-- 編集不可 end -->


</center>

<script>
var moduleCode = document.getElementById('moduleCode'); // 追加する拡張モジュール
function setText() { // 選択されているプルダウン(追加する拡張モジュール)の値を設定タイトルの入力欄に記載
	document.getElementById("settingTitle").value = moduleCode.options[moduleCode.selectedIndex].textContent;
}
setText(); // ページアクセス時
moduleCode.addEventListener('change', (event) => { // 選択肢を変更したとき
	setText();
});
</script>
</body>
</html>
