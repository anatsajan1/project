<div id="RW_Load_Timeline_Navigation<?= $Rich_Web_VSlider_ID; ?>" style="display:<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_Loading_Show){ echo "block";}else{ echo "none"; } ?>">
					<div class="center_content<?= $Rich_Web_VSlider_ID; ?>">
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_L_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_L_T == "Type 1") { ?>
								<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?= $Rich_Web_VSlider_ID; ?>">
									<div class="loader_Navigation1 loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation1"></div>
									<div class="loader_Navigation2 loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation2"></div>
									<div class="loader_Navigation3 loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation3"></div>
									<div class="loader_Navigation4" id="loader_Navigation4"></div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_L_T == "Type 2") { ?>
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
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_L_T == "Type 3") { ?>
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
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_L_T == "Type 4") { ?>
								<div class="cssload-thecube<?= $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-cube cssload-c1"></div>
									<div class="cssload-cube cssload-c2"></div>
									<div class="cssload-cube cssload-c4"></div>
									<div class="cssload-cube cssload-c3"></div>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_LT_Show == "on") { ?>
							<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_LT_T == "Type 1") { ?>
								<div class="cssload-loader<?= $Rich_Web_VSlider_ID; ?>"><?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_LT;?></div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_LT_T == "Type 2") { ?>
								<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>">
									<?php foreach($text_array as $key=>$v){ ?>
										<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>_<?php Print $key+1; ?>" class="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>"><?php Print $v; ?></div>
									<?php } ?>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_LT_T == "Type 3") { ?>
								<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>">
									<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>-box">
										<?php foreach($text_array as $key=>$v){ ?>
											<div><?php Print $v; ?></div>
										<?php } ?>
									</div>
								</div>
							<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_LT_T == "Type 4") { ?>
								<div class="RW_Loader_Text_Navigation<?= $Rich_Web_VSlider_ID; ?>">
									<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_LT;?>
								</div>
							<?php } ?>
						<?php } ?>
					</div>
				</div>
				<?php if ($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Type=='horizontal') { ?>
					<style type="text/css">
						.sociales<?= $Rich_Web_VSlider_ID; ?> { text-align: center; margin-bottom: 20px; }
						#timeline_r<?= $Rich_Web_VSlider_ID; ?>w { overflow: hidden; margin: 20px auto !important; position: relative; }
						#date<?= $Rich_Web_VSlider_ID; ?>s { height: 55px; overflow: hidden; border:none !important; }
						#date<?= $Rich_Web_VSlider_ID; ?>s li { list-style: none; list-style-type: none !important; float: left; height: 50px; font-size: 24px; text-align: center; padding: 0px !important; }
						#date<?= $Rich_Web_VSlider_ID; ?>s a
						{
							padding-bottom: 10px;
							box-shadow:none !important;
							-moz-box-shadow:none !important;
							-webkit-box-shadow:none !important;
							line-height: 1 !important;
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s { overflow: hidden; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s li { list-style: none; list-style-type: none !important; float: left; padding: 0px !important; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s li:before { content:"" !important; }
						#date<?= $Rich_Web_VSlider_ID; ?>s li:before { content:"" !important; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s li.select<?= $Rich_Web_VSlider_ID; ?>ed .RW_IMGD<?= $Rich_Web_VSlider_ID; ?>
						{
							perspective:800px !important;
							-webkit-transform: scale(1.1,1.1);
							-moz-transform: scale(1.1,1.1);
							-o-transform: scale(1.1,1.1);
							-ms-transform: scale(1.1,1.1);
							transform: scale(1.1,1.1);
							transform-origin : left top;
							-webkit-transform-origin : left top;
							-ms-transform-origin : left top;
							-moz-transform-origin : left top;
							-o-transform-origin : left top;
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s li .RW_IMGD<?= $Rich_Web_VSlider_ID; ?>
						{
							backface-visibility: hidden;
							float: left;
							margin: 10px 30px 10px 30px;
							cursor:pointer;
							display:inline-block !important;
							perspective:800px !important;
							-webkit-perspective:800px !important;
							-ms-perspective:800px !important;
							-moz-perspective:800px !important;
							-o-perspective:800px !important;
							-webkit-transform: scale(1.1,1.1);
							-moz-transform: scale(1.1,1.1);
							-o-transform: scale(1.1,1.1);
							-ms-transform: scale(1.1,1.1);
							transform: scale(1.1,1.1);
							transform-origin : left top;
							-webkit-transform-origin : left top;
							-ms-transform-origin : left top;
							-moz-transform-origin : left top;
							-o-transform-origin : left top;
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s li .RW_IMGD<?= $Rich_Web_VSlider_ID; ?> .RW_tim_vid_vid { width:100% !important; height:100% !important; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s li .RW_IMGD<?= $Rich_Web_VSlider_ID; ?> img
						{
							-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)";
							-moz-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)";
							-webkit-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)";
							filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF);
							zoom: 1;
							/*transition:all 0.4s linear !important;
							-webkit-transition:all 0.4s linear !important;
							-ms-transition:all 0.4s linear !important;
							-moz-transition:all 0.4s linear !important;
							-o-transition:all 0.4s linear !important;*/
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s li p { margin:0 15px 0 0 !important; line-height: 1 !important; }
						#nex<?= $Rich_Web_VSlider_ID; ?>t, #pre<?= $Rich_Web_VSlider_ID; ?>v
						{
							position: absolute;
							top: 0;
							top: 170px;
							width: 22px;
							height: 38px;
							background-position: 0 0;
							background-repeat: no-repeat;
						}
						#nex<?= $Rich_Web_VSlider_ID; ?>t:hover, #pre<?= $Rich_Web_VSlider_ID; ?>v:hover { background-position: 0 -76px; }
						#nex<?= $Rich_Web_VSlider_ID; ?>t { right: 0; }
						#pre<?= $Rich_Web_VSlider_ID; ?>v { left: 0; }
						.Timeline-right
						{
							background-image: url('<?= plugin_dir_url(__DIR__)."Images/next_img.png";?>');
							text-indent: -9999px;
							font-size: 70px;
							width: 38px;
							height: 22px;
							transition:all 0.3s linear !important;
							-webkit-transition:all 0.3s linear !important;
							-ms-transition:all 0.3s linear !important;
							-moz-transition:all 0.3s linear !important;
							-o-transition:all 0.3s linear !important;
							cursor:pointer !important;
						}
						.Timeline-left
						{
							background-image: url('<?= plugin_dir_url(__DIR__)."Images/prev_img.png";?>');
							text-indent: -9999px;
							font-size: 70px;
							width: 38px;
							height: 22px;
							transition:all 0.3s linear !important;
							-webkit-transition:all 0.3s linear !important;
							-ms-transition:all 0.3s linear !important;
							-moz-transition:all 0.3s linear !important;
							-o-transition:all 0.3s linear !important;
							cursor:pointer !important;
						}
						#nex<?= $Rich_Web_VSlider_ID; ?>t.disabled, #pre<?= $Rich_Web_VSlider_ID; ?>v.disabled { opacity: 0.2; }
						#timeline_r<?= $Rich_Web_VSlider_ID; ?>w
						{
							width:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_W; ?>px !important;
							max-width:100%;
							background-color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BgC; ?> !important;
						}
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShT == "Type 1") { ?>
							#timeline_r<?= $Rich_Web_VSlider_ID; ?>w
							{
								box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
								-moz-box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
								-webkit-box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
							}
						<?php } else { ?>
							#timeline_r<?= $Rich_Web_VSlider_ID; ?>w
							{
								box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
								-moz-box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
								-webkit-box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
							}
						<?php } ?>
						#issue<?= $Rich_Web_VSlider_ID; ?>s li.select<?= $Rich_Web_VSlider_ID; ?>ed .RW_IMGD<?= $Rich_Web_VSlider_ID; ?> .RW_tim_vid_vid
						{
							position:absolute !important;
							width:100% !important;
							height:100% !important;
							max-width:150% !important;
							z-index:1 !important;
						}
						
						#date<?= $Rich_Web_VSlider_ID; ?>s,#issue<?= $Rich_Web_VSlider_ID; ?>s { padding:0px !important; margin-bottom:0px !important; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s { height:calc(100% - <?= 55 + $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_S + 10; ?>px) !important; }
						.RW_IMGD<?= $Rich_Web_VSlider_ID; ?> { position:relative; }
						.RW_IMGD_Anim
						{
							position: relative;
							float: none !important;
							margin: 0 !important;
							left: 50% !important;
							transform: translateX(-50%) !important;
							-moz-transform: translateX(-50%) !important;
							-webkit-transform: translateX(-50%) !important;
						}
						#rw_tim_bord<?= $Rich_Web_VSlider_ID; ?>
						{
							position:absolute;
							width:100%;
							top:42px;
							height:0px !important;
							border:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BW; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BS; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BC; ?> !important;
						}
						.rw_circle_tim<?= $Rich_Web_VSlider_ID; ?>
						{
							position:absolute;
							border:5px solid <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NIC_C; ?> !important;
							width:0px;
							height:0px;
							top:<?= 42-3/$Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BW; ?>px;
							left:50%;
							border-radius:50%;
							transform:translateX(-50%);
							-webkit-transform:translateX(-50%);
							-ms-transform:translateX(-50%);
							-moz-transform:translateX(-50%);
							-o-transform:translateX(-50%);
						}
						#date<?= $Rich_Web_VSlider_ID; ?>s { position: relative; overflow:hidden !important; border:none !important; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s li
						{
							position:relative;
							height:100%;
							padding:0px !important;
							margin:0px !important;
							box-sizing: border-box !important;
							-moz-box-sizing: border-box !important;
							-webkit-box-sizing: border-box !important;
							padding: 0px !important;
						}
						.rw_content_div<?= $Rich_Web_VSlider_ID; ?>
						{
							height:100%;
							padding-left:20px;
							box-sizing:border-box;
							-moz-box-sizing:border-box;
							-webkit-box-sizing:border-box;
							overflow-x:hidden;
						}
						.rw_content_div_Anim { height:auto !important; max-height:250px !important; }
						#nex<?= $Rich_Web_VSlider_ID; ?>t, #pre<?= $Rich_Web_VSlider_ID; ?>v { top:50%; }
						.rw_content_div<?= $Rich_Web_VSlider_ID; ?>::-webkit-scrollbar { width: 5px; }
						.rw_content_div<?= $Rich_Web_VSlider_ID; ?>::-webkit-scrollbar-track
						{
							-webkit-box-shadow: inset 0 0 6px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BgC; ?> !important;
						}
						.rw_content_div<?= $Rich_Web_VSlider_ID; ?>::-webkit-scrollbar-thumb
						{
							background-color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_C; ?> !important;
							outline: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_C; ?> !important;
						}
						.rw_tim_tit_width<?= $Rich_Web_VSlider_ID; ?> { min-width:150px !important; width:250px; text-align:center; position: relative; }
						.RW_IMGD<?= $Rich_Web_VSlider_ID; ?> .rw_resp_div<?= $Rich_Web_VSlider_ID; ?>
						{
							box-sizing:border-box !important;
							-moz-box-sizing:border-box !important;
							-webkit-box-sizing:border-box !important;
							border:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BW; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BS; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BC; ?> !important;
							background:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BC; ?> !important;
						}
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShT == "Type 1") { ?>
							.RW_IMGD<?= $Rich_Web_VSlider_ID; ?> .rw_resp_div<?= $Rich_Web_VSlider_ID; ?>
							{
								box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
								-moz-box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
								-webkit-box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
							}
						<?php } else { ?>
							.RW_IMGD<?= $Rich_Web_VSlider_ID; ?> .rw_resp_div<?= $Rich_Web_VSlider_ID; ?>
							{
								box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
								-moz-box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
								-webkit-box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
							}
						<?php } ?>
						.RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>
						{
							position:absolute;
							top:50%;
							left:50%;
							z-index:2 !important;
							border-radius:4px;

							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_C; ?> !important;
							background-color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_BgC; ?> !important;
							transform:translateY(-50%) translateX(-50%);
							-webkit-transform:translateY(-50%) translateX(-50%);
							-ms-transform:translateY(-50%) translateX(-50%);
							-moz-transform:translateY(-50%) translateX(-50%);
							-o-transform:translateY(-50%) translateX(-50%);
							transition:all 0.3s linear !important;
							-webkit-transition:all 0.3s linear !important;
							-ms-transition:all 0.3s linear !important;
							-moz-transition:all 0.3s linear !important;
							-o-transition:all 0.3s linear !important;
						}
						.RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>:hover
						{
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_HC; ?> !important;
							background-color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_HBgC; ?> !important;
						}
						.RW_Img_VID_Div<?= $Rich_Web_VSlider_ID; ?>
						{
							position:absolute;
							width:0px !important;
							height:0px !important;
							border-radius:50% !important;
							perspective:800px !important;
							-webkit-perspective:800px !important;
							-ms-perspective:800px !important;
							-moz-perspective:800px !important;
							-o-perspective:800px !important;
							overflow:hidden;
							opacity:0;
							z-index:2;
							background:#000000 !important;
						}
						.RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>,.RW_tim_vid_vid_Big_Img<?= $Rich_Web_VSlider_ID; ?>
						{
							width:100% !important;
							height:100% !important;
							position:absolute;
						}
						.RW_Img_VID_Div_Anim_1
						{
							top:50% !important;
							left:50% !important;
							width:10% !important;
							height:10% !important;
							opacity:1;
							transform:translateY(-50%) translateX(-50%) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) !important;
							-ms-transform:translateY(-50%) translateX(-50%) !important;
							-moz-transform:translateY(-50%) translateX(-50%) !important;
							-o-transform:translateY(-50%) translateX(-50%) !important;
							transition: all 500ms cubic-bezier(0.64, 0.57, 0.67, 1.53);
							-webkit-transition: all 500ms cubic-bezier(0.64, 0.57, 0.67, 1.53);
							-moz-transition: all 500ms cubic-bezier(0.64, 0.57, 0.67, 1.53);
							-o-transition: all 500ms cubic-bezier(0.64, 0.57, 0.67, 1.53);
							-ms-transition: all 500ms cubic-bezier(0.64, 0.57, 0.67, 1.53);
						}
						.RW_Img_VID_Div_Anim2_1
						{
							width:100% !important;
							height:100% !important;
							border-radius:0% !important;
							transition: all 0.3s cubic-bezier(1.000, -0.530, 0.405, 1.425);
							-webkit-transition: all 0.3s cubic-bezier(1.000, -0.530, 0.405, 1.425);
							-moz-transition: all 0.3s cubic-bezier(1.000, -0.530, 0.405, 1.425);
							-o-transition: all 0.3s cubic-bezier(1.000, -0.530, 0.405, 1.425);
							-ms-transition: all 0.3s cubic-bezier(1.000, -0.530, 0.405, 1.425);
						}
						.RW_Img_VID_Div_Anim_2
						{
							top:50% !important;
							left:50% !important;
							width:100% !important;
							height:100% !important;
							opacity:0.5 !important;
							border-radius:0% !important;
							transform:translateY(-50%) translateX(-50%) !important;
							-webkit-transform:translateY(-50%) translateX(-50%) !important;
							-ms-transform:translateY(-50%) translateX(-50%) !important;
							-moz-transform:translateY(-50%) translateX(-50%) !important;
							-o-transform:translateY(-50%) translateX(-50%) !important;
							transition: all 500ms linear !important;
							-webkit-transition: all 500ms linear !important;
							-moz-transition: all 500ms linear !important;
							-o-transition: all 500ms linear !important;
							-ms-transition: all 500ms linear !important;
						}
						.RW_Img_VID_Div_Anim2_2
						{
							opacity:1 !important;
							transition: all 0.3s linear !important;
							-webkit-transition: all 0.3s linear !important;
							-moz-transition: all 0.3s linear !important;
							-o-transition: all 0.3s linear !important;
							-ms-transition: all 0.3s linear !important;
						}
						.RW_Img_VID_Div_Anim_3
						{
							top:0% !important;
							left:0% !important;
							width:100% !important;
							height:100% !important;
							opacity:0.5 !important;
							border-radius:0% !important;
							transition: all 500ms linear !important;
							-webkit-transition: all 500ms linear !important;
							-moz-transition: all 500ms linear !important;
							-o-transition: all 500ms linear !important;
							-ms-transition: all 500ms linear !important;
						}
						.RW_Img_VID_Div_Anim2_3
						{
							opacity:1 !important;
							transition: all 0.3s linear !important;
							-webkit-transition: all 0.3s linear !important;
							-moz-transition: all 0.3s linear !important;
							-o-transition: all 0.3s linear !important;
							-ms-transition: all 0.3s linear !important;
						}
						.RW_Img_VID_Div_Anim_4
						{
							top:0% !important;
							left:0% !important;
							width:100% !important;
							height:100% !important;
							opacity:0.5 !important;
							border-radius:0% !important;
						}
						.RW_Img_VID_Div_Anim2_4
						{
							opacity:1 !important;
							transition: all 0.3s linear !important;
							-webkit-transition: all 0.3s linear !important;
							-moz-transition: all 0.3s linear !important;
							-o-transition: all 0.3s linear !important;
							-ms-transition: all 0.3s linear !important;
						}
						.RW_Img_VID_Div_Anim_5
						{
							top:0% !important;
							left:0% !important;
							width:100% !important;
							height:100% !important;
							opacity:1 !important;
							border-radius:0% !important;
						}
						.RW_Img_VID_Div_Anim2_5
						{
							transition: all 0.3s linear !important;
							-webkit-transition: all 0.3s linear !important;
							-moz-transition: all 0.3s linear !important;
							-o-transition: all 0.3s linear !important;
							-ms-transition: all 0.3s linear !important;
						}
						.RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>_big { z-index:3; cursor:pointer !important; width:50px !important; }
						.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>
						{
							color:#ffffff !important;
							cursor:pointer !important;
							border:none !important;
							outline:none !important;
							font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_FS; ?>px !important;
							font-family:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_FF; ?> !important;
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_C; ?> !important;
							perspective:800px !important;
							transition:all 0.3s !important;
							-webkit-transition:all 0.3s !important;
							-ms-transition:all 0.3s !important;
							-moz-transition:all 0.3s !important;
							-o-transition:all 0.3s !important;
							text-decoration: none !important;
						}
						.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>.select<?= $Rich_Web_VSlider_ID; ?>ed
						{
							font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_FS*5/4; ?>px !important;
						}
						.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>:hover
						{
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_HC; ?> !important;
							text-decoration: none;
						}
						#date<?= $Rich_Web_VSlider_ID; ?>s
						{
							width:<?= count($Rich_Web_VSlider_Videos)*250 ?>px !important;
						}
						#date<?= $Rich_Web_VSlider_ID; ?>s .select<?= $Rich_Web_VSlider_ID; ?>ed
						{
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_CC; ?> !important;
						}
						.rw_content_div<?= $Rich_Web_VSlider_ID; ?> h1
						{
							margin:10px 0px !important;
							font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_FS; ?>px !important;
							font-family:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_FF; ?> !important;
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_C; ?> !important;
							text-align:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TA; ?> !important;
							text-shadow:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TShC; ?> !important;
							text-transform: none !important;
							font-weight:normal !important;
							line-height: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_FS+4; ?>px !important;;
						}
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_T != "Type 12") { ?>
							.rw_tim_ic<?= $Rich_Web_VSlider_ID; ?>
							{
								font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_S; ?>px !important;
								color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_C; ?> !important;
								cursor:pointer !important;
								opacity:0.7 !important;
								text-shadow:1px 1px 1px #000000 !important;
							}
							.rw_tim_ic<?= $Rich_Web_VSlider_ID; ?>:hover { opacity:1 !important; }
						<?php } ?>
						.rw_tim_icons_cont_div<?= $Rich_Web_VSlider_ID; ?>
						{
							position:relative;
							height: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_S+10; ?>px !important;
							text-align:center !important;
						}
						.rw_tim_ic<?= $Rich_Web_VSlider_ID; ?>
						{
							position:relative !important;
							top: 50% !important;
							transform:translateY(-50%) !important;
							-moz-transform:translateY(-50%) !important;
							-webkit-transform:translateY(-50%) !important;
							padding:0px !important;
							width:auto !important;
							height:auto !important;
						}
						.RW_tim_vid_video { position:absolute; top:0px !important; left:0px !important; width:100% !important; height:100% !important; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s li .RW_IMGD<?= $Rich_Web_VSlider_ID; ?>{
							/*height:100% !important;*/
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s li .RW_IMGD<?= $Rich_Web_VSlider_ID; ?> .rw_resp_div<?= $Rich_Web_VSlider_ID; ?>
						{
							position: relative !important;
							width: 0% !important;
							padding-bottom: 0% !important;
							height:0px !important;
							overflow:hidden !important;
							top:20%;
							left:50%;
							background:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BC; ?> !important;
							-webkit-perspective-origin: 20% 30%;
							-ms-perspective-origin: 20% 30%;
							-moz-perspective-origin: 20% 30%;
							-o-perspective-origin: 20% 30%;
							perspective-origin: 20% 30%;
							-webkit-transition:all 0.8s ease-in-out;
							-ms-transition:all 0.8s ease-in-out;
							-moz-transition:all 0.8s ease-in-out;
							-o-transition:all 0.8s ease-in-out;
							transition:all 0.8s ease-in-out;
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s li.select<?= $Rich_Web_VSlider_ID; ?>ed .RW_IMGD<?= $Rich_Web_VSlider_ID; ?> .rw_resp_div<?= $Rich_Web_VSlider_ID; ?>{
							top:0;
							left:0;
							width: 100% !important;
							padding-bottom: 56.25% !important;
							-webkit-perspective-origin: left top;
							-ms-perspective-origin: left top;
							-moz-perspective-origin: left top;
							-o-perspective-origin: left top;
							perspective-origin: left top;
						}
					</style>
					<div id="timeline_r<?= $Rich_Web_VSlider_ID; ?>w" style="">
						<div id="rw_tim_bord<?= $Rich_Web_VSlider_ID; ?>"></div>
						<ul id="date<?= $Rich_Web_VSlider_ID; ?>s" style="margin:0px">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Videos);$i++){ ?>
								<?php if($i==0) { ?>
									<li class="rw_tim_tit_width<?= $Rich_Web_VSlider_ID; ?>"><span class="rw_circle_tim<?= $Rich_Web_VSlider_ID; ?>"></span><a href="#<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?><?= $Rich_Web_VSlider_ID; ?>" class="rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?> select<?= $Rich_Web_VSlider_ID; ?>ed"><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></a></li>
								<?php } else { ?>
									<li class="rw_tim_tit_width<?= $Rich_Web_VSlider_ID; ?>"><span class="rw_circle_tim<?= $Rich_Web_VSlider_ID; ?>"></span><a href="#<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?><?= $Rich_Web_VSlider_ID; ?>" class="rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>"><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></a></li>
								<?php } ?>
							<?php } ?>
						</ul>
						<div class="rw_tim_icons_cont_div<?= $Rich_Web_VSlider_ID; ?>">
							<i href="#" id="pre<?= $Rich_Web_VSlider_ID; ?>v" class="rw_tim_ic<?= $Rich_Web_VSlider_ID; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_T; ?>-left"></i>
							<i href="#" id="nex<?= $Rich_Web_VSlider_ID; ?>t" class="rw_tim_ic<?= $Rich_Web_VSlider_ID; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_T; ?>-right"></i>
						</div>
						<ul id="issue<?= $Rich_Web_VSlider_ID; ?>s" style="margin:0px">
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
								<li id="<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?><?= $Rich_Web_VSlider_ID; ?>" class="rw_resp_li<?= $Rich_Web_VSlider_ID; ?>">
									<div class="RW_Img_VID_Div<?= $Rich_Web_VSlider_ID; ?>">
										<iframe class="RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>" src="<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>" style='width:100%;height:100%;' frameborder="0" webkitAllowFullScreen="true" mozallowfullscreen="true" allowFullScreen="true"></iframe>
										<img class="RW_tim_vid_vid_Big_Img<?= $Rich_Web_VSlider_ID; ?>" src="<?= $link_vd_sl;?>" />
									</div>
									<div class="RW_IMGD<?= $Rich_Web_VSlider_ID; ?>" >
										<div class="rw_resp_div<?= $Rich_Web_VSlider_ID; ?>" name="<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>">
											<i class="RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_T; ?>" ></i>
											<img class="RW_tim_vid_vid RW_tim_vid_vid<?= $Rich_Web_VSlider_ID; ?>" src="<?= $link_vd_sl;?>" />
											<iframe class="RW_tim_vid_video" src="" style='width:100%;height:100%;' frameborder="0" webkitAllowFullScreen="true" mozallowfullscreen="true" allowFullScreen="true"></iframe>
										</div>
									</div>
									<div class="rw_content_div<?= $Rich_Web_VSlider_ID; ?>">
										<h1><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></h1>
										<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc);?>
									</div>
								</li>
							<?php } ?>
						</ul>
					</div>
					<input type="text" style="display:none;" class="Rich_Web_MS_SSh<?= $Rich_Web_VSlider_ID; ?>" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_SSh; ?>">
					<input type="text" style="display:none;" class="Rich_Web_MS_SShChT<?= $Rich_Web_VSlider_ID; ?>" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_SShChT; ?>">
					<input type="text" style="display:none;" class="Rich_Web_MS_Autoplay<?= $Rich_Web_VSlider_ID; ?>" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Autoplay; ?>">
					<input type="text" style="display:none;" class="Rich_Web_MS_Sl1EfT<?= $Rich_Web_VSlider_ID; ?>" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Sl1EfT; ?>">
					<input type="text" style="display:none;" class="Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_S; ?>">
					<script type="text/javascript">
						// jQuery(document).ready(function(){
							jQuery(".rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>.select<?= $Rich_Web_VSlider_ID; ?>ed").parent().find(".rw_circle_tim<?= $Rich_Web_VSlider_ID; ?>").css("border-color","red");
							var top<?= $Rich_Web_VSlider_ID; ?> = jQuery(".rw_resp_li<?= $Rich_Web_VSlider_ID; ?>").offset().top;
							var left<?= $Rich_Web_VSlider_ID; ?> = jQuery(".rw_resp_li<?= $Rich_Web_VSlider_ID; ?>").offset().left;
							var img_top<?= $Rich_Web_VSlider_ID; ?> = Math.floor(parseInt(jQuery('.RW_tim_vid_vid').offset().top)+parseInt(jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").height())/3);
							var img_left<?= $Rich_Web_VSlider_ID; ?> = Math.floor(parseInt(jQuery('.RW_tim_vid_vid').offset().left)+parseInt(jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").width())/3);
							var type<?= $Rich_Web_VSlider_ID; ?>=parseInt(jQuery(".Rich_Web_MS_Sl1EfT<?= $Rich_Web_VSlider_ID; ?>").val());
							var Rich_Web_MS_Autoplay<?= $Rich_Web_VSlider_ID; ?> = jQuery(".Rich_Web_MS_Autoplay<?= $Rich_Web_VSlider_ID; ?>").val();
							var Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?> = jQuery(".Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>").val();
							jQuery(".RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>").css("display","none");
							jQuery(".RW_Img_VID_Div<?= $Rich_Web_VSlider_ID; ?>").css("top",(img_top<?= $Rich_Web_VSlider_ID; ?>-top<?= $Rich_Web_VSlider_ID; ?>)+"px");
							jQuery(".RW_Img_VID_Div<?= $Rich_Web_VSlider_ID; ?>").css("left",(img_left<?= $Rich_Web_VSlider_ID; ?>-left<?= $Rich_Web_VSlider_ID; ?>)+"px");
							jQuery(".RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>").attr("src","");
							jQuery(".rw_resp_div<?= $Rich_Web_VSlider_ID; ?>").click(function(){
								if(jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").width() > 500)
								{
									jQuery(".RW_tim_vid_vid_Big_Img<?= $Rich_Web_VSlider_ID; ?>").css("display","block");
									jQuery(".RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>").css("display","block");
									jQuery(this).prevUntil("div").children().attr("src",jQuery(this).attr("name"));
									if(Rich_Web_MS_Autoplay<?= $Rich_Web_VSlider_ID; ?> == "on") 
									{
										jQuery(this).parent().parent().children().find(".RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>").attr("src",jQuery(this).attr("name")+'?autoplay=1&rel=0&amp');
										if(type<?= $Rich_Web_VSlider_ID; ?>==5){ jQuery(".RW_tim_vid_vid_Big_Img<?= $Rich_Web_VSlider_ID; ?>").css("display","none"); }
									}
									else
									{
										jQuery(this).parent().parent().children().find(".RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>").attr("src",jQuery(this).attr("name"));
									}
									jQuery(".RW_Img_VID_Div<?= $Rich_Web_VSlider_ID; ?>").addClass("RW_Img_VID_Div_Anim_"+type<?= $Rich_Web_VSlider_ID; ?>);
									setTimeout(function(){
										jQuery(".RW_Img_VID_Div<?= $Rich_Web_VSlider_ID; ?>").addClass("RW_Img_VID_Div_Anim2_"+type<?= $Rich_Web_VSlider_ID; ?>);
									},500)
									if(type<?= $Rich_Web_VSlider_ID; ?> != 5)
									{
										setTimeout(function(){ jQuery(".RW_tim_vid_vid_Big_Img<?= $Rich_Web_VSlider_ID; ?>").css("display","none"); },800)
									}
								}
								else
								{
									jQuery(".RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>").css("display","none");
									jQuery(".RW_tim_vid_vid").css("display","none");
									jQuery(".RW_tim_vid_video").css("display","block");
									var src = jQuery(this).attr("name");
									jQuery(this).children(".RW_tim_vid_video").attr("src",src+'?autoplay=1&rel=0&amp');
								}
							})
							jQuery("#date<?= $Rich_Web_VSlider_ID; ?>s a").click(function(event){
								event.preventDefault();
								if(jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").width() > 500)
								{
									jQuery(".RW_tim_vid_vid_Big_Img<?= $Rich_Web_VSlider_ID; ?>").css("display","none");
									jQuery(".RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>").attr("src","");
									jQuery(".RW_Img_VID_Div<?= $Rich_Web_VSlider_ID; ?>").removeClass("RW_Img_VID_Div_Anim_"+type<?= $Rich_Web_VSlider_ID; ?>);
									jQuery(".RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>").css("display","none");
									jQuery(".RW_Img_VID_Div<?= $Rich_Web_VSlider_ID; ?>").removeClass("RW_Img_VID_Div_Anim2_"+type<?= $Rich_Web_VSlider_ID; ?>);
								}
								else
								{
									jQuery(".RW_tim_vid_video").attr("src","");
									jQuery(".RW_tim_vid_video").css("display","none");
									jQuery(".RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>").css("display","block");
									jQuery(".RW_tim_vid_vid").css("display","block");
								}
							})
							jQuery(".RW_tim_vid_vid_Big_Vid<?= $Rich_Web_VSlider_ID; ?>").click(function(event){ event.preventDefault(); })
							jQuery(".ytp-fullscreen-button").click(function(){ event.preventDefault(); alert("sfc") })
							function resp<?= $Rich_Web_VSlider_ID; ?>()
							{
								jQuery(".RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>").css("font-size",Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>*jQuery(".RW_tim_vid_vid").width()/500)+"px");
								jQuery(".RW_tim_vid_play<?= $Rich_Web_VSlider_ID; ?>").css("padding",Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>/4*jQuery(".RW_tim_vid_vid").width()/300)+"px "+Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>/2*jQuery(".RW_tim_vid_vid").width()/300)+"px");
								jQuery(".rw_resp_li<?= $Rich_Web_VSlider_ID; ?>").css("width",jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").width());
								if(jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").width() <= 500)
								{
									jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").css("width","95%");
									jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").addClass("RW_IMGD_Anim");
									jQuery(".rw_content_div<?= $Rich_Web_VSlider_ID; ?>").addClass("rw_content_div_Anim");
									jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").css("height","auto");
									jQuery(".RW_tim_vid_video").css("opacity","1");
								}
								else
								{
									jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").css("width","40%");
									jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").removeClass("RW_IMGD_Anim");
									jQuery(".rw_content_div<?= $Rich_Web_VSlider_ID; ?>").removeClass("rw_content_div_Anim");
									jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").css("height",Math.floor(jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").width()*9/16+55+jQuery(".rw_tim_icons_cont_div<?= $Rich_Web_VSlider_ID; ?>").height()));
									jQuery(".RW_IMGD<?= $Rich_Web_VSlider_ID; ?>").css("height","auto");
									jQuery(".RW_tim_vid_video").css("opacity","0");
								}
							}
							// setTimeout(function(){ resp<?= $Rich_Web_VSlider_ID; ?>(); },100)
							resp<?= $Rich_Web_VSlider_ID; ?>();
							// jQuery(window).on("resize",function(){ resp<?= $Rich_Web_VSlider_ID; ?>(); })
							jQuery(window).on("load resize",function(){ resp<?= $Rich_Web_VSlider_ID; ?>(); })

						// })
					</script>
				<?php } else { ?>
					<style>
						.sociales<?= $Rich_Web_VSlider_ID; ?> { text-align: center; margin-bottom: 20px; }
						#timeline_r<?= $Rich_Web_VSlider_ID; ?>w { overflow: hidden; margin: 20px auto !important; position: relative; max-width:100%; }
						#date<?= $Rich_Web_VSlider_ID; ?>s
						{
							width: 150px;
							height: 600px;
							overflow: hidden;
							float: left;
							margin-left:0px !important;
							margin: 0;
							padding-left:0px !important;
						}
						.rw_tim_li<?= $Rich_Web_VSlider_ID; ?>:before { content: "" !important; }
						.rw_tim_tit_width<?= $Rich_Web_VSlider_ID; ?>:before { content: "" !important; }
						#date<?= $Rich_Web_VSlider_ID; ?>s li
						{
							list-style: none;
							height: 100px;
							line-height: 1 !important;
							font-size: 24px;
							padding-left: 15px !important;
							position:relative;
							margin: 0px !important;
							overflow: hidden;
						}
						#date<?= $Rich_Web_VSlider_ID; ?>s a
						{
							box-shadow: none !important;
							-moz-box-shadow: none !important;
							-webkit-box-shadow: none !important;
							line-height: 1 !important;
							position: absolute;
							top: 50%;
							left: 15px;
							transform: translateY(-50%);
							-o-transform: translateY(-50%);
							-moz-transform: translateY(-50%);
							-webkit-transform: translateY(-50%);
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s
						{
							width: calc(100% - 150px);
							overflow: hidden;
							float: left;
							padding-left:0px;
							margin-left:0px !important;
							margin-right:0px !important;
							position:relative;
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s li { width: 100% !important; list-style: none; margin-left:0px !important; padding:0px !important; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s li.select<?= $Rich_Web_VSlider_ID; ?>ed .rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>
						{
							-webkit-transform: scale(1,1);
							-moz-transform: scale(1,1);
							-o-transform: scale(1,1);
							-ms-transform: scale(1,1);
							transform: scale(1,1);
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s li .rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>
						{
							-webkit-transition: transform 0.8s ease-in-out;
							-moz-transition: transform 0.8s ease-in-out;
							-o-transition: transform 0.8s ease-in-out;
							-ms-transition: transform 0.8s ease-in-out;
							transition: transform 0.8s ease-in-out;
							-webkit-transform: scale(0.7,0.7);
							-moz-transform: scale(0.7,0.7);
							-o-transform: scale(0.7,0.7);
							-ms-transform: scale(0.7,0.7);
							transform: scale(0.7,0.7);
						}
						#issue<?= $Rich_Web_VSlider_ID; ?>s li h1 { text-align: center; }
						#issue<?= $Rich_Web_VSlider_ID; ?>s li p { margin: 10px 20px; line-height: 1 !important; }
						#nex<?= $Rich_Web_VSlider_ID; ?>t, #pre<?= $Rich_Web_VSlider_ID; ?>v
						{
							position: absolute;
							left: 50%;
							transform:translateX(-50%) !important;
							-webkit-transform:translateX(-50%) !important;
							-ms-transform:translateX(-50%) !important;
							-moz-transform:translateX(-50%) !important;
							-o-transform:translateX(-50%) !important;
							background-position: 0 -44px;
							background-repeat: no-repeat;
						}
						#nex<?= $Rich_Web_VSlider_ID; ?>t:hover, #pre<?= $Rich_Web_VSlider_ID; ?>v:hover { background-position:  0 0; }
						#nex<?= $Rich_Web_VSlider_ID; ?>t { bottom: 0; }
						#pre<?= $Rich_Web_VSlider_ID; ?>v { top: 0; }
						.Timeline-down
						{
							background-image: url('<?= plugin_dir_url(__DIR__)."Images/next_v.png";?>');
							text-indent: -9999px;
							font-size: 70px;
							width: 38px;
							height: 22px;
							transition:all 0.3s linear !important;
							-webkit-transition:all 0.3s linear !important;
							-ms-transition:all 0.3s linear !important;
							-moz-transition:all 0.3s linear !important;
							-o-transition:all 0.3s linear !important;
							cursor:pointer !important;
						}
						.Timeline-up
						{
							background-image: url('<?= plugin_dir_url(__DIR__)."Images/prev_v.png";?>');
							text-indent: -9999px;
							font-size: 70px;
							width: 38px;
							height: 22px;
							transition:all 0.3s linear !important;
							-webkit-transition:all 0.3s linear !important;
							-ms-transition:all 0.3s linear !important;
							-moz-transition:all 0.3s linear !important;
							-o-transition:all 0.3s linear !important;
							cursor:pointer !important;
						}
						#nex<?= $Rich_Web_VSlider_ID; ?>t.disabled, #pre<?= $Rich_Web_VSlider_ID; ?>v.disabled { opacity: 0.2; }
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShT == "none") { ?>
							#timeline_r<?= $Rich_Web_VSlider_ID; ?>w { box-shadow: none !important; -moz-box-shadow: none !important; -webkit-box-shadow: none !important;}
						<?php } else  if($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShT == "Type 1") { ?>
							#timeline_r<?= $Rich_Web_VSlider_ID; ?>w
							{
								box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
								-moz-box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
								-webkit-box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
							}
						<?php } else { ?>
							#timeline_r<?= $Rich_Web_VSlider_ID; ?>w
							{
								box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
								-moz-box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
								-webkit-box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_ShC; ?> !important;
							}
						<?php } ?>
						#timeline_r<?= $Rich_Web_VSlider_ID; ?>w
						{
							width:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_W; ?>px !important;
							background-color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BgC; ?> !important;
						}
						#rw_tim_bord<?= $Rich_Web_VSlider_ID; ?>
						{
							position:absolute;
							height:100%;
							left:<?= 7-$Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BW; ?>px;
							border:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BW; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BS; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BC; ?> !important;
						}
						.rw_circle_tim<?= $Rich_Web_VSlider_ID; ?>
						{
							position:absolute;
							border:5px solid <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NIC_C; ?> !important;
							width:0px;
							height:0px;
							top:50%;
							left:<?= (7-$Rich_Web_VSlider_Eff[0]->Rich_Web_MS_N_BW)/2; ?>px;
							border-radius:50%;
							transform:translateY(-50%);
							-webkit-transform:translateY(-50%);
							-ms-transform:translateY(-50%);
							-moz-transform:translateY(-50%);
							-o-transform:translateY(-50%);
						}
						.rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>
						{
							position:relative;
							width:100%;
							box-sizing:border-box !important;
							-moz-box-sizing:border-box !important;
							-webkit-box-sizing:border-box !important;
							border:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BW; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BS; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BC; ?> !important;
							background:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BC; ?> !important;
						}
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShT == "Type 1") { ?>
							.rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>
							{
								box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
								-moz-box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
								-webkit-box-shadow:0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
							}
						<?php } else { ?>
							.rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>
							{
								box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
								-moz-box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
								-webkit-box-shadow:0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh/2; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_BSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Img_ShC; ?> !important;
							}
						<?php } ?>
						.rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_img { position:absolute !important; width:100% !important; height:100% !important; margin:0px !important; }
						.rw_cont_tim<?= $Rich_Web_VSlider_ID; ?>
						{
							width:100%;
							height:100%;
							box-sizing:border-box;
							-moz-box-sizing:border-box;
							-webkit-box-sizing:border-box;
							padding: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_S+3; ?>px 20px;
						}
						.rw_titDesc_tim<?= $Rich_Web_VSlider_ID; ?>{ position:relative; margin-top:20px; width:100%; height:230px; overflow-x:hidden; }
						.rw_titDesc_tim<?= $Rich_Web_VSlider_ID; ?>::-webkit-scrollbar { width: 5px; }
						.rw_titDesc_tim<?= $Rich_Web_VSlider_ID; ?>::-webkit-scrollbar-track
						{
							-webkit-box-shadow: inset 0 0 6px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_BgC; ?> !important;
						}
						.rw_titDesc_tim<?= $Rich_Web_VSlider_ID; ?>::-webkit-scrollbar-thumb
						{
							background-color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_C; ?> !important;
							outline: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_C; ?> !important;
						}
						.rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_video { position:absolute; width:100%; height:100%; }
						.rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play
						{
							position:absolute;
							top:50%;
							left:50%;
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_C; ?> !important;
							background-color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_BgC; ?> !important;
							border-radius:4px;
							transform:translateY(-50%) translateX(-50%);
							-webkit-transform:translateY(-50%) translateX(-50%);
							-ms-transform:translateY(-50%) translateX(-50%);
							-moz-transform:translateY(-50%) translateX(-50%);
							-o-transform:translateY(-50%) translateX(-50%);
							z-index:3;
							cursor:pointer !important;
							transition:all 0.3s linear !important;
							-webkit-transition:all 0.3s linear !important;
							-ms-transition:all 0.3s linear !important;
							-moz-transition:all 0.3s linear !important;
							-o-transition:all 0.3s linear !important;
						}
						.rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play:hover
						{
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_HC; ?> !important;
							background-color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_HBgC; ?> !important;
						}
						.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>
						{
							color:#ffffff !important;
							cursor:pointer !important;
							font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_FS; ?>px !important;
							font-family:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_FF; ?> !important;
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_C; ?> !important;
							border:none !important;
							outline:none !important;
							transition:all 0.3s !important;
							-webkit-transition:all 0.3s !important;
							-ms-transition:all 0.3s !important;
							-moz-transition:all 0.3s !important;
							-o-transition:all 0.3s !important;
							text-decoration: none !important;
						}
						.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>.select<?= $Rich_Web_VSlider_ID; ?>ed
						{
							font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_FS*4/3; ?>px !important;
						}
						.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>:hover
						{
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_HC; ?> !important;
						}
						#date<?= $Rich_Web_VSlider_ID; ?>s .select<?= $Rich_Web_VSlider_ID; ?>ed
						{
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_CC; ?> !important;
						}
						.rw_titDesc_tim<?= $Rich_Web_VSlider_ID; ?> h1
						{
							margin:0px !important;
							font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_FS; ?>px !important;
							font-family:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_FF; ?> !important;
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_C; ?> !important;
							text-align:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TA; ?> !important;
							text-shadow:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TSh; ?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_TShC; ?> !important;
							text-transform: none !important;
							font-weight: normal !important;
							line-height:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_T_FS+4; ?>px !important;
						}
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_T != "Type 12") { ?>
						.rw_tim_ic<?= $Rich_Web_VSlider_ID; ?>
						{
							font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_S; ?>px !important;
							color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_C; ?> !important;
							cursor:pointer !important;
							opacity:0.7 !important;
							text-shadow:1px 1px 1px #000000 !important;
						}
						.rw_tim_ic<?= $Rich_Web_VSlider_ID; ?>:hover { opacity:1 !important; }
					<?php } ?>
					.rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>:first-child { font-size:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_NI_FS*2; ?>px !important; }
				</style>
				<div id="timeline_r<?= $Rich_Web_VSlider_ID; ?>w" style="">
					<div id="rw_tim_bord<?= $Rich_Web_VSlider_ID; ?>"></div>
					<ul id="date<?= $Rich_Web_VSlider_ID; ?>s">
						<?php for($i=0;$i<count($Rich_Web_VSlider_Videos);$i++){ ?>
							<?php if($i==0) { ?>
								<li class="rw_tim_tit_width<?= $Rich_Web_VSlider_ID; ?>"><span class="rw_circle_tim<?= $Rich_Web_VSlider_ID; ?>"></span><a href="#<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?><?= $Rich_Web_VSlider_ID; ?>" class="rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?> select<?= $Rich_Web_VSlider_ID; ?>ed"><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></a></li>
							<?php } else { ?>
								<li class="rw_tim_tit_width<?= $Rich_Web_VSlider_ID; ?>"><span class="rw_circle_tim<?= $Rich_Web_VSlider_ID; ?>"></span><a href="#<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?><?= $Rich_Web_VSlider_ID; ?>" class="rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>"><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></a></li>
							<?php } ?>
						<?php } ?>
					</ul>
					<ul id="issue<?= $Rich_Web_VSlider_ID; ?>s">
						<?php for($i=0;$i<count($Rich_Web_VSlider_Videos);$i++){
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
							<?php if($i==0) { ?>
								<li class="rw_tim_li<?= $Rich_Web_VSlider_ID; ?>" id="<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?><?= $Rich_Web_VSlider_ID; ?>" class="select<?= $Rich_Web_VSlider_ID; ?>ed">
									<div class="rw_cont_tim<?= $Rich_Web_VSlider_ID; ?>">
										<div class="rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>">
											<iframe class="rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_video" src=""  frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
											<img src="<?= $link_vd_sl;?>" class="RW_tim_vid_vid<?= $Rich_Web_VSlider_ID; ?> rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_img" />
											<i class="rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_T; ?>" name="<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>"></i>
										</div>
										<div class="rw_titDesc_tim<?= $Rich_Web_VSlider_ID; ?>">
											<h1><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></h1>
											<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc);?>
										</div>
									</div>
								</li>
							<?php } else { ?>
							<li class="rw_tim_li<?= $Rich_Web_VSlider_ID; ?>" id="<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?><?= $Rich_Web_VSlider_ID; ?>">
								<div class="rw_cont_tim<?= $Rich_Web_VSlider_ID; ?>">
									<div class="rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>">
										<iframe class="rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_video" src="" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
										<img src="<?= $link_vd_sl;?>" class="RW_tim_vid_vid<?= $Rich_Web_VSlider_ID; ?> rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_img" />
										<i class="rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_T; ?>" name="<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>"></i>
									</div>
									<div class="rw_titDesc_tim<?= $Rich_Web_VSlider_ID; ?>">
										<h1><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></h1>
										<?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Add_Desc);?>
									</div>
								</div>
							</li>
							<?php } ?>
						<?php } ?>
					</ul>
					<i id="nex<?= $Rich_Web_VSlider_ID; ?>t" class="rw_tim_ic<?= $Rich_Web_VSlider_ID; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_T; ?>-down"></i>
					<i id="pre<?= $Rich_Web_VSlider_ID; ?>v" class="rw_tim_ic<?= $Rich_Web_VSlider_ID; ?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_Ic_T; ?>-up"></i>
				</div>
				<input type="text" style="display:none;" class="Rich_Web_MS_SSh<?= $Rich_Web_VSlider_ID; ?>" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_SSh; ?>">
				<input type="text" style="display:none;" class="Rich_Web_MS_SShChT<?= $Rich_Web_VSlider_ID; ?>" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_SShChT; ?>">
				<input type="text" style="display:none;" class="Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>" value="<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_MS_PlIc_S; ?>">
				<script type="text/javascript">
					jQuery(document).ready(function(){
						var Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?> = jQuery(".Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>").val();
						function resp<?= $Rich_Web_VSlider_ID; ?>() {
							jQuery(".rw_tim_li<?= $Rich_Web_VSlider_ID; ?>").css("height",jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").height());
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play").css("font-size",Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>*jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").width()/500)+"px");
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play").css("padding",Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>/4*jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").width()/300)+"px " + Math.floor(Rich_Web_MS_PlIc_S<?= $Rich_Web_VSlider_ID; ?>/2*jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").width()/300)+"px");
							if(jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").width() <= 500)
							{
								jQuery("#date<?= $Rich_Web_VSlider_ID; ?>s").css("display","none");
								jQuery("#rw_tim_bord<?= $Rich_Web_VSlider_ID; ?>").css("display","none");
								jQuery("#issue<?= $Rich_Web_VSlider_ID; ?>s").css("width","100%");
								jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").css("height",Math.floor(jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").width()*9/16));
								jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").css("height",jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").height()+300);
								jQuery(".rw_tim_li<?= $Rich_Web_VSlider_ID; ?>").css("height",jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").height());
							}
							else
							{
								jQuery("#date<?= $Rich_Web_VSlider_ID; ?>s").css("display","block");
								jQuery("#rw_tim_bord<?= $Rich_Web_VSlider_ID; ?>").css("display","block");
								jQuery("#issue<?= $Rich_Web_VSlider_ID; ?>s").css("width","calc(100% - 150px)");
								jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").css("height",Math.floor(jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").width()*9/16));
								jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").css("height",jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>").height()+300);
								jQuery(".rw_tim_li<?= $Rich_Web_VSlider_ID; ?>").css("height",jQuery("#timeline_r<?= $Rich_Web_VSlider_ID; ?>w").height());
							}
						}
						resp<?= $Rich_Web_VSlider_ID; ?>();
						jQuery(window).on("load resize",function(){
							resp<?= $Rich_Web_VSlider_ID; ?>();
						})
						setTimeout(function(){ resp<?= $Rich_Web_VSlider_ID; ?>(); },100)
						jQuery(window).resize(function(){ resp<?= $Rich_Web_VSlider_ID; ?>(); })
						jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_video").attr("src","");
						jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play").click(function(){
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_img").css("display","none");
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play").css("display","none");
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_video").css("display","block");
							var src = jQuery(this).attr("name");
							jQuery(this).parent().find(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_video").attr("src",src+'?autoplay=1&rel=0&amp');
						})
						jQuery(".rw_tim_nav€_item<?= $Rich_Web_VSlider_ID; ?>").bind('click',function(){
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_video").attr("src","");
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_video").css("display","none");
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_img").css("display","block");
							jQuery(".rw_vid_tim<?= $Rich_Web_VSlider_ID; ?>_play").css("display","block");
						})
					})
				</script>
			<?php } ?>