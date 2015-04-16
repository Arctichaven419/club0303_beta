<?php
require 'var.php';
require 'varBlog.php';
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
<title>Welcome | Club0303</title>
<link rel="stylesheet" href="c/sm.club0303.style.global.css">
<link rel="stylesheet" href="c/sm.ap.style.global.css">
</head>

<body>
<div align="center">
<div style="width:100%; height:100vh;">
<div class="pageHeader">
<div class="Headbar">
</div>
<table width="1300" border="0" cellspacing="0" cellpadding="0" style="border-top:#FFFFFF 2px solid;">
    <tbody>
        <tr>
            <td>&nbsp;</td>
            <td width="200"><a href="index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Home</div></div></td>
            <td width="200"><a href="video/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Videos</div></div></td>
            <td width="200"><a href="" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Forum</div></div></td>
            <td width="200"><a href="stream/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Live</div></div></td>
            <td width="200"><a href="thepodcast/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">The Podcast</div></div></td>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
</div>
<?php if($ap_admin == true) {
    echo '
<div style="width:100%; background:#000000;">
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td width="250"><div style="width:250px; height:40px; background:url(sm-admin/portal/m/ui/banner/logo-40.png); background-repeat:no-repeat;"></div></td>
            <td width="200">' . $ap_usr . '</td>
            <td width="2"></td>
            <td width="1"><div style="width:1px; height:40px; background:url(sm-admin/portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td>
            <td width="2"></td>
            <td style="width:100px;"><a href="sm-admin/portal/post/new.php"><div class="ap_banner_nav_button ap_banner_nav_button_newPost"></div></a></td>
            <td>&nbsp;</td>
            <td style="width:100px;"><div class="ap_banner_nav_button ap_banner_nav_button_profile"></div></td>
            <td width="2"></td>
            <td width="1"><div style="width:1px; height:40px; background:url(sm-admin/portal/m/ui/banner/divide.png); background-repeat:no-repeat;"></div></td>
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
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td style="background:#00111b; padding:10px;">
                <?php 
                    echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>';
                    while ($latest = $queryRecentBlogPost->fetch_assoc()) {
                        echo '<tr><td rowspan="3" width="550px" style="padding-right:10px;"><a href="blog/';
                        if ($latest["post_type"] == "Video") {echo 'watch.php'; } else { echo 'read.php';}
                        echo '?article=' . $latest["id"] . '"><div style="width:550px; height:247px; background-image:url(';
                        if (!$latest["video_embed"] == "") {
                            echo 'http://img.youtube.com/vi/' . $latest["video_embed"] . '/maxresdefault.jpg';} else { echo 'blog/m/t/' . $latest["image"]; }
                        echo '); background-size:cover; background-repeat:no-repeat; background-position:center;"></div></a></td><td height="65px" style="font-size:30px;">' . $latest["title"] . '</td></tr>';
                        echo '<tr><td height="27px" style="font-size:18px; font-style:italic; border-bottom:2px solid #FFFFFF;">' . $latest["author"] . '</td></tr>';
                        echo '<tr><td valign="top">' . $latest["snipet"] . '</td></tr>';
                    }
                    echo '</tbody></table>';
            ?>
            </td>
            <td width="5px" rowspan="3"></td>
            <td width="2px" style="background:#FFFFFF;" rowspan="3"></td>
            <td rowspan="3" width="300px" style="padding-left:5px" valign="top"><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/0303club/lists/club0303-members" data-widget-id="574094585921728514">Tweets from https://twitter.com/0303club/lists/club0303-members</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></td>
        </tr>
        <tr>
            <td valign="top">
                
                <?php
                if ($queryLatestBlogPosts->num_rows > 0) {
                    echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>';
                    while ($article = $queryLatestBlogPosts->fetch_assoc()) {
                        echo '<tr><td rowspan="4" width="150px"><a href="blog/';
                        if ($article["post_type"] == "Video") { echo 'watch.php';} else { echo 'read.php';}
                        echo '?article=' . $article["id"] . '"><div style="width:150px; height:150px; background-image:url(';
                        if (!$article["video_embed"] == "") { echo 'http://img.youtube.com/vi/' . $article["video_embed"] . '/maxresdefault.jpg';} else { echo 'blog/m/t/' . $article["image"]; }
                        echo '); background-size:cover; background-repeat:no-repeat; background-position:center; border: 3px solid #FFFFFF;"></div></a></td><td rowspan="4" style="width:5px"></td></td>';
                        
                        echo '<tr><td colspan="4" style="font-size:48px; padding-left:2px;"><a href="blog/'; if ($article["post_type"] == "Video") { echo 'watch.php';} else { echo 'read.php';} echo '?article=' . $article["id"] . '" class="listingArcticleTitle">' . $article["title"] . '</a></td></tr>';
                        echo '<tr><td align="center" style="width:80px; background:#0081b2;">' . $article["post_type"] . '</td><td width="200px" height="27px" style="font-size:18px; font-style:italic; padding-left:5px;">' . $article["author"] . '</td><td align="right" style="font-size:18px;">Posted on ' . $article["date"] . '</td></tr>';
                        echo '<tr><td colspan="4" height="100%" valign="top" style="padding-left:2px;">' . $article["snipet"] . '</td></tr>';
                        echo '<tr><td></td><td><!-- I kept this row here for future use. --></td></tr>';
                        echo '<tr><td colspan="6" style="height:5px;"></td></tr><tr><td colspan="6" style="height:2px; background:#a5a5a5;"></td></tr><tr><td colspan="6" style="height:5px;"></td></tr>';
                    }
                    echo '</tbody></table>';
                } else {
                    echo 'There are no posts.';
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
</div>
</div>
</div>
</body>
</html>
