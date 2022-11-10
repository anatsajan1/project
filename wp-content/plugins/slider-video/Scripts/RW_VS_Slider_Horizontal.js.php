<script>
                     var x = 0;
					(function(e){"use strict";e.fn.carousel_RW<?= $Rich_Web_VSlider_ID; ?>=function(t){ 
						var n,r;n={infinite:true,visible:1,speed:"fast",overflow:false,autoRotate:false,true_false:false,navigation:e(this).data("navigation"),itemMinWidth:0,itemEqualHeight:false,itemMargin:0,itemClassActive:"crsl-active<?= $Rich_Web_VSlider_ID; ?>",imageWideClass:"wide-image",carousel:true};return e(this).each(function(){r=e(this);if(e.isEmptyObject(t)===false)e.extend(n,t);if(e.isEmptyObject(e(r).data("crsl"))===false)e.extend(n,e(r).data("crsl"));n.isTouch="ontouchstart"in document.documentElement||navigator.userAgent.match(/Android|BlackBerry|iPhone|iPad|iPod|Opera Mini|IEMobile/i)?true:false;r.init=function(){n.total=e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>").length;n.itemWidth=e(r).outerWidth();n.visibleDefault=n.visible;n.swipeDistance=null;n.swipeMinDistance=100;n.startCoords={};n.endCoords={};e(r).css({width:"100%"});e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>").css({position:"relative","float":"left",overflow:"hidden",height:"auto"});e(r).find("."+n.imageWideClass).each(function(){e(this).css({display:"block",width:"100%",height:"auto"})});e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?> iframe").attr({width:"100%"});if(n.carousel)e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:first-child").addClass(n.itemClassActive);if(n.carousel&&n.infinite&&n.visible<n.total)e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:first-child").before(e(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:last-child",r));if(n.overflow===false){e(r).css({overflow:"hidden"})}else{e("html, body").css({"overflow-x":"hidden"})}e(r).trigger("initCarousel",[n,r]);r.testPreload();r.config();r.initRotate();r.triggerNavs()};r.testPreload=function(){if(e(r).find("img").length>0){var t=e(r).find("img").length,i=1;e(r).find("img").each(function(){r.preloadImage(this,i,t);i++})}else{e(r).trigger("loadedCarousel",[n,r])}};r.preloadImage=function(t,i,s){var o=new Image,u={};u.src=e(t).attr("src")!==undefined?t.src:"";u.alt=e(t).attr("alt")!==undefined?t.alt:"";e(o).attr(u);e(o).on("load",function(){if(i===1)e(r).trigger("loadingImagesCarousel",[n,r]);if(i===s)e(r).trigger("loadedImagesCarousel",[n,r])})};r.config=function(){n.itemWidth=Math.floor((e(r).outerWidth()-n.itemMargin*(n.visibleDefault-1))/n.visibleDefault);if(n.itemWidth<=n.itemMinWidth){n.visible=Math.floor((e(r).outerWidth()-n.itemMargin*(n.visible-1))/n.itemMinWidth)===1?Math.floor(e(r).outerWidth()/n.itemMinWidth):Math.floor((e(r).outerWidth()-n.itemMargin)/n.itemMinWidth);n.visible=n.visible<1?1:n.visible;n.itemWidth=n.visible===1?Math.floor(e(r).outerWidth()):Math.floor((e(r).outerWidth()-n.itemMargin*(n.visible-1))/n.visible)}else{n.visible=n.visibleDefault}if(n.carousel){r.wrapWidth=Math.floor((n.itemWidth+n.itemMargin)*n.total);
						var elem=true;
						if(!n.infinite){
							elem = false;
						}
						if(n.visible>=n.total){
							elem = false;
						}
						r.wrapMargin=r.wrapMarginDefault=elem?parseInt((n.itemWidth+n.itemMargin)*-1,10):0;

						var elementor = true;

						if(!n.infinite){
							elementor=false;
						}
						if(n.visible>=n.total){
							elementor=false;
						}
						if(e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>."+n.itemClassActive).index()!==0){
							elementor=false;
						}
						if(elementor){e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:first-child").before(e(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:last-child",r));
          
						r.wrapMargin=r.wrapMarginDefault=parseInt((n.itemWidth+n.itemMargin)*-1,10)}e(r).find(".crsl-wrap<?= $Rich_Web_VSlider_ID; ?>").css({width:r.wrapWidth+"px",marginLeft:r.wrapMargin})}else{r.wrapWidth=e(r).outerWidth();e(r).find(".crsl-wrap<?= $Rich_Web_VSlider_ID; ?>").css({width:r.wrapWidth+n.itemMargin+"px"});e("#"+n.navigation).hide()}e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>").css({width:n.itemWidth+"px",marginRight:n.itemMargin-2+"px",marginTop:n.itemMargin+"px"});r.equalHeights();if(n.carousel){if(n.visible>=n.total){n.autoRotate=false;e("#"+n.navigation).hide()}else{e("#"+n.navigation).show()}}};r.equalHeights=function(){if(n.itemEqualHeight!==false){var t=0;e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>").each(function(){e(this).css({height:"auto"});if(e(this).prop('scrollHeight')>t){t=e(this).prop('scrollHeight'); }});e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>").css({height:t+"px"})}return true};r.initRotate=function(){if(n.autoRotate!==false){r.rotateTime=window.setInterval(function(){r.rotate()},(n.speed+2000))}};r.triggerNavs=function(){e("#"+n.navigation).delegate(".previous<?= $Rich_Web_VSlider_ID; ?>, .next<?= $Rich_Web_VSlider_ID; ?>","click",function(t){t.preventDefault();r.prepareExecute();if(e(this).hasClass("previous<?= $Rich_Web_VSlider_ID; ?>")&&r.testprevious<?= $Rich_Web_VSlider_ID; ?>(r.itemActive)){r.previous<?= $Rich_Web_VSlider_ID; ?>()}else if(e(this).hasClass("next<?= $Rich_Web_VSlider_ID; ?>")&&r.testNext()){r.next()}else{return}})};jQuery(".crsl-item<?= $Rich_Web_VSlider_ID; ?> .thumbnail").click(function(){if(n.autoRotate!==false){clearInterval(r.rotateTime)}});jQuery(".Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Overlay,.Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Overlay_Close").click(function(){if(n.autoRotate!==false){r.rotateTime=window.setInterval(function(){r.rotate()},(n.speed+2000))}});r.prepareExecute=function(){if(n.autoRotate){clearInterval(r.rotateTime)};r.preventAnimateEvent();r.itemActive=e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>."+n.itemClassActive);if(n.autoRotate!==false){r.rotateTime=window.setInterval(function(){r.rotate()},(n.speed+2000))};return true};r.preventAnimateEvent=function(){if(e(r).find(".crsl-wrap<?= $Rich_Web_VSlider_ID; ?>:animated").length>0){return false}};r.rotate=function(){r.preventAnimateEvent();r.itemActive=e(r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>."+n.itemClassActive);r.next();return true};r.testprevious<?= $Rich_Web_VSlider_ID; ?>=function(t){return e(".crsl-wrap<?= $Rich_Web_VSlider_ID; ?>",r).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>").index(t)>0};r.testNext=function(){return!n.infinite&&r.wrapWidth>=(n.itemWidth+n.itemMargin)*(n.visible+1)-r.wrapMargin||n.infinite};r.previous<?= $Rich_Web_VSlider_ID; ?>=function(){r.prepareExecute();r.wrapMargin=n.infinite?r.wrapMarginDefault+e(r.itemActive).outerWidth(true):r.wrapMargin+e(r.itemActive).outerWidth(true);var t=e(r.itemActive).index();var i=e(r.itemActive).prev(".crsl-item<?= $Rich_Web_VSlider_ID; ?>");var s="previous<?= $Rich_Web_VSlider_ID; ?>";e(r).trigger("beginCarousel",[n,r,s]);e(r).find(".crsl-wrap<?= $Rich_Web_VSlider_ID; ?>").animate({marginLeft:r.wrapMargin+"px"},n.speed,function(){e(r.itemActive).removeClass(n.itemClassActive);e(i).addClass(n.itemClassActive);if(n.infinite){e(this).css({marginLeft:r.wrapMarginDefault}).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:first-child").before(e(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:last-child",r))}else{if(r.testprevious<?= $Rich_Web_VSlider_ID; ?>(i)===false)e("#"+n.navigation).find(".previous<?= $Rich_Web_VSlider_ID; ?>").addClass("previous<?= $Rich_Web_VSlider_ID; ?>-inactive");if(r.testNext())e("#"+n.navigation).find(".next<?= $Rich_Web_VSlider_ID; ?>").removeClass("next<?= $Rich_Web_VSlider_ID; ?>-inactive")}e(this).trigger("endCarousel",[n,r,s])})};r.next=function(){r.wrapMargin=n.infinite?r.wrapMarginDefault-e(r.itemActive).outerWidth(true):r.wrapMargin-e(r.itemActive).outerWidth(true);var t=e(r.itemActive).index();var i=e(r.itemActive).next(".crsl-item<?= $Rich_Web_VSlider_ID; ?>");var s="next<?= $Rich_Web_VSlider_ID; ?>";e(r).trigger("beginCarousel",[n,r,s]);e(r).find(".crsl-wrap<?= $Rich_Web_VSlider_ID; ?>").animate({marginLeft:r.wrapMargin+"px"},n.speed,function(){e(r.itemActive).removeClass(n.itemClassActive);e(i).addClass(n.itemClassActive);if(n.infinite){e(this).css({marginLeft:r.wrapMarginDefault}).find(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:last-child").after(e(".crsl-item<?= $Rich_Web_VSlider_ID; ?>:first-child",r))}else{if(r.testprevious<?= $Rich_Web_VSlider_ID; ?>(i))e("#"+n.navigation).find(".previous<?= $Rich_Web_VSlider_ID; ?>").removeClass("previous<?= $Rich_Web_VSlider_ID; ?>-inactive");if(r.testNext()===false)e("#"+n.navigation).find(".next<?= $Rich_Web_VSlider_ID; ?>").addClass("next<?= $Rich_Web_VSlider_ID; ?>-inactive")}e(this).trigger("endCarousel",[n,r,s])})};var i=false,s;e(window).on("mouseleave",function(t){if(t.target)s=t.target;else if(t.srcElement)s=t.srcElement;if(e(r).attr("id")&&e(s).parents(".crsl-items<?= $Rich_Web_VSlider_ID; ?>").attr("id")===e(r).attr("id")||e(s).parents(".crsl-items<?= $Rich_Web_VSlider_ID; ?>").data("navigation")===e(r).data("navigation")){i=true}else{i=false}return false});e(window).on("keydown",function(e){if(i===true){if(e.keyCode===37){r.prepareExecute();r.previous<?= $Rich_Web_VSlider_ID; ?>()}else if(e.keyCode===39){r.prepareExecute();r.next()}}return});e(r).on("loadedCarousel loadedImagesCarousel",function(){r.equalHeights()});e(window).on("carouselResizeEnd",function(){if(n.itemWidth!==e(r).outerWidth())r.config()});e(window).ready(function(){e(r).trigger("prepareCarousel",[n,r]);r.init();e(window).on("resize",function(){if(this.carouselResizeTo)clearTimeout(this.carouselResizeTo);this.carouselResizeTo=setTimeout(function(){e(this).trigger("carouselResizeEnd")},10)})});e(window).load(function(){r.testPreload();r.config()})})}})(jQuery)
				</script>    
