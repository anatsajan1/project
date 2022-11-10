<script type="text/javascript">
					var y=false;
					var x=false;
					jQuery.fn.timelinr<?= $Rich_Web_VSlider_ID; ?> = function(options<?= $Rich_Web_VSlider_ID; ?>){
						setting<?= $Rich_Web_VSlider_ID; ?>s = jQuery.extend({
							orientation<?= $Rich_Web_VSlider_ID; ?>: 'horizontal',
							containerDiv<?= $Rich_Web_VSlider_ID; ?>: '#timeline_r<?= $Rich_Web_VSlider_ID; ?>w',
							date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>: '#date<?= $Rich_Web_VSlider_ID; ?>s',
							date<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>: 'select<?= $Rich_Web_VSlider_ID; ?>ed',
							date<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>: 'normal',
							issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>: '#issue<?= $Rich_Web_VSlider_ID; ?>s',
							issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>: 'select<?= $Rich_Web_VSlider_ID; ?>ed',
							issue<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>: 'fast', 
							issue<?= $Rich_Web_VSlider_ID; ?>sTransparency<?= $Rich_Web_VSlider_ID; ?>: 0.2,
							issue<?= $Rich_Web_VSlider_ID; ?>sTransparencySpeed<?= $Rich_Web_VSlider_ID; ?>: 500,
							prevButton<?= $Rich_Web_VSlider_ID; ?>: '#pre<?= $Rich_Web_VSlider_ID; ?>v',
							nextButton<?= $Rich_Web_VSlider_ID; ?>: '#nex<?= $Rich_Web_VSlider_ID; ?>t',
							arrowKeys<?= $Rich_Web_VSlider_ID; ?>: 'false',
							startAt<?= $Rich_Web_VSlider_ID; ?>: 1,
							autoPlay<?= $Rich_Web_VSlider_ID; ?>: 'false',
							autoPlayDirection<?= $Rich_Web_VSlider_ID; ?>: 'forward',
							autoPlayPause<?= $Rich_Web_VSlider_ID; ?>: 2000
						}, options<?= $Rich_Web_VSlider_ID; ?>);
						jQuery(function(){
							if (jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).length > 0 && jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).length > 0) {
								var howManydate<?= $Rich_Web_VSlider_ID; ?>s = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').length;
								var howManyissue<?= $Rich_Web_VSlider_ID; ?>s = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').length;
								var currentDate = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).find('a.'+setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>);
								var currentIssue = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).find('li.'+setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>);
								var widthContainer = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.containerDiv<?= $Rich_Web_VSlider_ID; ?>).width();
								var heightContainer = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.containerDiv<?= $Rich_Web_VSlider_ID; ?>).height();
								var widthissue<?= $Rich_Web_VSlider_ID; ?>s = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).width();
								var heightissue<?= $Rich_Web_VSlider_ID; ?>s = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).height();
								var widthIssue = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').width();
								var heightIssue = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').height();
								var widthdate<?= $Rich_Web_VSlider_ID; ?>s = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).width();
								var heightdate<?= $Rich_Web_VSlider_ID; ?>s = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).height();
								var widthDate = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').width();
								var heightDate = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').height();
								if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'horizontal')
								{
									jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).width(widthIssue*howManyissue<?= $Rich_Web_VSlider_ID; ?>s);
									jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).width(widthDate*howManydate<?= $Rich_Web_VSlider_ID; ?>s).css('marginLeft',widthContainer/2-widthDate/2);
									var defaultPositiondate<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').indexOf('px')));
								}
								else if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'vertical')
								{
									jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).height(heightIssue*howManyissue<?= $Rich_Web_VSlider_ID; ?>s);
									jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).height(heightDate*howManydate<?= $Rich_Web_VSlider_ID; ?>s).css('marginTop',heightContainer/2-heightDate/2);
									var defaultPositiondate<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').indexOf('px')));
								}
								
								

								jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' .rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').click(function(event){
									x=false;
									event.preventDefault();
									var whichIssue = jQuery(this).text();
									var currentIndex = jQuery(this).parent().prevAll().length;
									if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'horizontal')
									{
										jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).animate({'marginLeft':-widthIssue*currentIndex},{queue:false, duration:setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>});
									}
									else if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'vertical')
									{
										jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).animate({'marginTop':-heightIssue*currentIndex},{queue:false, duration:setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>});
									}



									jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').animate({'opacity':setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sTransparency<?= $Rich_Web_VSlider_ID; ?>},{queue:false, duration:setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>}).removeClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>).eq(currentIndex).addClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>).fadeTo(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sTransparencySpeed<?= $Rich_Web_VSlider_ID; ?>,1);
									if(howManydate<?= $Rich_Web_VSlider_ID; ?>s == 1)
									{
										jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>+','+setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
									}
									else if(howManydate<?= $Rich_Web_VSlider_ID; ?>s == 2)
									{
										if(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>))
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('fast');
										}
										else if(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>))
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('fast');
										}
									}
									else
									{
										if( jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>) )
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('fast');
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
										}
										else if( jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>) )
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('fast');
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
										}
										else
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>+','+setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('slow');
										}
									}
									jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' .rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').removeClass(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>);
									jQuery(this).addClass(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>);
									if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'horizontal')
									{
										jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).animate({'marginLeft':defaultPositiondate<?= $Rich_Web_VSlider_ID; ?>s-(widthDate*currentIndex)},{queue:false, duration:'setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>'});
									}
									else if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'vertical')
									{
										jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).animate({'marginTop':defaultPositiondate<?= $Rich_Web_VSlider_ID; ?>s-(heightDate*currentIndex)},{queue:false, duration:'setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>'});
									}
								});
								jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").hover(function(){ y=true; }, function(){ setTimeout(function(){ if(x==false){ y=false; } },1000) });
								jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>,.rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play").click(function() { x=true; y=true; })
								jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).bind('click', function(event){
									event.preventDefault();
									var currentIndex = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).find('li.'+setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>).index();
									if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'horizontal')
									{
										var currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').indexOf('px')));
										var currentIssueIndex = currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s/widthIssue;
										var currentPositiondate<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').indexOf('px')));
										var currentIssueDate = currentPositiondate<?= $Rich_Web_VSlider_ID; ?>s-widthDate;
										if(currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s <= -(widthIssue*howManyissue<?= $Rich_Web_VSlider_ID; ?>s-(widthIssue)))
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).stop();
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child .rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').click();
										}
										else
										{
											if (!jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).is(':animated'))
											{
												jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').eq(currentIndex+1).find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').trigger('click');
											}
										}
										y=true;
									}
									else if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'vertical')
									{
										var currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').indexOf('px')));
										var currentIssueIndex = currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s/heightIssue;
										var currentPositiondate<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').indexOf('px')));
										var currentIssueDate = currentPositiondate<?= $Rich_Web_VSlider_ID; ?>s-heightDate;
										if(currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s <= -(heightIssue*howManyissue<?= $Rich_Web_VSlider_ID; ?>s-(heightIssue)))
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).stop();
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child .rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').click();
										}
										else
										{
											if (!jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).is(':animated'))
											{
												jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').eq(currentIndex+1).find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').trigger('click');
											}
										}
										y=true;
									}
									if(howManydate<?= $Rich_Web_VSlider_ID; ?>s == 1)
									{
										jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>+','+setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
									}
									else if(howManydate<?= $Rich_Web_VSlider_ID; ?>s == 2)
									{
										if(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>))
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('fast');
										}
										else if(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>))
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('fast');
										}
									}
									else
									{
										if( jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>) )
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
										}
										else if( jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>) )
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
										}
										else
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>+','+setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('slow');
										}
									}
								});
								jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).click(function(event){
									event.preventDefault();
									var currentIndex = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).find('li.'+setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>).index();
									if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'horizontal')
									{
										var currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').indexOf('px')));
										var currentIssueIndex = currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s/widthIssue;
										var currentPositiondate<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginLeft').indexOf('px')));
										var currentIssueDate = currentPositiondate<?= $Rich_Web_VSlider_ID; ?>s+widthDate;
										if(currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s >= 0)
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).stop();
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child .rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').click();
										}
										else
										{
											if (!jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).is(':animated'))
											{
												jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').eq(currentIndex-1).find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').trigger('click');
											}
										}
										y=true;
									}
									else if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?> == 'vertical')
									{
										var currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').indexOf('px')));
										var currentIssueIndex = currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s/heightIssue;
										var currentPositiondate<?= $Rich_Web_VSlider_ID; ?>s = parseInt(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').substring(0,jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).css('marginTop').indexOf('px')));
										var currentIssueDate = currentPositiondate<?= $Rich_Web_VSlider_ID; ?>s+heightDate;
										if(currentPositionissue<?= $Rich_Web_VSlider_ID; ?>s >= 0)
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).stop();
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child .rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').click();
										}
										else
										{
											if (!jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).is(':animated'))
											{
												jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').eq(currentIndex-1).find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').trigger('click');
											}
										}
										y=true;
									}
									if(howManydate<?= $Rich_Web_VSlider_ID; ?>s == 1)
									{
										jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>+','+setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
									}
									else if(howManydate<?= $Rich_Web_VSlider_ID; ?>s == 2)
									{
										if(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>))
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('fast');
										}
										else if(jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>))
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('fast');
										}
									}
									else
									{
										if( jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>) )
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
										}
										else if( jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child').hasClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>) )
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
										}
										else
										{
											jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>+','+setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeIn('slow');
										}
									}
								});
								if(setting<?= $Rich_Web_VSlider_ID; ?>s.arrowKeys<?= $Rich_Web_VSlider_ID; ?>=='true')
								{
									if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?>=='horizontal')
									{
										jQuery(document).keydown(function(event){
											if (event.keyCode == 39) { jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).click(); }
											if (event.keyCode == 37) { jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).click(); }
										});
									}
									else if(setting<?= $Rich_Web_VSlider_ID; ?>s.orientation<?= $Rich_Web_VSlider_ID; ?>=='vertical')
									{
										jQuery(document).keydown(function(event){
											if (event.keyCode == 40) { jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.nextButton<?= $Rich_Web_VSlider_ID; ?>).click(); }
											if (event.keyCode == 38) { jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).click(); }
										});
									}
								}
								jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.prevButton<?= $Rich_Web_VSlider_ID; ?>).fadeOut('fast');
								jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li').addClass(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>).fadeTo(setting<?= $Rich_Web_VSlider_ID; ?>s.issue<?= $Rich_Web_VSlider_ID; ?>sTransparencySpeed<?= $Rich_Web_VSlider_ID; ?>,1);
								if(setting<?= $Rich_Web_VSlider_ID; ?>s.autoPlay<?= $Rich_Web_VSlider_ID; ?> == 'true')
								{
									setInterval("autoPlay<?= $Rich_Web_VSlider_ID; ?>()", setting<?= $Rich_Web_VSlider_ID; ?>s.autoPlayPause<?= $Rich_Web_VSlider_ID; ?>);
								}
							}
						});
					
						var arr<?= $Rich_Web_VSlider_ID; ?> = jQuery(".rw_resp_li<?= $Rich_Web_VSlider_ID; ?>");
						for(var i=0;i<arr<?= $Rich_Web_VSlider_ID; ?>.length;i++){
							arr<?= $Rich_Web_VSlider_ID; ?>[i].setAttribute("class", "rw_resp_li<?= $Rich_Web_VSlider_ID; ?>");
						}
					if(arr<?= $Rich_Web_VSlider_ID; ?>[0]){
						arr<?= $Rich_Web_VSlider_ID; ?>[0].setAttribute("class", "rw_resp_li<?= $Rich_Web_VSlider_ID; ?> select<?= $Rich_Web_VSlider_ID; ?>ed")
					};

					var arr2<?= $Rich_Web_VSlider_ID; ?> = jQuery(".rw_tim_li<?= $Rich_Web_VSlider_ID; ?>");
					for(var i=0;i<arr2<?= $Rich_Web_VSlider_ID; ?>.length;i++){
						arr2<?= $Rich_Web_VSlider_ID; ?>[i].setAttribute("class", "rw_tim_li<?= $Rich_Web_VSlider_ID; ?>");
					}
					if(arr2<?= $Rich_Web_VSlider_ID; ?>[0]){
						arr2<?= $Rich_Web_VSlider_ID; ?>[0].setAttribute("class", "rw_tim_li<?= $Rich_Web_VSlider_ID; ?> select<?= $Rich_Web_VSlider_ID; ?>ed")
					};
				}
					function autoPlay<?= $Rich_Web_VSlider_ID; ?>()
					{
						if(y==true){ return }
						var currentDate = jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>).find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>.'+setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sSelectedClass<?= $Rich_Web_VSlider_ID; ?>);
						if(setting<?= $Rich_Web_VSlider_ID; ?>s.autoPlayDirection<?= $Rich_Web_VSlider_ID; ?> == 'forward') 
						{
							if(currentDate.parent().is('li:last-child'))
							{
								jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:first-child').find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').trigger('click');
							}
							else
							{
								currentDate.parent().next().find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').trigger('click');
							}
							y=true;
						}
						else if(setting<?= $Rich_Web_VSlider_ID; ?>s.autoPlayDirection<?= $Rich_Web_VSlider_ID; ?> == 'backward')
						{
							if(currentDate.parent().is('li:first-child'))
							{
								jQuery(setting<?= $Rich_Web_VSlider_ID; ?>s.date<?= $Rich_Web_VSlider_ID; ?>sDiv<?= $Rich_Web_VSlider_ID; ?>+' li:last-child').find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').trigger('click');
							}
							else
							{
								currentDate.parent().prev().find('.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>').trigger('click');
							}
						}
						setTimeout(function(){ y=false; },100)
					}
				</script>
				<script type="text/javascript">
					jQuery(function(){
						var Rich_Web_MS_SSh<?= $Rich_Web_VSlider_ID; ?> = jQuery(".Rich_Web_MS_SSh<?= $Rich_Web_VSlider_ID; ?>").val();
						var Rich_Web_MS_SShChT<?= $Rich_Web_VSlider_ID; ?> = jQuery(".Rich_Web_MS_SShChT<?= $Rich_Web_VSlider_ID; ?>").val();
						if(Rich_Web_MS_SSh<?= $Rich_Web_VSlider_ID; ?> == "on") { Rich_Web_MS_SSh<?= $Rich_Web_VSlider_ID; ?>="true"; }
						else { Rich_Web_MS_SSh<?= $Rich_Web_VSlider_ID; ?>="false"; }

						setTimeout(function(){
							jQuery().timelinr<?= $Rich_Web_VSlider_ID; ?>({
								orientation<?= $Rich_Web_VSlider_ID; ?>: '<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Type; ?>',
								issue<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>: 300,
								date<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>: 100,
								arrowKeys<?= $Rich_Web_VSlider_ID; ?>: 'true',
								startAt<?= $Rich_Web_VSlider_ID; ?>: 1,
								autoPlay<?= $Rich_Web_VSlider_ID; ?>: "false",
								autoPlayPause<?= $Rich_Web_VSlider_ID; ?>:Rich_Web_MS_SShChT<?= $Rich_Web_VSlider_ID; ?>,
							})
						},100)
						jQuery().timelinr<?= $Rich_Web_VSlider_ID; ?>({
							orientation<?= $Rich_Web_VSlider_ID; ?>: '<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Type; ?>',
							issue<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>: 300,
							date<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>: 100,
							arrowKeys<?= $Rich_Web_VSlider_ID; ?>: 'true',
							startAt<?= $Rich_Web_VSlider_ID; ?>: 1,
							autoPlay<?= $Rich_Web_VSlider_ID; ?>: Rich_Web_MS_SSh<?= $Rich_Web_VSlider_ID; ?>,
							autoPlayPause<?= $Rich_Web_VSlider_ID; ?>:Rich_Web_MS_SShChT<?= $Rich_Web_VSlider_ID; ?>,
						})
						jQuery(window).on("load resize",function(){
							jQuery().timelinr<?= $Rich_Web_VSlider_ID; ?>({
								orientation<?= $Rich_Web_VSlider_ID; ?>: '<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Type; ?>',
								issue<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>: 300,
								date<?= $Rich_Web_VSlider_ID; ?>sSpeed<?= $Rich_Web_VSlider_ID; ?>: 100,
								arrowKeys<?= $Rich_Web_VSlider_ID; ?>: 'true',
								startAt<?= $Rich_Web_VSlider_ID; ?>: 1,
								autoPlay<?= $Rich_Web_VSlider_ID; ?>: 'false', 
								autoPlayPause<?= $Rich_Web_VSlider_ID; ?>:Rich_Web_MS_SShChT<?= $Rich_Web_VSlider_ID; ?>,
							})
						})

					});
				</script>
				<script type="text/javascript">
					jQuery("#RW_Load_Timeline_Navigation<?= $Rich_Web_VSlider_ID; ?>").css("max-height",Math.floor(jQuery("#RW_Load_Timeline_Navigation<?= $Rich_Web_VSlider_ID; ?>").width()+56.25/100));
					jQuery(window).resize(function(){
						jQuery("#RW_Load_Timeline_Navigation<?= $Rich_Web_VSlider_ID; ?>").css("max-height",Math.floor(jQuery("#RW_Load_Timeline_Navigation<?= $Rich_Web_VSlider_ID; ?>").width()+56.25/100));
					})
					var array_timelineSl<?= $Rich_Web_VSlider_ID; ?>=[];
					jQuery(".RW_tim_vid_vid<?= $Rich_Web_VSlider_ID; ?>").each(function(){
						if( jQuery(this).attr("src") != "" ) {
							array_timelineSl<?= $Rich_Web_VSlider_ID; ?>.push(jQuery(this).attr("src"));
						}
					})
					var y_timelineSl<?= $Rich_Web_VSlider_ID; ?>=0;
					// jQuery(window).on("load resize",function(){
						for(i=0;i<array_timelineSl<?= $Rich_Web_VSlider_ID; ?>.length;i++){
							jQuery("<img class='RW_tim_vid_vid<?= $Rich_Web_VSlider_ID; ?>' />").attr('src', array_timelineSl<?= $Rich_Web_VSlider_ID; ?>[i]).on("load",function(){
								y_timelineSl<?= $Rich_Web_VSlider_ID; ?>++;
								if(y_timelineSl<?= $Rich_Web_VSlider_ID; ?> == array_timelineSl<?= $Rich_Web_VSlider_ID; ?>.length){
									// jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").show();
									// jQuery("#RW_Load_Timeline_Navigation<?= $Rich_Web_VSlider_ID; ?>").remove();
								}
							})
						}
					// })
					
				<?php if ($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Type=='horizontal') { ?>
					jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").show();
					jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").css("height","0");
					jQuery(window).on("load resize",function(){
						jQuery("#RW_Load_Timeline_Navigation<?= $Rich_Web_VSlider_ID; ?>").remove();
						if(jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").width() <= 500){
							jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").css("height","auto");
						}
						else
						{
							jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").css("height",Math.floor(jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").width()*9/16+55+jQuery(".rw_tim_icons_cont_div<?= $Rich_Web_VSlider_ID; ?>").height()));
						}
						// jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").show();
						
					})
				<?php } else{ ?>
					jQuery(window).on("load resize",function(){
						jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").show();
						jQuery("#RW_Load_Timeline_Navigation<?= $Rich_Web_VSlider_ID; ?>").remove();
						jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").css("height",jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").height()+300);
						// jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").show();
						
					})
				<?php } ?>
					
				</script>
				<script type="text/javascript">
					jQuery(window).on("load resize",function(){
						var Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?> = "<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_S; ?>";
						
						jQuery("#issue<?= $Rich_Web_VSlider_ID; ?>s").css("margin","0px");
						jQuery(".RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>").css("font-size",Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>*jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").innerWidth()/500)+"px");
						jQuery(".RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>").css("padding",Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>/4)+"px "+Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>/2*jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").innerWidth()/300)+"px");
					})
				</script>