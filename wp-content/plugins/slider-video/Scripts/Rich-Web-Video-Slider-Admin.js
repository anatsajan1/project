function RichWeb_Video_Slider_Add(number) {
    jQuery('.Table_Data_VS_Rich_Web1').css('display', 'none');
    jQuery('.RW_Support_btn').css('margin-right', 'auto');
    jQuery('.Rich_Web_VSlider_Add').addClass('Rich_Web_VSlider_AddAnim');
    jQuery('.Table_Data_VS_Rich_Web2').css('display', 'block');
    jQuery('.Rich_Web_VSlider_Sav').addClass('Rich_Web_VSlider_SavAnim');
    jQuery('.Rich_Web_VSlider_Can').addClass('Rich_Web_VSlider_CanAnim');
    jQuery('.Rich_Web_VSlider_ID').html('[Rich_Web_Video id="' + number + '"] <span class="RW_VS_C_TTip" >Copy to clipboard</span>');
    jQuery('.Rich_Web_VSlider_ID_1').html('&lt;?php echo do_shortcode(&apos;[Rich_Web_Video id="' + number + '"]&apos;);?&gt <span class="RW_VS_C_TTip" >Copy to clipboard</span');
    Rich_Web_Video_Slider_Editor();
}

function RichWeb_Video_Slider_Cancel() {
    location.reload();
}

function Rich_Web_Res_VSlider_Vid() {
    jQuery('.Rich_Web_VSlider_Input2').val('');
    jQuery('.Rich_Web_VSlider_ONT').attr('checked', false);
    tinymce.get('Rich_Web_VSlider_Desc').setContent('');
}

