<!-- <?php
	include dirname(__FILE__).'/conf/conf.php';
	$folderName = basename(dirname($_SERVER["SCRIPT_NAME"]));
?> -->

<div class="footer rel">
    <div class="footer__logo-area">
        <picture class="footer__property-logo">
            <img src="<?php print URL; ?>/assets/svg/grandfare-logo.svg" alt="日本グランデ株式会社">
        </picture>
        <p class="footer__property-name">GRANDFARE<br>MAKOMANAI GRAND FOREST</p>
    </div>
    <div class="f-inner">
        <div class="f-menu flex">
            <ul>
                <li><a href="<?php print URL; ?>/top/">ホーム</a></li>
                <li class="mt25"><a href="<?php print URL; ?>/location/">周辺環境</a></li>
                <li class="mt25"><a href="<?php print URL; ?>/exterior/">エクステリア</a></li>
            </ul>
            <ul>
                <li><a href="<?php print URL; ?>/entrance/">充実の共用施設</a></li>
                <li class="mt20">
                    <div><a href="<?php print URL; ?>/entrance/index.php?active-tab=tab-1">コンシェルジュ</a></div>
                    <div><a href="<?php print URL; ?>/entrance/index.php?active-tab=tab-2">シアター＆カラオケ</a></div>
                    <div><a href="<?php print URL; ?>/entrance/index.php?active-tab=tab-3">テレワークルーム</a></div>
                    <div><a href="<?php print URL; ?>/entrance/index.php?active-tab=tab-4">フィットネスジム</a></div>
                    <div><a href="<?php print URL; ?>/entrance/index.php?active-tab=tab-5">ピットインガレージ</a></div>
                    <div><a href="<?php print URL; ?>/entrance/index.php?active-tab=tab-6">スカイガーデン</a></div>
                    <div><a href="<?php print URL; ?>/entrance/index.php?active-tab=tab-7">ペット対応</a></div>
                </li>
            </ul>
            <ul>
                <li><a href="<?php print URL; ?>/comfort/">プライベートエリア</a></li>
                <li class="mt20">
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-1">快適さの特等席</a></div>
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-2">リビング・ダイニング</a></div>
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-3">洋室</a></div>
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-4">玄関</a></div>
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-5">キッチン</a></div>
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-6">バスルーム</a></div>
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-7">ユーティリティ</a></div>
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-8">トイレ</a></div>
                    <div><a href="<?php print URL; ?>/comfort/index.php?active-tab=tab-9">バルコニー</a></div>
                </li>
            </ul>
            <ul>
                <li><a href="<?php print URL; ?>/security/">セキュリティ</a></li>
                <li class="mt20">
                    <div><a href="<?php print URL; ?>/security/">IT対応</a></div>
                    <div><a href="<?php print URL; ?>/security/index.php?active-tab=tab-2">ホームセキュリティ</a></div>
                    <div><a href="<?php print URL; ?>/security/index.php?active-tab=tab-3">モバイルセキュリティ</a></div>
                </li>
            </ul>
            <ul>
                <li><a href="<?php print URL; ?>/eco/">エコロジー&amp;エコノミー</a></li>
                <li class="mt20">
                    <div><a href="<?php print URL; ?>/eco/index.php?active-tab=tab-1">エコバリュー</a></div>
                    <div><a href="<?php print URL; ?>/eco/index.php?active-tab=tab-2">構造・品質管理</a></div>
                </li>
                <li class="mt25"><a href="<?php print URL; ?>/g-flex/">自由設計</a></li>
                <li class="mt20">
                    <div><a href="<?php print URL; ?>/g-flex/index.php?active-tab=tab-1">G-FLEX自由設計</a></div>
                    <div><a href="<?php print URL; ?>/g-flex/index.php?active-tab=tab-2">無料セレクト</a></div>
                </li>
            </ul>
            <ul>
                <li><a href="<?php print URL; ?>/floor-plan/">間取り</a></li>
                <li class="mt20">
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-1">A-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-2">B-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-3">C-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-4">D-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-5">E-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-6">F-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-7">G-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-8">H-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-9">I-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-10">J-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-11">K-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-12">L-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-13">M-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-14">N-Type</a></div>
                    <div><a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-15">O-Type</a></div>
                </li>
            </ul>
        </div><!-- /.f-menu -->
        <hr class="pc">
        <div class="cv-bottom clearfix">
            <div class="cv f-left mincho pc footer-inner">
                <div class="link footer-link">
                    <div><a href="<?php print URL; ?>/property/">物件概要</a></div>
                    <div><a href="<?php print URL; ?>/model-room/">マンションギャラリー</a></div>
                </div>
                <div class="footer-btn">
                    <div class="trans"><a class="footer-btn__link" href="<?php print URL; ?>/contact/tour-reservation">来場予約はこちら</a></div>
                    <div class="trans"><a class="footer-btn__link" href="<?php print URL; ?>/contact/docu_request">資料請求</a></div>
                    <div class="btn_wrap"><a class="footer-btn__link" href="<?php print URL; ?>/contact/online-reservation">オンライン商談予約</a></div>
                </div>
            </div>
            <div class="tel-area f-right">
                <div class="sp title">お電話でのお問い合わせは</div>
                <div class="tel c-text"><a href="tel:0120215101">0120-21-5101</a></div>
                <hr class="sp">
                <div class="time">[営業時間]平日・土・日・祝／9:30~20:00］</div>
            </div>
        </div><!-- /.cv-area -->
    </div><!-- /.f-inner -->
    <div class="footer-btm mt60 clearfix rel">
        <a href="https://www.nippon-grande.co.jp/" target="_blank" class="footer__link">
            <div class="f-left"><img src="<?php print URL; ?>/assets/svg/corporate-logo.svg" alt="日本グランデ株式会社"></div>
        </a>
        <div class="copy ">COPYRIGHT &copy; Nippon Grande.CO.,LTD.All Rights Reserved.</div>
    </div><!-- /.footer-btm -->
</div><!-- /.footer -->