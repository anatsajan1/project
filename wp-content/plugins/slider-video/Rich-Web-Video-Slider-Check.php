<?php
	global $wpdb;

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

	$Rich_Web_VSlider_Desc=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE id>%d", 0));

	for($i=0; $i<count($Rich_Web_VSlider_Desc); $i++)
	{
		if(strlen($Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc)>0 && strpos($Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc, "&lt;/p&gt;")<=0)
		{
			$RW_VSlider_Param = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d", $Rich_Web_VSlider_Desc[$i]->Slider_ID));
			$RW_VSlider_Types = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id = %d", $RW_VSlider_Param[0]->Slider_Type));

			if($RW_VSlider_Types[0]->slider_Vid_type == 'Content Slider')
			{
				$Rich_Web_VS_Effect=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE RW_VS_ID=%s", $RW_VSlider_Types[0]->id));				
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VS_CS_DC . '; font-size: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VS_CP_DFS . 'px; font-family: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VS_CP_DFF . ';">' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</span></p>'));
			}
			else if($RW_VSlider_Types[0]->slider_Vid_type == 'Video Carousel/Content Popup')
			{
				$Rich_Web_VS_Effect=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE RW_VS_ID=%s", $RW_VSlider_Types[0]->id));
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VC_Desc_Color . '; font-size: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VC_Desc_Font_Size . 'px; font-family: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VC_Desc_Font_Family . '; text-align: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VC_Desc_Text_Align . ';">' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</span></p>'));
			}
			else if($RW_VSlider_Types[0]->slider_Vid_type == 'Simple Video Slider')
			{
				$Rich_Web_VS_Effect=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE RW_VS_ID=%s", $RW_VSlider_Types[0]->id));
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $Rich_Web_VS_Effect[0]->Rich_Web_SVS_DC . '; font-size: ' . $Rich_Web_VS_Effect[0]->Rich_Web_SVS_DFS . 'px; font-family: ' . $Rich_Web_VS_Effect[0]->Rich_Web_SVS_DFF . ';">' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</span></p>'));
			}
			else if($RW_VSlider_Types[0]->slider_Vid_type == 'Horizontal Posts Slider')
			{
				$Rich_Web_VS_Effect=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name11 WHERE RW_VS_ID=%s", $RW_VSlider_Types[0]->id));
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VS_HPS_DC . '; font-size: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VS_HPS_DFS . 'px; font-family: ' . $Rich_Web_VS_Effect[0]->Rich_Web_VS_HPS_DFF . ';">' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</span></p>'));
			}
			else if($RW_VSlider_Types[0]->slider_Vid_type == 'Rich Slider')
			{
				$Rich_Web_VS_Effect=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name12 WHERE RW_VS_ID=%s", $RW_VSlider_Types[0]->id));
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $Rich_Web_VS_Effect[0]->Rich_Web_RVVS_ID_C . '; font-size: ' . $Rich_Web_VS_Effect[0]->Rich_Web_RVVS_ID_FS . 'px; font-family: ' . $Rich_Web_VS_Effect[0]->Rich_Web_RVVS_ID_FF . ';">' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</span></p>'));
			}
			else if($RW_VSlider_Types[0]->slider_Vid_type == 'TimeLine Slider')
			{
				$Rich_Web_VS_Effect=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name13 WHERE RW_VS_ID=%s", $RW_VSlider_Types[0]->id));
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $Rich_Web_VS_Effect[0]->Rich_Web_MS_D_C . '; font-size: ' . $Rich_Web_VS_Effect[0]->Rich_Web_MS_D_FS . 'px; font-family: ' . $Rich_Web_VS_Effect[0]->Rich_Web_MS_D_FF . '; text-align: ' . $Rich_Web_VS_Effect[0]->Rich_Web_MS_D_TA . ';">' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</span></p>'));
			}
			else if($RW_VSlider_Types[0]->slider_Vid_type == 'Amazing Simple Slider')
			{
				$Rich_Web_VS_Effect=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name14 WHERE RW_VS_ID=%s", $RW_VSlider_Types[0]->id));
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $Rich_Web_VS_Effect[0]->Rich_Web_DO_NS1_Col . '; font-size: ' . $Rich_Web_VS_Effect[0]->Rich_Web_DO_NS1_FSize . 'px; font-family: ' . $Rich_Web_VS_Effect[0]->Rich_Web_DO_NS1_FFamily . ';">' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</span></p>'));
			}
			else
			{
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p>' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</p>'));
				$New_RW_VSlider_Desc = str_replace("\&","&", esc_html('<p><span style="color: ' . $Rich_Web_VS_Effect[0]->RW_GGI_Pop_IDC . '; font-size: ' . $Rich_Web_VS_Effect[0]->RW_GGI_Pop_IDFS . 'px; font-family: ' . $Rich_Web_VS_Effect[0]->RW_GGI_Pop_IDFF . '; text-align: ' . $Rich_Web_VS_Effect[0]->RW_GGI_Pop_IDTA . ';">' . $Rich_Web_VSlider_Desc[$i]->Rich_Web_VSlider_Add_Desc . '</span></p>'));
			}
			$wpdb->query($wpdb->prepare("UPDATE $table_name3 set Rich_Web_VSlider_Add_Desc=%s WHERE id=%d", $New_RW_VSlider_Desc, $Rich_Web_VSlider_Desc[$i]->id));
		}
	}


?>