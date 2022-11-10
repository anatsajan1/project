<style type="text/css">
					.center_content<?= $Rich_Web_VSlider_ID; ?>
					{
						position:absolute;
						overflow:visible;
						top:50%;
						left:50%;
						width:100%;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
					}
					#RW_Load_Thumb_Navigation<?= $Rich_Web_VSlider_ID; ?>
					{
						position:relative;
						margin:20px auto !important;
						background-color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_BgC; ?> !important;
						z-index:2;
						width:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_W;?>px;
						height:<?= ($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_H+$Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIH);?>px;
						max-width:100%;
					}
					<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_S == "small") { ?>
						.RW_Loader_Frame_Navigation<?= $Rich_Web_VSlider_ID; ?> { width:45px !important; height:45px !important; }
						.loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top: 3px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T1_C; ?> !important;
							border-bottom: 3px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T1_C; ?> !important;
						}
						.loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top: 3px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T2_C; ?> !important;
							border-bottom: 3px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T2_C; ?> !important;
						}
						.loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top:12px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							border-bottom:12px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							border-right:12px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							width:50% !important;
							height:50%!important;
						}
					<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_S == "middle") { ?>
						.RW_Loader_Frame_Navigation<?= $Rich_Web_VSlider_ID; ?> { width:60px !important; height:60px !important; }
						.loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top: 4px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T1_C; ?> !important;
							border-bottom: 4px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T1_C; ?> !important;
						}
						.loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top: 4px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T2_C; ?> !important;
							border-bottom: 4px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T2_C; ?> !important;
						}
						.loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top:17px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							border-bottom:17px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							border-right:17px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							width:55% !important;
							height:55%!important;
						}
					<?php } else { ?>
						.RW_Loader_Frame_Navigation<?= $Rich_Web_VSlider_ID; ?> { width:80px !important; height:80px !important; }
						.loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top: 5px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T1_C; ?> !important;
							border-bottom: 5px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T1_C; ?> !important;
						}
						.loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top: 5px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T2_C; ?> !important;
							border-bottom: 5px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T2_C; ?> !important;
						}
						.loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>
						{
							border-top:25px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							border-bottom:25px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							border-right:25px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_T3_C; ?> !important;
							width:60% !important;
							height:60%!important;
						}
					<?php } ?>
					.RW_Loader_Frame_Navigation
					{
						position:relative;
						left:50%;
						width:80px;
						height:80px;
						transform:translateX(-50%);
						-webkit-transform:translateX(-50%);
						-ms-transform:translateX(-50%);
						-moz-transform:translateX(-50%);
						-o-transform:translateX(-50%);
					}
					.RW_Loader_Text_Navigation<?= $Rich_Web_VSlider_ID; ?>
					{
						position:relative;
						text-align:center;
						margin-top:10px;
						font-size: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FS; ?>px !important;
						font-family:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FF; ?> !important;
						color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important;
					}
					.loader_Navigation1,.loader_Navigation2,.loader_Navigation3,.loader_Navigation4 { position:absolute; border:5px solid transparent; border-radius:50%; }
					.loader_Navigation1<?= $Rich_Web_VSlider_ID; ?>
					{
						box-sizing:border-box;
						-webkit-box-sizing:border-box;
						-ms-box-sizing:border-box;
						-moz-box-sizing:border-box;
						-o-box-sizing:border-box;
					}
					.loader_Navigation2<?= $Rich_Web_VSlider_ID; ?>
					{
						-webkit-box-sizing:border-box;
						-ms-box-sizing:border-box;
						-moz-box-sizing:border-box;
						-o-box-sizing:border-box;
						top:50%;
						left:50%;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);	
					}
					.loader_Navigation3<?= $Rich_Web_VSlider_ID; ?>
					{
						width:60%;
						height:60%;
						top:50%;
						left:50%;
						box-sizing:border-box;
						-webkit-box-sizing:border-box;
						-ms-box-sizing:border-box;
						-moz-box-sizing:border-box;
						-o-box-sizing:border-box;
						transform:translateY(-50%) translateX(-50%);
						-webkit-transform:translateY(-50%) translateX(-50%);
						-ms-transform:translateY(-50%) translateX(-50%);
						-moz-transform:translateY(-50%) translateX(-50%);
						-o-transform:translateY(-50%) translateX(-50%);
						animation:clockLoadingmin 1s linear 500;
						-webkit-animation:clockLoadingmin 1s linear 500;
						-ms-animation:clockLoadingmin 1s linear 500;
						-moz-animation:clockLoadingmin 1s linear 500;
						-o-animation:clockLoadingmin 1s linear 500;
					}
					.loader_Navigation1
					{
						width:100%;
						height:100%;
						animation:clockLoading 1s linear 500;
						-webkit-animation:clockLoading 1s linear 500;
						-ms-animation:clockLoading 1s linear 500;
						-moz-animation:clockLoading 1s linear 500;
						-o-animation:clockLoading 1s linear 500;
					}
					.loader_Navigation2
					{
						width:80%;
						height:80%;
						animation:anticlockLoading 1s linear 500;
						-webkit-animation:anticlockLoading 1s linear 500;
						-ms-animation:anticlockLoading 1s linear 500;
						-moz-animation:anticlockLoading 1s linear 500;
						-o-animation:anticlockLoading 1s linear 500;
					}
					@keyframes clockLoading
					{
						from{transform:rotate(0deg);-webkit-transform:-webkit-rotate(0deg);-ms-transform:rotate(0deg);-moz-transform:rotate(0deg);-o-transform:rotate(0deg);}
						to{transform:rotate(360deg);-webkit-transform:-webkit-rotate(360deg);-ms-transform:rotate(360deg);-moz-transform:rotate(360deg);-o-transform:rotate(360deg);}
					}
					@keyframes anticlockLoading
					{
						from{transform:translateY(-50%) translateX(-50%) rotate(0deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(0deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(0deg);-o-transform:translateY(-50%) translateX(-50%) rotate(0deg);}
						to{transform:translateY(-50%) translateX(-50%) rotate(-360deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(-360deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(-360deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(-360deg);-o-transform:translateY(-50%) translateX(-50%) rotate(-360deg);}
					}
					@keyframes clockLoadingmin
					{
						from{transform:translateY(-50%) translateX(-50%) rotate(0deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(0deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(0deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(0deg);-o-transform:translateY(-50%) translateX(-50%) rotate(0deg);}
						to{transform:translateY(-50%) translateX(-50%) rotate(360deg);-webkit-transform:-webkit-translateY(-50%) -webkit-translateX(-50%) -webkit-rotate(360deg);-ms-transform:translateY(-50%) translateX(-50%) rotate(360deg);-moz-transform:translateY(-50%) translateX(-50%) rotate(360deg);-o-transform:translateY(-50%) translateX(-50%) rotate(360deg);}
					}
					/*Second Loader*/
					.overlay-loader<?= $Rich_Web_VSlider_ID; ?> { display: block; margin: auto; width: 97px; height: 60px; position: relative; top: 0; left: 0; right: 0; bottom: 0; }
					<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_S == "small") { ?>
						.overlay-loader<?= $Rich_Web_VSlider_ID; ?> { height: 40px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> { width: 49px !important; height: 49px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(2) { width: 3px !important; height: 3px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(3) { width: 9px !important; height: 9px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(4) { width: 14px !important; height: 14px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(5) { width: 19px !important; height: 19px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(6) { width: 24px !important; height: 24px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(7) { width: 28px !important; height: 28px !important; }
					<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_S == "middle") { ?>
						.overlay-loader<?= $Rich_Web_VSlider_ID; ?> { height: 50px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> { width: 67px !important; height: 67px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(2) { width: 8px !important; height: 8px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(3) { width: 14px !important; height: 14px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(4) { width: 20px !important; height: 20px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(5) { width: 26px !important; height: 26px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(6) { width: 32px !important; height: 32px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(7) { width: 38px !important; height: 38px !important; }
					<?php } else { ?>
						.loader<?= $Rich_Web_VSlider_ID; ?> { width: 97px !important; height: 97px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(2) { width: 12px !important; height: 12px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(3) { width: 18px !important; height: 18px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(4) { width: 23px !important; height: 23px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(5) { width: 31px !important; height: 31px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(6) { width: 39px !important; height: 39px !important; }
						.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(7) { width: 49px !important; height: 49px !important; }
					<?php } ?>
					.loader<?= $Rich_Web_VSlider_ID; ?>
					{
						position: absolute;
						top: 0;
						left: 0;
						right: 0;
						bottom: 0;
						margin: auto;
						width: 97px;
						height: 97px;
						animation-name: rotateAnim;
						-o-animation-name: rotateAnim;
						-ms-animation-name: rotateAnim;
						-webkit-animation-name: rotateAnim;
						-moz-animation-name: rotateAnim;
						animation-duration: 0.4s;
						-o-animation-duration: 0.4s;
						-ms-animation-duration: 0.4s;
						-webkit-animation-duration: 0.4s;
						-moz-animation-duration: 0.4s;
						animation-iteration-count: infinite;
						-o-animation-iteration-count: infinite;
						-ms-animation-iteration-count: infinite;
						-webkit-animation-iteration-count: infinite;
						-moz-animation-iteration-count: infinite;
						animation-timing-function: linear;
						-o-animation-timing-function: linear;
						-ms-animation-timing-function: linear;
						-webkit-animation-timing-function: linear;
						-moz-animation-timing-function: linear;
					}
					.loader<?= $Rich_Web_VSlider_ID; ?> div
					{
						width: 8px;
						height: 8px;
						border-radius: 50%;
						border: 1px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_C; ?>;
						position: absolute;
						top: 2px;
						left: 0;
						right: 0;
						bottom: 0;
						margin: auto;
					}
					.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(odd) { border-top: none; border-left: none; }
					.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(even) { border-bottom: none; border-right: none; }
					.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(2) { border-width: 2px; left: 0px; top: -4px; width: 12px; height: 12px; }
					.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(3) { border-width: 2px; left: -1px; top: 3px; width: 18px; height: 18px; }
					.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(4) { border-width: 3px; left: -1px; top: -4px; width: 23px; height: 23px; }
					.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(5) { border-width: 3px; left: -1px; top: 4px; width: 31px; height: 31px; }
					.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(6) { border-width: 4px; left: 0px; top: -4px; width: 39px; height: 39px; }
					.loader<?= $Rich_Web_VSlider_ID; ?> div:nth-child(7) { border-width: 4px; left: 0px; top: 6px; width: 49px; height: 49px; }
					@keyframes rotateAnim { from { transform: rotate(360deg); } to { transform: rotate(0deg); } }
					@-o-keyframes rotateAnim { from { -o-transform: rotate(360deg); } to { -o-transform: rotate(0deg); } }
					@-ms-keyframes rotateAnim { from { -ms-transform: rotate(360deg); } to { -ms-transform: rotate(0deg); } }
					@-webkit-keyframes rotateAnim { from { -webkit-transform: rotate(360deg); } to { -webkit-transform: rotate(0deg); } }
					@-moz-keyframes rotateAnim { from { -moz-transform: rotate(360deg); } to { -moz-transform: rotate(0deg); } }
					/*Third Loader*/
					<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_S == "small") { ?>
						.windows8<?= $Rich_Web_VSlider_ID; ?> { width: 45px !important; height:45px !important; }
						.windows8<?= $Rich_Web_VSlider_ID; ?> .wBall { width: 42px !important; height: 42px !important; }
					<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_S == "middle") { ?>
						.windows8<?= $Rich_Web_VSlider_ID; ?> { width: 60px !important; height:60px !important; }
						.windows8<?= $Rich_Web_VSlider_ID; ?> .wBall { width: 56px !important; height: 56px !important; }
					<?php } else { ?>
						.windows8<?= $Rich_Web_VSlider_ID; ?> { width: 78px !important; height:78px !important; }
						.windows8<?= $Rich_Web_VSlider_ID; ?> .wBall { width: 74px !important; height: 74px !important; }
					<?php } ?>
					.windows8<?= $Rich_Web_VSlider_ID; ?> { position: relative; width: 78px; height:78px; margin:auto; }
					.windows8<?= $Rich_Web_VSlider_ID; ?> .wBall
					{
						position: absolute;
						width: 74px;
						height: 74px;
						opacity: 0;
						transform: rotate(225deg);
						-o-transform: rotate(225deg);
						-ms-transform: rotate(225deg);
						-webkit-transform: rotate(225deg);
						-moz-transform: rotate(225deg);
						animation: orbit 6.96s infinite;
						-o-animation: orbit 6.96s infinite;
						-ms-animation: orbit 6.96s infinite;
						-webkit-animation: orbit 6.96s infinite;
						-moz-animation: orbit 6.96s infinite;
					}
					.windows8<?= $Rich_Web_VSlider_ID; ?> .wBall .wInnerBall
					{
						position: absolute;
						width: 10px;
						height: 10px;
						background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_C; ?>;
						left:0px;
						top:0px;
						border-radius: 10px;
					}
					.windows8<?= $Rich_Web_VSlider_ID; ?> #wBall_1
					{
						animation-delay: 1.52s;
						-o-animation-delay: 1.52s;
						-ms-animation-delay: 1.52s;
						-webkit-animation-delay: 1.52s;
						-moz-animation-delay: 1.52s;
					}
					.windows8<?= $Rich_Web_VSlider_ID; ?> #wBall_2
					{
						animation-delay: 0.3s;
						-o-animation-delay: 0.3s;
						-ms-animation-delay: 0.3s;
						-webkit-animation-delay: 0.3s;
						-moz-animation-delay: 0.3s;
					}
					.windows8<?= $Rich_Web_VSlider_ID; ?> #wBall_3
					{
						animation-delay: 0.61s;
						-o-animation-delay: 0.61s;
						-ms-animation-delay: 0.61s;
						-webkit-animation-delay: 0.61s;
						-moz-animation-delay: 0.61s;
					}
					.windows8<?= $Rich_Web_VSlider_ID; ?> #wBall_4
					{
						animation-delay: 0.91s;
						-o-animation-delay: 0.91s;
						-ms-animation-delay: 0.91s;
						-webkit-animation-delay: 0.91s;
						-moz-animation-delay: 0.91s;
					}
					.windows8<?= $Rich_Web_VSlider_ID; ?> #wBall_5
					{
						animation-delay: 1.22s;
						-o-animation-delay: 1.22s;
						-ms-animation-delay: 1.22s;
						-webkit-animation-delay: 1.22s;
						-moz-animation-delay: 1.22s;
					}
					@keyframes orbit
					{
						0% { opacity: 1; z-index:99; transform: rotate(180deg); animation-timing-function: ease-out; }
						7% { opacity: 1; transform: rotate(300deg); animation-timing-function: linear; transform-origin:0%; }
						30% { opacity: 1; transform: rotate(410deg); animation-timing-function: ease-in-out; transform-origin:7%; }
						39% { opacity: 1; transform: rotate(645deg); animation-timing-function: linear; transform-origin:30%; }
						70% { opacity: 1; transform: rotate(770deg); animation-timing-function: ease-out; transform-origin:39%; }
						75% { opacity: 1; transform: rotate(900deg); animation-timing-function: ease-out; transform-origin:70%; }
						76% { opacity: 0; transform: rotate(900deg); }
						100% { opacity: 0; transform: rotate(900deg); }
					}
					@-o-keyframes orbit
					{
						0% { opacity: 1; z-index:99; -o-transform: rotate(180deg); -o-animation-timing-function: ease-out; }
						7% { opacity: 1; -o-transform: rotate(300deg); -o-animation-timing-function: linear; -o-transform-origin:0%; }
						30% { opacity: 1; -o-transform: rotate(410deg); -o-animation-timing-function: ease-in-out; -o-transform-origin:7%; }
						39% { opacity: 1; -o-transform: rotate(645deg); -o-animation-timing-function: linear; -o-transform-origin:30%; }
						70% { opacity: 1; -o-transform: rotate(770deg); -o-animation-timing-function: ease-out; -o-transform-origin:39%; }
						75% { opacity: 1; -o-transform: rotate(900deg); -o-animation-timing-function: ease-out; -o-transform-origin:70%; }
						76% { opacity: 0; -o-transform: rotate(900deg); }
						100% { opacity: 0; -o-transform: rotate(900deg); }
					}
					@-ms-keyframes orbit
					{
						0% { opacity: 1; z-index:99; -ms-transform: rotate(180deg); -ms-animation-timing-function: ease-out; }
						7% { opacity: 1; -ms-transform: rotate(300deg); -ms-animation-timing-function: linear; -ms-transform-origin:0%; }
						30% { opacity: 1; -ms-transform: rotate(410deg); -ms-animation-timing-function: ease-in-out; -ms-transform-origin:7%; }
						39% { opacity: 1; -ms-transform: rotate(645deg); -ms-animation-timing-function: linear; -ms-transform-origin:30%; }
						70% { opacity: 1; -ms-transform: rotate(770deg); -ms-animation-timing-function: ease-out; -ms-transform-origin:39%; }
						75% { opacity: 1; -ms-transform: rotate(900deg); -ms-animation-timing-function: ease-out; -ms-transform-origin:70%; }
						76% { opacity: 0; -ms-transform: rotate(900deg); }
						100% { opacity: 0; -ms-transform: rotate(900deg); }
					}
					@-webkit-keyframes orbit
					{
						0% { opacity: 1; z-index:99; -webkit-transform: rotate(180deg); -webkit-animation-timing-function: ease-out; }
						7% { opacity: 1; -webkit-transform: rotate(300deg); -webkit-animation-timing-function: linear; -webkit-transform-origin:0%; }
						30% { opacity: 1; -webkit-transform: rotate(410deg); -webkit-animation-timing-function: ease-in-out; -webkit-transform-origin:7%; }
						39% { opacity: 1; -webkit-transform: rotate(645deg); -webkit-animation-timing-function: linear; -webkit-transform-origin:30%; }
						70% { opacity: 1; -webkit-transform: rotate(770deg); -webkit-animation-timing-function: ease-out; -webkit-transform-origin:39%; }
						75% { opacity: 1; -webkit-transform: rotate(900deg); -webkit-animation-timing-function: ease-out; -webkit-transform-origin:70%; }
						76% { opacity: 0; -webkit-transform: rotate(900deg); }
						100% { opacity: 0; -webkit-transform: rotate(900deg); }
					}
					@-moz-keyframes orbit
					{
						0% { opacity: 1; z-index:99; -moz-transform: rotate(180deg); -moz-animation-timing-function: ease-out; }
						7% { opacity: 1; -moz-transform: rotate(300deg); -moz-animation-timing-function: linear; -moz-transform-origin:0%; }
						30% { opacity: 1; -moz-transform: rotate(410deg); -moz-animation-timing-function: ease-in-out; -moz-transform-origin:7%; }
						39% { opacity: 1; -moz-transform: rotate(645deg); -moz-animation-timing-function: linear; -moz-transform-origin:30%; }
						70% { opacity: 1; -moz-transform: rotate(770deg); -moz-animation-timing-function: ease-out; -moz-transform-origin:39%; }
						75% { opacity: 1; -moz-transform: rotate(900deg); -moz-animation-timing-function: ease-out; -moz-transform-origin:70%; }
						76% { opacity: 0; -moz-transform: rotate(900deg); }
						100% { opacity: 0; -moz-transform: rotate(900deg); }
					}
					/*Fourth loader*/
					<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_S == "small") { ?>
						.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> { width: 30px !important; height: 30px !important; }
					<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_S == "middle") { ?>
						.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> { width: 40px !important; height: 40px !important; }
					<?php } else { ?>
						.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> { width: 50px !important; height: 50px !important; }
					<?php } ?>
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?>
					{
						width: 50px;
						height: 50px;
						margin: 20px auto;
						position: relative;
						transform: rotateZ(45deg);
						-o-transform: rotateZ(45deg);
						-ms-transform: rotateZ(45deg);
						-webkit-transform: rotateZ(45deg);
						-moz-transform: rotateZ(45deg);
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-cube
					{
						position: relative;
						transform: rotateZ(45deg);
						-o-transform: rotateZ(45deg);
						-ms-transform: rotateZ(45deg);
						-webkit-transform: rotateZ(45deg);
						-moz-transform: rotateZ(45deg);
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-cube
					{
						float: left;
						width: 50%;
						height: 50%;
						position: relative;
						transform: scale(1.1);
						-o-transform: scale(1.1);
						-ms-transform: scale(1.1);
						-webkit-transform: scale(1.1);
						-moz-transform: scale(1.1);
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-cube:before
					{
						content: "";
						position: absolute;
						top: 0;
						left: 0;
						width: 100%;
						height: 100%;
						background-color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_L_C; ?>;
						animation: cssload-fold-thecube 2.76s infinite linear both;
						-o-animation: cssload-fold-thecube 2.76s infinite linear both;
						-ms-animation: cssload-fold-thecube 2.76s infinite linear both;
						-webkit-animation: cssload-fold-thecube 2.76s infinite linear both;
						-moz-animation: cssload-fold-thecube 2.76s infinite linear both;
						transform-origin: 100% 100%;
						-o-transform-origin: 100% 100%;
						-ms-transform-origin: 100% 100%;
						-webkit-transform-origin: 100% 100%;
						-moz-transform-origin: 100% 100%;
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-c2
					{
						transform: scale(1.1) rotateZ(90deg);
						-o-transform: scale(1.1) rotateZ(90deg);
						-ms-transform: scale(1.1) rotateZ(90deg);
						-webkit-transform: scale(1.1) rotateZ(90deg);
						-moz-transform: scale(1.1) rotateZ(90deg);
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-c3
					{
						transform: scale(1.1) rotateZ(180deg);
						-o-transform: scale(1.1) rotateZ(180deg);
						-ms-transform: scale(1.1) rotateZ(180deg);
						-webkit-transform: scale(1.1) rotateZ(180deg);
						-moz-transform: scale(1.1) rotateZ(180deg);
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-c4
					{
						transform: scale(1.1) rotateZ(270deg);
						-o-transform: scale(1.1) rotateZ(270deg);
						-ms-transform: scale(1.1) rotateZ(270deg);
						-webkit-transform: scale(1.1) rotateZ(270deg);
						-moz-transform: scale(1.1) rotateZ(270deg);
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-c2:before
					{
						animation-delay: 0.35s;
						-o-animation-delay: 0.35s;
						-ms-animation-delay: 0.35s;
						-webkit-animation-delay: 0.35s;
						-moz-animation-delay: 0.35s;
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-c3:before
					{
						animation-delay: 0.69s;
						-o-animation-delay: 0.69s;
						-ms-animation-delay: 0.69s;
						-webkit-animation-delay: 0.69s;
						-moz-animation-delay: 0.69s;
					}
					.cssload-thecube<?= $Rich_Web_VSlider_ID; ?> .cssload-c4:before
					{
						animation-delay: 1.04s;
						-o-animation-delay: 1.04s;
						-ms-animation-delay: 1.04s;
						-webkit-animation-delay: 1.04s;
						-moz-animation-delay: 1.04s;
					}
					@keyframes cssload-fold-thecube
					{
						0%, 10% { transform: perspective(136px) rotateX(-180deg); opacity: 0; }
						25%, 75% { transform: perspective(136px) rotateX(0deg); opacity: 1; }
						90%, 100% { transform: perspective(136px) rotateY(180deg); opacity: 0; }
					}
					@-o-keyframes cssload-fold-thecube
					{
						0%, 10% { -o-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
						25%, 75% { -o-transform: perspective(136px) rotateX(0deg); opacity: 1; }
						90%, 100% { -o-transform: perspective(136px) rotateY(180deg); opacity: 0; }
					}
					@-ms-keyframes cssload-fold-thecube
					{
						0%, 10% { -ms-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
						25%, 75% { -ms-transform: perspective(136px) rotateX(0deg); opacity: 1; }
						90%, 100% { -ms-transform: perspective(136px) rotateY(180deg); opacity: 0; }
					}
					@-webkit-keyframes cssload-fold-thecube
					{
						0%, 10% { -webkit-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
						25%, 75% { -webkit-transform: perspective(136px) rotateX(0deg); opacity: 1; }
						90%, 100% { -webkit-transform: perspective(136px) rotateY(180deg); opacity: 0; }
					}
					@-moz-keyframes cssload-fold-thecube
					{
						0%, 10% { -moz-transform: perspective(136px) rotateX(-180deg); opacity: 0; }
						25%, 75% { -moz-transform: perspective(136px) rotateX(0deg); opacity: 1; }
						90%, 100% { -moz-transform: perspective(136px) rotateY(180deg); opacity: 0; }
					}
					/*First Text*/
					.cssload-loader<?= $Rich_Web_VSlider_ID; ?>
					{
						width: 244px;
						height: 49px;
						line-height: 49px;
						text-align: center;
						position: relative;
						left: 50%;
						transform: translate(-50%, 0%);
						-o-transform: translate(-50%, 0%);
						-ms-transform: translate(-50%, 0%);
						-webkit-transform: translate(-50%, 0%);
						-moz-transform: translate(-50%, 0%);
						font-family: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FF; ?> !important;
						text-transform: none !important;
						font-weight: 900;
						font-size:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FS; ?>px !important;
						color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important;
						letter-spacing: 0.2em;
						margin-top:10px;
					}
					.cssload-loader<?= $Rich_Web_VSlider_ID; ?>::before, .cssload-loader<?= $Rich_Web_VSlider_ID; ?>::after
					{
						content: "";
						display: block;
						width: 15px;
						height: 15px;
						background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T2_BC; ?> !important;
						position: absolute;
						animation: cssload-load 0.81s infinite alternate ease-in-out;
						-o-animation: cssload-load 0.81s infinite alternate ease-in-out;
						-ms-animation: cssload-load 0.81s infinite alternate ease-in-out;
						-webkit-animation: cssload-load 0.81s infinite alternate ease-in-out;
						-moz-animation: cssload-load 0.81s infinite alternate ease-in-out;
					}
					.cssload-loader<?= $Rich_Web_VSlider_ID; ?>::before { top: 0; }
					.cssload-loader<?= $Rich_Web_VSlider_ID; ?>::after { bottom: 0; }
					@keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
					@-o-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
					@-ms-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
					@-moz-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
					@-webkit-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
					/*Second*/
					#inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?> { width:100%; margin:auto; text-align:center; }
					.inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>
					{
						font-size: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FS; ?>px !important;
						font-family:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FF; ?> !important;
						color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important;
						text-decoration:none;
						font-weight:normal;
						font-style:normal;
						display:inline-block;
						animation-name:bounce_inTurnFadingTextG;
						-o-animation-name:bounce_inTurnFadingTextG;
						-ms-animation-name:bounce_inTurnFadingTextG;
						-webkit-animation-name:bounce_inTurnFadingTextG;
						-moz-animation-name:bounce_inTurnFadingTextG;
						animation-duration:2.09s;
						-o-animation-duration:2.09s;
						-ms-animation-duration:2.09s;
						-webkit-animation-duration:2.09s;
						-moz-animation-duration:2.09s;
						animation-iteration-count:infinite;
						-o-animation-iteration-count:infinite;
						-ms-animation-iteration-count:infinite;
						-webkit-animation-iteration-count:infinite;
						-moz-animation-iteration-count:infinite;
						animation-direction:normal;
						-o-animation-direction:normal;
						-ms-animation-direction:normal;
						-webkit-animation-direction:normal;
						-moz-animation-direction:normal;
					}
					<?php foreach($text_array as $key=>$v) { ?>
						#inTurnFadingTextG<?= $Rich_Web_VSlider_ID; ?>_<?php Print $key+1; ?>
						{
							animation-delay:<?php Print $anim_sum; ?>s !important;
							-o-animation-delay:<?php Print $anim_sum; ?>s !important;
							-ms-animation-delay:<?php Print $anim_sum; ?>s !important;
							-webkit-animation-delay:<?php Print $anim_sum; ?>s !important;
							-moz-animation-delay:<?php Print $anim_sum; ?>s !important;
						}
						<?php $anim_sum=$anim_sum+0.15; ?>
					<?php } ?>
					@keyframes bounce_inTurnFadingTextG
					{
						0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T2_AnC; ?>; }
						100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important; }
					}
					@-o-keyframes bounce_inTurnFadingTextG
					{
						0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T2_AnC; ?>; }
						100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important; }
					}
					@-ms-keyframes bounce_inTurnFadingTextG
					{
						0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T2_AnC; ?>; }
						100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important; }
					}
					@-webkit-keyframes bounce_inTurnFadingTextG
					{
						0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T2_AnC; ?>; }
						100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important; }
					}
					@-moz-keyframes bounce_inTurnFadingTextG
					{
						0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T2_AnC; ?>; }
						100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important; }
					}
					/*Third text*/
					.cssload-preloader<?= $Rich_Web_VSlider_ID; ?> { position: relative; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 10; }
					.cssload-preloader<?= $Rich_Web_VSlider_ID; ?> > .cssload-preloader<?= $Rich_Web_VSlider_ID; ?>-box
					{
						position: relative;
						display:inline-block;
						margin-left:10px;
						margin-top:20px;
						height: 29px;
						left:50%;
						transform:translateX(-50%) !important;
						-webkit-transform:translateX(-50%) !important;
						-ms-transform:translateX(-50%) !important;
						-moz-transform:translateX(-50%) !important;
						-o-transform:translateX(-50%) !important;
						perspective: 195px;
						-o-perspective: 195px;
						-ms-perspective: 195px;
						-webkit-perspective: 195px;
						-moz-perspective: 195px;
					}
					.cssload-preloader<?= $Rich_Web_VSlider_ID; ?> .cssload-preloader<?= $Rich_Web_VSlider_ID; ?>-box > div
					{
						position: relative;
						width: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FS*2; ?>px;
						height: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FS*2; ?>px;
						background: rgb(204,204,204);
						float: left;
						text-align: center;
						line-height: 2;
						font-size: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FS; ?>px !important;
						font-family:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FF; ?> !important;
						color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_C; ?> !important;
					}
					<?php foreach($text_array as $key=>$v) { ?>
						.cssload-preloader<?= $Rich_Web_VSlider_ID; ?> .cssload-preloader<?= $Rich_Web_VSlider_ID; ?>-box > div:nth-child(<?php Print $key+1; ?>)
						{
							background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?> !important;
							margin-right: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_FS; ?>px !important;
							animation: cssload-movement<?= $Rich_Web_VSlider_ID; ?> 690ms ease <?php Print $str_sum; ?>ms infinite alternate;
							-o-animation: cssload-movement<?= $Rich_Web_VSlider_ID; ?> 690ms ease <?php Print $str_sum; ?>ms infinite alternate;
							-ms-animation: cssload-movement<?= $Rich_Web_VSlider_ID; ?> 690ms ease <?php Print $str_sum; ?>ms infinite alternate;
							-webkit-animation: cssload-movement<?= $Rich_Web_VSlider_ID; ?> 690ms ease <?php Print $str_sum; ?>ms infinite alternate;
							-moz-animation: cssload-movement<?= $Rich_Web_VSlider_ID; ?> 690ms ease <?php Print $str_sum; ?>ms infinite alternate;
						}
						<?php $str_sum=$str_sum+86.25; ?>
					<?php } ?>
					@keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
					{
						from { transform: scale(1.0) translateY(0px) rotateX(0deg); box-shadow: 0 0 0 rgba(0,0,0,0); }
						to {
							transform: scale(1.5) translateY(-24px) rotateX(45deg);
							box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?>;
							background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?> !important;
						}
					}
					@-o-keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
					{
						from { -o-transform: scale(1.0) translateY(0px) rotateX(0deg); -o-box-shadow: 0 0 0 rgba(0,0,0,0); }
						to {
							-o-transform: scale(1.5) translateY(-24px) rotateX(45deg);
							-o-box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?>;
							background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?> !important;
						}
					}
					@-ms-keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
					{
						from { -ms-transform: scale(1.0) translateY(0px) rotateX(0deg); -ms-box-shadow: 0 0 0 rgba(0,0,0,0); }
						to {
							-ms-transform: scale(1.5) translateY(-24px) rotateX(45deg);
							-ms-box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?>;
							background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?> !important;
						}
					}
					@-webkit-keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
					{
						from { -webkit-transform: scale(1.0) translateY(0px) rotateX(0deg); -webkit-box-shadow: 0 0 0 rgba(0,0,0,0); }
						to {
							-webkit-transform: scale(1.5) translateY(-24px) rotateX(45deg);
							-webkit-box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?>;
							background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?> !important;
						}
					}
					@-moz-keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
					{
						from { -moz-transform: scale(1.0) translateY(0px) rotateX(0deg); -moz-box-shadow: 0 0 0 rgba(0,0,0,0); }
						to {
							-moz-transform: scale(1.5) translateY(-24px) rotateX(45deg);
							-moz-box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?>;
							background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT_T3_BgC; ?> !important;
						}
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?>
					{
						width:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_W;?>px;
						height:auto !important;
						max-width:100% !important;
						border: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BW;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BS;?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BC;?> !important;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #gallery-main<?= $Rich_Web_VSlider_ID; ?>
					{
						margin: 0 auto;
						padding: 0;
						z-index: 0;
						position: relative;
						cursor: pointer;
						width:100% !important;
					}
					#gallery-main<?= $Rich_Web_VSlider_ID; ?> img { height: 100%; width: 100%; }
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #gallery-hidden<?= $Rich_Web_VSlider_ID; ?> { margin: 0; padding: 0; position: absolute; display: none; z-index: -1; }
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> { height: 132px; z-index: 10; opacity: 0.9; position: relative; margin: 0 auto; }
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?>:hover
					{
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #thumbcon<?= $Rich_Web_VSlider_ID; ?>
					{
						height: 100%;
						display: inline-block;
						margin: 0;
						overflow: hidden;
						white-space: nowrap;
						float: left;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #thumbcon<?= $Rich_Web_VSlider_ID; ?> .thumb:hover
					{
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #thumbcon<?= $Rich_Web_VSlider_ID; ?> .selected
					{
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .ui-button
					{
						width: 32px;
						height: 32px;
						opacity: 0.60;
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .ui-button:hover
					{
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
						opacity: 1;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #left-arrow<?= $Rich_Web_VSlider_ID; ?>
					{
						position:relative;
						margin-left: 1px;
						margin-right: 1px;
						display: inline-block;
						width:25px !important;
						height:25px !important;
						float: left;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #right-arrow<?= $Rich_Web_VSlider_ID; ?>
					{
						position:relative;
						width:25px !important;
						height:25px !important;
						margin-right: 1px;
						margin-left: 1px;
						display: inline-block;
						float: right;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon
					{
						position:absolute;
						display: inline-block;
						width: 100%;
						height: 100%;
						top:0%;
						left:0%;
						background-repeat: no-repeat;
						cursor: pointer;
						z-index: 22;
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon-play
					{
						background: url(<?= plugin_dir_url(__DIR__).'Images/play.png';?>) no-repeat center center;
						background-size:50% 50%;
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon:after,#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon:before
					{
						content:"";
						background:none !important;
						border:none !important;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon-pause
					{
						background: url(<?= plugin_dir_url(__DIR__).'Images/stop.png';?>) no-repeat center center;
						background-size:50% 50%;
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon-arrow-right
					{
						background: url(<?= plugin_dir_url(__DIR__).'Images/next.png';?>) no-repeat center center;
						background-size:75% 45%;
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon-arrow-left
					{
						background: url(<?= plugin_dir_url(__DIR__).'Images/prev.png';?>) no-repeat center center;
						background-size:75% 45%;
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #gallery-main<?= $Rich_Web_VSlider_ID; ?>
					{
						width: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_W;?>px;
						box-sizing:border-box !important;
						-moz-box-sizing:border-box !important;
						-webkit-box-sizing:border-box !important;
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos=='top'){ ?>
							border-top:none;
						<?php }else{ ?>
							border-bottom:none;
						<?php }?>
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShShow=='on'){ ?>
							<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShType=='on' && $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos=='top'){ ?>
								-webkit-box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
								-moz-box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
								box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
							<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShType==''){ ?>
								-webkit-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
								-moz-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
								box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
							<?php }?>
						<?php }?>
					}
					#gallery-main<?= $Rich_Web_VSlider_ID; ?>_Anim { position:absolute !important; top:0px !important; left:0px !important; width:100% !important; }
					#gallery-con<?= $Rich_Web_VSlider_ID; ?>
					{
						margin: 20px auto;
						padding: 0;
						border: 1px solid rgba(0, 0, 0, 0);
						position: relative;
						box-sizing:border-box !important;
						-moz-box-sizing:border-box !important;
						-webkit-box-sizing:border-box !important;
						width: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_W;?>px;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?>
					{
						display:-webkit-flex;
						display:flex;
						justify-content: center;
						align-items: center;
						position:relative;
						width: 100% !important;
						height:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIH+24;?>px;
						box-sizing:border-box !important;
						-moz-box-sizing:border-box !important;
						-webkit-box-sizing:border-box !important;
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos=='top'){ ?>
							border-bottom: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TBW;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TBS;?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TBC;?>;
						<?php }else{ ?>
							border-top: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TBW;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TBS;?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TBC;?>;
						<?php }?>
						background: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TBgC;?>;
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShShow=='on'){ ?>
							<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShType=='on' && $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos=='bottom'){ ?>
								-webkit-box-shadow:  0 <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= -$Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh/2;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
								-moz-box-shadow: 0 <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= -$Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh/2;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
								box-shadow:  0 <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= -$Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh/2;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
							<?php }else if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShType==''){ ?>
								-webkit-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
								-moz-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
								box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_BoxShC;?>;
							<?php }?>
						<?php }?>
					}
					.Rich_Web_VSlider_TS_Src_Iframe<?= $Rich_Web_VSlider_ID; ?>
					{
						border:none !important;
						border-bottom:none !important;
						box-sizing:border-box !important;
						-moz-box-sizing:border-box !important;
						-webkit-box-sizing:border-box !important;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #thumbcon<?= $Rich_Web_VSlider_ID; ?>
					{
						width: calc(100% - 58px) !important;
					}
					<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos=='top'){ ?>
						#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #playtoggle<?= $Rich_Web_VSlider_ID; ?>
						{
							position: absolute;
							top: 140px;
							right: 10px;
						}
					<?php }else{ ?>
						#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #playtoggle<?= $Rich_Web_VSlider_ID; ?>
						{
							position: absolute;
							top: -40px;
							right: 10px;
						}
					<?php }?>
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .ui-button
					{
						background: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBgC;?>;
						border: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBW;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBS;?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBC;?>;
						-moz-border-radius: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBR;?>px;
						-webkit-border-radius: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBR;?>px;
						-o-border-radius: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBR;?>px;
						-ms-border-radius: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBR;?>px;
						-khtml-border-radius: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBR;?>px;
						border-radius: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_IBR;?>px;
					}

					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #thumbcon<?= $Rich_Web_VSlider_ID; ?> .thumb
					{
						position:relative;
						box-sizing: border-box !important;
						object-fit: cover !important;
						margin: 12px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIPB;?>px;
						border: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBW;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBS;?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBC;?>;
						border-radius: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBR;?>px;
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShShow=='on'){ ?>
							<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShType=='on'){ ?>
								-webkit-box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShC;?>;
								-moz-box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShC;?>;
								box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShC;?>;
							<?php }else{ ?>
								-webkit-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShC;?>;
								-moz-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShC;?>;
								box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShC;?>;
							<?php }?>
						<?php }?>
						width: auto;
						height: 0px;
						display: inline;
						opacity: 1;
						-moz-transition: all 0.5s ease;
						-webkit-transition: all 0.5s ease;
						-o-transition: all 0.5s ease;
						transition: all 0.5s ease;
						cursor: pointer;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #thumbcon<?= $Rich_Web_VSlider_ID; ?> .thumb:hover
					{
						border-color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIHBC;?>;
						border-style: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIHBS;?>;
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShShow=='on'){ ?>
							<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShType=='on'){ ?>
								-webkit-box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIHBoxShC;?>;
								-moz-box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIHBoxShC;?>;
								box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIHBoxShC;?>;
							<?php }else{ ?>
								-webkit-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIHBoxShC;?>;
								-moz-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIHBoxShC;?>;
								box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIHBoxShC;?>;
							<?php }?>
						<?php }?>
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #thumbcon<?= $Rich_Web_VSlider_ID; ?> .selected
					{
						box-shadow:none !important;
						transition: all 0.5s ease 0s!important;
						border-color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TICBC;?>;
						border-style: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TICBS;?>;
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShShow=='on'){ ?>
							<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxShType=='on'){ ?>
								-webkit-box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TICBoxShC;?>;
								-moz-box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TICBoxShC;?>;
								box-shadow: 0 38px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TICBoxShC;?>;
							<?php }else{ ?>
								-webkit-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TICBoxShC;?>;
								-moz-box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TICBoxShC;?>;
								box-shadow: 0px 0px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TIBoxSh;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TICBoxShC;?>;
							<?php }?>
						<?php }?>
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?> .Rich_Web_TS_Play_Video_Div<?= $Rich_Web_VSlider_ID; ?>
					{
						height: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_H;?>px;
						width: 100% !important;
						margin: 0 auto;
						position: absolute;
						left: 0;
						right: 0;
						<?php if($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_TPos=='top'){ ?>
							bottom: 0;
						<?php }else{ ?>
							top: 0;
						<?php }?>
						display: none;
						z-index: 9999;
					}
					.Rich_Web_VSlider_TS_PlayIcon<?= $Rich_Web_VSlider_ID; ?>
					{
						position: absolute;
						top:50% !important;
						transform:translateY(-50%) !important;
						-webkit-transform:translateY(-50%) !important;
						-ms-transform:translateY(-50%) !important;
						-moz-transform:translateY(-50%) !important;
						-o-transform:translateY(-50%) !important;
						left: 0;
						width: 100%;
						height: 50px;
						z-index: 2;
						text-align: center;
					}
					.Rich_Web_VSlider_TS_PlayIcon<?= $Rich_Web_VSlider_ID; ?> span
					{
						display: block;
						text-align:center;
						width: 80px;
						height: 50px;
						line-height: 50px;
						margin: 0 auto;
						background-color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_PIBgC;?>;
						color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_PIC;?>;
						border-radius: 10px;
						cursor: pointer;
					}
					#gallery-con<?= $Rich_Web_VSlider_ID; ?>:hover .Rich_Web_VSlider_TS_PlayIcon<?= $Rich_Web_VSlider_ID; ?> span
					{
						background-color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_PIHBgC;?>;
						color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_TS_PIHC;?>;
					}
					@media screen and (max-width:820px){
						#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon,#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> .icon-arrow-left,.Rich_Web_VSlider_TS_PlayIcon<?= $Rich_Web_VSlider_ID; ?> span,#gallery-con<?= $Rich_Web_VSlider_ID; ?> #thumbnails<?= $Rich_Web_VSlider_ID; ?> #thumbcon<?= $Rich_Web_VSlider_ID; ?> .thumb{
							cursor:default !important;
						}
					}
</style>