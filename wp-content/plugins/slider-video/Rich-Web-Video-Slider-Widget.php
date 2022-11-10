<?php
	class Rich_Web_Video_Slider extends WP_Widget
	{
		function __construct()
		{
			$params=array('name'=>'Rich-Web Video Slider','description'=>'This is the widget of Rich-Web Video Slider plugin');
			parent::__construct('Rich_Web_Video_Slider','',$params);
		}
		function form($instance)
		{
			$defaults = array('Rich_Web_Video'=>'');
			$instance = wp_parse_args((array)$instance, $defaults);
			$Rich_Web_Video = $instance['Rich_Web_Video'];
			?>
			<div>
				<p>
					Slider Title:
					<select name="<?php echo $this->get_field_name('Rich_Web_Video'); ?>" class="widefat">
						<?php
							global $wpdb;

							$table_name2 = $wpdb->prefix . "rich_web_video_slider_manager";
							$Rich_Web_Video=$wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id > %d", 0));
							
							foreach ($Rich_Web_Video as $Rich_Web_Slider1)
							{
								?> <option value="<?php echo $Rich_Web_Slider1->id; ?>"> <?php echo $Rich_Web_Slider1->Slider_Title; ?> </option> <?php
							}
						?>
					</select>
				</p>
			</div>
			<?php
		}
		function widget($args,$instance)
		{
			extract($args);
			$Rich_Web_Video = empty($instance['Rich_Web_Video']) ? '' : $instance['Rich_Web_Video'];
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
			$table_name15 = $wpdb->prefix . "rich_web_vs_effect_11";
			$table_name5_Loader  = $wpdb->prefix . "rich_web_vs_effect_1_loader";
			$table_name6_Loader  = $wpdb->prefix . "rich_web_vs_effect_2_loader";
			$table_name7_Loader  = $wpdb->prefix . "rich_web_vs_effect_3_loader";
			$table_name8_Loader  = $wpdb->prefix . "rich_web_vs_effect_4_loader";
			$table_name9_Loader  = $wpdb->prefix . "rich_web_vs_effect_5_loader";
			$table_name10_Loader = $wpdb->prefix . "rich_web_vs_effect_6_loader";
			$table_name11_Loader = $wpdb->prefix . "rich_web_vs_effect_7_loader";
			$table_name12_Loader = $wpdb->prefix . "rich_web_vs_effect_8_loader";
			$table_name13_Loader = $wpdb->prefix . "rich_web_vs_effect_9_loader";
			$table_name14_Loader = $wpdb->prefix . "rich_web_vs_effect_10_loader";
			$table_name15_Loader = $wpdb->prefix . "rich_web_vs_effect_11_loader";

			require_once( 'Rich-Web-Video-Slider-Check.php' );
			$Rich_Web_VSlider_Manager = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name2 WHERE id = %d", $Rich_Web_Video));
			if (count($Rich_Web_VSlider_Manager) == 0) {
				return false;
			}
			$Rich_Web_VSlider_ID = $Rich_Web_VSlider_Manager[0]->id;
			$Rich_Web_VSlider_Videos  = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name3 WHERE Slider_ID = %d order by id", $Rich_Web_Video));
			$Rich_Web_VSlider_Eff_Dat = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name4 WHERE id = %d", $Rich_Web_VSlider_Manager[0]->Slider_Type));
			if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Content Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name5_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VS_ContSl_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Slick Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name6_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SlickSl_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Thumbnails Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name7_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ThumbSl_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Video Carousel/Content Popup')
			{

				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name8_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VCCP_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Simple Video Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name9_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_SimpleVS_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Video Slider/Vertical Thumbnails')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name10_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_VSVT_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Horizontal Posts Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name11 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name11_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_HSL_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Rich Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name12 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name12_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_RichSl_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='TimeLine Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name13 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name13_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_TSL_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='Amazing Simple Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name14 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name14_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_ASSl_LT;
			}
			else if($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type=='News Slider')
			{
				$Rich_Web_VSlider_Eff = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name15 WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$Rich_Web_VSlider_Eff_Loader = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table_name15_Loader WHERE RW_VS_ID = %s", $Rich_Web_VSlider_Eff_Dat[0]->id));
				$text=$Rich_Web_VSlider_Eff_Loader[0]->Rich_Web_NewSl_LT;
			}
			if (strpos($Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type, '/') !== false) :
				$RW_VS_O_T = preg_replace("/\//",' ',$Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type);
				$RW_VS_Opt_Type = explode(" ", $RW_VS_O_T);
				$RW_VS_Opt_Type = $RW_VS_Opt_Type[0]. '-' .$RW_VS_Opt_Type[1];
			else:
				$RW_VS_Opt_Type = explode(" ", $Rich_Web_VSlider_Eff_Dat[0]->slider_Vid_type);
				$RW_VS_Opt_Type = $RW_VS_Opt_Type[0];
			endif;
			echo $before_widget;
		 	
			$text_array=str_split($text);
			$str_sum=0;
			$anim_sum=0.75; 
			include('Style/RW_VS_Slider_'. $RW_VS_Opt_Type .'.css.php');
			include('PHP/RW_VS_Slider_'. $RW_VS_Opt_Type .'.php');
			include('Scripts/RW_VS_Slider_'. $RW_VS_Opt_Type .'.js.php');
			echo $after_widget;
		}

	}
?>