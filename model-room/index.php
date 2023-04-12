<?php
	include_once('../header_1a.php');
?>

	<link rel="stylesheet" href="<?php print URL; ?>/assets/css/model.css" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<title>マンションギャラリー | グランファーレ真駒内フォレスト | 日本グランデ株式会社</title>
	<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「東札幌」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ真駒内フォレスト">
	<meta name="keywords" content="グランファーレ真駒内フォレスト,東札幌,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>

    <!-- コンテンツ -->
    <main class="main">
		<div class="mainvisual mainvisual_only-text">
			<h1 class="mainvisual-title mainvisual-title_model"><span class="title-text">マンションギャラリー</span></h1>
		</div>
		<div class="tab-area tab-area_sub" id="content">

			<div class="contents">
				<?php
					include_once('model-room.php');
				?>

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
