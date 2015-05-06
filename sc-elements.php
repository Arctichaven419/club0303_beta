<?php
//      SCRIBABLE ELEMENTS
//      VERSION 1.0

require('sc-variables.php');

function blog_drawHeaderDefault() {
    global $navButtonLink, $navButtonName;
    echo '<div class="pageHeader"><div class="Headbar"></div><table width="1300" border="0" cellspacing="0" cellpadding="0" style="border-top:#FFFFFF 2px solid;"><td>&nbsp;</td>';
    echo '<td width="200"><a href="' . $navButtonLink[0] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[0] . '</div></div></td>';
    echo '<td width="200"><a href="' . $navButtonLink[1] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[1] . '</div></div></td>';
    echo '<td width="200"><a href="' . $navButtonLink[2] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[2] . '</div></div></td>';
    echo '<td width="200"><a href="' . $navButtonLink[3] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[3] . '</div></div></td>';
    echo '<td width="200"><a href="' . $navButtonLink[4] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[4] . '</div></div></td>';
    echo '<td>&nbsp;</td></tr></tbody></table></div>';
}
function blog_drawHeaderLayer1() {
    global $navButtonLink, $navButtonName;
    echo '<div class="pageHeader"><div class="Headbar"></div><table width="1300" border="0" cellspacing="0" cellpadding="0" style="border-top:#FFFFFF 2px solid;"><td>&nbsp;</td>';
    echo '<td width="200"><a href="../' . $navButtonLink[0] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[0] . '</div></div></td>';
    echo '<td width="200"><a href="../' . $navButtonLink[1] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[1] . '</div></div></td>';
    echo '<td width="200"><a href="../' . $navButtonLink[2] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[2] . '</div></div></td>';
    echo '<td width="200"><a href="../' . $navButtonLink[3] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[3] . '</div></div></td>';
    echo '<td width="200"><a href="../' . $navButtonLink[4] . '" class="buttonLink"><div class="button"><div class="navButton" align="center">' . $navButtonName[4] . '</div></div></td>';
    echo '<td>&nbsp;</td></tr></tbody></table></div>';
}
function blog_linkCSS_Layer0() {
    global $fileCSS;
    echo '<link rel="stylesheet" href="c/' . $fileCSS[0] . '"><link rel="stylesheet" href="c/' . $fileCSS[1] . '">';
}
function blog_linkCSS_Layer1() {
    global $fileCSS;
    echo '<link rel="stylesheet" href="../c/' . $fileCSS[0] . '"><link rel="stylesheet" href="../c/' . $fileCSS[1] . '">';
}
function scribable_drawBarDefault_Layer0() {
    global $ap_usr;
    echo '<div style="width:100%; background:#000000;"><table width="1300" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
          <td width="250"><div style="width:250px; height:40px; background:url(sm-admin/portal/m/ui/banner/logo-40.png); background-repeat:no-repeat;"></div></td>
          <td width="200">' . $ap_usr . '</td><td width="2"></td>
          <td width="1"><div style="width:1px; height:40px; background:url(sm-admin/portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td><td width="2"></td>
          <td style="width:100px;"><a href="sm-admin/portal/post/new.php"><div class="ap_banner_nav_button ap_banner_nav_button_newPost"></div></a></td><td>&nbsp;</td>
          <td style="width:100px;"><div class="ap_banner_nav_button ap_banner_nav_button_profile"></div></td><td width="2"></td>
          <td width="1"><div style="width:1px; height:40px; background:url(sm-admin/portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td><td width="2"></td>
          <td style="width:100px;"><div class="ap_banner_nav_button ap_banner_nav_button_logout"></div></td></tr></tbody></table></div>';
}
function scribable_drawBarPost_layer1() {
    global $ap_usr;
    echo '<div style="width:100%; background:#000000;"><table width="1300" border="0" cellspacing="0" cellpadding="0"><tbody><tr>
          <td width="250"><div style="width:250px; height:40px; background:url(../sm-admin/portal/m/ui/banner/logo-40.png); background-repeat:no-repeat;"></div></td>
          <td width="200">' . $ap_usr . '</td><td width="2"></td>
          <td width="1"><div style="width:1px; height:40px; background:url(../sm-admin/portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td><td width="2"></td>
          <td style="width:100px;"><a href=""><div class="ap_banner_nav_button ap_banner_nav_button_editPost"></div></a></td>
          <td style="width:100px;"><a href="../sm-admin/portal/post/new.php"><div class="ap_banner_nav_button ap_banner_nav_button_newPost"></div></a></td><td>&nbsp;</td>
          <td style="width:100px;"><div class="ap_banner_nav_button ap_banner_nav_button_profile"></div></td><td width="2"></td>
          <td width="1"><div style="width:1px; height:40px; background:url(../sm-admin/portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td><td width="2"></td>
          <td style="width:100px;"><div class="ap_banner_nav_button ap_banner_nav_button_logout"></div></td></tr></tbody></table></div>';
}
function blog_drawPoweredBy() {
    global $textPoweredBy;
    echo '<div style="position:fixed; bottom:0px; right:0px; width:300px; height:30px; color:#cccccc"><table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody><tr><td align="right" style="padding-right:5px; -webkit-user-select:none; -moz-user-select:none; cursor:default; font-family:daniel;">' . $textPoweredBy . '</td></tr></tbody></table></div>';
}
function blog_drawCopyright() {
    echo '<br>club0303 &copy; 2015 sorensenmedia.<br><span style="font-size:10px;">Website proudly powered by Scribable, a sorensenmedia blog platform.</span>';
}
?>