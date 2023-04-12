<?php
	if($_POST['cmd'] == "confirm"){
		if(empty($_POST['place'])){
			$err1 = true;
			$err1 = "※必須項目です。";
		}else{
			$err1 = false;
			$place = $_POST['place'];
		}
		
		if(empty($_POST['know'])){
			$err2 = true;
			$err2 = "※必須項目です。";
		}else{
			$err2 = false;
			$know = $_POST['know'];
		}
				
		if(empty($_POST['na1']) && empty($_POST['na2'])){
			$err3 = true;
			$err3 = "※必須項目です。";
		}else{
			$err3 = false;
			$na1 = htmlspecialchars($_POST['na1'], ENT_QUOTES, "UTF-8");
			$na2 = htmlspecialchars($_POST['na2'], ENT_QUOTES, "UTF-8");
		}

		$kana1 = htmlspecialchars($_POST['kana1'], ENT_QUOTES, "UTF-8");
		$kana2 = htmlspecialchars($_POST['kana2'], ENT_QUOTES, "UTF-8");
		
		if($_POST['mail1']){
			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['mail1'])) {
				$err4 = false;
				$mail1 = htmlspecialchars($_POST['mail1'], ENT_QUOTES, "UTF-8");
			}else{
				$err4 = "※メールアドレスの形式が正しくありません。";
			}
		}else{
			$err4 = "※必須項目です。";
		}
		
		if($_POST['mail2']){
			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['mail2'])){
				if($mail1 == $_POST['mail2']){
					$err5 = false;
					$mail1 = htmlspecialchars($_POST['mail2'], ENT_QUOTES, "UTF-8");
				}else{
					$err5 = "※メールアドレスが違います。";
				}
			}else{
				$err5 = "※メールアドレスの形式が正しくありません。";
			}
		}else{
			$err5 = "※必須項目です。";
		}

		if(empty($_POST['zip'])){
			$err6 = true;
			$err6 = "※必須項目です。";
		}else{
			$err6 = false;
			$zip = htmlspecialchars($_POST['zip'], ENT_QUOTES, "UTF-8");
		}
		
		if(empty($_POST['pref'])){
			$err7 = true;
			$err7 = "※必須項目です。";
		}else{
			$err7 = false;
			$pref = $_POST['pref'];
		}
		
		if(empty($_POST['address'])){
			$err8 = true;
			$err8 = "※必須項目です。";
		}else{
			$err8 = false;
			$address = htmlspecialchars($_POST['address'], ENT_QUOTES, "UTF-8");
		}
		
		if(empty($_POST['banchi'])){
			$err9 = true;
			$err9 = "※必須項目です。";
		}else{
			$err9 = false;
			$banchi = htmlspecialchars($_POST['banchi'], ENT_QUOTES, "UTF-8");
		}
		
		$roomname = htmlspecialchars($_POST['roomname'], ENT_QUOTES, "UTF-8");
		$roomnum = htmlspecialchars($_POST['roomnum'], ENT_QUOTES, "UTF-8");
		
		if(!empty($_POST['tel1'])){
			if(preg_match("/^(0{1}\d{9,10})$/", $_POST['tel1'])){
				$err10 = false;
				$tel1 = htmlspecialchars($_POST['tel1'], ENT_QUOTES, "UTF-8");
			}else{
				$err10 = true;
				$err10 = "※電話番号の形式が正しくありません。";
			}
		}

		if(empty($_POST['tel2'])){
			$err11 = true;
			$err11 = "※必須項目です。";
		}else{
			if(preg_match("/^(0{1}\d{9,10})$/", $_POST['tel2'])){
				$err11 = false;
				$tel2 = htmlspecialchars($_POST['tel2'], ENT_QUOTES, "UTF-8");
			}else{
				$err11 = true;
				$err11 = "※電話番号の形式が正しくありません。";
			}
		}
//		
//		$age = htmlspecialchars($_POST['age'], ENT_QUOTES, "UTF-8");
//		$jender = htmlspecialchars($_POST['jender'], ENT_QUOTES, "UTF-8");
//		$job = htmlspecialchars($_POST['job'], ENT_QUOTES, "UTF-8");
		
		if(empty($_POST['current'])){
			$err12 = true;
			$err12 = "※必須項目です。";
		}else{
			$err12 = false;
			$current = $_POST['current'];
		}
	
		
		
		if(empty($_POST['layout'])){
			$err13 = true;
			$err13 = "※必須項目です。";
		}else{
			$err13 = false;
			$layout = $_POST['layout'];
		}
	
			
		
		if(empty($_POST['reason'])){
			$err14 = true;
			$err14 = "※必須項目です。";
		}else{
			$err14 = false;
			$reason = $_POST['reason'];
		}
	

		if($err1 || $err2 || $err3 || $err4 || $err5 || $err6 || $err7 || $err8 || $err9 || $err10 || $err11 || $err12 || $err13 || $err14){
			$error = true;
		}
	}
?>

<?php
	include_once('../header_1b.php');
