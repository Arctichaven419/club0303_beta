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
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>New Post | AdminPortal | Club0303</title>
<link rel="stylesheet" href="../../../c/sm.club0303.style.global.css">
<link rel="stylesheet" href="../../../c/sm.ap.style.global.css">
<script src="../../../j/jquery.js"></script>
</head>

<body>
<div align="center">
<div style="width:100%; height:100vh;">
<div class="post_pageHeader">
<div class="Headbar" style="background-image:url(../../../m/ui/gl/banner-admin.png); background-position:center; background-repeat:no-repeat;">
</div>
</div>
<?php if($ap_admin == true) {
    echo '
<div style="width:100%; background:#000000;">
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td width="250"><div style="width:250px; height:40px; background:url(../../portal/m/ui/banner/logo-40.png); background-repeat:no-repeat;"></div></td>
            <td width="200">' . $ap_usr . '</td>
            <td width="2"></td>
            <td width="1"><div style="width:1px; height:40px; background:url(../../portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td>
            <td width="2"></td>
            <td style="width:100px;"><div class="ap_banner_nav_button ap_banner_nav_button_save"></div></td>
            <td>&nbsp;</td>
            <td style="width:100px;"><a href="../../../index.php"><div class="ap_banner_nav_button ap_banner_nav_button_home"></div></a></td>
            <td style="width:100px;"><div class="ap_banner_nav_button ap_banner_nav_button_profile"></div></td>
            <td width="2"></td>
            <td width="1"><div style="width:1px; height:40px; background:url(../../portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td>
            <td width="2"></td>
            <td style="width:100px;"><div class="ap_banner_nav_button ap_banner_nav_button_logout"></div></td>
        </tr>
    </tbody>
</table>
</div>';
}
?>


<div class="contentContainer">
<div style="height:30px;"></div>
<form action="" method="post">
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td colspan="5" style="background:#459109; padding-left:20px; font-size:48px;">new post</td>
        </tr>
        <tr>
            <td colspan="5" style="height:5px;"></td>
        </tr>
        <tr>
            <td valign="top"></td>
            <td width="5px" rowspan="5"></td>
            <td width="2px" style="background:#FFFFFF;" rowspan="5"></td>
            <td width="5px" rowspan="5"></td>
            <td rowspan="2" width="300px" style="padding-left:5px" align="center" valign="middle">type: <select id="ap_form_type" class="ap_form_input_type"><option value="vditorial">editorial</option><option value="video">video</option></select></td>
        </tr>
        <tr>
            <td style="padding-bottom:5px;"><input type="text" id="ap_form_headline" class="ap_form_input_text" placeholder="headline"></td>
        </tr>
        <tr>
            <td style="padding-bottom:5px;"><input type="text" id="ap_form_deck" class="ap_form_input_text-2" placeholder="deck"></td>
            <td id="ap_form_help_deck" style="background-color:#0193f9; padding:3px;">like a tweet; 140 characters or less.</td>
        </tr>
        <tr>
            <td style=""><textarea id="ap_form_body" class="ap_form_input_text-2 ap_form_input_body" placeholder="body"></textarea></td>
        </tr>
    </tbody>
</table>
</form>
</div>
</div>
</div>
<script>
$("input").focusin(function() {
    $(document).prop('title', '** New Post | AdminPortal | Club0303');
});
$("#ap_form_help_deck").hide();

$("#ap_form_deck").focusin(function() {
    $("#ap_form_help_deck").show();
});
$("#ap_form_deck").focusout(function() {
    $("#ap_form_help_deck").hide();
});
</script>
</body>
</html>
