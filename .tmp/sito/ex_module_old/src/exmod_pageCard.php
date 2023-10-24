<!DOCTYPE html>
<html id="SMP_STYLE">
  <head>
    <title>%val:usr:pageTitle% - 拡張モジュール適応ページ一覧</title>
    <?php
// キャッシュリセット
if($SPIRAL->getParam('settingCode')){
	include_once('ex_module/lib/functions.php');
	(new exModuleSettings($SPIRAL->getParam('settingCode')))->reset_cache();
}else{ ?>
    <meta http-equiv="refresh" content="0;URL=%url/card:exmod_pageCard%&settingCode=%val:usr:settingCode%">
    <?php } ?>
    <?php include ('ex_module/ds_blueberry/src/meta_link.php'); ?>
    <style type="text/css">
<!--

<?php include ('ex_module/ds_blueberry/css/common.php'); ?>
<?php include ('ex_module/ds_blueberry/css/base_blueberry.php'); ?>
<?php include ('ex_module/ds_blueberry/css/myarea_blueberry.php'); ?>
<?php include ('ex_module/ds_blueberry/css/list_card_blueberry.php'); ?>

-->


</style>
    <?php include ('ex_module/ds_blueberry/src/menu_js.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/modaal@0.4.4/dist/js/modaal.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/modaal@0.4.4/dist/css/modaal.min.css">
  </head>
  <body class="body">
    <center>
      <div class="body_tbl">
      <?php //include ('ex_module/ds_blueberry/src/header.php'); ?>
      <div class="cont_wrapper">
      <h2>%val:usr:pageTitle% - 拡張モジュール適応ページ一覧</h2>
      <div class="cont_box">
      <form method="post" action="/regist/is">
        <input type="hidden" name="detect" value="判定">
        <!-- 管理ID -->
        <input type="hidden" name="SMPFORM" value="%smpform:pageCngForm%">
        <input class="input " type="hidden" name="pageTitle" value="%val:usr:pageTitle%">
        <input class="input " type="hidden" name="menueID" value="%val:usr:menueID%">
        <input class="input " type="hidden" name="pageURL" value="%val:usr:pageURL%">
        <input type="hidden" value="%val:usr:pageType:id%" name="pageType">
        <input type="hidden" name="id" value="%val:sys:id%">
        <input type="hidden" name="settingCode" value="%val:usr:settingCode%">
        <input type="hidden" name="thankyou_url" value="https://<?= htmlspecialchars($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], ENT_QUOTES) ?>">
        <div class="btn_wrapper">

			<input class="submit"  type="submit" name="submit" value="ページ情報を更新する" class="button_icon">
		</div>
        
        <h3>使用方法</h3>
        <div class="tips_box_1"><p>1.「拡張モジュール設定を追加」をクリック。
          <br>2.追加するモジュールを選択、タイトルを入力して拡張モジュールを追加。
          <br> 3.適応ページに戻り設定タイトルをクリック。
        　<br>4.設定ページにチェック、読込優先度を入力（1→2→3の順に読み込みます）、使用ステータスをONに変更。
        　<p>※使用ステータスがOFFになっていると、モジュールが適応されません。※適応するページのHTML 雛形を変更する必要があります。</p>
          <br>詳しい使い方は、アプリのドキュメントからマニュアルをご確認ください。 不具合・バグを発見した場合 <a href="https://www.pi-pe.co.jp/area/bbs/topic/1050/fHUR2f/M?S=lckdkc2mhrhqj">不具合・改善掲示板</a>にご報告お願いします。
         </p>
        </div>
      </form>
      <div class="btn_wrapper">
      <a href="%url/card:module_reg%" class="iframe">拡張モジュール設定を追加</a>
      </div>
<h3>ページ検索</h3>
%sf:usr:ExMod_search:mstfilter% 
      <!-- 			<div class="btn_wrapper">
				<a href="%url/card:exmod_pageCard%&settingCode=%val:usr:settingCode%">このページのキャッシュを削除する</a>
			</div> -->
      <div class="btn_wrapper">
      <a href="%url/table:back%"class="btn_black">ページ一覧に戻る</a>
      </div>
      </div>
      <!-- content end-->
      </div>
      <!-- cont_box end -->
      </div>
      <!-- cont_wrapper end -->
      </div>
      <!-- body_tbl end -->
    </center>
    <?php include ('ex_module/ds_blueberry/src/footer.php'); ?>
    <?php include ('ex_module/lib/module_list_scripts.php'); ?>
  </body>
</html>