<?php

$week = ['Sun','Mon','Tue','Wed','Thu','Fri','Sat'];

if($_POST['type'] == "send"){
	$place = $_POST['place'];
	$know = $_POST['know'];
	$date1 = $_POST['month1']."月".$_POST['day1']."日".$_POST['hour1']."時".$_POST['time1']."分頃";
	$date2 = $_POST['month2']."月".$_POST['day2']."日".$_POST['hour2']."時".$_POST['time2']."分頃";
	$na1 = $_POST['na1'];
	$na2 = $_POST['na2'];
	$kana1 = $_POST['kana1'];
	$kana2 = $_POST['kana2'];
	$name = $_POST['na1'].$_POST['na2']."様";
	$kana = $_POST['kana1'].$_POST['kana2']."様";
	$age = $_POST['age']."歳";
	$mem = $_POST['mem']."人";
	$mail = $_POST['mail1'];
	$zip = $_POST['zip'];
	$pref = $_POST['pref'];
	$addr = $_POST['address'];
	$banchi = $_POST['banchi'];
	$roomname = $_POST['roomname'];
	$roomnum = $_POST['roomnum'];
	$address = $_POST['pref'].$_POST['address'].$_POST['banchi'].$_POST['roomname'].$_POST['roomnum'];
	$tel1 = $_POST['tel1'];
	$tel2 = $_POST['tel2'];

	date_default_timezone_set('Asia/Tokyo');
	$senddate = $week.date("r");
	$ua = $_SERVER['HTTP_USER_AGENT'];
	$ip = $_SERVER["REMOTE_ADDR"];
	$host = $_SERVER['REMOTE_HOST'];

//管理者宛
	$message =<<<EOM
{$senddate}
見学予約フォームより以下のメールを受付ました。
──────────────────────────
[ 見学予約物件 ]{$place}
[ 何でお知りになりましたか ]{$know}
[ ご来訪予定日（第1候補） ] {$date1}
[ ご来訪予定日（第2候補） ] {$date2}
[ 姓 ]{$na1}
[ 名 ] {$na2}
[ セイ ] {$kana1}
[ メイ ] {$kana2}
[ 年齢 ] {$age}
[ 入居予定人数 ] {$mem}
[ email ] {$mail}
[ 郵便番号 ] {$zip}
[ 都道府県 ] {$pref}
[ 市区町村 ] {$addr}
[ 丁目番地 ] {$banchi}
[ マンション名 ] {$roomname}
[ 部屋番号 ] {$roomnum}
[ 携帯電話 ] {$tel2}
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
[ 見学予約物件 ]{$place}
[ 何でお知りになりましたか ]{$know}
[ ご来訪予定日（第1候補） ] {$date1}
[ ご来訪予定日（第2候補） ] {$date2}
[ 姓 ]{$na1}
[ 名 ] {$na2}
[ セイ ] {$kana1}
[ メイ ] {$kana2}
[ 年齢 ] {$age}
[ 入居予定人数 ] {$mem}
[ email ] {$mail}
[ 郵便番号 ] {$zip}
[ 都道府県 ] {$pref}
[ 市区町村 ] {$addr}
[ 丁目番地 ] {$banchi}
[ マンション名 ] {$roomname}
[ 部屋番号 ] {$roomnum}
[ 携帯電話 ] {$tel2}
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
	$title = "【グランファーレ幌西グランシェール】お問い合わせありがとうございました";
	$title2 = "【グランファーレ幌西グランシェール】お客様よりお問い合わせがありました。";
	//from管理者

	$header = "From: " .mb_encode_mimeheader("日本グランデ株式会社") ."<grande@nippon-grande.co.jp>\r\n";
	$header .= 'Return-Path: grande@nippon-grande.co.jp';
	
	$admin = "grande@nippon-grande.co.jp,k.yonemori@nippon-grande.co.jp,m.kuroiwa@nippon-grande.co.jp";

	//管理者
	if(mb_send_mail($admin, $title2, $message, $header)){
		//ユーザ
		if(!mb_send_mail($mail, $title, $message2, $header)) {
			header("Location: ./tour-reservation");
			exit;
		}else{
			header("Location: ./thanks");
			exit;
		}
	}else{
		header("Location: ./tour-reservation");
		exit;
	}
}else{
	header("Location: ./tour-reservation");
	exit;
}
?>
