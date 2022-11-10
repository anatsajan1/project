(function($) {
	$.fn.extend({
		smoothSlides: function(options) {
			var defaults = {
				effectDuration: 5000,
				transitionDuration: 500,
				autoPlay: 'true',
				effect: 'zoomOut,zoomIn,panUp,panDown,panLeft,panRight,diagTopLeftToBottomRight,diagTopRightToBottomLeft,diagBottomRightToTopLeft,diagBottomLeftToTopRight',
				effectEasing: 'ease-in-out',
				nextText: ' ►',
				prevText: '◄ ',
				captions: 'true',
				navigation: 'true',
				pagination: 'true',
				matchImageSize: 'true'
			}
			var options = $.extend(defaults, options),
				that = this,
				uniqueId = $(this).attr('id'),
				fullTime= options.effectDuration + options.transitionDuration,
				maxWidth = $(this).find('img').width()
			if (options.transitionDuration >= options.effectDuration) {
				console.log("Make sure effectDuration is greater than transitionDuration");
			}
			$('#'+uniqueId).removeClass('smoothslides').addClass('smoothslides-on');
			function fadeOutLast() {
				if (document.all && !window.atob){
					$('#'+uniqueId).find('.ss-slide:last').animate({
						'opacity':'0'
					})
					console.log('1');
				} else {
					console.log('2');
					$('#'+uniqueId).find('.ss-slide:last').css({
						'transition':'all '+options.transitionDuration+'ms',
						'opacity':'0'
					});
				}
			}
			that.crossFade = function() {
				fadeOutLast();
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1)  rotate(0deg)'
					});
				}, options.transitionDuration);
			}
			that.zoomOut = function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.2) rotate(1.5deg)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1)  rotate(0deg)'
					});
				}, options.transitionDuration);
			}
			that.zoomIn = function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.1) rotate(-1.5deg)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) rotate(0deg)'
					});
				}, options.transitionDuration);
			}
			that.panLeft = function() {
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.3) translateX(10%)'
				});
				fadeOutLast();
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) translateX(0%)'
					});
				}, options.transitionDuration);
			}
			that.panRight = function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.3) translateX(-10%)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) translateX(0%)'
					});
				}, options.transitionDuration);
			}
			that.panUp = function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.3) translateY(10%)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) translateY(0%)'
					});
				}, options.transitionDuration);
			}
			that.panDown = function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.3) translateY(-10%)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) translateY(0%)'
					});
				}, options.transitionDuration);
			}
			that.diagTopLeftToBottomRight = function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.3) translateY(-10%) translateX(-10%)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) translateY(0%) translateX(0%)'
					});
				}, options.transitionDuration);
			}
			that.diagBottomRightToTopLeft= function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.3) translateY(10%) translateX(10%)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) translateY(0%) translateX(0%)'
					});
				}, options.transitionDuration);
			}
			that.diagTopRightToBottomLeft = function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.3) translateY(-10%) translateX(10%)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) translateY(0%) translateX(0%)'
					});
				}, options.transitionDuration);
			}
			that.diagBottomLeftToTopRight = function() {
				fadeOutLast();
				$(this).find('.ss-slide:eq(-2)').css({
					'transition':'none',
					'transform':'scale(1.3) translateY(10%) translateX(-10%)'
				});
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1.3) translateY(0%) translateX(0%)'
					});
				}, options.transitionDuration);
			}
			if(options.matchImageSize == 'true') {
				$('#'+uniqueId).css('maxWidth',maxWidth);
				$('#'+uniqueId+' img').css('maxWidth','100%');
			} else {
				$('#'+uniqueId+' img').css('width','100%');
			}
			$(this).children().each(function(){
				$(this).wrap('<div class="ss-slide"></div>');
			});
			$('#'+ uniqueId +' .ss-slide').each(function() {
				$(this).prependTo('#'+uniqueId);
			});
			$('#'+uniqueId+' .ss-slide:first').css('position','relative');
			if(options.autoPlay == 'true') {
				$(".ss-slide:first", this).appendTo(this)
			}
			$(this).wrapInner("<div class='ss-slide-stage'></div>")
			$(".ss-slide",this).each(function(){
				$(this).css({
					transition: 'all ' + options.effectDuration + 'ms ' + options.effectEasing +''
				});
			});
			function captionUpdate() {
				var nextCaption = $('#'+uniqueId).find('.ss-slide:eq(-2) img').prop('alt');
				if (!nextCaption) {
					$('#'+uniqueId).find(".ss-caption").css('opacity','0');
				} else {
					$('#'+uniqueId).find(".ss-caption").css('opacity','1').html(nextCaption);
				}
			}
			function captionUpdateBack() {
				var nextCaption = $('#'+uniqueId).find('.ss-slide:eq(-1) img').prop('alt');
				if (!nextCaption) {
					$('#'+uniqueId).find(".ss-caption").css('opacity','0');
				} else {
					$('#'+uniqueId).find(".ss-caption").css('opacity','1').html(nextCaption);
				}
			}
			if (options.captions == 'true') {
				$(that).append("<div class='ss-caption-wrap'><div class='ss-caption'></div></div>");
				if (options.autoPlay == 'true') {
					captionUpdate();
				} else {
					var nextCaption = $('#'+uniqueId).find('.ss-slide:last img').prop('alt');
					if (!nextCaption) {
						$('#'+uniqueId).find(".ss-caption").css('opacity','0');
					} else {
						$('#'+uniqueId).find(".ss-caption").css('opacity','1').html(nextCaption);
					}
				}
			}
			if (options.navigation == 'true') {
				$(that).append('<a href="#" class="ss-prev ss-prev-on">' + options.prevText + '</a><a href="#" class="ss-next ss-next-on">' + options.nextText + '</a>');
			}
			if (options.pagination == 'true') {
				$(that).append('<div class="ss-paginate-wrap"><div class="ss-paginate"></div></div>');
				$(".ss-slide",that).each(function() {
					$('.ss-paginate', that).append('<a href="#"></a>');
				});
				if (options.autoPlay == "true") {
					$('.ss-paginate a:last', that).addClass("ss-paginate-current");
				} else {
					$('.ss-paginate a:first', that).addClass("ss-paginate-current");
				}
			}
			function paginationUpdate() {
				var total = $(that).find('.ss-paginate a').length;
				var	current = $(that).find('a.ss-paginate-current').index();
				var next = current + 1;				
				if (next >= total) {
					$(that).find('a.ss-paginate-current').removeClass();
					$(that).find('.ss-paginate a:eq(0)').addClass('ss-paginate-current');
				} else {
					$(that).find('a.ss-paginate-current').removeClass();
					$(that).find('.ss-paginate a:eq('+ next +')').addClass('ss-paginate-current');
				}
			}
			function paginationUpdateBack() {
				var total = $(that).find('.ss-paginate a').length;
				var	current = $(that).find('a.ss-paginate-current').index();
				var next = current - 1;				
				if (next <= -2) {
					$(that).find('a.ss-paginate-current').removeClass();
					$(that).find('.ss-paginate a:eq('+total+')').addClass('ss-paginate-current');
				} else {
					$(that).find('a.ss-paginate-current').removeClass();
					$(that).find('.ss-paginate a:eq('+ next +')').addClass('ss-paginate-current');
				}
			}
			var autoPlay = function () {
				if (document.all && !window.atob){
					that.crossFade();
				} else {
					effectArray = options.effect.split(',');
					var effect = effectArray[Math.floor(Math.random() * effectArray.length)];
					that[effect]();
				}
				captionUpdate();
				paginationUpdate();
			}
			if (options.autoPlay == 'true') {
				autoPlay();
				var playInterval = setInterval(autoPlay, fullTime);
			}
			$('.ss-prev, .ss-next, .ss-paginate', that).mouseover(function() {
				clearInterval(playInterval);
			}).mouseout(function() {
				playInterval = setInterval(autoPlay, fullTime);
			});
			$('#'+uniqueId).on('click', '.ss-next-on', function(event) {
				$('.ss-next-on', that).removeClass('ss-next-on');
				$(that).find('.ss-slide:last').css({
					'transition':'all '+options.transitionDuration+'ms',
					'opacity':'0'
				});			
				captionUpdate();
				paginationUpdate();
				setTimeout(function(){
					$(that).find('.ss-slide:last').prependTo($(".ss-slide-stage", that)).css({
						'opacity':'1',
						'transform':'none'
					});
					$(that).find('.ss-slide:last').css({
						'transition': 'all ' + options.effectDuration + 'ms ' + options.effectEasing +'',
						'transform':'scale(1)  rotate(0deg)'
					});
					$('.ss-next', that).addClass('ss-next-on');
				}, options.transitionDuration);
				event.preventDefault();
			});
			$('#'+uniqueId).on('click', '.ss-prev-on', function(event) {
				$('.ss-prev-on', that).removeClass('ss-prev-on');
				$('#'+uniqueId).find(".ss-slide:first").css({
					'transition':'none',
					'opacity':'0'
				}).appendTo('#'+uniqueId+' .ss-slide-stage');
				$('#'+uniqueId).find('.ss-slide:last').css('opacity');
				$('#'+uniqueId).find('.ss-slide:last').css({
					'transition':'all '+options.transitionDuration+'ms',
					'opacity':'1'
				});
				captionUpdateBack();
				paginationUpdateBack();
				setTimeout(function(){
					$('.ss-prev').addClass('ss-prev-on');
					
				}, options.transitionDuration);
				event.preventDefault();
			});
			$('#'+uniqueId).on('click', '.ss-prev, .ss-next', function(event) {
				event.preventDefault();
			});
			$('#'+uniqueId).on('click', '.ss-paginate a', function(event) {
				var dotClicked = $(this).index(); // 0 indexed
				var currentDot = $('#'+uniqueId+' .ss-paginate-current').index(); // 0 indexed
				if (dotClicked < currentDot) {
					var iterate = (currentDot - dotClicked);
					for (var i = 0; i < iterate; i++) {
						$('#'+uniqueId).find('.ss-slide:first').appendTo('#'+uniqueId+' .ss-slide-stage');
					}
				} else if (dotClicked > currentDot) {
					var iterate = (dotClicked - currentDot);
					for (var i = 0; i < iterate; i++) {
						$('#'+uniqueId).find('.ss-slide:last').prependTo('#'+uniqueId+' .ss-slide-stage');
					}
				}
				$('#'+uniqueId).find('.ss-paginate-current').removeClass();
				$('#'+uniqueId).find('.ss-paginate a:eq('+dotClicked+')').addClass('ss-paginate-current');
				var nextCaption = $('#'+uniqueId).find('.ss-slide:eq(-1) img').prop('alt');
				if (!nextCaption) {
					$('#'+uniqueId).find(".ss-caption").css('opacity','0');
				} else {
					$('#'+uniqueId).find(".ss-caption").css('opacity','1').html(nextCaption);
				}
				event.preventDefault();
			});
		}
	});
})(jQuery);