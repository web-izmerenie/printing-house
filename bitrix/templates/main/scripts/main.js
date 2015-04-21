$(function () {
	
	function OpenWindow(){
		$('.module-window').click(function(event){
			event.preventDefault();
			var target = $(this).attr('href');
			$('.overlay').fadeIn();
			$(target).show().removeClass('fadeOutDownBig').addClass('animated fadeInDownBig');
		});
	}
	
	function CloseWindow(){
		$('.overlay').hide();
		$('.animated').addClass('fadeOutDownBig').fadeOut('2000');
	}
	
	function resizeMainPage() {
		var mainBlock = $('#main-text').width();
		var rightBlock = $('#main-text .contacts').outerWidth();
		var leftBlock = $('#main-text .text');

		var res = mainBlock - rightBlock - 34;

		leftBlock.width(res);

	}

	function sliderProduct() {
		var sliderItem = $('.products-block ul');

		sliderItem.slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			dots: false,
			arrows: true,
			prevArrow: '<a href="#prev"><span></span></a>',
			nextArrow: '<a href="#next"><span></span></a>',
			responsive: [
				{
					breakpoint: 1290,
					settings: {
						slidesToShow: 3,
					}
				}
			]
		});
	}
	
	function ankorAnimate(){
		$('a[href="#up"]').click(function(event) {
			event.preventDefault();
			var top=$('html').offset().top;
			$('html,body').animate({
			scrollTop: top
			}, 1000);
		});
	}
	
	resizeMainPage();
	$(window).resize(function () {
		resizeMainPage();
	});
	sliderProduct();
	ankorAnimate();
	OpenWindow();
	$('.close').click(function(){
		CloseWindow();
	});
	$('.overlay').click(function(){
		CloseWindow();
	});

	//init plugins
	$('#main-slider ul').slick({
		autoplay: true,
		autoplaySpeed: 3000,
		dots: true,
		arrows: false,
		infinite: true,
		speed: 800,
		fade: true,
		cssEase: 'linear',
		responsive: null
	});

	$('.svg').inlineSVG();

	window.onload = function () {
		
		$('.portfolio-module').removeWhitespace().collagePlus({
			'allowPartialLastRow': false,
			'targetHeight': 450,
		});
		
		$('.portfolio-module-item').removeWhitespace().collagePlus({
			'allowPartialLastRow': false,
			'targetHeight': 350
		});
	}
	
	$('select').styler();
	$('input[name="phone"]').mask("+7 (999) 999-9999");

});