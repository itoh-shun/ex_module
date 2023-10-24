/* formSP blueberry 20200831
----------------------------*/
@media screen and (max-width:639px) {

	/* 見出し画像 ※変更なし
	----------------------------*/
	#SMP_STYLE .header_img_smartphone { display: none; }
	#SMP_STYLE .header_img_tablet { display: none; }
	#SMP_STYLE .header_img_pc { display: block; }

	/* 入力エラー時の説明
	----------------------------*/
	#SMP_STYLE .header_emesg {
		padding: 15px 15px;
	}

	/* フォーム行
	----------------------------*/
	#SMP_STYLE dl {
		width: 100%;
		margin: 0 auto 10px auto;
	}

	/* 項目名
	----------------------------*/
	#SMP_STYLE dt.title {
		display: block;
		width: 100%;
		padding: 0 5px;
	}

	/* 項目入力部
	----------------------------*/
	#SMP_STYLE dd.data {
		display: block;
		width: 100%;
		margin: 0 0 10px 0;
		padding: 18px 5px 10px 5px;
	}

	/* inputタグ
	----------------------------*/
	#SMP_STYLE .input {
		width: 95%
	}

	/* 入力欄を２つ並べる場合 */
	.input_line ul li {
		width: 48%;
		display: inline-block;
		font-weight: normal;
		vertical-align: top;
	}
	.input_line ul li input {
		width: 95% !important;
	}


	/* フィールドごとのデザイン
	----------------------------*/
	#SMP_STYLE .multi1 label {
		display: block;
		width: 100%;
		background: #e2e8f0;
		border-radius: 4px 4px 4px 4px;
		box-sizing: border-box;
		text-align: left;
		margin: 0 10px 10px 0;
		padding: 10px;
	}

	#SMP_STYLE .multi1 label input {
		width: 20px;
		border-radius: 3px 3px 3px 3px;
		text-align: left;
	}

	#SMP_STYLE .multi1 label span {
		margin: 0 0 0 25px;
	}

	#SMP_STYLE .multi2 li {
		display: block;
		float: none;
		padding: 0 5px 2px 0px;
	}

	#SMP_STYLE .multi2 label {
		display: block;
		width: 100%;
		min-width: 250px;
		background: #e2e8f0;
		border-radius: 4px 4px 4px 4px;
		box-sizing: border-box;
		text-align: left;
		margin: 0 10px 10px 0;
		padding: 10px;
	}

	#SMP_STYLE .multi2 label input {
		width: 20px;
		border-radius: 3px 3px 3px 3px;
		text-align: left;
	}

	#SMP_STYLE .multi2 label span {
		margin: 0 0 0 25px;
	}

	#SMP_STYLE select {
		width: 95%;
		min-width: 0px;
	}

	#SMP_STYLE textarea {
		width: 95%;
	}

	/* 送信ボタン
	----------------------------*/
	#SMP_STYLE input.submit {
width: 90%;
margin: 20px auto 40px auto;　
	
	}

	/* 確認ページの戻るボタン */
	#SMP_STYLE input[name="SMPFORM_BACK"] {
		width: 90%;
		margin: 20px auto 20px auto;
	}

	/* エラーメッセージ
	　(入力チェック時)
	----------------------------*/
	#SMP_STYLE .msg {
		font-size: 87.5%;
	}

	/* エラーメッセージ
	　(サンキュー・締め切り・システムエラー)
	----------------------------*/
	#SMP_STYLE .sub_text {
		width: 95%;
		max-width: 1000px;
		font-weight: normal;
		text-align: left;
		padding: 0px;
		margin: 0px auto 40px auto;
	}

	/* SPIRAL SEAL
	----------------------------*/
	.spiralSeal td {
		display: block;
	}
}
