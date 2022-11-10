<div id="RW_Load_RS_Navigation<?= $Rich_Web_VSlider_ID; ?>" style="<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_Loading_Show == "on") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
					<div class="center_content<?= $Rich_Web_VSlider_ID; ?>">
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_L_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_L_T == "Type 1") { ?>
								<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?= $Rich_Web_VSlider_ID; ?>">
									<div class="loader_Navigation1 loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation1"></div>
									<div class="loader_Navigation2 loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation2"></div>
									<div class="loader_Navigation3 loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation3"></div>
									<div class="loader_Navigation4" id="loader_Navigation4"></div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_L_T == "Type 2") { ?>
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
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_L_T == "Type 3") { ?>
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
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_L_T == "Type 4") { ?>
								<div class="cssload-thecube<?= $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-cube cssload-c1"></div>
									<div class="cssload-cube cssload-c2"></div>
									<div class="cssload-cube cssload-c4"></div>
									<div class="cssload-cube cssload-c3"></div>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_LT_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_LT_T == "Type 1") { ?>
								<div class="cssload-loader<?= $Rich_Web_VSlider_ID; ?>"><?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_LT;?></div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_LT_T == "Type 2") { ?>
								<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>">
									<?php foreach($text_array as $key=>$v){ ?>
										<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>_<?php Print $key+1; ?>" class="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>"><?php Print $v; ?></div>
									<?php } ?>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_LT_T == "Type 3") { ?>
								<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>-box">
										<?php foreach($text_array as $key=>$v){ ?>
											<div><?php Print $v; ?></div>
										<?php } ?>
									</div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_LT_T == "Type 4") { ?>
								<div class="RW_Loader_Text_Navigation<?= $Rich_Web_VSlider_ID; ?>">
									<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_LT;?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<div class="rvs-container rvs-container<?= $Rich_Web_VSlider_ID; ?>" style="display:none;">
					<div class="rvs-item-container">
						<div class="rvs-item-stage rvs-item-stage<?= $Rich_Web_VSlider_ID; ?>">
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
							<div class="rvs-item rvs-item<?= $Rich_Web_VSlider_ID; ?>" style="background-image: url('<?= $link_vd_sl;?>')">
								<img src="<?= $link_vd_sl;?>" class="rw_img_hidden<?= $Rich_Web_VSlider_ID; ?>" style="display:none;">
								<div class="rvs-item-text rvs-item-text<?= $Rich_Web_VSlider_ID; ?>">
									<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?>
									<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc);?>
								</div>
								<a href="<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Vid;?>" class="rvs-play-video rvs-play-video<?= $Rich_Web_VSlider_ID; ?>"></a>
							</div>
							<?php } ?>
						</div>
					</div>
					<div class="rvs-nav-container rvs-nav-container<?= $Rich_Web_VSlider_ID; ?>">
						<a class="rvs-nav-prev rvs-nav-prev<?= $Rich_Web_VSlider_ID; ?>"></a>
						<div class="rvs-nav-stage">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Videos);$i++){ ?>
							<a class="rvs-nav-item">
								<span class="rvs-nav-item-thumb rvs-nav-item-thumb<?= $Rich_Web_VSlider_ID; ?>" style="background-image: url('<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Img;?>')"></span>
								<h4 class="rvs-nav-item-title rvs-nav-item-title<?= $Rich_Web_VSlider_ID; ?>">
									<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?>
								</h4>
							</a>
							<?php } ?>
						</div>
						<a class="rvs-nav-next rvs-nav-next<?= $Rich_Web_VSlider_ID; ?>"></a>
					</div>
				</div>
				<input type='text' style="display:none" class="Rich_Web_RVVS_DelIc_T" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_RVVS_DelIc_T; ?>" />
				<input type='text' style="display:none" class="Rich_Web_VSlider_ID" value="<?= $Rich_Web_VSlider_ID; ?>" />
				