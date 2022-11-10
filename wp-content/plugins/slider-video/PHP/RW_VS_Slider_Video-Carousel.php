<div id="RW_Load_VCCP_Navigation<?= $Rich_Web_VSlider_ID; ?>" style="<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_Loading_Show == "on") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
					<div class="center_content<?= $Rich_Web_VSlider_ID; ?>">
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_L_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_L_T == "Type 1") { ?>
								<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?= $Rich_Web_VSlider_ID; ?>">
									<div class="loader_Navigation1 loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation1"></div>
									<div class="loader_Navigation2 loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation2"></div>
									<div class="loader_Navigation3 loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation3"></div>
									<div class="loader_Navigation4" id="loader_Navigation4"></div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_L_T == "Type 2") { ?>
								<div class="overlay-loader<?= $Rich_Web_VSlider_ID; ?>">
									<div class="loader<?= $Rich_Web_VSlider_ID; ?>">
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
									</div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_L_T == "Type 3") { ?>
								<div class="windows8<?= $Rich_Web_VSlider_ID; ?>">
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
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_L_T == "Type 4") { ?>
								<div class="cssload-thecube<?= $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-cube cssload-c1"></div>
									<div class="cssload-cube cssload-c2"></div>
									<div class="cssload-cube cssload-c4"></div>
									<div class="cssload-cube cssload-c3"></div>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_LT_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_LT_T == "Type 1") { ?>
								<div class="cssload-loader<?= $Rich_Web_VSlider_ID; ?>"><?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_LT;?></div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_LT_T == "Type 2") { ?>
								<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>">
									<?php foreach($text_array as $key=>$v){ ?>
										<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>_<?php Print $key+1; ?>" class="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>"><?php Print $v; ?></div>
									<?php } ?>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_LT_T == "Type 3") { ?>
								<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>-box">
										<?php foreach($text_array as $key=>$v){ ?>
											<div><?php Print $v; ?></div>
										<?php } ?>
									</div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_LT_T == "Type 4") { ?>
								<div class="RW_Loader_Text_Navigation<?= $Rich_Web_VSlider_ID; ?>">
									<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_LT;?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="wrapper<?= $Rich_Web_VSlider_ID; ?>" style="display:none;">
					<div class="carousel<?= $Rich_Web_VSlider_ID; ?>" data-mixed>
						<a class="prev<?= $Rich_Web_VSlider_ID; ?>" data-prev></a>
						<ul class='forPoppUll<?= $Rich_Web_VSlider_ID; ?>' style='list-style:none;margin:5px;padding:0px;'>
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
							<li class='forPopp<?= $Rich_Web_VSlider_ID; ?>' onclick='popp<?= $Rich_Web_VSlider_ID; ?>("<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>?autoplay=1&rel=0&amp","<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?>","Rich_Web_VS_CP_Desc_<?= $Rich_Web_VSlider_ID;?>_<?= $i;?>","<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Link;?>","<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_ONT;?>")'>
								<div class="wrap<?= $Rich_Web_VSlider_ID; ?>">
									<figure class='figurForImg<?= $Rich_Web_VSlider_ID; ?>'>
										<i class="rich_web rich_web-play"></i>
										<img id="vccp_img<?= $Rich_Web_VSlider_ID; ?>-<?=$i;?>" class='vccp_img<?= $Rich_Web_VSlider_ID; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Car_Imgs_Hover_Type;?>' data-rwimg="<?= $link_vd_sl;?>" src="<?= $link_vd_sl;?>"/>
										<input type="text" style="display: none;" id="Rich_Web_VS_CP_Desc_<?= $Rich_Web_VSlider_ID;?>_<?= $i;?>" value="<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc;?>">
									</figure>
								</div>
							</li>
							<?php } ?>
						</ul>
						<a class="next<?= $Rich_Web_VSlider_ID; ?>" data-next ></a>
					</div>
				</div>
				<div class='popF1<?= $Rich_Web_VSlider_ID; ?>' onclick='delPopp<?= $Rich_Web_VSlider_ID; ?>()' style='background:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Overlay_Bg_Color;?>;'></div>
				<div class='popDiv<?= $Rich_Web_VSlider_ID; ?>' onclick='delPopp<?= $Rich_Web_VSlider_ID; ?>()' style="display:none;">
					<div class='popVideo1<?= $Rich_Web_VSlider_ID; ?>' style='opacity:0;background:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Bg_Color;?>;border-style:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Border_Style;?>;border-color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Border_Color;?>;'>
						<i class='rich_web <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Icons_Type;?>' id='IconForPop<?= $Rich_Web_VSlider_ID; ?>' style='position:absolute;top:<?= -$Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Icons_Size/3*2;?>px;font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Icons_Size;?>px;right:<?= -$Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Icons_Size/3*2;?>px;color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Popup_Icons_Color;?>;cursor:pointer;z-index:2;display:none;' onclick='delPopp<?= $Rich_Web_VSlider_ID; ?>()'></i>
						<div class='popVideo1<?= $Rich_Web_VSlider_ID; ?>_rel'>
							<div class='vid'>
								<iframe class='videoo<?= $Rich_Web_VSlider_ID; ?>' src="" webkitAllowFullScreen mozallowfullscreen allowFullScreen allow='autoplay'></iframe>
								<a href='#' class='popL<?= $Rich_Web_VSlider_ID; ?>'>
									<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Link_Text;?>
								</a>
								<span class='minTit<?= $Rich_Web_VSlider_ID; ?>' style='font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Title_Font_Size;?>px;font-family:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Title_Font_Family;?>;color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Title_Color;?>;'>
								</span>
							</div>
							<div class='titleDescLink<?= $Rich_Web_VSlider_ID; ?>'>
								<div class='titleDescLink<?= $Rich_Web_VSlider_ID; ?>_anim' style='background:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Desc_Bg_Color;?>;'>
									<h2 class='tit<?= $Rich_Web_VSlider_ID; ?>' style='padding:0px;margin:0px;margin-bottom:20px;text-align:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Title_Text_Align;?>;font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Title_Font_Size;?>px;font-family:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Title_Font_Family;?>;color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Title_Color;?>;'>
									</h2>
									<p class='descr<?= $Rich_Web_VSlider_ID; ?>'></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<input type='text' style='display:none;' class='imgCols<?= $Rich_Web_VSlider_ID; ?>'     value='<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Car_Count_Imgs;?>'/>
				<input type='text' style='display:none;' class='imgCount<?= $Rich_Web_VSlider_ID; ?>'    value='<?= count($Rich_Web_VSlider_Videos);?>'/>
				<input type='text' style='display:none;' class='poppTitleFS<?= $Rich_Web_VSlider_ID; ?>' value='<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Title_Font_Size;?>'/>
				<input type='text' style='display:none;' class='poppLinkFS<?= $Rich_Web_VSlider_ID; ?>'  value='<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VC_Link_Font_Size;?>'/>