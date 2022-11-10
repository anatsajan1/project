<?php
	if(!defined('ABSPATH')) exit;
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
?>
<style type="text/css">
	.Rich_Web_Header_Main {width: 99%;background: #6ecae9;margin-top: 30px;text-align: left;display: flex;flex-direction: row;flex-wrap: wrap;align-content: flex-start;padding: 20px 0px 10px 0px;gap: 25px;}
	.Rich_Web_Header_Main img { width: 26%; }
	.Rich_Web_Header_Free_Version {margin-left: auto;width: 70%;}
	.Rich_Web_Header_Free_Version_Shd { position: relative; z-index: 0; text-align:center; font-size: 18px; transition: all 0.5s; background-color: #6ecae9; float: right; }
	.Rich_Web_Header_Free_Version_Shd:before, .Rich_Web_Header_Free_Version_Shd:after { bottom: 15px; left: 10px; width: 50%; height: 20%; max-width: 300px; max-height: 100px; -webkit-box-shadow: 0 15px 10px #005e7d; -moz-box-shadow: 0 15px 10px #005e7d; box-shadow: 0 15px 10px #005e7d; -webkit-transform: rotate(-3deg); -moz-transform: rotate(-3deg); -ms-transform: rotate(-3deg); -o-transform: rotate(-3deg); transform: rotate(-3deg); z-index: -1; position: absolute; content: ""; }
	.Rich_Web_Header_Free_Version_Shd:after { transform: rotate(3deg); -moz-transform: rotate(3deg); -webkit-transform: rotate(3deg); right: 10px; left: auto; }
	.Rich_Web_Header_Free_Version a { padding: 5px 130px; transition: all 0.5s; background-color: #6ecae9; }
	.Rich_Web_Header_Free_Version a:hover { color: #005e7d !important; background-color: #6ecae9; }
	.Rich_Web_Header_Contacts { font-size: 16px; padding: 15px; display: inline-flex;}
	.Rich_Web_Header_Contacts a { text-decoration: none; color: #fff; margin-left: 10px; padding: 5px 7px; border-radius: 5px; background-color: #6ecae9; box-shadow: 0px 0px 10px #30a9d1; border: 1px solid #30a9d1; }
	.Rich_Web_Header_Contacts a:hover { background-color: #30a9d1; color: #ffffff; box-shadow: 0px 0px 10px #30a9d1; }
	@media screen and (max-width: 740px) { 
	.Rich_Web_Header_Main {flex-direction: column;align-content: center;align-items: center;}
	.Rich_Web_Header_Main img {width: 35%;}
	.Rich_Web_Header_Free_Version a { padding: 5px 50px; transition: all 0.5s; background-color: #6ecae9;}
	.Rich_Web_Header_Free_Version { margin-left: inherit; width: 70%;}
	}

</style>
<div class='Rich_Web_Header_Main'>
	<img src="<?php echo plugins_url('/Images/rich-web-logo.png',__FILE__)?>">
	<div class="Rich_Web_Header_Free_Version">
		<div class="Rich_Web_Header_Free_Version_Shd">
			<a href="http://rich-web.org/wp-video-slider/" target="_blank" style="text-decoration: none; color: #fff; display: block;">
				<i class='Rich_Web_Free_Version_Icon rich_web rich_web-shopping-basket' style="margin-right: 10px;"></i>
				This is free version. <br>
				<span style="display:block;margin-top:5px;">For more adventures click to buy Pro version.</span>
			</a>
		</div>
	</div>
	<div class="Rich_Web_Header_Contacts">
		<a href="http://rich-web.org/wp-video-slider-content/" target="_blank">Demo</a>
		<a href="https://wordpress.org/plugins/slider-video/#faq" target="_blank">FAQ</a>
		<a href="http://rich-web.org/contact-us/" target="_blank">Contact US</a>
	</div>	
</div>