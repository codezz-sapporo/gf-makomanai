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
		
		if(empty($_POST['month1']) && empty($_POST['day1']) && empty($_POST['hour1'])  && empty($_POST['time1'])){
			$err3 = true;
			$err3 = "※必須項目です。";
		}else{
			$err3 = false;
			$month1 = htmlspecialchars($_POST['month1'], ENT_QUOTES, "UTF-8");
			$day1 = htmlspecialchars($_POST['day1'], ENT_QUOTES, "UTF-8");
			$hour1 = htmlspecialchars($_POST['hour1'], ENT_QUOTES, "UTF-8");
			$time1 = htmlspecialchars($_POST['time1'], ENT_QUOTES, "UTF-8");
		}
		/*
		if(empty($_POST['month2']) && empty($_POST['day2']) && empty($_POST['hour2'])  && empty($_POST['time2'])){
			$err3 = true;
			$err3 = "※必須項目です。";
		}else{
			$err3 = false;
			*/
			$month2 = htmlspecialchars($_POST['month2'], ENT_QUOTES, "UTF-8");
			$day2 = htmlspecialchars($_POST['day2'], ENT_QUOTES, "UTF-8");
			$hour2 = htmlspecialchars($_POST['hour2'], ENT_QUOTES, "UTF-8");
			$time2 = htmlspecialchars($_POST['time2'], ENT_QUOTES, "UTF-8");
		/*
		}
		*/
		
		if(empty($_POST['na1']) && empty($_POST['na2'])){
			$err4 = true;
			$err4 = "※必須項目です。";
		}else{
			$err4 = false;
			$na1 = htmlspecialchars($_POST['na1'], ENT_QUOTES, "UTF-8");
			$na2 = htmlspecialchars($_POST['na2'], ENT_QUOTES, "UTF-8");
		}

		$kana1 = htmlspecialchars($_POST['kana1'], ENT_QUOTES, "UTF-8");
		$kana2 = htmlspecialchars($_POST['kana2'], ENT_QUOTES, "UTF-8");
		$age = htmlspecialchars($_POST['age'], ENT_QUOTES, "UTF-8");
		$mem = htmlspecialchars($_POST['mem'], ENT_QUOTES, "UTF-8");
		
		if($_POST['mail1']){
			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['mail1'])) {
				$err5 = false;
				$mail1 = htmlspecialchars($_POST['mail1'], ENT_QUOTES, "UTF-8");
			}else{
				$err5 = "※メールアドレスの形式が正しくありません。";
			}
		}else{
			$err5 = "※必須項目です。";
		}
		
		if($_POST['mail2']){
			if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $_POST['mail2'])){
				if($mail1 == $_POST['mail2']){
					$err6 = false;
					$mail1 = htmlspecialchars($_POST['mail2'], ENT_QUOTES, "UTF-8");
				}else{
					$err6 = "※メールアドレスが違います。";
				}
			}else{
				$err6 = "※メールアドレスの形式が正しくありません。";
			}
		}else{
			$err6 = "※必須項目です。";
		}

		if(empty($_POST['zip'])){
			$err7 = true;
			$err7 = "※必須項目です。";
		}else{
			$err7 = false;
			$zip = htmlspecialchars($_POST['zip'], ENT_QUOTES, "UTF-8");
		}
		
		if(empty($_POST['pref'])){
			$err8 = true;
			$err8 = "※必須項目です。";
		}else{
			$err8 = false;
			$pref = $_POST['pref'];
		}
		
		if(empty($_POST['address'])){
			$err9 = true;
			$err9 = "※必須項目です。";
		}else{
			$err9 = false;
			$address = htmlspecialchars($_POST['address'], ENT_QUOTES, "UTF-8");
		}
		
		if(empty($_POST['banchi'])){
			$err10 = true;
			$err10 = "※必須項目です。";
		}else{
			$err10 = false;
			$banchi = htmlspecialchars($_POST['banchi'], ENT_QUOTES, "UTF-8");
		}
		
		$roomname = htmlspecialchars($_POST['roomname'], ENT_QUOTES, "UTF-8");
		$roomnum = htmlspecialchars($_POST['roomnum'], ENT_QUOTES, "UTF-8");
		
		if(!empty($_POST['tel1'])){
			if(preg_match("/^(0{1}\d{9,10})$/", $_POST['tel1'])){
				$err11 = false;
				$tel1 = htmlspecialchars($_POST['tel1'], ENT_QUOTES, "UTF-8");
			}else{
				$err11 = true;
				$err11 = "※電話番号の形式が正しくありません。";
			}
		}

		if(empty($_POST['tel2'])){
			$err12 = true;
			$err12 = "※必須項目です。";
		}else{
			if(preg_match("/^(0{1}\d{9,10})$/", $_POST['tel2'])){
				$err12 = false;
				$tel2 = htmlspecialchars($_POST['tel2'], ENT_QUOTES, "UTF-8");
			}else{
				$err12 = true;
				$err12 = "※電話番号の形式が正しくありません。";
			}
		}

		if($err1 || $err2 || $err3 || $err4 || $err5 || $err6 || $err7 || $err8 || $err9 || $err10 || $err11 || $err12){
			$error = true;
		}
	}
