<?php
	include_once('../header_1b.php');
?>

<link rel="stylesheet" href="<?php print URL; ?>/assets/css/a-type.css" />
<title>F-type詳細 | 間取り | グランファーレ真駒内グランフォレスト | 日本グランデ株式会社</title>
<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市中央区に誕生。地下鉄東西線｢西28丁目駅｣停徒歩9分。グランファーレ真駒内グランフォレスト">
<meta name="keywords" content="グランファーレ真駒内グランフォレスト,宮の森,札幌,中央区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>


<main class="detail-main">

    <div class="contents symbol center detail">
        <div class="page">
            <div class="detail">
                <div class="main">
                    <div class="head fgara">
                        <h3><span>F</span>type</h3>
                        <p class="size"><span>55.29</span>m<sup>2</sup></p>
                        <p class="floor"><span>2LDK</span>+W+HC+KP+AL+TR</p>
                    </div>
                    <ul class="data">
                        <li>専有面積／55.29㎡（16.72坪）《TR面積1.36㎡（0.41坪）を含む》</li>
                        <li>バルコニー面積／11.43㎡（3.45坪）</li>
                        <li>アルコーブ面積／0.94㎡（0.28坪）</li>
                        <li>W：ウォークインクローゼット　HC：ホールクローゼット　KP：キッチンパントリー　AL：アルコーブ　TR：トランクルーム</li>
                    </ul>
                    <p class="cap">リビングダイニングキッチン、全洋室がワイドバルコニーに面した2LDKプランです。玄関にはトール型の玄関収納とホールクローゼットをご用意。さらに洋室1にウォークインクローゼット、キッチンにパントリーを完備し収納力に配慮しました。洋室2の引き戸を解放するとリビングダイニングキッチンと一体となった約15.9帖の広々とした空間を演出することも可能です。</p>
                    <p class="floorimg">
                        <img src="../assets/svg/a-type/f-type.svg" width="700" height="718" alt="Ftype">
                    </p>
                </div>

                <?php
                    include_once('f-detail.php');
                ?>

            </div>
        </div>
    </div><!-- /.contents -->

    <?php
        include_once('../footer_upside-plan.php');
    ?>
    <a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-6#f-type" class="detail-close" id="modal-close">閉じる</a>
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