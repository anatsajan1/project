<?php 
$Rich_Web_VS_CS_AP = ($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_AP=='on') ?  true : false; 
$Rich_Web_VS_CS_HP = ($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_HP=='on') ?  true : false; 
$Rich_Web_VS_CS_RS = ($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_RS=='on') ?  true : false; 
?>
<style type="text/css">
 @import url('https://fonts.googleapis.com/css?family=Ubuntu:regular,italic,bold,bolditalic&subset=cyrillic,greek,latin');
 * { padding: 0px; margin: 0px; }
 .clear { clear: both; padding: 0px; margin: 0px; height: 0px; }
 a { text-decoration: none; cursor: pointer; color: #d0d9de; }
 a:hover { color: #FFF; }
.center_content_VS<?= $Rich_Web_VSlider_ID;?>
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
#RW_Load_Content_Navigation_VS<?= $Rich_Web_VSlider_ID;?>
{
	position:relative !important;
	margin:20px auto !important;
	background-color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_BgC;?> !important;
	z-index:999;
	max-width:100% !important;
	width:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SL_Width;?>px;
	padding-bottom:<?= ($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SL_Height)/($Rich_Web_VSlider_Eff[0]->Rich_Web_VS_SL_Width)*100;?>%;
	margin:40px auto;
}
<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_S == "small") { ?>
	.RW_Loader_Frame_Navigation_VS<?= $Rich_Web_VSlider_ID;?> { width:45px !important; height:45px !important; }
	.loader_Navigation1_VS<?= $Rich_Web_VSlider_ID; ?>
	{
		border-top: 3px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T1_C;?> !important;
		border-bottom: 3px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T1_C;?> !important;
	}
	.loader_Navigation2_VS<?= $Rich_Web_VSlider_ID; ?>
	{
		border-top: 3px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T2_C; ?> !important;
		border-bottom: 3px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T2_C; ?> !important;
	}
	.loader_Navigation3_VS<?= $Rich_Web_VSlider_ID; ?>
	{
		border-top:12px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		border-bottom:12px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		border-right:12px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		width:50% !important;
		height:50%!important;
	}
<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_S == "middle") { ?>
	.RW_Loader_Frame_Navigation_VS<?= $Rich_Web_VSlider_ID; ?> { width:60px !important; height:60px !important; }
	.loader_Navigation1_VS<?= $Rich_Web_VSlider_ID; ?>
	{
		border-top: 4px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T1_C; ?> !important;
		border-bottom: 4px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T1_C; ?> !important;
	}
	.loader_Navigation2_VS<?= $Rich_Web_VSlider_ID; ?>
	{
		border-top: 4px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T2_C; ?> !important;
		border-bottom: 4px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T2_C; ?> !important;
	}
	.loader_Navigation3_VS<?= $Rich_Web_VSlider_ID; ?>
	{
		border-top:17px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		border-bottom:17px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		border-right:17px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		width:55% !important;
		height:55%!important;
	}
<?php } else { ?>
	.RW_Loader_Frame_Navigation_VS<?= $Rich_Web_VSlider_ID; ?> { width:80px !important; height:80px !important; }
	.loader_Navigation1_VS<?= $Rich_Web_VSlider_ID; ?>
	{
		border-top: 5px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T1_C; ?> !important;
		border-bottom: 5px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T1_C; ?> !important;
	}
	.loader_Navigation2_VS<?= $Rich_Web_VSlider_ID; ?>
	{
		border-top: 5px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T2_C; ?> !important;
		border-bottom: 5px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T2_C; ?> !important;
	}
	.loader_Navigation3_VS<?= $Rich_Web_VSlider_ID; ?>{
		border-top:25px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		border-bottom:25px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		border-right:25px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_T3_C; ?> !important;
		width:60% !important;
		height:60%!important;
	}
<?php } ?>
.RW_Loader_Frame_Navigation_VS
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
.RW_Loader_Text_Navigation_VS<?= $Rich_Web_VSlider_ID; ?>
{
	position:relative;
	text-align:center;
	margin-top:10px;
	font-size: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FS; ?>px !important;
	font-family:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FF; ?> !important;
	color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important;
}
.loader_Navigation1_VS,.loader_Navigation2_VS,.loader_Navigation3_VS,.loader_Navigation4_VS { position:absolute; border:5px solid transparent; border-radius:50%; }
.loader_Navigation1_VS<?= $Rich_Web_VSlider_ID; ?>
{
	box-sizing:border-box;
	-webkit-box-sizing:border-box;
	-ms-box-sizing:border-box;
	-moz-box-sizing:border-box;
	-o-box-sizing:border-box;
}
.loader_Navigation2_VS<?= $Rich_Web_VSlider_ID; ?>
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
.loader_Navigation3_VS<?= $Rich_Web_VSlider_ID; ?>
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
.loader_Navigation1_VS
{
	width:100%;
	height:100%;
	animation:clockLoading 1s linear 500;
	-webkit-animation:clockLoading 1s linear 500;
	-ms-animation:clockLoading 1s linear 500;
	-moz-animation:clockLoading 1s linear 500;
	-o-animation:clockLoading 1s linear 500;
}
.loader_Navigation2_VS
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
.overlay-loader_VS<?= $Rich_Web_VSlider_ID; ?> { display: block; margin: auto; width: 97px; height: 60px; position: relative; top: 0; left: 0; right: 0; bottom: 0; }
<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_S == "small") { ?>
	.overlay-loader_VS<?= $Rich_Web_VSlider_ID; ?> { height: 40px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> { width: 49px !important; height: 49px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(2) { width: 3px !important; height: 3px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(3) { width: 9px !important; height: 9px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(4) { width: 14px !important; height: 14px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(5) { width: 19px !important; height: 19px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(6) { width: 24px !important; height: 24px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(7) { width: 28px !important; height: 28px !important; }
<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_S == "middle") { ?>
	.overlay-loader_VS<?= $Rich_Web_VSlider_ID; ?> { height: 50px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> { width: 67px !important; height: 67px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(2) { width: 8px !important; height: 8px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(3) { width: 14px !important; height: 14px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(4) { width: 20px !important; height: 20px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(5) { width: 26px !important; height: 26px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(6) { width: 32px !important; height: 32px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(7) { width: 38px !important; height: 38px !important; }
<?php } else { ?>
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> { width: 97px !important; height: 97px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(2) { width: 12px !important; height: 12px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(3) { width: 18px !important; height: 18px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(4) { width: 23px !important; height: 23px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(5) { width: 31px !important; height: 31px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(6) { width: 39px !important; height: 39px !important; }
	.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(7) { width: 49px !important; height: 49px !important; }
<?php } ?>
.loader_VS<?= $Rich_Web_VSlider_ID; ?>
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
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div
{
	width: 8px;
	height: 8px;
	border-radius: 50%;
	border: 1px solid <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_C; ?>;
	position: absolute;
	top: 2px;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
}
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(odd) { border-top: none; border-left: none; }
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(even) { border-bottom: none; border-right: none; }
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(2) { border-width: 2px; left: 0px; top: -4px; width: 12px; height: 12px; }
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(3) { border-width: 2px; left: -1px; top: 3px; width: 18px; height: 18px; }
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(4) { border-width: 3px; left: -1px; top: -4px; width: 23px; height: 23px; }
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(5) { border-width: 3px; left: -1px; top: 4px; width: 31px; height: 31px; }
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(6) { border-width: 4px; left: 0px; top: -4px; width: 39px; height: 39px; }
.loader_VS<?= $Rich_Web_VSlider_ID; ?> div:nth-child(7) { border-width: 4px; left: 0px; top: 6px; width: 49px; height: 49px; }
@keyframes rotateAnim { from { transform: rotate(360deg); } to { transform: rotate(0deg); } }
@-o-keyframes rotateAnim { from { -o-transform: rotate(360deg); } to { -o-transform: rotate(0deg); } }
@-ms-keyframes rotateAnim { from { -ms-transform: rotate(360deg); } to { -ms-transform: rotate(0deg); } }
@-webkit-keyframes rotateAnim { from { -webkit-transform: rotate(360deg); } to { -webkit-transform: rotate(0deg); } }
@-moz-keyframes rotateAnim { from { -moz-transform: rotate(360deg); } to { -moz-transform: rotate(0deg); } }
/*Third loader_VS*/
<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_S == "small") { ?>
	.windows8_VS<?= $Rich_Web_VSlider_ID; ?> { width: 45px !important; height:45px !important; }
	.windows8_VS<?= $Rich_Web_VSlider_ID; ?> .wBall { width: 42px !important; height: 42px !important; }
<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_S == "middle") { ?>
	.windows8_VS<?= $Rich_Web_VSlider_ID; ?> { width: 60px !important; height:60px !important; }
	.windows8_VS<?= $Rich_Web_VSlider_ID; ?> .wBall { width: 56px !important; height: 56px !important;}
<?php } else { ?>
	.windows8_VS<?= $Rich_Web_VSlider_ID; ?> { width: 78px !important; height:78px !important; }
	.windows8_VS<?= $Rich_Web_VSlider_ID; ?> .wBall { width: 74px !important; height: 74px !important; }
<?php } ?>
.windows8_VS<?= $Rich_Web_VSlider_ID; ?> { position: relative; width: 78px; height:78px; margin:auto; }
.windows8_VS<?= $Rich_Web_VSlider_ID; ?> .wBall
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
.windows8_VS<?= $Rich_Web_VSlider_ID; ?> .wBall .wInnerBall
{
	position: absolute;
	width: 10px;
	height: 10px;
	background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_C; ?>;
	left:0px;
	top:0px;
	border-radius: 10px;
}
.windows8_VS<?= $Rich_Web_VSlider_ID; ?> #wBall_1
{
	animation-delay: 1.52s;
	-o-animation-delay: 1.52s;
	-ms-animation-delay: 1.52s;
	-webkit-animation-delay: 1.52s;
	-moz-animation-delay: 1.52s;
}
.windows8_VS<?= $Rich_Web_VSlider_ID; ?> #wBall_2
{
	animation-delay: 0.3s;
	-o-animation-delay: 0.3s;
	-ms-animation-delay: 0.3s;
	-webkit-animation-delay: 0.3s;
	-moz-animation-delay: 0.3s;
}
.windows8_VS<?= $Rich_Web_VSlider_ID; ?> #wBall_3
{
	animation-delay: 0.61s;
	-o-animation-delay: 0.61s;
	-ms-animation-delay: 0.61s;
	-webkit-animation-delay: 0.61s;
	-moz-animation-delay: 0.61s;
}
.windows8_VS<?= $Rich_Web_VSlider_ID; ?> #wBall_4
{
	animation-delay: 0.91s;
	-o-animation-delay: 0.91s;
	-ms-animation-delay: 0.91s;
	-webkit-animation-delay: 0.91s;
	-moz-animation-delay: 0.91s;
}
.windows8_VS<?= $Rich_Web_VSlider_ID; ?> #wBall_5
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
	76% { opacity: 0; -webkit-transform:rotate(900deg); }
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
<?php if($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_S == "small") { ?>
	.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> { width: 30px !important; height: 30px !important; }
<?php } elseif($Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_S == "middle") { ?>
	.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> { width: 40px !important; height: 40px !important; }
<?php } else { ?>
	.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> { width: 50px !important; height: 50px !important; }
<?php } ?>
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?>
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
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-cube
{
	position: relative;
	transform: rotateZ(45deg);
	-o-transform: rotateZ(45deg);
	-ms-transform: rotateZ(45deg);
	-webkit-transform: rotateZ(45deg);
	-moz-transform: rotateZ(45deg);
}
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-cube
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
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-cube:before
{
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	background-color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_L_C; ?>;
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
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-c2
{
	transform: scale(1.1) rotateZ(90deg);
	-o-transform: scale(1.1) rotateZ(90deg);
	-ms-transform: scale(1.1) rotateZ(90deg);
	-webkit-transform: scale(1.1) rotateZ(90deg);
	-moz-transform: scale(1.1) rotateZ(90deg);
}
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-c3
{
	transform: scale(1.1) rotateZ(180deg);
	-o-transform: scale(1.1) rotateZ(180deg);
	-ms-transform: scale(1.1) rotateZ(180deg);
	-webkit-transform: scale(1.1) rotateZ(180deg);
	-moz-transform: scale(1.1) rotateZ(180deg);
}
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-c4
{
	transform: scale(1.1) rotateZ(270deg);
	-o-transform: scale(1.1) rotateZ(270deg);
	-ms-transform: scale(1.1) rotateZ(270deg);
	-webkit-transform: scale(1.1) rotateZ(270deg);
	-moz-transform: scale(1.1) rotateZ(270deg);
}
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-c2:before
{
	animation-delay: 0.35s;
	-o-animation-delay: 0.35s;
	-ms-animation-delay: 0.35s;
	-webkit-animation-delay: 0.35s;
	-moz-animation-delay: 0.35s;
}
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-c3:before
{
	animation-delay: 0.69s;
	-o-animation-delay: 0.69s;
	-ms-animation-delay: 0.69s;
	-webkit-animation-delay: 0.69s;
	-moz-animation-delay: 0.69s;
}
.cssload-thecube_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-c4:before
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
.cssload-loader_VS<?= $Rich_Web_VSlider_ID; ?>
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
	font-family: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FF; ?> !important;
	text-transform: none !important;
	font-weight: 900;
	font-size:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FS; ?>px !important;
	color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important;
	letter-spacing: 0.2em;
	margin-top:10px;
}
.cssload-loader_VS<?= $Rich_Web_VSlider_ID; ?>::before, .cssload-loader_VS<?= $Rich_Web_VSlider_ID; ?>::after
{
	content: "";
	display: block;
	width: 15px;
	height: 15px;
	background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T2_BC; ?> !important;
	position: absolute;
	animation: cssload-load 0.81s infinite alternate ease-in-out;
	-o-animation: cssload-load 0.81s infinite alternate ease-in-out;
	-ms-animation: cssload-load 0.81s infinite alternate ease-in-out;
	-webkit-animation: cssload-load 0.81s infinite alternate ease-in-out;
	-moz-animation: cssload-load 0.81s infinite alternate ease-in-out;
}
.cssload-loader_VS<?= $Rich_Web_VSlider_ID; ?>::before { top: 0; }
.cssload-loader_VS<?= $Rich_Web_VSlider_ID; ?>::after { bottom: 0; }
@keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
@-o-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
@-ms-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
@-webkit-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
@-moz-keyframes cssload-load { 0% { left: 0; height: 29px; width: 15px; } 50% { height: 8px; width: 39px; } 100% { left: 229px; height: 29px; width: 15px; } }
/*Second*/
#inTurnFadingTextG_VS<?= $Rich_Web_VSlider_ID; ?> { width:100%; margin:auto; text-align:center; }
.inTurnFadingTextG_VS<?= $Rich_Web_VSlider_ID; ?>
{
	font-size: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FS; ?>px !important;
	font-family:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FF; ?> !important;
	color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important;
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
	#inTurnFadingTextG_VS<?= $Rich_Web_VSlider_ID; ?>_<?php Print $key+1; ?>
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
	0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T2_AnC; ?>; }
	100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important; }
}
@-o-keyframes bounce_inTurnFadingTextG
{
	0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T2_AnC; ?>; }
	100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important; }
}
@-ms-keyframes bounce_inTurnFadingTextG
{
	0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T2_AnC; ?>; }
	100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important; }
}
@-webkit-keyframes bounce_inTurnFadingTextG
{
	0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T2_AnC; ?>; }
	100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important; }
}
@-moz-keyframes bounce_inTurnFadingTextG
{
	0% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T2_AnC; ?>; }
	100% { color:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important; }
}
/*Third text*/
.cssload-preloader_VS<?= $Rich_Web_VSlider_ID; ?> { position: relative; top: 0px; left: 0px; right: 0px; bottom: 0px; z-index: 10; }
.cssload-preloader_VS<?= $Rich_Web_VSlider_ID; ?> > .cssload-preloader_VS<?= $Rich_Web_VSlider_ID; ?>-box
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
.cssload-preloader_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-preloader_VS<?= $Rich_Web_VSlider_ID; ?>-box > div
{
	position: relative;
	width: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FS*2; ?>px;
	height: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FS*2; ?>px;
	background: rgb(204,204,204);
	float: left;
	text-align: center;
	line-height: 2;
	font-size: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FS; ?>px !important;
	font-family:<?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FF; ?> !important;
	color: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_C; ?> !important;
}
<?php foreach($text_array as $key=>$v) { ?>
	.cssload-preloader_VS<?= $Rich_Web_VSlider_ID; ?> .cssload-preloader_VS<?= $Rich_Web_VSlider_ID; ?>-box > div:nth-child(<?php Print $key+1; ?>)
	{
		background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?> !important;
		margin-right: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_FS; ?>px !important;
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
		box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?>;
		background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?> !important;
	}
}
@-o-keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
{
	from { -o-transform: scale(1.0) translateY(0px) rotateX(0deg); -o-box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		-o-transform: scale(1.5) translateY(-24px) rotateX(45deg);
		-o-box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?>;
		background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?> !important;
	}
}
@-ms-keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
{
	from { -ms-transform: scale(1.0) translateY(0px) rotateX(0deg); -ms-box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		-ms-transform: scale(1.5) translateY(-24px) rotateX(45deg);
		-ms-box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?>;
		background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?> !important;
	}
}
@-webkit-keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
{
	from { -webkit-transform: scale(1.0) translateY(0px) rotateX(0deg); -webkit-box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		-webkit-transform: scale(1.5) translateY(-24px) rotateX(45deg);
		-webkit-box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?>;
		background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?> !important;
	}
}
@-moz-keyframes cssload-movement<?= $Rich_Web_VSlider_ID; ?>
{
	from { -moz-transform: scale(1.0) translateY(0px) rotateX(0deg); -moz-box-shadow: 0 0 0 rgba(0,0,0,0); }
	to {
		-moz-transform: scale(1.5) translateY(-24px) rotateX(45deg);
		-moz-box-shadow: 0 24px 39px <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?>;
		background: <?= $Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT_T3_BgC; ?> !important;
	}
}
.iviewSlider { overflow: hidden; }
#iview-timer<?= $Rich_Web_VSlider_ID; ?> { position: absolute; z-index: 100; border-radius: 5px; cursor: pointer; }
#iview-timer<?= $Rich_Web_VSlider_ID; ?> div { border-radius: 3px; }
#iview-preloader<?= $Rich_Web_VSlider_ID; ?>
{
	position: absolute; 
	z-index: 1200; 
	-webkit-border-radius: 3px; 
	-moz-border-radius: 3px; 
	border-radius: 3px; 
	border: #000 1px solid; 
	padding: 1px; 
	width: 100px; 
	height: 3px; 
}
#iview-preloader<?= $Rich_Web_VSlider_ID; ?> div
{
	float: left; 
	-webkit-border-radius: 2px;
	-moz-border-radius: 2px; 
	border-radius: 2px; 
	height: 3px; 
	background: #000; 
	width: 0px; 
}
.iview-strip<?= $Rich_Web_VSlider_ID; ?> { display:block; position:absolute; z-index:5; }
.iview-block<?= $Rich_Web_VSlider_ID; ?> { display:block; position:absolute; z-index:5; }
.iview-directionNav<?= $Rich_Web_VSlider_ID; ?> a { position:absolute; top:45%; z-index:9; cursor:pointer; }
.iview-prevNav<?= $Rich_Web_VSlider_ID; ?> { left:0px; }
.iview-nextNav { right:0px; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> { position:absolute; z-index:9; width:100% !important; text-align:center !important; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a { z-index:9; cursor:pointer; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.active { font-weight:bold; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> .iview-items ul { list-style: none; margin:0px !important; height:100% !important; padding:0px !important; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> .iview-items ul li { display: inline; position: relative; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> .iview-items ul li:before { content: ''; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> .iview-tooltip { position: absolute; }
.iview-caption { position:absolute; z-index:4; overflow: hidden; cursor: default; display:none !important; }
.iview-caption_Anim {display: block !important; }
.iview-video<?= $Rich_Web_VSlider_ID; ?>-show { background: #000; position: absolute; width: 100% !important; height: 100% !important; z-index: 101; }
.iview-video<?= $Rich_Web_VSlider_ID; ?>-show .iview-video<?= $Rich_Web_VSlider_ID; ?>-container { position: relative; width: 100%; height: 100%; }
.iview-video<?= $Rich_Web_VSlider_ID; ?>-show .iview-video<?= $Rich_Web_VSlider_ID; ?>-container a.iview-video<?= $Rich_Web_VSlider_ID; ?>-close
{
	position: absolute;
	right: 3px;
	top: 3px;
	background: #222;
	color: #FFF;
	height: 20px;
	width: 20px;
	text-align: center;
	line-height: 29px;
	font-size: 22px;
	font-weight: bold;
	overflow: hidden;
	-webkit-border-radius: 15px;
	-moz-border-radius: 15px;
	border-radius: 15px;
}
.iview-video<?= $Rich_Web_VSlider_ID; ?>-show .iview-video<?= $Rich_Web_VSlider_ID; ?>-container a.iview-video<?= $Rich_Web_VSlider_ID; ?>-close:hover
{
	background: #444;
}
.descCol<?= $Rich_Web_VSlider_ID; ?>_2 .caption-contain h3{ line-height:1.2 !important; }
.container { display: block; margin: 0px auto; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a { border:none !important; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> div.iview-items
{
	display: inline-block;
	padding: 0px 10px 0px 10px;
	height: 44px;
	background: url('<?= plugin_dir_url(__DIR__).'Images/nav-bg.png';?>');
}
.iview-items_Anim { display:none !important; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-control
{
	padding: 0px;
	float: left;
	width: 11px;
	height: 12px;
	background: url('<?= plugin_dir_url(__DIR__).'Images/bullets.png';?>') no-repeat;
	line-height: 0px;
	box-shadow: none !important;
	-webkit-box-shadow: none !important;
}
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-control.active { background-position: 0px -12px; }
.iview-caption
{
	color: #FFF;
	border-radius: 3px;
	font-family: Verdana;
	font-size: 12px;
	text-shadow: #000 1px 1px 0px;
	-webkit-text-shadow: #000 1px 1px 0px;
	-moz-text-shadow: #000 1px 1px 0px;
}
.iview-caption.caption1
{
	font-weight: bold;
	height:auto !important;
	max-width:50% !important;
	max-height:80px !important;
	overflow-x:hidden !important;
	left:20% !important;
	top:20% !important;
}
.iview-caption.caption2
{
	font-weight: bold;
	text-shadow: none;
	-moz-text-shadow: none;
	-webkit-text-shadow: none;
	height:auto !important;
	max-width:50% !important;
	max-height:90px !important;
	overflow-x:hidden !important;
	left:25% !important;
	top:calc(20% + 50px) !important;
}
.caption-contain{ height:auto !important; max-height:80px !important; overflow-x:hidden !important; line-height:1.2 !important; text-transform:none !important; }
.iview-caption.caption3 { color: #000; font-size: 26px; text-shadow: none; -moz-text-shadow: none; -webkit-text-shadow: none;}
.iview-caption.caption4
{
	font-size: 22px;
	font-weight: bold;
	width:auto !important;
	height:auto !important;
	max-height:80px !important;
	max-width:30% !important;
	top:15% !important;
	left:15% !important;
}
.iview-caption.caption4 .caption-contain { width:auto !important; height:auto !important; }
.iview-caption.caption5
{
	background: #c4302b;
	box-shadow: rgba(0, 0, 0, 0.7) 10px 10px 15px 0px;
	-moz-box-shadow: rgba(0, 0, 0, 0.7) 10px 10px 15px 0px;
	-webkit-box-shadow: rgba(0, 0, 0, 0.7) 10px 10px 15px 0px;
	font-size: 20px;
	font-weight: bold;
	text-shadow: none;
	-moz-text-shadow: none;
	-webkit-text-shadow: none;
	width:auto !important;
	height:auto !important;
	max-width:50% !important;
	left:15% !important;
	top:45% !important;
}
.iview-caption.caption5 .caption-contain { width:auto !important; height:auto !important; }
.iview-caption.caption6 { font-size: 18px; width:auto !important; height:auto !important; max-width:70% !important; left:18% !important; top:calc(45% + 60px) !important; }
.iview-caption.caption6 .caption-contain { width:auto !important; height:auto !important; }
.iview-caption.caption7
{
	text-align: left;
	font-size: 11px;
	color: #888;
	border-radius: 0px;
	padding: 6px !important;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	position:relative !important;
	width:30% !important;
	height:100% !important;
}
.iview-caption.caption7 .caption-contain
{
	height:100% !important;
	width:100% !important;
	max-height:none !important;
	box-sizing:border-box !important;
	-moz-box-sizing:border-box !important;
	-webkit-box-sizing:border-box !important;
}
.iview-caption.caption7 div { line-height: 200%; overflow-x:hidden; }
.iview-caption.caption7 h3 { margin-bottom: 20px; color: #FFF; line-height:1.2 !important; }
.iview-caption.blackcaption
{
	text-shadow: none;
	-moz-text-shadow: none;
	-webkit-text-shadow: none;
	position:relative !important;
	height:auto !important;
	left:16% !important;
	top:calc(15% + 60px) !important;
	max-width:70% !important;
}
.iview-caption.blackcaption .caption-contain
{
	box-sizing:border-box !important;
	-moz-box-sizing:border-box !important;
	-webkit-box-sizing:border-box !important;
	height:100% !important;
	width:100% !important;
}
.descCol<?= $Rich_Web_VSlider_ID; ?>_3 .caption-contain { overflow-x:hidden; }
#iview-preloader<?= $Rich_Web_VSlider_ID; ?>
{
	position:absolute;
	border: #666 1px solid;
	width: 150px;
	top:50% !important;
	left:50% !important;
	transform:translateY(-50%) translateX(-50%) !important;
	-webkit-transform:translateY(-50%) translateX(-50%) !important;
	-ms-transform:translateY(-50%) translateX(-50%) !important;
	-moz-transform:translateY(-50%) translateX(-50%) !important;
}
#iview-preloader<?= $Rich_Web_VSlider_ID; ?> div { background: #666; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> div.iview-items ul li
{
	padding: 0px;
	float: left;
	width: 11px;
	height: 12px;
	margin: 3px;
	margin-top: 15px;
	line-height: 0px;
}
#iview<?= $Rich_Web_VSlider_ID; ?> #iview-tooltip
{
	display: none;
	position: absolute;
	background: url('<?= plugin_dir_url(__DIR__).'Images/tooltip.png';?>') no-repeat;
	width: 124px;
	height: 90px;
	bottom: 30px;
	left: -67px;
	padding: 10px;
	z-index: 100;
}
#iview<?= $Rich_Web_VSlider_ID; ?> #iview-tooltip div.holder { display: block; width: 100%; height: 100%; overflow: hidden; border-radius: 2px; }
#iview<?= $Rich_Web_VSlider_ID; ?> #iview-tooltip div.holder div.container { display: block; width: 4000px; }
#iview<?= $Rich_Web_VSlider_ID; ?> #iview-tooltip div.holder div.container div
{
	float: left;
	display: block;
	overflow: hidden;
	width: 124px;
	height: 84px;
	left: -50%;
	text-align: center;
}
#iview<?= $Rich_Web_VSlider_ID; ?> #iview-tooltip div.holder div.container div img { margin: 0 auto; }
#iview<?= $Rich_Web_VSlider_ID; ?>
{
	display: block;
	border: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_BW;?>px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_BS;?> <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_BC;?>;
	border-radius: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_BR;?>px;
	position: relative;
	-webkit-box-shadow: 0 38px 30px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_BSC;?>;
	-moz-box-shadow: 0 38px 30px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_BSC;?>;
	box-shadow: 0 38px 30px -18px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_BSC;?>;
	margin: 40px auto;
	overflow:hidden;
}
#iview<?= $Rich_Web_VSlider_ID; ?> .iviewSlider
{
	display: block;
	width: 100% !important;
	height: 100% !important;
	
	overflow: hidden;
	border-radius: 0px;
	background-size:100% 100% !important;
}
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-control
{
	padding: 0px;
	float: left;
	width: 11px;
	height: 12px;
	background: url(<?= plugin_dir_url(__DIR__).'Images/bullets_'. $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_NT .'.png';?>) no-repeat;
	line-height: 0px;
	text-indent:0px;
	font-size:0px;
}
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-control img { width:100%; height:100%; box-shadow:none !important;-webkit-box-shadow:none !important;}
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-controlPrevNav<?= $Rich_Web_VSlider_ID; ?>
{
	display:inline-block !important;
	width:44px;
	height:44px;
	background: url(<?= plugin_dir_url(__DIR__).'Images/icons/icon-'. $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_AT .'.png';?>) no-repeat;
	background-size:100% 100%;
	box-shadow:none !important;
	-moz-box-shadow:none !important;
	-webkit-box-shadow:none !important;
	transition:all 0s !important;
	-webkit-transition:all 0s !important;
	-ms-transition:all 0s !important;
	-moz-transition:all 0s !important;
	-o-transition:all 0s !important;
}
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-controlNextNav
{
	display:inline-block !important;
	width: 44px;
	height: 44px;
	background: url(<?= plugin_dir_url(__DIR__).'Images/icons/icon-'. $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_AT .'-'. $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CP_AT .'.png';?>) no-repeat;
	background-size:100% 100%;
	box-shadow:none !important;
	-moz-box-shadow:none !important;
	-webkit-box-shadow:none !important;
	transition:all 0s !important;
	-webkit-transition:all 0s !important;
	-ms-transition:all 0s !important;
	-moz-transition:all 0s !important;
	-o-transition:all 0s !important;
}
#cont<?= $Rich_Web_VSlider_ID; ?> { width: 100%; height: 100%; overflow: hidden; top: 0; left: 0; z-index: 70; overflow: auto; }
.titcol<?= $Rich_Web_VSlider_ID; ?> { color:<?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC;?>; }
.iview-controlNav<?= $Rich_Web_VSlider_ID; ?>
{
	position: absolute;
	bottom: 3px;
	left: 50%;
	transform:translateX(-50%);
	-webkit-transform:translateX(-50%);
	-ms-transform:translateX(-50%);
	height: 44px;
}
.rw_iv_im<?= $Rich_Web_VSlider_ID; ?> { width:100% !important; height:100% !important; }
.caption-contain { padding:0px 6px !important; }
.descCol<?= $Rich_Web_VSlider_ID; ?>_7
{
	left:100% !important;
	transform:translateX(-100%) !important;
	-webkit-transform:translateX(-100%) !important;
	-ms-transform:translateX(-100%) !important;
	-moz-transform:translateX(-100%) !important;
	-o-transform:translateX(-100%) !important;
}
.descCol<?= $Rich_Web_VSlider_ID; ?> .caption-contain::-webkit-scrollbar, .descCol<?= $Rich_Web_VSlider_ID; ?>_4 .caption-contain::-webkit-scrollbar, .descCol<?= $Rich_Web_VSlider_ID; ?>_5 .caption-contain::-webkit-scrollbar, .descCol<?= $Rich_Web_VSlider_ID; ?>_2 .caption-contain::-webkit-scrollbar, .descCol<?= $Rich_Web_VSlider_ID; ?>_3 .caption-contain::-webkit-scrollbar, .descCol<?= $Rich_Web_VSlider_ID; ?>_6 .caption-contain::-webkit-scrollbar, .descCol<?= $Rich_Web_VSlider_ID; ?>_7 .caption-contain::-webkit-scrollbar
{
	width: 5px;
}
.descCol<?= $Rich_Web_VSlider_ID; ?> .caption-contain::-webkit-scrollbar-track, .descCol<?= $Rich_Web_VSlider_ID; ?>_4 .caption-contain::-webkit-scrollbar-track, .descCol<?= $Rich_Web_VSlider_ID; ?>_5 .caption-contain::-webkit-scrollbar-track, .descCol<?= $Rich_Web_VSlider_ID; ?>_2 .caption-contain::-webkit-scrollbar-track, .descCol<?= $Rich_Web_VSlider_ID; ?>_3 .caption-contain::-webkit-scrollbar-track, .descCol<?= $Rich_Web_VSlider_ID; ?>_6 .caption-contain::-webkit-scrollbar-track, .descCol<?= $Rich_Web_VSlider_ID; ?>_7 .caption-contain::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_DBgC; ?> !important;
}
.descCol<?= $Rich_Web_VSlider_ID; ?> .caption-contain::-webkit-scrollbar-thumb, .descCol<?= $Rich_Web_VSlider_ID; ?>_4 .caption-contain::-webkit-scrollbar-thumb, .descCol<?= $Rich_Web_VSlider_ID; ?>_5 .caption-contain::-webkit-scrollbar-thumb, .descCol<?= $Rich_Web_VSlider_ID; ?>_2 .caption-contain::-webkit-scrollbar-thumb, .descCol<?= $Rich_Web_VSlider_ID; ?>_3 .caption-contain::-webkit-scrollbar-thumb, .descCol<?= $Rich_Web_VSlider_ID; ?>_6 .caption-contain::-webkit-scrollbar-thumb, .descCol<?= $Rich_Web_VSlider_ID; ?>_7 .caption-contain::-webkit-scrollbar-thumb
{
	background-color: #fff !important;
	outline: #fff !important;
}
.caption-contain p { margin: 0 !important; padding: 0 !important; }
.titcol<?= $Rich_Web_VSlider_ID; ?> .caption-contain::-webkit-scrollbar { width: 5px; }
.titcol<?= $Rich_Web_VSlider_ID; ?> .caption-contain::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TBgC; ?> !important;
}
.titcol<?= $Rich_Web_VSlider_ID; ?> .caption-contain::-webkit-scrollbar-thumb
{
	background-color: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC; ?> !important;
	outline: <?= $Rich_Web_VSlider_Eff[0]->Rich_Web_VS_CS_TC; ?> !important;
	color:red;
	box-sizing:border-box;
	text-align:center;
}
.iview-timer_Anim { display:none !important; }
@media screen and (max-width:820px)
{
	.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-controlNextNav,.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-control { cursor:default !important; }
	.iview-controlNav<?= $Rich_Web_VSlider_ID; ?> a.iview-controlPrevNav<?= $Rich_Web_VSlider_ID; ?> { cursor:default !important; }
	#iview-timer<?= $Rich_Web_VSlider_ID; ?> { cursor:default !important; }
}
</style>