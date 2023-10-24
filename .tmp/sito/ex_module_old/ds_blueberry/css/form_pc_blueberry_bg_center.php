/* formPC blueberry 20200831
----------------------------*/

/* ページ全体 
----------------------------*/
/* 確認ページ用の追記 */
.attention_box {
	display: block;
	width: 100%;	
	max-width: 1000px;
	background: #fff;
	border: 2px solid #2d65a8;
	box-sizing: border-box;
	color: #2d65a8;
	font-size: 100%;
	font-weight: bold;
	text-align: left;
	padding: 10px 10px;
	margin: 10px auto 0 auto;
}

input::placeholder {
	color: #ccc;
}
input::-webkit-input-placeholder {
	color: #ccc;
}
input:-ms-input-placeholder {
	color: #ccc;
}

/* 見出し ※色変え対象
----------------------------*/
#SMP_STYLE h1 {
	background: #0a2646;
	color: #fff;
	font-size: 20px;
	font-weight: bold;
	letter-spacing: 1px;
	line-height: 140%;
	text-align: center;
	margin: 0;
	padding: 15px 10px 15px 10px;
}

#SMP_STYLE h2 {
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
#SMP_STYLE h2::after {
	position: absolute;
	bottom: -2px;
	left: 0;
	z-index: 2;
	content: '';
	width: 20%;
	height: 2px;
	background-color: #2d65a8;
}

#SMP_STYLE h3 {
	position: relative;
	width: 100%;
	border-left: 7px solid #2d65a8;
	color: #123f77;
	font-size: 18px;
	font-weight: bold;
	text-align: left;
	margin: 30px auto 10px auto;
	padding: 5px 5px 5px 5px;
}

/* 外枠
----------------------------*/
#SMP_STYLE .body_tbl {
	width: 100%;
	margin: 0 auto;
}

/* 見出し画像 ※変更なし
----------------------------*/
#SMP_STYLE .header_img_smartphone { display: none; }
#SMP_STYLE .header_img_tablet { display: none; }
#SMP_STYLE .header_img_pc { display: block; }

/* 見出しの補足説明
----------------------------*/
#SMP_STYLE .header_text {
	width: 90%;
	max-width: 1000px;
	color: #333333;
	font-weight: normal;
	text-align: left;
	margin: 20px auto 0 auto;
	padding: 0;
}

/* 入力時の説明
----------------------------*/
#SMP_STYLE .header_rmesg {
	width: 90%;
	max-width: 1000px;
	color: #333333;
	font-weight: normal;
	text-align: left;
	margin: 20px auto 0 auto;
	padding: 0;
}

/* 入力エラー時の説明
----------------------------*/
#SMP_STYLE .header_emesg {
	width: 90%;
	max-width: 1000px;
	background: #fff;
	border: 2px solid #dd0000;
	color: #dd0000;
	font-weight: bold;
	text-align: left;
	margin: 20px auto 0 auto;
	padding: 10px 20px 10px 20px;
}

/* 入力項目
----------------------------*/
#SMP_STYLE .smp_tmpl {
	width: 95%;
	max-width: 1000px;
	text-align: left;
	margin: 15px auto 0px auto;
	padding: 20px 5px 30px 5px;
}

/* フォーム行
----------------------------*/
#SMP_STYLE dl {
	position: relative;
	width: 100%;
	border-bottom: 1px dotted #ddd;
	margin: 0;
	padding: 13px 0 0 0;
}

#SMP_STYLE dl:first-child {
	border-top: 1px dotted #ddd;
}
#SMP_STYLE dl.top {
	border-top: 1px dotted #ddd;
}
/* ソース編集時に使用 */
#SMP_STYLE dl.last {
	border-bottom: 0;
}

/* 項目名
----------------------------*/
#SMP_STYLE dt.title {
	display: inline-block;
	width: 33%;
	color: #123f77;
	font-weight: bold;
	letter-spacing: 1px;
	line-height: 140%;
	text-align: left;
	margin: 0;
	padding: 18px 15px 18px 10px;
	vertical-align: top;
}

/* 注意事項
----------------------------*/
#SMP_STYLE dt.title .caution {
	display: block;
	width: 95%;
	color: #336699;
	font-size: 87.5%;
	font-weight: normal;
	line-height: 130%;
	text-align:left;
	padding: 10px 0 0 0;
}

/* 項目入力部
----------------------------*/
#SMP_STYLE dd.data {
	display: inline-block;
	width: 67%;
	color: #333;
	font-weight: bold;
	text-align: left;
	margin: 0;
	padding: 18px 0;
}

