<script type="text/javascript" src="<?= plugin_dir_url( __DIR__ ).'Scripts/rvslider.min.js';?>"></script>
				<script type="text/javascript">
					jQuery(document).ready(function(){
						jQuery('.rvs-play-video').on('click',function(){
							setTimeout(function(){
									  var w = jQuery('.rvs-player').find('video').attr('controlsList','nodownload');
									},1500);
						});
						function resp(){
							if(jQuery(".rvs-container<?= $Rich_Web_VSlider_ID; ?>").width()<=400){
								jQuery(".rvs-container<?= $Rich_Web_VSlider_ID; ?>").addClass("rvs-container<?= $Rich_Web_VSlider_ID; ?>_mobile");
								jQuery(".rvs-container<?= $Rich_Web_VSlider_ID; ?>").css("padding-right","0px");
								jQuery(".rvs-nav-next<?= $Rich_Web_VSlider_ID; ?>").css("display","none");
								jQuery(".rvs-nav-prev<?= $Rich_Web_VSlider_ID; ?>").css("display","none");
								jQuery(".rvs-nav-item-thumb<?= $Rich_Web_VSlider_ID; ?>").css("display","block");
								jQuery(".rvs-item-stage<?= $Rich_Web_VSlider_ID; ?>").addClass("rvs-item-stage<?= $Rich_Web_VSlider_ID; ?>_mobile");
								jQuery(".rvs-nav-item").css({"height":"auto","padding":"10px"});
								jQuery(".rvs-nav-stage").css("max-height","160px");
								jQuery(".rvs-nav-container<?= $Rich_Web_VSlider_ID; ?>").css({"position":"relative","width":"100%","overflow":"visible","overflow-x":"hidden","max-height":"160px"});
								jQuery(".rvs-item-stage<?= $Rich_Web_VSlider_ID; ?>").css("height",Math.floor(jQuery(".rvs-container<?= $Rich_Web_VSlider_ID; ?>").width()*3/4));
							}
							else{
								jQuery(".rvs-nav-container<?= $Rich_Web_VSlider_ID; ?>").css({"position":"absolute","width":"150px","overflow":"visible","overflow-x":"hidden","max-height":"unset"});
								jQuery('.rvs-container').css('padding-right','150px');
								jQuery('.rvs-container<?= $Rich_Web_VSlider_ID; ?>').css('height',"0px");
								jQuery('.rvs-container<?= $Rich_Web_VSlider_ID; ?>').css('height',Math.floor(jQuery('.rvs-item-container').width()*9/16));
							}
						}

						jQuery(window).on("load resize",function(){ resp(); })
						setTimeout(function(){ resp(); },10)
						jQuery(window).resize(function(){ resp(); })
						var array_rich<?= $Rich_Web_VSlider_ID; ?>=[];
						jQuery(".rw_img_hidden<?= $Rich_Web_VSlider_ID; ?>").each(function(){
							if( jQuery(this).attr("src") != "" ) {
								array_rich<?= $Rich_Web_VSlider_ID; ?>.push(jQuery(this).attr("src"));
							}
						})
						var y_rich<?= $Rich_Web_VSlider_ID; ?>=0;
						for(i=0;i<array_rich<?= $Rich_Web_VSlider_ID; ?>.length;i++){
							jQuery(".rw_img_hidden<?= $Rich_Web_VSlider_ID; ?>").attr('src', array_rich<?= $Rich_Web_VSlider_ID; ?>[i]).on("load",function(){
								y_rich<?= $Rich_Web_VSlider_ID; ?>++;
								if(y_rich<?= $Rich_Web_VSlider_ID; ?> == array_rich<?= $Rich_Web_VSlider_ID; ?>.length){
									jQuery(".rvs-container<?= $Rich_Web_VSlider_ID; ?>").fadeIn(1000);
									jQuery("#RW_Load_RS_Navigation<?= $Rich_Web_VSlider_ID; ?>").remove();
								}
							})
						}
					})
				</script>
				<script>
					jQuery(document).ready(function($){
						setTimeout(function(){ jQuery('.rvs-container<?= $Rich_Web_VSlider_ID; ?>').rvslider1(); },10)
					});
				</script>