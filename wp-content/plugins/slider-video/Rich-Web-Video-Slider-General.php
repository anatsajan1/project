<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
	global $wpdb;
	$table_name   = $wpdb->prefix . "rich_web_video_slider_font_family";
	$table_name1  = $wpdb->prefix . "rich_web_video_slider_id";
	$table_name2  = $wpdb->prefix . "rich_web_video_slider_manager";
	$table_name3  = $wpdb->prefix . "rich_web_video_slider_videos";
	$table_name4  = $wpdb->prefix . "rich_web_video_slider_effects_data";
	$table_name5  = $wpdb->prefix . "rich_web_vs_effect_1";
	$table_name6  = $wpdb->prefix . "rich_web_vs_effect_2";
	$table_name7  = $wpdb->prefix . "rich_web_vs_effect_3";
	$table_name8  = $wpdb->prefix . "rich_web_vs_effect_4";
	$table_name9  = $wpdb->prefix . "rich_web_vs_effect_5";
	$table_name10 = $wpdb->prefix . "rich_web_vs_effect_6";
	$table_name11 = $wpdb->prefix . "rich_web_vs_effect_7";
	$table_name12 = $wpdb->prefix . "rich_web_vs_effect_8";
	$table_name13 = $wpdb->prefix . "rich_web_vs_effect_9";
	$table_name14 = $wpdb->prefix . "rich_web_vs_effect_10";
	$table_name5_Loader  = $wpdb->prefix . "rich_web_vs_effect_1_loader";
	$table_name6_Loader  = $wpdb->prefix . "rich_web_vs_effect_2_loader";
	$table_name7_Loader  = $wpdb->prefix . "rich_web_vs_effect_3_loader";
	$table_name8_Loader  = $wpdb->prefix . "rich_web_vs_effect_4_loader";
	$table_name9_Loader  = $wpdb->prefix . "rich_web_vs_effect_5_loader";
	$table_name10_Loader  = $wpdb->prefix . "rich_web_vs_effect_6_loader";
	$table_name11_Loader  = $wpdb->prefix . "rich_web_vs_effect_7_loader";
	$table_name12_Loader  = $wpdb->prefix . "rich_web_vs_effect_8_loader";
	$table_name13_Loader  = $wpdb->prefix . "rich_web_vs_effect_9_loader";
	$table_name14_Loader  = $wpdb->prefix . "rich_web_vs_effect_10_loader";
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		if(check_admin_referer( 'edit-menu_', 'Rich_Web_VSlider_Nonce' ))
		{
			$Rich_Web_VSlider_Option_Name=sanitize_text_field($_POST['Rich_Web_VSlider_Option_Name']); $Rich_Web_VSlider_Option_Type=sanitize_text_field($_POST['Rich_Web_VSlider_Option_Type']);
			if(isset($_POST['Rich_Web_VSlider_Upd_Opt']))
			{
				$Rich_Web_VSlider_Upd_ID=sanitize_text_field($_POST['Rich_Web_VSlider_Upd_ID']);
				$wpdb->query($wpdb->prepare("UPDATE $table_name4 set slider_vid_name=%s WHERE id=%d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Upd_ID));

				if($Rich_Web_VSlider_Option_Type=='Content Slider')
				{
					//Content Slider
					$Rich_Web_VS_CP_S=sanitize_text_field($_POST['Rich_Web_VS_CP_S']); $Rich_Web_VS_CP_BlC=sanitize_text_field($_POST['Rich_Web_VS_CP_BlC']); $Rich_Web_VS_CP_BlR=sanitize_text_field($_POST['Rich_Web_VS_CP_BlR']); $Rich_Web_VS_CP_AS=sanitize_text_field($_POST['Rich_Web_VS_CP_AS']); $Rich_Web_VS_CP_PT=sanitize_text_field($_POST['Rich_Web_VS_CP_PT']); $Rich_Web_VS_CS_AP=sanitize_text_field($_POST['Rich_Web_VS_CS_AP']); $Rich_Web_VS_CS_HP=sanitize_text_field($_POST['Rich_Web_VS_CS_HP']); $Rich_Web_VS_CS_RS=sanitize_text_field($_POST['Rich_Web_VS_CS_RS']); $Rich_Web_VS_CP_BW=sanitize_text_field($_POST['Rich_Web_VS_CP_BW']); $Rich_Web_VS_CP_BS=sanitize_text_field($_POST['Rich_Web_VS_CP_BS']); $Rich_Web_VS_CP_BR=sanitize_text_field($_POST['Rich_Web_VS_CP_BR']); $Rich_Web_VS_CS_CN=sanitize_text_field($_POST['Rich_Web_VS_CS_CN']); $Rich_Web_VS_CS_NPB=sanitize_text_field($_POST['Rich_Web_VS_CS_NPB']); $Rich_Web_VS_CP_NO=sanitize_text_field($_POST['Rich_Web_VS_CP_NO']); $Rich_Web_VS_CS_NT=sanitize_text_field($_POST['Rich_Web_VS_CS_NT']); $Rich_Web_VS_CP_CapS=sanitize_text_field($_POST['Rich_Web_VS_CP_CapS']); $Rich_Web_VS_CP_CapO=sanitize_text_field($_POST['Rich_Web_VS_CP_CapO']); $Rich_Web_VS_CP_TFS=sanitize_text_field($_POST['Rich_Web_VS_CP_TFS']); $Rich_Web_VS_CP_TFF=sanitize_text_field($_POST['Rich_Web_VS_CP_TFF']); $Rich_Web_VS_CS_DBgC=sanitize_text_field($_POST['Rich_Web_VS_CS_DBgC']); $Rich_Web_VS_CP_TiO=sanitize_text_field($_POST['Rich_Web_VS_CP_TiO']); $Rich_Web_VS_CP_TiD=sanitize_text_field($_POST['Rich_Web_VS_CP_TiD']); $Rich_Web_VS_CP_TiP=sanitize_text_field($_POST['Rich_Web_VS_CP_TiP']); $Rich_Web_VS_CP_TiS=sanitize_text_field($_POST['Rich_Web_VS_CP_TiS']); $Rich_Web_VS_CP_TiBS=sanitize_text_field($_POST['Rich_Web_VS_CP_TiBS']); $Rich_Web_VS_SL_Width=sanitize_text_field($_POST['Rich_Web_VS_SL_Width']); $Rich_Web_VS_SL_Height=sanitize_text_field($_POST['Rich_Web_VS_SL_Height']);
					//Content Slider Loading
					$Rich_Web_VS_ContSl_L_Show=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_Show']); $Rich_Web_VS_ContSl_LT_Show=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_Show']); $Rich_Web_VS_ContSl_LT=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT']); $Rich_Web_VS_ContSl_L_BgC=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_BgC']); $Rich_Web_VS_ContSl_L_T=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_T']); $Rich_Web_VS_ContSl_LT_T=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_T']); $Rich_Web_VS_ContSl_LT_FS=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_FS']); $Rich_Web_VS_ContSl_LT_FF=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_FF']); $Rich_Web_VS_ContSl_LT_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_C']); $Rich_Web_VS_ContSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_T1_C']); $Rich_Web_VS_ContSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_T2_C']); $Rich_Web_VS_ContSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_T3_C']); $Rich_Web_VS_ContSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_T2_BC']); $Rich_Web_VS_ContSl_L_C=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_C']); $Rich_Web_VS_ContSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_T2_AnC']); $Rich_Web_VS_ContSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_VS_ContSl_LT_T3_BgC']); $Rich_Web_VS_ContSl_L_S=sanitize_text_field($_POST['Rich_Web_VS_ContSl_L_S']); $Rich_Web_VS_ContSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_VS_ContSl_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name5 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VS_CP_S = %s, Rich_Web_VS_CP_BlC = %s, Rich_Web_VS_CP_BlR = %s, Rich_Web_VS_CP_AS = %s, Rich_Web_VS_CP_PT = %s, Rich_Web_VS_CS_AP = %s, Rich_Web_VS_CS_HP = %s, Rich_Web_VS_CS_RS = %s, Rich_Web_VS_CP_BW = %s, Rich_Web_VS_CP_BS = %s, Rich_Web_VS_CP_BR = %s, Rich_Web_VS_CS_CN = %s, Rich_Web_VS_CS_NPB = %s, Rich_Web_VS_CP_NO = %s, Rich_Web_VS_CS_NT = %s, Rich_Web_VS_CP_CapS = %s, Rich_Web_VS_CP_CapO = %s, Rich_Web_VS_CP_TFS = %s, Rich_Web_VS_CP_TFF = %s, Rich_Web_VS_CS_DBgC = %s, Rich_Web_VS_CP_TiO = %s, Rich_Web_VS_CP_TiD = %s, Rich_Web_VS_CP_TiP = %s, Rich_Web_VS_CP_TiS = %s, Rich_Web_VS_CP_TiBS = %s, Rich_Web_VS_SL_Width = %s, Rich_Web_VS_SL_Height = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VS_CP_S, $Rich_Web_VS_CP_BlC, $Rich_Web_VS_CP_BlR, $Rich_Web_VS_CP_AS, $Rich_Web_VS_CP_PT, $Rich_Web_VS_CS_AP, $Rich_Web_VS_CS_HP, $Rich_Web_VS_CS_RS, $Rich_Web_VS_CP_BW, $Rich_Web_VS_CP_BS, $Rich_Web_VS_CP_BR, $Rich_Web_VS_CS_CN, $Rich_Web_VS_CS_NPB, $Rich_Web_VS_CP_NO, $Rich_Web_VS_CS_NT, $Rich_Web_VS_CP_CapS, $Rich_Web_VS_CP_CapO, $Rich_Web_VS_CP_TFS, $Rich_Web_VS_CP_TFF, $Rich_Web_VS_CS_DBgC, $Rich_Web_VS_CP_TiO, $Rich_Web_VS_CP_TiD, $Rich_Web_VS_CP_TiP, $Rich_Web_VS_CP_TiS, $Rich_Web_VS_CP_TiBS, $Rich_Web_VS_SL_Width, $Rich_Web_VS_SL_Height, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name5_Loader set Rich_Web_VS_ContSl_L_Show = %s, Rich_Web_VS_ContSl_LT_Show = %s, Rich_Web_VS_ContSl_LT = %s, Rich_Web_VS_ContSl_L_BgC = %s, Rich_Web_VS_ContSl_L_T = %s, Rich_Web_VS_ContSl_LT_T = %s, Rich_Web_VS_ContSl_LT_FS = %s, Rich_Web_VS_ContSl_LT_FF = %s, Rich_Web_VS_ContSl_LT_C = %s, Rich_Web_VS_ContSl_L_T1_C = %s, Rich_Web_VS_ContSl_L_T2_C = %s, Rich_Web_VS_ContSl_L_T3_C = %s, Rich_Web_VS_ContSl_LT_T2_BC = %s, Rich_Web_VS_ContSl_L_C = %s, Rich_Web_VS_ContSl_LT_T2_AnC = %s, Rich_Web_VS_ContSl_LT_T3_BgC = %s, Rich_Web_VS_ContSl_L_S = %s, Rich_Web_VS_ContSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_VS_ContSl_L_Show, $Rich_Web_VS_ContSl_LT_Show, $Rich_Web_VS_ContSl_LT, $Rich_Web_VS_ContSl_L_BgC, $Rich_Web_VS_ContSl_L_T, $Rich_Web_VS_ContSl_LT_T, $Rich_Web_VS_ContSl_LT_FS, $Rich_Web_VS_ContSl_LT_FF, $Rich_Web_VS_ContSl_LT_C, $Rich_Web_VS_ContSl_L_T1_C, $Rich_Web_VS_ContSl_L_T2_C, $Rich_Web_VS_ContSl_L_T3_C, $Rich_Web_VS_ContSl_LT_T2_BC, $Rich_Web_VS_ContSl_L_C, $Rich_Web_VS_ContSl_LT_T2_AnC, $Rich_Web_VS_ContSl_LT_T3_BgC, $Rich_Web_VS_ContSl_L_S, $Rich_Web_VS_ContSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Slick Slider')
				{
					//Slick Slider
					$Rich_Web_VS_SS_ED=sanitize_text_field($_POST['Rich_Web_VS_SS_ED']); $Rich_Web_VS_SS_PT=sanitize_text_field($_POST['Rich_Web_VS_SS_PT']); $Rich_Web_VS_SS_AP=sanitize_text_field($_POST['Rich_Web_VS_SS_AP']); $Rich_Web_VS_SS_W=sanitize_text_field($_POST['Rich_Web_VS_SS_W']); $Rich_Web_VS_SS_H=sanitize_text_field($_POST['Rich_Web_VS_SS_H']); $Rich_Web_VS_SS_BW=sanitize_text_field($_POST['Rich_Web_VS_SS_BW']); $Rich_Web_VS_SS_BS=sanitize_text_field($_POST['Rich_Web_VS_SS_BS']); $Rich_Web_VS_SS_TShow=sanitize_text_field($_POST['Rich_Web_VS_SS_TShow']); $Rich_Web_VS_SS_TFS=sanitize_text_field($_POST['Rich_Web_VS_SS_TFS']); $Rich_Web_VS_SS_TFF=sanitize_text_field($_POST['Rich_Web_VS_SS_TFF']); $Rich_Web_VS_SS_NShow=sanitize_text_field($_POST['Rich_Web_VS_SS_NShow']); $Rich_Web_VS_SS_NS=sanitize_text_field($_POST['Rich_Web_VS_SS_NS']); $Rich_Web_VS_SS_PagShow=sanitize_text_field($_POST['Rich_Web_VS_SS_PagShow']); $Rich_Web_VS_SS_PagW=sanitize_text_field($_POST['Rich_Web_VS_SS_PagW']); $Rich_Web_VS_SS_PagH=sanitize_text_field($_POST['Rich_Web_VS_SS_PagH']); $Rich_Web_VS_SS_PagPB=sanitize_text_field($_POST['Rich_Web_VS_SS_PagPB']); $Rich_Web_VS_SS_PagBW=sanitize_text_field($_POST['Rich_Web_VS_SS_PagBW']); $Rich_Web_VS_SS_PagBS=sanitize_text_field($_POST['Rich_Web_VS_SS_PagBS']); $Rich_Web_VS_SS_PagBR=sanitize_text_field($_POST['Rich_Web_VS_SS_PagBR']);
					//Slick Slider Loading
					$Rich_Web_SlickSl_L_Show=sanitize_text_field($_POST['Rich_Web_SlickSl_L_Show']); $Rich_Web_SlickSl_LT_Show=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_Show']); $Rich_Web_SlickSl_LT=sanitize_text_field($_POST['Rich_Web_SlickSl_LT']); $Rich_Web_SlickSl_L_BgC=sanitize_text_field($_POST['Rich_Web_SlickSl_L_BgC']); $Rich_Web_SlickSl_L_T=sanitize_text_field($_POST['Rich_Web_SlickSl_L_T']); $Rich_Web_SlickSl_LT_T=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_T']); $Rich_Web_SlickSl_LT_FS=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_FS']);$Rich_Web_SlickSl_LT_FF=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_FF']); $Rich_Web_SlickSl_LT_C=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_C']); $Rich_Web_SlickSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_SlickSl_L_T1_C']); $Rich_Web_SlickSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_SlickSl_L_T2_C']); $Rich_Web_SlickSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_SlickSl_L_T3_C']); $Rich_Web_SlickSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_T2_BC']); $Rich_Web_SlickSl_L_C=sanitize_text_field($_POST['Rich_Web_SlickSl_L_C']); $Rich_Web_SlickSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_T2_AnC']); $Rich_Web_SlickSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_SlickSl_LT_T3_BgC']); $Rich_Web_SlickSl_L_S=sanitize_text_field($_POST['Rich_Web_SlickSl_L_S']); $Rich_Web_SlickSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_SlickSl_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name6 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VS_SS_ED = %s, Rich_Web_VS_SS_PT = %s, Rich_Web_VS_SS_AP = %s, Rich_Web_VS_SS_W = %s, Rich_Web_VS_SS_H = %s, Rich_Web_VS_SS_BW = %s, Rich_Web_VS_SS_BS = %s, Rich_Web_VS_SS_TShow = %s, Rich_Web_VS_SS_TFS = %s, Rich_Web_VS_SS_TFF = %s, Rich_Web_VS_SS_NShow = %s, Rich_Web_VS_SS_NS = %s, Rich_Web_VS_SS_PagShow = %s, Rich_Web_VS_SS_PagW = %s, Rich_Web_VS_SS_PagH = %s, Rich_Web_VS_SS_PagPB = %s, Rich_Web_VS_SS_PagBW = %s, Rich_Web_VS_SS_PagBS = %s, Rich_Web_VS_SS_PagBR = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VS_SS_ED, $Rich_Web_VS_SS_PT, $Rich_Web_VS_SS_AP, $Rich_Web_VS_SS_W, $Rich_Web_VS_SS_H, $Rich_Web_VS_SS_BW, $Rich_Web_VS_SS_BS, $Rich_Web_VS_SS_TShow, $Rich_Web_VS_SS_TFS, $Rich_Web_VS_SS_TFF, $Rich_Web_VS_SS_NShow, $Rich_Web_VS_SS_NS, $Rich_Web_VS_SS_PagShow, $Rich_Web_VS_SS_PagW, $Rich_Web_VS_SS_PagH, $Rich_Web_VS_SS_PagPB, $Rich_Web_VS_SS_PagBW, $Rich_Web_VS_SS_PagBS, $Rich_Web_VS_SS_PagBR, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name6_Loader set Rich_Web_SlickSl_L_Show = %s, Rich_Web_SlickSl_LT_Show = %s, Rich_Web_SlickSl_LT = %s, Rich_Web_SlickSl_L_BgC = %s, Rich_Web_SlickSl_L_T = %s, Rich_Web_SlickSl_LT_T = %s, Rich_Web_SlickSl_LT_FS = %s, Rich_Web_SlickSl_LT_FF = %s, Rich_Web_SlickSl_LT_C = %s, Rich_Web_SlickSl_L_T1_C = %s, Rich_Web_SlickSl_L_T2_C = %s, Rich_Web_SlickSl_L_T3_C = %s, Rich_Web_SlickSl_LT_T2_BC = %s, Rich_Web_SlickSl_L_C = %s, Rich_Web_SlickSl_LT_T2_AnC = %s, Rich_Web_SlickSl_LT_T3_BgC = %s, Rich_Web_SlickSl_L_S = %s, Rich_Web_SlickSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_SlickSl_L_Show, $Rich_Web_SlickSl_LT_Show, $Rich_Web_SlickSl_LT, $Rich_Web_SlickSl_L_BgC, $Rich_Web_SlickSl_L_T, $Rich_Web_SlickSl_LT_T, $Rich_Web_SlickSl_LT_FS, $Rich_Web_SlickSl_LT_FF, $Rich_Web_SlickSl_LT_C, $Rich_Web_SlickSl_L_T1_C, $Rich_Web_SlickSl_L_T2_C, $Rich_Web_SlickSl_L_T3_C, $Rich_Web_SlickSl_LT_T2_BC, $Rich_Web_SlickSl_L_C, $Rich_Web_SlickSl_LT_T2_AnC, $Rich_Web_SlickSl_LT_T3_BgC, $Rich_Web_SlickSl_L_S, $Rich_Web_SlickSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Thumbnails Slider')
				{
					//Thumbnails Slider
					$Rich_Web_VS_TS_W=sanitize_text_field($_POST['Rich_Web_VS_TS_W']); $Rich_Web_VS_TS_H=sanitize_text_field($_POST['Rich_Web_VS_TS_H']); $Rich_Web_VS_TS_BW=sanitize_text_field($_POST['Rich_Web_VS_TS_BW']); $Rich_Web_VS_TS_BS=sanitize_text_field($_POST['Rich_Web_VS_TS_BS']); $Rich_Web_VS_TS_BoxShShow=sanitize_text_field($_POST['Rich_Web_VS_TS_BoxShShow']); $Rich_Web_VS_TS_BoxShType=sanitize_text_field($_POST['Rich_Web_VS_TS_BoxShType']); $Rich_Web_VS_TS_BoxSh=sanitize_text_field($_POST['Rich_Web_VS_TS_BoxSh']); $Rich_Web_VS_TS_IBW=sanitize_text_field($_POST['Rich_Web_VS_TS_IBW']); $Rich_Web_VS_TS_IBS=sanitize_text_field($_POST['Rich_Web_VS_TS_IBS']); $Rich_Web_VS_TS_IBR=sanitize_text_field($_POST['Rich_Web_VS_TS_IBR']); $Rich_Web_VS_TS_TBW=sanitize_text_field($_POST['Rich_Web_VS_TS_TBW']); $Rich_Web_VS_TS_TBS=sanitize_text_field($_POST['Rich_Web_VS_TS_TBS']); $Rich_Web_VS_TS_TIH=sanitize_text_field($_POST['Rich_Web_VS_TS_TIH']); $Rich_Web_VS_TS_TIPB=sanitize_text_field($_POST['Rich_Web_VS_TS_TIPB']); $Rich_Web_VS_TS_TIBW=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBW']); $Rich_Web_VS_TS_TIBS=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBS']); $Rich_Web_VS_TS_TIBR=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBR']); $Rich_Web_VS_TS_TIBoxShShow=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBoxShShow']);  $Rich_Web_VS_TS_TIBoxSh=sanitize_text_field($_POST['Rich_Web_VS_TS_TIBoxSh']); $Rich_Web_VS_TS_TICBS=sanitize_text_field($_POST['Rich_Web_VS_TS_TICBS']); $Rich_Web_VS_TS_TIHBS=sanitize_text_field($_POST['Rich_Web_VS_TS_TIHBS']); $Rich_Web_VS_TS_CS=sanitize_text_field($_POST['Rich_Web_VS_TS_CS']); $Rich_Web_VS_TS_PT=sanitize_text_field($_POST['Rich_Web_VS_TS_PT']);
					//Thumbnails Slider Loading
					$Rich_Web_VS_TS_TIBoxShType = empty($_POST['Rich_Web_VS_TS_TIBoxShType'])  ? 'off' : sanitize_text_field($_POST['Rich_Web_VS_TS_TIBoxShType']);
					$Rich_Web_VS_TS_AP = empty($_POST['Rich_Web_VS_TS_AP'])  ? 'off' : sanitize_text_field($_POST['Rich_Web_VS_TS_AP']);
					$Rich_Web_ThumbSl_L_Show=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_Show']); $Rich_Web_ThumbSl_LT_Show=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_Show']); $Rich_Web_ThumbSl_LT=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT']); $Rich_Web_ThumbSl_L_BgC=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_BgC']); $Rich_Web_ThumbSl_L_T=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_T']); $Rich_Web_ThumbSl_LT_T=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_T']); $Rich_Web_ThumbSl_LT_FS=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_FS']);$Rich_Web_ThumbSl_LT_FF=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_FF']); $Rich_Web_ThumbSl_LT_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_C']); $Rich_Web_ThumbSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_T1_C']); $Rich_Web_ThumbSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_T2_C']); $Rich_Web_ThumbSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_T3_C']); $Rich_Web_ThumbSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_T2_BC']); $Rich_Web_ThumbSl_L_C=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_C']); $Rich_Web_ThumbSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_T2_AnC']); $Rich_Web_ThumbSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_ThumbSl_LT_T3_BgC']); $Rich_Web_ThumbSl_L_S=sanitize_text_field($_POST['Rich_Web_ThumbSl_L_S']); $Rich_Web_ThumbSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_ThumbSl_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name7 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VS_TS_W = %s, Rich_Web_VS_TS_H = %s, Rich_Web_VS_TS_BW = %s, Rich_Web_VS_TS_BS = %s, Rich_Web_VS_TS_BoxShShow = %s, Rich_Web_VS_TS_BoxShType = %s, Rich_Web_VS_TS_BoxSh = %s, Rich_Web_VS_TS_IBW = %s, Rich_Web_VS_TS_IBS = %s, Rich_Web_VS_TS_IBR = %s, Rich_Web_VS_TS_TBW = %s, Rich_Web_VS_TS_TBS = %s, Rich_Web_VS_TS_TIH = %s, Rich_Web_VS_TS_TIPB = %s, Rich_Web_VS_TS_TIBW = %s, Rich_Web_VS_TS_TIBS = %s, Rich_Web_VS_TS_TIBR = %s, Rich_Web_VS_TS_TIBoxShShow = %s, Rich_Web_VS_TS_TIBoxShType = %s, Rich_Web_VS_TS_TIBoxSh = %s, Rich_Web_VS_TS_TICBS = %s, Rich_Web_VS_TS_TIHBS = %s, Rich_Web_VS_TS_CS = %s, Rich_Web_VS_TS_PT = %s, Rich_Web_VS_TS_AP = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VS_TS_W, $Rich_Web_VS_TS_H, $Rich_Web_VS_TS_BW, $Rich_Web_VS_TS_BS, $Rich_Web_VS_TS_BoxShShow, $Rich_Web_VS_TS_BoxShType, $Rich_Web_VS_TS_BoxSh, $Rich_Web_VS_TS_IBW, $Rich_Web_VS_TS_IBS, $Rich_Web_VS_TS_IBR, $Rich_Web_VS_TS_TBW, $Rich_Web_VS_TS_TBS, $Rich_Web_VS_TS_TIH, $Rich_Web_VS_TS_TIPB, $Rich_Web_VS_TS_TIBW, $Rich_Web_VS_TS_TIBS, $Rich_Web_VS_TS_TIBR, $Rich_Web_VS_TS_TIBoxShShow, $Rich_Web_VS_TS_TIBoxShType, $Rich_Web_VS_TS_TIBoxSh, $Rich_Web_VS_TS_TICBS, $Rich_Web_VS_TS_TIHBS, $Rich_Web_VS_TS_CS, $Rich_Web_VS_TS_PT, $Rich_Web_VS_TS_AP, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name7_Loader set Rich_Web_ThumbSl_L_Show = %s, Rich_Web_ThumbSl_LT_Show = %s, Rich_Web_ThumbSl_LT = %s, Rich_Web_ThumbSl_L_BgC = %s, Rich_Web_ThumbSl_L_T = %s, Rich_Web_ThumbSl_LT_T = %s, Rich_Web_ThumbSl_LT_FS = %s, Rich_Web_ThumbSl_LT_FF = %s, Rich_Web_ThumbSl_LT_C = %s, Rich_Web_ThumbSl_L_T1_C = %s, Rich_Web_ThumbSl_L_T2_C = %s, Rich_Web_ThumbSl_L_T3_C = %s, Rich_Web_ThumbSl_LT_T2_BC = %s, Rich_Web_ThumbSl_L_C = %s, Rich_Web_ThumbSl_LT_T2_AnC = %s, Rich_Web_ThumbSl_LT_T3_BgC = %s, Rich_Web_ThumbSl_L_S = %s, Rich_Web_ThumbSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_ThumbSl_L_Show, $Rich_Web_ThumbSl_LT_Show, $Rich_Web_ThumbSl_LT, $Rich_Web_ThumbSl_L_BgC, $Rich_Web_ThumbSl_L_T, $Rich_Web_ThumbSl_LT_T, $Rich_Web_ThumbSl_LT_FS, $Rich_Web_ThumbSl_LT_FF, $Rich_Web_ThumbSl_LT_C, $Rich_Web_ThumbSl_L_T1_C, $Rich_Web_ThumbSl_L_T2_C, $Rich_Web_ThumbSl_L_T3_C, $Rich_Web_ThumbSl_LT_T2_BC, $Rich_Web_ThumbSl_L_C, $Rich_Web_ThumbSl_LT_T2_AnC, $Rich_Web_ThumbSl_LT_T3_BgC, $Rich_Web_ThumbSl_L_S, $Rich_Web_ThumbSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Video Carousel/Content Popup')
				{
					//Video Carousel/Content Popup
					$Rich_Web_VC_Car_Border_Width=sanitize_text_field($_POST['Rich_Web_VC_Car_Border_Width']); $Rich_Web_VC_Car_Border_Style=sanitize_text_field($_POST['Rich_Web_VC_Car_Border_Style']); $Rich_Web_VC_Car_Box_Shadow=sanitize_text_field($_POST['Rich_Web_VC_Car_Box_Shadow']); $Rich_Web_VC_Car_Count_Imgs=sanitize_text_field($_POST['Rich_Web_VC_Car_Count_Imgs']); $Rich_Web_VC_Car_PBImgs=sanitize_text_field($_POST['Rich_Web_VC_Car_PBImgs']); $Rich_Web_VC_Car_Icons_Size=sanitize_text_field($_POST['Rich_Web_VC_Car_Icons_Size']); $Rich_Web_VC_Popup_Border_Width=sanitize_text_field($_POST['Rich_Web_VC_Popup_Border_Width']); $Rich_Web_VC_Popup_Border_Style=sanitize_text_field($_POST['Rich_Web_VC_Popup_Border_Style']); $Rich_Web_VC_Popup_Box_Shadow=sanitize_text_field($_POST['Rich_Web_VC_Popup_Box_Shadow']); $Rich_Web_VC_Title_Font_Size=sanitize_text_field($_POST['Rich_Web_VC_Title_Font_Size']); $Rich_Web_VC_Title_Font_Family=sanitize_text_field($_POST['Rich_Web_VC_Title_Font_Family']); $Rich_Web_VC_Title_Text_Align=sanitize_text_field($_POST['Rich_Web_VC_Title_Text_Align']); $Rich_Web_VC_Link_Font_Size=sanitize_text_field($_POST['Rich_Web_VC_Link_Font_Size']); $Rich_Web_VC_Link_Font_Family=sanitize_text_field($_POST['Rich_Web_VC_Link_Font_Family']); $Rich_Web_VC_Link_Border_Width=sanitize_text_field($_POST['Rich_Web_VC_Link_Border_Width']); $Rich_Web_VC_Link_Border_Style=sanitize_text_field($_POST['Rich_Web_VC_Link_Border_Style']); $Rich_Web_VC_Popup_Icons_Size=sanitize_text_field($_POST['Rich_Web_VC_Popup_Icons_Size']); $Rich_Web_VC_Link_Text=sanitize_text_field($_POST['Rich_Web_VC_Link_Text']); $Rich_Web_VC_Link_Border_Radius=sanitize_text_field($_POST['Rich_Web_VC_Link_Border_Radius']);
					//Video Carousel/Content Popup Slider Loading
					$Rich_Web_VCCP_L_Show = empty($_POST['Rich_Web_VCCP_L_Show'])  ? 'off' : sanitize_text_field($_POST['Rich_Web_VCCP_L_Show']);
					 $Rich_Web_VCCP_LT_Show=sanitize_text_field($_POST['Rich_Web_VCCP_LT_Show']); $Rich_Web_VCCP_LT=sanitize_text_field($_POST['Rich_Web_VCCP_LT']); $Rich_Web_VCCP_L_BgC=sanitize_text_field($_POST['Rich_Web_VCCP_L_BgC']); $Rich_Web_VCCP_L_T=sanitize_text_field($_POST['Rich_Web_VCCP_L_T']); $Rich_Web_VCCP_LT_T=sanitize_text_field($_POST['Rich_Web_VCCP_LT_T']); $Rich_Web_VCCP_LT_FS=sanitize_text_field($_POST['Rich_Web_VCCP_LT_FS']);$Rich_Web_VCCP_LT_FF=sanitize_text_field($_POST['Rich_Web_VCCP_LT_FF']); $Rich_Web_VCCP_LT_C=sanitize_text_field($_POST['Rich_Web_VCCP_LT_C']); $Rich_Web_VCCP_L_T1_C=sanitize_text_field($_POST['Rich_Web_VCCP_L_T1_C']); $Rich_Web_VCCP_L_T2_C=sanitize_text_field($_POST['Rich_Web_VCCP_L_T2_C']); $Rich_Web_VCCP_L_T3_C=sanitize_text_field($_POST['Rich_Web_VCCP_L_T3_C']); $Rich_Web_VCCP_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_VCCP_LT_T2_BC']); $Rich_Web_VCCP_L_C=sanitize_text_field($_POST['Rich_Web_VCCP_L_C']); $Rich_Web_VCCP_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_VCCP_LT_T2_AnC']); $Rich_Web_VCCP_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_VCCP_LT_T3_BgC']); $Rich_Web_VCCP_L_S=sanitize_text_field($_POST['Rich_Web_VCCP_L_S']); $Rich_Web_VCCP_Loading_Show=sanitize_text_field($_POST['Rich_Web_VCCP_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name8 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VC_Car_Border_Width = %s, Rich_Web_VC_Car_Border_Style = %s, Rich_Web_VC_Car_Box_Shadow = %s, Rich_Web_VC_Car_Count_Imgs = %s, Rich_Web_VC_Car_PBImgs = %s, Rich_Web_VC_Car_Icons_Size = %s, Rich_Web_VC_Popup_Border_Width = %s, Rich_Web_VC_Popup_Border_Style = %s, Rich_Web_VC_Popup_Box_Shadow = %s, Rich_Web_VC_Title_Font_Size = %s, Rich_Web_VC_Title_Font_Family = %s, Rich_Web_VC_Title_Text_Align = %s, Rich_Web_VC_Link_Font_Size = %s, Rich_Web_VC_Link_Font_Family = %s, Rich_Web_VC_Link_Border_Width = %s, Rich_Web_VC_Link_Border_Style = %s, Rich_Web_VC_Popup_Icons_Size = %s, Rich_Web_VC_Link_Text = %s, Rich_Web_VC_Link_Border_Radius = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VC_Car_Border_Width, $Rich_Web_VC_Car_Border_Style, $Rich_Web_VC_Car_Box_Shadow, $Rich_Web_VC_Car_Count_Imgs, $Rich_Web_VC_Car_PBImgs, $Rich_Web_VC_Car_Icons_Size, $Rich_Web_VC_Popup_Border_Width, $Rich_Web_VC_Popup_Border_Style, $Rich_Web_VC_Popup_Box_Shadow, $Rich_Web_VC_Title_Font_Size, $Rich_Web_VC_Title_Font_Family, $Rich_Web_VC_Title_Text_Align, $Rich_Web_VC_Link_Font_Size, $Rich_Web_VC_Link_Font_Family, $Rich_Web_VC_Link_Border_Width, $Rich_Web_VC_Link_Border_Style, $Rich_Web_VC_Popup_Icons_Size, $Rich_Web_VC_Link_Text, $Rich_Web_VC_Link_Border_Radius, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name8_Loader set Rich_Web_VCCP_L_Show = %s, Rich_Web_VCCP_LT_Show = %s, Rich_Web_VCCP_LT = %s, Rich_Web_VCCP_L_BgC = %s, Rich_Web_VCCP_L_T = %s, Rich_Web_VCCP_LT_T = %s, Rich_Web_VCCP_LT_FS = %s, Rich_Web_VCCP_LT_FF = %s, Rich_Web_VCCP_LT_C = %s, Rich_Web_VCCP_L_T1_C = %s, Rich_Web_VCCP_L_T2_C = %s, Rich_Web_VCCP_L_T3_C = %s, Rich_Web_VCCP_LT_T2_BC = %s, Rich_Web_VCCP_L_C = %s, Rich_Web_VCCP_LT_T2_AnC = %s, Rich_Web_VCCP_LT_T3_BgC = %s, Rich_Web_VCCP_L_S = %s, Rich_Web_VCCP_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_VCCP_L_Show, $Rich_Web_VCCP_LT_Show, $Rich_Web_VCCP_LT, $Rich_Web_VCCP_L_BgC, $Rich_Web_VCCP_L_T, $Rich_Web_VCCP_LT_T, $Rich_Web_VCCP_LT_FS, $Rich_Web_VCCP_LT_FF, $Rich_Web_VCCP_LT_C, $Rich_Web_VCCP_L_T1_C, $Rich_Web_VCCP_L_T2_C, $Rich_Web_VCCP_L_T3_C, $Rich_Web_VCCP_LT_T2_BC, $Rich_Web_VCCP_L_C, $Rich_Web_VCCP_LT_T2_AnC, $Rich_Web_VCCP_LT_T3_BgC, $Rich_Web_VCCP_L_S, $Rich_Web_VCCP_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Simple Video Slider')
				{
					//Simple Video Slider
					$Rich_Web_SVS_W=sanitize_text_field($_POST['Rich_Web_SVS_W']); $Rich_Web_SVS_PT=sanitize_text_field($_POST['Rich_Web_SVS_PT']); $Rich_Web_SVS_CS=sanitize_text_field($_POST['Rich_Web_SVS_CS']); $Rich_Web_SVS_BW=sanitize_text_field($_POST['Rich_Web_SVS_BW']); $Rich_Web_SVS_BS=sanitize_text_field($_POST['Rich_Web_SVS_BS']); $Rich_Web_SVS_BoxShShow=sanitize_text_field($_POST['Rich_Web_SVS_BoxShShow']); $Rich_Web_SVS_BoxShType=sanitize_text_field($_POST['Rich_Web_SVS_BoxShType']); $Rich_Web_SVS_BoxSh=sanitize_text_field($_POST['Rich_Web_SVS_BoxSh']); $Rich_Web_SVS_Nav_Show=sanitize_text_field($_POST['Rich_Web_SVS_Nav_Show']); $Rich_Web_SVS_Nav_W=sanitize_text_field($_POST['Rich_Web_SVS_Nav_W']); $Rich_Web_SVS_Nav_H=sanitize_text_field($_POST['Rich_Web_SVS_Nav_H']); $Rich_Web_SVS_Nav_BW=sanitize_text_field($_POST['Rich_Web_SVS_Nav_BW']); $Rich_Web_SVS_Nav_BS=sanitize_text_field($_POST['Rich_Web_SVS_Nav_BS']); $Rich_Web_SVS_Nav_BR=sanitize_text_field($_POST['Rich_Web_SVS_Nav_BR']); $Rich_Web_SVS_Nav_PB=sanitize_text_field($_POST['Rich_Web_SVS_Nav_PB']); $Rich_Web_SVS_T_Show=sanitize_text_field($_POST['Rich_Web_SVS_T_Show']); $Rich_Web_SVS_TFS=sanitize_text_field($_POST['Rich_Web_SVS_TFS']); $Rich_Web_SVS_TFF=sanitize_text_field($_POST['Rich_Web_SVS_TFF']); $Rich_Web_SVS_D_Show=sanitize_text_field($_POST['Rich_Web_SVS_D_Show']); $Rich_Web_SVS_LFS=sanitize_text_field($_POST['Rich_Web_SVS_LFS']); $Rich_Web_SVS_LFF=sanitize_text_field($_POST['Rich_Web_SVS_LFF']); $Rich_Web_SVS_Arr_Show=sanitize_text_field($_POST['Rich_Web_SVS_Arr_Show']); $Rich_Web_SVS_Arr_S=sanitize_text_field($_POST['Rich_Web_SVS_Arr_S']); $Rich_Web_SVS_Arr_BW=sanitize_text_field($_POST['Rich_Web_SVS_Arr_BW']); $Rich_Web_SVS_Arr_BS=sanitize_text_field($_POST['Rich_Web_SVS_Arr_BS']); $Rich_Web_SVS_Arr_BR=sanitize_text_field($_POST['Rich_Web_SVS_Arr_BR']); $Rich_Web_SVS_PIBR=sanitize_text_field($_POST['Rich_Web_SVS_PIBR']); $Rich_Web_SVS_LText=sanitize_text_field($_POST['Rich_Web_SVS_LText']); $Rich_Web_SVS_AP=sanitize_text_field($_POST['Rich_Web_SVS_AP']);
					//Simple Video Slider Loading
					$Rich_Web_SimpleVS_L_Show=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_Show']); $Rich_Web_SimpleVS_LT_Show=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_Show']); $Rich_Web_SimpleVS_LT=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT']); $Rich_Web_SimpleVS_L_BgC=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_BgC']); $Rich_Web_SimpleVS_L_T=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_T']); $Rich_Web_SimpleVS_LT_T=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_T']); $Rich_Web_SimpleVS_LT_FS=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_FS']);$Rich_Web_SimpleVS_LT_FF=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_FF']); $Rich_Web_SimpleVS_LT_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_C']); $Rich_Web_SimpleVS_L_T1_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_T1_C']); $Rich_Web_SimpleVS_L_T2_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_T2_C']); $Rich_Web_SimpleVS_L_T3_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_T3_C']); $Rich_Web_SimpleVS_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_T2_BC']); $Rich_Web_SimpleVS_L_C=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_C']); $Rich_Web_SimpleVS_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_T2_AnC']); $Rich_Web_SimpleVS_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_SimpleVS_LT_T3_BgC']); $Rich_Web_SimpleVS_L_S=sanitize_text_field($_POST['Rich_Web_SimpleVS_L_S']); $Rich_Web_SimpleVS_Loading_Show=sanitize_text_field($_POST['Rich_Web_SimpleVS_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name9 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_SVS_W = %s, Rich_Web_SVS_PT = %s, Rich_Web_SVS_CS = %s, Rich_Web_SVS_BW = %s, Rich_Web_SVS_BS = %s, Rich_Web_SVS_BoxShShow = %s, Rich_Web_SVS_BoxShType = %s, Rich_Web_SVS_BoxSh = %s, Rich_Web_SVS_Nav_Show = %s, Rich_Web_SVS_Nav_W = %s, Rich_Web_SVS_Nav_H = %s, Rich_Web_SVS_Nav_BW = %s, Rich_Web_SVS_Nav_BS = %s, Rich_Web_SVS_Nav_BR = %s, Rich_Web_SVS_Nav_PB = %s, Rich_Web_SVS_T_Show = %s, Rich_Web_SVS_TFS = %s, Rich_Web_SVS_TFF = %s, Rich_Web_SVS_D_Show = %s, Rich_Web_SVS_LFS = %s, Rich_Web_SVS_LFF = %s, Rich_Web_SVS_Arr_Show = %s, Rich_Web_SVS_Arr_S = %s, Rich_Web_SVS_Arr_BW = %s, Rich_Web_SVS_Arr_BS = %s, Rich_Web_SVS_Arr_BR = %s, Rich_Web_SVS_PIBR = %s, Rich_Web_SVS_LText = %s, Rich_Web_SVS_AP = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_SVS_W, $Rich_Web_SVS_PT, $Rich_Web_SVS_CS, $Rich_Web_SVS_BW, $Rich_Web_SVS_BS, $Rich_Web_SVS_BoxShShow, $Rich_Web_SVS_BoxShType, $Rich_Web_SVS_BoxSh, $Rich_Web_SVS_Nav_Show, $Rich_Web_SVS_Nav_W, $Rich_Web_SVS_Nav_H, $Rich_Web_SVS_Nav_BW, $Rich_Web_SVS_Nav_BS, $Rich_Web_SVS_Nav_BR, $Rich_Web_SVS_Nav_PB, $Rich_Web_SVS_T_Show, $Rich_Web_SVS_TFS, $Rich_Web_SVS_TFF, $Rich_Web_SVS_D_Show, $Rich_Web_SVS_LFS, $Rich_Web_SVS_LFF, $Rich_Web_SVS_Arr_Show, $Rich_Web_SVS_Arr_S, $Rich_Web_SVS_Arr_BW, $Rich_Web_SVS_Arr_BS, $Rich_Web_SVS_Arr_BR, $Rich_Web_SVS_PIBR, $Rich_Web_SVS_LText, $Rich_Web_SVS_AP, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name9_Loader set Rich_Web_SimpleVS_L_Show = %s, Rich_Web_SimpleVS_LT_Show = %s, Rich_Web_SimpleVS_LT = %s, Rich_Web_SimpleVS_L_BgC = %s, Rich_Web_SimpleVS_L_T = %s, Rich_Web_SimpleVS_LT_T = %s, Rich_Web_SimpleVS_LT_FS = %s, Rich_Web_SimpleVS_LT_FF = %s, Rich_Web_SimpleVS_LT_C = %s, Rich_Web_SimpleVS_L_T1_C = %s, Rich_Web_SimpleVS_L_T2_C = %s, Rich_Web_SimpleVS_L_T3_C = %s, Rich_Web_SimpleVS_LT_T2_BC = %s, Rich_Web_SimpleVS_L_C = %s, Rich_Web_SimpleVS_LT_T2_AnC = %s, Rich_Web_SimpleVS_LT_T3_BgC = %s, Rich_Web_SimpleVS_L_S = %s, Rich_Web_SimpleVS_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_SimpleVS_L_Show, $Rich_Web_SimpleVS_LT_Show, $Rich_Web_SimpleVS_LT, $Rich_Web_SimpleVS_L_BgC, $Rich_Web_SimpleVS_L_T, $Rich_Web_SimpleVS_LT_T, $Rich_Web_SimpleVS_LT_FS, $Rich_Web_SimpleVS_LT_FF, $Rich_Web_SimpleVS_LT_C, $Rich_Web_SimpleVS_L_T1_C, $Rich_Web_SimpleVS_L_T2_C, $Rich_Web_SimpleVS_L_T3_C, $Rich_Web_SimpleVS_LT_T2_BC, $Rich_Web_SimpleVS_L_C, $Rich_Web_SimpleVS_LT_T2_AnC, $Rich_Web_SimpleVS_LT_T3_BgC, $Rich_Web_SimpleVS_L_S, $Rich_Web_SimpleVS_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Video Slider/Vertical Thumbnails')
				{
					//Video Slider/Vertical Thumbnails
					$Rich_Web_VTVS_AP=sanitize_text_field($_POST['Rich_Web_VTVS_AP']); $Rich_Web_VTVS_APS=sanitize_text_field($_POST['Rich_Web_VTVS_APS']); $Rich_Web_VTVS_CS=sanitize_text_field($_POST['Rich_Web_VTVS_CS']); $Rich_Web_VTVS_PT=sanitize_text_field($_POST['Rich_Web_VTVS_PT']); $Rich_Web_VTVS_ArrSt=sanitize_text_field($_POST['Rich_Web_VTVS_ArrSt']); $Rich_Web_VTVS_H=sanitize_text_field($_POST['Rich_Web_VTVS_H']); $Rich_Web_VTVS_BW=sanitize_text_field($_POST['Rich_Web_VTVS_BW']); $Rich_Web_VTVS_BS=sanitize_text_field($_POST['Rich_Web_VTVS_BS']); $Rich_Web_VTVS_BoxShShow=sanitize_text_field($_POST['Rich_Web_VTVS_BoxShShow']); $Rich_Web_VTVS_BoxShType=sanitize_text_field($_POST['Rich_Web_VTVS_BoxShType']); $Rich_Web_VTVS_BoxSh=sanitize_text_field($_POST['Rich_Web_VTVS_BoxSh']); $Rich_Web_VTVS_TShow=sanitize_text_field($_POST['Rich_Web_VTVS_TShow']); $Rich_Web_VTVS_TFS=sanitize_text_field($_POST['Rich_Web_VTVS_TFS']); $Rich_Web_VTVS_TFF=sanitize_text_field($_POST['Rich_Web_VTVS_TFF']); $Rich_Web_VTVS_Th_BW=sanitize_text_field($_POST['Rich_Web_VTVS_Th_BW']); $Rich_Web_VTVS_Th_BS=sanitize_text_field($_POST['Rich_Web_VTVS_Th_BS']); $Rich_Web_VTVS_Th_BR=sanitize_text_field($_POST['Rich_Web_VTVS_Th_BR']); $Rich_Web_VTVS_LFS=sanitize_text_field($_POST['Rich_Web_VTVS_LFS']); $Rich_Web_VTVS_PFS=sanitize_text_field($_POST['Rich_Web_VTVS_PFS']); $Rich_Web_VTVS_ArrShow=sanitize_text_field($_POST['Rich_Web_VTVS_ArrShow']); $Rich_Web_VTVS_ArrFS=sanitize_text_field($_POST['Rich_Web_VTVS_ArrFS']);
					//Video Slider/Vertical Thumbnails Loading
					$Rich_Web_VSVT_L_Show=sanitize_text_field($_POST['Rich_Web_VSVT_L_Show']); $Rich_Web_VSVT_LT_Show=sanitize_text_field($_POST['Rich_Web_VSVT_LT_Show']); $Rich_Web_VSVT_LT=sanitize_text_field($_POST['Rich_Web_VSVT_LT']); $Rich_Web_VSVT_L_BgC=sanitize_text_field($_POST['Rich_Web_VSVT_L_BgC']); $Rich_Web_VSVT_L_T=sanitize_text_field($_POST['Rich_Web_VSVT_L_T']); $Rich_Web_VSVT_LT_T=sanitize_text_field($_POST['Rich_Web_VSVT_LT_T']); $Rich_Web_VSVT_LT_FS=sanitize_text_field($_POST['Rich_Web_VSVT_LT_FS']);$Rich_Web_VSVT_LT_FF=sanitize_text_field($_POST['Rich_Web_VSVT_LT_FF']); $Rich_Web_VSVT_LT_C=sanitize_text_field($_POST['Rich_Web_VSVT_LT_C']); $Rich_Web_VSVT_L_T1_C=sanitize_text_field($_POST['Rich_Web_VSVT_L_T1_C']); $Rich_Web_VSVT_L_T2_C=sanitize_text_field($_POST['Rich_Web_VSVT_L_T2_C']); $Rich_Web_VSVT_L_T3_C=sanitize_text_field($_POST['Rich_Web_VSVT_L_T3_C']); $Rich_Web_VSVT_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_VSVT_LT_T2_BC']); $Rich_Web_VSVT_L_C=sanitize_text_field($_POST['Rich_Web_VSVT_L_C']); $Rich_Web_VSVT_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_VSVT_LT_T2_AnC']); $Rich_Web_VSVT_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_VSVT_LT_T3_BgC']); $Rich_Web_VSVT_L_S=sanitize_text_field($_POST['Rich_Web_VSVT_L_S']); $Rich_Web_VSVT_Loading_Show=sanitize_text_field($_POST['Rich_Web_VSVT_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name10 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VTVS_AP = %s, Rich_Web_VTVS_APS = %s, Rich_Web_VTVS_CS = %s, Rich_Web_VTVS_PT = %s, Rich_Web_VTVS_ArrSt = %s, Rich_Web_VTVS_H = %s, Rich_Web_VTVS_BW = %s, Rich_Web_VTVS_BS = %s, Rich_Web_VTVS_BoxShShow = %s, Rich_Web_VTVS_BoxShType = %s, Rich_Web_VTVS_BoxSh = %s, Rich_Web_VTVS_TShow = %s, Rich_Web_VTVS_TFS = %s, Rich_Web_VTVS_TFF = %s, Rich_Web_VTVS_Th_BW = %s, Rich_Web_VTVS_Th_BS = %s, Rich_Web_VTVS_Th_BR = %s, Rich_Web_VTVS_LFS = %s, Rich_Web_VTVS_PFS = %s, Rich_Web_VTVS_ArrShow = %s, Rich_Web_VTVS_ArrFS = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VTVS_AP, $Rich_Web_VTVS_APS, $Rich_Web_VTVS_CS, $Rich_Web_VTVS_PT, $Rich_Web_VTVS_ArrSt, $Rich_Web_VTVS_H, $Rich_Web_VTVS_BW, $Rich_Web_VTVS_BS, $Rich_Web_VTVS_BoxShShow, $Rich_Web_VTVS_BoxShType, $Rich_Web_VTVS_BoxSh, $Rich_Web_VTVS_TShow, $Rich_Web_VTVS_TFS, $Rich_Web_VTVS_TFF, $Rich_Web_VTVS_Th_BW, $Rich_Web_VTVS_Th_BS, $Rich_Web_VTVS_Th_BR, $Rich_Web_VTVS_LFS, $Rich_Web_VTVS_PFS, $Rich_Web_VTVS_ArrShow, $Rich_Web_VTVS_ArrFS, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name10_Loader set Rich_Web_VSVT_L_Show = %s, Rich_Web_VSVT_LT_Show = %s, Rich_Web_VSVT_LT = %s, Rich_Web_VSVT_L_BgC = %s, Rich_Web_VSVT_L_T = %s, Rich_Web_VSVT_LT_T = %s, Rich_Web_VSVT_LT_FS = %s, Rich_Web_VSVT_LT_FF = %s, Rich_Web_VSVT_LT_C = %s, Rich_Web_VSVT_L_T1_C = %s, Rich_Web_VSVT_L_T2_C = %s, Rich_Web_VSVT_L_T3_C = %s, Rich_Web_VSVT_LT_T2_BC = %s, Rich_Web_VSVT_L_C = %s, Rich_Web_VSVT_LT_T2_AnC = %s, Rich_Web_VSVT_LT_T3_BgC = %s, Rich_Web_VSVT_L_S = %s, Rich_Web_VSVT_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_VSVT_L_Show, $Rich_Web_VSVT_LT_Show, $Rich_Web_VSVT_LT, $Rich_Web_VSVT_L_BgC, $Rich_Web_VSVT_L_T, $Rich_Web_VSVT_LT_T, $Rich_Web_VSVT_LT_FS, $Rich_Web_VSVT_LT_FF, $Rich_Web_VSVT_LT_C, $Rich_Web_VSVT_L_T1_C, $Rich_Web_VSVT_L_T2_C, $Rich_Web_VSVT_L_T3_C, $Rich_Web_VSVT_LT_T2_BC, $Rich_Web_VSVT_L_C, $Rich_Web_VSVT_LT_T2_AnC, $Rich_Web_VSVT_LT_T3_BgC, $Rich_Web_VSVT_L_S, $Rich_Web_VSVT_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Horizontal Posts Slider')
				{
					//Horizontal Posts Slider
					$Rich_Web_VS_HPS_AP = empty($_POST['Rich_Web_VS_HPS_AP'])  ? 'off' : sanitize_text_field($_POST['Rich_Web_VS_HPS_AP']);
					$Rich_Web_HSL_LT_Show = empty($_POST['Rich_Web_HSL_LT_Show'])  ? 'off' : sanitize_text_field($_POST['Rich_Web_HSL_LT_Show']);
					$Rich_Web_VS_HPS_Loop=sanitize_text_field($_POST['Rich_Web_VS_HPS_Loop']); $Rich_Web_VS_HPS_Cols=sanitize_text_field($_POST['Rich_Web_VS_HPS_Cols']); $Rich_Web_VS_HPS_Speed=sanitize_text_field($_POST['Rich_Web_VS_HPS_Speed']);  $Rich_Web_VS_HPS_EH=sanitize_text_field($_POST['Rich_Web_VS_HPS_EH']); $Rich_Web_VS_HPS_PB=sanitize_text_field($_POST['Rich_Web_VS_HPS_PB']); $Rich_Web_VS_HPS_Car=sanitize_text_field($_POST['Rich_Web_VS_HPS_Car']); $Rich_Web_VS_HPS_NP_Show=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_Show']); $Rich_Web_VS_HPS_NP_NText=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_NText']); $Rich_Web_VS_HPS_NP_PText=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_PText']); $Rich_Web_VS_HPS_NP_FS=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_FS']); $Rich_Web_VS_HPS_NP_FF=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_FF']); $Rich_Web_VS_HPS_NP_BW=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_BW']); $Rich_Web_VS_HPS_NP_BS=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_BS']); $Rich_Web_VS_HPS_NP_BR=sanitize_text_field($_POST['Rich_Web_VS_HPS_NP_BR']); $Rich_Web_VS_HPS_TFS=sanitize_text_field($_POST['Rich_Web_VS_HPS_TFS']); $Rich_Web_VS_HPS_TFF=sanitize_text_field($_POST['Rich_Web_VS_HPS_TFF']); $Rich_Web_VS_HPS_DShow=sanitize_text_field($_POST['Rich_Web_VS_HPS_DShow']); $Rich_Web_VS_HPS_LText=sanitize_text_field($_POST['Rich_Web_VS_HPS_LText']); $Rich_Web_VS_HPS_LFS=sanitize_text_field($_POST['Rich_Web_VS_HPS_LFS']); $Rich_Web_VS_HPS_LFF=sanitize_text_field($_POST['Rich_Web_VS_HPS_LFF']); $Rich_Web_VS_HPS_PText=sanitize_text_field($_POST['Rich_Web_VS_HPS_PText']); $Rich_Web_VS_HPS_PFS=sanitize_text_field($_POST['Rich_Web_VS_HPS_PFS']); $Rich_Web_VS_HPS_PFF=sanitize_text_field($_POST['Rich_Web_VS_HPS_PFF']); $Rich_Web_VS_HPS_Pop_BW=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BW']); $Rich_Web_VS_HPS_Pop_BS=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BS']); $Rich_Web_VS_HPS_Pop_BoxShShow=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BoxShShow']); $Rich_Web_VS_HPS_Pop_BoxShType=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BoxShType']); $Rich_Web_VS_HPS_Pop_BoxSh=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_BoxSh']); $Rich_Web_VS_HPS_Pop_CIS=sanitize_text_field($_POST['Rich_Web_VS_HPS_Pop_CIS']);
					//Horizontal Posts Slider Loading
					$Rich_Web_HSL_L_Show=sanitize_text_field($_POST['Rich_Web_HSL_L_Show']);  $Rich_Web_HSL_LT=sanitize_text_field($_POST['Rich_Web_HSL_LT']); $Rich_Web_HSL_L_BgC=sanitize_text_field($_POST['Rich_Web_HSL_L_BgC']); $Rich_Web_HSL_L_T=sanitize_text_field($_POST['Rich_Web_HSL_L_T']); $Rich_Web_HSL_LT_T=sanitize_text_field($_POST['Rich_Web_HSL_LT_T']); $Rich_Web_HSL_LT_FS=sanitize_text_field($_POST['Rich_Web_HSL_LT_FS']);$Rich_Web_HSL_LT_FF=sanitize_text_field($_POST['Rich_Web_HSL_LT_FF']); $Rich_Web_HSL_LT_C=sanitize_text_field($_POST['Rich_Web_HSL_LT_C']); $Rich_Web_HSL_L_T1_C=sanitize_text_field($_POST['Rich_Web_HSL_L_T1_C']); $Rich_Web_HSL_L_T2_C=sanitize_text_field($_POST['Rich_Web_HSL_L_T2_C']); $Rich_Web_HSL_L_T3_C=sanitize_text_field($_POST['Rich_Web_HSL_L_T3_C']); $Rich_Web_HSL_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_HSL_LT_T2_BC']); $Rich_Web_HSL_L_C=sanitize_text_field($_POST['Rich_Web_HSL_L_C']); $Rich_Web_HSL_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_HSL_LT_T2_AnC']); $Rich_Web_HSL_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_HSL_LT_T3_BgC']); $Rich_Web_HSL_L_S=sanitize_text_field($_POST['Rich_Web_HSL_L_S']); $Rich_Web_HSL_Loading_Show=sanitize_text_field($_POST['Rich_Web_HSL_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name11 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_VS_HPS_Loop = %s, Rich_Web_VS_HPS_Cols = %s, Rich_Web_VS_HPS_Speed = %s, Rich_Web_VS_HPS_AP = %s, Rich_Web_VS_HPS_EH = %s, Rich_Web_VS_HPS_PB = %s, Rich_Web_VS_HPS_Car = %s, Rich_Web_VS_HPS_NP_Show = %s, Rich_Web_VS_HPS_NP_NText = %s, Rich_Web_VS_HPS_NP_PText = %s, Rich_Web_VS_HPS_NP_FS = %s, Rich_Web_VS_HPS_NP_FF = %s, Rich_Web_VS_HPS_NP_BW = %s, Rich_Web_VS_HPS_NP_BS = %s, Rich_Web_VS_HPS_NP_BR = %s, Rich_Web_VS_HPS_TFS = %s, Rich_Web_VS_HPS_TFF = %s, Rich_Web_VS_HPS_DShow = %s, Rich_Web_VS_HPS_LText = %s, Rich_Web_VS_HPS_LFS = %s, Rich_Web_VS_HPS_LFF = %s, Rich_Web_VS_HPS_PText = %s, Rich_Web_VS_HPS_PFS = %s, Rich_Web_VS_HPS_PFF = %s, Rich_Web_VS_HPS_Pop_BW = %s, Rich_Web_VS_HPS_Pop_BS = %s, Rich_Web_VS_HPS_Pop_BoxShShow = %s, Rich_Web_VS_HPS_Pop_BoxShType = %s, Rich_Web_VS_HPS_Pop_BoxSh = %s, Rich_Web_VS_HPS_Pop_CIS = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_VS_HPS_Loop, $Rich_Web_VS_HPS_Cols, $Rich_Web_VS_HPS_Speed, $Rich_Web_VS_HPS_AP, $Rich_Web_VS_HPS_EH, $Rich_Web_VS_HPS_PB, $Rich_Web_VS_HPS_Car, $Rich_Web_VS_HPS_NP_Show, $Rich_Web_VS_HPS_NP_NText, $Rich_Web_VS_HPS_NP_PText, $Rich_Web_VS_HPS_NP_FS, $Rich_Web_VS_HPS_NP_FF, $Rich_Web_VS_HPS_NP_BW, $Rich_Web_VS_HPS_NP_BS, $Rich_Web_VS_HPS_NP_BR, $Rich_Web_VS_HPS_TFS, $Rich_Web_VS_HPS_TFF, $Rich_Web_VS_HPS_DShow, $Rich_Web_VS_HPS_LText, $Rich_Web_VS_HPS_LFS, $Rich_Web_VS_HPS_LFF, $Rich_Web_VS_HPS_PText, $Rich_Web_VS_HPS_PFS, $Rich_Web_VS_HPS_PFF, $Rich_Web_VS_HPS_Pop_BW, $Rich_Web_VS_HPS_Pop_BS, $Rich_Web_VS_HPS_Pop_BoxShShow, $Rich_Web_VS_HPS_Pop_BoxShType, $Rich_Web_VS_HPS_Pop_BoxSh, $Rich_Web_VS_HPS_Pop_CIS, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name11_Loader set Rich_Web_HSL_L_Show = %s, Rich_Web_HSL_LT_Show = %s, Rich_Web_HSL_LT = %s, Rich_Web_HSL_L_BgC = %s, Rich_Web_HSL_L_T = %s, Rich_Web_HSL_LT_T = %s, Rich_Web_HSL_LT_FS = %s, Rich_Web_HSL_LT_FF = %s, Rich_Web_HSL_LT_C = %s, Rich_Web_HSL_L_T1_C = %s, Rich_Web_HSL_L_T2_C = %s, Rich_Web_HSL_L_T3_C = %s, Rich_Web_HSL_LT_T2_BC = %s, Rich_Web_HSL_L_C = %s, Rich_Web_HSL_LT_T2_AnC = %s, Rich_Web_HSL_LT_T3_BgC = %s, Rich_Web_HSL_L_S = %s, Rich_Web_HSL_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_HSL_L_Show, $Rich_Web_HSL_LT_Show, $Rich_Web_HSL_LT, $Rich_Web_HSL_L_BgC, $Rich_Web_HSL_L_T, $Rich_Web_HSL_LT_T, $Rich_Web_HSL_LT_FS, $Rich_Web_HSL_LT_FF, $Rich_Web_HSL_LT_C, $Rich_Web_HSL_L_T1_C, $Rich_Web_HSL_L_T2_C, $Rich_Web_HSL_L_T3_C, $Rich_Web_HSL_LT_T2_BC, $Rich_Web_HSL_L_C, $Rich_Web_HSL_LT_T2_AnC, $Rich_Web_HSL_LT_T3_BgC, $Rich_Web_HSL_L_S, $Rich_Web_HSL_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Rich Slider')
				{
					//Rich Slider
					$Rich_Web_RVVS_Sh=sanitize_text_field($_POST['Rich_Web_RVVS_Sh']);$Rich_Web_RVVS_ShT=sanitize_text_field($_POST['Rich_Web_RVVS_ShT']);$Rich_Web_RVVS_NI_BW=sanitize_text_field($_POST['Rich_Web_RVVS_NI_BW']);$Rich_Web_RVVS_NT_FS=sanitize_text_field($_POST['Rich_Web_RVVS_NT_FS']);$Rich_Web_RVVS_NT_FF=sanitize_text_field($_POST['Rich_Web_RVVS_NT_FF']);$Rich_Web_RVVS_NImg_BW=sanitize_text_field($_POST['Rich_Web_RVVS_NImg_BW']);$Rich_Web_RVVS_NImg_BR=sanitize_text_field($_POST['Rich_Web_RVVS_NImg_BR']);$Rich_Web_RVVS_NImg_BSh=sanitize_text_field($_POST['Rich_Web_RVVS_NImg_BSh']);$Rich_Web_RVVS_NImg_ShT=sanitize_text_field($_POST['Rich_Web_RVVS_NImg_ShT']);$Rich_Web_RVVS_IT_FS=sanitize_text_field($_POST['Rich_Web_RVVS_IT_FS']);$Rich_Web_RVVS_IT_FF=sanitize_text_field($_POST['Rich_Web_RVVS_IT_FF']);$Rich_Web_RVVS_PlIc_FS=sanitize_text_field($_POST['Rich_Web_RVVS_PlIc_FS']);$Rich_Web_RVVS_DelIc_FS=sanitize_text_field($_POST['Rich_Web_RVVS_DelIc_FS']);
					//Rich Slider Loading
					$Rich_Web_RichSl_L_Show = empty($_POST['Rich_Web_RichSl_L_Show'])  ? 'off' : sanitize_text_field($_POST['Rich_Web_RichSl_L_Show']);

					$Rich_Web_RichSl_LT_Show=sanitize_text_field($_POST['Rich_Web_RichSl_LT_Show']); $Rich_Web_RichSl_LT=sanitize_text_field($_POST['Rich_Web_RichSl_LT']); $Rich_Web_RichSl_L_BgC=sanitize_text_field($_POST['Rich_Web_RichSl_L_BgC']); $Rich_Web_RichSl_L_T=sanitize_text_field($_POST['Rich_Web_RichSl_L_T']); $Rich_Web_RichSl_LT_T=sanitize_text_field($_POST['Rich_Web_RichSl_LT_T']); $Rich_Web_RichSl_LT_FS=sanitize_text_field($_POST['Rich_Web_RichSl_LT_FS']);$Rich_Web_RichSl_LT_FF=sanitize_text_field($_POST['Rich_Web_RichSl_LT_FF']); $Rich_Web_RichSl_LT_C=sanitize_text_field($_POST['Rich_Web_RichSl_LT_C']); $Rich_Web_RichSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_RichSl_L_T1_C']); $Rich_Web_RichSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_RichSl_L_T2_C']); $Rich_Web_RichSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_RichSl_L_T3_C']); $Rich_Web_RichSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_RichSl_LT_T2_BC']); $Rich_Web_RichSl_L_C=sanitize_text_field($_POST['Rich_Web_RichSl_L_C']); $Rich_Web_RichSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_RichSl_LT_T2_AnC']); $Rich_Web_RichSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_RichSl_LT_T3_BgC']); $Rich_Web_RichSl_L_S=sanitize_text_field($_POST['Rich_Web_RichSl_L_S']); $Rich_Web_RichSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_RichSl_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name12 set  Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_RVVS_Sh = %s, Rich_Web_RVVS_ShT = %s, Rich_Web_RVVS_NI_BW = %s, Rich_Web_RVVS_NT_FS = %s, Rich_Web_RVVS_NT_FF = %s, Rich_Web_RVVS_NImg_BW = %s, Rich_Web_RVVS_NImg_BR = %s, Rich_Web_RVVS_NImg_BSh = %s, Rich_Web_RVVS_NImg_ShT = %s, Rich_Web_RVVS_IT_FS = %s, Rich_Web_RVVS_IT_FF = %s, Rich_Web_RVVS_PlIc_FS = %s, Rich_Web_RVVS_DelIc_FS = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_RVVS_Sh, $Rich_Web_RVVS_ShT, $Rich_Web_RVVS_NI_BW, $Rich_Web_RVVS_NT_FS, $Rich_Web_RVVS_NT_FF, $Rich_Web_RVVS_NImg_BW, $Rich_Web_RVVS_NImg_BR, $Rich_Web_RVVS_NImg_BSh, $Rich_Web_RVVS_NImg_ShT, $Rich_Web_RVVS_IT_FS, $Rich_Web_RVVS_IT_FF, $Rich_Web_RVVS_PlIc_FS, $Rich_Web_RVVS_DelIc_FS, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name12_Loader set Rich_Web_RichSl_L_Show = %s, Rich_Web_RichSl_LT_Show = %s, Rich_Web_RichSl_LT = %s, Rich_Web_RichSl_L_BgC = %s, Rich_Web_RichSl_L_T = %s, Rich_Web_RichSl_LT_T = %s, Rich_Web_RichSl_LT_FS = %s, Rich_Web_RichSl_LT_FF = %s, Rich_Web_RichSl_LT_C = %s, Rich_Web_RichSl_L_T1_C = %s, Rich_Web_RichSl_L_T2_C = %s, Rich_Web_RichSl_L_T3_C = %s, Rich_Web_RichSl_LT_T2_BC = %s, Rich_Web_RichSl_L_C = %s, Rich_Web_RichSl_LT_T2_AnC = %s, Rich_Web_RichSl_LT_T3_BgC = %s, Rich_Web_RichSl_L_S = %s, Rich_Web_RichSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_RichSl_L_Show, $Rich_Web_RichSl_LT_Show, $Rich_Web_RichSl_LT, $Rich_Web_RichSl_L_BgC, $Rich_Web_RichSl_L_T, $Rich_Web_RichSl_LT_T, $Rich_Web_RichSl_LT_FS, $Rich_Web_RichSl_LT_FF, $Rich_Web_RichSl_LT_C, $Rich_Web_RichSl_L_T1_C, $Rich_Web_RichSl_L_T2_C, $Rich_Web_RichSl_L_T3_C, $Rich_Web_RichSl_LT_T2_BC, $Rich_Web_RichSl_L_C, $Rich_Web_RichSl_LT_T2_AnC, $Rich_Web_RichSl_LT_T3_BgC, $Rich_Web_RichSl_L_S, $Rich_Web_RichSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='TimeLine Slider')
				{
					//Timeline
					$Rich_Web_MS_SSh = empty($_POST['Rich_Web_MS_SSh'])  ? 'off' : sanitize_text_field($_POST['Rich_Web_MS_SSh']);
					$Rich_Web_MS_Autoplay = empty($_POST['Rich_Web_MS_Autoplay'])  ? 'off' : sanitize_text_field($_POST['Rich_Web_MS_Autoplay']);
					$Rich_Web_MS_W=sanitize_text_field($_POST['Rich_Web_MS_W']);  $Rich_Web_MS_SShChT=sanitize_text_field($_POST['Rich_Web_MS_SShChT']); $Rich_Web_MS_BSh=sanitize_text_field($_POST['Rich_Web_MS_BSh']); $Rich_Web_MS_ShT=sanitize_text_field($_POST['Rich_Web_MS_ShT']);  $Rich_Web_MS_N_BW=sanitize_text_field($_POST['Rich_Web_MS_N_BW']); $Rich_Web_MS_N_BS=sanitize_text_field($_POST['Rich_Web_MS_N_BS']); $Rich_Web_MS_NI_FS=sanitize_text_field($_POST['Rich_Web_MS_NI_FS']); $Rich_Web_MS_NI_FF=sanitize_text_field($_POST['Rich_Web_MS_NI_FF']); $Rich_Web_MS_Img_BW=sanitize_text_field($_POST['Rich_Web_MS_Img_BW']); $Rich_Web_MS_Img_BS=sanitize_text_field($_POST['Rich_Web_MS_Img_BS']); $Rich_Web_MS_Img_BSh=sanitize_text_field($_POST['Rich_Web_MS_Img_BSh']); $Rich_Web_MS_Img_ShT=sanitize_text_field($_POST['Rich_Web_MS_Img_ShT']); $Rich_Web_MS_T_FS=sanitize_text_field($_POST['Rich_Web_MS_T_FS']); $Rich_Web_MS_T_FF=sanitize_text_field($_POST['Rich_Web_MS_T_FF']); $Rich_Web_MS_T_TA=sanitize_text_field($_POST['Rich_Web_MS_T_TA']); $Rich_Web_MS_T_TSh=sanitize_text_field($_POST['Rich_Web_MS_T_TSh']); $Rich_Web_MS_Ic_S=sanitize_text_field($_POST['Rich_Web_MS_Ic_S']); $Rich_Web_MS_PlIc_S=sanitize_text_field($_POST['Rich_Web_MS_PlIc_S']);
					//TimeLine Slider Loading
					$Rich_Web_TSL_L_Show=sanitize_text_field($_POST['Rich_Web_TSL_L_Show']); $Rich_Web_TSL_LT_Show=sanitize_text_field($_POST['Rich_Web_TSL_LT_Show']); $Rich_Web_TSL_LT=sanitize_text_field($_POST['Rich_Web_TSL_LT']); $Rich_Web_TSL_L_BgC=sanitize_text_field($_POST['Rich_Web_TSL_L_BgC']); $Rich_Web_TSL_L_T=sanitize_text_field($_POST['Rich_Web_TSL_L_T']); $Rich_Web_TSL_LT_T=sanitize_text_field($_POST['Rich_Web_TSL_LT_T']); $Rich_Web_TSL_LT_FS=sanitize_text_field($_POST['Rich_Web_TSL_LT_FS']);$Rich_Web_TSL_LT_FF=sanitize_text_field($_POST['Rich_Web_TSL_LT_FF']); $Rich_Web_TSL_LT_C=sanitize_text_field($_POST['Rich_Web_TSL_LT_C']); $Rich_Web_TSL_L_T1_C=sanitize_text_field($_POST['Rich_Web_TSL_L_T1_C']); $Rich_Web_TSL_L_T2_C=sanitize_text_field($_POST['Rich_Web_TSL_L_T2_C']); $Rich_Web_TSL_L_T3_C=sanitize_text_field($_POST['Rich_Web_TSL_L_T3_C']); $Rich_Web_TSL_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_TSL_LT_T2_BC']); $Rich_Web_TSL_L_C=sanitize_text_field($_POST['Rich_Web_TSL_L_C']); $Rich_Web_TSL_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_TSL_LT_T2_AnC']); $Rich_Web_TSL_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_TSL_LT_T3_BgC']); $Rich_Web_TSL_L_S=sanitize_text_field($_POST['Rich_Web_TSL_L_S']); $Rich_Web_TSL_Loading_Show=sanitize_text_field($_POST['Rich_Web_TSL_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name13 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_MS_W = %s, Rich_Web_MS_SSh = %s, Rich_Web_MS_SShChT = %s, Rich_Web_MS_BSh = %s, Rich_Web_MS_ShT = %s, Rich_Web_MS_Autoplay = %s, Rich_Web_MS_N_BW = %s, Rich_Web_MS_N_BS = %s, Rich_Web_MS_NI_FS = %s, Rich_Web_MS_NI_FF = %s, Rich_Web_MS_Img_BW = %s, Rich_Web_MS_Img_BS = %s, Rich_Web_MS_Img_BSh = %s, Rich_Web_MS_Img_ShT = %s, Rich_Web_MS_T_FS = %s, Rich_Web_MS_T_FF = %s, Rich_Web_MS_T_TA = %s, Rich_Web_MS_T_TSh = %s, Rich_Web_MS_Ic_S = %s, Rich_Web_MS_PlIc_S = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_MS_W, $Rich_Web_MS_SSh, $Rich_Web_MS_SShChT, $Rich_Web_MS_BSh, $Rich_Web_MS_ShT, $Rich_Web_MS_Autoplay, $Rich_Web_MS_N_BW, $Rich_Web_MS_N_BS, $Rich_Web_MS_NI_FS, $Rich_Web_MS_NI_FF, $Rich_Web_MS_Img_BW, $Rich_Web_MS_Img_BS, $Rich_Web_MS_Img_BSh, $Rich_Web_MS_Img_ShT, $Rich_Web_MS_T_FS, $Rich_Web_MS_T_FF, $Rich_Web_MS_T_TA, $Rich_Web_MS_T_TSh, $Rich_Web_MS_Ic_S, $Rich_Web_MS_PlIc_S, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name13_Loader set Rich_Web_TSL_L_Show = %s, Rich_Web_TSL_LT_Show = %s, Rich_Web_TSL_LT = %s, Rich_Web_TSL_L_BgC = %s, Rich_Web_TSL_L_T = %s, Rich_Web_TSL_LT_T = %s, Rich_Web_TSL_LT_FS = %s, Rich_Web_TSL_LT_FF = %s, Rich_Web_TSL_LT_C = %s, Rich_Web_TSL_L_T1_C = %s, Rich_Web_TSL_L_T2_C = %s, Rich_Web_TSL_L_T3_C = %s, Rich_Web_TSL_LT_T2_BC = %s, Rich_Web_TSL_L_C = %s, Rich_Web_TSL_LT_T2_AnC = %s, Rich_Web_TSL_LT_T3_BgC = %s, Rich_Web_TSL_L_S = %s, Rich_Web_TSL_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_TSL_L_Show, $Rich_Web_TSL_LT_Show, $Rich_Web_TSL_LT, $Rich_Web_TSL_L_BgC, $Rich_Web_TSL_L_T, $Rich_Web_TSL_LT_T, $Rich_Web_TSL_LT_FS, $Rich_Web_TSL_LT_FF, $Rich_Web_TSL_LT_C, $Rich_Web_TSL_L_T1_C, $Rich_Web_TSL_L_T2_C, $Rich_Web_TSL_L_T3_C, $Rich_Web_TSL_LT_T2_BC, $Rich_Web_TSL_L_C, $Rich_Web_TSL_LT_T2_AnC, $Rich_Web_TSL_LT_T3_BgC, $Rich_Web_TSL_L_S, $Rich_Web_TSL_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
				else if($Rich_Web_VSlider_Option_Type=='Amazing Simple Slider')
				{
					//Amazing Simple Slider
					$Rich_Web_GO_NS1_Width=sanitize_text_field($_POST['Rich_Web_GO_NS1_Width']); $Rich_Web_GO_NS1_Height=sanitize_text_field($_POST['Rich_Web_GO_NS1_Height']); $Rich_Web_GO_NS1_PTime=sanitize_text_field($_POST['Rich_Web_GO_NS1_PTime']); $Rich_Web_GO_NS1_BW=sanitize_text_field($_POST['Rich_Web_GO_NS1_BW']); $Rich_Web_GO_NS1_BType=sanitize_text_field($_POST['Rich_Web_GO_NS1_BType']); $Rich_Web_GO_NS1_BSh=sanitize_text_field($_POST['Rich_Web_GO_NS1_BSh']); $Rich_Web_GO_NS1_BSh_Type=sanitize_text_field($_POST['Rich_Web_GO_NS1_BSh_Type']); $Rich_Web_TO_NS1_FSize=sanitize_text_field($_POST['Rich_Web_TO_NS1_FSize']); $Rich_Web_TO_NS1_FFamily=sanitize_text_field($_POST['Rich_Web_TO_NS1_FFamily']); $Rich_Web_TO_NS1_Num_FSize=sanitize_text_field($_POST['Rich_Web_TO_NS1_Num_FSize']); $Rich_Web_TO_NS1_Num_FFamily=sanitize_text_field($_POST['Rich_Web_TO_NS1_Num_FFamily']); $Rich_Web_PO_NS1_Width=sanitize_text_field($_POST['Rich_Web_PO_NS1_Width']); $Rich_Web_PO_NS1_Height=sanitize_text_field($_POST['Rich_Web_PO_NS1_Height']); $Rich_Web_PO_NS1_PB=sanitize_text_field($_POST['Rich_Web_PO_NS1_PB']); $Rich_Web_IO_NS1_FSize=sanitize_text_field($_POST['Rich_Web_IO_NS1_FSize']); $Rich_Web_IO_NS1_Width=sanitize_text_field($_POST['Rich_Web_IO_NS1_Width']); $Rich_Web_IO_NS1_Height=sanitize_text_field($_POST['Rich_Web_IO_NS1_Height']); $Rich_Web_GO_NS1_Align=sanitize_text_field($_POST['Rich_Web_GO_NS1_Align']);
					//Amazing Simple Slider Loading
					$Rich_Web_ASSl_L_Show=sanitize_text_field($_POST['Rich_Web_ASSl_L_Show']); $Rich_Web_ASSl_LT_Show=sanitize_text_field($_POST['Rich_Web_ASSl_LT_Show']); $Rich_Web_ASSl_LT=sanitize_text_field($_POST['Rich_Web_ASSl_LT']); $Rich_Web_ASSl_L_BgC=sanitize_text_field($_POST['Rich_Web_ASSl_L_BgC']); $Rich_Web_ASSl_L_T=sanitize_text_field($_POST['Rich_Web_ASSl_L_T']); $Rich_Web_ASSl_LT_T=sanitize_text_field($_POST['Rich_Web_ASSl_LT_T']); $Rich_Web_ASSl_LT_FS=sanitize_text_field($_POST['Rich_Web_ASSl_LT_FS']);$Rich_Web_ASSl_LT_FF=sanitize_text_field($_POST['Rich_Web_ASSl_LT_FF']); $Rich_Web_ASSl_LT_C=sanitize_text_field($_POST['Rich_Web_ASSl_LT_C']); $Rich_Web_ASSl_L_T1_C=sanitize_text_field($_POST['Rich_Web_ASSl_L_T1_C']); $Rich_Web_ASSl_L_T2_C=sanitize_text_field($_POST['Rich_Web_ASSl_L_T2_C']); $Rich_Web_ASSl_L_T3_C=sanitize_text_field($_POST['Rich_Web_ASSl_L_T3_C']); $Rich_Web_ASSl_LT_T2_BC=sanitize_text_field($_POST['Rich_Web_ASSl_LT_T2_BC']); $Rich_Web_ASSl_L_C=sanitize_text_field($_POST['Rich_Web_ASSl_L_C']); $Rich_Web_ASSl_LT_T2_AnC=sanitize_text_field($_POST['Rich_Web_ASSl_LT_T2_AnC']); $Rich_Web_ASSl_LT_T3_BgC=sanitize_text_field($_POST['Rich_Web_ASSl_LT_T3_BgC']); $Rich_Web_ASSl_L_S=sanitize_text_field($_POST['Rich_Web_ASSl_L_S']); $Rich_Web_ASSl_Loading_Show=sanitize_text_field($_POST['Rich_Web_ASSl_Loading_Show']);
					$wpdb->query($wpdb->prepare("UPDATE $table_name14 set Rich_Web_VSlider_Option_Name = %s, Rich_Web_VSlider_Option_Type = %s, Rich_Web_GO_NS1_Width = %s, Rich_Web_GO_NS1_Height = %s, Rich_Web_GO_NS1_PTime = %s, Rich_Web_GO_NS1_BW = %s, Rich_Web_GO_NS1_BType = %s, Rich_Web_GO_NS1_BSh = %s, Rich_Web_GO_NS1_BSh_Type = %s, Rich_Web_TO_NS1_FSize = %s, Rich_Web_TO_NS1_FFamily = %s, Rich_Web_TO_NS1_Num_FSize = %s, Rich_Web_TO_NS1_Num_FFamily = %s, Rich_Web_PO_NS1_Width = %s, Rich_Web_PO_NS1_Height = %s, Rich_Web_PO_NS1_PB = %s, Rich_Web_IO_NS1_FSize = %s, Rich_Web_IO_NS1_Width = %s, Rich_Web_IO_NS1_Height = %s, Rich_Web_GO_NS1_Align = %s WHERE RW_VS_ID = %d", $Rich_Web_VSlider_Option_Name, $Rich_Web_VSlider_Option_Type, $Rich_Web_GO_NS1_Width, $Rich_Web_GO_NS1_Height, $Rich_Web_GO_NS1_PTime, $Rich_Web_GO_NS1_BW, $Rich_Web_GO_NS1_BType, $Rich_Web_GO_NS1_BSh, $Rich_Web_GO_NS1_BSh_Type, $Rich_Web_TO_NS1_FSize, $Rich_Web_TO_NS1_FFamily, $Rich_Web_TO_NS1_Num_FSize, $Rich_Web_TO_NS1_Num_FFamily, $Rich_Web_PO_NS1_Width, $Rich_Web_PO_NS1_Height, $Rich_Web_PO_NS1_PB, $Rich_Web_IO_NS1_FSize, $Rich_Web_IO_NS1_Width, $Rich_Web_IO_NS1_Height, $Rich_Web_GO_NS1_Align, $Rich_Web_VSlider_Upd_ID));
					$wpdb->query($wpdb->prepare("UPDATE $table_name14_Loader set Rich_Web_ASSl_L_Show = %s, Rich_Web_ASSl_LT_Show = %s, Rich_Web_ASSl_LT = %s, Rich_Web_ASSl_L_BgC = %s, Rich_Web_ASSl_L_T = %s, Rich_Web_ASSl_LT_T = %s, Rich_Web_ASSl_LT_FS = %s, Rich_Web_ASSl_LT_FF = %s, Rich_Web_ASSl_LT_C = %s, Rich_Web_ASSl_L_T1_C = %s, Rich_Web_ASSl_L_T2_C = %s, Rich_Web_ASSl_L_T3_C = %s, Rich_Web_ASSl_LT_T2_BC = %s, Rich_Web_ASSl_L_C = %s, Rich_Web_ASSl_LT_T2_AnC = %s, Rich_Web_ASSl_LT_T3_BgC = %s, Rich_Web_ASSl_L_S = %s, Rich_Web_ASSl_Loading_Show = %s WHERE RW_VS_ID = %s", $Rich_Web_ASSl_L_Show, $Rich_Web_ASSl_LT_Show, $Rich_Web_ASSl_LT, $Rich_Web_ASSl_L_BgC, $Rich_Web_ASSl_L_T, $Rich_Web_ASSl_LT_T, $Rich_Web_ASSl_LT_FS, $Rich_Web_ASSl_LT_FF, $Rich_Web_ASSl_LT_C, $Rich_Web_ASSl_L_T1_C, $Rich_Web_ASSl_L_T2_C, $Rich_Web_ASSl_L_T3_C, $Rich_Web_ASSl_LT_T2_BC, $Rich_Web_ASSl_L_C, $Rich_Web_ASSl_LT_T2_AnC, $Rich_Web_ASSl_LT_T3_BgC, $Rich_Web_ASSl_L_S, $Rich_Web_ASSl_Loading_Show, $Rich_Web_VSlider_Upd_ID));
				}
			}
		}
		else
		{
			wp_die('Security check fail'); 
		}
	}
	$Rich_WebSliderCount=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id>%d",0));
	$Rich_Web_VSlider_Fonts=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name WHERE id>%d",0));
	$RW_VS_All_T = ['Content Slider' ,'Slick Slider','Thumbnails Slider' ,'Video Carousel/Content Popup' ,'Simple Video Slider' ,'Video Slider/Vertical Thumbnails' ,'Horizontal Posts Slider' ,'Rich Slider' ,'TimeLine Slider' ,'Amazing Simple Slider' ,'News Slider' ];
	$RW_VS_All_FR = ['Content Slider' ,'Thumbnails Slider' ,'Video Carousel/Content Popup' ,'Video Slider/Vertical Thumbnails' ,'Horizontal Posts Slider' ,'Rich Slider' ,'TimeLine Slider'];
	$RW_VS_All_Ins = $RW_VS_All_N_Ins = [];
	foreach($Rich_WebSliderCount as $RW_VS_Opt_Types) { $RW_VS_All_Ins[] = $RW_VS_Opt_Types->slider_Vid_type; }
	$RW_VS_All_Ins = array_values(array_unique($RW_VS_All_Ins));
	$RW_VS_All_N_Ins = array_values(array_diff($RW_VS_All_T,$RW_VS_All_Ins));