/* inputタグ
----------------------------*/
#SMP_STYLE .input {
	width: 90%;
	border: 1px solid #666;
	border-radius: 3px 3px 3px 3px;
	box-sizing: border-box;
	color: #333;
	font-size: 108%;
	text-align: left;
	margin: 0px 5px 8px 5px;
	padding: 10px;
}

.input_button_icon{
  display       : inline-block;
  border-radius : 3%;          /* 角丸       */
  font-size     : 18pt;        /* 文字サイズ */
  text-align    : center;      /* 文字位置   */
  cursor        : pointer;     /* カーソル   */
  padding       : 15px 18px;   /* 余白       */
  background    : #31c2b0;     /* 背景色     */
  color         : rgba(255, 255, 255, 0.88);     /* 文字色     */
  line-height   : 1em;         /* 1行の高さ  */
  transition    : .3s;         /* なめらか変化 */
  box-shadow    : 1px 1px #666666;  /* 影の設定 */
  border        : 2px solid #31c2b0;    /* 枠の指定 */
    ;}

/* 入力欄を２つ並べる場合 */
.input_line ul li {
	box-sizing: border-box;
	width: 45%;
	display: inline-block;
	box-sizing: border-box;
	vertical-align: top;
}
.input_line ul li input {
	width: calc(90% - 35px) !important;
}

/* フィールドごとのデザイン
----------------------------*/
#SMP_STYLE .zipcode li.code01 input {
	width: 60px;
}

#SMP_STYLE .zipcode li.code02 input {
	width: 70px;
}

#SMP_STYLE .phone li.num01 input {
	width: 70px;
}

#SMP_STYLE .phone li.num02 input {
	width: 70px;
}

#SMP_STYLE .phone li.num03 input {
	width: 70px;
}

#SMP_STYLE .price input {
	width: 200px;
}

#SMP_STYLE .num input {
	width: 120px;
}

#SMP_STYLE .integer input {
	width: 170px;
}

#SMP_STYLE .real input {
	width: 170px;
}

#SMP_STYLE .pass input {
	width: 180px;
}

#SMP_STYLE .epass input {
	width: 160px;
}

#SMP_STYLE .time input {
	width: 50px;
}

#SMP_STYLE .time .year {
	width: 70px;
}

#SMP_STYLE ul,#SMP_STYLE li {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

#SMP_STYLE .zipcode ul li,
#SMP_STYLE .phone ul li,
#SMP_STYLE .time ul li {
	float: left;
	width: auto;
	margin: 0 3px 0 0;
	padding: 0;
}

#SMP_STYLE .multi1 label {
	display: block;
	float: left;
	min-width: 135px;
	text-align: left;
	margin: 0 0 7px 0;
	padding: 0 10px;
}

#SMP_STYLE .multi1 label input {
	display: block;
	float: left;
	width: 1em;
	height: 1em;
	box-shadow: 0 0 0 0 rgba(0, 0, 0, 0) inset;
	border-radius: 0 0 0 0;
	margin: 0.2em 0 0 0;
	padding: 0;
	overflow: hidden;
}

#SMP_STYLE .multi1 label span {
	display: block;
	font-weight: normal;
	margin: 0 0 0 30px;
}

#SMP_STYLE .multi2 li {
	display: inline;
	float: left;
	min-width: 135px;
	text-align: left;
	margin: 0;
	padding: 0 5px 2px 10px;
	clear: both;
}

#SMP_STYLE .multi2 label input {
	display: block;
	float: left;
	width: 1em;
	height: 1em;
	box-shadow: 0 0 0 0 rgba(0, 0, 0, 0) inset;
	border-radius: 0 0 0 0;
	margin: 0.2em 0 0 0;
	padding: 0;
	overflow: hidden;
}

#SMP_STYLE .multi2 label span {
	display: block;
	font-weight: normal;
	margin: 0 0 0 30px;
}

#SMP_STYLE .multi2 .radio input {
	border-radius: 1em;
}

#SMP_STYLE select {
	width: 90%;
	max-width: 500px;
	height: 46px;
	font-size: 1rem;
	margin-bottom: 8px;
	padding-left: 10px;
}

#SMP_STYLE textarea {
	width: 90%;
	border: 1px solid #666;
	border-radius: 3px 3px 3px 3px;
	box-sizing: border-box;
	color: #333;
	font-size: 100%;
	text-align: left;
	margin: 0px 5px 8px 5px;
	padding: 10px;
}

#SMP_STYLE .image input {
	width: auto;
}
#SMP_STYLE .file input {
	width: auto;
}
#SMP_STYLE input.clear {
	width: 55px;
	text-align: center;
}

