<div id="RW_Load_VSVT_Navigation<?= $Rich_Web_VSlider_ID; ?>" style="<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_Loading_Show == "on") { ?>display: block;<?php } else { ?>display: none;<?php } ?>">
		<div class="center_content<?= $Rich_Web_VSlider_ID; ?>">
			<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_Show == "on") { ?>
				<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T == "Type 1") { ?>
					<div class="RW_Loader_Frame_Navigation RW_Loader_Frame_Navigation<?= $Rich_Web_VSlider_ID; ?>">
						<div class="loader_Navigation1 loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation1"></div>
						<div class="loader_Navigation2 loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation2"></div>
						<div class="loader_Navigation3 loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>" id="loader_Navigation3"></div>
						<div class="loader_Navigation4" id="loader_Navigation4"></div>
					</div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T == "Type 2") { ?>
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
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T == "Type 3") { ?>
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
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_L_T == "Type 4") { ?>
					<div class="cssload-thecube<?= $Rich_Web_VSlider_ID; ?>">
						<div class="cssload-cube cssload-c1"></div>
						<div class="cssload-cube cssload-c2"></div>
						<div class="cssload-cube cssload-c4"></div>
						<div class="cssload-cube cssload-c3"></div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_Show == "on") { ?>
				<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T == "Type 1") { ?>
					<div class="cssload-loader<?= $Rich_Web_VSlider_ID; ?>"><?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT;?></div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T == "Type 2") { ?>
					<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>">
						<?php foreach($text_array as $key=>$v){ ?>
							<div id="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>_<?php Print $key+1; ?>" class="inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>"><?php Print $v; ?></div>
						<?php } ?>
					</div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T == "Type 3") { ?>
					<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>">
						<div class="cssload-preloader<?= $Rich_Web_VSlider_ID; ?>-box">
							<?php foreach($text_array as $key=>$v){ ?>
								<div><?php Print $v; ?></div>
							<?php } ?>
						</div>
					</div>
				<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT_T == "Type 4") { ?>
					<div class="RW_Loader_Text_Navigation<?= $Rich_Web_VSlider_ID; ?>">
						<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT;?>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
	</div>
	<div id="Rich_Web_VSVT<?= $Rich_Web_VSlider_ID; ?>" class="Rich_Web_VSVT<?= $Rich_Web_VSlider_ID; ?>_Main" style="display:none;">
		<div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
			<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
			<div style="position:absolute;display:block;background:url('<?= plugin_dir_url(__DIR__).'Images/loader.gif';?>') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
		</div>
		<div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 240px; width: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_H*16/9;?>px; height: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_H;?>px; overflow: hidden;">
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
				<div data-p="150.00" style="display: none;">
					<img class="image_rw_data<?= $Rich_Web_VSlider_ID; ?>" data-rwimg="<?= $link_vd_sl;?>" data-u="image" src="<?= $link_vd_sl;?>" />
					<img data-u="thumb" src="<?= $link_vd_sl;?>" />
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_TShow == 'on'){ ?>
						<div data-u="caption" class="Rich_Web_VS_VTS_Title<?= $Rich_Web_VSlider_ID; ?>"><?= html_entity_decode($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSlider_Vid_Title);?></div>
					<?php }?>
					<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Link != ''){ ?>
						<div data-u="caption" class="Rich_Web_VS_VTS_Link<?= $Rich_Web_VSlider_ID; ?>">
							<a href="<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Link;?>" target="<?php if($Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_ONT=='checked'){echo '_blank';}?>"><i class="rich_web rich_web-<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_LType;?>" aria-hidden="true"></i></a>
						</div>
					<?php }?>
					<div data-u="caption" class="Rich_Web_VS_VTS_Play<?= $Rich_Web_VSlider_ID; ?>" onclick='Rich_Web_VSVT<?= $Rich_Web_VSlider_ID; ?>_Play_Video("<?= $Rich_Web_VSlider_Videos[$i]->Rich_Web_VSldier_Add_Src;?>")'>
						<i class="rich_web rich_web-<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_PType;?>" aria-hidden="true"></i>
					</div>
				</div>
			<?php } ?>
		</div>
		<div data-u="slides" class="Rich_Web_VSVT<?= $Rich_Web_VSlider_ID; ?>_Iframe_Div">
			<iframe id="Rich_Web_VSVT<?= $Rich_Web_VSlider_ID; ?>_Iframe" src="" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
		<div data-u="thumbnavigator" class="jssort01-99-66" data-autocenter="2" onclick='Rich_Web_VSVT<?= $Rich_Web_VSlider_ID; ?>_Stop_Video()'>
			<div data-u="slides" style="cursor: default;">
				<div data-u="prototype" class="p">
					<div class="w">
						<div data-u="thumbnailtemplate" class="t"></div>
					</div>
					<div class="c"></div>
				</div>
			</div>
		</div>
		<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_ArrShow == 'on'){ ?>
			<span data-u="arrowleft" class="jssora05l" style="left:248px;width:48px;height:48px;" onclick='Rich_Web_VSVT<?= $Rich_Web_VSlider_ID; ?>_Stop_Video()'>
				<i class="rich_web rich_web-<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_ArrType;?>-left" aria-hidden="true"></i>
			</span>
			<span data-u="arrowright" class="jssora05r" style="right:8px;width:48px;height:48px;" onclick='Rich_Web_VSVT<?= $Rich_Web_VSlider_ID; ?>_Stop_Video()'>
				<i class="rich_web rich_web-<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VTVS_ArrType;?>-right" aria-hidden="true"></i>
			</span>
		<?php }?>
	</div>