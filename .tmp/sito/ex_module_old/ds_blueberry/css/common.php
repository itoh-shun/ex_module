/*  reset css 20200628
----------------------------*/
html, body,
header, nav, section, article, aside, footer, address,
h1, h2, h3, h4, h5, h6,
div, p, blockquote,
dl, dt, dd, ol, ul, li,
table, caption, tbody, thead, tfoot, tr, th, td,
form, iframe, embed, object {
	box-sizing: border-box;
	margin: 0px;
	padding: 0px;
}
ol, ul {
	list-style-type: none;
}
table {
	border-collapse:collapse;
	border-spacing:0;
}
hr {
	height: 0;
	margin: 0;
	padding: 0;
	border: 0;
}
/* 枠線と縦並べ時の隙間を消去 */
img {
	border: 0;
	vertical-align: top;
}
/* 引用符を非表示 */
blockquote, q {
	quotes: none;
}
/* html5要素のIE8以下対策 */
header, nav, main, section, article, aside, footer {
	display: block;
}

/* 調整用CSS
----------------------------*/
.mb00 { margin-bottom: 0px !important; }
.mb10 { margin-bottom: 10px !important; }
.mb20 { margin-bottom: 20px !important; }
.mb30 { margin-bottom: 30px !important; }
.mb30 { margin-bottom: 30px !important; }
.mb40 { margin-bottom: 40px !important; }
.mt00 { margin-top: 0px !important; }
.mt10 { margin-top: 10px !important; }
.mt20 { margin-top: 20px !important; }
.mt30 { margin-top: 30px !important; }
.mt40 { margin-top: 40px !important; }
.pt00 { padding-top: 0px !important; }
.pd00 { padding-bottom: 0px !important; }
.fontb { font-weight: bold !important; }
.font12 { font-size: 12px !important; }
.font14 { font-size: 14px !important; }
.font16 { font-size: 16px !important; }
.font18 { font-size: 18px !important; }
.font20 { font-size: 20px !important; }
.ta_r { text-align: right !important; }
.ta_l { text-align: left !important; }
.ta_c { text-align: center !important; }
.red { color: #dd0000 !important; }
.pink { color: #ff4f8d !important; }
.orange { color: #ff9900 !important; }
.blue { color: #0066cc !important; }
.green { color: #218211 !important; }
.black { color: #000000 !important; }


/* 回り込み解除 */
.cl { clear: both; }
.cl_r { clear: right; }
.cl_l { clear: left; }
.clearfix {
	display: block;
}
.clearfix:after {
	display: block;
	content: "";
	clear: both;
}

/* display
----------------------------*/
.pc_none {
	display: none;
}
.sp_none {
	display: inline-block;
}
@media screen and (max-width:639px) {
	.pc_none {
		display: inline-block;
	}
	.sp_none {
		display: none;
	}
}