/* 送信ボタン
----------------------------*/
#SMP_STYLE input.submit {
border: none;
	cursor: pointer;
	outline: none;
	padding: 0;
	-webkit-box-sizing: border-box;
	-webkit-appearance: button;
	appearance: none;
	/* reset end */
	width: 98%;
	max-width: 300px;
	min-height:  60px;
	border: hidden;
	background: #666;
	border-bottom: 3px solid #333;
	border-radius: 4px;
	color: #fff;
	font-size: 1.125rem;
	-webkit-font-smoothing: antialiased;
	font-weight: bold;
	text-align: center;
	letter-spacing: 1px;
	margin: 0px 5px 30px 5px;
	cursor: pointer;

}

#SMP_STYLE input.submit:hover {
	filter: alpha(opacity=90);
	-ms-filter: alpha(opacity=90);
	opacity: 0.9;
}

#SMP_STYLE input.image {
	width: auto;
	border: none;
	margin: 40px 0 40px 0;
	padding: 0;
	vertical-align: middle;
}

/* 確認ページの戻るボタン */
#SMP_STYLE input[name="SMPFORM_BACK"] {
	border: none;
	cursor: pointer;
	outline: none;
	padding: 0;
	-webkit-box-sizing: border-box;
	-webkit-appearance: button;
	appearance: none;
	/* reset end */
	width: 98%;
	max-width: 300px;
	min-height:  60px;
	border: hidden;
	background: #666;
	border-bottom: 3px solid #333;
	border-radius: 4px;
	color: #fff;
	font-size: 1.125rem;
	-webkit-font-smoothing: antialiased;
	font-weight: bold;
	text-align: center;
	letter-spacing: 1px;
	margin: 0px 5px 30px 5px;
	cursor: pointer;
}

#SMP_STYLE input[name="SMPFORM_BACK"]:hover {
	filter: alpha(opacity=90);
	-ms-filter: alpha(opacity=90);
	opacity: 0.9;
}


/* 例文
----------------------------*/
#SMP_STYLE .sample {
	display: inline-block;
	color: #666;
	font-size: 87.5%;
	font-weight: normal;
	text-align: left;
	line-height: 140%;
	margin-top: 5px;
}

/* 接頭語・接尾後
----------------------------*/
#SMP_STYLE .suffix {
	height: 40px;
	color: #333333;
	font-weight: normal;
	text-align: left;
	line-height: 40px;
}

/* 入力必須文字
----------------------------*/
#SMP_STYLE .need {
	display: inline-block;
	color: #dd0000;
	font-size: 14px;
	font-weight:normal;
	text-align:left;
}

/* エラーメッセージ
　(入力チェック時)
----------------------------*/
#SMP_STYLE .msg {
	display: block;
	color: #dd0000;
	font-size: 14px;
	font-weight: bold;
	line-height: 140%;
	text-align: left;
	margin: 0px 5px 5px 5px;
}

/* エラーメッセージ
　(サンキュー・締め切り・システムエラー)
----------------------------*/
#SMP_STYLE .sub_text {
	width: 95%;
	max-width: 1000px;
	color: #333333;
	font-weight: normal;
	text-align: center;
	padding: 0px;
	margin: 0px auto 40px auto;
}

/* 入力エラー時のボックス背景色
----------------------------*/
#SMP_STYLE .error {
	background: #FFE4E4;
}

/* スパイラルシール
----------------------------*/
.spiralSeal_wrapper table {
	width: 90% !important;
	max-width: 1000px !important;
	overflow: hidden !important;
	background-color: #FFFFFF !important;
	border: 1px solid #CCCCCC !important;
	margin: 30px 0 30px 0 !important;
}
.spiralSeal_wrapper tr td:first-child {
	display: table-cell;
	line-height: 140%;
	text-align: left;
	padding: 10px !important;
	overflow: auto;
}

.spiralSeal_wrapper tr td {
	display: table-cell;
	text-align: center;
	padding: 10px !important;
	overflow: auto;
}

/* フッタ
----------------------------*/
#SMP_STYLE .footer_text {
	width: 90%;
	max-width: 1000px;
	color: #333333;
	font-weight: normal;
	text-align: left;
	margin: 0 auto 30px auto;
}

.copyright {
	text-align: center;
}

/* clearfix
----------------------------*/
#SMP_STYLE .cf:before, #SMP_STYLE .cf:after {content:"";display:table;}
#SMP_STYLE .cf:after {clear:both;}
#SMP_STYLE .cf {*zoom:1;}

/* 回り込み解除 */
.cl { clear: both; }
.clearfix:after {
	content: "."; 
	display: block; 
	height: 0; 
	clear: both; 
	visibility: hidden;
}
.clearfix { display: inline-block; }
/* clearfixのIE-mac対策 */
* html .clearfix { height: 1%; }
.clearfix { display: block; }