function Rich_Web_Upload_Video() {
    var RWIntervId = setInterval(function() {
        var code = jQuery('#Rich_Web_Vid_Src_1').val();
        if (code.indexOf('https://www.youtube.com/') > 0) {
            if (code.indexOf('list') > 0 || code.indexOf('index') > 0) {
                if (code.indexOf('embed') > 0) {
                    var Rich_Web_Codes1 = code.split('[embed]');
                    var Rich_Web_Codes2 = Rich_Web_Codes1[1].split('[/embed]');
                    var Rich_Web_Codes3 = Rich_Web_Codes2[0].split('www.youtube.com/watch?v=');
                    if (Rich_Web_Codes3[1].length != 11) { Rich_Web_Codes3[1] = Rich_Web_Codes3[1].substr(0, 11); }

                    jQuery('#Rich_Web_Vid_Src_2').val('https://www.youtube.com/embed/' + Rich_Web_Codes3[1]);
                    jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Codes3[1] + '/maxresdefault.jpg');
                    jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Codes3[1] + '/hqdefault.jpg');
                    jQuery('#Rich_Web_Vid_Vid_1').val('https://www.youtube.com/watch?v=' + Rich_Web_Codes3[1]);
                    if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                        clearInterval(RWIntervId);
                        jQuery('#Rich_Web_Vid_Src_1').val('');
                    }
                } else {
                    var Rich_Web_Codes1 = code.split('<a href="https://www.youtube.com/');
                    var Rich_Web_Codes2 = Rich_Web_Codes1[1].split("=");
                    var Rich_Web_Code_Src = Rich_Web_Codes2[1].split('&');
                    jQuery('#Rich_Web_Vid_Src_2').val('https://www.youtube.com/embed/' + Rich_Web_Code_Src[0]);
                    jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Code_Src[0] + '/maxresdefault.jpg');
                    jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Code_Src[0] + '/hqdefault.jpg');
                    jQuery('#Rich_Web_Vid_Vid_1').val('https://www.youtube.com/watch?v=' + Rich_Web_Code_Src[0]);
                    if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                        clearInterval(RWIntervId);
                        jQuery('#Rich_Web_Vid_Src_1').val('');
                    }
                }
            } else if (code.indexOf('embed') > 0) {
                var Rich_Web_Codes1 = code.split('[embed]');
                var Rich_Web_Codes2 = Rich_Web_Codes1[1].split('[/embed]');
                if (Rich_Web_Codes2[0].indexOf('watch?') > 0) {
                    var Rich_Web_Codes3 = Rich_Web_Codes2[0].split('=');

                    jQuery('#Rich_Web_Vid_Src_2').val('https://www.youtube.com/embed/' + Rich_Web_Codes3[1]);
                    jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Codes3[1] + '/maxresdefault.jpg');
                    jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Codes3[1] + '/hqdefault.jpg');
                    jQuery('#Rich_Web_Vid_Vid_1').val('https://www.youtube.com/watch?v=' + Rich_Web_Codes3[1]);
                    if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                        clearInterval(RWIntervId);
                        jQuery('#Rich_Web_Vid_Src_1').val('');
                    }
                } else {
                    var Rich_Web_Code_Src = Rich_Web_Codes2[0];
                    var Rich_Web_Im_Src = Rich_Web_Code_Src.split('embed/');

                    jQuery('#Rich_Web_Vid_Src_2').val(Rich_Web_Code_Src);
                    jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Im_Src[1] + '/maxresdefault.jpg');
                    jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Im_Src[1] + '/hqdefault.jpg');
                    jQuery('#Rich_Web_Vid_Vid_1').val('https://www.youtube.com/watch?v=' + Rich_Web_Im_Src[1]);
                    if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                        clearInterval(RWIntervId);
                        jQuery('#Rich_Web_Vid_Src_1').val('');
                    }
                }
            } else {
                var Rich_Web_Codes1 = code.split('<a href="https://www.youtube.com/');
                var Rich_Web_Codes2 = Rich_Web_Codes1[1].split('=');
                if (Rich_Web_Codes2.length >= 5) {
                    var Rich_Web_Code_Src = Rich_Web_Codes2[3].split('&');
                } else {
                    var Rich_Web_Code_Src = Rich_Web_Codes2[1].split('">https://');
                }
                jQuery('#Rich_Web_Vid_Src_2').val('https://www.youtube.com/embed/' + Rich_Web_Code_Src[0]);
                jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Code_Src[0] + '/maxresdefault.jpg');
                jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Code_Src[0] + '/hqdefault.jpg');
                jQuery('#Rich_Web_Vid_Vid_1').val('https://www.youtube.com/watch?v=' + Rich_Web_Code_Src[0]);
                if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                    clearInterval(RWIntervId);
                    jQuery('#Rich_Web_Vid_Src_1').val('');
                }
            }
        } else if (code.indexOf('https://youtu.be/') > 0) {
            if (code.indexOf('embed') > 0) {
                var Rich_Web_Codes1 = code.split('[embed]');
                var Rich_Web_Codes2 = Rich_Web_Codes1[1].split('[/embed]');
                var Rich_Web_Codes3 = Rich_Web_Codes2[0].split('youtu.be/');
                if (Rich_Web_Codes3[1].length != 11) { Rich_Web_Codes3[1] = Rich_Web_Codes3[1].substr(0, 11); }

                jQuery('#Rich_Web_Vid_Src_2').val('https://www.youtube.com/embed/' + Rich_Web_Codes3[1]);
                jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Codes3[1] + '/maxresdefault.jpg');
                jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Codes3[1] + '/hqdefault.jpg');
                jQuery('#Rich_Web_Vid_Vid_1').val('https://www.youtube.com/watch?v=' + Rich_Web_Codes3[1]);
                if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                    clearInterval(RWIntervId);
                    jQuery('#Rich_Web_Vid_Src_1').val('');
                }
            } else {
                var Rich_Web_Codes1 = code.split('<a href="https://youtu.be/');
                var Rich_Web_Code_Src = Rich_Web_Code_Src[1].split('">https://');
                if (Rich_Web_Code_Src[0].length != 11) { Rich_Web_Code_Src[0] = Rich_Web_Code_Src[0].substr(0, 11); }
                jQuery('#Rich_Web_Vid_Src_2').val('https://www.youtube.com/embed/' + Rich_Web_Code_Src[0]);
                jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Code_Src[0] + '/maxresdefault.jpg');
                jQuery('#Rich_Web_Vid_ImSrc_2').val('https://img.youtube.com/vi/' + Rich_Web_Code_Src[0] + '/hqdefault.jpg');
                jQuery('#Rich_Web_Vid_Vid_1').val('https://www.youtube.com/watch?v=' + Rich_Web_Code_Src[0]);
                if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                    clearInterval(RWIntervId);
                    jQuery('#Rich_Web_Vid_Src_1').val('');
                }
            }
        } else if (code.indexOf('https://player.vimeo.com/') > 0) {
        var s1 = code.split('[embed]');
        var src = s1[1].split('[/embed]')[0];
        jQuery('#Rich_Web_Vid_Vid_1').val(src);
        jQuery('#Rich_Web_Vid_Src_2').val(src);
        jQuery.ajax({
            type:'GET',
            url: 'https://vimeo.com/api/oembed.json?url='+src,
            jsonp: 'callback',
            dataType: 'jsonp',
            success: function(data){
                jQuery('#Rich_Web_Vid_ImSrc_2').val(data.thumbnail_url);
                if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                    clearInterval(RWIntervId);
                    jQuery('#Rich_Web_Vid_Src_1').val('');
                }
            }
        });

    } else if (code.indexOf('vimeo.com') > 0) {
            if (code.indexOf('embed') > 0) {
                var Rich_Web_Codes1 = code.split('[embed]https://vimeo.com/');
                var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('[/embed]')[0].split('/');
                jQuery('#Rich_Web_Vid_Vid_1').val('https://vimeo.com/' + Rich_Web_Code_Src[0]);
                if (Rich_Web_Code_Src[0].length > 9) {
                    var Real_Rich_Web_Code_Src = Rich_Web_Code_Src[0].split('/');
                    Rich_Web_Code_Src[0] = Real_Rich_Web_Code_Src[2];
                }
                jQuery('#Rich_Web_Vid_Src_2').val('https://player.vimeo.com/video/' + Rich_Web_Code_Src[0]);

                jQuery.ajax({
                    type: 'GET',
                    url: 'https://vimeo.com/api/oembed.json?url=https://player.vimeo.com/video/' + Rich_Web_Code_Src[0],
                    jsonp: 'callback',
                    dataType: 'jsonp',
                    success: function(data) {
                        jQuery('#Rich_Web_Vid_ImSrc_2').val(data.thumbnail_url);
                        if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                            clearInterval(RWIntervId);
                            jQuery('#Rich_Web_Vid_Src_1').val('');
                        }

                    }
                });


            } else if (code.indexOf('player') > 0) {
                var Rich_Web_Codes1 = code.split('<a href="https://player.vimeo.com/video/');
                var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('">https://');
                jQuery('#Rich_Web_Vid_Vid_1').val('https://vimeo.com/' + Rich_Web_Code_Src[0]);
                if (Rich_Web_Code_Src[0].length > 9) {
                    var Real_Rich_Web_Code_Src = Rich_Web_Code_Src[0].split('/');
                    Rich_Web_Code_Src[0] = Real_Rich_Web_Code_Src[2];
                }
                jQuery('#Rich_Web_Vid_Src_2').val('https://player.vimeo.com/video/' + Rich_Web_Code_Src[0]);
                var ajaxurl = object.ajaxurl;
                var data = {
                    action: 'Rich_Web_VSlider_Vimeo', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
                    foobar: 'https://player.vimeo.com/video/' + Rich_Web_Code_Src[0], // translates into $_POST['foobar'] in PHP
                };
                jQuery.post(ajaxurl, data, function(response) {
                    jQuery('#Rich_Web_Vid_ImSrc_2').val(response);
                    if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                        clearInterval(RWIntervId);
                        jQuery('#Rich_Web_Vid_Src_1').val('');
                    }
                });
            } else {
                var Rich_Web_Codes1 = code.split('<a href="https://vimeo.com/');
                var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('">https://');
                jQuery('#Rich_Web_Vid_Vid_1').val('https://vimeo.com/' + Rich_Web_Code_Src[0]);
                if (Rich_Web_Code_Src[0].length > 9) {
                    var Real_Rich_Web_Code_Src = Rich_Web_Code_Src[0].split('/');
                    Rich_Web_Code_Src[0] = Real_Rich_Web_Code_Src[2];
                }
                jQuery('#Rich_Web_Vid_Src_2').val('https://player.vimeo.com/video/' + Rich_Web_Code_Src[0]);
                var ajaxurl = object.ajaxurl;
                var data = {
                    action: 'Rich_Web_VSlider_Vimeo', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
                    foobar: 'https://player.vimeo.com/video/' + Rich_Web_Code_Src[0], // translates into $_POST['foobar'] in PHP
                };
                jQuery.post(ajaxurl, data, function(response) {
                    jQuery('#Rich_Web_Vid_ImSrc_2').val(response);
                    if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                        clearInterval(RWIntervId);
                        jQuery('#Rich_Web_Vid_Src_1').val('');
                    }
                });
            }
        } else if (code.indexOf('.mp4') > 0) {
            if (code.indexOf('embed') > 0) {
                var Rich_Web_Codes1 = code.split('[embed]');
                var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('[/embed]');
                jQuery('#Rich_Web_Vid_Vid_1').val(Rich_Web_Code_Src[0]);
                jQuery('#Rich_Web_Vid_Src_2').val(Rich_Web_Code_Src[0]);
                if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                    clearInterval(RWIntervId);
                    jQuery('#Rich_Web_Vid_Src_1').val('');
                }
            } else if (code.indexOf('video') > 0) {
                var Rich_Web_Codes1 = code.split('mp4="');
                var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('"]');
                jQuery('#Rich_Web_Vid_Vid_1').val(Rich_Web_Code_Src[0]);
                jQuery('#Rich_Web_Vid_Src_2').val(Rich_Web_Code_Src[0]);
                if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                    clearInterval(RWIntervId);
                    jQuery('#Rich_Web_Vid_Src_1').val('');
                }
            } else {
                var Rich_Web_Codes1 = code.split('<a href="');
                var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('">');
                jQuery('#Rich_Web_Vid_Vid_1').val(Rich_Web_Code_Src[0]);
                jQuery('#Rich_Web_Vid_Src_2').val(Rich_Web_Code_Src[0]);
                if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                    clearInterval(RWIntervId);
                    jQuery('#Rich_Web_Vid_Src_1').val('');
                }
            }
        } else if (code.indexOf('vevo.com') > 0) {
            var Rich_Web_Codes1 = code.split('<a href="');
            var Rich_Web_Code_Src = Rich_Web_Codes1[1].split('">');
            var Rich_Web_Code_Src1 = Rich_Web_Code_Src[0].split('/');
            jQuery('#Rich_Web_Vid_Src_2').val('https://cache.vevo.com/assets/html/embed.html?video=' + Rich_Web_Code_Src1[Rich_Web_Code_Src1.length - 1] + '&autoplay=1');
            jQuery('#Rich_Web_Vid_Vid_1').val('https://cache.vevo.com/assets/html/embed.html?video=' + Rich_Web_Code_Src1[Rich_Web_Code_Src1.length - 1] + '&autoplay=1');
            if (jQuery('#Rich_Web_Vid_Src_2').val().length > 0) {
                clearInterval(RWIntervId);
                jQuery('#Rich_Web_Vid_Src_1').val('');
            }
        }
    }, 100)
}

