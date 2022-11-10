<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
?>
<script>
	function RW_VS_Filter_Options(x) {
		event.preventDefault();
        if (x == 'all') {
            jQuery('.Rich_Web_VS_Opt_Content').css('display', '');
        } else{
            jQuery('.Rich_Web_VS_Opt_Content').css('display', 'none');
            jQuery('.'+x).css('display', '');
        } 
        jQuery('.RW_VS_Nav_Bar_Button').removeClass('active')
        jQuery('.RW_VS_Nav_Bar .' + x).addClass('active')
    }
	function rw_icons_change(a,inputName,iconName){
		var childList = a.parentElement.children;
		for(var i=0;i<childList.length;i++){
			childList[i].classList.remove('selected');
		}
		a.classList.add('selected');
		document.querySelector('#'+inputName).value=iconName;
	}
	function rw_icons_change_selected(){
		var allInputs = document.querySelectorAll(".rw_sel_ic_input");
		for(var i=0; i<allInputs.length; i++){
			var childrens = allInputs[i].previousElementSibling.children;
			for(var c=0; c<childrens.length; c++){
				childrens[c].classList.remove('selected');
				if(childrens[c].dataset.value == allInputs[i].value){
					childrens[c].classList.add('selected');
				}
			}
		}
	}
	function Rich_Web_VSlider_Add_Option()
	{
		alert("This is free version. For more adventures click to buy Pro version.");
	}
	function stugel_rw_vs(str)
	{
		if(jQuery("#Rich_Web_"+str+"_L_T").val() == "Type 1"){ jQuery(".Loder_1_Option").show(); }else{ jQuery(".Loder_1_Option").hide(); }
	}	
	function stugel_rw_vs_lt(str)
	{
		if(jQuery("#Rich_Web_"+str+"_LT_T").val() == "Type 1"){ jQuery(".rw_text_color").hide(); jQuery(".rw_text_color1").show(); }
		else if(jQuery("#Rich_Web_"+str+"_LT_T").val() == "Type 2") { jQuery(".rw_text_color").hide(); jQuery(".rw_text_color2").show(); }
		else if(jQuery("#Rich_Web_"+str+"_LT_T").val() == "Type 3") { jQuery(".rw_text_color").hide(); jQuery(".rw_text_color3").show(); }
		else { jQuery(".rw_text_color").hide(); }
	}
	function change_rw_vs_tr(str) { stugel_rw_vs(str); }
	function change_rw_vs_ltt(str) { stugel_rw_vs_lt(str); }
  	function Rich_Web_VSlider_Can_Option() { location.reload(); }
	function Rich_Web_VSlider_Edit_Option(rich_web_Slider_ID)
	{
		event.preventDefault();
		
		jQuery('#Rich_Web_VS_Icon_Opt_' + rich_web_Slider_ID).html('<button class="rw_vs_icon_spinner"><i class="rich_web rich_web-refresh  rich_web_vidSlide-spin "></i>Editing</button>');
		jQuery('#Rich_Web_VS_Opt_Content_'+rich_web_Slider_ID).addClass("Rich_Web_VS_Opt_Content_H");
		jQuery(".rw_loading_c_vs").show();
		jQuery('#Rich_Web_VSlider_Option_Type').hide();
		jQuery('.Rich_Web_VSlider_Save_Table_2').hide();
		var ajaxurl = object.ajaxurl;
		var data = {
		action: 'rich_web_VS_Edit_Option', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
		foobar: rich_web_Slider_ID, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) {
			var data = JSON.parse(response);
			jQuery("input[name='Rich_Web_VSlider_Upd_ID']").val(data[0][0]['RW_VS_ID']);
			for(i=0;i<data.length;i++)
			{
				for(var key in data[i][0])
				{
					if( data[i][0][key] == 'true' || data[i][0][key] == 'on' || data[i][0][key] == 'On' ) { jQuery("#"+key).attr('checked',true); }
					else if( data[i][0][key] == 'false' || data[i][0][key] == '' || data[i][0][key] == 'none' || data[i][0][key] == 'off' || data[i][0][key] == 'Off') { jQuery("#"+key).attr('checked',false); }
					else { jQuery("#"+key).val(data[i][0][key]); }
				}
			}
			var answer = data[0][0]['Rich_Web_VSlider_Option_Type'];
			change_tables(answer);
			rangeSlider();
			jQuery('.Rich_Web_VS_Color').alphaColorPicker();
			jQuery('.wp-color-result').attr('title','Select');
			jQuery('.wp-color-result').attr('data-current','Selected');
			jQuery('.Rich_Web_VSlider_Opt_Table_Data').css('display','none');
			jQuery('.Rich_Web_VSlider_Add_Opt').addClass('Rich_Web_VSlider_Add_OptAnim');
			jQuery('.Rich_Web_VSlider_Opt_Table_Data_2').css('display','block');
			jQuery('.Rich_Web_VSlider_Upd_Opt').addClass('Rich_Web_VSlider_Sav_OptAnim');
			jQuery('.Rich_Web_VSlider_Can_Opt').addClass('Rich_Web_VSlider_Can_OptAnim');
			jQuery(".rw_loading_c_vs").hide();
			jQuery('.RW_Support_btn').css('margin-right','auto');
			rw_icons_change_selected();
			jQuery('.range-slider__range').trigger('input');
		})
		
	}
	function Rich_Web_VSlider_Del_Option(Option_ID)
	{	
		event.preventDefault();
		jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).addClass("Rich_Web_VS_Opt_Content_H");
		jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('.Rich_Web_VS_All_Icons').children('.Rich_Web_VS_Name').html('<i class="Rich_Web_VS_Trash rich_web rich_web-trash"></i>Are you sure you want to remove ?');
		jQuery('#Rich_Web_VS_Icon_Opt_' + Option_ID).html('<button class="rw_vs_but_cancel" onclick="Rich_Web_VS_Delete_Opt_No('+Option_ID+')" >Cancel</button><button class="rw_vs_but_delete" onclick="Rich_Web_VS_Delete_Opt_Yes('+Option_ID+')" > Delete</button>');
		jQuery('#Rich_Web_VS_Icon_Opt_' + Option_ID).css('top','65%');
	}
	function Rich_Web_VS_Delete_Opt_No(Option_ID)
	{
		var Option_Name = jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('img').attr('alt');
		var Opt_Icons = "<div class='Rich_Web_VS_Icon' onclick='Rich_Web_VSlider_Edit_Option(" + Option_ID +")'><i class='Rich_Web_VS_Edit rich_web rich_web-pencil'></i></div><div class='Rich_Web_VS_Icon' onclick='Rich_Web_VSlider_Copy_Option(" +Option_ID +")'><i class='Rich_Web_VS_Copy rich_web rich_web-files-o'></i></div><div class='Rich_Web_VS_Icon' onclick='Rich_Web_VSlider_Del_Option(" +Option_ID + ")'><i class='Rich_Web_VS_Del rich_web rich_web-trash'></i></div>";
		jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('.Rich_Web_VS_All_Icons').children('.Rich_Web_VS_Name').html(Option_Name);
		jQuery('#Rich_Web_VS_Icon_Opt_' + Option_ID).html(Opt_Icons);
		jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).removeClass("Rich_Web_VS_Opt_Content_H");
	}
	function Rich_Web_VS_Delete_Opt_Yes(Option_ID)
	{
		var Rich_Web_VS_Name = jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('.Rich_Web_VS_All_Icons').children('.Rich_Web_VS_Name').html();
		var Rich_Web_VS_Icon_Opt = jQuery('#Rich_Web_VS_Icon_Opt_' + Option_ID).html();
		jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('.Rich_Web_VS_All_Icons').children('.Rich_Web_VS_Name').html(jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('img').attr('alt'));
		jQuery('#Rich_Web_VS_Icon_Opt_' + Option_ID).html('<button class="rw_vs_icon_spinner"><i class="rich_web rich_web-refresh  rich_web_vidSlide-spin "></i>Deleting</button>');
		var ajaxurl = object.ajaxurl;
		var data = {
			action: 'rich_web_VS_Del_Option', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
			foobar: Option_ID, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) { 
			if (response == 'delete') {
				jQuery('#Rich_Web_VS_Icon_Opt_' + Option_ID).html('<button class="rw_vs_icon_spinner"><i class="rich_web rich_web-check"></i>Deleted</button>');
				setTimeout(() => {
					jQuery('#Rich_Web_VS_Opt_Content_' + Option_ID).remove();
				}, 700);	
			}else if (response == 'false') {
				jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('.Rich_Web_VS_All_Icons').children('.Rich_Web_VS_Name').html('Last example of theme.');
				setTimeout(() => {
					jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('.Rich_Web_VS_All_Icons').children('.Rich_Web_VS_Name').html(Rich_Web_VS_Name);
					jQuery('#Rich_Web_VS_Icon_Opt_' + Option_ID).html(Rich_Web_VS_Icon_Opt);
					Rich_Web_VS_Delete_Opt_No(Option_ID)
				}, 1000);
			}else if(response == 'none'){
				jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('.Rich_Web_VS_All_Icons').children('.Rich_Web_VS_Name').html('Theme is not defined.');
				setTimeout(() => {
					jQuery('#Rich_Web_VS_Opt_Content_'+Option_ID).children('.Rich_Web_VS_All_Icons').children('.Rich_Web_VS_Name').html(Rich_Web_VS_Name);
					jQuery('#Rich_Web_VS_Icon_Opt_' + Option_ID).html(Rich_Web_VS_Icon_Opt);
					Rich_Web_VS_Delete_Opt_No(Option_ID)
				}, 1000);
			}
		 });				
	}
	function Rich_Web_VSlider_Copy_Option(rich_web_Slider_ID)
	{
		jQuery('#Rich_Web_VS_Icon_Opt_'+rich_web_Slider_ID).html('<button class="rw_vs_icon_spinner"><i class="rich_web rich_web-refresh  rich_web_vidSlide-spin "></i>Copying</button>')
		jQuery('#Rich_Web_VS_Opt_Content_'+rich_web_Slider_ID).addClass('Rich_Web_VS_Opt_Content_H');
		var rw_vs_opt_val = jQuery('#Rich_Web_VS_Opt_Content_'+rich_web_Slider_ID).hasClass('pro') ? 'pro' : 'free';
		var rw_vs_img_src = jQuery('#Rich_Web_VS_Opt_Content_'+rich_web_Slider_ID).children('img').attr('src');
		var ajaxurl = object.ajaxurl;
		var data = {
			action: 'rich_web_VS_Copy_Option', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
			foobar: rich_web_Slider_ID, // translates into $_POST['foobar'] in PHP
		};
		jQuery.post(ajaxurl, data, function(response) { 
			var responseData = jQuery.parseJSON(response); 
			jQuery('#Rich_Web_VS_Icon_Opt_'+rich_web_Slider_ID).children('button').html('<i class="rich_web rich_web-check "></i>Copied');
			setTimeout(() => {
			jQuery('#Rich_Web_VS_Icon_Opt_'+rich_web_Slider_ID).html('<div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Edit_Option('+rich_web_Slider_ID+')"><i class="Rich_Web_VS_Edit rich_web rich_web-pencil"></i></div>    <div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Copy_Option('+rich_web_Slider_ID+')"><i class="Rich_Web_VS_Copy rich_web rich_web-files-o"></i></div>    <div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Del_Option('+rich_web_Slider_ID+')"><i class="Rich_Web_VS_Del rich_web rich_web-trash"></i></div>');
			jQuery('#Rich_Web_VS_Opt_Content_'+rich_web_Slider_ID).removeClass('Rich_Web_VS_Opt_Content_H');
			}, 700);
			jQuery('#Rich_Web_VS_Opt_Content_'+rich_web_Slider_ID).after('<div id="Rich_Web_VS_Opt_Content_'+responseData.id+'" class="Rich_Web_VS_Opt_Content  '+rw_vs_opt_val+'"><img src="'+rw_vs_img_src+'" alt="'+responseData.slider_vid_name+'" class="Rich_Web_VS_Image"><div class="Rich_Web_VS_All_Icons"><h4 class="Rich_Web_VS_Name">'+responseData.slider_vid_name+'</h4><div class="Rich_Web_VS_Icon_Opt" id="Rich_Web_VS_Icon_Opt_'+responseData.id+'"><div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Edit_Option('+responseData.id+')"><i class="Rich_Web_VS_Edit rich_web rich_web-pencil"></i></div>    <div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Copy_Option('+responseData.id+')"><i class="Rich_Web_VS_Copy rich_web rich_web-files-o"></i></div>    <div class="Rich_Web_VS_Icon" onclick="Rich_Web_VSlider_Del_Option('+responseData.id+')"><i class="Rich_Web_VS_Del rich_web rich_web-trash"></i></div></div></div></div>');

		})
	}
	var rangeSlider = function()
	{  
		var slider = jQuery('.range-slider'), range = jQuery('.range-slider__range'), value = jQuery('.range-slider__value');     
		slider.each(function()
		{   
			value.each(function()
			{   
				var value = jQuery(this).prev().attr('value');
			    jQuery(this).html(value);
			});    
			range.on('input', function()
			{      
				jQuery(this).next(value).html(this.value);
			});  
		});
	};
	rangeSlider();
	function change_tables(type)
	{
		jQuery(`.Rich_Web_VSlider_Save_Table_2:not([data-rwvs-type='${type}'])`).remove();
		jQuery(`.Rich_Web_VSlider_Save_Table_2[data-rwvs-type='${type}']`).show();
		var rw_vs_short = jQuery(`.Rich_Web_VSlider_Save_Table_2[data-rwvs-type='${type}']`).attr('data-rwvs-short');
		if(type=='Amazing Simple Slider')
		{ 
			if(jQuery('#Rich_Web_IO_NS1_Arrow_Type').val() == 'icon') 
			{
				jQuery('.Rich_Web_IO_NS1_Icon_Col_Block_DIV').fadeIn();
				jQuery('.Rich_Web_IO_NS1_IMG_Type').hide();
				jQuery('.Rich_Web_IO_NS1_Icon_Type_Block').show();
				jQuery('.Rich_Web_IO_NS1_FSize_Block').show();
				jQuery('.Rich_Web_IO_NS1_Icon_Col_Block').show();
			}
			else if(jQuery('#Rich_Web_IO_NS1_Arrow_Type').val() == 'image') 
			{
				jQuery('.Rich_Web_IO_NS1_Icon_Col_Block_DIV').fadeOut();
				jQuery('.Rich_Web_IO_NS1_IMG_Type').show();
				jQuery('.Rich_Web_IO_NS1_Icon_Type_Block').hide();
				jQuery('.Rich_Web_IO_NS1_FSize_Block').hide();
				jQuery('.Rich_Web_IO_NS1_Icon_Col_Block').hide();
			}
		}
		stugel_rw_vs(rw_vs_short);
		stugel_rw_vs_lt(rw_vs_short);
	}

	jQuery('.Rich_Web_IO_NS1_IMG_Type').hide();
	function Rich_Web_IO_NS1_Arrow_Type_Changed() 
	{
		var Rich_Web_Arrow_Type=jQuery('#Rich_Web_IO_NS1_Arrow_Type').val();
		if(Rich_Web_Arrow_Type == 'icon') 
		{
			jQuery('.Rich_Web_IO_NS1_Icon_Col_Block_DIV').fadeIn();
			jQuery('.Rich_Web_IO_NS1_IMG_Type').fadeOut();
			jQuery('.Rich_Web_IO_NS1_Icon_Type_Block').fadeIn();
			jQuery('.Rich_Web_IO_NS1_FSize_Block').fadeIn();
			jQuery('.Rich_Web_IO_NS1_Icon_Col_Block').fadeIn();
		}
		else if(Rich_Web_Arrow_Type == 'image')
		{
			jQuery('.Rich_Web_IO_NS1_Icon_Col_Block_DIV').fadeOut();
			jQuery('.Rich_Web_IO_NS1_IMG_Type').fadeIn();
			jQuery('.Rich_Web_IO_NS1_Icon_Type_Block').fadeOut();
			jQuery('.Rich_Web_IO_NS1_FSize_Block').fadeOut();
			jQuery('.Rich_Web_IO_NS1_Icon_Col_Block').fadeOut();
		}
	}

	function Rich_Web_VS_Demo(RW_VS_Type){
		event.preventDefault();
		var link = {
		'Content':"https://rich-web.org/wp-video-slider-content-2",
		'Slick':"https://rich-web.org/wp-video-slider-slick-2",
		'Thumbnails':"https://rich-web.org/wp-video-slider-thumbnails",
		'Video-Carousel':"https://rich-web.org/wp-video-slider-carousel-2",
		'Simple':"https://rich-web.org/wp-video-slider-simple-2",
		'Video-Slider':"https://rich-web.org/wp-video-slider-vertical-thumbnails",
		'Horizontal':"https://rich-web.org/wp-video-slider-horizontal-post",
		'Rich':"https://rich-web.org/wp-video-slider-rich-2/",
		'TimeLine':"https://rich-web.org/wp-video-slider-timeline",
		'Amazing':"https://rich-web.org/wp-video-slider-amazing-simple",
		'News':"https://rich-web.org/wp-video-slider-news-post-1",
		};
		window.open(link[RW_VS_Type],'_blank');
	}	
	function Rich_Web_VS_Insert(RW_VS_Type){
		event.preventDefault();
		var rw_vs_opt = jQuery('#Rich_Web_VS_Opt_Content_'+RW_VS_Type);
		var rw_vs_opt_icon = jQuery('#Rich_Web_VS_Icon_Opt_'+RW_VS_Type);
		rw_vs_opt_icon.html('<button class="rw_vs_icon_spinner"><i class="rich_web rich_web-refresh  rich_web_vidSlide-spin"></i>Inserting</button>');
		rw_vs_opt.addClass("Rich_Web_VS_Opt_Content_H");

		var ajaxurl = object.ajaxurl;
		var data = {
        	action: 'Rich_Web_VS_Insert_Option',
        	Type: RW_VS_Type,
    	};
		jQuery.post(ajaxurl, data, function(response) {
			if (response == 'false') {
				location.reload(true);
			}else{
				responseData = jQuery.parseJSON(response); 
				rw_vs_opt_icon.children('button').html('<i class="rich_web rich_web-check"></i> Inserted');
				setTimeout(() => {
				rw_vs_opt.removeAttr('id').attr('id','Rich_Web_VS_Opt_Content_'+responseData.id);
				jQuery('#Rich_Web_VS_Opt_Content_'+responseData.id).removeClass("Rich_Web_VS_Opt_Content_H");
				jQuery('#Rich_Web_VS_Opt_Content_'+responseData.id).children('img').attr('alt',responseData.slider_name);
				rw_vs_opt_icon.removeAttr('id').attr('id','Rich_Web_VS_Icon_Opt_'+responseData.id);
				jQuery('#Rich_Web_VS_Icon_Opt_'+responseData.id).siblings('Rich_Web_VS_Name').text(responseData.slider_vid_name)
				jQuery('#Rich_Web_VS_Icon_Opt_'+responseData.id).html('<div class="Rich_Web_VS_Icon"   onclick="Rich_Web_VSlider_Edit_Option('+responseData.id+')"><i class="Rich_Web_VS_Edit rich_web rich_web-pencil"></i></div>	<div class="Rich_Web_VS_Icon"  onclick="Rich_Web_VSlider_Copy_Option('+responseData.id+')"><i class="Rich_Web_VS_Copy rich_web rich_web-files-o"></i></div><div class="Rich_Web_VS_Icon"  onclick="Rich_Web_VSlider_Del_Option('+responseData.id+')"><i class="Rich_Web_VS_Del rich_web rich_web-trash"></i></div>')
				}, 600);
			}
		});
	}

	function Rich_Web_VS_Name_Available(){
			var RW_VS_name = jQuery('#Rich_Web_VSlider_Option_Name').val();
			var RW_VS_id = jQuery('#Rich_Web_VSlider_Upd_ID').val();
			var ajaxurl = object.ajaxurl;
				var data = {
				action: 'Rich_Web_VS_Name_Available', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
				RW_VS_name: RW_VS_name, 
				RW_VS_id: RW_VS_id,
				};
				jQuery.post(ajaxurl, data, function(response) {
					if (response == 'true') {
						jQuery('.RW_VS_Name_ErrorAl').hide();
						jQuery('#Rich_Web_VSlider_Option_Name').removeClass('RW_VS_InputError');
						jQuery(".Rich_Web_VSlider_Upd_Opt").attr("disabled", false);	
					} else if(response == 'false'){
						jQuery('.RW_VS_Name_ErrorAl').show();
						jQuery('#Rich_Web_VSlider_Option_Name').addClass('RW_VS_InputError');
						jQuery(".Rich_Web_VSlider_Upd_Opt").attr("disabled", true);
					}
				})
	}	

	jQuery(document).ready(function() {
		if(!navigator.onLine) {
			jQuery('.Rich_Web_VS_Opt_Content img').each(function() {
				jQuery(this).attr('src','<?php echo plugin_dir_url( __DIR__ ).'Images/ConFailed_Video_Slider.jpg';?>');
			})
		}
	})
</script>