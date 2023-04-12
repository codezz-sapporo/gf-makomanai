<?php
	include_once('../header_1a.php');
?>

	<link rel="stylesheet" href="<?php print URL; ?>/assets/css/security.css" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<title>セキュリティ | グランファーレ幌西グランシェール | 日本グランデ株式会社</title>
	<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「東札幌」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ幌西グランシェール">
	<meta name="keywords" content="グランファーレ幌西グランシェール,東札幌,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>

    <!-- コンテンツ -->
    <main class="main">
      <div class="mainvisual">
        <picture class="fadeInTrigger">
          <source media="(min-width: 768px)" type="image/webp" srcset="<?php print URL; ?>/assets/webp/security/mv_pc.webp">
          <source type="image/webp" srcset="<?php print URL; ?>/assets/webp/security/mv_sp.webp">
          <source media="(min-width: 768px)" type="image/jpeg" srcset="<?php print URL; ?>/assets/img/security/mv_pc.jpg">
          <img src="<?php print URL; ?>/assets/img/security/mv_sp.jpg" alt="セキュリティ" class="mainvisual__img">
        </picture>
        <h1 class="mainvisual-title mainvisual-title_security fadeInTrigger delay-time03"><span class="title-text">セキュリティ</span></h1>
      </div>


      <div class="tab-area tab-area_sub" id="intro">
        <div class="tabBox">
          <ul class="tab-list">
            <li class="one_tab js-tab-switch is-active" data-tab="tab-1">IT対応</li>
            <li class="one_tab js-tab-switch" data-tab="tab-2">ホームセキュリティ</li>
            <li class="one_tab js-tab-switch" data-tab="tab-3">モバイルセキュリティ</li>
          </ul>
        </div>

        <div class="contents">
          <!-- access -->
          <?php
            include_once('it.php');
          ?>

          <!-- p&s -->
          <?php
            include_once('home.php');
          ?>

          <!-- life-info -->
          <?php
            include_once('mobile.php');
          ?>

        </div><!--contents-->

        <!-- ▼Tab under▼ -->
        <div class="tabBox">
          <ul class="tab-list tab-list_bottom bottom">
            <li class="one_tab js-tab-switch js-tab-switch_bottom is-active" data-tab="tab-1">IT対応</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-2">ホームセキュリティ</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-3">モバイルセキュリティ</li>
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
