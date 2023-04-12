//spメニューボタン
$(function() {
	$("#panel-btn").click(function() {
		$("#panel").slideToggle(200);
		$("#panel-btn-icon").toggleClass("close");
		$("body").toggleClass("overflow");
		$("#panel-btn span.name").toggle ();
		return false;
	});
});

$(function(){
	//match.height
	$('.secu .sec2 .gray h5').matchHeight();
	
	$('.typelist .data').matchHeight();
	$('.typelist .floorimg').matchHeight();
	$('.typelist .parent').matchHeight();
});
$(function(){
	//totop
	$('#totop a').click(function(){
		$('html,body').animate({scrollTop: $('body').offset().top},800,'swing');
		return false;
	});
	
	var w = $(window).width();
	var sumo = $('#rank1').offset().top;
	
	$(window).scroll(function (){
		if($(this).scrollTop() > 100){
			$('#totop').fadeIn();
		} else {
			$('#totop').fadeOut();
		}
		
		var scroll = $(window).scrollTop() + 20;
		if(scroll >= sumo) {
			$('#rank1').addClass('fixed');
		} else {
			$('#rank1').removeClass('fixed');
		}
	});
	$('#rank1 p').click(function(){
		$(this).fadeOut();
	});
});

//トップスライダー
$(function() {
	$('.slides').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		fade: true,
		dots: false,
		dotsClass: "caru-slides",
		customPaging: function(slick,index) {
			var targetImage = slick.$slides.eq(index).find('img').attr('alt');
			var indexnum = index + 1;
			return '<span>0'+indexnum+'</span>'+targetImage;
		},
		prevArrow:'<button type="button" class="slick-prev slick-btn-mv"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
		nextArrow:'<button type="button" class="slick-next slick-btn-mv"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
		responsive: [{
			breakpoint: 768,
			settings: {
				dots: false,
			}
		}]
	});
	
	//周辺環境スライダー
	$('.location_slide').slick({
		autoplay:true,
		autoplaySpeed:3000,
		speed:400,
		infinite:true,
		slidesToShow:1,
		slidesToScroll:1,
		fade:true,
		arrows:false,
		dots:true,
		dotsClass:'location_slide_nav',
		customPaging:function(slick,index){
			var targetImage = slick.$slides.eq(index).find('img').attr('src');
			var targetAlt = slick.$slides.eq(index).find('img').attr('alt');
			return '<img src="'+targetImage+'" alt="'+targetAlt+'">';
		}
	});
});

//アコーディオン
$(function(){
$(".ac-item").hide();
$(".acMenu .ac-btn").on("click", function() {
$(this).next().slideToggle();
});
});

//bottom-link
$(document).ready(function(){
	var w = $(window).width();
//	var x = 768;
//	if (w >= x) {
		$(".bottom-link").hide();
		$(window).on("scroll", function() {
			scrollHeight = $(document).height();
			scrollPosition = $(window).height() + $(window).scrollTop();
			footHeight = $("footer").innerHeight();
			if ($(this).scrollTop() > 150 && scrollHeight-scrollPosition  >= footHeight) {
				$(".bottom-link").fadeIn("fast");
			}else{
				$(".bottom-link").fadeOut("fast");
			}
			if(scrollHeight-scrollPosition  >= footHeight){
				$(".bottom-link").css({
					"position":"fixed",
					"bottom": "20px"
				});
			}
		});
//	}
});

//郵便番号
$(function () {
	$('#zip').jpostal({
		postcode : [
			'#zip'
		],
		address : {
			'#pref'  : '%3',
			'#address'  : '%4',
			'#banchi'  : '%5'
		}
	});
});