function Rich_Web_Upload_Image() {
    var RWIntervId = setInterval(function() {
        var code = jQuery('#Rich_Web_Vid_ImSrc_1').val();
        if (code.indexOf('img') > 0) {
            var s = code.split('src="');
            var src = s[1].split('"');
            jQuery('#Rich_Web_Vid_ImSrc_2').val(src[0]);
            if (jQuery('#Rich_Web_Vid_ImSrc_2').val().length > 0) {
                jQuery('#Rich_Web_Vid_ImSrc_1').val('');
                clearInterval(RWIntervId);
            }
        }
    }, 100)
}

function Rich_Web_Sav_VSlider_Vid() {
    if (!jQuery('#Rich_Web_Vid_Src_2').val()) { jQuery('#Rich_Web_Vid_Src_2').after('<div class="RW_VS_Name_ErrorAl ">This field is requireq</div>').addClass('RW_VS_InputError');  return false}else{
         if (jQuery('.RW_VS_Name_ErrorAl').length) {jQuery('.RW_VS_Name_ErrorAl').remove(); jQuery('#Rich_Web_Vid_Src_2').removeClass('RW_VS_InputError'); }
     }

    var Rich_Web_VSlider_Count = jQuery('#Rich_Web_VSlider_Count').val();
    var Rich_Web_VSlider_Video_Title = jQuery('#Rich_Web_VSlider_Video_Title').val();
    var Rich_Web_Vid_Vid_1 = jQuery('#Rich_Web_Vid_Vid_1').val();
    var Rich_Web_Vid_Src_2 = jQuery('#Rich_Web_Vid_Src_2').val();
    var Rich_Web_Vid_ImSrc_2 = jQuery('#Rich_Web_Vid_ImSrc_2').val();
    var Rich_Web_VSlider_Desc = tinymce.get('Rich_Web_VSlider_Desc').getContent();
    var Rich_Web_VSlider_Link = jQuery('#Rich_Web_VSlider_Link').val();
    var Rich_Web_VSlider_ONT = jQuery('#Rich_Web_VSlider_ONT').attr('checked');


    jQuery('.Rich_Web_Save_VSlider_Table3').append('<tr id="Rich_Web_VSlider_tr_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><td name="Rich_Web_VSlider_NN_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" id="Rich_Web_VSlider_NN_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" >' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '</td><td id="Rich_Web_VSlider_Img_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><img src="' + Rich_Web_Vid_ImSrc_2 + '" id="Rich_Web_VSlider_Img_Src_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSlider_Img_Src_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" style="height:60px;"></td><td id="Rich_Web_VSlider_Vid_Title_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSlider_Vid_Title_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '">' + Rich_Web_VSlider_Video_Title + '</td><td id="Rich_Web_VSlider_tdClone_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><i class="Rich_Web_VS_Files rich_web rich_web-files-o" onclick="Rich_Web_VSlider_Clone_Video(' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + ')"></i></td><td id="Rich_Web_VSlider_tdEdit_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><i class="Rich_Web_VS_Pencil rich_web rich_web-pencil" onclick="Rich_Web_VSlider_Edit_Video(' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + ')"></i></td><td id="Rich_Web_VSlider_tdDelete_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><i class="Rich_Web_VS_Delete rich_web rich_web-trash" onclick="Rich_Web_VSlider_Delete_Video(' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + ')"></i><input type="text" style="display:none;" class="Rich_Web_VSlider_Add_Title" id="Rich_Web_VSlider_Add_Title_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSlider_Add_Title_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSlider_Video_Title + '" /><input type="text" style="display:none;" class="Rich_Web_VSlider_Add_Description" id="Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value=""/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Img" id="Rich_Web_VSldier_Add_Img_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_Img_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_Vid_ImSrc_2 + '"/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Vid" id="Rich_Web_VSldier_Add_Vid_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_Vid_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_Vid_Vid_1 + '"/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Src" id="Rich_Web_VSldier_Add_Src_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_Src_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_Vid_Src_2 + '"/><input type="text" style="display:none" class="Rich_Web_VSldier_Add_Link" id="Rich_Web_VSldier_Add_Link_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_Link_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSlider_Link + '"><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_ONT" id="Rich_Web_VSldier_Add_ONT_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_ONT_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSlider_ONT + '"/></td></tr>');
    jQuery('#Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1)).val(Rich_Web_VSlider_Desc);
    jQuery('#Rich_Web_VSlider_Count').val(parseInt(parseInt(Rich_Web_VSlider_Count) + 1));
    Rich_Web_Res_VSlider_Vid();
}

function Rich_Web_Upd_VSlider_Vid() {
    updateNumber = jQuery('#Rich_Web_VSlider_HidUp').val();

    var Rich_Web_VSlider_Vid_Title = jQuery('#Rich_Web_VSlider_Video_Title').val();
    var Rich_Web_VSlider_Add_Desc = tinymce.get('Rich_Web_VSlider_Desc').getContent();
    var Rich_Web_VSldier_Add_Img = jQuery('#Rich_Web_Vid_ImSrc_2').val();
    var Rich_Web_VSldier_Add_Vid = jQuery('#Rich_Web_Vid_Vid_1').val();
    var Rich_Web_VSldier_Add_Src = jQuery('#Rich_Web_Vid_Src_2').val();
    var Rich_Web_VSldier_Add_Link = jQuery('#Rich_Web_VSlider_Link').val();
    var Rich_Web_VSldier_Add_ONT = jQuery('#Rich_Web_VSlider_ONT').attr('checked');

    jQuery('#Rich_Web_VSlider_Img_Src_' + updateNumber).attr('src', Rich_Web_VSldier_Add_Img);
    jQuery('#Rich_Web_VSlider_Add_Title_' + updateNumber).val(Rich_Web_VSlider_Vid_Title);
    jQuery('#Rich_Web_VSlider_Vid_Title_' + updateNumber).text(Rich_Web_VSlider_Vid_Title);
    jQuery('#Rich_Web_VSlider_Add_Description_' + updateNumber).val(Rich_Web_VSlider_Add_Desc);
    jQuery('#Rich_Web_VSldier_Add_Img_' + updateNumber).val(Rich_Web_VSldier_Add_Img);
    jQuery('#Rich_Web_VSldier_Add_Vid_' + updateNumber).val(Rich_Web_VSldier_Add_Vid);
    jQuery('#Rich_Web_VSldier_Add_Src_' + updateNumber).val(Rich_Web_VSldier_Add_Src);
    jQuery('#Rich_Web_VSldier_Add_Link_' + updateNumber).val(Rich_Web_VSldier_Add_Link);
    jQuery('#Rich_Web_VSldier_Add_ONT_' + updateNumber).val(Rich_Web_VSldier_Add_ONT);
    jQuery('.Rich_Web_VSlider_Sav_Video').show();
    jQuery('.Rich_Web_VSlider_Upd_Video').hide();
    Rich_Web_Res_VSlider_Vid();
}

function Rich_Web_VSlider_Clone_Video(cloneNumber) {
    var Rich_Web_VSlider_Vid_Title = jQuery('#Rich_Web_VSlider_Vid_Title_' + cloneNumber).text();
    var Rich_Web_VSlider_Add_Desc = jQuery('#Rich_Web_VSlider_Add_Description_' + cloneNumber).val();
    var Rich_Web_VSldier_Add_Img = jQuery('#Rich_Web_VSldier_Add_Img_' + cloneNumber).val();
    var Rich_Web_VSldier_Add_Vid = jQuery('#Rich_Web_VSldier_Add_Vid_' + cloneNumber).val();
    var Rich_Web_VSldier_Add_Src = jQuery('#Rich_Web_VSldier_Add_Src_' + cloneNumber).val();
    var Rich_Web_VSldier_Add_Link = jQuery('#Rich_Web_VSldier_Add_Link_' + cloneNumber).val();
    var Rich_Web_VSldier_Add_ONT = jQuery('#Rich_Web_VSldier_Add_ONT_' + cloneNumber).val();
    var Rich_Web_VSlider_Count = jQuery('#Rich_Web_VSlider_Count').val();

    jQuery('#Rich_Web_VSlider_tr_' + cloneNumber).after('<tr id="Rich_Web_VSlider_tr_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><td name="Rich_Web_VSlider_NN_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" id="Rich_Web_VSlider_NN_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" >' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '</td><td id="Rich_Web_VSlider_Img_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><img src="' + Rich_Web_VSldier_Add_Img + '" id="Rich_Web_VSlider_Img_Src_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSlider_Img_Src_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" style="height:60px;"></td><td id="Rich_Web_VSlider_Vid_Title_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSlider_Vid_Title_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '">' + Rich_Web_VSlider_Vid_Title + '</td><td id="Rich_Web_VSlider_tdClone_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><i class="Rich_Web_VS_Files rich_web rich_web-files-o" onclick="Rich_Web_VSlider_Clone_Video(' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + ')"></i></td><td id="Rich_Web_VSlider_tdEdit_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><i class="Rich_Web_VS_Pencil rich_web rich_web-pencil" onclick="Rich_Web_VSlider_Edit_Video(' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + ')"></i></td><td id="Rich_Web_VSlider_tdDelete_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '"><i class="Rich_Web_VS_Delete rich_web rich_web-trash" onclick="Rich_Web_VSlider_Delete_Video(' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + ')"></i><input type="text" style="display:none;" class="Rich_Web_VSlider_Add_Title" id="Rich_Web_VSlider_Add_Title_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSlider_Add_Title_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSlider_Vid_Title + '"/><input type="text" style="display:none;" class="Rich_Web_VSlider_Add_Description" id="Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value=""/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Img" id="Rich_Web_VSldier_Add_Img_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_Img_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSldier_Add_Img + '"/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Vid" id="Rich_Web_VSldier_Add_Vid_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_Vid_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSldier_Add_Vid + '"/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Src" id="Rich_Web_VSldier_Add_Src_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_Src_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSldier_Add_Src + '"/><input type="text" style="display:none" class="Rich_Web_VSldier_Add_Link" id="Rich_Web_VSldier_Add_Link_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_Link_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSldier_Add_Link + '"><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_ONT" id="Rich_Web_VSldier_Add_ONT_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" name="Rich_Web_VSldier_Add_ONT_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1) + '" value="' + Rich_Web_VSldier_Add_ONT + '"/></td></tr>');

    jQuery('#Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(Rich_Web_VSlider_Count) + 1)).val(Rich_Web_VSlider_Add_Desc);
    jQuery('.Rich_Web_Save_VSlider_Table3 tr').each(function() {
        jQuery(this).attr('id', 'Rich_Web_VSlider_tr_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(1)').attr('name', 'Rich_Web_VSlider_NN_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(1)').attr('id', 'Rich_Web_VSlider_NN_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(2)').attr('id', 'Rich_Web_VSlider_Img_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(2) img').attr('id', 'Rich_Web_VSlider_Img_Src_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(2) img').attr('name', 'Rich_Web_VSlider_Img_Src_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(3)').attr('id', 'Rich_Web_VSlider_Vid_Title_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(3)').attr('name', 'Rich_Web_VSlider_Vid_Title_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(4)').attr('id', 'Rich_Web_VSlider_tdClone_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(4) i').attr('onclick', 'Rich_Web_VSlider_Clone_Video(' + parseInt(parseInt(jQuery(this).index()) + 1) + ')');
        jQuery(this).find('td:nth-child(5)').attr('id', 'Rich_Web_VSlider_tdEdit_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(5) i').attr('onclick', 'Rich_Web_VSlider_Edit_Video(' + parseInt(parseInt(jQuery(this).index()) + 1) + ')');
        jQuery(this).find('td:nth-child(6)').attr('id', 'Rich_Web_VSlider_tdDelete_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('td:nth-child(6) i').attr('onclick', 'Rich_Web_VSlider_Delete_Video(' + parseInt(parseInt(jQuery(this).index()) + 1) + ')');
        jQuery(this).find('.Rich_Web_VSlider_Add_Title').attr('id', 'Rich_Web_VSlider_Add_Title_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSlider_Add_Title').attr('name', 'Rich_Web_VSlider_Add_Title_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSlider_Add_Description').attr('id', 'Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSlider_Add_Description').attr('name', 'Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_Img').attr('id', 'Rich_Web_VSldier_Add_Img_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_Img').attr('name', 'Rich_Web_VSldier_Add_Img_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_Vid').attr('id', 'Rich_Web_VSldier_Add_Vid_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_Vid').attr('name', 'Rich_Web_VSldier_Add_Vid_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_Src').attr('id', 'Rich_Web_VSldier_Add_Src_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_Src').attr('name', 'Rich_Web_VSldier_Add_Src_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_Link').attr('id', 'Rich_Web_VSldier_Add_Link_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_Link').attr('name', 'Rich_Web_VSldier_Add_Link_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_ONT').attr('id', 'Rich_Web_VSldier_Add_ONT_' + parseInt(parseInt(jQuery(this).index()) + 1));
        jQuery(this).find('.Rich_Web_VSldier_Add_ONT').attr('name', 'Rich_Web_VSldier_Add_ONT_' + parseInt(parseInt(jQuery(this).index()) + 1));
    })
    jQuery('#Rich_Web_VSlider_Count').val(parseInt(parseInt(Rich_Web_VSlider_Count) + 1));
}

function Rich_Web_VSlider_Edit_Video(editNumber) {
    var Rich_Web_VSlider_Vid_Title = jQuery('#Rich_Web_VSlider_Vid_Title_' + editNumber).text();
    var Rich_Web_VSlider_Add_Desc = jQuery('#Rich_Web_VSlider_Add_Description_' + editNumber).val();
    var Rich_Web_VSldier_Add_Img = jQuery('#Rich_Web_VSldier_Add_Img_' + editNumber).val();
    var Rich_Web_VSldier_Add_Vid = jQuery('#Rich_Web_VSldier_Add_Vid_' + editNumber).val();
    var Rich_Web_VSldier_Add_Src = jQuery('#Rich_Web_VSldier_Add_Src_' + editNumber).val();
    var Rich_Web_VSldier_Add_Link = jQuery('#Rich_Web_VSldier_Add_Link_' + editNumber).val();
    var Rich_Web_VSldier_Add_ONT = jQuery('#Rich_Web_VSldier_Add_ONT_' + editNumber).val();

    jQuery('#Rich_Web_VSlider_HidUp').val(editNumber);
    jQuery('.Rich_Web_VSlider_Sav_Video').hide();
    jQuery('.Rich_Web_VSlider_Upd_Video').show();
    jQuery('#Rich_Web_VSlider_Video_Title').val(Rich_Web_VSlider_Vid_Title);
    tinymce.get('Rich_Web_VSlider_Desc').setContent(Rich_Web_VSlider_Add_Desc);
    jQuery('#Rich_Web_Vid_ImSrc_2').val(Rich_Web_VSldier_Add_Img);
    jQuery('#Rich_Web_Vid_Vid_1').val(Rich_Web_VSldier_Add_Vid);
    jQuery('#Rich_Web_Vid_Src_2').val(Rich_Web_VSldier_Add_Src);
    jQuery('#Rich_Web_VSlider_Link').val(Rich_Web_VSldier_Add_Link);
    if (Rich_Web_VSldier_Add_ONT == 'checked') {
        jQuery('#Rich_Web_VSlider_ONT').attr('checked', true);
    } else {
        jQuery('#Rich_Web_VSlider_ONT').attr('checked', false);
    }
}

function Rich_Web_VSlider_Delete_Video(removeNumber) {
    var RWSVRSV = removeNumber;
    jQuery('.Rich_Web_SliderVd_Fixed_Div').fadeIn();
    jQuery('.Rich_Web_SliderVd_Absolute_Div').fadeIn();

    jQuery('.Rich_Web_SliderVd_Relative_No').click(function() {
        jQuery('.Rich_Web_SliderVd_Fixed_Div').fadeOut();
        jQuery('.Rich_Web_SliderVd_Absolute_Div').fadeOut();
        RWSVRSV = null;
    })
    jQuery('.Rich_Web_SliderVd_Relative_Yes').click(function() {
        if (RWSVRSV != null) {
            jQuery('.Rich_Web_SliderVd_Fixed_Div').fadeOut();
            jQuery('.Rich_Web_SliderVd_Absolute_Div').fadeOut();

            jQuery('#Rich_Web_VSlider_tr_' + removeNumber).remove();
            jQuery('#Rich_Web_VSlider_Count').val(jQuery('#Rich_Web_VSlider_Count').val() - 1);
            jQuery('.Rich_Web_Save_VSlider_Table3 tr').each(function() {
                jQuery(this).attr('id', 'Rich_Web_VSlider_tr_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(1)').html(parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(1)').attr('name', 'Rich_Web_VSlider_NN_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(1)').attr('id', 'Rich_Web_VSlider_NN_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(2)').attr('id', 'Rich_Web_VSlider_Img_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(2) img').attr('id', 'Rich_Web_VSlider_Img_Src_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(2) img').attr('name', 'Rich_Web_VSlider_Img_Src_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(3)').attr('id', 'Rich_Web_VSlider_Vid_Title_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(3)').attr('name', 'Rich_Web_VSlider_Vid_Title_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(4)').attr('id', 'Rich_Web_VSlider_tdClone_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(4) i').attr('onclick', 'Rich_Web_VSlider_Clone_Video(' + parseInt(parseInt(jQuery(this).index()) + 1) + ')');
                jQuery(this).find('td:nth-child(5)').attr('id', 'Rich_Web_VSlider_tdEdit_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(5) i').attr('onclick', 'Rich_Web_VSlider_Edit_Video(' + parseInt(parseInt(jQuery(this).index()) + 1) + ')');
                jQuery(this).find('td:nth-child(6)').attr('id', 'Rich_Web_VSlider_tdDelete_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('td:nth-child(6) i').attr('onclick', 'Rich_Web_VSlider_Delete_Video(' + parseInt(parseInt(jQuery(this).index()) + 1) + ')');
                jQuery(this).find('.Rich_Web_VSlider_Add_Title').attr('id', 'Rich_Web_VSlider_Add_Title_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSlider_Add_Title').attr('name', 'Rich_Web_VSlider_Add_Title_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSlider_Add_Description').attr('id', 'Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSlider_Add_Description').attr('name', 'Rich_Web_VSlider_Add_Description_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Img').attr('id', 'Rich_Web_VSldier_Add_Img_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Img').attr('name', 'Rich_Web_VSldier_Add_Img_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Vid').attr('id', 'Rich_Web_VSldier_Add_Vid_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Vid').attr('name', 'Rich_Web_VSldier_Add_Vid_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Src').attr('id', 'Rich_Web_VSldier_Add_Src_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Src').attr('name', 'Rich_Web_VSldier_Add_Src_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Link').attr('id', 'Rich_Web_VSldier_Add_Link_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Link').attr('name', 'Rich_Web_VSldier_Add_Link_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_ONT').attr('id', 'Rich_Web_VSldier_Add_ONT_' + parseInt(parseInt(jQuery(this).index()) + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_ONT').attr('name', 'Rich_Web_VSldier_Add_ONT_' + parseInt(parseInt(jQuery(this).index()) + 1));
            })
        }
        RWSVRSV = null;
    })
}

function Rich_Web_VSlider_Sortable() {
    jQuery('.Rich_Web_Save_VSlider_Table3').sortable({
        update: function(event, ui) {
            jQuery(this).find('tr').each(function(i) {
                jQuery(this).attr('id', 'Rich_Web_VSlider_tr_' + (i + 1));
                jQuery(this).find('td:nth-child(1)').html((i + 1));
                jQuery(this).find('td:nth-child(1)').attr('name', 'Rich_Web_VSlider_NN_' + (i + 1));
                jQuery(this).find('td:nth-child(1)').attr('id', 'Rich_Web_VSlider_NN_' + (i + 1));
                jQuery(this).find('td:nth-child(2)').attr('id', 'Rich_Web_VSlider_Img_' + (i + 1));
                jQuery(this).find('td:nth-child(2) img').attr('id', 'Rich_Web_VSlider_Img_Src_' + (i + 1));
                jQuery(this).find('td:nth-child(2) img').attr('name', 'Rich_Web_VSlider_Img_Src_' + (i + 1));
                jQuery(this).find('td:nth-child(3)').attr('id', 'Rich_Web_VSlider_Vid_Title_' + (i + 1));
                jQuery(this).find('td:nth-child(3)').attr('name', 'Rich_Web_VSlider_Vid_Title_' + (i + 1));
                jQuery(this).find('td:nth-child(4)').attr('id', 'Rich_Web_VSlider_tdClone_' + (i + 1));
                jQuery(this).find('td:nth-child(4) i').attr('onclick', 'Rich_Web_VSlider_Clone_Video(' + (i + 1) + ')');
                jQuery(this).find('td:nth-child(5)').attr('id', 'Rich_Web_VSlider_tdEdit_' + (i + 1));
                jQuery(this).find('td:nth-child(5) i').attr('onclick', 'Rich_Web_VSlider_Edit_Video(' + (i + 1) + ')');
                jQuery(this).find('td:nth-child(6)').attr('id', 'Rich_Web_VSlider_tdDelete_' + (i + 1));
                jQuery(this).find('td:nth-child(6) i').attr('onclick', 'Rich_Web_VSlider_Delete_Video(' + (i + 1) + ')');
                jQuery(this).find('.Rich_Web_VSlider_Add_Title').attr('id', 'Rich_Web_VSlider_Add_Title_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSlider_Add_Title').attr('name', 'Rich_Web_VSlider_Add_Title_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSlider_Add_Description').attr('id', 'Rich_Web_VSlider_Add_Description_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSlider_Add_Description').attr('name', 'Rich_Web_VSlider_Add_Description_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Img').attr('id', 'Rich_Web_VSldier_Add_Img_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Img').attr('name', 'Rich_Web_VSldier_Add_Img_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Vid').attr('id', 'Rich_Web_VSldier_Add_Vid_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Vid').attr('name', 'Rich_Web_VSldier_Add_Vid_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Src').attr('id', 'Rich_Web_VSldier_Add_Src_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Src').attr('name', 'Rich_Web_VSldier_Add_Src_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Link').attr('id', 'Rich_Web_VSldier_Add_Link_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_Link').attr('name', 'Rich_Web_VSldier_Add_Link_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_ONT').attr('id', 'Rich_Web_VSldier_Add_ONT_' + (i + 1));
                jQuery(this).find('.Rich_Web_VSldier_Add_ONT').attr('name', 'Rich_Web_VSldier_Add_ONT_' + (i + 1));
            });
        }
    })
}

function Rich_Web_VS_Del(number) {
    var RWSVRS = number;
    jQuery('.Rich_Web_SliderVd_Fixed_Div').fadeIn();
    jQuery('.Rich_Web_SliderVd_Absolute_Div').fadeIn();

    jQuery('.Rich_Web_SliderVd_Relative_No').click(function() {
        jQuery('.Rich_Web_SliderVd_Fixed_Div').fadeOut();
        jQuery('.Rich_Web_SliderVd_Absolute_Div').fadeOut();
        RWSVRS = null;
    })
    jQuery('.Rich_Web_SliderVd_Relative_Yes').click(function() {
        if (RWSVRS != null) {
            jQuery('.Rich_Web_SliderVd_Fixed_Div').fadeOut();
            jQuery('.Rich_Web_SliderVd_Absolute_Div').fadeOut();
            var ajaxurl = object.ajaxurl;
            var data = {
                action: 'Rich_Web_VSlider_Del', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
                foobar: number, // translates into $_POST['foobar'] in PHP
            };
            jQuery.post(ajaxurl, data, function(response) {
                jQuery('#Rich_Web_VSlider_Table_Tr-' + number).remove();
                jQuery('.Rich_Web_VSlider_Tit_Table_Tr2').each(function(i) {
                    jQuery(this).find('td:nth-child(1)').html((i + 1));
                });
            })
        }
        RWSVRS = null;
    })
}

function Rich_Web_VS_Copy(number) {
    var ajaxurl = object.ajaxurl;
    var data = {
        action: 'Rich_Web_VSlider_Copy', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
        foobar: number, // translates into $_POST['foobar'] in PHP
    };
    jQuery.post(ajaxurl, data, function(response) {
        var responseCopied = jQuery.parseJSON(response);
        jQuery('.Rich_Web_VSlider_Tit_Table_Tr2').last().after('<tr class="Rich_Web_VSlider_Tit_Table_Tr2" id="Rich_Web_VSlider_Table_Tr-' + responseCopied.id + '"><td></td><td>' + responseCopied.Slider_Title + '</td><td>' + responseCopied.Slider_Type + '</td><td>' + responseCopied.Slider_Video_Quantity + '</td><td onclick="Rich_Web_VS_Copy(' + responseCopied.id + ')"><i class="Rich_Web_VS_Files rich_web rich_web-files-o"></i></td><td onclick="Rich_Web_VS_Edit(' + responseCopied.id + ')"><i class="Rich_Web_VS_Pencil rich_web rich_web-pencil"></i></td><td onclick="Rich_Web_VS_Del(' + responseCopied.id + ')"><i class="Rich_Web_VS_Delete rich_web rich_web-trash"></i></td></tr>');
        jQuery('.Rich_Web_VSlider_Tit_Table_Tr2').each(function(i) {
            jQuery(this).find('td:nth-child(1)').html((i + 1));
        });
        var rw_vs_short_id = +responseCopied.id + 1;
        jQuery('.Rich_Web_VSlider_Add').attr('onclick', 'RichWeb_Video_Slider_Add(' + rw_vs_short_id + ')');
    })
}

function Rich_Web_VS_Edit(number) {
    jQuery('.Table_Data_VS_Rich_Web1').css('display', 'none');
    jQuery('.RW_Support_btn').css('margin-right', 'auto');
    jQuery('.Rich_Web_VSlider_Add').addClass('Rich_Web_VSlider_AddAnim');
    jQuery('.Table_Data_VS_Rich_Web2').css('display', 'block');
    jQuery('.Rich_Web_VSlider_Upd').addClass('Rich_Web_VSlider_SavAnim');
    jQuery('.Rich_Web_VSlider_Can').addClass('Rich_Web_VSlider_CanAnim');
    jQuery('#Rich_Web_VSlider_Update_ID').val(number);
    jQuery('.Rich_Web_VSlider_ID').html('[Rich_Web_Video id="' + number + '"] <span class="RW_VS_C_TTip" >Copy to clipboard</span>');
    jQuery('.Rich_Web_VSlider_ID_1').html('&lt;?php echo do_shortcode(&apos;[Rich_Web_Video id="' + number + '"]&apos;);?&gt <span class="RW_VS_C_TTip" >Copy to clipboard</span');
    Rich_Web_Video_Slider_Editor();

    var ajaxurl = object.ajaxurl;
    var data = {
        action: 'Rich_Web_VSlider_Edit_Main', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
        foobar: number, // translates into $_POST['foobar'] in PHP
    };
    jQuery.post(ajaxurl, data, function(response) {
        var arr = Array();
        var spl = response.split('=>');
        for (var i = 3; i < spl.length; i++) { arr[arr.length] = spl[i].split('[')[0].trim(); }
        arr[arr.length - 1] = arr[arr.length - 1].split(')')[0].trim();
        jQuery('.Rich_Web_VSlider_Name').val(arr[0]);
        jQuery('.Rich_Web_VSlider_Type').val(arr[1]);
        jQuery('#Rich_Web_VSlider_Count').val(arr[2]);
    })

    var ajaxurl = object.ajaxurl;
    var data = {
        action: 'Rich_Web_VSlider_Edit_Videos', // wp_ajax_my_action / wp_ajax_nopriv_my_action in ajax.php. Can be named anything.
        foobar: number, // translates into $_POST['foobar'] in PHP
    };
    jQuery.post(ajaxurl, data, function(response) {
        var data = JSON.parse(response);
        for (i = 0; i < data.length; i++) {
            for (var key in data[i]) {
                var number = parseInt(key) + 1;
                jQuery('.Rich_Web_Save_VSlider_Table3').append('<tr id="Rich_Web_VSlider_tr_' + number + '"><td name="Rich_Web_VSlider_NN_' + number + '" id="Rich_Web_VSlider_NN_' + number + '" >' + number + '</td><td id="Rich_Web_VSlider_Img_' + number + '"><img src="' + data[i][key]['Rich_Web_VSldier_Add_Img'] + '" id="Rich_Web_VSlider_Img_Src_' + number + '" name="Rich_Web_VSlider_Img_Src_' + number + '" style="height:60px;"></td><td id="Rich_Web_VSlider_Vid_Title_' + number + '" name="Rich_Web_VSlider_Vid_Title_' + number + '">' + data[i][key]['Rich_Web_VSlider_Vid_Title'] + '</td><td id="Rich_Web_VSlider_tdClone_' + number + '"><i class="Rich_Web_VS_Files rich_web rich_web-files-o" onclick="Rich_Web_VSlider_Clone_Video(' + number + ')"></i></td><td id="Rich_Web_VSlider_tdEdit_' + number + '"><i class="Rich_Web_VS_Pencil rich_web rich_web-pencil" onclick="Rich_Web_VSlider_Edit_Video(' + number + ')"></i></td><td id="Rich_Web_VSlider_tdDelete_' + number + '"><i class="Rich_Web_VS_Delete rich_web rich_web-trash" onclick="Rich_Web_VSlider_Delete_Video(' + number + ')"></i><input type="text" style="display:none;" class="Rich_Web_VSlider_Add_Title" id="Rich_Web_VSlider_Add_Title_' + number + '" name="Rich_Web_VSlider_Add_Title_' + number + '" value="' + data[i][key]['Rich_Web_VSlider_Vid_Title'] + '" /><input type="text" style="display:none;" class="Rich_Web_VSlider_Add_Description" id="Rich_Web_VSlider_Add_Description_' + number + '" name="Rich_Web_VSlider_Add_Description_' + number + '" value=""/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Img" id="Rich_Web_VSldier_Add_Img_' + number + '" name="Rich_Web_VSldier_Add_Img_' + number + '" value="' + data[i][key]['Rich_Web_VSldier_Add_Img'] + '"/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Vid" id="Rich_Web_VSldier_Add_Vid_' + number + '" name="Rich_Web_VSldier_Add_Vid_' + number + '" value="' + data[i][key]['Rich_Web_VSldier_Add_Vid'] + '"/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Src" id="Rich_Web_VSldier_Add_Src_' + number + '" name="Rich_Web_VSldier_Add_Src_' + number + '" value="' + data[i][key]['Rich_Web_VSldier_Add_Src'] + '"/><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_Link" id="Rich_Web_VSldier_Add_Link_' + number + '" name="Rich_Web_VSldier_Add_Link_' + number + '" value="' + data[i][key]['Rich_Web_VSldier_Add_Link'] + '"><input type="text" style="display:none;" class="Rich_Web_VSldier_Add_ONT" id="Rich_Web_VSldier_Add_ONT_' + number + '" name="Rich_Web_VSldier_Add_ONT_' + number + '" value="' + data[i][key]['Rich_Web_VSldier_Add_ONT'] + '"/></td></tr>');

                jQuery('#Rich_Web_VSlider_Add_Description_' + number).val(data[i][key]['Rich_Web_VSlider_Add_Desc']);

            }
        }
    })
}

function Rich_Web_Video_Slider_Editor() {
    tinymce.init({
        selector: '#Rich_Web_VSlider_Desc',
        menubar: false,
        statusbar: false,
        height: 200,
        plugins: [
            'advlist autolink lists link image charmap print preview hr',
            'searchreplace wordcount code media ',
            'insertdatetime media save table contextmenu directionality',
            'paste textcolor colorpicker textpattern imagetools codesample'
        ],
        toolbar1: "newdocument | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | formatselect fontselect fontsizeselect",
        toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink image media code | insertdatetime preview | forecolor backcolor",
        toolbar3: "table | hr | subscript superscript | charmap | print | codesample ",
        fontsize_formats: '8px 10px 12px 14px 16px 18px 20px 22px 24px 26px 28px 30px 32px 34px 36px 38px 40px 42px 44px 46px 48px',
        font_formats: 'Abadi MT Condensed Light = abadi mt condensed light; Aharoni = aharoni; Aldhabi = aldhabi; Andalus = andalus; Angsana New = angsana new; AngsanaUPC = angsanaupc; Aparajita = aparajita; Arabic Typesetting = arabic typesetting; Arial = arial; Arial Black = arial black; Batang = batang; BatangChe = batangche; Browallia New = browallia new; BrowalliaUPC = browalliaupc; Calibri = calibri; Calibri Light = calibri light; Calisto MT = calisto mt; Cambria = cambria; Candara = candara; Century Gothic = century gothic; Comic Sans MS = comic sans ms; Consolas = consolas; Constantia = constantia; Copperplate Gothic = copperplate gothic; Copperplate Gothic Light = copperplate gothic light; Corbel = corbel; Cordia New = cordia new; CordiaUPC = cordiaupc; Courier New = courier new; DaunPenh = daunpenh; David = david; DFKai-SB = dfkai-sb; DilleniaUPC = dilleniaupc; DokChampa = dokchampa; Dotum = dotum; DotumChe = dotumche; Ebrima = ebrima; Estrangelo Edessa = estrangelo edessa; EucrosiaUPC = eucrosiaupc; Euphemia = euphemia; FangSong = fangsong; Franklin Gothic Medium = franklin gothic medium; FrankRuehl = frankruehl; FreesiaUPC = freesiaupc; Gabriola = gabriola; Gadugi = gadugi; Gautami = gautami; Georgia = georgia; Gisha = gisha; Gulim = gulim; GulimChe = gulimche; Gungsuh = gungsuh; GungsuhChe = gungsuhche; Impact = impact; IrisUPC = irisupc; Iskoola Pota = iskoola pota; JasmineUPC = jasmineupc; KaiTi = kaiti; Kalinga = kalinga; Kartika = kartika; Khmer UI = khmer ui; KodchiangUPC = kodchiangupc; Kokila = kokila; Lao UI = lao ui; Latha = latha; Leelawadee = leelawadee; Levenim MT = levenim mt; LilyUPC = lilyupc; Lucida Console = lucida console; Lucida Handwriting Italic = lucida handwriting italic; Lucida Sans Unicode = lucida sans unicode; Malgun Gothic = malgun gothic; Mangal = mangal; Manny ITC = manny itc; Marlett = marlett; Meiryo = meiryo; Meiryo UI = meiryo ui; Microsoft Himalaya = microsoft himalaya; Microsoft JhengHei = microsoft jhenghei; Microsoft JhengHei UI = microsoft jhenghei ui; Microsoft New Tai Lue = microsoft new tai lue; Microsoft PhagsPa = microsoft phagspa; Microsoft Sans Serif = microsoft sans serif; Microsoft Tai Le = microsoft tai le; Microsoft Uighur = microsoft uighur; Microsoft YaHei = microsoft yahei; Microsoft YaHei UI = microsoft yahei ui; Microsoft Yi Baiti = microsoft yi baiti; MingLiU_HKSCS = mingliu_hkscs; MingLiU_HKSCS-ExtB = mingliu_hkscs-extb; Miriam = miriam; Mongolian Baiti = mongolian baiti; MoolBoran = moolboran; MS UI Gothic = ms ui gothic; MV Boli = mv boli; Myanmar Text = myanmar text; Narkisim = narkisim; Nirmala UI = nirmala ui; News Gothic MT = news gothic mt; NSimSun = nsimsun; Nyala = nyala; Palatino Linotype = palatino linotype; Plantagenet Cherokee = plantagenet cherokee; Raavi = raavi; Rod = rod; Sakkal Majalla = sakkal majalla; Segoe Print = segoe print; Segoe Script = segoe script; Segoe UI Symbol = segoe ui symbol; Shonar Bangla = shonar bangla; Shruti = shruti; SimHei = simhei; SimKai = simkai; Simplified Arabic = simplified arabic; SimSun = simsun; SimSun-ExtB = simsun-extb; Sylfaen = sylfaen; Tahoma = tahoma; Times New Roman = times new roman; Traditional Arabic = traditional arabic; Trebuchet MS = trebuchet ms; Tunga = tunga; Utsaah = utsaah; Vani = vani; Vijaya = vijaya'
    });
}

function rw_vs_copy(elem) {
    var newInputElem = document.createElement("input");
    var rw_vs_c = jQuery(elem).attr('class');
    var CopiedText = jQuery('.' + rw_vs_c).text();
    CopiedText = CopiedText.replace('Copy to clipboard', '');
    CopiedText = CopiedText.replace('Copied to clipboard', '');
    CopiedText = CopiedText.replace("&lt;", "<");
    CopiedText = CopiedText.replace("&gt;", ">");
    CopiedText = CopiedText.replace("&#039;", "'");
    CopiedText = CopiedText.replace("&#039;", "'");
    newInputElem.setAttribute("value", CopiedText);
    document.body.appendChild(newInputElem);
    newInputElem.select();
    document.execCommand("copy");
    document.body.removeChild(newInputElem);
    jQuery('.' + rw_vs_c).children('span').text('Copied to clipboard');
}

function rw_vs_copied(clicked) {
    var rw_vs_c = jQuery(clicked).attr('class');
    jQuery('.' + rw_vs_c).children('span').text('Copy to clipboard');
}
jQuery(document).ready(function() { jQuery('.Rich_Web_VSlider_ID , .Rich_Web_VSlider_ID_1').bind('contextmenu', function() { return false; }); })
