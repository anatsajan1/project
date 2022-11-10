function RIch_Web_SVS_Play_Video(VSlider_ID, Rich_Web_SVS_AP)
{
	jQuery('.RichWeb_SVS_'+VSlider_ID+' iframe').css('z-index','30');
	jQuery('.RichWeb_SVS_'+VSlider_ID+' .Rich_Web_VSlider_SVS_PlayIcon').fadeOut();
	jQuery('#Rich_Web_VS_SVS_'+VSlider_ID+' a').each(function(){
		if(jQuery(this).hasClass('iis-current-slide') && Rich_Web_SVS_AP=="on")
		{
			jQuery('.RichWeb_SVS_'+VSlider_ID+' iframe').attr('src',jQuery(this).attr('data-src-2x')+'?autoplay=1&mute=1&enablejsapi=1');
		}
		if(jQuery(this).hasClass('iis-current-slide') &&  Rich_Web_SVS_AP==" "){
			jQuery('.RichWeb_SVS_'+VSlider_ID+' iframe').attr('src',jQuery(this).attr('data-src-2x')+'?&rel=0&amp');
		}
	})
}
function RIch_Web_SVS_Close_Video(VSlider_ID)
{
	jQuery('.RichWeb_SVS_'+VSlider_ID+' iframe').css('z-index','-1');
	jQuery('.RichWeb_SVS_'+VSlider_ID+' iframe').attr('src','');
	jQuery('.RichWeb_SVS_'+VSlider_ID+' .Rich_Web_VSlider_SVS_PlayIcon').fadeIn();
}