?>

<?php
	include_once('../header_1b.php');
?>

	<link rel="stylesheet" href="<?php print URL; ?>/assets/css/contact.css" />

	<title>来場予約 | グランファーレ真駒内フォレスト | 日本グランデ株式会社</title>
	<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「真駒内」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ真駒内フォレスト">
	<meta name="keywords" content="グランファーレ真駒内フォレスト,真駒内,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>

	<main class="main">
		<div class="mainvisual mainvisual_only-text">
			<h1 class="mainvisual-title mainvisual-title_tour"><span class="title-text">来場予約</span></h1>
		</div>

		<div class="tab-area tab-area_sub" id="content">

			<div class="contents">

				<div class="contact-page tab_main js-tab-cts is-active">
					<div class="contents tab-section">
						<div class="in">
							<div class="top fgo">
								■ご来訪希望日時をご選択の上、《ご来訪希望日時前日》までに、下記フォームよりご予約ください。<br>
								■当日または、掲載以外の日程でのご案内をご希望の方は、お電話にてご予約ください。<br>
								※下記フォームにご入力後、画面下の送信ボタンを押してください。<br>
								※英数字は（半角）でご入力ください。<br>
								<span class="hissu">＊は必須項目です。</span>
							</div>
							<div class="inquiry mt50 fgo" id="inquiry">
								<?php if($error || empty($_POST)){ ?>
									<form action="#inquiry" method="post" name="form1">
										<div class="table">
											<div class="rows">
												<div class="th">見学会予約</div>
												<div class="td">
													<p><span class="hissu">＊</span>見学希望物件をお選びください。</p>
													<div class="radio-out l-height35 mt40 rel">
														<div class="error"><?php print $err1; ?></div>
														<div>
															<input type="radio" name="place" value="グランファーレ真駒内フォレスト" id="place8" class="radio" <?php if(isset($_POST['place']) && ($_POST['place']=='グランファーレ真駒内フォレスト')){print " checked='checked'";} ?>><label for="place8" class="label">グランファーレ真駒内フォレスト</label>
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
												</div><!-- /.td -->
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
												<div class="th">ご来訪予定日</div>
												<div class="td">
													<p>ご来訪予定日時</p>
													<div class="table-out mt40 rel">
														<div class="error"><?php print $err3; ?></div>
														<div class="in-table time">
															<div class="t1"><span class="hissu">＊</span>来場予約(第1候補)</div>
															<div>
																<input type="text" name="month1" value="<?php print $month1; ?>" class="short">月
																<input type="text" name="day1" value="<?php print $day1; ?>" class="short">日
																<input type="text" name="hour1" value="<?php print $hour1; ?>" class="short">時
																<input type="text" name="time1" value="<?php print $time1; ?>" class="short">分頃
															</div>
														</div>
														<div class="in-table time mt30">
															<div class="t1">来場予約(第2候補)</div>
															<div>
																<input type="text" name="month2" value="<?php print $month2; ?>" class="short">月
																<input type="text" name="day2" value="<?php print $month2; ?>" class="short">日
																<input type="text" name="hour2" value="<?php print $month2; ?>" class="short">時
																<input type="text" name="time2" value="<?php print $month2; ?>" class="short">分頃
															</div>
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
																<div class="error"><?php print $err4; ?></div>
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
														<div class="in-table name mt30">
															<div class="t1">年齢</div>
															<div>
																<input type="text" name="age" value="<?php print $age; ?>" class="short">歳
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1">入居予定人数</div>
															<div>
																<input type="text" name="mem" value="<?php print $mem; ?>" class="short">人
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
																<div class="error"><?php print $err5; ?></div>
																<input type="text" name="mail1" value="<?php print $mail1; ?>" class="long" placeholder="例：nippon@grande.co.jp">
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1"><span class="hissu">＊</span>確認のためもう一度</div>
															<div class="rel">
																<div class="error"><?php print $err6; ?></div>
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
																<div class="error"><?php print $err7; ?></div>
																<input type="text" name="zip" id="zip" value="<?php print $zip; ?>" class="mid2" placeholder="000-0000">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1"><span class="hissu">＊</span>都道府県</div>
															<div class="rel">
																<div class="error"><?php print $err8; ?></div>
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
																<div class="error"><?php print $err9; ?></div>
																<input type="text" id="address" name="address" value="<?php print $address; ?>" class="mid2" placeholder="例：中央区">
															</div>
														</div>
														<div class="in-table address mt30">
															<div class="t1"><span class="hissu">＊</span>丁目番地</div>
															<div class="rel">
																<div class="error"><?php print $err10; ?></div>
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
																<div class="error"><?php print $err11; ?></div>
																<input type="text" name="tel1" value="<?php print $tel1; ?>" class="long" placeholder="※ハイフンなしでご入力ください">
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1"><span class="hissu">＊</span>携帯番号</div>
															<div class="rel">
																<div class="error"><?php print $err12; ?></div>
																<input type="text" name="tel2" value="<?php print $tel2; ?>" class="long" placeholder="※ハイフンなしでご入力ください">
															</div>
														</div>
													</div><!-- /.radio-out -->
												</div><!-- /.td -->
											</div><!-- /.rows -->
										</div><!-- /.table -->
										<div class="top mt40">
											ご提供いただいた個人情報につきましては、当社のプライバシーポリシーに基づき、<br>
											責任をもって適正に管理いたします。<br>
											お問合せの際には、<a href="https://www.nippon-grande.co.jp/privacy_policy/01.html" target="_blank">個人情報保護方針</a>をご確認ください。
										</div>
										<input type="hidden" name="cmd" value="confirm">
										<div class="flex submit-btn fmin">
											<div class="reset-link">
												<a href="./tour-reservation.php" onclick="" class="">リセット</a>
											</div>
											<div class="submit-link btn_wrap">
												<a href="#" onclick="document.form1.submit();" class="light">確認画面へ</a>
											</div>
										</div><!-- /.submit-btn -->
									</form>
								<?php }else{ ?>
									<form action="./sendmail" method="post" name="form2">
										<div class="table">
											<div class="rows">
												<div class="th">見学会予約</div>
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
												<div class="th">ご来訪予定日</div>
												<div class="td">
													<p>ご来訪予定日時</p>
													<div class="table-out mt40">
														<div class="in-table time">
															<div class="t1">来場予約(第1候補)</div>
															<div><?php print $_POST['month1']; ?>月<?php print $_POST['day1']; ?>日<?php print $_POST['hour1']; ?>時<?php print $_POST['time1']; ?>分頃</div>
															<input type="hidden" name="month1" value="<?php print $_POST['month1']; ?>">
															<input type="hidden" name="day1" value="<?php print $_POST['day1']; ?>">
															<input type="hidden" name="hour1" value="<?php print $_POST['hour1']; ?>">
															<input type="hidden" name="time1" value="<?php print $_POST['time1']; ?>">
														</div>
														<div class="in-table time mt30">
															<div class="t1">来場予約(第2候補)</div>
															<div><?php print $_POST['month2']; ?>月<?php print $_POST['day2']; ?>日<?php print $_POST['hour2']; ?>時<?php print $_POST['time2']; ?>分頃</div>
															<input type="hidden" name="month2" value="<?php print $_POST['month2']; ?>">
															<input type="hidden" name="day2" value="<?php print $_POST['day2']; ?>">
															<input type="hidden" name="hour2" value="<?php print $_POST['hour2']; ?>">
															<input type="hidden" name="time2" value="<?php print $_POST['time2']; ?>">
														</div>
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
														<div class="in-table name mt30">
															<div class="t1">年齢</div>
															<div>
																<?php print $_POST['age']; ?>歳
																<input type="hidden" name="age" value="<?php print $_POST['age']; ?>">
															</div>
														</div>
														<div class="in-table name mt30">
															<div class="t1">入居予定人数</div>
															<div>
																<?php print $_POST['mem']; ?>人
																<input type="hidden" name="mem" value="<?php print $_POST['mem']; ?>">
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
										</div><!-- /.table -->
										<div class="top mt40">
											ご提供いただいた個人情報につきましては、当社のプライバシーポリシーに基づき、<br>
											責任をもって適正に管理いたします。<br>
											お問合せの際には、<a href="https://www.nippon-grande.co.jp/privacy_policy/01.html" target="_blank">個人情報保護方針</a>をご確認ください。
										</div>
										<input type="hidden" name="type" value="send">
										<div class="flex submit-btn">
											<div class="reset-link">
												<a href="#" onclick="history.back();" class="">戻る</a>
											</div>
											<div class="submit-link btn_wrap">
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
