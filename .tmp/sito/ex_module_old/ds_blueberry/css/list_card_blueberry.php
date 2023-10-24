/* list+card blueberry 20200831
----------------------------*/

/* 一覧検索フォーム
-------------------------*/
.smp-search-form {
	margin-top: 20px;
}

table.smp-search-form-table {
	max-width: 95% !important;
	margin: 0px auto 0px auto; /* センタリング */
}
/* 基本設定 */
table.smp-search-form-table tr {
	max-width:９６０px !important;
}
table.smp-search-form-table td {
	background: none !important; /* 背景を透過 */
	border: 0px !important; /* 罫線を一旦消す */
	box-sizing: border-box;
	font-size: 0.875rem !important;
	padding: 7px 10px !important;
}
/* 項目タイトルtdの基本設定 */
table.smp-search-form-table td.smp-sf-head {
	width: 20%;
	background: #f4f4f4 !important;
	border-left: 1px solid #cfdde6 !important;
	border-right: 1px solid #cfdde6 !important;
	border-bottom: 1px solid #cfdde6 !important;
	color: #123f77 !important;
	font-weight: bold !important;
	line-height: 140%;
	text-align: left;
}

/* 入力欄tdの基本設定 */
table.smp-search-form-table td.smp-sf-body {
	background: #fff !important;
	border-right: 1px solid #cfdde6 !important;
	border-bottom: 1px solid #cfdde6 !important;
	line-height: 140%;
	padding-right: 20px !important;
}

table.smp-search-form-table td.smp-sf-body .notice {
	font-size: 12px !important;
}

/* １行目のtd上部に線を出す */
table.smp-search-form-table tr.smp-sf-row:first-child td {
	border-top: 1px solid #cfdde6 !important;
}

/* inputを入力しやすくする */
table.smp-search-form-table td.smp-sf-body input {
	font-size: 0.875rem;
	box-sizing: border-box; /* tdをはみ出ない用にする */
	border: 1px solid #cfdde6 !important; /* 線の色 */
	border-radius: 3px 3px 3px 3px;
	padding: 5px; /*入力欄を大きく */
	margin: 5px; 
}
/* チェックボックスを見やすくする */
table.smp-search-form-table td.smp-sf-body label {
	display: inline-block;
	margin-right: 13px;
}
/* 検索ボタンを大きくする */
table.smp-search-form-table input[type="submit"] {
	appearance: none;
	border: none;
	cursor: pointer;
	outline: none;
	padding: 0;
	-webkit-box-sizing: border-box;
	-webkit-appearance: button;
	/* reset */
	background: #2e6ea8;
	border-bottom: 2px solid #0a2646;
	border-radius: 2px;
	box-sizing: border-box;
	color: #fff;
	font-size: 1rem;
	font-weight: bold;
	letter-spacing: 1px;
	margin: 10px auto !important;
	padding: 8px 40px;
}
table.smp-search-form-table input[type="submit"]:hover {
	filter: alpha(opacity=90);
	-ms-filter: alpha(opacity=90);
	opacity: 0.9;
}

/* 表のtdをスマホ用に段組み */
@media only screen and (max-width: 639px) {

	/* colgroupとソート行を消す */
	colgroup {
		display: none;
	}
	table.smp-table td.smp-cell-sort {
		display: none !important;
	}
	/* ページャーのtableへの影響を元に戻す */
	table.smp-table tr.smp-row-normal table.smp-pager td {
		display: table-cell !important;
	}
	/* データ行をレスポンシブに */
	table.smp-table td {
		width: 100% !important;
		display: block !important;
	}
	/* データ行の文字揃えを左寄りにして、罫線を消す */
	table.smp-table td.smp-cell-data {
		border-top: 0px !important;
		border-bottom: 0px !important;
		font-size: 1rem !important;
		text-align: left !important;
		padding: 5px 10px !important;
	}
	table.smp-table td.smp-cell-data:first-child {
		border-top: 2px solid #cfdde6 !important;
		padding-top: 15px !important;
	}
	table.smp-table td.smp-cell-data:last-child {
		padding-bottom: 15px !important;
		border-bottom: 2px solid #cfdde6 !important;
	}
}

