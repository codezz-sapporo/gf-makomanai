<?php
	include_once('../header_1a.php');
?>
  <link rel="stylesheet" href="<?php print URL; ?>/assets/css/slick-theme.css">
	<link rel="stylesheet" href="<?php print URL; ?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?php print URL; ?>/assets/css/location.css" />
	<title>周辺環境 | グランファーレ真駒内フォレスト | 日本グランデ株式会社</title>
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
            <source media="(min-width: 768px)" type="image/webp" srcset="<?php print URL; ?>/assets/webp/location/mv_location_pc.webp">
            <source type="image/webp" srcset="<?php print URL; ?>/assets/webp/location/mv_location_sp.webp">
            <source media="(min-width: 768px)" type="image/jpeg" srcset="<?php print URL; ?>/assets/img/location/mv_location_pc.jpg">
            <img src="<?php print URL; ?>/assets/img/location/mv_location_sp.jpg" alt="周辺環境" class="mainvisual__img">
          </picture>
        </h1>
        <p class="mainvisual-title mainvisual-title_location fadeInTrigger delay-time03"><span class="title-text">周辺環境</span></p>
      </div>


      <div class="tab-area tab-area_location" id="intro">
        <div class="tabBox">
          <ul class="tab-list">
            <li class="one_tab js-tab-switch is-active" data-tab="tab-1">周辺案内図</li>
            <li class="one_tab js-tab-switch" data-tab="tab-2">市電エリア</li>
          </ul>
        </div>

        <div class="contents">
          <!-- VICINITY -->
          <?php
            include_once('vacinity.php');
          ?>

          <!-- STREETCAR -->
          <?php
            include_once('streetcar.php');
          ?>

        </div><!--contents-->

        <!-- ▼Tab under▼ -->
        <div class="tabBox">
          <ul class="tab-list tab-list_bottom bottom">
            <li class="one_tab js-tab-switch js-tab-switch_bottom is-active" data-tab="tab-1">周辺案内図</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-2">市電エリア</li>
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
