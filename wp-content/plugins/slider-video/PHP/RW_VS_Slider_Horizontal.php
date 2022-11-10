<div id="RW_Load_Horizontal_Navigation<?= $Rich_Web_VSlider_ID; ?>" style="<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_Loading_Show == "on") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
					<div class="center_content<?= $Rich_Web_VSlider_ID; ?>">
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_L_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_L_T == "Type 1") { ?>
								<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?= $Rich_Web_VSlider_ID; ?>">
									<div class="loader_Navigation1 loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation1"></div>
									<div class="loader_Navigation2 loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation2"></div>
									<div class="loader_Navigation3 loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation3"></div>
									<div class="loader_Navigation4" id="loader_Navigation4"></div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_L_T == "Type 2") { ?>
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
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_L_T == "Type 3") { ?>
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
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_L_T == "Type 4") { ?>
								<div class="cssload-thecube<?= $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-cube cssload-c1"></div>
									<div class="cssload-cube cssload-c2"></div>
									<div class="cssload-cube cssload-c4"></div>
									<div class="cssload-cube cssload-c3"></div>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_LT_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_LT_T == "Type 1") { ?>
								<div class="cssload-loader<?= $Rich_Web_VSlider_ID; ?>"><?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_LT;?></div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_LT_T == "Type 2") { ?>
								<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>">
									<?php foreach($text_array as $key=>$v){ ?>
										<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>_<?php Print $key+1; ?>" class="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>"><?php Print $v; ?></div>
									<?php } ?>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_LT_T == "Type 3") { ?>
								<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>-box">
										<?php foreach($text_array as $key=>$v){ ?>
											<div><?php Print $v; ?></div>
										<?php } ?>
									</div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_LT_T == "Type 4") { ?>
								<div class="RW_Loader_Text_Navigation<?= $Rich_Web_VSlider_ID; ?>">
									<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_LT;?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div id="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>" style="display:none;">
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_NP_Show=='on'){ ?>
						<nav class="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Nav">
							<div id="navbtns<?= $Rich_Web_VSlider_ID; ?>" class="Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_clearfix">
								<a href="#" class="previous<?= $Rich_Web_VSlider_ID; ?>"><?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_NP_PText;?></a>
								<a href="#" class="next<?= $Rich_Web_VSlider_ID; ?>"><?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_NP_NText;?></a>
							</div>
						</nav>
					<?php }?>
					<div class="crsl-items<?= $Rich_Web_VSlider_ID; ?>" data-navigation="navbtns<?= $Rich_Web_VSlider_ID; ?>">
						<div class="crsl-wrap<?= $Rich_Web_VSlider_ID; ?>">
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
								<div class="crsl-item<?= $Rich_Web_VSlider_ID; ?>" style="height:auto !important;">
									<div class="thumbnail" onclick='Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Play("<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>")'>
										<img id="rw_img_sld<?= $Rich_Web_VSlider_ID; ?>-<?=$i;?>" class="rw_img_sld<?= $Rich_Web_VSlider_ID; ?>" src="<?= $link_vd_sl;?>" alt="<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?>" data-rwimg="<?= $link_vd_sl;?>">
										<span class="postdate" onclick='Rich_Web_VS_HPS<?= $Rich_Web_VSlider_ID; ?><?= $Rich_Web_VSlider_ID; ?>_Play("<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>")'><?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_PText;?></span>
									</div>
									<h3><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></h3>
									<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_DShow=='on'){ ?>
										<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc);?>
									<?php }?>
									<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Link != ''){ ?>
										<p class="readmore"><a href="<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Link;?>" target="<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_ONT=='checked'){echo '_blank';}?>"><?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_HPS_LText;?></a></p>
									<?php }?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
