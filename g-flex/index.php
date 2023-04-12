<?php
	include_once('../header_1a.php');
?>

	<link rel="stylesheet" href="<?php print URL; ?>/assets/css/g-flex.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<title>自由設計 | グランファーレ幌西グランシェール | 日本グランデ株式会社</title>
	<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「東札幌」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ幌西グランシェール">
	<meta name="keywords" content="グランファーレ幌西グランシェール,東札幌,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>

    <!-- コンテンツ -->
    <main class="main">
		<div class="mainvisual">
			<picture class="fadeInTrigger">
				<source media="(min-width: 768px)" type="image/webp" srcset="<?php print URL; ?>/assets/webp/g-flex/mv_pc.webp">
				<source type="image/webp" srcset="<?php print URL; ?>/assets/webp/g-flex/mv_sp.webp">
				<source media="(min-width: 768px)" type="image/jpeg" srcset="<?php print URL; ?>/assets/img/g-flex/mv_pc.jpg">
				<img src="<?php print URL; ?>/assets/img/g-flex/mv_sp.jpg" alt="自由設計" class="mainvisual__img">
			</picture>
			<h1 class="mainvisual-title mainvisual-title_g-flex fadeInTrigger delay-time03"><span class="title-text">自由設計</span></h1>
		</div>
		<div class="tab-area tab-area_sub" id="intro">
			<div class="tabBox">
				<ul class="tab-list tab-list_eco">
					<li class="one_tab js-tab-switch is-active" data-tab="tab-1">G-FLEX 自由設計</li>
					<li class="one_tab js-tab-switch" data-tab="tab-2">無料セレクト</li>
				</ul>
			</div>

			<div class="contents">
				<?php
					include_once('g-flex.php');
				?>

				<?php
					include_once('free-select.php');
				?>
			</div><!--contents-->

			<!-- ▼Tab under▼ -->
			<div class="tabBox">
				<ul class="tab-list tab-list_bottom bottom">
					<li class="one_tab js-tab-switch js-tab-switch_bottom is-active" data-tab="tab-1">G-FLEX 自由設計</li>
					<li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-2">無料セレクト</li>
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
