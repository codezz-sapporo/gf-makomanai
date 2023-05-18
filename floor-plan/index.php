<?php
	include_once('../header_1b.php');
?>

<link rel="stylesheet" href="<?php print URL; ?>/assets/css/a-type.css" />
<title>間取り | グランファーレ真駒内グランフォレスト | 日本グランデ株式会社</title>
<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市中央区に誕生。地下鉄東西線｢西28丁目駅｣停徒歩9分。グランファーレ真駒内グランフォレスト">
<meta name="keywords" content="グランファーレ宮の森コートハウス,宮の森,札幌,中央区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>

<!-- コンテンツ -->
<main class="main">
    <div class="mainvisual mainvisual_only-text">
        <h1 class="mainvisual-title mainvisual-title_plan"><span class="title-text">間取り</span></h1>
    </div>
    <div class="tab-area tab-area_sub" id="intro">

        <div class="tabBox">
            <ul class="tab-list bottom">
                <li class="one_tab floor_tab js-tab-switch is-active" data-tab="tab-1">A-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-2">B-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-3">C-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-4">D-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-5">E-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-6">F-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-7">G-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-8">H-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-9">I-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-10">J-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-11">K-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-12">L-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-13">M-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-14">N-type</li>
                <li class="one_tab floor_tab js-tab-switch" data-tab="tab-15">O-type</li>
            </ul>
        </div>

        <div class="contents">
            <?php
                include_once('a-type.php');
            ?>

            <?php
                include_once('b-type.php');
            ?>
            <?php
                include_once('c-type.php');
            ?>
            <?php
                include_once('d-type.php');
            ?>
            <?php
                include_once('e-type.php');
            ?>
            <?php
                include_once('f-type.php');
            ?>
            <?php
                include_once('g-type.php');
            ?>
            <?php
                include_once('h-type.php');
            ?>
            <?php
                include_once('i-type.php');
            ?>
            <?php
                include_once('j-type.php');
            ?>
            <?php
                include_once('k-type.php');
            ?>
            <?php
                include_once('l-type.php');
            ?>
            <?php
                include_once('m-type.php');
            ?>
            <?php
                include_once('n-type.php');
            ?>
            <?php
                include_once('o-type.php');
            ?>
        </div>
        <!--contents-->

        <!-- ▼Tab under▼ -->
        <div class="tabBox">
            <ul class="tab-list tab-list_bottom bottom">
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom is-active" data-tab="tab-1">A-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-2">B-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-3">C-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-4">D-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-5">E-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-6">F-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-7">G-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-8">H-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-9">I-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-10">J-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-11">K-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-12">L-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-13">M-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-14">N-type</li>
                <li class="one_tab floor_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-15">O-type</li>
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