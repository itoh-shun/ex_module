/* myarea blueberry
----------------------------*/

/* header
----------------------------*/
.header_wrapper {
	height: 60px;
	background: #0a2646;
}
.header_wrapper h1 {
	float: left;
	width: 300px;
	height: 60px;
	color: #fff;
	font-size: 20px;
	font-weight: normal !important;
	text-align: left !important;
	line-height: 140% !important;
	padding: 15px 0px 10px 15px !important;
}
.header_wrapper h1 a {
	color: #fff;
	text-decoration: none;
}
.header_wrapper .gnavi_wrapper {
	float: right;
	width: calc(100% - 300px); /* システム名の長さを除く */
	color:  #c0e2fa;
}
.header_wrapper .gnavi_wrapper a {
	color: #fff;
	text-decoration: none;
}

.gnavi_wrapper .login_user {
	position: relative;
	float: right;
	display: inline-block;
	background: #123f77;
	box-sizing: border-box;
	font-size: 20px;
	line-height: 140%;
	text-align: left;
}
.gnavi_wrapper .login_user a {
 	display: table-cell;
 	height: 60px;
 	padding: 0px 15px;
  	vertical-align: middle;
  	cursor: pointer;
}
.user_menu {
	background: #2d65a8;
	position: absolute;
	box-shadow: 0px 2px 4px gray;
	font-size: 14px;
	text-align: left !important;
	top: 60px;
	right: 0px;
	z-index: 10;
}
.user_menu ul li.user_name {
	padding: 10px;
}
.user_menu ul li {
	max-width: 170px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}
.user_menu ul li a {
	display: block;
	border-top: 1px solid #123f77;
	padding: 10px;
}
.user_menu ul li i {
	margin-right: 5px;
}

.gnavi_wrapper ul.gnavi {
	float: right;
	display: block;
}
.gnavi_wrapper ul.gnavi li {
	float: left;
	display: inline-block;
	background: #123459;
	border-left: 1px solid #0a2646;
	box-sizing: border-box;
 	font-size: 16px;
 	line-height: 140%;
 }
 .gnavi_wrapper ul.gnavi li a {
 	display: table-cell;
 	height: 60px;
 	padding: 0px 15px;
  	vertical-align: middle;
  	cursor: pointer;
 }
 .gnavi_wrapper ul.gnavi li.home {
 	font-size: 20px;
 }

.gnavi_wrapper .sp_menu {
	display: none;
}

@media screen and (min-width:900px) {
	.sp_gnavi {
		display: none;
	}
}

@media screen and (max-width:899px) {
	.user_menu {
		display: none;
	}
	
	.gnavi_wrapper .login_user {
		display: none;
	}
	.gnavi_wrapper ul.gnavi {
		display: none;
	}

	.gnavi_wrapper .sp_menu {
		position: relative;
		float: right;
		display: inline-block;
		background: #123f77;
		box-sizing: border-box;
		font-size: 20px;
		line-height: 140%;
		text-align: left;
	}
	.gnavi_wrapper .sp_menu a {
	 	display: table-cell;
	 	height: 60px;
	 	padding: 0px 15px;
	  	vertical-align: middle;
	  	cursor: pointer;
	}
	.sp_gnavi {
		background: #2d65a8;
		position: absolute;
		box-shadow: 0px 2px 4px gray;
		font-size: 14px;
		text-align: left !important;
		top: 60px;
		right: 0px;
		z-index: 10;
	}
	.sp_gnavi ul li.user_name {
		padding: 10px;
	}
	.sp_gnavi ul li {
		max-width: 250px;
		line-height: 140%;
	}
	.sp_gnavi ul li a {
		display: block;
		border-top: 1px solid #123f77;
		padding: 10px;
	}
	.sp_gnavi ul li i {
		margin-right: 5px;
	}
}

/* title
----------------------------*/
.cont_wrapper h2 {
	position: relative;
	width: 100%;
	background: #fff;
	border-top: 2px solid #d5e3ec;
	border-bottom: 1px solid #cfdde6;
	color: #092444;
	font-size: 24px;
	font-weight: normal;
	text-align: left;
	margin: 0px auto 0px auto;
	padding: 15px 10px;
}
.cont_wrapper h2::after {
	position: absolute;
	top: -2px;
	left: 0;
	z-index: 2;
	content: '';
	width: 20%;
	height: 2px;
	background-color: #2d65a8;
}

.cont_wrapper h3 {
	position: relative;
	width: 100%;
	border-bottom: 2px solid #c0e2fa;
	color: #123f77;
	font-size: 20px;
	font-weight: bold;
	text-align: left;
	margin: 30px auto 20px auto;
	padding: 0px 5px 10px 5px;
}
.cont_wrapper h3::after {
	position: absolute;
	bottom: -2px;
	left: 0;
	z-index: 2;
	content: '';
	width: 20%;
	height: 2px;
	background-color: #2d65a8;
}

.cont_wrapper h4 {
	width: 100%;
	border-left: 5px solid #c0e2fa;
	color:#123f77;
	font-size: 18px;
	font-weight: bold;
	text-align: left;
	margin: 30px auto 10px auto;
	padding: 5px 5px 5px 5px;
}

/* layout
----------------------------*/
.cont_wrapper {
	width: 98%;
	margin: 0px auto 0px auto;
	padding: 30px 0px;
}
.cont_box {
	background: #fff;
	padding: 20px 30px 40px 30px;
	text-align: left;
}
@media screen and (max-width:639px) {
	.cont_box {
		padding: 15px 10px 30px 10px;
	}
}

/* content
----------------------------*/
main {
	padding: 0px 0px 30px 0px;
}


/*送信ボタンを装飾する
----------------------------*/

input[type="submit"] {
	border-width: 0px;
}

.btn_wrapper a , .btn_wrapper input[type="submit"] {
	display: inline-block;
	width: 90%;
	max-width: 300px;
	background: #2e6ea8;
	border-bottom: 2px solid #0a2646;
	border-radius: 4px;
	box-sizing: border-box;
	color: #fff !important;
	font-size: 1.125rem;
	-webkit-font-smoothing: antialiased;
	font-weight: bold;
	text-decoration: none;
	text-align: center;
	letter-spacing: 1px;
	line-height: 140%;
	padding: 15px 10px;
	margin: 0px 5px 30px 5px;
	cursor: pointer;
}

.btn_wrapper a:hover ,.btn_wrapper input[type="submit"]:hover {
	filter: alpha(opacity=90);
	-ms-filter: alpha(opacity=90);
	opacity: 0.9;
}
