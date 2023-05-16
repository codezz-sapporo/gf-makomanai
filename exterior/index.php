<?php
	include_once('../header_1a.php');
?>

<link rel="stylesheet" href="<?php print URL; ?>/assets/css/exterior.css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<title>エクステリア | グランファーレ真駒内グランフォレスト | 日本グランデ株式会社</title>
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
                <source media="(min-width: 768px)" type="image/webp" srcset="<?php print URL; ?>/assets/webp/exterior/mv_pc.webp">
                <source type="image/webp" srcset="<?php print URL; ?>/assets/webp/exterior/mv_sp.webp">
                <source media="(min-width: 768px)" type="image/jpeg" srcset="<?php print URL; ?>/assets/img/exterior/mv_pc.jpg">
                <img src="<?php print URL; ?>/assets/img/exterior/mv_sp.jpg" alt="エクステリア" class="mainvisual__img">
            </picture>
        </h1>
        <div class="mainvisual-text-area mainvisual-text-area_exterior fadeInTrigger_slow02 delay-time05">
          <p class="mainvisual-large-lead mainvisual-large-lead_exterior">THE CONFIDENCE</p>
          <p class="mainvisual-lead mainvisual-lead_exterior">ここでしかできない暮らしがあります。</p>
        </div>

        <p class="mainvisual-title mainvisual-title_exterior fadeInTrigger delay-time03"><span class="title-text">エクステリア</span></p>
    </div>


    <div class="tab-area tab-area_exterior" id="intro">

        <div class="tabBox">
          <ul class="tab-list">
            <li class="one_tab js-tab-switch is-active" data-tab="tab-1">エクステリア</li>
            <li class="one_tab js-tab-switch" data-tab="tab-2">エントランス</li>
          </ul>
        </div>


        <div class="contents contents_exterior">
            <?php
            include_once('content.php');
            ?>
            <?php
            include_once('entrance.php');
            ?>

        </div>

        <div class="tabBox">
          <ul class="tab-list tab-list_bottom bottom">
            <li class="one_tab js-tab-switch js-tab-switch_bottom is-active" data-tab="tab-1">エクステリア</li>
            <li class="one_tab js-tab-switch js-tab-switch_bottom" data-tab="tab-2">エントランス</li>
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
<script>
    $(function() {
    function floatHeight(){
        $('.space').css('float','none');//一旦.spaceのfloatを解除してから、
        var height = $('.exterior__float-text').outerHeight();//float状態のouterHeightを取得します。
        console.log(height);
        $('.space').outerHeight( height - 170 ).css('float','right');
    }
    $(window).on('load resize',function() {
        floatHeight();
    });
});
</script>
</body>

</html>