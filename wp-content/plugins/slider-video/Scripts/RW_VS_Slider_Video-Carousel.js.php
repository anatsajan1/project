<script>					
					function resp<?php echo $Rich_Web_VSlider_ID; ?>()
					{
						jQuery('.forPoppUll<?php echo $Rich_Web_VSlider_ID; ?>').css({'min-height':Math.floor(jQuery('.forPopp<?php echo $Rich_Web_VSlider_ID; ?>').innerWidth()/1.853-3)+'px','margin':'0px'});
						jQuery('.forPoppUll<?php echo $Rich_Web_VSlider_ID; ?>').css('max-height',Math.floor(jQuery('.forPopp<?php echo $Rich_Web_VSlider_ID; ?>').innerWidth()/1.853-3)+'px');
						jQuery(".carousel<?php echo $Rich_Web_VSlider_ID; ?>").css("height","jQuery('.fImgH1,.fImgH2,.fImgH3,.fImgH4,.fImgH5').width()*16/9");
						
						jQuery(".figurForImg<?php echo $Rich_Web_VSlider_ID; ?> i").css("font-size",jQuery(".forPopp<?php echo $Rich_Web_VSlider_ID; ?>").width()/10);
						jQuery('.forPopp<?php echo $Rich_Web_VSlider_ID; ?>:first-child').find('.wrap<?php echo $Rich_Web_VSlider_ID; ?>').attr('style', 'padding-left: 0px !important');
                        jQuery('.forPopp<?php echo $Rich_Web_VSlider_ID; ?>:last-child').find('.wrap<?php echo $Rich_Web_VSlider_ID; ?>').attr('style','padding-right: 0px !important');
                        jQuery('.next<?php echo $Rich_Web_VSlider_ID; ?>').on('click',function(){
                        	setTimeout(function(){
								var items = jQuery('.forPoppUll<?php echo $Rich_Web_VSlider_ID; ?>').children('li');
	                        	jQuery(items).each(function(index, elem){
									var position = jQuery(elem).position().left;
									var str = position.toString();
                                    if(str.indexOf("-") >= 0 === true){
                                        var last = jQuery(elem).get(0);
										jQuery(last).next().find('.wrap<?php echo $Rich_Web_VSlider_ID; ?>').attr('style', 'padding-left: 0px !important');
                                    }
	                        	});
                        	},200);
                        });
                        jQuery('.prev<?php echo $Rich_Web_VSlider_ID; ?>').on('click',function(){
                            setTimeout(function(){
                            	jQuery('.forPoppUll<?php echo $Rich_Web_VSlider_ID; ?>').children('li').find('.wrap<?php echo $Rich_Web_VSlider_ID; ?>').attr('style','padding-left:'+<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Car_PBImgs;?>+'px !important');
								var items = jQuery('.forPoppUll<?php echo $Rich_Web_VSlider_ID; ?>').children('li');
	                        	jQuery(items).each(function(index, elem){
									var position = jQuery(elem).position().left;
									var str = position.toString();
                                    if(str.indexOf("-") >= 0 === true){
                                        var last = jQuery(elem).get(0);
										jQuery(last).find('.wrap<?php echo $Rich_Web_VSlider_ID; ?>').attr('style', 'padding-left: 0px !important');
                                    }
	                        	});
                        	},150);
                        });
						

					}

				
				
					(function () {
						var anoSlide<?php echo $Rich_Web_VSlider_ID; ?> = function(element<?php echo $Rich_Web_VSlider_ID; ?>, options<?php echo $Rich_Web_VSlider_ID; ?>) 
						{
							this.slides<?php echo $Rich_Web_VSlider_ID; ?> = [];
							this.progress<?php echo $Rich_Web_VSlider_ID; ?> = false;
							this.current  = 0;
							this.element<?php echo $Rich_Web_VSlider_ID; ?> = jQuery(element<?php echo $Rich_Web_VSlider_ID; ?>); 
							this.options<?php echo $Rich_Web_VSlider_ID; ?> = jQuery.extend(
							{
								items<?php echo $Rich_Web_VSlider_ID; ?>:	5,
								speed:			1000,
								auto:			0,
								autoStop:		true,
								next:			'',
								prev:			'',
								responsiveAt:	480,
								delay:			0,
								lazy:		false,
								onConstruct:	function(instance){},
								onStart:		function(ui){},
								onEnd:			function(ui){}
							}, options<?php echo $Rich_Web_VSlider_ID; ?>);
							this.defaults<?php echo $Rich_Web_VSlider_ID; ?> =
							{
								items<?php echo $Rich_Web_VSlider_ID; ?>: this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>,
								auto: 0
							}
							this.preloader = new anoPreload();
							this.timeout = null;
						};
						anoSlide<?php echo $Rich_Web_VSlider_ID; ?>.prototype =
						{
							construct: function()
							{
								this.defaults<?php echo $Rich_Web_VSlider_ID; ?>.auto = this.options<?php echo $Rich_Web_VSlider_ID; ?>.auto;
								this.element<?php echo $Rich_Web_VSlider_ID; ?>.css(
								{
									position: 'relative', overflow: 'hidden', display: 'block'
								}).children().css(
								{
									position: 'absolute', cursor: 'pointer', overflow: 'hidden', display: 'block'
								}).each(delegate(this, function(index, slide)
								{
									this.slides<?php echo $Rich_Web_VSlider_ID; ?>.push({ element<?php echo $Rich_Web_VSlider_ID; ?>: jQuery(slide) })
								})).find('img').css({ float: 'left' })
								jQuery(window).on({ resize: delegate(this, this.adapt) });
								if (this.options<?php echo $Rich_Web_VSlider_ID; ?>.next) { jQuery(this.options<?php echo $Rich_Web_VSlider_ID; ?>.next).on('click', delegate(this, this.next)); }
								if (this.options<?php echo $Rich_Web_VSlider_ID; ?>.prev) { jQuery(this.options<?php echo $Rich_Web_VSlider_ID; ?>.prev).on('click', delegate(this, this.prev)); }
								if (this.options<?php echo $Rich_Web_VSlider_ID; ?>.autoStop)
								{
									this.element<?php echo $Rich_Web_VSlider_ID; ?>.parent().on(
									{
										mouseenter: delegate(this, function(element<?php echo $Rich_Web_VSlider_ID; ?>)
										{
											if (this.timeout)
											{
												clearTimeout(this.timeout);
												this.options<?php echo $Rich_Web_VSlider_ID; ?>.auto = 0;
											}
										}),
										mouseleave: delegate(this, function(element<?php echo $Rich_Web_VSlider_ID; ?>)
										{
											this.options<?php echo $Rich_Web_VSlider_ID; ?>.auto = this.defaults<?php echo $Rich_Web_VSlider_ID; ?>.auto;
											this.go(this.current);
										})
									})
								}
								this.options<?php echo $Rich_Web_VSlider_ID; ?>.onConstruct.apply(this,[this]);
								this.adapt().go(0);
							},
							preload: function(index, callback)
							{
								var queue = [];
								if (this.options<?php echo $Rich_Web_VSlider_ID; ?>.lazy)
								{
									for (i = index, l = index + this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>; i < l; i++)
									{
										if (this.slides<?php echo $Rich_Web_VSlider_ID; ?>[i].element<?php echo $Rich_Web_VSlider_ID; ?>.find('img[data-src]').length)
										{
											queue.push(
											{
												source: this.slides<?php echo $Rich_Web_VSlider_ID; ?>[i].element<?php echo $Rich_Web_VSlider_ID; ?>.find('img[data-src]').data('src')
											});
										}
									}
								}
								if (queue.length) { this.preloader.reset().append(queue).preload(callback); }
								else { callback.apply(this,[{ images:[] }]); }
							},
							animate: function(index, images, reverse)
							{
								if (!this.progress<?php echo $Rich_Web_VSlider_ID; ?>)
								{
									this.progress<?php echo $Rich_Web_VSlider_ID; ?> = true;
									var viewport = 
									{
										w: this.element<?php echo $Rich_Web_VSlider_ID; ?>.parent().outerWidth(),
										h: this.element<?php echo $Rich_Web_VSlider_ID; ?>.parent().outerHeight()
									}
									this.options<?php echo $Rich_Web_VSlider_ID; ?>.onStart.apply(this,[
									{
										instance:	this,
										index:		index,
										slide:		this.slides<?php echo $Rich_Web_VSlider_ID; ?>[index]
									}]);
									jQuery.each((reverse ? this.slides<?php echo $Rich_Web_VSlider_ID; ?>.reverse() : this.slides<?php echo $Rich_Web_VSlider_ID; ?>), delegate(this, function(key, slide)
									{
										var offset = (reverse ? (-(index - (this.slides<?php echo $Rich_Web_VSlider_ID; ?>.length - 1 - key))) : (-(index - key))) * (this.element<?php echo $Rich_Web_VSlider_ID; ?>.width()+18) /this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>;
										if (slide.element<?php echo $Rich_Web_VSlider_ID; ?>.find('img[data-src]').length && images.length)
										{
											if (1 == this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>)
											{
												if (index == key)
												{
													var i = images.pop().image;
													slide.element<?php echo $Rich_Web_VSlider_ID; ?>.find('img[data-src]').replaceWith(i);
												}
											}
											else
											{
												var i = images.pop().image;
												slide.element<?php echo $Rich_Web_VSlider_ID; ?>.find('img[data-src]').replaceWith(i);
											}
										}
										var fn = (key == index) ? delegate(this, function()
										{
											this.progress<?php echo $Rich_Web_VSlider_ID; ?> = false;
											this.options<?php echo $Rich_Web_VSlider_ID; ?>.onEnd.apply(this,[
											{
												instance:	this,
												index:		this.current,
												slide:		this.slides<?php echo $Rich_Web_VSlider_ID; ?>[this.current]
											}])
											if (this.options<?php echo $Rich_Web_VSlider_ID; ?>.auto)
											{
												if (this.timeout)
												{
													clearTimeout(this.timeout);
												}
												this.timeout = setTimeout(delegate(this, this.next), this.options<?php echo $Rich_Web_VSlider_ID; ?>.auto);
											}
										}) : function() {};
										slide.element<?php echo $Rich_Web_VSlider_ID; ?>.css(
										{
											width: Math.floor((this.element<?php echo $Rich_Web_VSlider_ID; ?>.width()+18)/this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>) + 'px',
											height: Math.floor(this.element<?php echo $Rich_Web_VSlider_ID; ?>.outerWidth()/this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>)*9/16 + "px"
										}).delay(key * this.options<?php echo $Rich_Web_VSlider_ID; ?>.delay).animate(
										{
											left: offset + 'px'
										}, this.options<?php echo $Rich_Web_VSlider_ID; ?>.speed, fn);
									}));
									if (reverse) { this.slides<?php echo $Rich_Web_VSlider_ID; ?>.reverse(); }
									this.element<?php echo $Rich_Web_VSlider_ID; ?>.animate(
									{
										height: this.slides<?php echo $Rich_Web_VSlider_ID; ?>[index].element<?php echo $Rich_Web_VSlider_ID; ?>.outerHeight()-2
									});
									var queue = this.slides<?php echo $Rich_Web_VSlider_ID; ?>.length - this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?> - this.current;
									if (!queue) { this.disable.next.call(this); }
									else this.enable.next.call(this);
									if (index - 1 < 0) { this.disable.prev.call(this); }
									else { this.enable.prev.call(this); }
								}
								return this;
							},
							adapt: function()
							{
								var viewport =
								{
									w: this.element<?php echo $Rich_Web_VSlider_ID; ?>.parent().outerWidth(),
									h: this.element<?php echo $Rich_Web_VSlider_ID; ?>.parent().outerHeight()
								}
								if (viewport.w < this.options<?php echo $Rich_Web_VSlider_ID; ?>.responsiveAt)
								{
									this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?> = 1;
								}
								else
								{
									this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?> = this.defaults<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>;
								}
								jQuery.each(this.slides<?php echo $Rich_Web_VSlider_ID; ?>, delegate(this, function(key, slide)
								{
									var offset = -(this.current - key) * this.element<?php echo $Rich_Web_VSlider_ID; ?>.width()/this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>;
									slide.element<?php echo $Rich_Web_VSlider_ID; ?>.stop().css(
									{
										width: this.element<?php echo $Rich_Web_VSlider_ID; ?>.width()/this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?>,
										left: offset
									}, this.options<?php echo $Rich_Web_VSlider_ID; ?>.speed, (key == this.slides<?php echo $Rich_Web_VSlider_ID; ?>.length - 1) ? delegate(this, function()
									{
										this.progress<?php echo $Rich_Web_VSlider_ID; ?> = false;
									}) : function(){})
								}));
								if (0 !== this.slides<?php echo $Rich_Web_VSlider_ID; ?>[this.current].element<?php echo $Rich_Web_VSlider_ID; ?>.parent().height())
								{
									this.element<?php echo $Rich_Web_VSlider_ID; ?>.css(
									{
										height: this.slides<?php echo $Rich_Web_VSlider_ID; ?>[this.current].element<?php echo $Rich_Web_VSlider_ID; ?>.outerHeight()-2
									})
								}
								return this;
							},
							next: function()
							{
								var queue = this.slides<?php echo $Rich_Web_VSlider_ID; ?>.length - this.options<?php echo $Rich_Web_VSlider_ID; ?>.items<?php echo $Rich_Web_VSlider_ID; ?> - this.current;
								if (queue) { this.go(this.current + 1); }
								else { this.go(0); }
							},
							prev: function()
							{
								this.go(this.current - 1, true);
							},
							stop: function()
							{
								if (this.timeout) { clearTimeout(this.timeout); }
								this.progress<?php echo $Rich_Web_VSlider_ID; ?> = false;
								return this;
							},
							go: function(index, reverse)
							{
								reverse = reverse || false;
								this.progress<?php echo $Rich_Web_VSlider_ID; ?>=false;
								if (!this.progress<?php echo $Rich_Web_VSlider_ID; ?>)
								{
									if (index < 0 || index > this.slides<?php echo $Rich_Web_VSlider_ID; ?>.length - 1) { return false; }
									else { this.current = index; this.preload(index, delegate(this, function(ui) { this.animate(index, ui.images, reverse); })); }
								}
							},
							enable:
							{
								next: function()
								{
									jQuery(this.options<?php echo $Rich_Web_VSlider_ID; ?>.next).removeClass('disabled').fadeIn(300);
								},
								prev: function()
								{
									jQuery(this.options<?php echo $Rich_Web_VSlider_ID; ?>.prev).removeClass('disabled').fadeIn(300);
								}
							},
							disable:
							{
								next: function()
								{
									jQuery(this.options<?php echo $Rich_Web_VSlider_ID; ?>.next).addClass('disabled').fadeOut(300);
								},
								prev: function()
								{
									jQuery(this.options<?php echo $Rich_Web_VSlider_ID; ?>.prev).addClass('disabled').fadeOut(300);
								}
							}
						}
						var anoPreload = function()
						{
							this.queue = [];
							this.images = [];
							this.total = 0;
							this.config =
							{
								cache: false
							};
							this.time =
							{
								start: 0,
								end: 0
							};

						}
						anoPreload.prototype =
						{
							onComplete: function(ui){},
							reset: function()
							{
								this.queue = [];
								this.images = [];
								this.total = 0;
								return this;
							},
							append: function(element<?php echo $Rich_Web_VSlider_ID; ?>)
							{
								var queue = this.queue;
								$.each(element<?php echo $Rich_Web_VSlider_ID; ?>, function(index, element<?php echo $Rich_Web_VSlider_ID; ?>)
								{
									queue.push(element<?php echo $Rich_Web_VSlider_ID; ?>);
								});
								return this;
							},
							finish: function(event, index, image)
							{
								this.total--;
								$.each(this.images, function(x,i)
								{
									if (i.index == index)
									{
										i.size = {
											width: image.width,
											height: image.height
										}
									}
								})
								if (0 == this.total)
								{
									this.time.end = new Date().getTime();
									this.onComplete.apply(this,[
									{
										time:	((this.time.end - this.time.start)/1000).toPrecision(2),
										images: this.images
									}])
								}
							},
							preload: function(callback)
							{
								this.onComplete = callback || this.onComplete;
								this.time.start = new Date().getTime();
								this.total = i = this.queue.length;
								while(i--)
								{
									var image = new Image();
									this.images.push(
									{
										index: i,
										image: image,
										size:
										{
											width:	0,
											height: 0
										}
									});
									image.onload = image.onerror = image.onabort = delegate(this, this.finish, ([i,image]));
									image.src = this.config.cache ? this.queue[i].source : (this.queue[i].source + '?u=' + (new Date().getTime()));
								}
							
							}

						}
						jQuery.fn.anoSlide<?php echo $Rich_Web_VSlider_ID; ?> = function (options<?php echo $Rich_Web_VSlider_ID; ?>)
						{
							return this.each(function ()
							{
								if (undefined == jQuery(this).data('anoSlide<?php echo $Rich_Web_VSlider_ID; ?>'))
								{
									var a = new anoSlide<?php echo $Rich_Web_VSlider_ID; ?>(this, options<?php echo $Rich_Web_VSlider_ID; ?>).construct();
									jQuery(this).data('anoSlide<?php echo $Rich_Web_VSlider_ID; ?>', a);
								}
							});
						};
						var delegate = function(target, method, args)
						{
							return (typeof method === "function") ? function()
							{
								arguments.push = Array.prototype.push;
								for (var arg in args)
								{
									arguments.push(args[arg]);
								}
								return method.apply(target, arguments);
							} : function()
							{
								return false;
							};
						}

					})();

				jQuery(window).ready(function(){
					var sum<?php echo $Rich_Web_VSlider_ID; ?>=0;
					var imgCols<?php echo $Rich_Web_VSlider_ID; ?> = parseInt(jQuery('.imgCols<?php echo $Rich_Web_VSlider_ID; ?>').attr('value'));
					var imgCount<?php echo $Rich_Web_VSlider_ID; ?> = parseInt(jQuery('.imgCount<?php echo $Rich_Web_VSlider_ID; ?>').attr('value'));
					if(imgCount<?php echo $Rich_Web_VSlider_ID;?> < imgCols<?php echo $Rich_Web_VSlider_ID; ?>) { 
						sum<?php echo $Rich_Web_VSlider_ID;?>=imgCount<?php echo $Rich_Web_VSlider_ID;?>;
					}else { 
						sum<?php echo $Rich_Web_VSlider_ID;?>=imgCols<?php echo $Rich_Web_VSlider_ID; ?>; 
					}
				
						jQuery('.carousel<?php echo $Rich_Web_VSlider_ID; ?>[data-mixed] ul').anoSlide<?php echo $Rich_Web_VSlider_ID; ?>({
							items<?php echo $Rich_Web_VSlider_ID; ?>: parseInt(sum<?php echo $Rich_Web_VSlider_ID; ?>),
							speed: 500,
							prev: 'a.prev<?php echo $Rich_Web_VSlider_ID; ?>[data-prev]',
							next: 'a.next<?php echo $Rich_Web_VSlider_ID; ?>[data-next]',
							lazy: true,
							delay: 100,
								onConstruct:	function(instance){},
								onStart:		function(ui){},
								onEnd:			function(ui){}
						})
				
						jQuery(window).resize(function(){
						jQuery('.carousel<?php echo $Rich_Web_VSlider_ID; ?>[data-mixed] ul').anoSlide<?php echo $Rich_Web_VSlider_ID; ?>(
						{
							items<?php echo $Rich_Web_VSlider_ID; ?>: parseInt(sum<?php echo $Rich_Web_VSlider_ID; ?>),
							speed: 0,
							auto:0,
							// autoStop:false,
							prev: 'a.prev<?php echo $Rich_Web_VSlider_ID; ?>[data-prev]',
							next: 'a.next<?php echo $Rich_Web_VSlider_ID; ?>[data-next]',
							// responsiveAt:	480,
							lazy: false,
							delay: 0
						})
						})
						jQuery(window).resize(function(){ resp<?php echo $Rich_Web_VSlider_ID; ?>();  })
						window.addEventListener('load', function (event) {
						jQuery(window).trigger('resize');
						});
					resp<?php echo $Rich_Web_VSlider_ID; ?>();
					
					});
					


				
				</script>
				<script>
					var poppTitleFS=jQuery('.poppTitleFS<?php echo $Rich_Web_VSlider_ID; ?>').val();
					var poppLinkFS=jQuery('.poppLinkFS<?php echo $Rich_Web_VSlider_ID; ?>').val();

					var array_vccp<?php echo $Rich_Web_VSlider_ID; ?>=[];
					jQuery(".vccp_img<?php echo $Rich_Web_VSlider_ID; ?>").each(function(){
						if( jQuery(this).attr("data-rwimg") != "" ) {
							array_vccp<?php echo $Rich_Web_VSlider_ID; ?>.push(jQuery(this).attr("data-rwimg"));
						}
					})
					var y_vccp<?php echo $Rich_Web_VSlider_ID; ?>=0;
					for(i=0;i<array_vccp<?php echo $Rich_Web_VSlider_ID; ?>.length;i++){
						jQuery("<img class='vccp_img<?php echo $Rich_Web_VSlider_ID; ?>' />").attr('src', array_vccp<?php echo $Rich_Web_VSlider_ID; ?>[i]).on("load",function(){
							y_vccp<?php echo $Rich_Web_VSlider_ID; ?>++;
							if(y_vccp<?php echo $Rich_Web_VSlider_ID; ?> == array_vccp<?php echo $Rich_Web_VSlider_ID; ?>.length){
								jQuery(".wrapper<?php echo $Rich_Web_VSlider_ID; ?>").fadeIn(1000);
								jQuery("#RW_Load_VCCP_Navigation<?php echo $Rich_Web_VSlider_ID; ?>").remove();
							}
						})
					}
					var y=false;
					function popp<?php echo $Rich_Web_VSlider_ID; ?>(src,title,desc,link,Ont)
					{
						y=true;
						jQuery('.popF1<?php echo $Rich_Web_VSlider_ID; ?>').addClass('popF1<?php echo $Rich_Web_VSlider_ID; ?>_1');
						jQuery('.videoo<?php echo $Rich_Web_VSlider_ID; ?>').attr('src',src);
						jQuery('.tit<?php echo $Rich_Web_VSlider_ID; ?>').text(title);
						jQuery('.descr<?php echo $Rich_Web_VSlider_ID; ?>').html(jQuery('#'+desc).val());
						setTimeout(function(){
							jQuery(".popDiv<?php echo $Rich_Web_VSlider_ID; ?>").addClass("popDiv<?php echo $Rich_Web_VSlider_ID; ?>_center")
							if(jQuery('#'+desc).val()=='')
							{
								jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none');
								jQuery('.popVideo1<?php echo $Rich_Web_VSlider_ID; ?>').animate({"opacity":"1","height":"500px","width":"560px","max-width":"85%","border-radius":"0%",'max-height':Math.floor(jQuery(window).width()/2)+'px','border-width':'<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Border_Width;?>px'},400,function(){
									jQuery('.videoo<?php echo $Rich_Web_VSlider_ID; ?>').addClass('videoo<?php echo $Rich_Web_VSlider_ID; ?>_anim');
								});
								jQuery('.vid').css({'width':'100%','margin':'0px','height':'80%',});
								jQuery('.minTit<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
								jQuery('.minTit<?php echo $Rich_Web_VSlider_ID; ?>').text(title);
								jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('right','5px');
								jQuery('#IconForPop<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
								if(link!='')
								{
									jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
									jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').attr('href',link);
									jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').attr('target',Ont);
								}
								else { jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none'); }
								jQuery(window).resize(function(){
									if(y==true)
									{
											jQuery('.popVideo1<?php echo $Rich_Web_VSlider_ID; ?>').animate({"opacity":"1","height":"500px","width":"560px","max-width":"85%","border-radius":"0%",'max-height':Math.floor(jQuery(window).width()/2)+'px','border-width':'<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Border_Width;?>px'},400,function(){
											jQuery('.videoo<?php echo $Rich_Web_VSlider_ID; ?>').addClass('videoo<?php echo $Rich_Web_VSlider_ID; ?>_anim');
										});
									}
								})
							}
							else
							{
								jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
								if(jQuery(window).width()<=600)
								{
									jQuery('.popVideo1<?php echo $Rich_Web_VSlider_ID; ?>').animate({"opacity":"1","height":"500px","width":"560px","max-width":"85%","border-radius":"0%",'max-height':Math.floor(jQuery(window).width()/0.5)+'px','border-width':'<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Border_Width;?>px'},400,function(){
										jQuery('.videoo<?php echo $Rich_Web_VSlider_ID; ?>').addClass('videoo<?php echo $Rich_Web_VSlider_ID; ?>_anim');
									});
									let mg = '5px', hg='45%';
								    if(link!=''){ mg ='33px';  hg='35%'; }
									jQuery('.vid').css({'width':'100%','margin':'0px','height':hg,'margin-bottom':mg});
									jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>_anim').addClass('titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>_anim2');
									jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').addClass('titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>3');
									jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('right','5px');
									jQuery('#IconForPop<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
									if(link!='')
									{
										jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
										jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').attr('href',link);
										jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').attr('target',Ont);
									}
									else { jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none'); }
									jQuery(window).resize(function(){
										if(y==true)
										{
											let resize_height = ' ', mg = '5px', max_height = 0, wd='50%';
											if (jQuery(window).width()<=600) {
								              if(link!='') mg ='33px';
												max_height = 0.5;
												resize_height = "560px";
												jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').addClass('titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>3');
												jQuery('.vid').css({'width':'100%','margin':'0px','height':'35%','margin-bottom':mg});
												jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('right','5px');
											} else {
												max_height = 3;
												resize_height = "1000px";
												 if(jQuery('.descr<?php echo $Rich_Web_VSlider_ID; ?>').is(':empty'))  wd='96%';
												jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').removeClass('titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>3');
												jQuery('.vid').css({'width':wd,'margin':'2%','height':'70%'});
												jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('right','0px');
											}

											jQuery('.popVideo1<?php echo $Rich_Web_VSlider_ID; ?>').animate({"opacity":"1","height":"500px","width":resize_height,"max-width":"85%","border-radius":"0%",'max-height':Math.floor(jQuery(window).width()/max_height)+'px','border-width':'<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Border_Width;?>px'},400,function(){ jQuery('.videoo<?php echo $Rich_Web_VSlider_ID; ?>').addClass('videoo<?php echo $Rich_Web_VSlider_ID; ?>_anim'); });
										}
									})
								}
								else
								{
									jQuery('.vid').css('height','70%');
									jQuery('.popVideo1<?php echo $Rich_Web_VSlider_ID; ?>').animate({'opacity':'1','height':'500px','width':'1000px','max-width':'85%','border-radius':'0%','max-height':Math.floor(jQuery(window).width()/3)+'px','border-width':'<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Border_Width;?>px'},400,function(){
										jQuery('.videoo<?php echo $Rich_Web_VSlider_ID; ?>').addClass('videoo<?php echo $Rich_Web_VSlider_ID; ?>_anim');
										if(jQuery('#'+desc).val()=='') { jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none'); }
										else { jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>_anim').addClass('titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>_anim2'); }
										if(link!='')
										{
											jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
											jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').attr('href',link);
											jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').attr('target',Ont);
										}
										else { jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none'); }
										jQuery('#IconForPop<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
										jQuery('.minTit<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none');
										jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('right','0px');
									});
									jQuery(window).resize(function(){
										if(y==true)
										{

											let resize_height = ' ', mg = '5px', max_height = 0,  wd='50%';
											
								    		if(link!='') {mg ='33px'};
											if (jQuery(window).width()<=600) {
												max_height = 0.5;
												resize_height = "560px";
												jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').addClass('titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>3');
												jQuery('.vid').css({'width':'100%','margin':'0px','height':'35%','margin-bottom':mg});
												jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('right','5px');
											} else {
												max_height = 3;
												resize_height = "1000px";
												 if(jQuery('.descr<?php echo $Rich_Web_VSlider_ID; ?>').is(':empty'))  wd='96%';
												jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').removeClass('titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>3');
												jQuery('.vid').css({'width':wd,'margin':'2%','height':'70%'});
												jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('right','0px');
											}

											jQuery('.popVideo1<?php echo $Rich_Web_VSlider_ID; ?>').animate({"opacity":"1","height":"500px","width":resize_height,"max-width":"85%","border-radius":"0%",'max-height':Math.floor(jQuery(window).width()/max_height)+'px','border-width':'<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Border_Width;?>px'},400);
										}
									})
								}
							}
						},150)
					}
					function delPopp<?php echo $Rich_Web_VSlider_ID; ?>(){
						y=false;
						jQuery('#IconForPop<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none');
						jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none');
						jQuery('.minTit<?php echo $Rich_Web_VSlider_ID; ?>').css('display','none');
						jQuery('.videoo<?php echo $Rich_Web_VSlider_ID; ?>').removeClass('videoo<?php echo $Rich_Web_VSlider_ID; ?>_anim');
						jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>_anim').removeClass('titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>_anim2');
						jQuery('.videoo<?php echo $Rich_Web_VSlider_ID; ?>').attr('src','');
						setTimeout(function(){
							jQuery('.popVideo1<?php echo $Rich_Web_VSlider_ID; ?>').animate({'opacity':'0','height':'0px','width':'0px','max-width':'85%','border-radius':'50%','max-height':Math.floor(jQuery(window).width()/3)+'px','border-width':'0px',},100);
						},150)
						setTimeout(function(){
							jQuery(".popDiv<?php echo $Rich_Web_VSlider_ID; ?>").removeClass("popDiv<?php echo $Rich_Web_VSlider_ID; ?>_center");
							jQuery('.popF1<?php echo $Rich_Web_VSlider_ID; ?>').removeClass('popF1<?php echo $Rich_Web_VSlider_ID; ?>_1');
							jQuery('.titleDescLink<?php echo $Rich_Web_VSlider_ID; ?>').css('display','block');
							jQuery('.vid').css({'width':'50%','margin':'2%'})
						},250)
					}

					function resp2<?php echo $Rich_Web_VSlider_ID; ?>()
					{
						if(jQuery(window).width()<=1100)
						{
							// jQuery('.tit<?php echo $Rich_Web_VSlider_ID; ?>').css('font-size',Math.floor(poppTitleFS*jQuery(window).width()/1100));
							jQuery('.minTit<?php echo $Rich_Web_VSlider_ID; ?>').css('font-size',Math.floor(poppTitleFS*jQuery(window).width()/1100));
							jQuery('.tit<?php echo $Rich_Web_VSlider_ID; ?>').css('margin-bottom',Math.floor(20*jQuery(window).width()/1100));
							// jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('font-size',Math.floor(poppLinkFS*jQuery(window).width()/1100));
							jQuery('.popL<?php echo $Rich_Web_VSlider_ID; ?>').css('line-height',1);
						}
					}
					
					jQuery(window).on('load resize',function(){ resp2<?php echo $Rich_Web_VSlider_ID; ?>(); })
					resp2<?php echo $Rich_Web_VSlider_ID; ?>();
						
					jQuery(".popVideo1<?php echo $Rich_Web_VSlider_ID; ?>_rel").click(function(event){
					    event.stopPropagation();
					});
				
				</script>