<script>


					var array_horizontal<?= $Rich_Web_VSlider_ID; ?>=[];
					jQuery(".rw_img_sld<?= $Rich_Web_VSlider_ID; ?>").each(function(){
						if( jQuery(this).attr("data-rwimg") != "" ) {
							array_horizontal<?= $Rich_Web_VSlider_ID; ?>.push(jQuery(this).attr("data-rwimg"));
						}
					})
						jQuery(window).load(function(){
							jQuery('.crsl-items<?= $Rich_Web_VSlider_ID; ?>').carousel_RW<?= $Rich_Web_VSlider_ID; ?>({
								infinite: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_Loop;?>,
								visible: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_Cols;?>,
								speed: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_Speed*1000;?>,
								autoRotate: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_AP;?>,
								itemMinWidth:180,
								itemEqualHeight: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_EH;?>,
								itemMargin: <?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_PB > 2){ echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_PB; }else{ echo '2';}?>,
								carousel: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_Car;?>
							})
					})	
					var y_horizontal<?= $Rich_Web_VSlider_ID; ?>=0;
					for(i=0;i<array_horizontal<?= $Rich_Web_VSlider_ID; ?>.length;i++){
						
						jQuery("img#rw_img_sld<?= $Rich_Web_VSlider_ID; ?>-"+i).attr('style','background-size: 100% 100%;width: 100%;height: 100%;').attr('src', array_horizontal<?= $Rich_Web_VSlider_ID; ?>[i]).on("load",function(){
							y_horizontal<?= $Rich_Web_VSlider_ID; ?>++;
							if(y_horizontal<?= $Rich_Web_VSlider_ID; ?> == array_horizontal<?= $Rich_Web_VSlider_ID; ?>.length){
								jQuery("#Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>").fadeIn(1000);
								jQuery("#RW_Load_Horizontal_Navigation<?= $Rich_Web_VSlider_ID; ?>").remove();
							}
						})
					}

					function Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Play(Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Play_Video_Src)
					{
						jQuery('body').append(`				
<div class="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Overlay" onclick='Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Close()'>
					<i class="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Overlay_Close rich_web <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_Pop_CIType;?>" aria-hidden="true"></i>
						
			</div>
			<div class="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Iframe_Div">
					<div class="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Iframe_Div1">
						<div class="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Iframe_Text">
							<iframe id="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Iframe" src="" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen allow='autoplay'></iframe>
						</div>
					</div>
				</div>
`);
						jQuery('.Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Overlay').show(500);
						jQuery('.Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Iframe_Div').show(500);
						jQuery('#Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Iframe').attr('src',Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Play_Video_Src+'?autoplay=1&rel=0&amp');
					}
					function Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Close()
					{
						jQuery('.Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Overlay').hide(500).remove();
						jQuery('.Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Iframe_Div').hide(500).remove();
					}
				</script>

