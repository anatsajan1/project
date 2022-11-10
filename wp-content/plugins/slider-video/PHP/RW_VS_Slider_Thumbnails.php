<div id="RW_Load_Thumb_Navigation<?php echo $Rich_Web_VSlider_ID; ?>" style="<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_Loading_Show == "on") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
					<div class="center_content<?php echo $Rich_Web_VSlider_ID; ?>">
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T == "Type 1") { ?>
								<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?php echo $Rich_Web_VSlider_ID; ?>">
									<div class="loader_Navigation1 loader_Navigation1<?php echo $Rich_Web_VSlider_ID; ?>" id="loader_Navigation1"></div>
									<div class="loader_Navigation2 loader_Navigation2<?php echo $Rich_Web_VSlider_ID; ?>" id="loader_Navigation2"></div>
									<div class="loader_Navigation3 loader_Navigation3<?php echo $Rich_Web_VSlider_ID; ?>" id="loader_Navigation3"></div>
									<div class="loader_Navigation4" id="loader_Navigation4"></div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T == "Type 2") { ?>
								<div class="overlay-loader<?php echo $Rich_Web_VSlider_ID; ?>">
									<div class="loader<?php echo $Rich_Web_VSlider_ID; ?>">
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
									</div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T == "Type 3") { ?>
								<div class="windows8<?php echo $Rich_Web_VSlider_ID; ?>">
									<div class="wBall" id="wBall_1">
										<div class="wInnerBall"></div>
									</div>
									<div class="wBall" id="wBall_2">
										<div class="wInnerBall"></div>
									</div>
									<div class="wBall" id="wBall_3">
										<div class="wInnerBall"></div>
									</div>
									<div class="wBall" id="wBall_4">
										<div class="wInnerBall"></div>
									</div>
									<div class="wBall" id="wBall_5">
										<div class="wInnerBall"></div>
									</div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T == "Type 4") { ?>
								<div class="cssload-thecube<?php echo $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-cube cssload-c1"></div>
									<div class="cssload-cube cssload-c2"></div>
									<div class="cssload-cube cssload-c4"></div>
									<div class="cssload-cube cssload-c3"></div>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T == "Type 1") { ?>
								<div class="cssload-loader<?php echo $Rich_Web_VSlider_ID; ?>"><?php echo $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT;?></div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T == "Type 2") { ?>
								<div id="inTurnFadingTextG<?php echo $Rich_Web_VSlider_ID; ?>">
									<?php foreach($text_array as $key=>$v){ ?>
										<div id="inTurnFadingTextG<?php echo $Rich_Web_VSlider_ID; ?>_<?php Print $key+1; ?>" class="inTurnFadingTextG<?php echo $Rich_Web_VSlider_ID; ?>"><?php Print $v; ?></div>
									<?php } ?>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T == "Type 3") { ?>
								<div class="cssload-preloader<?php echo $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-preloader<?php echo $Rich_Web_VSlider_ID; ?>-box">
										<?php foreach($text_array as $key=>$v){ ?>
											<div><?php Print $v; ?></div>
										<?php } ?>
									</div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T == "Type 4") { ?>
								<div class="RW_Loader_Text_Navigation<?php echo $Rich_Web_VSlider_ID; ?>">
									<?php echo $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT;?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<section id="gallery-con<?php echo $Rich_Web_VSlider_ID; ?>" style="display:none;">
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos=='top'){ ?>
						<section id="thumbnails<?php echo $Rich_Web_VSlider_ID; ?>" style="padding:0px;">
							<div id="left-arrow<?php echo $Rich_Web_VSlider_ID; ?>" class="ui-button"><div class="icon icon-arrow-left"></div></div>
							<div id="thumbcon<?php echo $Rich_Web_VSlider_ID; ?>"> </div>
							<div id="right-arrow<?php echo $Rich_Web_VSlider_ID; ?>" class="ui-button"><div class="icon icon-arrow-right"></div></div>
							<div id="playtoggle<?php echo $Rich_Web_VSlider_ID; ?>" class="ui-button">
								<div class="icon <?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_AP=='on'){ echo 'icon-pause'; }else{ echo 'icon-play'; }?>"></div>
							</div>
						</section>
					<?php }?>
				
					<section id="gallery-main<?php echo $Rich_Web_VSlider_ID; ?>" class="Rich_Web_Gallery_Main">
						<img data-rwimg="<?php echo $Rich_Web_VSlider_Videos[0]->Rich_Web_VSldier_Add_Img;?>" src="<?php echo $Rich_Web_VSlider_Videos[0]->Rich_Web_VSldier_Add_Img;?>" onclick="Rich_Web_VSlider_TS_Open_Video<?php echo $Rich_Web_VSlider_ID; ?>('<?php echo $Rich_Web_VSlider_Videos[0]->Rich_Web_VSldier_Add_Src;?>')"/>
					</section>
					<section id="gallery-main<?php echo $Rich_Web_VSlider_ID; ?>_Anim" class="Rich_Web_Gallery_Main">
						<div class="Rich_Web_VSlider_TS_PlayIcon<?php echo $Rich_Web_VSlider_ID; ?>" onclick="Rich_Web_VSlider_TS_Play_Video<?php echo $Rich_Web_VSlider_ID; ?>()">
							<span><i class="rich_web rich_web-play"></i></span>
						</div>
					</section>
					<section id="gallery-hidden<?php echo $Rich_Web_VSlider_ID; ?>">
						<?php for($i=0;$i<count($Rich_Web_VSlider_Videos);$i++) {
							if(strpos($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img, 'youtube') > 0)
							{
								$rest_vd_url = substr($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img, 0, -13);
								$link_vd_sl = $rest_vd_url.'maxresdefault.jpg';
								if (!@fopen("$link_vd_sl",'r')) { $link_vd_sl = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img; }
							}
							else
							{
								$link_vd_sl = $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img;
							}
						?> 
							<img class="gallery_thumb_img<?php echo $Rich_Web_VSlider_ID; ?> gallery_rw_<?php echo $Rich_Web_VSlider_ID; ?>-<?php echo $i; ?>" src="<?php echo $link_vd_sl;?>"
								 data-rwimg="<?=$link_vd_sl;?>"
								 onclick="Rich_Web_VSlider_TS_Open_Video<?php echo $Rich_Web_VSlider_ID; ?>('<?php echo $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>')"/>
						<?php } ?>
					</section>
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos=='bottom'){ ?>
						<section id="thumbnails<?php echo $Rich_Web_VSlider_ID; ?>" style="padding:0px;">
							<div id="left-arrow<?php echo $Rich_Web_VSlider_ID; ?>" class="ui-button" onclick="Rich_Web_VSlider_TS_Close_Video<?php echo $Rich_Web_VSlider_ID; ?>()"><div class="icon icon-arrow-left"></div></div>
							<div id="thumbcon<?php echo $Rich_Web_VSlider_ID; ?>"> </div>
							<div id="right-arrow<?php echo $Rich_Web_VSlider_ID; ?>" class="ui-button" onclick="Rich_Web_VSlider_TS_Close_Video<?php echo $Rich_Web_VSlider_ID; ?>()"><div class="icon icon-arrow-right"></div></div>
							<div id="playtoggle<?php echo $Rich_Web_VSlider_ID; ?>" class="ui-button">
								<div class="icon <?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_AP=='on'){ echo 'icon-pause'; }else{ echo 'icon-play'; }?>"></div>
							</div>
						</section>
					<?php }?>
					<div class="Rich_Web_TS_Play_Video_Div<?php echo $Rich_Web_VSlider_ID; ?>">
						<iframe class="Rich_Web_VSlider_TS_Src_Iframe<?php echo $Rich_Web_VSlider_ID; ?>" src="" style='width:100%;height:100%;' frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</section>
				<input type='text' style='display:none;' class='marginLeft' value='<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIPB;?>'>
				<input type='text' style='display:none;' class='SlWidth3<?php echo $Rich_Web_VSlider_ID; ?>' value='<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_W;?>'>
				<input type='text' style='display:none;' class='SlHeight3<?php echo $Rich_Web_VSlider_ID; ?>' value='<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_H;?>'>
				<input type='text' style='display:none;' class='carDivWidth<?php echo $Rich_Web_VSlider_ID; ?>' value='<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_W;?>'>
				<input type='text' style='display:none;' class='carDivImgHeight<?php echo $Rich_Web_VSlider_ID; ?>' value='<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIH+24;?>'>
				<input type='text' style='display:none;' class='BW<?php echo $Rich_Web_VSlider_ID; ?>' value='<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BW;?>'>
				<input type='text' style='display:none;' class='carTopLeft<?php echo $Rich_Web_VSlider_ID; ?>' value='<?php echo $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos;?>'>