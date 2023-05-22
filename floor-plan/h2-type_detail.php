<?php
	include_once('../header_1b.php');
?>

<link rel="stylesheet" href="<?php print URL; ?>/assets/css/a-type.css" />
<title>H2-type詳細 | 間取り | グランファーレ真駒内グランフォレスト | 日本グランデ株式会社</title>
<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市中央区に誕生。地下鉄東西線｢西28丁目駅｣停徒歩9分。グランファーレ真駒内グランフォレスト">
<meta name="keywords" content="グランファーレ真駒内グランフォレスト,宮の森,札幌,中央区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include_once('../header_2.php');
?>


<main class="detail-main">

    <div class="contents" id="symbol_moreCenter">
        <div class="page">
            <div class="detail">
                <div class="main">
                    <div class="head fgara">
                        <h3><span>H2</span>type</h3>
                        <p class="size"><span>83.94</span>m<sup>2</sup></p>
                        <p class="floor"><span>4LDK</span>+OP+W+HC+KP+AL+TR</p>
                    </div>
                    <ul class="data">
                        <li>専有面積／83.94㎡（25.39坪）《TR面積1.40㎡（0.42坪）を含む》</li>
                        <li>バルコニー面積／15.74㎡（4.76坪）</li>
                        <li>アルコーブ面積／1.80㎡（0.54坪）</li>
                        <li>W：ウォークインクローゼット　　HC：ホールクローゼット　KP：キッチンパントリー　AL：アルコーブ　TR：トランクルーム　OP：オープンペントハウス</li>
                    </ul>
                    <p class="cap">H2タイプはリビングダイニングがオープンペントハウスとなっています。高く設けた天井高約3.95mの開放的な吹抜けを演出し、その窓から差し込む光で部屋全体を明るく包み込みます。</p>
                    <p class="floorimg">
                        <img src="../assets/svg/a-type/h2-type.svg" width="700" height="718" alt="H2type">
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
    <a href="<?php print URL; ?>/floor-plan/index.php?active-tab=tab-8#h2-type" class="detail-close" id="modal-close">閉じる</a>
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