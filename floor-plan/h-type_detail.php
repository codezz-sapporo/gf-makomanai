<?php
	include_once('../header_1b.php');
?>

<link rel="stylesheet" href="<?php print URL; ?>/assets/css/a-type.css" />
<title>H-type詳細 | 間取り | グランファーレ真駒内グランフォレスト | 日本グランデ株式会社</title>
<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市中央区に誕生。地下鉄東西線｢西28丁目駅｣停徒歩9分。グランファーレ真駒内グランフォレスト">
<meta name="keywords" content="グランファーレ真駒内グランフォレスト,宮の森,札幌,中央区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>


<main class="detail-main">

    <div class="contents symbol_center symbol_center-detail">
        <div class="page">
            <div class="detail">
                <div class="main">
                    <div class="head fgara">
                        <h3><span>H</span>type</h3>
                        <p class="size"><span>83.94</span>m<sup>2</sup></p>
                        <p class="floor"><span>4LDK</span>+W+HC+KP+AL+TR</p>
                    </div>
                    <ul class="data">
                        <li>専有面積／83.94㎡（25.39坪）《TR面積1.40㎡（0.42坪）を含む》</li>
                        <li>バルコニー面積／15.74㎡（4.76坪）</li>
                        <li>アルコーブ面積／1.80㎡（0.54坪）</li>
                        <li>W：ウォークインクローゼット　　HC：ホールクローゼット　KP：キッチンパントリー　AL：アルコーブ　TR：トランクルーム </li>
                    </ul>
                    <p class="cap">リビングダイニングキッチン、全洋室がバルコニーに面した4LDKプランです。玄関にはトール型の玄関収納とホールクローゼットをご用意。さらに洋室3にウォークインクローゼット、キッチンにパントリーを完備し収納力に配慮しました。洋室4の引き戸を解放するとリビングダイニングキッチンと一体となった約21.2帖の広々とした空間を演出することも可能です。</p>
                    <p class="floorimg">
                        <img src="../assets/svg/a-type/h-type.svg" width="700" height="718" alt="Htype">
                    </p>
                </div>

                <?php
                    include_once('h-detail.php');
                ?>

            </div>
        </div>
    </div><!-- /.contents -->

    <?php
        include_once('../footer_upside-plan.php');
    ?>
    <a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-8#h-type" class="detail-close" id="modal-close">閉じる</a>
    </div>

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