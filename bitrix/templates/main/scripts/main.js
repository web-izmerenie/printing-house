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
	
	function formOrder(){
		var $form = $('#make-order-form');
		
		$form.click(function(){
			$(this).removeClass('error-input');
			$('.error').fadeOut(1000).remove();
		});
		
		$('#uploaded_file').change(function(){
			var filesExt = ['jpg', 'gif', 'png', 'jpeg'];
			var parts = $(this).val().split('.');
			var size = this.files[0].size;
			
			if(filesExt.join().search(parts[parts.length - 1]) != -1){
				$('#uploaded_file-styler').removeClass('error-input').addClass('good');
				$('.error-file').fadeOut(1000).remove();
				
				if(size > 10485760){
					error = true;
					$('#uploaded_file-styler').removeClass('good').addClass('error-input');
					$('#uploaded_file-styler').after('<span class="error-file">Файл превышает 10Mb</span>');
					$('.error-file').fadeIn(1000).css({'display':'block'});
				}
    		} else {
				error = true;
				$('.error-file').remove();
				$('#uploaded_file-styler').removeClass('good').addClass('error-input');
				$('#uploaded_file-styler').after('<span class="error-file">Достпные форматы:'+ filesExt +'</span>');
				$('.error-file').fadeIn(1000).css({'display':'block'});
    		}
		});
		
		$form.submit(function(e){
			e.preventDefault();
			var error = false;
			var data = new FormData(this);
			var requireInput = $(this).find(".require");
			
            requireInput.each(function(){
                if($(this).val() === ''){
                    error = true;
					$(this).addClass('error-input');
                	$(this).after('<span class="error">Вы не ввели ' +$(this).attr('placeholder') + '</span>');
					$('.error').fadeIn(1000).css({'display':'block'});
					
				}
            });
			
			if(error){
				e.preventDefault();
            	return false;
            }else{
				var progressBar = $('#progressbar');
				$('#progressbar').fadeIn(2000);
				$.ajax({
					type: "POST",
					url: "/ajax/order.php",
					processData: false,  
					contentType: false, 
					data: data,
					xhr: function(){
        			var xhr = $.ajaxSettings.xhr(); // получаем объект XMLHttpRequest
        			xhr.upload.addEventListener('progress', function(evt){ // добавляем обработчик события progress (onprogress)
        			if(evt.lengthComputable) { // если известно количество байт
            			// высчитываем процент загруженного
            		var percentComplete = Math.ceil(evt.loaded / evt.total * 100);
            		// устанавливаем значение в атрибут value тега <progress>
							// и это же значение альтернативным текстом для браузеров, не поддерживающих <progress>
						progressBar.val(percentComplete).text('Загружено ' + percentComplete + '%');
					}
					}, false);
        			return xhr;
    				},
					success: function (html) {
						$form.find(".error").remove();
						$("#progressbar").remove();
						$form.css({'padding': 0});
						$form.animate({'height': '165px'}, 1000);
						$form.find('h1').after("<div id='sucsess' class='animated zoomIn'>В течении минуты наш</br> менеджер перезвонит вам</div>");
					   $form.find('.form-body').hide();
					   $form.find("input").val("");
					   $form.trigger("reset");
					},
					error: function () {
						alert('ошибка отправки');
					}
				});

				return false;
			}
		});
	}
	
	function menu(){
		$('#main ul li').hover(function () {
				clearTimeout($.data(this,'timer'));
				$('ul',this).stop(true,true).show().removeClass('flipOutX').addClass('animated flipInX');
			}, function () {
				$.data(this,'timer', setTimeout($.proxy(function() {
				$('ul',this).stop(true,true).removeClass('flipInX').addClass('flipOutX');
			}, this), 100));
		});
	}
	
	function mobileMenu(){
		$('#main ul li').hover(function () {
				clearTimeout($.data(this,'timer'));
				$('ul',this).stop(true,true).show().slideDown(300);
			}, function () {
				$.data(this,'timer', setTimeout($.proxy(function() {
				$('ul',this).stop(true,true).slideUp(300);
			}, this), 100));
		});
	}
	
	resizeMainPage();
	$(window).resize(function () {
		resizeMainPage();
	});
	sliderProduct();
	ankorAnimate();
	OpenWindow();
	$('.close').click(function(e){
		e.preventDefault();
		CloseWindow();
	});
	$('.overlay').click(function(){
		CloseWindow();
	});
	formCall();
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
		mobileMenu();
	}else{
		menu();
	}
	formOrder();

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
	$('input[type="file"]').styler();
	$('input[name="phone"]').mask("+7 (999) 999-9999");

});