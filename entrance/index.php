<?php
	include_once('../header_1a.php');
?>

<link rel="stylesheet" href="<?php print URL; ?>/assets/css/entrance.css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<title>充実の共用施設 | グランファーレ真駒内グランフォレスト | 日本グランデ株式会社</title>
<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「真駒内」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ真駒内グランフォレスト">
<meta name="keywords" content="グランファーレ真駒内グランフォレスト,真駒内,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>

<!-- コンテンツ -->
<main class="main">
    <div class="mainvisual">
        <h1 class="fadeInTrigger">
            <picture>
                <source media="(min-width: 768px)" type="image/webp" srcset="<?php print URL; ?>/assets/webp/entrance/mv_pc.webp">
                <source type="image/webp" srcset="<?php print URL; ?>/assets/webp/entrance/mv_sp.webp">
                <source media="(min-width: 768px)" type="image/jpeg" srcset="<?php print URL; ?>/assets/img/entrance/mv_pc.jpg">
                <img src="<?php print URL; ?>/assets/img/entrance/mv_sp.jpg" alt="充実の共用施設" class="mainvisual__img">
            </picture>
        </h1>
        <p class="mainvisual-title mainvisual-title_facilities fadeInTrigger delay-time03"><span class="title-text">充実の共用施設</span></p>
    </div>
    <div class="tab-area tab-area_sub" id="intro">
        <div class="tabBox">
            <ul class="tab-list">
                <li class="one_tab js-tab-switch is-active" data-tab="tab-1">コンシェルジュ</li>
                <li class="one_tab js-tab-switch" data-tab="tab-2">シアター＆カラオケ</li>
                <li class="one_tab js-tab-switch" data-tab="tab-3">テレワークルーム</li>
                <li class="one_tab js-tab-switch" data-tab="tab-4">フィットネスジム</li>
                <li class="one_tab js-tab-switch" data-tab="tab-7">ピットインガレージ</li>
                <li class="one_tab js-tab-switch" data-tab="tab-5">スカイガーデン</li>
                <li class="one_tab js-tab-switch" data-tab="tab-6">ペット対応</li>
            </ul>
        </div>

        <div class="contents">
            <!-- コンシェルジュ -->
            <?php
            include_once('concierge.php');
          ?>
            <!-- シアター＆カラオケ -->
            <?php
            include_once('theater.php');
          ?>

            <!-- テレワークルーム-->
            <?php
            include_once('working.php');
          ?>
            <!-- フィットネスジム -->
            <?php
            include_once('fitness.php');
          ?>
            <!-- スカイガーデン-->
            <?php
            include_once('sky.php');
          ?>
            <!-- ペット対応 -->
            <?php
            include_once('pet.php');
          ?>
            <?php
            include_once('garage.php');
          ?>

        </div>
        <!--contents-->

        <!-- ▼Tab under▼ -->
        <div class="tabBox">
            <ul class="tab-list tab-list_bottom bottom">
                <li class="one_tab js-tab-switch js-tab-switch_bottom is-active" data-tab="tab-1">コンシェルジュ</li>
                <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-2">シアター＆カラオケ</li>
                <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-3">テレワークルーム</li>
                <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-4">フィットネスジム</li>
                <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-5">スカイガーデン</li>
                <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-6">ペット対応</li>
                <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-7">ピットインガレージ</li>
            </ul>

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