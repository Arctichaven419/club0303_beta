<?php
require 'var.php'; require 'varBlog.php'; require 'sc-elements.php'; require 'sc-elements-index.php';
if(isset($_COOKIE["___sm_log"])) { if($_COOKIE["___sm_log"] == "true") { $ap_admin = true; } else { $ap_admin = false; } $ap_tmp = explode(";", $_COOKIE["__sm_ap"]); $ap_usr = $ap_tmp[1]; } else { $ap_admin = false; }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome | Club0303</title>
<?php blog_linkCSS_Layer0(); ?>
</head>

<body>
<div align="center">
<div style="width:100%; height:100vh;">
<?php blog_drawHeaderDefault(); if($ap_admin == true) { scribable_drawBarDefault_Layer0(); } ?>
<div class="contentContainer">
<div style="height:30px;"></div>
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td style="background:#00111b; padding:10px;"><?php blog_index_drawFeatured(); ?></td>
            <td width="5px" rowspan="4"></td>
            <td width="2px" style="background:#FFFFFF;" rowspan="4"></td>
            <td rowspan="4" width="300px" style="padding-left:5px" valign="top"><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/0303club/lists/club0303-members" data-widget-id="574094585921728514">Tweets from https://twitter.com/0303club/lists/club0303-members</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></td>
        </tr>
        <tr>
            <td style="font-family:sonsie; font-size:36px;">The Feed</td>
        </tr>
        <tr>
            <td valign="top"><?php blog_index_drawFeed(); ?></td>
        </tr>

    </tbody>
</table>
<?php blog_drawCopyright(); ?>
</div>
</div>
</div>
<?php blog_drawPoweredBy(); ?>
</body>
</html>