?>
<style>
.RW_VS_Buttons_Bar { width: 99%; margin: 10px 0px ; display: flex; flex-direction: row; flex-wrap: nowrap; align-content: flex-end; justify-content: flex-end; align-items: center;}
.RW_Support_btn,.RW_VS_Pro_But{box-shadow: 0px 0px 2px #ce0000; padding: 5px 10px !important; width: 100px !important;  cursor: pointer; border: none; color: #fff; text-shadow: 1px 1px 1px #000000; margin: 5px;background-color: #990000;background-image: linear-gradient(147deg, #990000 0%, #ff0000 74%); }
.RW_Support_btn:hover,.RW_VS_Pro_But:hover{ background-color: #ff0000;background-image: linear-gradient(147deg, #d00b0b 0%, #ff0000 74%);color: #ffffff;}
.RW_VS_Pre_Load{position: fixed;left: 50%;top: 50%;transform: translate(-50%, -50%)}.RW_VS_Pre_Spin{position:absolute;top:0;width:50px;height:50px;border-radius:50%;border:15px solid #23282d;animation:rw_tabs_anim_rotation 3s infinite linear;-webkit-animation:rw_tabs_anim_rotation 3s infinite linear;-moz-animation:rw_tabs_anim_rotation 3s infinite linear;-o-animation:rw_tabs_anim_rotation 3s infinite linear}.RW_VS_Pre_Spin:before{content:"";display:block;position:absolute;left:-15px;top:-15px;height:100%;width:100%;border-top:15px solid #6ecae9;opacity:.8;border-left:15px solid transparent;border-bottom:15px solid transparent;border-right:15px solid transparent;border-radius:50%}@-webkit-keyframes rw_tabs_anim_rotation{from{-webkit-transform:rotate(0)}to{-webkit-transform:rotate(359deg)}}@-moz-keyframes rw_tabs_anim_rotation{from{-moz-transform:rotate(0)}to{-moz-transform:rotate(359deg)}}@-o-keyframes rw_tabs_anim_rotation{from{-o-transform:rotate(0)}to{-o-transform:rotate(359deg)}}@keyframes rw_tabs_anim_rotation{from{transform:rotate(0)}to{transform:rotate(359deg)}}
.RW_VS_Pre_Rounder{position:absolute;top:-15px;left:-15px;width:70px;height:70px;border:20px solid;border-radius:50%;border-top-color:#6ecae9;border-left-color:#fff;border-bottom-color:#6ecae9;border-right-color:#fff;opacity:.2;animation:rw_tabs_anim_load_one 5s infinite;-webkit-animation:rw_tabs_anim_load_one 5s infinite;-moz-animation:rw_tabs_anim_load_one 5s infinite;-o-animation:rw_tabs_anim_load_one 5s infinite}@keyframes rw_tabs_anim_load_one{0%{transform:scale(1,1) rotate(0);opacity:.2}50%{transform:scale(4,4) rotate(360deg);opacity:0}}@-webkit-keyframes rw_tabs_anim_load_one{0%{-webkit-transform:scale(1,1) rotate(0);opacity:.2}50%{-webkit-transform:scale(4,4) rotate(360deg);opacity:0}}@-moz-keyframes rw_tabs_anim_load_one{0%{-moz-transform:scale(1,1) rotate(0);opacity:.2}50%{-moz-transform:scale(4,4) rotate(360deg);opacity:0}}@-o-keyframes rw_tabs_anim_load_one{0%{-o-transform:scale(1,1) rotate(0);opacity:.2}50%{-o-transform:scale(4,4) rotate(360deg);opacity:0}}.RW_VS_Pre_Rounder_Sec{opacity:.1;transform:rotate(90deg);-webkit-transform:rotate(90deg);-moz-transform:rotate(90deg);-o-transform:rotate(90deg);animation:rw_tabs_anim_load_two5s infinite;-webkit-animation:rw_tabs_anim_load_two5s infinite;-moz-animation:rw_tabs_anim_load_two5s infinite;-o-animation:rw_tabs_anim_load_two5s infinite;animation-delay:1s;-webkit-animation-delay:1s;-moz-animation-delay:1s;-o-animation-delay:1s}@keyframes rw_tabs_anim_load_two{0%{transform:scale(1,1) rotate(90deg);opacity:.1}50%{transform:scale(4,4) rotate(-360deg);opacity:0}}@-webkit-keyframes rw_tabs_anim_load_two{0%{-webkit-transform:scale(1,1) rotate(90deg);opacity:.1}50%{-webkit-transform:scale(4,4) rotate(-360deg);opacity:0}}@-moz-keyframes rw_tabs_anim_load_two{0%{-moz-transform:scale(1,1) rotate(90deg);opacity:.1}50%{-moz-transform:scale(4,4) rotate(-360deg);opacity:0}}@-o-keyframes rw_tabs_anim_load_two{0%{-o-transform:scale(1,1) rotate(90deg);opacity:.1}50%{-o-transform:scale(4,4) rotate(-360deg);opacity:0}}.RW_VS_Pre_Loader_T{position:absolute;top:95px;left:-38px;font-family:Arial;color:#999;letter-spacing:3px;min-width:160px;text-align:center;-webkit-animation:rw_tabs_text 5s infinite;-moz-animation:rw_tabs_text 5s infinite;-o-animation:rw_tabs_text 5s infinite;animation:rw_tabs_text 5s infinite}@-webkit-keyframes rw_tabs_text{0%{opacity:1}10%{opacity:.5}15%{opacity:1}30%{opacity:1}65%{opacity:.3}90%{opacity:.8}}@-moz-keyframes rw_tabs_text{0%{opacity:1}10%{opacity:.5}15%{opacity:1}30%{opacity:1}65%{opacity:.3}90%{opacity:.8}}@-o-keyframes rw_tabs_text{0%{opacity:1}10%{opacity:.5}15%{opacity:1}30%{opacity:1}65%{opacity:.3}90%{opacity:.8}}@keyframes rw_tabs_text{0%{opacity:1}10%{opacity:.5}15%{opacity:1}30%{opacity:1}65%{opacity:.3}90%{opacity:.8}}.RW_VS_Pre_Div{position:fixed;top:0;background:#23282d;z-index:200;width:100%;height:100%;display:flex;justify-content:center;vertical-align:middle;bottom:0}
.Rich_Web_VSlider_Opt_Table_Data{width:99%;}
.Rich_Web_VSlider_Add_Opt {  padding: 5px 10px; background: #47bde5; cursor: pointer; border: none; box-shadow: 0px 0px 2px #47bde5; color: #fff; text-shadow:1px 1px 1px #000000; width: initial !important;  transition:all 0.3s linear; }
.Rich_Web_VSlider_Add_OptAnim { width:0px !important; padding:0px !important; transition:all 0s linear; }
.Rich_Web_VSlider_Sav_Opt,.Rich_Web_VSlider_Can_Opt,.Rich_Web_VSlider_Upd_Opt {  padding: 0px; background: #47bde5; cursor: pointer; border: none; box-shadow: 0px 0px 2px #47bde5; color: #fff; text-shadow:1px 1px 1px #000000; width:0px;  transition:all 0.3s linear; }
.Rich_Web_VSlider_Sav_OptAnim { padding: 5px 10px !important; width: initial !important; right:80px !important; transition:all 0s linear; }
.Rich_Web_VSlider_Sav_Opt:hover,.Rich_Web_VSlider_Can_Opt:hover,.Rich_Web_VSlider_Upd_Opt:hover, .Rich_Web_VSlider_Add_Opt:hover { color: #fff; background:#30a9d1; box-shadow: 0px 0px 2px #30a9d1; }      	
.Rich_Web_VSlider_Can_OptAnim { padding: 5px 10px !important; width:initial !important; transition:all 0s linear; }
.Rich_Web_VSlider_Opt_Content_Div { position:relative; width: 99%; height: 140px; background: #34383c; margin-top: 30px; box-shadow: 0px 0px 30px #727d87; }
.Rich_Web_SliderVd_Fixed_Div { position: fixed; left: 0; top: 0; width: 100%; height: 100%; z-index: 999999999999; background: rgba(0, 0, 0, 0.2); display: none; }
.Rich_Web_SliderVd_Absolute_Div { position: fixed; width: 100%; z-index: 9999999999999; top: 50%; transform: translateY(-50%); left: 0; text-align: center; display: none; }
.Rich_Web_SliderVd_Relative_Div { position: relative; background: #47bde5; margin: 0 auto; padding: 5px 10px; color: #ffffff; border: 2px solid #ffffff; float: left; left: 50%; transform: translateX(-50%); text-shadow: 1px 1px 1px #000000; }
.Rich_Web_SliderVd_Relative_Div p { font-size: 16px; width: 100%; }
.Rich_Web_SliderVd_Relative_Div span { position: relative; float: right; margin: 5px 10px; padding: 5px 10px; background: #ffffff; color: #47bde5; cursor: pointer; border: 1px solid #ffffff; border-radius: 5px; text-shadow: none; }
.Rich_Web_SliderVd_Relative_Div span:hover { color: #ffffff; background: #30a9d1; text-shadow: 1px 1px 1px #000000; }
.RW_VS_Content_Bar{background-color:#23282d;display:flex;flex-wrap:wrap;align-content:center;justify-content:center;gap:30px;padding:20px 0;}
.Rich_Web_VS_Opt_Content{display:inline-flex;height:100%;width:21%;position:relative}
.Rich_Web_VS_Image{display:inline-block;width:100%;opacity:1;border-radius:9px;box-shadow:0 0 8px #5a5757}
.Rich_Web_VS_Opt_Content:hover .Rich_Web_VS_Image,.Rich_Web_VS_Opt_Content_H .Rich_Web_VS_Image{opacity:.2}
.Rich_Web_VS_Name{text-align:center;color:#fff;font-family:initial}
.Rich_Web_VS_Opt_Content:hover .Rich_Web_VS_Name,.Rich_Web_VS_Opt_Content_H .Rich_Web_VS_Name{font-size:15px;display:flex;width:100%;color:#fff;flex-direction:column;align-items: center;}
.Rich_Web_VS_All_Icons{position:absolute;display:none}
.Rich_Web_VS_Opt_Content:hover .Rich_Web_VS_All_Icons,.Rich_Web_VS_Opt_Content_H .Rich_Web_VS_All_Icons{display:flex;width:100%;background-color:#1c1b1b9e;border-radius:9px;bottom:0;top:0;flex-direction:column;align-items:center}
.Rich_Web_VS_Icon_Opt{display:flex;gap:7px;cursor:pointer;font-size:25px}
.Rich_Web_VS_Icon{visibility:hidden}
.Rich_Web_VS_Opt_Content:hover .Rich_Web_VS_Icon,.Rich_Web_VS_Opt_Content_H .Rich_Web_VS_Icon{visibility:visible;border-radius:7px;background-color:#055c82;cursor:pointer;display:inline-block;justify-content:center;width:17px;font-size:15px;text-align:center;padding:7px}
.Rich_Web_VS_Icon>i{color:#fff}
.Rich_Web_VS_Icon_Opt>.Rich_Web_VS_Icon:nth-child(1){background-color:#f2cf07;background-image:linear-gradient(315deg,#f2cf07 0,#55d284 74%)}
.Rich_Web_VS_Icon_Opt>.Rich_Web_VS_Icon:nth-child(2){background-color:#f5d020;background-image:linear-gradient(315deg,#f5d020 0,#f53803 74%)}
.Rich_Web_VS_Icon_Opt>.Rich_Web_VS_Icon:nth-child(3){background-color:#ff7878;background-image:linear-gradient(315deg,#ff7878 0,red 74%)}
@media only screen and (max-width:992px){.Rich_Web_VS_Opt_Content{width:28%}}
@media only screen and (max-width:692px){.Rich_Web_VS_Opt_Content{width:45%}}
@media only screen and (max-width:400px){.Rich_Web_VS_Opt_Content{width:95%}}
.RW_VS_Nav_Bar{display:flex;gap:7px;overflow-x:auto;background-color:#23282d;width:100%;border-bottom:2px #6ecae9 solid;flex-wrap:nowrap;flex-direction:row;justify-content:flex-start;align-items:flex-start}
.RW_VS_Nav_Bar_Button{text-decoration:none;color:#fff;padding:8px 19px;background-color:#23282d;border:0;font-size:16px;cursor:pointer;box-shadow:0 0 8px grey;margin:6px;border-radius:7px;outline:0}
.RW_VS_Nav_Bar_Button.active{color:white;background-color:#6ecae9;outline:0}
.RW_VS_Nav_Bar_Button:hover {color: white;background-color: #6ecae9;outline: none;}
.RW_VS_Nav_Bar::-webkit-scrollbar {width: 5px;height:5px;}
.RW_VS_Nav_Bar::-webkit-scrollbar-thumb { border-radius: 8px; box-shadow: inset 0 0 5px rgb(0 0 0 / 30%); background-color: #6ecae9; border: 1px solid #47bde5;}
.rich_web_vidSlide-spin {margin-right:5px; -webkit-animation: vidSliderSpin 2s infinite linear;animation: vidSliderSpin 2s infinite linear;}
@keyframes vidSliderSpin {0% {-webkit-transform: rotate(0deg);transform: rotate(0deg); }100% {-webkit-transform: rotate(359deg);transform: rotate(359deg); }}
.rw_vs_icon_install , .rw_vs_icon_spinner {background-color: #63a4ff;background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);border: none;color: white;padding: 7px 12px;cursor: pointer;font-size: 15px;border-radius: 7px;}
.Rich_Web_VS_Trash{color: red;font-size: 25px;display: inherit;margin-bottom: 9px;}
.rw_vs_but_cancel {background-color: #990000;background-image: linear-gradient(147deg, #990000 0%, #ff0000 74%);opacity: 0.7;border: none;color: white;padding: 6px 11px;cursor: pointer;font-size: 13px;border-radius: 7px;margin-right: 10px;}
.rw_vs_but_delete {background-color: #63a4ff;background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);opacity: 0.7;border: none;color: white;padding: 6px 11px;cursor: pointer;font-size: 13px;border-radius: 7px;}
.rw_vs_but_cancel:hover , .rw_vs_but_delete:hover{ opacity:1;}
.Rich_Web_VS_Opt_Content:hover .rw_vs_but_install , .Rich_Web_VS_Opt_Content_H .rw_vs_but_install,.Rich_Web_VS_Opt_Content_H .rw_vs_but_demo,.Rich_Web_VS_Opt_Content:hover .rw_vs_but_demo{visibility: visible;}
.rw_vs_but_install {background-color: #63a4ff;background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);border: none;color: white;padding: 7px 12px;cursor: pointer;font-size: 15px;border-radius: 7px;visibility: hidden;}
.rw_vs_but_demo {  background-color: #f9c5d1 !important;background-image: linear-gradient(315deg, #f9c5d1 0%, #9795ef 74%) !important; border: none;color: white;padding: 7px 9px;cursor: pointer;font-size: 15px;border-radius: 7px;visibility: hidden;}
@keyframes scaledAnim { 0%   { transform: scale(0.9); } 100% { transform: scale(1.1); }}
.Rich_Web_VSlider_Pro { font-weight: 900; color: #ff0000; font-size: 14px; margin-left: 5px; cursor: default; }
.Rich_Web_VS_Pro_Badge_Overlay { position: absolute; left: 0%; top: 0px; width: 32%; height: 81%; overflow: hidden; pointer-events: none; z-index: 100; -webkit-transition: width 1s ease, height 1s ease; -moz-transition: width 1s ease, height 1s ease; -o-transition: width 1s ease, height 1s ease; transition: width 0.4s ease, height 0.4s ease;}
.Rich_Web_VS_Pro_Badge {margin: 0;padding: 0;color: white;padding: 4px 0px;font-size: 10px;font-family: Arial, Helvetica, sans-serif;line-height: normal;text-transform: uppercase;background: #47a3da;}
.Rich_Web_VS_Pro_Badge::before, .Rich_Web_VS_Pro_Badge::after { content: ''; position: absolute; top: 0; margin: 0 -1px; width: 100%; height: 100%; background: inherit; min-width: 55px}
.Rich_Web_VS_Pro_Badge::before {right: 100%}
.Rich_Web_VS_Pro_Badge::after {left: 100%}
.Rich_Web_VS_Badge_TopLeft { position: absolute; top: 0; left: 0; -ms-transform: translateX(-30%) translateY(0%) rotate(-45deg); -webkit-transform: translateX(-30%) translateY(0%) rotate(-45deg); transform: translateX(-30%) translateY(0%) rotate(-45deg); -ms-transform-origin: top right; -webkit-transform-origin: top right; transform-origin: top right;}
</style>
<script>jQuery(window).load(function(){jQuery(".RW_VS_Pre_Div").hide(); });</script>
<form method="POST">
	<?php wp_nonce_field( 'edit-menu_', 'Rich_Web_VSlider_Nonce' );?>
	<?php require_once( 'Rich-Web-Video-Slider-Header.php' ); ?>
	<?php require_once( 'Rich-Web-Video-Slider-Check.php' ); ?>
	<div class="RW_VS_Buttons_Bar">
		<input type="button"   class="RW_Support_btn" value="Support" onclick="window.open('https:&sol;&sol;wordpress.org/support/plugin/slider-video/','_blank')"/>
		<input type='button' class='Rich_Web_VSlider_Add_Opt' value='Add Option(Pro)' onclick='Rich_Web_VSlider_Add_Option()'/>
		<input type='submit' class='Rich_Web_VSlider_Upd_Opt' value='Update'     name='Rich_Web_VSlider_Upd_Opt'/>
		<input type='button' class='Rich_Web_VSlider_Can_Opt' value='Cancel'     onclick='Rich_Web_VSlider_Can_Option()'/>
		<input type='text'   id="Rich_Web_VSlider_Upd_ID"  style='display:none'  name='Rich_Web_VSlider_Upd_ID'>
	</div>
	<div class="RW_VS_Pre_Div"> <div class="RW_VS_Pre_Load"> <div class="RW_VS_Pre_Spin"></div><div class="RW_VS_Pre_Rounder"></div><div class="RW_VS_Pre_Rounder RW_VS_Pre_Rounder_Sec"></div><div class="RW_VS_Pre_Loader_T"> Loading </div></div></div>
	<div class="rw_loading_c_vs" style="display: none;"><div class="cont_cont_vs"><div class="cssload-thecube_vs"><div class="cssload-cube_vs cssload-c1_vs"></div><div class="cssload-cube_vs cssload-c2_vs"></div><div class="cssload-cube_vs cssload-c4_vs"></div><div class="cssload-cube_vs cssload-c3_vs"></div></div><div class="RW_Loader_Text_Navigation_vs">Please Wait !</div></div></div>
	<div class="Rich_Web_SliderVd_Fixed_Div"></div>
	<div class="Rich_Web_SliderVd_Absolute_Div">
		<div class="Rich_Web_SliderVd_Relative_Div">
			<p> Are you sure you want to remove ? </p>
			<span class="Rich_Web_SliderVd_Relative_No">No</span>
			<span class="Rich_Web_SliderVd_Relative_Yes">Yes</span>
		</div>
	</div>
	<div class='Rich_Web_VSlider_Opt_Content_Div_2' >
		<div class='Rich_Web_VSlider_Opt_Table_Data'>
			<div class="RW_VS_Nav_Bar" id="rw_video_slider_nbar">
    			<button class="RW_VS_Nav_Bar_Button all active" onclick="RW_VS_Filter_Options('all')">All</button>
    			<button class="RW_VS_Nav_Bar_Button free" onclick="RW_VS_Filter_Options('free')">Free</button>
    			<button class="RW_VS_Nav_Bar_Button pro" onclick="RW_VS_Filter_Options('pro')">Pro</button>
			</div>
			<div class="RW_VS_Content_Bar" id="rw_video_slider_cbar">
			<?php for($i=0;$i<count($Rich_WebSliderCount);$i++){ 
					if (strpos($Rich_WebSliderCount[$i]->slider_Vid_type, '/') !== false) :
					$RW_VS_Opt_Type = explode(" ",preg_replace("/\//",' ',$Rich_WebSliderCount[$i]->slider_Vid_type));
					$RW_VS_Opt_Type = $RW_VS_Opt_Type[0]. '-' .$RW_VS_Opt_Type[1];
					else:
					$RW_VS_Opt_Type = explode(" ", $Rich_WebSliderCount[$i]->slider_Vid_type);
					$RW_VS_Opt_Type = $RW_VS_Opt_Type[0];
					endif;
			?>
			<div id="Rich_Web_VS_Opt_Content_<?= $Rich_WebSliderCount[$i]->id ;?>" class="Rich_Web_VS_Opt_Content  <?= in_array($Rich_WebSliderCount[$i]->slider_Vid_type,$RW_VS_All_FR) ? 'free' : 'pro' ; ?>">
					<img src="https://rich-web.org/RW-Video-Slider/Theme-Images/WordPress-Video-Slider-<?= $RW_VS_Opt_Type  ?>.png" alt="<?= $Rich_WebSliderCount[$i]->slider_vid_name; ?>" class="Rich_Web_VS_Image">
					<div class="Rich_Web_VS_All_Icons">
						<h4 class="Rich_Web_VS_Name"><?= $Rich_WebSliderCount[$i]->slider_vid_name;?></h4>
						<div class="Rich_Web_VS_Icon_Opt" id="Rich_Web_VS_Icon_Opt_<?= $Rich_WebSliderCount[$i]->id ;?>">
                   			<div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Edit_Option(<?= $Rich_WebSliderCount[$i]->id ;?>)">
                   			    <i class="Rich_Web_VS_Edit rich_web rich_web-pencil"></i>
                   			</div>    
                   			<div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Copy_Option(<?= $Rich_WebSliderCount[$i]->id ;?>)">
                   			    <i class="Rich_Web_VS_Copy rich_web rich_web-files-o"></i>
                   			</div>    
							<div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Del_Option(<?= $Rich_WebSliderCount[$i]->id ;?>)">
								<i class="Rich_Web_VS_Del rich_web rich_web-trash"></i>
							</div>
						</div>
					</div>	
			</div>
			<?php } 
			for($i=0;$i<count($RW_VS_All_N_Ins);$i++){
				if (strpos($RW_VS_All_N_Ins[$i], '/') !== false) :
				$RW_VS_Opt_Type = explode(" ",preg_replace("/\//",' ',$RW_VS_All_N_Ins[$i]));
				$RW_VS_Opt_Type = $RW_VS_Opt_Type[0]. '-' .$RW_VS_Opt_Type[1];
				else:
				$RW_VS_Opt_Type = explode(" ", $RW_VS_All_N_Ins[$i]);
				$RW_VS_Opt_Type = $RW_VS_Opt_Type[0];
				endif;  ?>
				<div id="Rich_Web_VS_Opt_Content_<?= $RW_VS_Opt_Type ;?>" class="Rich_Web_VS_Opt_Content  <?= in_array($RW_VS_All_N_Ins[$i],$RW_VS_All_FR) ? 'free' : 'pro' ; ?>" >
					<img src="https://rich-web.org/RW-Video-Slider/Theme-Images/WordPress-Video-Slider-<?= $RW_VS_Opt_Type  ?>.png" alt="<?= $RW_VS_All_N_Ins[$i]; ?>" class="Rich_Web_VS_Image">
					<?php if (!in_array($RW_VS_All_N_Ins[$i],$RW_VS_All_FR)) : ?>
					<div class="Rich_Web_VS_Pro_Badge_Overlay">
                    	<span class="Rich_Web_VS_Badge_TopLeft Rich_Web_VS_Pro_Badge">Pro</span>
                	</div>
					<?php endif;?>
					<div class="Rich_Web_VS_All_Icons">
						<h4 class="Rich_Web_VS_Name"><?= $RW_VS_All_N_Ins[$i]; ?></h4>
						<div class="Rich_Web_VS_Icon_Opt" id="Rich_Web_VS_Icon_Opt_<?= $RW_VS_Opt_Type ;?>">
						<?php if (in_array($RW_VS_All_N_Ins[$i],$RW_VS_All_FR)) : ?>
							<button class="rw_vs_but_demo"
                            onclick="Rich_Web_VS_Demo('<?= $RW_VS_Opt_Type ;?>')">
							<i class="Rich_Web_VS_Demo rich_web rich_web-eye"></i></button> 
                            <button class="rw_vs_but_install"
                            onclick="Rich_Web_VS_Insert('<?= $RW_VS_Opt_Type ;?>')">
							<i class="Rich_Web_VS_Install rich_web rich_web-cloud-download"></i>
							 Insert</button> 
						<?php else: ?>
							<button class="rw_vs_but_demo"
                            onclick="Rich_Web_VS_Demo('<?= $RW_VS_Opt_Type ;?>')">
							<i class=" rich_web rich_web-photo"></i>
							Pro Only</button> 
						<?php endif; ?>	
						</div>
					</div>	
				</div>
			<?php } ?>
			</div>

		</div>
		<div class='Rich_Web_VSlider_Opt_Table_Data_2'>
			<table class='Rich_Web_VSlider_Save_Table'>
				<tr>
					<td>Slider Name</td>
					<td>Slider Type</td>
				</tr>
				<tr>
					<td>
				
						<input type="text" class="Rich_Web_VSlider_Text_Field" name="Rich_Web_VSlider_Option_Name" id="Rich_Web_VSlider_Option_Name" oninput="Rich_Web_VS_Name_Available()" required placeholder="* Required">
						<div class="RW_VS_Name_ErrorAl " style="display:none;">
                                This name isn't avaible
                        </div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Text_Field" id="Rich_Web_VSlider_Option_Type" name="Rich_Web_VSlider_Option_Type" >
						<?php for ($t=0; $t < count($RW_VS_All_T); $t++) { ?>
							<option value="<?= $RW_VS_All_T[$t] ?>"><?= $RW_VS_All_T[$t] ?></option>
							<?php } ?></select>
					</td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_1" data-rwvs-short="VS_ContSl" data-rwvs-type="Content Slider">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Changing Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Easing Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Strips</td>
					<td>Block Cols</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_CE" name="">
							<option value="random">                Random                </option>
							<option value="left-curtain">          Left Curtain          </option>
							<option value="right-curtain">         Right Curtain         </option>
							<option value="top-curtain">           Top Curtain           </option>
							<option value="bottom-curtain">        Bottom Curtain        </option>
							<option value="strip-down-right">      Strip Down Right      </option>
							<option value="strip-down-left">       Strip Down Left       </option>
							<option value="strip-up-right">        Strip Up Right        </option>
							<option value="strip-up-left">         Strip Up Left         </option>
							<option value="strip-up-down">         Strip Up Down         </option>
							<option value="strip-up-down-left">    Strip Up Down Left    </option>
							<option value="strip-left-right">      Strip Left Right      </option>
							<option value="strip-left-right-down"> Strip Left Right Down </option>
							<option value="slide-in-right">        Slide in Right        </option>
							<option value="slide-in-left">         Slide in Left         </option>
							<option value="slide-in-up">           Slide in Up           </option>
							<option value="slide-in-down">         Slide in Down         </option>
							<option value="fade">                  Fade                  </option>
							<option value="block-random">          Block Random          </option>
							<option value="block-fade">            Block Fade            </option>
							<option value="block-fade-reverse">    Block Fade Reverse    </option>
							<option value="block-expand">          Block Expand          </option>
							<option value="block-expand-reverse">  Block Expand Reverse  </option>
							<option value="block-expand-random">   Block Expand Random   </option>
							<option value="zigzag-top">            Zigzag Top            </option>
							<option value="zigzag-bottom">         Zigzag Bottom         </option>
							<option value="zigzag-grow-top">       Zigzag Grow Top       </option>
							<option value="zigzag-grow-bottom">    Zigzag Grow Bottom    </option>
							<option value="zigzag-drop-top">       Zigzag Drop Top       </option>
							<option value="zigzag-drop-bottom">    Zigzag Drop Bottom    </option>
							<option value="strip-top-fade">        Strip Top Fade        </option>
							<option value="strip-bottom-fade">     Strip Bottom Fade     </option>
							<option value="block-drop-random">     Block Drop Random     </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_EE" name="">
							<option value="swing">            Swing               </option>
							<option value="easeInQuad">       Ease In Quad        </option>
							<option value="easeOutQuad">      Ease Out Quad       </option>
							<option value="easeInOutQuad">    Ease In Out Quad    </option>
							<option value="easeInCubic">      Ease In Cubic       </option>
							<option value="easeOutCubic">     Ease Out Cubic      </option>
							<option value="easeInOutCubic">   Ease In Out Cubic   </option>
							<option value="easeInQuart">      Ease In Quart       </option>
							<option value="easeOutQuart">     Ease Out Quart      </option>
							<option value="easeInOutQuart">   Ease In Out Quart   </option>
							<option value="easeInQuint">      Ease In Quint       </option>
							<option value="easeOutQuint">     Ease Out Quint      </option>
							<option value="easeInOutQuint">   Ease In Out Quint   </option>
							<option value="easeInSine">       Ease In Sine        </option>
							<option value="easeOutSine">      Ease Out Sine       </option>
							<option value="easeInOutSine">    Ease In Out Sine    </option>
							<option value="easeInExpo">       Ease In Expo        </option>
							<option value="easeOutExpo">      Ease Out Expo       </option>
							<option value="easeInOutExpo">    Ease In Out Expo    </option>
							<option value="easeInCirc">       Ease In Circ        </option>
							<option value="easeOutCirc">      Ease Out Circ       </option>
							<option value="easeInOutCirc">    Ease In Out Circ    </option>
							<option value="easeInElastic">    Ease In Elastic     </option>
							<option value="easeOutElastic">   Ease Out Elastic    </option>
							<option value="easeInOutElastic"> Ease In Out Elastic </option>
							<option value="easeInBack">       Ease In Back        </option>
							<option value="easeOutBack">      Ease Out Back       </option>
							<option value="easeInOutBack">    Ease In Out Back    </option>
							<option value="easeInBounce">     Ease In Bounce      </option>
							<option value="easeOutBounce">    Ease Out Bounce     </option>
							<option value="easeInOutBounce">  Ease In Out Bounce  </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_S" name="Rich_Web_VS_CP_S" min="1" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_CP_S_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_BlC" name="Rich_Web_VS_CP_BlC" min="1" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_CP_BlC_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Block Rows</td>
					<td>Animation Speed (ms)</td>
					<td>Pause Time (s)</td>
					<td>Start Slide <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_BlR" name="Rich_Web_VS_CP_BlR" min="1" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_CP_BlR_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_AS" name="Rich_Web_VS_CP_AS" min="100" max="1500" step='100'>
							<span class="range-slider__value" id="Rich_Web_VS_CP_AS_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_PT" name="Rich_Web_VS_CP_PT" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_CP_PT_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_SS" name="" min="1" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_CP_SS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>AutoPlay</td>
					<td>Pause On Hover</td>
					<td>Random Start</td>
					<td>Box Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_AP" id="Rich_Web_VS_CS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_HP" id="Rich_Web_VS_CS_HP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_RS" id="Rich_Web_VS_CS_RS"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_BSC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_BW" name="Rich_Web_VS_CP_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_CP_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_BS" name="Rich_Web_VS_CP_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_BC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_BR" id="Rich_Web_VS_CP_BR" name="Rich_Web_VS_CP_BR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_CP_BR_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Title-Description Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SL_Width" name="Rich_Web_VS_SL_Width" min="200" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_SL_Width_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SL_Height" name="Rich_Web_VS_SL_Height" min="200" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_SL_Height_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TitDesc_Type" name="">
							<option value="type1"> Type 1 </option>
							<option value="type2"> Type 2 </option>
							<option value="type3"> Type 3 </option>
							<option value="type4"> Type 4 </option>
							<option value="type5"> Type 5 </option>
							<option value="type6"> Type 6 </option>
							<option value="type7"> Type 7 </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation</td>
				</tr>
				<tr>
					<td>Control Navigation</td>
					<td>Next Prev Button</td>
					<td>Opacity (%)</td>
					<td>Navigation Thumbs</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_CN" id="Rich_Web_VS_CS_CN"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_NPB" id="Rich_Web_VS_CS_NPB"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_NO" id="Rich_Web_VS_CP_NO" name="Rich_Web_VS_CP_NO" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_VS_CP_NO_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_CS_NT" id="Rich_Web_VS_CS_NT"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Navigation Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Arrows Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_NT" name="">
							<option value="1"> Type 1 </option>
							<option value="2"> Type 2 </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_AT" name="">
							<option value="1"> Type 1 </option>
							<option value="2"> Type 2 </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Caption Options</td>
				</tr>
				<tr>
					<td>Caption Speed (ms)</td>
					<td>Caption Easing <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Opacity (%)</td>
					<td>Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_CapS" name="Rich_Web_VS_CP_CapS" min="100" max="1000" step="100">
							<span class="range-slider__value" id="Rich_Web_VS_CP_CapS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_CapEs" name="">
							<option value="swing">            Swing               </option>
							<option value="easeInQuad">       Ease In Quad        </option>
							<option value="easeOutQuad">      Ease Out Quad       </option>
							<option value="easeInOutQuad">    Ease In Out Quad    </option>
							<option value="easeInCubic">      Ease In Cubic       </option>
							<option value="easeOutCubic">     Ease Out Cubic      </option>
							<option value="easeInOutCubic">   Ease In Out Cubic   </option>
							<option value="easeInQuart">      Ease In Quart       </option>
							<option value="easeOutQuart">     Ease Out Quart      </option>
							<option value="easeInOutQuart">   Ease In Out Quart   </option>
							<option value="easeInQuint">      Ease In Quint       </option>
							<option value="easeOutQuint">     Ease Out Quint      </option>
							<option value="easeInOutQuint">   Ease In Out Quint   </option>
							<option value="easeInSine">       Ease In Sine        </option>
							<option value="easeOutSine">      Ease Out Sine       </option>
							<option value="easeInOutSine">    Ease In Out Sine    </option>
							<option value="easeInExpo">       Ease In Expo        </option>
							<option value="easeOutExpo">      Ease Out Expo       </option>
							<option value="easeInOutExpo">    Ease In Out Expo    </option>
							<option value="easeInCirc">       Ease In Circ        </option>
							<option value="easeOutCirc">      Ease Out Circ       </option>
							<option value="easeInOutCirc">    Ease In Out Circ    </option>
							<option value="easeInElastic">    Ease In Elastic     </option>
							<option value="easeOutElastic">   Ease Out Elastic    </option>
							<option value="easeInOutElastic"> Ease In Out Elastic </option>
							<option value="easeInBack">       Ease In Back        </option>
							<option value="easeOutBack">      Ease Out Back       </option>
							<option value="easeInOutBack">    Ease In Out Back    </option>
							<option value="easeInBounce">     Ease In Bounce      </option>
							<option value="easeOutBounce">    Ease Out Bounce     </option>
							<option value="easeInOutBounce">  Ease In Out Bounce  </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_CapO" name="Rich_Web_VS_CP_CapO" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_VS_CP_CapO_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_CapE" name="">
							<option value="wipedown">    Wipe Down    </option>
							<option value="wipeup">      Wipe Up      </option>
							<option value="wiperight">   Wipe Right   </option>
							<option value="wipeleft">    Wipe Left    </option>
							<option value="fade">        Fade         </option>
							<option value="expanddown">  Expand Down  </option>
							<option value="expandup">    Expand Up    </option>
							<option value="expandright"> Expand Right </option>
							<option value="expandleft">  Expand Left  </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_TFS" name="Rich_Web_VS_CP_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_TFF" name="Rich_Web_VS_CP_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_TBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_TC" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Description Options</td>
				</tr>
				<tr>
					<td>Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="Rich_Web_VS_CS_DBgC" id="Rich_Web_VS_CS_DBgC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Timer Options</td>
				</tr>
				<tr>
					<td>Timer Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Opacity (%)</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_TiT" name="">
							<option value="pie">    Pie     </option>
							<option value="bar">    Bar     </option>
							<option value="360bar"> 360 Bar </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_TiBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CS_TiC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_TiO" name="Rich_Web_VS_CP_TiO" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiO_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Diameter (px)</td>
					<td>Padding (px)</td>
					<td>Stroke (px)</td>
					<td>Bar Stroke (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_TiD" name="Rich_Web_VS_CP_TiD" min="10" max="40">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiD_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_TiP" name="Rich_Web_VS_CP_TiP" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiP_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_TiS" name="Rich_Web_VS_CP_TiS" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiS_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_CP_TiBS" name="Rich_Web_VS_CP_TiBS" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_CP_TiBS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Bar Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Bar Style <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_CP_TiBC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_TiBSt" name="">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_CP_TiPos" name="">
							<option value="top-left">      Top Left      </option>
							<option value="top-center">    Top Center    </option>
							<option value="top-right">     Top Right     </option>
							<option value="middle-left">   Middle Left   </option>
							<option value="middle-center"> Middle Center </option>
							<option value="middle-right">> Middle Right  </option>
							<option value="bottom-left">   Bottom Left   </option>
							<option value="bottom-center"> Bottom Center </option>
							<option value="bottom-right">  Bottom Right  </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VS_ContSl_L_Show" name="Rich_Web_VS_ContSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VS_ContSl_LT_Show" name="Rich_Web_VS_ContSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VS_ContSl_Loading_Show" name="Rich_Web_VS_ContSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_BgC" id="Rich_Web_VS_ContSl_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT_C" id="Rich_Web_VS_ContSl_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_C" id="Rich_Web_VS_ContSl_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_VS_ContSl_L_S" name="Rich_Web_VS_ContSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT" id="Rich_Web_VS_ContSl_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_VS_ContSl_L_T" name="Rich_Web_VS_ContSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('VS_ContSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_VS_ContSl_LT_T" name="Rich_Web_VS_ContSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('VS_ContSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_ContSl_LT_FS" name="Rich_Web_VS_ContSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_VS_ContSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_ContSl_LT_FF" name="Rich_Web_VS_ContSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?> 
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_T1_C" id="Rich_Web_VS_ContSl_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_T2_C" id="Rich_Web_VS_ContSl_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_L_T3_C" id="Rich_Web_VS_ContSl_L_T3_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT_T2_BC" id="Rich_Web_VS_ContSl_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT_T2_AnC" id="Rich_Web_VS_ContSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_VS_ContSl_LT_T3_BgC" id="Rich_Web_VS_ContSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' id="Rich_Web_VSlider_Save_Table_2_2" data-rwvs-short="SlickSl" data-rwvs-type="Slick Slider">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Effect Duration (s)</td>
					<td>Pause Time (ms)</td>
					<td>Autoplay</td>
					<td>Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_ED" name="Rich_Web_VS_SS_ED" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_SS_ED_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_PT" id="Rich_Web_VS_SS_PT" name="Rich_Web_VS_SS_PT" min="100" max="1000" step="100">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PT_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_SS_AP" id="Rich_Web_VS_SS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_Eff" name="">
							<option value="zoomOut">  Zoom Out  </option>
							<option value="zoomIn">   Zoom In   </option>
							<option value="panUp">    Pan Up    </option>
							<option value="panDown">  Pan Down  </option>
							<option value="panLeft">  Pan Left  </option>
							<option value="panRight"> Pan Right </option>
							<option value="diagTopLeftToBottomRight"> Diag Top Left To Bottom Right </option>
							<option value="diagTopRightToBottomLeft"> Diag Top Right To Bottom Left </option>
							<option value="diagBottomRightToTopLeft"> Diag Bottom Right To Top Left </option>
							<option value="diagBottomLeftToTopRight"> Diag Bottom Left To Top Right </option>
							<option value="zoomOut,zoomIn,panUp,panDown,panLeft,panRight,diagTopLeftToBottomRight,diagTopRightToBottomLeft,diagBottomRightToTopLeft,diagBottomLeftToTopRight"> All </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_W" name="Rich_Web_VS_SS_W" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_SS_W_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_H" name="Rich_Web_VS_SS_H" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_SS_H_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_BW" name="Rich_Web_VS_SS_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_SS_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_BS" name="Rich_Web_VS_SS_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_BC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_SS_TShow" id="Rich_Web_VS_SS_TShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_TFS" name="Rich_Web_VS_SS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_SS_TFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_TFF" name="Rich_Web_VS_SS_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_TC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_TBgC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_TPos" name="">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_SS_NShow" id="Rich_Web_VS_SS_NShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_NC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_NBgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_NS" name="Rich_Web_VS_SS_NS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_SS_NS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_NPos" name="">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Pagination Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_SS_PagShow" id="Rich_Web_VS_SS_PagShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_PagW" name="Rich_Web_VS_SS_PagW" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagW_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_PagH" name="Rich_Web_VS_SS_PagH" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagH_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_PagPB" name="Rich_Web_VS_SS_PagPB" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagPB_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PagBgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_PagBW" name="Rich_Web_VS_SS_PagBW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagBW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_PagBS" name="Rich_Web_VS_SS_PagBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PagBC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_SS_PagBR" name="Rich_Web_VS_SS_PagBR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_SS_PagBR_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PagHC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PagCC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_SS_PagPos" name="">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PIBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PIC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PIHBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_PIHC" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Close Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_CIBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_CIC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_CIHBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_SS_CIHC" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SlickSl_L_Show" name="Rich_Web_SlickSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SlickSl_LT_Show" name="Rich_Web_SlickSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SlickSl_Loading_Show" name="Rich_Web_SlickSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_BgC" id="Rich_Web_SlickSl_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT_C" id="Rich_Web_SlickSl_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_C" id="Rich_Web_SlickSl_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_SlickSl_L_S" name="Rich_Web_SlickSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT" id="Rich_Web_SlickSl_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_SlickSl_L_T" name="Rich_Web_SlickSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('SlickSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_SlickSl_LT_T" name="Rich_Web_SlickSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('SlickSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SlickSl_LT_FS" name="Rich_Web_SlickSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_SlickSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_SlickSl_LT_FF" name="Rich_Web_SlickSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_T1_C" id="Rich_Web_SlickSl_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_T2_C" id="Rich_Web_SlickSl_L_T2_C" class="Rich_Web_VS_Color" value="
						">
					</td>
					<td>
						<input type="text" name="Rich_Web_SlickSl_L_T3_C" id="Rich_Web_SlickSl_L_T3_C" class="Rich_Web_VS_Color" value="
						">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT_T2_BC" id="Rich_Web_SlickSl_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT_T2_AnC" id="Rich_Web_SlickSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_SlickSl_LT_T3_BgC" id="Rich_Web_SlickSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' data-rwvs-short="ThumbSl" data-rwvs-type="Thumbnails Slider" id="Rich_Web_VSlider_Save_Table_2_3">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_W" name="Rich_Web_VS_TS_W" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_TS_W_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_H" name="Rich_Web_VS_TS_H" min="150" max="1200">
							<span class="range-slider__value" id="Rich_Web_VS_TS_H_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_BW" name="Rich_Web_VS_TS_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_TS_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_BS" name="Rich_Web_VS_TS_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
					<td>Shadow (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_BC" value=""/>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_TS_BoxShShow" id="Rich_Web_VS_TS_BoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_TS_BoxShType" id="Rich_Web_VS_TS_BoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_BoxSh" name="Rich_Web_VS_TS_BoxSh" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_TS_BoxSh_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Change Speed (ms)</td>
					<td>Pause Time (s)</td>
					<td>Auto Play</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_BoxShC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_CS" name="Rich_Web_VS_TS_CS" min="100" max="1000" step="100">
							<span class="range-slider__value" id="Rich_Web_VS_TS_CS_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_PT" name="Rich_Web_VS_TS_PT" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_TS_PT_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox"  name="Rich_Web_VS_TS_AP" id="Rich_Web_VS_TS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td colspan="4">Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_IBgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_IBW" name="Rich_Web_VS_TS_IBW" min="0" max="3">
							<span class="range-slider__value" id="Rich_Web_VS_TS_IBW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_IBS" name="Rich_Web_VS_TS_IBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_IBC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_IBR" name="Rich_Web_VS_TS_IBR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_TS_IBR_1">0</span>
						</div>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Thumbnails Options</td>
				</tr>
				<tr>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TPos" name="">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TBgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_TBW" name="Rich_Web_VS_TS_TBW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TBW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TBS" name="Rich_Web_VS_TS_TBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TBC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Thumbnails Images Options</td>
				</tr>
				<tr>
					<td>Height (px)</td>
					<td>Place Between Images (px)</td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_TIH" name="Rich_Web_VS_TS_TIH" min="50" max="150">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIH_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_TIPB" name="Rich_Web_VS_TS_TIPB" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIPB_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_TIBW" name="Rich_Web_VS_TS_TIBW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIBW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TIBS" name="Rich_Web_VS_TS_TIBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TIBC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_TIBR" name="Rich_Web_VS_TS_TIBR" min="0" max="150">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIBR_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_TS_TIBoxShShow" id="Rich_Web_VS_TS_TIBoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox"  name="Rich_Web_VS_TS_TIBoxShType" id="Rich_Web_VS_TS_TIBoxShType"/>
							<span class="switch-label" data-on="on" data-off="off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_TS_TIBoxSh" name="Rich_Web_VS_TS_TIBoxSh" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_VS_TS_TIBoxSh_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TIBoxShC" value=""/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Current Image</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Style</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TICBC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TICBS" name="Rich_Web_VS_TS_TICBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TICBoxShC" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Hover Image</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Style</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TIHBC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_TS_TIHBS" name="Rich_Web_VS_TS_TIHBS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_TIHBoxShC" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_PIBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_PIC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_PIHBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_TS_PIHC" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ThumbSl_L_Show" name="Rich_Web_ThumbSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ThumbSl_LT_Show" name="Rich_Web_ThumbSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ThumbSl_Loading_Show" name="Rich_Web_ThumbSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_BgC" id="Rich_Web_ThumbSl_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT_C" id="Rich_Web_ThumbSl_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_C" id="Rich_Web_ThumbSl_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_ThumbSl_L_S" name="Rich_Web_ThumbSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT" id="Rich_Web_ThumbSl_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_ThumbSl_L_T" name="Rich_Web_ThumbSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('ThumbSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_ThumbSl_LT_T" name="Rich_Web_ThumbSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('ThumbSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_ThumbSl_LT_FS" name="Rich_Web_ThumbSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_ThumbSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_ThumbSl_LT_FF" name="Rich_Web_ThumbSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_T1_C" id="Rich_Web_ThumbSl_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_T2_C" id="Rich_Web_ThumbSl_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_ThumbSl_L_T3_C" id="Rich_Web_ThumbSl_L_T3_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT_T2_BC" id="Rich_Web_ThumbSl_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT_T2_AnC" id="Rich_Web_ThumbSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_ThumbSl_LT_T3_BgC" id="Rich_Web_ThumbSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' data-rwvs-type="Video Carousel/Content Popup" data-rwvs-short="VCCP" id="Rich_Web_VSlider_Save_Table_2_4">
				<tr>
					<td colspan="4">Carousel Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Car_Bg_Color" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Car_Border_Width" name="Rich_Web_VC_Car_Border_Width" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VC_Car_Border_Width_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Car_Border_Style" name="Rich_Web_VC_Car_Border_Style">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Car_Border_Color" value=""/>
					</td>
				</tr>
				<tr>
					<td>Box Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Count Images</td>
					<td>Images Hover Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Car_Box_Shadow" name="Rich_Web_VC_Car_Box_Shadow" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VC_Car_Box_Shadow_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Car_Shadow_Color" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Car_Count_Imgs" name="Rich_Web_VC_Car_Count_Imgs" min="2" max="8">
							<span class="range-slider__value" id="Rich_Web_VC_Car_Count_Imgs_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Car_Imgs_Hover_Type" name="">
							<option value="fImgH1"> Effect 1 </option>
							<option value="fImgH2"> Effect 2 </option>
							<option value="fImgH3"> Effect 3 </option>
							<option value="fImgH4"> Effect 4 </option>
							<option value="fImgH5"> None     </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Place Between Images (px)</td>
					<td>Icons Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Icons Size (px)</td>
					<td><!-- AutoPlay --></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Car_PBImgs" name="Rich_Web_VC_Car_PBImgs" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VC_Car_PBImgs_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Car_Icons_Type" name="">
							<option value="1">  Type 1  </option>
							<option value="2">  Type 2  </option>
							<option value="3">  Type 3  </option>
							<option value="4">  Type 4  </option>
							<option value="5">  Type 5  </option>
							<option value="6">  Type 6  </option>
							<option value="7">  Type 7  </option>
							<option value="8">  Type 8  </option>
							<option value="9">  Type 9  </option>
							<option value="10"> Type 10 </option>
							<option value="11"> Type 11 </option>
							<option value="12"> Type 12 </option>
							<option value="13"> Type 13 </option>
							<option value="14"> Type 14 </option>
							<option value="15"> Type 15 </option>
							<option value="16"> Type 16 </option>
							<option value="17"> Type 17 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Car_Icons_Size" name="Rich_Web_VC_Car_Icons_Size" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VC_Car_Icons_Size_1">0</span>
						</div>
					</td>
					<td>
						<!-- <label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VC_Car_Auto_Play" id="Rich_Web_VC_Car_Auto_Play"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label> -->
					</td>
				</tr>
				<tr>
					<td colspan='4'>Popup Options</td>
				</tr>
				<tr>
					<td>Overlay Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Overlay_Bg_Color" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Popup_Bg_Color" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Popup_Border_Width" name="Rich_Web_VC_Popup_Border_Width" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VC_Popup_Border_Width_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Popup_Border_Style" name="Rich_Web_VC_Popup_Border_Style">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Popup_Border_Color" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Popup_Box_Shadow" name="Rich_Web_VC_Popup_Box_Shadow" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VC_Popup_Box_Shadow_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Popup_Shadow_Color" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan='4'>Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Text Align</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Title_Font_Size" name="Rich_Web_VC_Title_Font_Size" min="10" max="36">
							<span class="range-slider__value" id="Rich_Web_VC_Title_Font_Size_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Title_Font_Family" name="Rich_Web_VC_Title_Font_Family">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Title_Color" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Title_Text_Align" name="Rich_Web_VC_Title_Text_Align">
							<option value="left">    Left    </option>
							<option value="right">   Right   </option>
							<option value="center">  Center  </option>
							<option value="justify"> Justify </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan='4'>Description Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Desc_Bg_Color" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan='4'>Link Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Link_Font_Size" name="Rich_Web_VC_Link_Font_Size" min="10" max="36">
							<span class="range-slider__value" id="Rich_Web_VC_Link_Font_Size_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Link_Font_Family" name="Rich_Web_VC_Link_Font_Family">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Color" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Bg_Color" value=""/>
					</td>
				</tr>
				<tr>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Border_Color" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Link_Border_Width" name="Rich_Web_VC_Link_Border_Width" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VC_Link_Border_Width_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Link_Border_Style" name="Rich_Web_VC_Link_Border_Style">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Hov_Bg_Color" value=""/>
					</td>
				</tr>
				<tr>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Text</td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Hov_Color" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Link_Hov_Border_Color" value="Rich_Web_VC_Link_Hov_Border_Color"/>
					</td>
					<td>
						<input type="text" name="Rich_Web_VC_Link_Text" id="Rich_Web_VC_Link_Text" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Link_Border_Radius" name="Rich_Web_VC_Link_Border_Radius" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VC_Link_Border_Radius_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td colspan='4'>Popup Close Icon Options</td>
				</tr>
				<tr>
					<td>Size (px)</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VC_Popup_Icons_Size" name="Rich_Web_VC_Popup_Icons_Size" min="15" max="50">
							<span class="range-slider__value" id="Rich_Web_VC_Popup_Icons_Size_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VC_Popup_Icons_Color" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VC_Popup_Icons_Type" name="">
							<option value="rich_web-times">          Type 1 </option>
							<option value="rich_web-times-circle">   Type 2 </option>
							<option value="rich_web-times-circle-o"> Type 3 </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VCCP_L_Show" name="Rich_Web_VCCP_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VCCP_LT_Show" name="Rich_Web_VCCP_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VCCP_Loading_Show" name="Rich_Web_VCCP_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_L_BgC" id="Rich_Web_VCCP_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_VCCP_LT_C" id="Rich_Web_VCCP_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_L_C" id="Rich_Web_VCCP_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_VCCP_L_S" name="Rich_Web_VCCP_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_LT" id="Rich_Web_VCCP_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_VCCP_L_T" name="Rich_Web_VCCP_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('VCCP')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_VCCP_LT_T" name="Rich_Web_VCCP_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('VCCP')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VCCP_LT_FS" id="Rich_Web_VCCP_LT_FS" name="Rich_Web_VCCP_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_VCCP_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_VCCP_LT_FF" name="Rich_Web_VCCP_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_VCCP_L_T1_C" id="Rich_Web_VCCP_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_L_T2_C" id="Rich_Web_VCCP_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VCCP_L_T3_C" id="Rich_Web_VCCP_L_T3_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_VCCP_LT_T2_BC" id="Rich_Web_VCCP_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_VCCP_LT_T2_AnC" id="Rich_Web_VCCP_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_VCCP_LT_T3_BgC" id="Rich_Web_VCCP_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' data-rwvs-short="SimpleVS" data-rwvs-type="Simple Video Slider" id="Rich_Web_VSlider_Save_Table_2_5">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Pause Time (s)</td>
					<td>Change Speed (ms)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_W" name="Rich_Web_SVS_W" min="300" max="1200">
							<span class="range-slider__value" id="Rich_Web_SVS_W_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_PT" name="Rich_Web_SVS_PT" min="1" max="15">
							<span class="range-slider__value" id="Rich_Web_SVS_PT_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_CS" name="Rich_Web_SVS_CS" min="100" max="1500" step="100">
							<span class="range-slider__value" id="Rich_Web_SVS_CS_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_BW" name="Rich_Web_SVS_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_SVS_BW_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_BS" name="Rich_Web_SVS_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_BC" value=""/>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_BoxShShow" id="Rich_Web_SVS_BoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_BoxShType" id="Rich_Web_SVS_BoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>AutoPlay</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_BoxSh" name="Rich_Web_SVS_BoxSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_SVS_BoxSh_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_BoxShC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Eff" name="">
							<option value="slide"> Slide </option>
							<option value="fade">  Fade  </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_AP" id="Rich_Web_SVS_AP" />
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_Nav_Show" id="Rich_Web_SVS_Nav_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_Nav_W" name="Rich_Web_SVS_Nav_W" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_W_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_Nav_H" name="Rich_Web_SVS_Nav_H" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_H_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_Nav_BW" name="Rich_Web_SVS_Nav_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_BW_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
					<td>Place Between (px)</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Nav_BS" name="Rich_Web_SVS_Nav_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Nav_BC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_Nav_BR" name="Rich_Web_SVS_Nav_BR" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_BR_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_Nav_PB" name="Rich_Web_SVS_Nav_PB" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_SVS_Nav_PB_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Nav_C" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Nav_CC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Nav_HC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Nav_Pos" name="">
							<option value="top">    Top    </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_T_Show" id="Rich_Web_SVS_T_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_TBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_TC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_TFS" name="Rich_Web_SVS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_SVS_TFS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_TFF" name="Rich_Web_SVS_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Description Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_D_Show" id="Rich_Web_SVS_D_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Link Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_LC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_LFS" name="Rich_Web_SVS_LFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_SVS_LFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_LFF" name="Rich_Web_SVS_LFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_LHC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Text</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_SVS_LText" id="Rich_Web_SVS_LText" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Arrow Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_SVS_Arr_Show" id="Rich_Web_SVS_Arr_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Arr_Type" name="">
							<option value='angle-double'>   Angle Double   </option>
							<option value='angle'>          Angle          </option>
							<option value='arrow-circle'>   Arrow Circle   </option>
							<option value='arrow-circle-o'> Arrow Circle O </option>
							<option value='arrow'>          Arrow          </option>
							<option value='caret'>          Caret          </option>
							<option value='caret-square-o'> Caret Square O </option>
							<option value='chevron-circle'> Chevron Circle </option>
							<option value='chevron'>        Chevron        </option>
							<option value='hand-o'>         Hand O         </option>
							<option value='long-arrow'>     Long Arrow     </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_Arr_S" name="Rich_Web_SVS_Arr_S" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_SVS_Arr_S_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Arr_C" value=""/>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Arr_BgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_Arr_BW" name="Rich_Web_SVS_Arr_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_SVS_Arr_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_SVS_Arr_BS" name="Rich_Web_SVS_Arr_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_Arr_BC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Border Radius (px)</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_Arr_BR" name="Rich_Web_SVS_Arr_BR" min="0" max="100">
							<span class="range-slider__value" id="Rich_Web_SVS_Arr_BR_1">0</span>
						</div>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_PIC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_PIBgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SVS_PIBR" name="Rich_Web_SVS_PIBR" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_SVS_PIBR_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_PIHC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_SVS_PIHBgC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SimpleVS_L_Show" name="Rich_Web_SimpleVS_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SimpleVS_LT_Show" name="Rich_Web_SimpleVS_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_SimpleVS_Loading_Show" name="Rich_Web_SimpleVS_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_BgC" id="Rich_Web_SimpleVS_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT_C" id="Rich_Web_SimpleVS_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_C" id="Rich_Web_SimpleVS_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_SimpleVS_L_S" name="Rich_Web_SimpleVS_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT" id="Rich_Web_SimpleVS_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_SimpleVS_L_T" name="Rich_Web_SimpleVS_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('SimpleVS')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_SimpleVS_LT_T" name="Rich_Web_SimpleVS_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('SimpleVS')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_SimpleVS_LT_FS" name="Rich_Web_SimpleVS_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_SimpleVS_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_SimpleVS_LT_FF" name="Rich_Web_SimpleVS_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_T1_C" id="Rich_Web_SimpleVS_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_T2_C" id="Rich_Web_SimpleVS_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_SimpleVS_L_T3_C" id="Rich_Web_SimpleVS_L_T3_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT_T2_BC" id="Rich_Web_SimpleVS_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT_T2_AnC" id="Rich_Web_SimpleVS_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_SimpleVS_LT_T3_BgC" id="Rich_Web_SimpleVS_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' data-rwvs-short="VSVT" data-rwvs-type="Video Slider/Vertical Thumbnails" id="Rich_Web_VSlider_Save_Table_2_6">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Auto Play</td>
					<td>Auto Play Steps</td>
					<td>Auto Play Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Change Speed (ms)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_AP" id="Rich_Web_VTVS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_APS" name="Rich_Web_VTVS_APS" min="1" max="5">
							<span class="range-slider__value" id="Rich_Web_VTVS_APS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_APEff" name="">
							<option value="random slideshow">      Random Slideshow      </option>
							<option value="fade slideshow">        Fade Slideshow        </option>
							<option value="swing slideshow">       Swing Slideshow       </option>
							<option value="flutter slideshow">     Flutter Slideshow     </option>
							<option value="collapse slideshow">    Collapse Slideshow    </option>
							<option value="expand slideshow">      Expand Slideshow      </option>
							<option value="stripe slideshow">      Stripe Slideshow      </option>
							<option value="twins slideshow">       Twins Slideshow       </option>
							<option value="parabola slideshow">    Parabola Slideshow    </option>
							<option value="rotate slideshow">      Rotate Slideshow      </option>
							<option value="zoom slideshow">        Zoom Slideshow        </option>
							<option value="float slideshow">       Float Slideshow       </option>
							<option value="fly slideshow">         Fly Slideshow         </option>
							<option value="dodge dance slideshow"> Dodge Dance Slideshow </option>
							<option value="dodge pet slideshow">   Dodge Pet Slideshow   </option>
							<option value="dodge slideshow">       Dodge Slideshow       </option>
							<option value="compound slideshow">    Compound Slideshow    </option>
							<option value="jump slideshow">        Jump Slideshow        </option>
							<option value="wave slideshow">        Wave Slideshow        </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_CS" name="Rich_Web_VTVS_CS" min="100" max="2000" step="100">
							<span class="range-slider__value" id="Rich_Web_VTVS_CS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Pause Time (s)</td>
					<td>Arrows Steps</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Height (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_PT" name="Rich_Web_VTVS_PT" min="1" max="20">
							<span class="range-slider__value" id="Rich_Web_VTVS_PT_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_ArrSt" name="Rich_Web_VTVS_ArrSt" min="1" max="5">
							<span class="range-slider__value" id="Rich_Web_VTVS_ArrSt_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_BgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_H" name="Rich_Web_VTVS_H" min="200" max="800">
							<span class="range-slider__value" id="Rich_Web_VTVS_H_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_BW" name="Rich_Web_VTVS_BW" min="0" max="10">
							<span class="range-slider__value" id="Rich_Web_VTVS_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_BS" name="Rich_Web_VTVS_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_BC" value=""/>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_BoxShShow" id="Rich_Web_VTVS_BoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Shadow Type</td>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_BoxShType" id="Rich_Web_VTVS_BoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_BoxSh" name="Rich_Web_VTVS_BoxSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VTVS_BoxSh_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_BoxShC" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_TShow" id="Rich_Web_VTVS_TShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_TFS" name="Rich_Web_VTVS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VTVS_TFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_TFF" name="Rich_Web_VTVS_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_TC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_TBgC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_TPos" name="">
							<option value="top">    Top    </option>
							<option value="center"> Center </option>
							<option value="bottom"> Bottom </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Thumbnails Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_Th_BW" name="Rich_Web_VTVS_Th_BW" min="0" max="3">
							<span class="range-slider__value" id="Rich_Web_VTVS_Th_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_Th_BS" name="Rich_Web_VTVS_Th_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_Th_BC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_Th_BR" name="Rich_Web_VTVS_Th_BR" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VTVS_Th_BR_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Hover/Current Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_Th_HBC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Link Icon Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_LC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_LBgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_LFS" name="Rich_Web_VTVS_LFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VTVS_LFS_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_LHC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_LHBgC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_LPos" name="">
							<option value='top-left'>     Top-Left     </option>
							<option value='top-right'>    Top-Right    </option>
							<option value='bottom-left'>  Bottom-Left  </option>
							<option value='bottom-right'> Bottom-Right </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_LType" name="">
							<option value='link'>          Լink          </option>
							<option value='paperclip'>     Paperclip     </option>
							<option value='external-link'> External Link </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_PC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_PBgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_PFS" name="Rich_Web_VTVS_PFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VTVS_PFS_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_PHC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_PHBgC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_PPos" name="">
							<option value='top-left'>     Top-Left     </option>
							<option value='top-right'>    Top-Right    </option>
							<option value='bottom-left'>  Bottom-Left  </option>
							<option value='bottom-right'> Bottom-Right </option>
						</select>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_PType" name="">
							<option value='play'>          Play          </option>
							<option value='play-circle'>   Play Circle   </option>
							<option value='play-circle-o'> Play Circle O </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Arrows Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Position <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VTVS_ArrShow" id="Rich_Web_VTVS_ArrShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_ArrType" name="">
							<option value='angle-double'>   Angle Double   </option>
							<option value='angle'>          Angle          </option>
							<option value='arrow-circle'>   Arrow Circle   </option>
							<option value='arrow-circle-o'> Arrow Circle O </option>
							<option value='arrow'>          Arrow          </option>
							<option value='caret'>          Caret          </option>
							<option value='caret-square-o'> Caret Square O </option>
							<option value='chevron-circle'> Chevron Circle </option>
							<option value='chevron'>        Chevron        </option>
							<option value='hand-o'>         Hand O         </option>
							<option value='long-arrow'>     Long Arrow     </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VTVS_ArrFS" name="Rich_Web_VTVS_ArrFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VTVS_ArrFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VTVS_ArrPos" name="">
							<option value='top'>    Top    </option>
							<option value='center'> Center </option>
							<option value='bottom'> Bottom </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VTVS_ArrC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VSVT_L_Show" name="Rich_Web_VSVT_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VSVT_LT_Show" name="Rich_Web_VSVT_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_VSVT_Loading_Show" name="Rich_Web_VSVT_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_L_BgC" id="Rich_Web_VSVT_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_VSVT_LT_C" id="Rich_Web_VSVT_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_L_C" id="Rich_Web_VSVT_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_VSVT_L_S" name="Rich_Web_VSVT_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_LT" id="Rich_Web_VSVT_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_VSVT_L_T" name="Rich_Web_VSVT_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('VSVT')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_VSVT_LT_T" name="Rich_Web_VSVT_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('VSVT')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VSVT_LT_FS" name="Rich_Web_VSVT_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_VSVT_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_VSVT_LT_FF" name="Rich_Web_VSVT_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_VSVT_L_T1_C" id="Rich_Web_VSVT_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_L_T2_C" id="Rich_Web_VSVT_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_VSVT_L_T3_C" id="Rich_Web_VSVT_L_T3_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_VSVT_LT_T2_BC" id="Rich_Web_VSVT_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_VSVT_LT_T2_AnC" id="Rich_Web_VSVT_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_VSVT_LT_T3_BgC" id="Rich_Web_VSVT_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' data-rwvs-short="HSL" data-rwvs-type="Horizontal Posts Slider" id="Rich_Web_VSlider_Save_Table_2_7">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Loop</td>
					<td>Cols</td>
					<td>Speed (s)</td>
					<td>AutoPlay</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_Loop" id="Rich_Web_VS_HPS_Loop"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_Cols" name="Rich_Web_VS_HPS_Cols" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Cols_1">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_Speed" name="Rich_Web_VS_HPS_Speed" min="1" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Speed_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_AP" id="Rich_Web_VS_HPS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Equal Height</td>
					<td>Place Between (px)</td>
					<td>Carousel</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_EH" id="Rich_Web_VS_HPS_EH"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_PB" name="Rich_Web_VS_HPS_PB" min="0" max="20">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_PB_1">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_Car" id="Rich_Web_VS_HPS_Car"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Next & Prev Buttons</td>
				</tr>
				<tr>
					<td>Show</td>
					<td>Next Text</td>
					<td>Prev Text</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_NP_Show" id="Rich_Web_VS_HPS_NP_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" class="Rich_Web_VSlider_Select_Menu" name="Rich_Web_VS_HPS_NP_NText" id="Rich_Web_VS_HPS_NP_NText" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VSlider_Select_Menu" name="Rich_Web_VS_HPS_NP_PText" id="Rich_Web_VS_HPS_NP_PText" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_C" value=""/>
					</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Border Width (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_BgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_NP_FS" name="Rich_Web_VS_HPS_NP_FS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_NP_FS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_NP_FF" name="Rich_Web_VS_HPS_NP_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_NP_BW" name="Rich_Web_VS_HPS_NP_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_NP_BW_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Radius (px)</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_NP_BS" name="Rich_Web_VS_HPS_NP_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_BC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_NP_BR" name="Rich_Web_VS_HPS_NP_BR" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_NP_BR_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_HC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_NP_HBgC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Cols Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Box Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Videos Start Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Start Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Cols_BgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Cols_BoxShC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_Cols_VSEff" name="">
							<option value="none">        None        </option>
							<option value="blur">        Blur        </option>
							<option value="brightness">  Brightness  </option>
							<option value="contrast">    Contrast    </option>
							<option value="drop-shadow"> Drop-Shadow </option>
							<option value="grayscale">   Grayscale   </option>
							<option value="hue-rotate">  Hue-Rotate  </option>
							<option value="invert">      Invert      </option>
							<option value="opacity">     Opacity     </option>
							<option value="saturate">    Saturate    </option>
							<option value="sepia">       Sepia       </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Cols_StShC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Videos Hover Effect <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_Cols_VHEff" name="">
							<option value="none">        None        </option>
							<option value="blur">        Blur        </option>
							<option value="brightness">  Brightness  </option>
							<option value="contrast">    Contrast    </option>
							<option value="drop-shadow"> Drop-Shadow </option>
							<option value="grayscale">   Grayscale   </option>
							<option value="hue-rotate">  Hue-Rotate  </option>
							<option value="invert">      Invert      </option>
							<option value="opacity">     Opacity     </option>
							<option value="saturate">    Saturate    </option>
							<option value="sepia">       Sepia       </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Cols_HShC" value=""/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Video Title Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_TC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_TFS" name="Rich_Web_VS_HPS_TFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_TFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_TFF" name="Rich_Web_VS_HPS_TFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Video Description Options</td>
				</tr>
				<tr>
					<td>Show</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_DShow" id="Rich_Web_VS_HPS_DShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Link Options</td>
				</tr>
				<tr>
					<td>Text</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VSlider_Select_Menu" name="Rich_Web_VS_HPS_LText" id="Rich_Web_VS_HPS_LText" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_LC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_LFS" name="Rich_Web_VS_HPS_LFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_LFS_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_LFF" name="Rich_Web_VS_HPS_LFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_LHC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Video Play Options</td>
				</tr>
				<tr>
					<td>Text</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VSlider_Select_Menu" name="Rich_Web_VS_HPS_PText" id="Rich_Web_VS_HPS_PText" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_PBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_PC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_PFS" name="Rich_Web_VS_HPS_PFS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_PFS_1">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Font Family</td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_PFF" name="Rich_Web_VS_HPS_PFF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_PHC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_PHBgC" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Popup Options</td>
				</tr>
				<tr>
					<td>Overlay Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Pop_OvC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_Pop_BW" name="Rich_Web_VS_HPS_Pop_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Pop_BW_1">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_Pop_BS" name="Rich_Web_VS_HPS_Pop_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Pop_BC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Box Shadow</td>
					<td>Shadow Type</td>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_Pop_BoxShShow" id="Rich_Web_VS_HPS_Pop_BoxShShow"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_VS_HPS_Pop_BoxShType" id="Rich_Web_VS_HPS_Pop_BoxShType"/>
							<span class="switch-label" data-on="1" data-off="2"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_Pop_BoxSh" name="Rich_Web_VS_HPS_Pop_BoxSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Pop_BoxSh_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Pop_BoxShC" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Popup Close Icon</td>
				</tr>
				<tr>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_VS_HPS_Pop_CIType" name="">
							<option value="rich_web-times">          Type 1 </option>
							<option value="rich_web-times-circle">   Type 2 </option>
							<option value="rich_web-times-circle-o"> Type 3 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_VS_HPS_Pop_CIS" name="Rich_Web_VS_HPS_Pop_CIS" min="8" max="48">
							<span class="range-slider__value" id="Rich_Web_VS_HPS_Pop_CIS_1">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_VS_HPS_Pop_CIC" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_HSL_L_Show" name="Rich_Web_HSL_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_HSL_LT_Show" name="Rich_Web_HSL_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_HSL_Loading_Show" name="Rich_Web_HSL_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_L_BgC" id="Rich_Web_HSL_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_HSL_LT_C" id="Rich_Web_HSL_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_L_C" id="Rich_Web_HSL_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_HSL_L_S" name="Rich_Web_HSL_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_LT" id="Rich_Web_HSL_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_HSL_L_T" name="Rich_Web_HSL_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('HSL')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_HSL_LT_T" name="Rich_Web_HSL_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('HSL')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_HSL_LT_FS" name="Rich_Web_HSL_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_HSL_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_HSL_LT_FF" name="Rich_Web_HSL_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_HSL_L_T1_C" id="Rich_Web_HSL_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_L_T2_C" id="Rich_Web_HSL_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_HSL_L_T3_C" id="Rich_Web_HSL_L_T3_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_HSL_LT_T2_BC" id="Rich_Web_HSL_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_HSL_LT_T2_AnC" id="Rich_Web_HSL_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_HSL_LT_T3_BgC" id="Rich_Web_HSL_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' data-rwvs-short="RichSl" data-rwvs-type="Rich Slider" id="Rich_Web_VSlider_Save_Table_2_8">
				<tr>
					<td colspan="4">Slider Options</td>
				</tr>
				<tr>
					<td>Shadow (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td><!-- AutoPlay --></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_Sh" name="Rich_Web_RVVS_Sh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_RVVS_Sh_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_ShT" name="Rich_Web_RVVS_ShT">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_ShC" value=""/>
					</td>
					<td>
						<!-- <label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_RVVS_AP" id="Rich_Web_RVVS_AP"/>
							<span class="switch-label" data-on="On" data-off="Off"></span> 
							<span class="switch-handle"></span> 
						</label> -->
					</td>
				</tr>
				<tr>
					<td colspan="4">Navigation Item Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_NI_BW" name="Rich_Web_RVVS_NI_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_RVVS_NI_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_BC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_BgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_HBgC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Hover Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_HBC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_CBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NI_CBC" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Item Title Options</td>
				</tr>
				<tr>
					<td>Font Size(px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_NT_FS" name="Rich_Web_RVVS_NT_FS" min="8" max="36">
							<span class="range-slider__value" id="Rich_Web_RVVS_NT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_NT_FF" name="Rich_Web_RVVS_NT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NT_C" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NT_HC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NT_CC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Image Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_NImg_BW" name="Rich_Web_RVVS_NImg_BW" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_RVVS_NImg_BW_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NScroll_HBgC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_NImg_BSh" name="Rich_Web_RVVS_NImg_BSh" min="0" max="30">
							<span class="range-slider__value" id="Rich_Web_RVVS_NImg_BSh_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NImg_ShC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Shadow Type</td>
					<td>Radius (%)</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_NImg_ShT" name="Rich_Web_RVVS_NImg_ShT">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input style="max-width:200px;" class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_NImg_BR" name="Rich_Web_RVVS_NImg_BR" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_RVVS_NImg_BR_Span">0</span>
						</div>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Navigation Scroll Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NScroll_BgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_NScroll_C" value=""/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Image Title Options</td>
				</tr>
				<tr>
					<td>Font Size(px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_IT_FS" name="Rich_Web_RVVS_IT_FS" min="8" max="36">
							<span class="range-slider__value" id="Rich_Web_RVVS_IT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_IT_FF" name="Rich_Web_RVVS_IT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_IT_C" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Size (px)</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_PlIc_FS" name="Rich_Web_RVVS_PlIc_FS" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_RVVS_PlIc_FS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_PlIc_C" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_PlIc_BgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_PlIc_HBgC" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Delete Icon Options</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size(px)</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_DelIc_C" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_RVVS_DelIc_T" name="">
							<option value="rich_web-times">          Type 1 </option>
							<option value="rich_web-times-circle">   Type 2 </option>
							<option value="rich_web-times-circle-o"> Type 3 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RVVS_DelIc_FS" name="Rich_Web_RVVS_DelIc_FS" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_RVVS_DelIc_FS_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_DelIc_BgC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_RVVS_DelIc_HBgC" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_RichSl_L_Show" name="Rich_Web_RichSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_RichSl_LT_Show" name="Rich_Web_RichSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_RichSl_Loading_Show" name="Rich_Web_RichSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_L_BgC" id="Rich_Web_RichSl_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_RichSl_LT_C" id="Rich_Web_RichSl_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_L_C" id="Rich_Web_RichSl_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_RichSl_L_S" name="Rich_Web_RichSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_LT" id="Rich_Web_RichSl_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_RichSl_L_T" name="Rich_Web_RichSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('RichSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_RichSl_LT_T" name="Rich_Web_RichSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('RichSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_RichSl_LT_FS" name="Rich_Web_RichSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_RichSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_RichSl_LT_FF" name="Rich_Web_RichSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_RichSl_L_T1_C" id="Rich_Web_RichSl_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_L_T2_C" id="Rich_Web_RichSl_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_RichSl_L_T3_C" id="Rich_Web_RichSl_L_T3_C" class="Rich_Web_VS_Color" value="
						">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_RichSl_LT_T2_BC" id="Rich_Web_RichSl_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_RichSl_LT_T2_AnC" id="Rich_Web_RichSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_RichSl_LT_T3_BgC" id="Rich_Web_RichSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' data-rwvs-short="TSL" data-rwvs-type="TimeLine Slider" id="Rich_Web_VSlider_Save_Table_2_9">
				<tr>
					<td colspan="4">Slider Options</td>
				</tr>
				<tr>
					<td>Slideshow</td>
					<td>Slideshow Change Time (ms)</td>
					<td>Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_MS_SSh" id="Rich_Web_MS_SSh"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_SShChT" name="Rich_Web_MS_SShChT" min="1000" max="15000">
							<span class="range-slider__value" id="Rich_Web_MS_SShChT_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_BSh" name="Rich_Web_MS_BSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_MS_BSh_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_ShC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Shadow Type</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Slider Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Slider 1 Video Autoplay</td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_ShT" name="Rich_Web_MS_ShT">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_BgC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Type" name="">
							<option value="horizontal"> Horizontal </option>
							<option value="vertical">   Vertical   </option>
						</select>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="Rich_Web_MS_Autoplay" id="Rich_Web_MS_Autoplay"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Slider 1 Video Effect Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_W" name="Rich_Web_MS_W" min="320" max="1500">
							<span class="range-slider__value" id="Rich_Web_MS_W_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Sl1EfT" name="">
							<option value="1"> Type 1  </option>
							<option value="2"> Type 2  </option>
							<option value="3"> Type 3  </option>
							<option value="4"> Type 4  </option>
							<option value="5"> Default </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan='4'>Navigation Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Item Font Size (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_N_BW" name="Rich_Web_MS_N_BW" min="0" max="4">
							<span class="range-slider__value" id="Rich_Web_MS_N_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_N_BS" name="Rich_Web_MS_N_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_N_BC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_NI_FS" name="Rich_Web_MS_NI_FS" min="8" max="24">
							<span class="range-slider__value" id="Rich_Web_MS_NI_FS_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Item Font Family</td>
					<td>Item Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Item Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Item Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_NI_FF" name="Rich_Web_MS_NI_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_NI_C" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_NI_HC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_NI_CC" value=""/>
					</td>
				</tr>
				<tr>
					<td>Circle Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_NIC_C" value=""/>
					</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td colspan='4'>Image Options</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Style</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Shadow (px)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_Img_BW" name="Rich_Web_MS_Img_BW" min="0" max="15">
							<span class="range-slider__value" id="Rich_Web_MS_Img_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Img_BS" name="Rich_Web_MS_Img_BS">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_Img_BC" value=""/>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_Img_BSh" name="Rich_Web_MS_Img_BSh" min="0" max="50">
							<span class="range-slider__value" id="Rich_Web_MS_Img_BSh_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Shadow Type</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_Img_ShC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Img_ShT" name="Rich_Web_MS_Img_ShT">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
						</select>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Font Size (px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Text Align</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_T_FS" name="Rich_Web_MS_T_FS" min="8" max="38">
							<span class="range-slider__value" id="Rich_Web_MS_T_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_T_FF" name="Rich_Web_MS_T_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_T_C" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_T_TA" name="Rich_Web_MS_T_TA">
							<option value="left">    Left    </option>
							<option value="right">   Right   </option>
							<option value="center">  Center  </option>
							<option value="justify"> Justify </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Text Shadow (px)</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_T_TSh" name="Rich_Web_MS_T_TSh" min="0" max="5">
							<span class="range-slider__value" id="Rich_Web_MS_T_TSh_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_T_TShC" value=""/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Icon Options</td>
				</tr>
				<tr>
					<td>Icon Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Icon Size (px)</td>
					<td>Icon Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_Ic_T" name="">
							<option value='rich_web rich_web-angle-double'>   Icon 1  </option>
							<option value='rich_web rich_web-angle'>          Icon 2  </option>
							<option value='rich_web rich_web-arrow-circle'>   Icon 3  </option>
							<option value='rich_web rich_web-arrow-circle-o'> Icon 4  </option>
							<option value='rich_web rich_web-arrow'>          Icon 5  </option>
							<option value='rich_web rich_web-caret'>          Icon 6  </option>
							<option value='rich_web rich_web-caret-square-o'> Icon 7  </option>
							<option value='rich_web rich_web-chevron-circle'> Icon 8  </option>
							<option value='rich_web rich_web-chevron'>        Icon 9  </option>
							<option value='rich_web rich_web-hand-o'>         Icon 10 </option>
							<option value='rich_web rich_web-long-arrow'>     Icon 11 </option>
							<option value='Timeline'>                         Image   </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_Ic_S" name="Rich_Web_MS_Ic_S" min="10" max="50">
							<span class="range-slider__value" id="Rich_Web_MS_Ic_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_Ic_C" value=""/>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Size (px)</td>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_MS_PlIc_T" name="">
							<option value="rich_web rich_web-play">          Type 1 </option>
							<option value="rich_web rich_web-play-circle">   Type 2 </option>
							<option value="rich_web rich_web-play-circle-o"> Type 3 </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_MS_PlIc_S" name="Rich_Web_MS_PlIc_S" min="10" max="50">
							<span class="range-slider__value" id="Rich_Web_MS_PlIc_S_Span">0</span>
						</div>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_PlIc_BgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_PlIc_C" value=""/>
					</td>
				</tr>
				<tr>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_PlIc_HBgC" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_MS_PlIc_HC" value=""/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_TSL_L_Show" name="Rich_Web_TSL_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_TSL_LT_Show" name="Rich_Web_TSL_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_TSL_Loading_Show" name="Rich_Web_TSL_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_L_BgC" id="Rich_Web_TSL_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_TSL_LT_C" id="Rich_Web_TSL_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_L_C" id="Rich_Web_TSL_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_TSL_L_S" name="Rich_Web_TSL_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_LT" id="Rich_Web_TSL_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_TSL_L_T" name="Rich_Web_TSL_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('TSL')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_TSL_LT_T" name="Rich_Web_TSL_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('TSL')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_TSL_LT_FS" name="Rich_Web_TSL_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_TSL_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_TSL_LT_FF" name="Rich_Web_TSL_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_TSL_L_T1_C" id="Rich_Web_TSL_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_L_T2_C" id="Rich_Web_TSL_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_TSL_L_T3_C" id="Rich_Web_TSL_L_T3_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_TSL_LT_T2_BC" id="Rich_Web_TSL_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_TSL_LT_T2_AnC" id="Rich_Web_TSL_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_TSL_LT_T3_BgC" id="Rich_Web_TSL_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
			<table class='Rich_Web_VSlider_Save_Table_2 RWeb_VSlider_Save_Table_2' data-rwvs-type="Amazing Simple Slider"  data-rwvs-short="ASSl"  id="Rich_Web_VSlider_Save_Table_2_10">
				<tr>
					<td colspan="4">General Options</td>
				</tr>
				<tr>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Autoplay <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Pause Time (s)</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_GO_NS1_Width" name="Rich_Web_GO_NS1_Width" min="8" max="1500">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_Width_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_GO_NS1_Height" name="Rich_Web_GO_NS1_Height" min="8" max="1000">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_Height_Span">0</span>
						</div>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_GO_NS1_Autoplay"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_GO_NS1_PTime" name="Rich_Web_GO_NS1_PTime" min="1" max="50">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_PTime_Span">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Border Width (px)</td>
					<td>Border Type (px)</td>
					<td>Border Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Align</td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_GO_NS1_BW" name="Rich_Web_GO_NS1_BW" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_BW_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_GO_NS1_BType" name="Rich_Web_GO_NS1_BType">
							<option value="none">   None   </option>
							<option value="solid">  Solid  </option>
							<option value="dotted"> Dotted </option>
							<option value="dashed"> Dashed </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_GO_NS1_BC" value=""/>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_GO_NS1_Align" name="Rich_Web_GO_NS1_Align">
							<option value="left">   Left   </option>
							<option value="right">  Right  </option>
							<option value="center"> Center </option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Shadow (px)</td>
					<td>Shadow Type</td>
					<td>Shadow Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Show Description <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_GO_NS1_BSh" name="Rich_Web_GO_NS1_BSh" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_GO_NS1_BSh_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_GO_NS1_BSh_Type" name="Rich_Web_GO_NS1_BSh_Type">
							<option value="none">   None   </option>
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
							<option value="Type 5"> Type 5 </option>
							<option value="Type 6"> Type 6 </option>
							<option value="Type 7"> Type 7 </option>
							<option value="Type 8"> Type 8 </option>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_GO_NS1_BSh_Col" value=""/>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_DO_NS1_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
				</tr>
				<tr>
					<td colspan="4">Title Options</td>
				</tr>
				<tr>
					<td>Show <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size(px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_TO_NS1_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_TO_NS1_FSize" name="Rich_Web_TO_NS1_FSize" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_TO_NS1_FSize_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_TO_NS1_FFamily" name="Rich_Web_TO_NS1_FFamily">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_TO_NS1_Col" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Number Options</td>
				</tr>
				<tr>
					<td>Show <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Font Size(px)</td>
					<td>Font Family</td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_TO_NS1_Num_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_TO_NS1_Num_FSize" name="Rich_Web_TO_NS1_Num_FSize" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_TO_NS1_Num_FSize_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_TO_NS1_Num_FFamily" name="Rich_Web_TO_NS1_Num_FFamily">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_TO_NS1_Num_Col" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Navigation Options</td>
				</tr>
				<tr>
					<td>Show <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Place Between (px)</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_PO_NS1_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_PO_NS1_Width" name="Rich_Web_PO_NS1_Width" min="5" max="20">
							<span class="range-slider__value" id="Rich_Web_PO_NS1_Width_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_PO_NS1_Height" name="Rich_Web_PO_NS1_Height" min="5" max="20">
							<span class="range-slider__value" id="Rich_Web_PO_NS1_Height_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_PO_NS1_PB" name="Rich_Web_PO_NS1_PB" min="1" max="10">
							<span class="range-slider__value" id="Rich_Web_PO_NS1_PB">0</span>
						</div>
					</td>
				</tr>
				<tr>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Current Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PO_NS1_Col" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PO_NS1_Cur_Col" value=""/>
					</td>
					<td colspan="2"></td>
				</tr>
				<tr>
					<td colspan="4">Arrow Options</td>
				</tr>
				<tr>
					<td>Show <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Arrow Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td><span class="Rich_Web_IO_NS1_Icon_Col_Block">Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
					<td><span class="Rich_Web_IO_NS1_Icon_Col_Block">Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" name="" id="Rich_Web_IO_NS1_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_IO_NS1_Arrow_Type" name="" onchange="Rich_Web_IO_NS1_Arrow_Type_Changed()">
							<option value='icon'>  Icon  </option>
							<option value='image'> Image </option>
						</select>
					</td>
					<td>
						<div class="Rich_Web_IO_NS1_Icon_Col_Block">
							<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PO_NS1_Hov_Col" value=""/>
						</div>
					</td>
					<td>
						<div class="Rich_Web_IO_NS1_Icon_Col_Block">
							<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_IO_NS1_BgCol" value=""/>
						</div>
					</td>
				</tr>
				<tr class="Rich_Web_IO_NS1_Icon_Col_Block_DIV">
					<td><span class="Rich_Web_IO_NS1_Icon_Col_Block">Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
					<td><span class="Rich_Web_IO_NS1_Icon_Col_Block">Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
					<td><span class="Rich_Web_IO_NS1_Icon_Type_Block">Icon Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></span></td>
					<td><span class="Rich_Web_IO_NS1_FSize_Block">Icon Size (px)</span></td>
				</tr>
				<tr class="Rich_Web_IO_NS1_Icon_Col_Block_DIV">
					<td>
						<div class="Rich_Web_IO_NS1_Icon_Col_Block">
							<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_IO_NS1_HovBgCol" value=""/>
						</div>
					</td>
					<td>
						<div class="Rich_Web_IO_NS1_Icon_Col_Block">
							<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_IO_NS1_Col" value=""/>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu Rich_Web_IO_NS1_Icon_Type_Block" id="Rich_Web_IO_NS1_Icon_Type" name="">
							<option value='angle-double'>   Angle Double   </option>
							<option value='angle'>          Angle          </option>
							<option value='arrow-circle'>   Arrow Circle   </option>
							<option value='arrow-circle-o'> Arrow Circle O </option>
							<option value='arrow'>          Arrow          </option>
							<option value='caret'>          Caret          </option>
							<option value='caret-square-o'> Caret Square O </option>
							<option value='chevron-circle'> Chevron Circle </option>
							<option value='chevron'>        Chevron        </option>
							<option value='hand-o'>         Hand O         </option>
							<option value='long-arrow'>     Long Arrow     </option>
						</select>
					</td>
					<td>
						<div class="range-slider Rich_Web_IO_NS1_FSize_Block">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_IO_NS1_FSize" name="Rich_Web_IO_NS1_FSize" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_IO_NS1_FSize_Span">0</span>
						</div>
					</td>
				</tr>
				<tr class="Rich_Web_IO_NS1_IMG_Type">
					<td>Width (px)</td>
					<td>Height (px)</td>
					<td>Image Type <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td></td>
				</tr>
				<tr class="Rich_Web_IO_NS1_IMG_Type">
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_IO_NS1_Width" name="Rich_Web_IO_NS1_Width" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_IO_NS1_Width_Span">0</span>
						</div>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_IO_NS1_Height" name="Rich_Web_IO_NS1_Height" min="8" max="50">
							<span class="range-slider__value" id="Rich_Web_IO_NS1_Height_Span">0</span>
						</div>
					</td>
					<td>
						<select class="Rich_Web_VSlider_Select_Menu" id="Rich_Web_IO_NS1_Image_Type" name="">
							<option value="1">  Type 1  </option>
							<option value="2">  Type 2  </option>
							<option value="3">  Type 3  </option>
							<option value="4">  Type 4  </option>
							<option value="5">  Type 5  </option>
							<option value="6">  Type 6  </option>
							<option value="7">  Type 7  </option>
							<option value="8">  Type 8  </option>
							<option value="9">  Type 9  </option>
							<option value="10"> Type 10 </option>
							<option value="11"> Type 11 </option>
							<option value="12"> Type 12 </option>
							<option value="13"> Type 13 </option>
							<option value="14"> Type 14 </option>
							<option value="15"> Type 15 </option>
							<option value="16"> Type 16 </option>
							<option value="17"> Type 17 </option>
						</select>
					</td>
					<td></td>
				</tr>
				<tr>
					<td colspan="4">Play Icon Options</td>
				</tr>
				<tr>
					<td>Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Background Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
					<td>Hover Color <span class="Rich_Web_VSlider_Pro"> (Pro) </span></td>
				</tr>
				<tr>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PIO_NS1_BgCol" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PIO_NS1_Col" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PIO_NS1_HovBgCol" value=""/>
					</td>
					<td>
						<input type="text" class="Rich_Web_VS_Color" name="" id="Rich_Web_PIO_NS1_HovCol" value=""/>
					</td>
				</tr>
				<tr>
					<td colspan="4">Loading Options</td>
				</tr>
				<tr>
					<td>Loader Show</td>
					<td>Loader Text Show</td>
					<td>Loading Show</td>
					<td>Background Color</td>
				</tr>
				<tr>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ASSl_L_Show" name="Rich_Web_ASSl_L_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ASSl_LT_Show" name="Rich_Web_ASSl_LT_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<label class="switch switch-light">
							<input class="switch-input" type="checkbox" id="Rich_Web_ASSl_Loading_Show" name="Rich_Web_ASSl_Loading_Show"/>
							<span class="switch-label" data-on="On" data-off="Off"></span>
							<span class="switch-handle"></span>
						</label>
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_L_BgC" id="Rich_Web_ASSl_L_BgC" class="Rich_Web_VS_Color" value="">
					</td>
				</tr>
				<tr>
					<td>Text Color</td>
					<td>Loader Color</td>
					<td>Loader Size</td>
					<td>Loading Text</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="Rich_Web_ASSl_LT_C" id="Rich_Web_ASSl_LT_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_L_C" id="Rich_Web_ASSl_L_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<select id="Rich_Web_ASSl_L_S" name="Rich_Web_ASSl_L_S" class="rich_web_Select_Menu">
							<option value="small">  Small  </option>
							<option value="middle"> Middle </option>
							<option value="large">  Large  </option>
						</select>
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_LT" id="Rich_Web_ASSl_LT" value="">
					</td>
				</tr>
				<tr>
					<td>Loader Type</td>
					<td>Loader Text Type</td>
					<td>Font Size (px)</td>
					<td>Font Family</td>
				</tr>
				<tr>
					<td>
						<select id="Rich_Web_ASSl_L_T" name="Rich_Web_ASSl_L_T" class="rich_web_Select_Menu" onChange="change_rw_vs_tr('ASSl')">
							<option value="Type 1"> Type 1 </option>
							<option value="Type 2"> Type 2 </option>
							<option value="Type 3"> Type 3 </option>
							<option value="Type 4"> Type 4 </option>
						</select>
					</td>
					<td>
						<select id="Rich_Web_ASSl_LT_T" name="Rich_Web_ASSl_LT_T" class="rich_web_Select_Menu" onChange="change_rw_vs_ltt('ASSl')">
							<option value="Type 1"> Type 1  </option>
							<option value="Type 2"> Type 2  </option>
							<option value="Type 3"> Type 3  </option>
							<option value="Type 4"> Default </option>
						</select>
					</td>
					<td>
						<div class="range-slider">
							<input class="range-slider__range" type="range" value="" id="Rich_Web_ASSl_LT_FS" name="Rich_Web_ASSl_LT_FS" min="8" max="25">
							<span class="range-slider__value" id="Rich_Web_ASSl_LT_FS_Span">0</span>
						</div>
					</td>
					<td>
						<select class="rich_web_Select_Menu" id="Rich_Web_ASSl_LT_FF" name="Rich_Web_ASSl_LT_FF">
							<?php for($i=0;$i<count($Rich_Web_VSlider_Fonts);$i++){ ?>
								<option value="<?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?>"><?= $Rich_Web_VSlider_Fonts[$i]->Font_family;?></option>
							<?php }?>
						</select>
					</td>
				</tr>
				<tr class="Loder_1_Option">
					<td>Loader 1 Color</td>
					<td>Loader 2 Color</td>
					<td>Loader 3 Color</td>
					<td></td>
				</tr>
				<tr class="Loder_1_Option">
					<td>
						<input type="text" name="Rich_Web_ASSl_L_T1_C" id="Rich_Web_ASSl_L_T1_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_L_T2_C" id="Rich_Web_ASSl_L_T2_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td>
						<input type="text" name="Rich_Web_ASSl_L_T3_C" id="Rich_Web_ASSl_L_T3_C" class="Rich_Web_VS_Color" value="">
					</td>
					<td></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>Loading Text Animation Borders Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color1">
					<td>
						<input type="text" name="Rich_Web_ASSl_LT_T2_BC" id="Rich_Web_ASSl_LT_T2_BC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>Loading Text Animation Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color2">
					<td>
						<input type="text" name="Rich_Web_ASSl_LT_T2_AnC" id="Rich_Web_ASSl_LT_T2_AnC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>Loading Text Background Color</td>
					<td colspan="3"></td>
				</tr>
				<tr class="rw_text_color rw_text_color3">
					<td>
						<input type="text" name="Rich_Web_ASSl_LT_T3_BgC" id="Rich_Web_ASSl_LT_T3_BgC" class="Rich_Web_VS_Color" value="">
					</td>
					<td colspan="3"></td>
				</tr>
			</table>
		</div>
	</div>
</form>