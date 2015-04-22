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
	
	function formCall(){
		$('#call-me input').click(function(){
			$(this).removeClass('error-input');
			$('.error').fadeOut(1000).remove();
		});
		
        $('#call-me').submit(function(event){
            var error = false;
            var inputText = $(this).find("input[type=text]");
			
            inputText.each(function(){
                if($(this).val() === ''){
                    error = true;
					$(this).addClass('error-input');
                	$(this).after('<span class="error">Вы не ввели ' +$(this).attr('placeholder') + '</span>');
					$('.error').fadeIn(1000).css({'display':'block'});
					
				}
            });
			 
            if(error){
                event.preventDefault();
            }else{
                $.ajax({
                        type: "POST",
                        url: '/ajax/call_me.php',
                        data: $(this).serialize()
                    }).done(function() {
                        $('#call-me').find(".error").remove();
						$('#call-me').animate({'height': '165px'}, 1000);
                        $('#call-me').find('h1').after("<div id='sucsess' class='animated zoomIn'>В течении минуты наш</br> менеджер перезвонит вам</div>");
                        $('#call-me').find('input').hide();
                        $('#call-me').find("input").val("");
                        $('#call-me').trigger("reset");
                    });
                    return false;
            }
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
	formCall();

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