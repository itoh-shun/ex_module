<?php
echo <<<EOD
<div class="header_wrapper clearfix">
	<h1><a href="#">システム名</a></h1>
	<div class="gnavi_wrapper clearfix">
		<div class="sp_menu">
			<a href="javascript:click_sp_menu();"><i class="fas fa-bars"></i></a>
		</div><!-- login_user end -->
		<div class="login_user">
			<a href="javascript:click_user_menu();"><i class="fas fa-user-cog"></i></a>
		</div><!-- login_user end -->
		<ul class="gnavi">
			<li class="home"><a href="#"><i class="fas fa-home"></i></a></li>
			<li><a href="#">ダミーメニュー1</a></li>
			<li><a href="#">ダミーメニュー2</a></li>
			<li><a href="#">ダミーメニュー3</a></li>
		</ul>
		<div class="user_menu" style="display: none;">
			<ul>
				<li class="user_name"><i class="fas fa-user-circle"></i>ログインユーザー名</li>
				<li><a href="#"><i class="fas fa-key"></i>パスワード変更</a></li>
				<li><a href="%form:act:logout%"><i class="fas fa-sign-out-alt"></i>ログアウト</a></li>
			</ul>
		</div><!-- user_menu end -->
		<div class="sp_gnavi" style="display: none;">
			<ul>
				<li class="user_name"><i class="fas fa-user-circle"></i>ログインユーザー名</li>
				<li><a href="#"><i class="fas fa-home"></i>システムTOP</a></li>
				<li><a href="#"><i class="fas fa-chevron-circle-right"></i>ダミーメニュー1</a></li>
				<li><a href="#"><i class="fas fa-chevron-circle-right"></i>ダミーメニュー2</a></li>
				<li><a href="#"><i class="fas fa-chevron-circle-right"></i>ダミーメニュー3</a></li>			
				<li><a href="#"><i class="fas fa-key"></i>パスワード変更</a></li>
				<li><a href="%form:act:logout%"><i class="fas fa-sign-out-alt"></i>ログアウト</a></li>
			</ul>
		</div><!-- user_menu end -->
	</div><!-- gnavi end -->
</div><!-- header_wrapper end -->
EOD;
?>