/* 一覧表  
-------------------------*/
@media screen and (max-width:639px) {
	colgroup {
		display: none !important;
	}
}

table.smp-table {
    max-width: 90% !important;
	width: 100%;
	border-collapse: collapse;
	font-size: 0.875rem;
	margin: 0px auto;
}
/* ソート行の基本設定 */
table.smp-table tr.smp-row-sort {
	border-top: 1px solid #cfdde6;
	border-bottom: 1px solid #cfdde6;
}

table.smp-table td.smp-cell-sort {
    background: #fff !important; 
	border: solid #cfdde6 !important;
	border-width: 0px 0px 1px 0px !important;
	box-sizing: border-box;
	color: #2e6ea8 !important;
	font-size: 0.875rem !important;
	line-height: 140% !important;
	/* text-align: left; */ /* 必要に応じて使用 */
	padding: 20px 10px 15px 10px !important;
}
/*　ソート行のリンクデザイン */
table.smp-table td.smp-cell-sort a {
	color: #2e6ea8;
	font-weight: bold !important;
	text-decoration: underline;
}
table.smp-table td.smp-cell-sort a:hover {
	color: #2e6ea8;
	font-weight: normal !important;
	text-decoration: none;
}
/* データ行の基本設定 */
table.smp-table td.smp-cell-data {
	background: none !important; /* trの色を透過 */
	border: solid #cfdde6 !important; /* 線の色 */
	border-width: 0px 0px 1px 0px !important; /* 下線のみ引く */
	color: #0a2646 !important;
	font-size: 0.875rem !important;
	/* text-align: left; */ /* 必要に応じて使用 */
	line-height: 140%; /* データの行間を詰める */
	padding: 15px 10px !important; /* データの上下左右の隙間を広く */
}
table.smp-table td.smp-cell-data a {
	color: #e76060;
	text-decoration: underline;
}
table.smp-table td.smp-cell-data a:hover {
	color: #e76060;
	text-decoration: none;
}

/* 奇数行目と偶数行目で背景色を変更 */
table.smp-table tr.smp-row-data:nth-child(odd) {
    background: #f4f4f4 !important; /* 奇数番目 */
}
table.smp-table tr.smp-row-data:nth-child(even) {
    background: #fff !important; /* 偶数番目 */
}
/* 変更選択時の色 */
table.smp-table tr.smp-be-operate td.smp-cell-data {
	background: #def5ed !important; 
}
table.smp-table tr.smp-row-data:hover {
	background: #e4f4ff !important; 		
}
/* 表以外の基本設定 */
table.smp-table tr.smp-row-normal td {
	border: 0px !important; /* 不要な罫線の削除 */
	font-size: 0.875rem !important;
}
/* 一覧表の付属ボタン */
table.smp-table input[name="smp-table-submit-button"],
table.smp-table .smp-table-button {
	appearance: none;
	border: none;
	cursor: pointer;
	outline: none;
	padding: 0;
	-webkit-box-sizing: border-box;
	-webkit-appearance: button;
	/* reset */
	background: #2e6ea8;
	border-bottom: 2px solid #0a2646;
	border-radius: 2px;
	box-sizing: border-box;
	color: #fff;
	font-size: 14px;
	font-weight: bold;
	letter-spacing: 1px;
	margin: 5px auto 5px 10px !important;
	padding: 5px 15px 5px 15px;
}

table.smp-table input[name="smp-table-submit-button"]:hover,
table.smp-table .smp-table-button:hover {
	filter: alpha(opacity=90);
	-ms-filter: alpha(opacity=90);
	opacity: 0.9;
}


