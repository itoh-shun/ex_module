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
	<h1>メニュー登録フォーム</h1>

	<!--SMP:DISP:REG:START-->
	<p class="header_rmesg">必要事項をご入力の上、送信ボタンを押してください。</p>
	<!--SMP:DISP:REG:END-->

<!-- SMP_TEMPLATE_HEADER end -->

<!-- SMP_TEMPLATE_FORM start -->
	<form method="post" action="/regist/Reg2">
		<div class="smp_tmpl">
					<dl class="cf">
						<dt class="title">
							メニュータイトル <span class="need">＊必須</span>
						</dt><dd class="data ">
							
							<input class="input $errorInputColor:menueTitle$" type="text" name="menueTitle" value="$menueTitle$" maxlength="128" required="required">
							<br>
							<span class="msg">$error:menueTitle$</span>
						</dd>
					</dl>

					<dl class="cf">
						<dt class="title">
							メニュー設定内容
						</dt><dd class="data real">
							<div id="duplicate_parent">
								<div class="origin">
									表示名：<input class="input" type="text" name="setting_label" onchange="set_param_from_input();" style="width: 100%"><br>
									URL：<input class="input" type="text" name="setting_url" onchange="set_param_from_input();" style="width: 100%"><br>
									<button onclick="delete_element(this);return false;">ーこの条件を消去する</button><br>
									<hr>
								</div>
							</div>
							<button onclick="duplicate_element(document.getElementsByClassName('origin')[0],'duplicate_parent');return false;">＋条件を追加する</button><br>
						</dd>
					</dl>

			</div>
		<input type="hidden" name="detect" value="判定">
		<!-- HIDDEN_PARAM START -->
		$form:hidden$		<!-- HIDDEN_PARAM END -->
		<input class="submit" type="hidden" name="menueContents" value="">  
		<input class="submit" type="submit" name="submit" value="送信">  
	</form>
<!-- SMP_TEMPLATE_FORM end -->

<!-- SMP_TEMPLATE_FOOTER start -->
<!-- SMP_TEMPLATE_FOOTER end -->

</div>
<!-- 編集不可 end -->


</center>
<script type="text/javascript">
	
	function duplicate_element(node,id_name){
		var dup_element = node.cloneNode(true);
		// 複製ノードのvalue値削除
		// dup_element.childNodes[1].value = '';
		// dup_element.childNodes[5].value = '';
		// dup_element.childNodes[8].value = '';
		document.getElementById(id_name).appendChild(dup_element);
		set_param_from_input();
		return false;
	}
	function delete_element(node){
		if(document.getElementsByClassName('origin').length>1){
			node.parentNode.id = 'delete';
			document.getElementById('duplicate_parent').removeChild(document.getElementById('delete'));
			set_param_from_input();
		}else{
			alert('入力欄を削除できません。');
		}
		return false;
	}
	function set_param_from_input(){
		var param = [];
		for (var i = 0; i < document.getElementsByName('setting_url').length; i++) {
			console.log(document.getElementsByName('setting_url')[i]);
			param.push({
				"label":split_comma_to_array(document.getElementsByName('setting_label')[i].value),
				"url":split_comma_to_array(document.getElementsByName('setting_url')[i].value)
			});
		}

		document.getElementsByName('menueContents')[0].value = JSON.stringify(param).substr(0,8000);
	}
	function split_comma_to_array(str){
		console.log(str);
		return str?str.trim().split(','):[];
	}


</script>
</body>
</html>

