<?php

$week = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];

if($_POST['type'] == "send"){
	$place = $_POST['place'];
	$know = $_POST['know'];
	$na1 = $_POST['na1'];
	$na2 = $_POST['na2'];
	$kana1 = $_POST['kana1'];
	$kana2 = $_POST['kana2'];
	$name = $_POST['na1'].$_POST['na2']."様";
	$kana = $_POST['kana1'].$_POST['kana2']."様";
	$mail1 = $_POST['mail1'];
	$zip = $_POST['zip'];
	$pref = $_POST['pref'];
	$address = $_POST['address'];
	$banchi = $_POST['banchi'];
	$roomname = $_POST['roomname'];
	$roomnum = $_POST['roomnum'];
	$tel1 = $_POST['tel1'];
	$tel2 = $_POST['tel2'];
	$age = $_POST['age']."歳";
	$jender = $_POST['jender'];
	$job = $_POST['job'];
	$current = $_POST['current'];
	$layout = $_POST['layout'];
	$require = $_POST['require'];
	$budget = $_POST['budget'];
	$fund = $_POST['fund'];
	$family = $_POST['family'];
	$structure = $_POST['structure'];
	$householder = $_POST['householder'];
	$income = $_POST['income'];
	$plan = $_POST['plan'];
	$reason = $_POST['reason'];
	$parking = $_POST['parking'];
	$purchase = $_POST['purchase'];

		date_default_timezone_set('Asia/Tokyo');
	$senddate = $week.date("r");
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$ip = $_SERVER["REMOTE_ADDR"];
	$host = $_SERVER['REMOTE_HOST'];

//管理者宛
	$message =<<<EOM
 {$senddate}
資料請求フォームより以下のメールを受付ました。
──────────────────────────
[ 資料希望物件 ] {$place}
[ 物件を何でお知りになりましたか ] {$know}
[ 姓 ]{$na1}
[ 名 ] {$na2}
[ セイ ] {$kana1}
[ メイ ] {$kana2}
[ email ] {$mail1}
[ 郵便番号 ] {$zip}
[ 都道府県 ] {$pref}
[ 市区町村 ] {$address}
[ 丁目番地 ] {$banchi}
[ マンション名 ] {$roomname}
[ 部屋番号 ] {$roomnum}
[ 携帯電話 ] {$tel2}
[ 年齢 ] {$age}
[ 性別 ] {$jender}
[ ご職業 ] {$job}
[ 現在の住居形態 ] {$current}
[ ご希望の間取り ] {$layout}
[ ご希望の広さ ] {$require}
[ ご予算 ] {$budget}
[ 自己資金 ] {$fund}
[ 家族数 ] {$family}
[ 家族構成 ] {$structure}
[ 世帯主ご職業 ] {$householder}
[ ご年収 ] {$income}
[ 買い替えの予定 ] {$plan}
[ 購入検討理由 ] {$reason}
[ 駐車場のご利用について ] {$parking}
[ ご購入希望時期 ] {$purchase}

──────────────────────────

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
日本グランデ株式会社
〒060-0042 札幌市中央区大通西5丁目1番地1 桂和大通ビル38 7F
TEL / 011-210-0073 FAX / 011-210-0081
http://www.nippon-grande.co.jp
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
[ POST DATE ]  {$senddate}
[ HOST NAME ] {$host}
[ IP ADDRESS ] {$ip}
[ USER AGENT ] {$ua}


EOM;

//ユーザ宛
	$message2 =<<<EOM
{$na1}様
──────────────────────────

この度はお問い合せ頂き誠にありがとうございました。
改めて担当者よりご連絡をさせていただきます。

─ご送信内容の確認─────────────────
[ 資料希望物件 ] {$place}
[ 物件を何でお知りになりましたか ]{$know}
[ 姓 ] {$na1}
[ 名 ] {$na2}
[ セイ ] {$kana1}
[ メイ ] {$kana2}
[ email ] {$mail1}
[ 郵便番号 ] {$zip}
[ 都道府県 ] {$pref}
[ 市区町村 ] {$address}
[ 丁目番地 ] {$banchi}
[ 電話番号 ] {$tel1}
[ 年齢 ] {$age}
[ 性別 ] {$jender}
[ 現在の住居形態 ] {$current}
[ ご希望の間取り ] {$layout}
[ 購入検討理由 ] {$reason}
──────────────────────────

このメールアドレスは配信専用となっております。
本メールに直接ご返信頂いてもご回答いたしかねます。
また、このメールに心当たりのない場合は、お手数ですが
下記連絡先までお問い合わせください。

この度はお問い合わせ重ねてお礼申し上げます。

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
　日本グランデ株式会社
　〒060-0042 札幌市中央区大通西5丁目1番地1 桂和大通ビル38　7F
　TEL / 011-210-0073　FAX / 011-210-0081
　http://www.nippon-grande.co.jp
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;

	mb_language("ja");
	mb_internal_encoding("UTF-8");
	$title = "【グランファーレ真駒内グランフォレスト】資料請求ありがとうございます";
	$title2 = "【グランファーレ真駒内グランフォレスト】お客様より資料請求がありました。";
	//from管理者

	$header = "From: " .mb_encode_mimeheader("日本グランデ株式会社") ."<grande@nippon-grande.co.jp>\r\n";
	$header .= 'Return-Path: grande@nippon-grande.co.jp';

	$admin = "grande@nippon-grande.co.jp,k.yonemori@nippon-grande.co.jp,m.kuroiwa@nippon-grande.co.jp";

	//管理者
	if(mb_send_mail($admin, $title2, $message, $header)){
		//ユーザ
		if(!mb_send_mail($mail1, $title, $message2, $header)) {
			header( "Location: ./docu_request" );
			exit;
		}else{
			header( "Location: ./thanks" );
			exit;
		}
	}else{
		header( "Location: ./docu_request" );
		exit;
	}
}else{
	header( "Location: ./docu_request" );
	exit;
}
?>