/* 件数セレクトの調整 */
table.smp-table tr.smp-row-normal select {
	width: auto !important;
	height: 30px !important;
	box-sizing: border-box;
	margin: 5px 0px 5px 0px !important;
	padding: 0px 5px 0px 0px !important;
}

/* 編集列テキストフィールドの調整 */
table.smp-table td.smp-cell-data input[type=text] {
	width: 100% !important;
	box-sizing: border-box;
	padding: 5px !important;
}
/* 編集列テキストエリアの調整 */
table.smp-table td.smp-cell-data textarea {
	width: 100% !important;
	min-height: 80px;
	box-sizing: border-box;
	padding: 5px !important;
}

/* 編集列セレクトの調整 */
table.smp-table td.smp-cell-data select {
	width: 100% !important;
	height: 30px !important;
	box-sizing: border-box;
	padding: 0px 5px 0px 0px !important;
}

/* 一覧表ページャー
-------------------------*/
table.smp-table tr.smp-row-normal table.smp-pager {
	float: right;
	border-collapse: separate;
	border-spacing: 5px 10px !important; /* 左右・上下の順の指定 */ 
	margin: 0px !important;
}
/* ページャー基本設定 */
table.smp-table tr.smp-row-normal table.smp-pager td.smp-page {
	border: 1px solid #2e6ea8 !important;
	font-size: 16px;
	line-height: 1;
	text-align: center;
}
/* リンクエリア拡張 */
table.smp-table tr.smp-row-normal table.smp-pager td.smp-page a {
	display: block;
	background: #2e6ea8 !important;
	border: 1px solid #2e6ea8 !important;
	color: #fff !important;
	text-decoration: none;
	padding: 5px 10px 7px 10px;
}
/* 現在のページ */
table.smp-table tr.smp-row-normal table.smp-pager td.smp-current-page {
	background: #0a2646 !important;
	border: 1px solid #0a2646 !important;
	color: #fff !important;
	padding: 5px 10px 7px 10px;
}
/* 省略記号 */
table.smp-table tr.smp-row-normal table.smp-pager td.smp-page-space {
	border: 0px !important;
	color: #0a2646 !important;
}
/* 単票
-------------------------*/
table.smp-card-list {
	width: 100%;
	border-collapse: collapse;
	border: solid #cfdde6 !important; /* 線の色 */
	border-width: 1px 0px 0px 1px !important; /* 下線のみ引く */
	margin: 10px auto 10px auto;
}
/* ソート行の基本設定 */
table.smp-card-list tr {
	border: solid #cfdde6 !important; /* 線の色 */
	border-width: 0px 0px 1px 0px !important; /* 下線のみ引く */
}
table.smp-card-list th {
	max-width: 10% !important;
	background: #edf3f7 !important;
	border: solid #cfdde6 !important; /* 線の色 */
	border-width: 0px 1px 1px 0px !important; /* 下線のみ引く */
	color: #123f77 !important;
	font-size: 15px;
	font-weight: bold;
	line-height: 140% !important; /* データの行間を詰める */
	text-align: left !important; /* テキスト左揃え */
	padding: 10px 15px !important; /* データの上下左右の隙間を広く */
}
table.smp-card-list td {
	background: #fff !important; /* データ背景色 */
	border: solid #cfdde6 !important; /* 線の色 */
	border-width: 0px 1px 0px 0px !important; /* 下線のみ引く */
	font-size: 15px;
	line-height: 140% !important; /* データの行間を詰める */
	text-align: left !important; /* テキスト左揃え */
	padding: 10px 15px !important; /* データの上下左右の隙間を広く */
}

table.smp-card-list th.bg_green {
	background: #d8f3e4 !important;
	color: #185841 !important;
}
table.smp-card-list th.bg_blue {
	background: #7eb4d3 !important;
	color: #333 !important;
}
table.smp-card-list th.bg_pink {
	background: #ffece7 !important;
	color: #d72e2e !important;
}


