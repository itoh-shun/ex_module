<?php 
//<!-- SMP_DYNAMIC_PAGE DISPLAY_ERRORS=ON NAME=EX_MODULE_TEMPLATE -->
define('SMP_TEMPLATE_FORM','
<!-- SMP_TEMPLATE_FORM start -->
<!-- フォームを挿入します。-->
<!-- SMP_TEMPLATE_FORM end -->
');

define('SMP_TEMPLATE_HEADER','
<!-- SMP_TEMPLATE_HEADER start -->
<!-- ヘッダを挿入します。-->
<!-- SMP_TEMPLATE_HEADER end -->
');

define('SMP_TEMPLATE_FOOTER','
<!-- SMP_TEMPLATE_FOOTER start -->
<!-- フッタを挿入します。-->
<!-- SMP_TEMPLATE_FOOTER end -->
');


$customPath = "ex_module/input";
require_once "ex_module_app/routes/web.php";
