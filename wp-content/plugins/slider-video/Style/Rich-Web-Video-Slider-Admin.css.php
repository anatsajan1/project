<?php
	if(!current_user_can('manage_options'))
	{
		die('Access Denied');
	}
?>
<style type='text/css'>
	.RW_VS_Buttons_Bar { width: 99%; margin: 5px 0px ; display: flex; flex-direction: row; flex-wrap: nowrap; align-content: flex-end; justify-content: flex-end; align-items: center;}
	.Rich_Web_VSlider_Add {  padding: 5px 10px; background: #47bde5; cursor: pointer; border: none;  color: #fff; text-shadow:1px 1px 1px #000000; width:100px;  transition:all 0.3s linear; }
	.Rich_Web_VSlider_AddAnim { width:0px !important; padding:0px !important; transition:all 0s linear; }
	.Rich_Web_VSlider_Sav,.Rich_Web_VSlider_Upd,.Rich_Web_VSlider_Can {  padding: 0px; background: #47bde5; cursor: pointer; border: none; color: #fff; text-shadow:1px 1px 1px #000000; width:0px;  transition:all 0.3s linear; }
	.Rich_Web_VSlider_SavAnim { padding: 5px 10px !important; width:100px !important;  transition:all 0s linear; }
	.Rich_Web_VSlider_Sav:hover,.Rich_Web_VSlider_Can:hover,.Rich_Web_VSlider_Upd:hover,.Rich_Web_VSlider_Add:hover { color: #fff; background:#30a9d1; box-shadow: 0px 0px 2px #30a9d1; }
	.Rich_Web_VSlider_CanAnim {    padding: 5px 10px !important; width:100px !important; transition:all 0s linear; }
	.Table_Data_Rich_Web_VS_Content { position:relative; width:99%; }
	.Table_Data_VS_Rich_Web1 { position:relative; top:0%; left:0%; width:100% !important; margin-top:10px; z-index:1; }
	.Rich_Web_VSlider_Tit_Table { width: 100%; background-color: #fff; text-align: center; text-shadow:1px 1px 1px #000000; padding: 1px; color: #fff; }
	.Rich_Web_VSlider_Tit_Table_Tr { background:#30a9d1; }
	.Rich_Web_VSlider_Tit_Table td:nth-child(1) { width:10%; }
	.Rich_Web_VSlider_Tit_Table td:nth-child(2) { width:25%; }
	.Rich_Web_VSlider_Tit_Table td:nth-child(3) { width:25%; }
	.Rich_Web_VSlider_Tit_Table td:nth-child(4) { width:10%; }
	.Rich_Web_VSlider_Tit_Table td:nth-child(5) { width:10%; }
	.Rich_Web_VSlider_Tit_Table td:nth-child(6) { width:10%; }
	.Rich_Web_VSlider_Tit_Table td:nth-child(7) { width:10%; }
	.Rich_Web_VSlider_Tit_Table2 { width: 100%; background-color: #fff; margin-top:10px; text-align: center; text-shadow:0px 0px 0px #000000; padding: 1px; color: #34383c; }
	.Rich_Web_VSlider_Tit_Table_Tr2 { background:#f1f1f1; }
	.Rich_Web_VSlider_Tit_Table_Tr2:nth-child(even) { background:#ffffff; }
	.Rich_Web_VSlider_Tit_Table_Tr2:hover { background:#e9e9e9; }
	.Rich_Web_VSlider_Tit_Table2 td:nth-child(1) { width:10%; }
	.Rich_Web_VSlider_Tit_Table2 td:nth-child(2) { width:25%; }
	.Rich_Web_VSlider_Tit_Table2 td:nth-child(3) { width:25%; }
	.Rich_Web_VSlider_Tit_Table2 td:nth-child(4) { width:10%; }
	.Rich_Web_VSlider_Tit_Table2 td:nth-child(5) { width:10%; cursor:pointer; }
	.Rich_Web_VSlider_Tit_Table2 td:nth-child(6) { width:10%; cursor:pointer; }
	.Rich_Web_VSlider_Tit_Table2 td:nth-child(7) { width:10%; cursor:pointer; }
	.Rich_Web_VS_Pencil { color:#ff0000; }
	.Rich_Web_VS_Delete { color:#00a0d2; }
	.Rich_Web_VS_Files { color: #02b424; }
	.Table_Data_VS_Rich_Web2 { position:relative; top:0%; left:0%; width:100% !important; margin-top:10px; z-index:1; display:none; }
	.Rich_Web_VS_ShortTable { position:relative; width: 28%; padding: 1px; background-color: white; text-align: justify; color: #000; font-size: 12px; }
	.Rich_Web_VS_ShortTable tr td { padding:5px; text-align:center; }
	.Rich_Web_VS_ShortTable tr:nth-child(1) { background-color: #30a9d1; color: #ffffff; }
	.Rich_Web_VS_ShortTable tr:nth-child(2) { background-color: #f1f1f1; }
	.Rich_Web_VS_ShortTable tr:nth-child(3) { background-color: #f1f1f1; }
	.Rich_Web_VS_ShortTable tr:nth-child(4) { background-color: #30a9d1; color: #ffffff; }
	.Rich_Web_VS_ShortTable tr:nth-child(5) { background-color: #f1f1f1; }
	.Rich_Web_VS_ShortTable tr:nth-child(6) { background-color: #f1f1f1; }
	.Rich_Web_Save_VSlider_Table { position:relative; width: 70%; padding: 1px; background-color: #fff; text-align: center; color: #000; font-size: 12px; margin-bottom:15px; }
	.Rich_Web_Save_VSlider_Table tr { background:#f1f1f1; }
	.Rich_Web_Save_VSlider_Table tr:nth-child(even) { background:#ffffff; }
	.Rich_Web_Save_VSlider_Table tr td { padding:3px; font-size:12px; font-family:Arial; }
	.Rich_Web_Save_VSlider_Table2 { position:relative; width: 100%; padding: 1px; background-color: #fff; text-align: center; color: #000; font-size: 12px; margin-bottom:15px; }
	.Rich_Web_Save_VSlider_Table2 tr { background:#30a9d1; }
	.Rich_Web_Save_VSlider_Table2 tr td { color:#fff; text-shadow:1px 1px 1px #000000; }
	.Rich_Web_Save_VSlider_Table2 tr td:nth-child(1) { width:5%; }
	.Rich_Web_Save_VSlider_Table2 tr td:nth-child(2) { width:25%; }
	.Rich_Web_Save_VSlider_Table2 tr td:nth-child(3) { width:40%; }
	.Rich_Web_Save_VSlider_Table2 tr td:nth-child(4) { width:10%; }
	.Rich_Web_Save_VSlider_Table2 tr td:nth-child(5) { width:10%; }
	.Rich_Web_Save_VSlider_Table2 tr td:nth-child(6) { width:10%; }
	.Rich_Web_Save_VSlider_Table3 { position:relative; width: 100%; padding: 1px; background-color: #fff; text-align: center; color: #000; font-size: 12px; margin-bottom:15px; }
	.Rich_Web_Save_VSlider_Table3 tr { background:#f1f1f1; }
	.Rich_Web_Save_VSlider_Table3 tr td { padding:5px; }
	.Rich_Web_Save_VSlider_Table3 tr:nth-child(even) { background:#ffffff; }
	.Rich_Web_Save_VSlider_Table3 tr:hover { background:#e9e9e9; cursor: all-scroll; }
	.Rich_Web_Save_VSlider_Table3 tr td:nth-child(1) { width:5%; }
	.Rich_Web_Save_VSlider_Table3 tr td:nth-child(2) { width:25%; }
	.Rich_Web_Save_VSlider_Table3 tr td:nth-child(3) { width:40%; }
	.Rich_Web_Save_VSlider_Table3 tr td:nth-child(4) { width:10%; position: relative; cursor: pointer; }
	.Rich_Web_Save_VSlider_Table3 tr td:nth-child(5) { width:10%; position: relative; cursor: pointer; }
	.Rich_Web_Save_VSlider_Table3 tr td:nth-child(6) { width:10%; position: relative; cursor: pointer; }
	.Rich_Web_Save_VSlider_Table3 i { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
	.Rich_Web_Save_VSlider_Table3 i:before { display: block; position: relative; top: 50%; transform: translateY(-50%); -webkit-transform: translateY(-50%); }
	.Rich_Web_VSlider_Input { width: 70%; font-size: 12px; height: 28px; }
	.Rich_Web_VSlider_Add_Vid { background:#30a9d1; color:#fff; text-shadow:1px 1px 1px #000; padding: 0px; }
	.Rich_Web_VSlider_Desc { height:100px; }
	.Rich_Web_VSlider_ONT { margin-left:10px !important; }
	.Rich_Web_VSlider_Sav_Video, .Rich_Web_VSlider_Res_Video, .Rich_Web_VSlider_Upd_Video { padding: 5px 10px; background: #fff; cursor: pointer; border: none; color: #000; transition: all 0.3s linear; font-size:10px; margin:10px; }
	.Rich_Web_VSlider_Sav_Video:hover, .Rich_Web_VSlider_Res_Video:hover, .Rich_Web_VSlider_Upd_Video:hover { color: #fff; background: #30a9d1; text-shadow: 0px 0px 2px #fff; }
	.Rich_Web_VSlider_Upd_Video { display:none; }
	@media all and (max-width:410px) { .Rich_Web_Save_VSlider_Table { width:61%; } }
	.RW_VS_C_TTip { visibility: hidden; width: 140px; background-color: #30a9d1; color: #fff; text-align: center; border-radius: 6px; padding: 5px; position: absolute; z-index: 1; bottom: 120%; left: 50%; margin-left: -75px; opacity: 0; transition: opacity 0.3s;}
	.RW_VS_C_TTip::after {content: "";position: absolute;top: 100%;left: 50%;margin-left: -5px;border-width: 5px;border-style: solid;border-color: #30a9d1 transparent transparent transparent;}
	.Rich_Web_VSlider_ID:hover .RW_VS_C_TTip,.Rich_Web_VSlider_ID_1:hover .RW_VS_C_TTip { visibility: visible; opacity: 1;}
	.Rich_Web_VSlider_ID,.Rich_Web_VSlider_ID_1{position: relative;cursor:pointer; -moz-user-select: none; -webkit-user-select: none; -ms-user-select:none; user-select:none;-o-user-select:none;	}
	.Rich_Web_SliderVd_Fixed_Div { position: fixed; left: 0; top: 0; width: 100%; height: 100%; z-index: 999999999999; background: rgba(0, 0, 0, 0.2); display: none; }
	.Rich_Web_SliderVd_Absolute_Div { position: fixed; width: 100%; z-index: 9999999999999; top: 50%; transform: translateY(-50%); left: 0; text-align: center; display: none; }
	.Rich_Web_SliderVd_Relative_Div { position: relative; background: #ffffff; margin: 0 auto; padding: 5px 10px; color: #000000; border: 2px solid #ffffff; float: left; left: 50%; transform: translateX(-50%);  }
	.Rich_Web_SliderVd_Relative_Div p { font-size: 16px; width: 100%; }
	.Rich_Web_SliderVd_Relative_Div span {position: relative;float: left;margin: 5px 2px;padding: 8px 15px;cursor: pointer;border: 1px solid #ffffff;border-radius: 9px;text-shadow: none;width: 35%;}
	.Rich_Web_SliderVd_Relative_Yes{background-color: #63a4ff;background-image: linear-gradient(315deg, #63a4ff 0%, #83eaf1 74%);opacity: 0.7;border: none;color: white;padding: 6px 11px;cursor: pointer;font-size: 13px;border-radius: 7px;}
	.Rich_Web_SliderVd_Relative_No{background-color: #990000;background-image: linear-gradient(147deg, #990000 0%, #ff0000 74%);opacity: 0.7;border: none;color: white;padding: 6px 11px;cursor: pointer;font-size: 13px;border-radius: 7px;margin-right: 10px;}
	.Rich_Web_SliderVd_Relative_Yes:hover , .Rich_Web_SliderVd_Relative_No:hover {opacity: 1;}
	.Rich_Web_VS_Del_Trash{color: #ffffff;font-size: 25px !important;display: inherit;margin-bottom: 9px;color: red;}
	.RW_Support_btn{ padding: 5px 10px !important; width: 100px !important;  cursor: pointer; border: none; color: #fff; text-shadow: 1px 1px 1px #000000; margin: 5px;background-color: #990000;background-image: linear-gradient(147deg, #990000 0%, #ff0000 74%); }
	.RW_Support_btn:hover{ background-color: #ff0000;background-image: linear-gradient(147deg, #d00b0b 0%, #ff0000 74%);color: #ffffff;}
	.RW_VS_Name_ErrorAl {
    font-family: Helvetica; font-size: 13px; font-weight: bold; color: #cc0033; line-height: 20px; background-color: #fce4e4; border: 1px solid #fcc2c3; border-radius: 7px; -moz-border-radius: 7px; -webkit-border-radius: 7px; float: right; position: absolute; padding: 7px 11px 4px; margin-right: 11px; position: absolute; top: 145px; left: 39%;
		}
	.RW_VS_InputError {
    border: 1px solid #ff0000 !important;
    color: #0e0e0e !important;
    outline: none !important;
	}

</style>
