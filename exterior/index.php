<?php
	include_once('../header_1a.php');
?>

<link rel="stylesheet" href="<?php print URL; ?>/assets/css/exterior.css" />
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<title>エクステリア | グランファーレ幌西グランシェール | 日本グランデ株式会社</title>
<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「東札幌」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ幌西グランシェール">
<meta name="keywords" content="グランファーレ幌西グランシェール,東札幌,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

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
        <p class="mainvisual-title mainvisual-title_exterior fadeInTrigger delay-time03"><span class="title-text">エクステリア</span></p>
    </div>


    <div class="tab-area tab-area_sub">

        <div class="contents contents_exterior">
            <?php
            include_once('content.php');
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