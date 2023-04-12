<?php
	include_once('../header_1a.php');
?>

	<link rel="stylesheet" href="<?php print URL; ?>/assets/css/comfort.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<title>プライベートエリア | グランファーレ真駒内フォレスト | 日本グランデ株式会社</title>
	<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「東札幌」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ真駒内フォレスト">
	<meta name="keywords" content="グランファーレ真駒内フォレスト,東札幌,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>

    <!-- コンテンツ -->
    <main class="main">
      <div class="mainvisual">
        <h1 class="fadeInTrigger">
          <picture>
            <source media="(min-width: 768px)" type="image/webp" srcset="<?php print URL; ?>/assets/webp/comfort/mv_pc.webp">
            <source type="image/webp" srcset="<?php print URL; ?>/assets/webp/comfort/mv_sp.webp">
            <source media="(min-width: 768px)" type="image/jpeg" srcset="<?php print URL; ?>/assets/img/comfort/mv_pc.jpg">
            <img src="<?php print URL; ?>/assets/img/comfort/mv_sp.jpg" alt="プライベートエリア" class="mainvisual__img">
          </picture>
        </h1>
        <p class="mainvisual-title mainvisual-title_comfort fadeInTrigger delay-time03"><span class="title-text">プライベートエリア</span></p>
      </div>

      <div class="tab-area tab-area_sub" id="intro">
        <div class="tabBox">
          <ul class="tab-list">
            <li class="one_tab js-tab-switch is-active" data-tab="tab-1">快適さの特等席</li>
            <li class="one_tab js-tab-switch" data-tab="tab-2">リビングダイニング</li>
            <li class="one_tab js-tab-switch" data-tab="tab-3">洋室</li>
            <li class="one_tab js-tab-switch" data-tab="tab-4">玄関</li>
            <li class="one_tab js-tab-switch" data-tab="tab-5">キッチン</li>
            <li class="one_tab js-tab-switch" data-tab="tab-6">バスルーム</li>
            <li class="one_tab js-tab-switch" data-tab="tab-7">ユーティリティ</li>
            <li class="one_tab js-tab-switch" data-tab="tab-8">トイレ</li>
            <li class="one_tab js-tab-switch" data-tab="tab-9">バルコニー</li>
          </ul>
        </div>

        <div class="contents">
          <!-- 快適さの特等席 -->
            <?php
            include_once('special.php');
          ?>

          <!-- リビングダイニング -->
          <?php
            include_once('living.php');
          ?>
          <!-- 洋室 -->
          <?php
            include_once('bed-room.php');
          ?>
          <!-- 玄関 -->
          <?php
            include_once('entrance.php');
          ?>
          <!-- キッチン -->
          <?php
            include_once('kitchen.php');
          ?>
          <!-- バスルーム -->
          <?php
            include_once('bath.php');
          ?>
          <!-- ユーティリティ -->
          <?php
            include_once('utility.php');
          ?>
          <!-- トイレ -->
          <?php
            include_once('toilet.php');
          ?>
          <!-- バルコニー -->
          <?php
            include_once('balcony.php');
          ?>

        </div><!--contents-->

        <!-- ▼Tab under▼ -->
        <div class="tabBox">
          <ul class="tab-list tab-list_bottom bottom">
            <li class="one_tab js-tab-switch js-tab-switch_bottom is-active" data-tab="tab-1">快適さの特等席</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-2">リビングダイニング</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-3">洋室</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-4">玄関</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-5">キッチン</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-6">バスルーム</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-7">ユーティリティ</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-8">トイレ</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-9">バルコニー</li>
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
