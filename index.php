<?php
	include_once('header_1a.php');
?>
  <link rel="stylesheet" href="<?php print URL; ?>/assets/css/slick.css">
  <!-- <link rel="stylesheet" href="<?php print URL; ?>/assets/css/aos.css"> -->
  <link rel="stylesheet" href="<?php print URL; ?>/assets/css/top.css" />

	<title>グランファーレ真駒内グランフォレスト | 日本グランデ株式会社</title>
	<meta name="description" content="日本グランデによる新しいスマートマンションが札幌市白石区菊水に誕生。地下鉄東西線「真駒内」駅徒歩6分、「菊水」駅徒歩9分。グランファーレ真駒内グランフォレスト">
	<meta name="keywords" content="グランファーレ真駒内グランフォレスト,山鼻,菊水,札幌,白石区,新築分譲マンション,分譲マンション,北海道,東西線,日本グランデ">

<?php
	include('header_2.php');
?>

    <!-- コンテンツ -->
    <div id="loading"></div>
    <main class="top-main">
      <div id="loader-bg">
        <div id="loader">
          <div style="padding-top: 0;">
            <video onended="location.href='<?php print URL; ?>/top/';" autoplay muted loop playsinline id="bgvid" class="sp video-frame" src="<?php print URL; ?>/assets/movie/makomanai_sp.mp4"></video>
          </div>
          <div style="">
            <video onended="location.href='<?php print URL; ?>/top/';" autoplay muted loop playsinline id="bgvid" class="pc video-frame" src="<?php print URL; ?>/assets/movie/makomanai_pc.mp4"></video>
          </div>
        </div>
        <div class="skip c-text"><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>SKIP</div>
      </div>


    </main>

    <script src="<?php print URL; ?>/assets/js/jquery.js"></script>
    <script>
      window.onload = function() {
        const spinner = document.getElementById('loading');
        spinner.classList.add('loaded');
      }

      $(function() {
        var h = $(window).height();
        //$('.index').css('opacity','0');
        $('body').addClass('hidden');
        $('html').addClass('hidden');
        var w = $(window).width();
        if(w <= 768){
          $('#loader-bg ,#loader').height(h).css('display','block');
        } else {
          $('#loader-bg ,#loader').height(h).css('display','block');
        }

      });
      $(window).on('load', function(){ //全ての読み込みが完了したら実行
        //$('#loader-bg').delay(900).fadeOut(800);
        //$('#loader').delay(600).fadeOut(300);
        //$('.index').animate({opacity: '1'}, 1500);
        AOS.refresh();
      });
      //72秒たったら強制的にロード画面を非表示
      $(function(){
        setTimeout('stopload()',66000);
      });
      function stopload(){
        // $('#loader-bg').delay(900).fadeOut(800);
        // $('#loader').delay(600).fadeOut(300);
        // $('body').removeClass('hidden');
        // $('html').removeClass('hidden');
        location.href = "<?php print URL; ?>/top/" ;
      }
      $(function() {
        $(".skip").click(function(){
          // stopload();
          location.href = "<?php print URL; ?>/top/" ;
        });
      });
    </script>

  </body>
</html>
