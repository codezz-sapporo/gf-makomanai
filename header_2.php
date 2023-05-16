<!-- <?php
	include dirname(__FILE__).'/conf/conf.php';
	$folderName = basename(dirname($_SERVER["SCRIPT_NAME"]));
?> -->
<link rel="icon" href="<?php print URL; ?>/favicon.ico" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=UA-62351659-33"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-62351659-33');
</script> -->

</head>

<body class="">

    <!-- Google Tag Manager (noscript) -->
    <!-- <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5534RBS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> -->
    <!-- End Google Tag Manager (noscript) -->

    <header class="header">
        <a href="<?php print URL; ?>/top/" class="header__link">
            <picture class="logo header__logo">
                <img src="<?php print URL; ?>/assets/svg/grandfare-logo.svg" alt="グランファーレ真駒内グランフォレスト" class="header__logo-svg">
            </picture>
            <p class=header__logo-text>GRANDFARE<br>MAKOMANAI GRAND FOREST</p>
        </a>
        <div class="link-area header__link-area">
            <ul class="link-area__list">
                <li class="link-area__item link-area__item_property"><a class="link-area__text link-area__text_property" href="<?php print URL; ?>/property">物件概要</a></li>
                <li class="link-area__item"><a class="link-area__text link-area__text_document" href="<?php print URL; ?>/contact/docu_request">資料請求</a></li>
                <li class="link-area__item link-area__item_tel"><a class="link-area__text link-area__text_tel" href="tel:+0120-21-5101">お問合せ</a></li>
                <li class="link-area__item link-area__item_model"><a class="link-area__text link-area__text_model" href="<?php print URL; ?>/model-room/">マンション<br class="sp">ギャラリー</a></li>
                <li class="link-area__item"><a class="link-area__text link-area__text_user" href="<?php print URL; ?>/contact/tour-reservation">来場予約</a></li>
            </ul>
            <div class="link-area__nav">
                <input type="checkbox" id="nav-btn" class="checkbox">
                <label class="humburger link-area__text link-area__text_menu" for="nav-btn">
                    <span class="humburger__line humburger__line_top"></span>
                    <span class="humburger__line humburger__line_middle"></span>
                    <span class="humburger__line humburger__line_bottom"></span>
                    <span class="humburger__text">MENU</span>
                </label>
                <div class="bg"></div>
                <ul class="header-nav__list">
                    <li class="header-nav__item"><a href="<?php print URL; ?>/top/" class="header-nav__link">HOME</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/exterior/" class="header-nav__link">エクステリア</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/entrance/" class="header-nav__link">充実の共用施設</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/comfort/" class="header-nav__link">プライベートエリア</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/security/" class="header-nav__link">セキュリティ</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/eco/" class="header-nav__link">エコロジー&エコノミー</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/g-flex/" class="header-nav__link">自由設計</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/location/" class="header-nav__link">周辺環境</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/floor-plan/" class="header-nav__link">間取り</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/property/" class="header-nav__link">物件概要</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/model-room/" class="header-nav__link">マンションギャラリー</a></li>
                    <li class="header-nav__item"><a href="<?php print URL; ?>/contact/docu_request" class="header-nav__link">資料請求</a></li>
                </ul>
            </div>

        </div>

    </header>