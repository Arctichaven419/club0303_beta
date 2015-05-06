<?php
require '../../../var.php';
require '../../../varBlog.php';
if(isset($_COOKIE["___sm_log"])) {
    if($_COOKIE["___sm_log"] == "true") {
        $ap_admin = true;
    } else {
        $ap_admin = false;
    }
    $ap_tmp = explode(";", $_COOKIE["__sm_ap"]);
    $ap_usr = $ap_tmp[1];
} else {
    $ap_admin = false;
}
if($ap_admin == false) {
    header("Location: ../../../index.php");
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New Post | AdminPortal | Club0303</title>
<link rel="stylesheet" href="../../../c/sm.club0303.style.global.css">
<link rel="stylesheet" href="../../../c/sm.scribable.style.global.css">
<script src="../../../j/jquery.js"></script>
</head>

<body>
<div align="center">
<div style="width:100%; height:100vh;">
<div class="post_pageHeader">
<div class="Headbar" style="background-image:url(../m/as/scribable.background.01.png); background-position:center; background-repeat:no-repeat; background-size:cover;">
<div class="Headbar"></div>
</div>
</div>
<div style="width:100%; background:#000000;">
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td width="250"><div style="width:250px; height:40px; background:url(../../portal/m/ui/banner/logo-40.png); background-repeat:no-repeat;"></div></td>
            <td width="200"><?php echo $ap_usr; ?></td>
            <td width="2"></td>
            <td width="1"><div style="width:1px; height:40px; background:url(../../portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td>
            <td width="2"></td>
            <td style="width:100px;"><div class="sc_banner_nav_button sc_banner_nav_button_save"></div></td>
            <td>&nbsp;</td>
            <td style="width:100px;"><a href="../../../index.php"><div class="sc_banner_nav_button sc_banner_nav_button_home"></div></a></td>
            <td style="width:100px;"><div class="sc_banner_nav_button sc_banner_nav_button_profile"></div></td>
            <td width="2"></td>
            <td width="1"><div style="width:1px; height:40px; background:url(../../portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td>
            <td width="2"></td>
            <td style="width:100px;"><div class="sc_banner_nav_button sc_banner_nav_button_logout"></div></td>
        </tr>
    </tbody>
</table>
</div>



<div class="contentContainer">
<div style="height:30px;"></div>
<form action="" method="post">
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td colspan="4" style="background:#459109; padding-left:20px; font-size:48px;">new post</td>
            <td colspan="1" align="center" valign="middle" style="background:#459109; padding-left:20px; font-size:30px; font-family:daniel;">Scribable</td>
        </tr>
        <tr>
            <td colspan="6" style="height:5px;"></td>
        </tr>
        <tr>
            <td valign="top"></td>
            <td width="5px" rowspan="6"></td>
            <td width="2px" style="background:#FFFFFF;" rowspan="6"></td>
            <td width="5px" rowspan="6"></td>
            <td rowspan="2" width="300px" style="padding-left:5px" align="center" valign="middle">type: <select id="sc_form_type" class="sc_form_input_type"><option value="editorial">editorial</option><option value="video">video</option></select></td>
        </tr>
        <tr>
            <td style="padding-bottom:5px;"><input type="text" id="sc_form_headline" class="sc_form_input_text" placeholder="headline"></td>
        </tr>
        <tr>
            <td style="padding-bottom:5px;"><input type="text" id="sc_form_deck" class="sc_form_input_text-2" placeholder="deck"></td>
            <td id="sc_form_help_deck" style="background-color:#0193f9; padding:3px;">like a tweet; 140 characters or less.</td>
        </tr>
        <tr>
            <td style=""><textarea id="sc_form_body" class="sc_form_input_text-2 sc_form_input_body" placeholder="body"></textarea></td>
        </tr>
        <tr>
            <td class="sc_form_input_editorial" style="">
                
            
            <input type="file" id="sc_form_input_editorial_image" name=""></td>
            <td class="sc_form_input_video" style="">Video</td>
        </tr>
    </tbody>
</table>
</form>
</div>
</div>
</div>
<script>
$(document).ready(function(){
    $(".sc_form_input_video").hide();
    $("input").focusin(function() {
        $(document).prop('title', '** New Post | AdminPortal | Club0303');
    });
    $("#sc_form_help_deck").hide();
    
    $("#sc_form_deck").focusin(function() {
        $("#sc_form_help_deck").show();
    });
    $("#sc_form_deck").focusout(function() {
        $("#sc_form_help_deck").hide();
    });
    
    $("#sc_form_type").change(function(){
        $("#sc_form_type option:selected").each(function(){
            if($(this).attr("value")=="editorial"){
                $(".sc_form_input_video").hide();
                $(".sc_form_input_editorial").show();
            }
            if($(this).attr("value")=="video"){
                $(".sc_form_input_editorial").hide();
                $(".sc_form_input_video").show();
            }
        });
    }).change();
    //window.onbeforeunload = function() {
    //    return '';
    //}
});
</script>
</body>
</html>
