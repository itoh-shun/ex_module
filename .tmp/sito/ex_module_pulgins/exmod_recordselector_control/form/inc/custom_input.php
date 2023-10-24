					<dl class="cf">
						<dt class="title">
							設定ページ
						</dt><dd class="data multi2">
							<ul class="cf">
								<li><label><input class="input" type="checkbox" value="1" name="pageType" %val:usr:pageType:1%><span>フォーム入力ページ</span></label></li>
 								<li><label><input class="input" type="checkbox" value="2" name="pageType" %val:usr:pageType:2%><span>フォーム確認ページ</span></label></li>
<!--
								<li><label><input class="input" type="checkbox" value="3" name="pageType" %val:usr:pageType:3%><span>フォームサンキューページ</span></label></li>
								<li><label><input class="input" type="checkbox" value="4" name="pageType" $pageType:4$><span>一覧表</span></label></li>
								<li><label><input class="input" type="checkbox" value="5" name="pageType" $pageType:5$><span>単票</span></label></li>
								<li><label><input class="input" type="checkbox" value="6" name="pageType" $pageType:6$><span>マイエリア</span></label></li> -->
							</ul>
							<input type="hidden" value="" name="pageType">
						</dd>
					</dl>

<!-- ここからカスタム入力 -->
					<dl class="cf">
						<dt class="title">
							対象フィールドname値
						</dt><dd class="data real">
							<input class="input" type="text" name="setting_name" onchange="set_param_from_input();"><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							データベースタイトル
						</dt><dd class="data real">
							<input class="input" type="text" name="database" onchange="set_param_from_input();"><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							抽出ルール
						</dt><dd class="data real">
							<input class="input" type="text" name="select_name" onchange="set_param_from_input();"><br>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							並び替え
						</dt><dd class="data real">
							<div id="duplicate_parent">
								<div class="origin">
									並び替えに使用する差替えキーワード:<input class="input" type="text" name="sort_name" onchange="set_param_from_input();" style="width: 100%"><br>
									<select class="input" type="text" name="sort_type" onchange="set_param_from_input();" style="width: 100%">
										<option value="asc">昇順</option>
										<option value="desc">降順</option>
									</select>
								</div>
							</div>
						</dd>
					</dl>
					<dl class="cf">
						<dt class="title">
							ラベル設定
						</dt><dd class="data real">
							<div id="duplicate_parent">
								<div class="origin">
									ラベルValueに使用する差替えキーワード:<input class="input" type="text" name="label_value" onchange="set_param_from_input();" style="width: 100%"><br>
									ラベル名に使用する差替えキーワード：<input class="input" type="text" name="label_name" onchange="set_param_from_input();" style="width: 100%"><br>
								</div>
							</div>
						</dd>
					</dl>
