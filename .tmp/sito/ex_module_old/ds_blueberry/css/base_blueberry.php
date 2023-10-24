/* base blueberry
----------------------------*/
* { font-family: "Noto Sans JP", "Hiragino Kaku Gothic ProN", "ヒラギノ角ゴ ProN W3", "Hiragino Sans", "ヒラギノ角ゴシック", "メイリオ", "Meiryo", "ＭＳ Ｐゴシック", "MS P Gothic", system-ui, sans-serif; }
body {
	width: 100%;
	background: #f6f6f6;
	color: #0a2646;
	font-size: 16px;
	line-height: 160%;
	margin: 0;
	padding: 0;
	-webkit-font-smoothing: antialiased;
	word-break: break-all;
}
.mincho {
  font-family: "ヒラギノ明朝 Pro W6","Hiragino Mincho Pro","HGS明朝E","HG明朝E","ＭＳ 明朝",serif;
}

a { text-decoration: underline; color: #ec8484; }
a:hover { text-decoration: none; color: #ec8484; }

hr {
	border-bottom: 1px dashed #dccda7;
	margin: 20px auto 10px auto;
}

/* button
----------------------------*/
.btn_wrapper {
	text-align: center;
	margin: 30px auto;
}
.btn_wrapper a {
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
a.btn_black {
	background: #444;
	border-bottom: 2px solid #000;
}
a.btn_mint {
	background: #4aaead;
	border-bottom: 2px solid #257b7a;
}
a.btn_pink {
	background: #ec8484;
	border-bottom: 2px solid #be5252;
}

.btn_wrapper a:last-child {
	margin-bottom: 0px;
}

.btn_wrapper a:hover {
	filter: alpha(opacity=90);
	-ms-filter: alpha(opacity=90);
	opacity: 0.9;
}



/* button_mini_size
----------------------------*/
a.btn_mini  {
	display: inline-block;
	background: #2e6ea8;
	border-bottom: 2px solid #0a2646;
	border-radius: 4px;
	box-sizing: border-box;
	color: #fff !important;
	font-size: 0.875rem;
	-webkit-font-smoothing: antialiased;
	font-weight: bold;
	text-decoration: none;
	text-align: center;
	letter-spacing: 1px;
	line-height: 140%;
	padding: 7px 15px;
	margin: 5px 5px 5px 5px;
	cursor: pointer;
}
a.btn_mini:hover {
	filter: alpha(opacity=90);
	-ms-filter: alpha(opacity=90);
	opacity: 0.9;
	text-decoration: none;
}

a.btn_mini2 {
	display: inline-block;
	background: #c0e2fa;
	border: 1px solid #8abfe4;
	box-sizing: border-box;
	color: #123f77 !important;
	font-size: 0.875rem;
	-webkit-font-smoothing: antialiased;
	font-weight: bold;
	text-decoration: none;
	text-align: center;
	letter-spacing: 1px;
	line-height: 140%;
	padding: 5px 10px;
	margin: 5px 5px 5px 5px;
	cursor: pointer;
}
a.btn_mini2:hover {
	filter: alpha(opacity=90);
	-ms-filter: alpha(opacity=90);
	opacity: 0.9;
	text-decoration: none;
}

/* btn_square
----------------------------*/
.btn_square_wrapper {
	text-align: center;
	margin-bottom: 30px;
}
.btn_square {
	position: relative;
	display: inline-block;
	width: 45%;
	max-width: 400px;
	background: #fff;
	border: 1px solid #478ac7;
	border-radius: 4px;
	box-sizing: border-box;
	text-align: left;
	margin: 10px 10px 20px 10px;
	padding: 15px 20px;
	vertical-align: top;
}
.btn_square a {
	display: block;
	color: #2e6ea8;
	font-size: 20px;
	box-sizing: border-box;
	font-weight: bold;
	text-decoration: none;
}
.btn_square span {
	display: block;
	font-size: 12px;
	font-weight: normal;
	line-height: 140%;
	margin-top: 5px;
}

.btn_square::after {
	content: "";
	position: absolute;
	bottom: 10px;
	right: 10px;
	width: 0;
	height: 0;
	border-style: solid;
	border-width: 0 0 10px 10px;
	border-color: transparent transparent #57bddc transparent;
}

.no_link {
	background: none;
	border: none;
}
.no_link::after {
	content: none;
}

@media screen and (max-width:639px) {
	.btn_square {
		width: 95%;
		max-width: 400px;
		margin: 10px auto 20px auto;
	}

}





/* footer
----------------------------*/
footer {
	color: #999;
	font-size: 12px;
	padding: 15px 15px;
}

footer p {
	text-align: left;
}
.copyright {
	text-align: center;
}

/* SPIRAL SEAL
----------------------------*/
table.spiralSeal {
	margin: 10px 20px;
}



/* box説明文
----------------------------*/
.tips_box_1 {
    background-color: #f4f4f4;
    padding: 2em;
    margin: 0 1em;
}