?>

	<link rel="stylesheet" href="<?php print URL; ?>/assets/css/contact.css" />

	<title>資料請求 | グランファーレ幌西グランシェール | 日本グランデ株式会社</title>
	<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「東札幌」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ幌西グランシェール">
	<meta name="keywords" content="グランファーレ幌西グランシェール,東札幌,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>

	<main class="main">
		<div class="mainvisual mainvisual_only-text">
			<h1 class="mainvisual-title mainvisual-title_request"><span class="title-text">資料請求</span></h1>
		</div>
		<div class="tab-area tab-area_sub" id="content">

			<div class="contents">

				<div class="contact-page tab_main js-tab-cts is-active">
					<div class="contents tab-section">
						<div class="in">
							<div class="top fgo">
								■参考資料の郵送や、最新情報などを郵送もしくはメールにてご案内いたします。<br>
								※下記フォームにご入力後、画面下の送信ボタンを押してください。<br>
								※英数字は（半角）でご入力ください。<br>
								<span class="hissu">＊は必須項目です。</span>
							</div>
							<div class="inquiry mt50 fgo" id="inquiry">
								<?php if($error || empty($_POST)){ ?>
									<form action="#inquiry" method="post" name="form1">
										<div class="table">
											<div class="rows">
												<div class="th">資料希望物件</div>
												<div class="td">
													<p><span class="hissu">＊</span>資料請求希望物件をお選び下さい。</p>
													<div class="radio-out l-height35 mt40 rel">
														<div class="error"><?php print $err1; ?></div>
														<div>
															<input type="radio" name="place" value="グランファーレ幌西グランシェール" id="place8" class="radio" <?php if(isset($_POST['place']) && ($_POST['place']=='グランファーレ幌西グランシェール')){print " checked='checked'";} ?>><label for="place8" class="label">グランファーレ幌西グランシェール</label>
														</div>
														<!--<div>
															<input type="radio" name="place" value="グランファーレ宮の森 コートハウス四季の杜" id="place8" class="radio" <?php if(isset($_POST['place']) && ($_POST['place']=='グランファーレ宮の森 コートハウス四季の杜')){print " checked='checked'";} ?>><label for="place8" class="label">グランファーレ宮の森 コートハウス四季の杜</label>
														</div>-->
														<!--<div>
															<input type="radio" name="place" value="グランファーレ円山公園南コートハウス" id="place7" class="radio" <?php if(isset($_POST['place']) && ($_POST['place']=='グランファーレ円山公園南コートハウス')){print " checked='checked'";} ?>><label for="place7" class="label">グランファーレ円山公園南コートハウス</label>
														</div>-->
														<!--<div>
															<input type="radio" name="place" value="グランファーレ桑園レジェンドスクエア" id="place1" class="radio" <?php if(isset($_POST['place']) && ($_POST['place']=='グランファーレ桑園レジェンドスクエア')){print " checked='checked'";} ?>><label for="place1" class="label">グランファーレ桑園レジェンドスクエア</label>
														</div>
														<div>
															<input type="radio" name="place" value="グランファーレ琴似ステーションサイドブリーズ" id="place2" class="radio" <?php if(isset($_POST['place']) && ($_POST['place']=='グランファーレ琴似ステーションサイドブリーズ')){print " checked='checked'";} ?>><label for="place2" class="label">グランファーレ琴似ステーションサイドブリーズ</label>
														</div> -->
														<!--<div>
															<input type="radio" name="place" value="グランファーレ平岸 THEパークサイド" id="place3" class="radio" <?php if(isset($_POST['place']) && ($_POST['place']=='グランファーレ平岸 THEパークサイド')){print " checked='checked'";} ?>><label for="place3" class="label">グランファーレ平岸 THEパークサイド</label>
														</div>-->
													</div><!-- /.radio-out -->
												</div>
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">物件を何で<br class="pc">お知りになりましたか</div>
												<div class="td">
													<p><span class="hissu">＊</span>いずれか一つをご選択ください。</p>
													<div class="radio-out l-height35 mt40 clearfix rel flex">
														<div class="error"><?php print $err2; ?></div>
														<div class="left f-left">
															<div><input type="radio" name="know" value="当社ホームページ" id="know1" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='当社ホームページ')){print " checked='checked'";} ?>><label for="know1" class="label">当社ホームページ</label></div>
															<div><input type="radio" name="know" value="新聞折込チラシ" id="know2" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='新聞折込チラシ')){print " checked='checked'";} ?>><label for="know2" class="label">新聞折込チラシ</label></div>
															<div><input type="radio" name="know" value="ポスト投函チラシ" id="know3" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='ポスト投函チラシ')){print " checked='checked'";} ?>><label for="know3" class="label">ポスト投函チラシ</label></div>
															<div><input type="radio" name="know" value="現地看板" id="know4" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='現地看板')){print " checked='checked'";} ?>><label for="know4" class="label">現地看板</label></div>
															<div><input type="radio" name="know" value="TVCM" id="know5" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='TVCM')){print " checked='checked'";} ?>><label for="know5" class="label">TVCM</label></div>
															<div><input type="radio" name="know" value="ダイレクトメール" id="know6" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='ダイレクトメール')){print " checked='checked'";} ?>><label for="know6" class="label">ダイレクトメール</label></div>
															<div><input type="radio" name="know" value="知人の紹介" id="know7" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='知人の紹介')){print " checked='checked'";} ?>><label for="know7" class="label">知人の紹介</label></div>
															<div><input type="radio" name="know" value="勤務先からの紹介" id="know8" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='勤務先からの紹介')){print " checked='checked'";} ?>><label for="know8" class="label">勤務先からの紹介</label></div>
														</div>
														<div class="ml100 f-left">
															<div><input type="radio" name="know" value="Google検索" id="know9" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='Google検索')){print " checked='checked'";} ?>><label for="know9" class="label">Google検索</label></div>
															<div><input type="radio" name="know" value="Yahoo!不動産" id="know10" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='Yahoo!不動産')){print " checked='checked'";} ?>><label for="know10" class="label">Yahoo!不動産</label></div>
															<div><input type="radio" name="know" value="ホームズ" id="know11" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='ホームズ')){print " checked='checked'";} ?>><label for="know11" class="label">ホームズ</label></div>
															<div><input type="radio" name="know" value="新築at home" id="know12" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='新築at home')){print " checked='checked'";} ?>><label for="know12" class="label">新築at home</label></div>
															<div><input type="radio" name="know" value="その他不動産サイト" id="know13" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='その他不動産サイト')){print " checked='checked'";} ?>><label for="know13" class="label">その他不動産サイト</label></div>
															<div><input type="radio" name="know" value="駅看板" id="know14" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='駅看板')){print " checked='checked'";} ?>><label for="know14" class="label">駅看板</label></div>
															<div><input type="radio" name="know" value="新聞紙面" id="know15" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='新聞紙面')){print " checked='checked'";} ?>><label for="know15" class="label">新聞紙面</label></div>
															<div><input type="radio" name="know" value="バナー広告" id="know16" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='バナー広告')){print " checked='checked'";} ?>><label for="know16" class="label">バナー広告</label></div>
														</div>
														<div class="ml100 f-left">
															<div><input type="radio" name="know" value="SUUMO(マガジン)" id="know17" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='SUUMO(マガジン)')){print " checked='checked'";} ?>><label for="know17" class="label">SUUMO(マガジン)</label></div>
															<div><input type="radio" name="know" value="SUUMO(ネット)" id="know18" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='SUUMO(ネット)')){print " checked='checked'";} ?>><label for="know18" class="label">SUUMO(ネット)</label></div>
															<div><input type="radio" name="know" value="Eメール" id="know19" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='Eメール')){print " checked='checked'";} ?>><label for="know19" class="label">Eメール</label></div>
															<div><input type="radio" name="know" value="ポスター" id="know20" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='ポスター')){print " checked='checked'";} ?>><label for="know20" class="label">ポスター</label></div>
															<div><input type="radio" name="know" value="その他雑誌" id="know21" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='その他雑誌')){print " checked='checked'";} ?>><label for="know21" class="label">その他雑誌</label></div>
															<div><input type="radio" name="know" value="中吊り" id="know22" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='中吊り')){print " checked='checked'";} ?>><label for="know22" class="label">中吊り</label></div>
															<div><input type="radio" name="know" value="交通広告" id="know23" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='交通広告')){print " checked='checked'";} ?>><label for="know23" class="label">交通広告</label></div>
															<div><input type="radio" name="know" value="他のモデルルーム" id="know24" class="radio" <?php if(isset($_POST['know']) && ($_POST['know']=='他のモデルルーム')){print " checked='checked'";} ?>><label for="know24" class="label">他のモデルルーム</label></div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">お名前</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table name">
															<div class="t1"><span class="hissu">＊</span>お名前</div>
															<div class="rel">
																<div class="error"><?php print $err3; ?></div>
																<input type="text" name="na1" value="<?php print $na1; ?>" class="mid">
																<input type="text" name="na2" value="<?php print $na2; ?>" class="mid">様
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1">フリガナ</div>
															<div>
																<input type="text" name="kana1" value="<?php print $kana1; ?>" class="mid">
																<input type="text" name="kana2" value="<?php print $kana2; ?>" class="mid">様
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">メールアドレス</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table name">
															<div class="t1"><span class="hissu">＊</span>メールアドレス</div>
															<div class="rel">
																<div class="error"><?php print $err4; ?></div>
																<input type="text" name="mail1" value="<?php print $mail1; ?>" class="long" placeholder="例：nippon@grande.co.jp">
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1"><span class="hissu">＊</span>確認のためもう一度</div>
															<div class="rel">
																<div class="error"><?php print $err5; ?></div>
																<input type="text" name="mail2" value="<?php print $mail2; ?>" class="long">
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">ご住所</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table address">
															<div class="t1"><span class="hissu">＊</span>郵便番号</div>
															<div class="rel">
																<div class="error"><?php print $err6; ?></div>
																<input type="text" name="zip" id="zip" value="<?php print $zip; ?>" class="mid2" placeholder="000-0000">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1"><span class="hissu">＊</span>都道府県</div>
															<div class="rel">
																<div class="error"><?php print $err7; ?></div>
																<select name="pref" id="pref" class="mid2">
																	<option value="" selected>選択してください</option>
																	<option value="北海道" <?php if(isset($_POST['pref']) && ($_POST['pref']=='北海道')){print "selected";} ?>>北海道</option>
																	<option value="青森県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='青森県')){print "selected";} ?>>青森県</option>
																	<option value="岩手県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='岩手県')){print "selected";} ?>>岩手県</option>
																	<option value="宮城県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='宮城県')){print "selected";} ?>>宮城県</option>
																	<option value="秋田県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='秋田県')){print "selected";} ?>>秋田県</option>
																	<option value="山形県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='山形県')){print "selected";} ?>>山形県</option>
																	<option value="福島県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='福島県')){print "selected";} ?>>福島県</option>
																	<option value="茨城県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='茨城県')){print "selected";} ?>>茨城県</option>
																	<option value="栃木県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='栃木県')){print "selected";} ?>>栃木県</option>
																	<option value="群馬県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='群馬県')){print "selected";} ?>>群馬県</option>
																	<option value="埼玉県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='埼玉県')){print "selected";} ?>>埼玉県</option>
																	<option value="千葉県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='千葉県')){print "selected";} ?>>千葉県</option>
																	<option value="東京都" <?php if(isset($_POST['pref']) && ($_POST['pref']=='東京都')){print "selected";} ?>>東京都</option>
																	<option value="神奈川県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='神奈川県')){print "selected";} ?>>神奈川県</option>
																	<option value="新潟県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='新潟県')){print "selected";} ?>>新潟県</option>
																	<option value="富山県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='富山県')){print "selected";} ?>>富山県</option>
																	<option value="石川県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='石川県')){print "selected";} ?>>石川県</option>
																	<option value="福井県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='福井県')){print "selected";} ?>>福井県</option>
																	<option value="山梨県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='山梨県')){print "selected";} ?>>山梨県</option>
																	<option value="長野県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='長野県')){print "selected";} ?>>長野県</option>
																	<option value="岐阜県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='岐阜県')){print "selected";} ?>>岐阜県</option>
																	<option value="静岡県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='静岡県')){print "selected";} ?>>静岡県</option>
																	<option value="愛知県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='愛知県')){print "selected";} ?>>愛知県</option>
																	<option value="三重県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='三重県')){print "selected";} ?>>三重県</option>
																	<option value="滋賀県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='滋賀県')){print "selected";} ?>>滋賀県</option>
																	<option value="京都府" <?php if(isset($_POST['pref']) && ($_POST['pref']=='京都府')){print "selected";} ?>>京都府</option>
																	<option value="大阪府" <?php if(isset($_POST['pref']) && ($_POST['pref']=='大阪府')){print "selected";} ?>>大阪府</option>
																	<option value="兵庫県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='兵庫県')){print "selected";} ?>>兵庫県</option>
																	<option value="奈良県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='奈良県')){print "selected";} ?>>奈良県</option>
																	<option value="和歌山県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='和歌山県')){print "selected";} ?>>和歌山県</option>
																	<option value="鳥取県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='鳥取県')){print "selected";} ?>>鳥取県</option>
																	<option value="島根県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='島根県')){print "selected";} ?>>島根県</option>
																	<option value="岡山県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='岡山県')){print "selected";} ?>>岡山県</option>
																	<option value="広島県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='広島県')){print "selected";} ?>>広島県</option>
																	<option value="山口県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='山口県')){print "selected";} ?>>山口県</option>
																	<option value="徳島県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='徳島県')){print "selected";} ?>>徳島県</option>
																	<option value="香川県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='香川県')){print "selected";} ?>>香川県</option>
																	<option value="愛媛県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='愛媛県')){print "selected";} ?>>愛媛県</option>
																	<option value="高知県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='高知県')){print "selected";} ?>>高知県</option>
																	<option value="福岡県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='福岡県')){print "selected";} ?>>福岡県</option>
																	<option value="佐賀県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='佐賀県')){print "selected";} ?>>佐賀県</option>
																	<option value="長崎県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='長崎県')){print "selected";} ?>>長崎県</option>
																	<option value="熊本県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='熊本県')){print "selected";} ?>>熊本県</option>
																	<option value="大分県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='大分県')){print "selected";} ?>>大分県</option>
																	<option value="宮崎県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='宮崎県')){print "selected";} ?>>宮崎県</option>
																	<option value="鹿児島県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='鹿児島県')){print "selected";} ?>>鹿児島県</option>
																	<option value="沖縄県" <?php if(isset($_POST['pref']) && ($_POST['pref']=='沖縄県')){print "selected";} ?>>沖縄県</option>
																</select>
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1"><span class="hissu">＊</span>市区町村</div>
															<div class="rel">
																<div class="error"><?php print $err8; ?></div>
																<input type="text" id="address" name="address" value="<?php print $address; ?>" class="mid2" placeholder="例：中央区">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1"><span class="hissu">＊</span>丁目番地</div>
															<div class="rel">
																<div class="error"><?php print $err9; ?></div>
																<input type="text" id="banchi" name="banchi" value="<?php print $banchi; ?>" class="mid2" placeholder="例：大通1-1">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1">マンション名</div>
															<div>
																<input type="text" name="roomname" value="<?php print $roomname; ?>" class="mid2" placeholder="例：グランファーレ">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1">部屋番号</div>
															<div>
																<input type="text" name="roomnum" value="<?php print $roomnum; ?>" class="mid2" placeholder="例：123号">
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">電話番号</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table name">
															<div class="t1">電話番号</div>
															<div class="rel">
																<div class="error"><?php print $err10; ?></div>
																<input type="text" name="tel1" value="<?php print $tel1; ?>" class="long" placeholder="※ハイフンなしでご入力ください">
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1"><span class="hissu">＊</span>携帯番号</div>
															<div class="rel">
																<div class="error"><?php print $err11; ?></div>
																<input type="text" name="tel2" value="<?php print $tel2; ?>" class="long" placeholder="※ハイフンなしでご入力ください">
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">基本情報</div>
												<div class="td">
													<div class="tabel-out">
														<div class="in-table name">
															<div class="t1">年齢</div>
															<div>
																<input type="text" name="age" value="<?php print $age; ?>" class="short">歳
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1">性別</div>
															<div class="radio-out l-height35 clearfix rel">
																<div><input type="radio" name="jender" value="男性" id="jender1" class="radio" <?php if(isset($_POST['jender']) && ($_POST['jender']=='男性')){print " checked='checked'";} ?>><label for="jender1" class="label">男性</label></div>
															</div>
															<div class="radio-out l-height35 clearfix rel">
																<div><input type="radio" name="jender" value="女性" id="jender2" class="radio" <?php if(isset($_POST['jender']) && ($_POST['jender']=='女性')){print " checked='checked'";} ?>><label for="jender2" class="label">女性</label></div>
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1">ご職業</div>
															<div class="rel">
																<select name="job" id="job" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="会社員" <?php if(isset($_POST['job']) && ($_POST['job']=='会社員')){print "selected";} ?>>会社員</option>
																	<option value="公務員" <?php if(isset($_POST['job']) && ($_POST['job']=='公務員')){print "selected";} ?>>公務員</option>
																	<option value="会社役員" <?php if(isset($_POST['job']) && ($_POST['job']=='会社役員')){print "selected";} ?>>会社役員</option>
																	<option value="商工自営" <?php if(isset($_POST['job']) && ($_POST['job']=='商工自営')){print "selected";} ?>>商工自営</option>
																	<option value="医師" <?php if(isset($_POST['job']) && ($_POST['job']=='医師')){print "selected";} ?>>医師</option>
																	<option value="弁護士・会計士等" <?php if(isset($_POST['job']) && ($_POST['job']=='弁護士・会計士等')){print "selected";} ?>>弁護士・会計士等</option>
																	<option value="派遣社員・パート" <?php if(isset($_POST['job']) && ($_POST['job']=='派遣社員・パート')){print "selected";} ?>>派遣社員・パート</option>
																	<option value="無職" <?php if(isset($_POST['job']) && ($_POST['job']=='無職')){print "selected";} ?>>無職</option>
																	<option value="自由業" <?php if(isset($_POST['job']) && ($_POST['job']=='自由業')){print "selected";} ?>>自由業</option>
																	<option value="その他" <?php if(isset($_POST['job']) && ($_POST['job']=='その他')){print "selected";} ?>>その他</option>
																</select>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1"><span class="hissu">＊</span>現在の住居形態</div>
															<div class="rel">
																<div class="error"><?php print $err12; ?></div>
																<select name="current" id="current" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="賃貸マンション" <?php if(isset($_POST['current']) && ($_POST['current']=='賃貸マンション')){print "selected";} ?>>賃貸マンション</option>
																	<option value="分譲マンション" <?php if(isset($_POST['current']) && ($_POST['current']=='分譲マンション')){print "selected";} ?>>分譲マンション</option>
																	<option value="戸建(持ち家)" <?php if(isset($_POST['current']) && ($_POST['current']=='戸建(持ち家)')){print "selected";} ?>>戸建(持ち家)</option>
																	<option value="戸建(借家)" <?php if(isset($_POST['current']) && ($_POST['current']=='戸建(借家)')){print "selected";} ?>>戸建(借家)</option>
																	<option value="公団・公社(賃貸)" <?php if(isset($_POST['current']) && ($_POST['current']=='公団・公社(賃貸)')){print "selected";} ?>>公団・公社(賃貸)</option>
																	<option value="公団・公社(分譲)" <?php if(isset($_POST['current']) && ($_POST['current']=='公団・公社(分譲)')){print "selected";} ?>>公団・公社(分譲)</option>
																	<option value="アパート" <?php if(isset($_POST['current']) && ($_POST['current']=='アパート')){print "selected";} ?>>アパート</option>
																	<option value="社宅・官舎" <?php if(isset($_POST['current']) && ($_POST['current']=='社宅・官舎')){print "selected";} ?>>社宅・官舎</option>
																	<option value="親族と同居" <?php if(isset($_POST['current']) && ($_POST['current']=='親族と同居')){print "selected";} ?>>親族と同居</option>
																	<option value="その他" <?php if(isset($_POST['current']) && ($_POST['current']=='その他')){print "selected";} ?>>その他</option>
																</select>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1"><span class="hissu">＊</span>ご希望の間取り</div>
															<div class="rel flex">
																<div class="error"><?php print $err13; ?></div>
																<div><input type="radio" name="layout" value="1LDK" id="layout1" class="radio" <?php if(isset($_POST['layout']) && ($_POST['layout']=='1LDK')){print " checked='checked'";} ?>><label for="layout1" class="label">1LDK</label></div>
																<div><input type="radio" name="layout" value="2LDK" id="layout2" class="radio" <?php if(isset($_POST['layout']) && ($_POST['layout']=='2LDK')){print " checked='checked'";} ?>><label for="layout2" class="label">2LDK</label></div>
																<div><input type="radio" name="layout" value="3LDK" id="layout3" class="radio" <?php if(isset($_POST['layout']) && ($_POST['layout']=='3LDK')){print " checked='checked'";} ?>><label for="layout3" class="label">3LDK</label></div>
																<div><input type="radio" name="layout" value="4LDK" id="layout4" class="radio" <?php if(isset($_POST['layout']) && ($_POST['layout']=='4LDK')){print " checked='checked'";} ?>><label for="layout4" class="label">4LDK</label></div>
																<div><input type="radio" name="layout" value="5LDK" id="layout5" class="radio" <?php if(isset($_POST['layout']) && ($_POST['layout']=='5LDK')){print " checked='checked'";} ?>><label for="layout5" class="label">5LDK以上</label></div>
																<p class="caution">
																	※いずれか一つをご選択ください。
																</p>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">ご希望の広さ</div>
															<div class="rel">
																<select name="require" id="require" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="40平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='40')){print "selected";} ?>>40m&#178;以上</option>
																	<option value="50平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='50')){print "selected";} ?>>50m&#178;以上</option>
																	<option value="60平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='60')){print "selected";} ?>>60m&#178;以上</option>
																	<option value="65平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='65')){print "selected";} ?>>65m&#178;以上</option>
																	<option value="70平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='70')){print "selected";} ?>>70m&#178;以上</option>
																	<option value="75平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='75')){print "selected";} ?>>75m&#178;以上</option>
																	<option value="80平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='80')){print "selected";} ?>>80m&#178;以上</option>
																	<option value="85平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='85')){print "selected";} ?>>85m&#178;以上</option>
																	<option value="90平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='90')){print "selected";} ?>>90m&#178;以上</option>
																	<option value="100平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='100')){print "selected";} ?>>100m&#178;以上</option>
																	<option value="120平方メートル以上" <?php if(isset($_POST['require']) && ($_POST['require']=='120')){print "selected";} ?>>120m&#178;以上</option>
																</select>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">ご予算</div>
															<div class="rel">
																<select name="budget" id="budget" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="~2000万円" <?php if(isset($_POST['budget']) && ($_POST['budget']=='~2000万円')){print "selected";} ?>>~2000万円</option>
																	<option value="~2500万円" <?php if(isset($_POST['budget']) && ($_POST['budget']=='~2500万円')){print "selected";} ?>>~2500万円</option>
																	<option value="~3000万円" <?php if(isset($_POST['budget']) && ($_POST['budget']=='~3000万円')){print "selected";} ?>>~3000万円</option>
																	<option value="~3500万円" <?php if(isset($_POST['budget']) && ($_POST['budget']=='~3500万円')){print "selected";} ?>>~3500万円</option>
																	<option value="~4000万円" <?php if(isset($_POST['budget']) && ($_POST['budget']=='~4000万円')){print "selected";} ?>>~4000万円</option>
																	<option value="~4500万円" <?php if(isset($_POST['budget']) && ($_POST['budget']=='~4500万円')){print "selected";} ?>>~4500万円</option>
																</select>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">自己資金</div>
															<div class="rel">
																<select name="fund" id="fund" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="~300万円" <?php if(isset($_POST['fund']) && ($_POST['fund']=='~300万円')){print "selected";} ?>>~300万円</option>
																	<option value="~500万円" <?php if(isset($_POST['fund']) && ($_POST['fund']=='~500万円')){print "selected";} ?>>~500万円</option>
																	<option value="~1000万円" <?php if(isset($_POST['fund']) && ($_POST['fund']=='~1000万円')){print "selected";} ?>>~1000万円</option>
																	<option value="~1500万円" <?php if(isset($_POST['fund']) && ($_POST['fund']=='~1500万円')){print "selected";} ?>>~1500万円</option>
																	<option value="~2000万円以上" <?php if(isset($_POST['fund']) && ($_POST['fund']=='~2000万円以上')){print "selected";} ?>>~2000万円以上</option>
																</select>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">家族数</div>
															<div class="rel">
																<select name="family" id="family" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="1人" <?php if(isset($_POST['family']) && ($_POST['family']=='1人')){print "selected";} ?>>1人</option>
																	<option value="2人" <?php if(isset($_POST['family']) && ($_POST['family']=='2人')){print "selected";} ?>>2人</option>
																	<option value="3人" <?php if(isset($_POST['family']) && ($_POST['family']=='3人')){print "selected";} ?>>3人</option>
																	<option value="4人" <?php if(isset($_POST['family']) && ($_POST['family']=='4人')){print "selected";} ?>>4人</option>
																	<option value="5人以上" <?php if(isset($_POST['family']) && ($_POST['family']=='5人以上')){print "selected";} ?>>5人以上</option>
																	<div class="caution">
																		※いずれか一つをご選択ください。
																	</div>
																</select>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">家族構成</div>
															<div class="radio-out l-height35 clearfix rel flex wd440">
																<div><input type="radio" name="structure" value="単身" id="structure1" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='単身')){print " checked='checked'";} ?>><label for="structure1" class="label">単身</label></div>
																<div><input type="radio" name="structure" value="夫婦" id="structure2" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='夫婦')){print " checked='checked'";} ?>><label for="structure2" class="label">夫婦</label></div>
																<div><input type="radio" name="structure" value="夫婦+子供" id="structure3" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='夫婦+子供')){print " checked='checked'";} ?>><label for="structure3" class="label">夫婦+子供</label></div>
																<div><input type="radio" name="structure" value="夫婦+親" id="structure4" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='夫婦+親')){print " checked='checked'";} ?>><label for="structure4" class="label">夫婦+親</label></div>
																<div><input type="radio" name="structure" value="夫婦+その他" id="structure5" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='夫婦+その他')){print " checked='checked'";} ?>><label for="structure5" class="label">夫婦+その他</label></div>
																<div><input type="radio" name="structure" value="本人+親" id="structure6" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='本人+親')){print " checked='checked'";} ?>><label for="structure6" class="label">本人+親</label></div>
																<div><input type="radio" name="structure" value="本人+子供" id="structure7" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='本人+子供')){print " checked='checked'";} ?>><label for="structure7" class="label">本人+子供</label></div>
																<div><input type="radio" name="structure" value="本人+婚約者" id="structure8" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='本人+婚約者')){print " checked='checked'";} ?>><label for="structure8" class="label">本人+婚約者</label></div>
																<div><input type="radio" name="structure" value="本人+その他" id="structure9" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='本人+その他')){print " checked='checked'";} ?>><label for="structure9" class="label">本人+その他</label></div>
																<div><input type="radio" name="structure" value="その他" id="structure10" class="radio" <?php if(isset($_POST['structure']) && ($_POST['structure']=='その他')){print " checked='checked'";} ?>><label for="structure10" class="label">その他</label></div>
																<p class="caution">
																	※いずれか一つをご選択ください。
																</p>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">世帯主ご職業</div>
															<div class="rel">
																<select name="householder" id="householder" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="会社員" <?php if(isset($_POST['householder']) && ($_POST['householder']=='会社員')){print "selected";} ?>>会社員</option>
																	<option value="公務員" <?php if(isset($_POST['householder']) && ($_POST['householder']=='公務員')){print "selected";} ?>>公務員</option>
																	<option value="会社役員" <?php if(isset($_POST['householder']) && ($_POST['householder']=='会社役員')){print "selected";} ?>>会社役員</option>
																	<option value="商工自営" <?php if(isset($_POST['householder']) && ($_POST['householder']=='商工自営')){print "selected";} ?>>商工自営</option>
																	<option value="医師" <?php if(isset($_POST['householder']) && ($_POST['householder']=='医師')){print "selected";} ?>>医師</option>
																	<option value="弁護士・会計士等" <?php if(isset($_POST['householder']) && ($_POST['householder']=='弁護士・会計士等')){print "selected";} ?>>弁護士・会計士等</option>
																	<option value="派遣社員・パート" <?php if(isset($_POST['householder']) && ($_POST['householder']=='派遣社員・パート')){print "selected";} ?>>派遣社員・パート</option>
																	<option value="無職" <?php if(isset($_POST['householder']) && ($_POST['householder']=='無職')){print "selected";} ?>>無職</option>
																	<option value="自由業" <?php if(isset($_POST['householder']) && ($_POST['householder']=='自由業')){print "selected";} ?>>自由業</option>
																	<option value="その他" <?php if(isset($_POST['householder']) && ($_POST['householder']=='その他')){print "selected";} ?>>その他</option>
																</select>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">ご年収</div>
															<div class="rel">
																<select name="income" id="income" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="~300万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~300万円')){print "selected";} ?>>~300万円</option>
																	<option value="~400万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~400万円')){print "selected";} ?>>~400万円</option>
																	<option value="~500万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~500万円')){print "selected";} ?>>~500万円</option>
																	<option value="~600万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~600万円')){print "selected";} ?>>~600万円</option>
																	<option value="~700万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~700万円')){print "selected";} ?>>~700万円</option>
																	<option value="~800万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~800万円')){print "selected";} ?>>~800万円</option>
																	<option value="~900万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~900万円')){print "selected";} ?>>~900万円</option>
																	<option value="~1000万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~1000万円')){print "selected";} ?>>~1000万円</option>
																	<option value="~1200万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~1200万円')){print "selected";} ?>>~1200万円</option>
																	<option value="~1500万円" <?php if(isset($_POST['income']) && ($_POST['income']=='~1500万円')){print "selected";} ?>>~1500万円</option>
																	<option value="~1500万円以上" <?php if(isset($_POST['income']) && ($_POST['income']=='~1500万円以上')){print "selected";} ?>>~1500万円以上</option>
																</select>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">買い替えの予定</div>
															<div class="radio-out l-height35 clearfix rel flex">
																<div><input type="radio" name="plan" value="あり" id="plan1" class="radio" <?php if(isset($_POST['plan']) && ($_POST['plan']=='あり')){print " checked='checked'";} ?>><label for="plan1" class="label">あり</label></div>
																<div><input type="radio" name="plan" value="なし" id="plan2" class="radio" <?php if(isset($_POST['plan']) && ($_POST['plan']=='なし')){print " checked='checked'";} ?>><label for="plan2" class="label">なし</label></div>
																<div><input type="radio" name="plan" value="未定" id="plan3" class="radio" <?php if(isset($_POST['plan']) && ($_POST['plan']=='未定')){print " checked='checked'";} ?>><label for="plan3" class="label">未定</label></div>
																<div><input type="radio" name="plan" value="済" id="plan4" class="radio" <?php if(isset($_POST['plan']) && ($_POST['plan']=='済')){print " checked='checked'";} ?>><label for="plan4" class="label">済</label></div>
																<p class="caution"> ※いずれか一つをご選択ください。</p>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1"><span class="hissu">＊</span>購入検討理由</div>
															<div class="radio-out l-height35 clearfix rel flex">
																<div class="error"><?php print $err14; ?></div>
																<div class="left f-left reason">
																	<div><input type="checkbox" name="reason" value="家賃がもったいない為" id="reason1" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='家賃がもったいない為')){print " checked='checked'";} ?>><label for="reason1" class="label">家賃がもったいない為</label></div>
																	<div><input type="radio" name="reason" value="家族が増えるため" id="reason2" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='家族が増えるため')){print " checked='checked'";} ?>><label for="reason2" class="label">家族が増えるため</label></div>
																	<div><input type="radio" name="reason" value="結婚を機に" id="reason3" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='結婚を機に')){print " checked='checked'";} ?>><label for="reason3" class="label">結婚を機に</label></div>
																	<div><input type="radio" name="reason" value="親族の為" id="reason4" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='親族の為')){print " checked='checked'";} ?>><label for="reason4" class="label">親族の為</label></div>
																	<div><input type="radio" name="reason" value="現在の住居が古くなった為" id="reason5" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='現在の住居が古くなった為')){print " checked='checked'";} ?>><label for="reason5" class="label">現在の住居が古くなった為</label></div>
																	<div><input type="radio" name="reason" value="現在の住居環境が良くない為" id="reason6" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='現在の住居環境が良くない為')){print " checked='checked'";} ?>><label for="reason6" class="label">現在の住居環境が良くない為</label></div>
																</div>
																<div class="right f-left reason">
																	<div><input type="radio" name="reason" value="通勤・通学を考えて" id="reason7" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='通勤・通学を考えて')){print " checked='checked'";} ?>><label for="reason7" class="label">通勤・通学を考えて</label></div>
																	<div><input type="radio" name="reason" value="社宅の期限が切れる為" id="reason8" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='社宅の期限が切れる為')){print " checked='checked'";} ?>><label for="reason8" class="label">社宅の期限が切れる為</label></div>
																	<div><input type="radio" name="reason" value="地縁がある為" id="reason9" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='地縁がある為')){print " checked='checked'";} ?>><label for="reason9" class="label">地縁がある為</label></div>
																	<div><input type="radio" name="reason" value="投資用" id="reason10" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='投資用')){print " checked='checked'";} ?>><label for="reason10" class="label">投資用</label></div>
																	<div><input type="radio" name="reason" value="現在の住居が手狭になった為" id="reason11" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='現在の住居が手狭になった為')){print " checked='checked'";} ?>><label for="reason11" class="label">現在の住居が手狭になった為</label></div>
																	<div><input type="radio" name="reason" value="その他" id="reason12" class="radio" <?php if(isset($_POST['reason']) && ($_POST['reason']=='その他')){print " checked='checked'";} ?>><label for="reason12" class="label">その他</label></div>
																</div>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">駐車場の<br>ご利用について</div>
															<div class="radio-out l-height35 clearfix rel flex">
																<div><input type="radio" name="parking" value="要" id="parking1" class="radio" <?php if(isset($_POST['parking']) && ($_POST['parking']=='要')){print " checked='checked'";} ?>><label for="parking1" class="label">要</label></div>
																<div><input type="radio" name="parking" value="不要" id="parking2" class="radio" <?php if(isset($_POST['parking']) && ($_POST['parking']=='不要')){print " checked='checked'";} ?>><label for="parking2" class="label">不要</label></div>
																<div><input type="radio" name="parking" value="未定" id="parking3" class="radio" <?php if(isset($_POST['parking']) && ($_POST['parking']=='未定')){print " checked='checked'";} ?>><label for="parking3" class="label">未定</label></div>
																<p class="caution">※いずれか一つをご選択ください。</p>
															</div>
														</div>
														<div class="in-table mt30">
															<div class="t1">ご購入希望時期</div>
															<div class="rel">
																<select name="purchase" id="purchase" class="mid2">
																	<option value="" selected>お選びください</option>
																	<option value="すぐに" <?php if(isset($_POST['purchase']) && ($_POST['purchase']=='すぐに')){print "selected";} ?>>すぐに</option>
																	<option value="3ヶ月以内" <?php if(isset($_POST['purchase']) && ($_POST['purchase']=='3ヶ月以内')){print "selected";} ?>>3ヶ月以内</option>
																	<option value="6ヶ月以内" <?php if(isset($_POST['purchase']) && ($_POST['purchase']=='6ヶ月以内')){print "selected";} ?>>6ヶ月以内</option>
																	<option value="1年以内" <?php if(isset($_POST['purchase']) && ($_POST['purchase']=='1年以内')){print "selected";} ?>>1年以内</option>
																	<option value="2年以内" <?php if(isset($_POST['purchase']) && ($_POST['purchase']=='2年以内')){print "selected";} ?>>2年以内</option>
																	<option value="その他" <?php if(isset($_POST['purchase']) && ($_POST['purchase']=='その他')){print "selected";} ?>>その他</option>
																</select>
															</div>
														</div>
													</div><!-- /.table-out -->
												</div>
											</div><!-- /.rows -->
										</div><!-- /.teble -->
										<div class="top mt40">
											ご提供いただいた個人情報につきましては、当社のプライバシーポリシーに基づき、<br>
											責任をもって適正に管理いたします。<br>
											お問合せの際には、<a href="https://www.nippon-grande.co.jp/privacy_policy/01.html" target="_blank">個人情報保護方針</a>をご確認ください。
										</div>
										<input type="hidden" name="cmd" value="confirm">
										<div class="flex submit-btn fmin">
											<div class="reset-link mincho">
												<a href="./docu_request.php" onclick="" class="">リセット</a>
											</div>
											<div class="submit-link mincho btn_wrap">
												<a href="#" onclick="document.form1.submit();" class="light">確認画面へ</a>
											</div>
										</div><!-- /.submit-btn -->
									</form>
								<?php }else{ ?>
									<form action="./sendmail2" method="post" name="form2">
										<div class="table">
											<div class="rows">
												<div class="th">資料請求物件</div>
												<div class="td">
													<div class="radio-out l-height35">
														<div><?php print $_POST['place']; ?></div>
														<input type="hidden" name="place" value="<?php print $_POST['place']; ?>">
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">物件を何で<br class="pc">お知りになりましたか</div>
												<div class="td">
													<div class="radio-out l-height35 clearfix">
														<div><?php print $_POST['know']; ?></div>
														<input type="hidden" name="know" value="<?php print $_POST['know']; ?>">
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">お名前</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table name">
															<div class="t1">お名前</div>
															<div>
																<?php print $_POST['na1']; ?><?php print $_POST['na2']; ?>様
																<input type="hidden" name="na1" value="<?php print $_POST['na1']; ?>">
																<input type="hidden" name="na2" value="<?php print $_POST['na2']; ?>">
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1">フリガナ</div>
															<div>
																<?php print $_POST['kana1']; ?><?php print $_POST['kana2']; ?>様
																<input type="hidden" name="kana1" value="<?php print $_POST['kana1']; ?>">
																<input type="hidden" name="kana2" value="<?php print $_POST['kana2']; ?>">
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">メールアドレス</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table name">
															<div class="t1">メールアドレス</div>
															<div>
																<?php print $_POST['mail1']; ?>
																<input type="hidden" name="mail1" value="<?php print $_POST['mail1']; ?>">
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">ご住所</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table address">
															<div class="t1">郵便番号</div>
															<div>
																<?php print $_POST['zip']; ?>
																<input type="hidden" name="zip" value="<?php print $_POST['zip']; ?>">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1">都道府県</div>
															<div>
																<?php print $_POST['pref']; ?>
																<input type="hidden" name="pref" value="<?php print $_POST['pref']; ?>">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1">市区町村</div>
															<div>
																<?php print $_POST['address']; ?>
																<input type="hidden" name="address" value="<?php print $_POST['address']; ?>">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1">丁目番地</div>
															<div>
																<?php print $_POST['banchi']; ?>
																<input type="hidden" name="banchi" value="<?php print $_POST['banchi']; ?>">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1">マンション名</div>
															<div>
																<?php print $_POST['roomname']; ?>
																<input type="hidden" name="roomname" value="<?php print $_POST['roomname']; ?>">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1">部屋番号</div>
															<div>
																<?php print $_POST['roomnum']; ?>
																<input type="hidden" name="roomnum" value="<?php print $_POST['roomnum']; ?>">
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">電話番号</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table name">
															<div class="t1">電話番号</div>
															<div>
																<?php print $_POST['tel1']; ?>
																<input type="hidden" name="tel1" value="<?php print $_POST['tel1']; ?>">
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1">携帯番号</div>
															<div>
																<?php print $_POST['tel2']; ?>
																<input type="hidden" name="tel2" value="<?php print $_POST['tel2']; ?>">
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
											<div class="rows">
												<div class="th">基本情報</div>
												<div class="td">
													<div class="table-out">
														<div class="in-table">
															<div class="t1">年齢</div>
															<div>
																<?php print $_POST['age']; ?>歳
																<input type="hidden" name="age" value="<?php print $_POST['age']; ?>">
															</div>
														</div>
														<div class="in-table">
															<div class="t1">性別</div>
															<div class="td">
																<div class="radio-out l-height35">
																	<div><?php print $_POST['jender']; ?></div>
																	<input type="hidden" name="jender" value="<?php print $_POST['jender']; ?>">
																</div><!-- /.radio-out -->
															</div><!-- /.td -->
														</div>
														<div class="in-table">
															<div class="t1">ご職業</div>
															<div>
																<?php print $_POST['job']; ?>
																<input type="hidden" name="job" value="<?php print $_POST['job']; ?>">
															</div>
														</div>
														<div class="in-table">
															<div class="t1">現在の住居形態</div>
															<div>
																<?php print $_POST['current']; ?>
																<input type="hidden" name="current" value="<?php print $_POST['current']; ?>">
															</div>
														</div>
														<div class="in-table">
															<div class="t1">ご希望の間取り</div>
															<div class="td">
																<div class="radio-out l-height35">
																	<div><?php print $_POST['layout']; ?></div>
																	<input type="hidden" name="layout" value="<?php print $_POST['layout']; ?>">
																</div><!-- /.radio-out -->
															</div><!-- /.td -->
														</div>
														<div class="in-table">
															<div class="t1">ご希望の広さ</div>
															<div class="td">
																<div>
																	<?php print $_POST['require']; ?>
																	<input type="hidden" name="require" value="<?php print $_POST['require']; ?>">
																</div>
															</div>
														</div>
														<div class="in-table">
															<div class="t1">ご予算</div>
															<div class="td">
																<div>
																	<?php print $_POST['budget']; ?>
																	<input type="hidden" name="budget" value="<?php print $_POST['budget']; ?>">
																</div>
															</div>
														</div>
														<div class="in-table">
															<div class="t1">自己資金</div>
															<div class="td">
																<div>
																	<?php print $_POST['fund']; ?>
																	<input type="hidden" name="fund" value="<?php print $_POST['fund']; ?>">
																</div>
															</div>
														</div>
														<div class="in-table">
															<div class="t1">家族数</div>
															<div class="td">
																<div>
																	<?php print $_POST['family']; ?>
																	<input type="hidden" name="family" value="<?php print $_POST['family']; ?>">
																</div>
															</div>
														</div>
														<div class="in-table">
															<div class="t1">家族構成</div>
															<div class="td">
																<div class="radio-out l-height35">
																	<div><?php print $_POST['structure']; ?></div>
																	<input type="hidden" name="structure" value="<?php print $_POST['structure']; ?>">
																</div><!-- /.radio-out -->
															</div>
														</div>
														<div class="in-table">
															<div class="t1">世帯主ご職業</div>
															<div class="td">
																<div>
																	<?php print $_POST['householder']; ?>
																	<input type="hidden" name="householder" value="<?php print $_POST['householder']; ?>">
																</div>
															</div>
														</div>
														<div class="in-table">
															<div class="t1">ご年収</div>
															<div class="td">
																<div>
																	<?php print $_POST['income']; ?>
																	<input type="hidden" name="income" value="<?php print $_POST['income']; ?>">
																</div>
															</div>
														</div>
														<div class="in-table">
															<div class="t1">買い替えの予定</div>
															<div class="td">
																<div class="radio-out l-height35">
																	<div><?php print $_POST['plan']; ?></div>
																	<input type="hidden" name="plan" value="<?php print $_POST['plan']; ?>">
																</div><!-- /.radio-out -->
															</div>
														</div>
														<div class="in-table">
															<div class="t1">購入検討理由</div>
															<div class="td">
																<div class="radio-out l-height35">
																	<div><?php print $_POST['reason']; ?></div>
																	<input type="hidden" name="reason" value="<?php print $_POST['reason']; ?>">
																</div><!-- /.radio-out -->
															</div>
														</div>
														<div class="in-table">
															<div class="t1">駐車場の<br>ご利用について</div>
															<div class="td">
																<div class="radio-out l-height35">
																	<div><?php print $_POST['parking']; ?></div>
																	<input type="hidden" name="parking" value="<?php print $_POST['parking']; ?>">
																</div><!-- /.radio-out -->
															</div>
														</div>
														<div class="in-table">
															<div class="t1">ご購入希望時期</div>
															<div class="td">
																<div>
																	<?php print $_POST['purchase']; ?>
																	<input type="hidden" name="purchase" value="<?php print $_POST['purchase']; ?>">
																</div>
															</div>
														</div>
													</div><!-- /.table-out -->
												</div>
											</div>
										</div><!-- /.table -->
										<div class="top mt40">
											ご提供いただいた個人情報につきましては、当社のプライバシーポリシーに基づき、<br>
											責任をもって適正に管理いたします。<br>
											お問合せの際には、<a href="https://www.nippon-grande.co.jp/privacy_policy/01.html" target="_blank">個人情報保護方針</a>をご確認ください。
										</div>
										<input type="hidden" name="type" value="send">
										<div class="flex submit-btn">
											<div class="reset-link mincho">
												<a href="#" onclick="history.back();" class="">戻る</a>
											</div>
											<div class="submit-link mincho btn_wrap">
												<a href="#" onclick="document.form2.submit();" class="light">送信する</a>
											</div>
										</div><!-- /.submit-btn -->
									</form>
								<?php } ?>
							</div>
						</div><!-- /.in -->
					</div><!-- /.contents -->
				</div><!-- /.contact -->
			</div>
		</div>

		<?php
		include_once('../footer_upside.php');
		?>

	</main>

	<footer id="footer">
		<nav class="footer-nav">

			<?php
			include_once('../footer_sp.php');
			?>

		</nav>

		<?php
		include_once('../footer.php');
		?>
    </footer>
    <?php
      include_once('../common-js.php');
    ?>
</body>
</html>
