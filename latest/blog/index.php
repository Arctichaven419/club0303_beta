<?php
require '../var.php';
require '../varBlog.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Blog | Club0303</title>
<style>
body {
    margin:0px;
    background:#005789;
    color:#FFFFFF;
    font-family:bpreplay;
}
::-webkit-scrollbar {
    width:7px;
}
::-webkit-scrollbar-thumb {
    background: #FFFFFF;
}
@font-face {
    font-family: 'furore';
    src: url('../m/f/furore-webfont.eot');
    src: url('../m/f/furore-webfont.eot?#iefix') format('embedded-opentype'),
url('../m/f/furore-webfont.woff2') format('woff2'),
url('../m/f/furore-webfont.woff') format('woff'),
url('../m/f/furore-webfont.ttf') format('truetype'),
url('../m/f/furore-webfont.svg#furoreregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'bpreplay';
    src: url('../m/f/bpreplay.eot');
    src: url('../m/f/bpreplay.eot?#iefix') format('embedded-opentype'),
url('../m/f/bpreplay.woff2') format('woff2'),
url('../m/f/bpreplay.woff') format('woff'),
url('../m/f/bpreplay.ttf') format('truetype'),
url('../m/f/bpreplay.svg#bpreplayregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'sonsie';
    src: url('../m/f/sonsieone.eot');
    src: url('../m/f/sonsieone.eot?#iefix') format('embedded-opentype'),
url('../m/f/sonsieone.woff2') format('woff2'),
url('../m/f/sonsieone.woff') format('woff'),
url('../m/f/sonsieone.ttf') format('truetype'),
url('../m/f/sonsieone.svg#sonsie_oneregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
.navBar {
    z-index:10;
    width:100vw;
    top:20px;
    position:fixed;
}
.navOptions01 {
    width:1308px;
    height:0px;
    /* background:linear-gradient(#252525, #252525, #252525, #4D4D4D); */
    /*background: blue;*/
    position: static;
    z-index:12;
}
.navOptions02 {
    width:1308px;
    height:0px;
    /* background:linear-gradient(#252525, #252525, #25E04B); */
    /*background: green;*/
    display:table;
    z-index:12;
}
.navButton {
    font-family:sonsie;
    font-size:20px;
    cursor:pointer;
    -moz-user-select:none;
    -webkit-user-select:none;
    user-select:none;
}
.navMenu {
    background: linear-gradient(to left, #264f05, #232323, #232323);
    border-left:solid #ffffff 2px;
    border-bottom:solid #ffffff 2px;
    padding-right: 20px;
}
.navSocial {
    background: linear-gradient(to right, #264f05, #232323, #232323);
    border-right:solid #ffffff 2px;
    border-bottom:solid #ffffff 2px;
    padding-left: 20px;
}
.mainName {
    background: linear-gradient(#252525, #0d578b);
    border-left:solid #ffffff 2px;
    border-bottom:solid #ffffff 2px;
    border-right:solid #ffffff 2px;
    font-family:bpreplay;
    font-size:46px;
    cursor:default;
    -moz-user-select:none;
    -webkit-user-select:none;
    user-select:none;
}
.contentContainer {
    width:1300px;
    z-index:1;
}
.Headbar {
    width:100%;
    height:150px;
    background-image:url(../m/ui/gl/banner-pa.png);
    background-position:center;
    background-repeat:no-repeat;
}
.articleLink:link {
    color:#459109;
    text-decoration:none;
}
.articleLink:visited {
    color:#459109;
    text-decoration:none;
}
.articleLink:hover {
    color:#000000;
    text-decoration:none;
}
.button {
    width:200px;
    height:50px;
    display:table;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
    cursor:pointer;
}
.button:hover {
    background-image:url(../m/ui/n/option.hover.v01.png);
    background-size:cover;
}
.buttonLink {
    text-decoration:none;
    color:#FFFFFF;
}
</style>
<script src="../j/jquery.js"></script>
<script src="../j/sm.tmg.nav.01.js"></script>
</head>

<body>
<div align="center">
<div style="width:100%; height:100vh;">
<div class="Headbar">
</div>


<div class="contentContainer">
<table width="1300" border="0" cellspacing="0" cellpadding="0" style="border-bottom:#FFFFFF 2px solid;">
    <tbody>
        <tr>
            <td>&nbsp;</td>
            <td width="200"><a href="../index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Home</div></div></td>
            <td width="200"><a href="index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Blog</div></div></td>
            <td width="200"><a href="../index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Videos</div></div></td>
            <td width="200"><a href="../index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Forum</div></div></td>
            <td width="200"><a href="../index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Live</div></div></td>
            <td width="200"><a href="../thepodcast/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">The Podcast</div></div></td>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
<div style="height:30px;"></div>
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td valign="top">
                
                <?php
                if ($queryLatestBlogPosts->num_rows > 0) {
                    echo '<table width="100%" border="0" cellspacing="0" cellpadding="2"><tbody>';
                    while ($article = $queryLatestBlogPosts->fetch_assoc()) {
                        echo '<tr><td colspan="3" style="font-size:40px; font-weight:bold;">' . $article["title"];
                        if ($article["post_type"] == "Video") {
                            echo '<img src="m/b/post_badge-video.png" width="60" height="25" alt=""/>';
                        } elseif ($article["post_type"] == "Editorial") {
                            echo '<img src="m/b/post_badge-editorial.png" width="80" height="25" alt=""/>';
                        } elseif ($article["post_type"] == "Tutorial") {
                            echo '<img src="m/b/post_badge-tutorial.png" width="70" height="25" alt=""/>';
                        }
                        echo '</td></tr>';
                        echo '<tr><td rowspan="3" width="150px"><a href="read.php?article=' . $article["id"] . '"><div style="width:150px; height:150px; background-image:url(';
                        if (!$article["video_embed"] == "") { echo 'http://img.youtube.com/vi/' . $article["video_embed"] . '/maxresdefault.jpg';} else { echo 'm/t/' . $article["image"]; }
                        echo '); background-size:cover; background-repeat:no-repeat; background-position:center; border: 3px solid #FFFFFF;"></div></a></td><td width="200px" height="27px" style="font-size:18px; font-style:italic; border-bottom:2px solid #FFFFFF;">' . $article["author"] . '</td><td align="right" style="font-size:18px;">' . $article["date"] . '</td></tr>';
                        echo '<tr><td colspan="2" valign="top">' . $article["snipet"] . '</td></tr>';
                        echo '<tr><td>&nbsp;</td><td>&nbsp;<!-- I kept this row here for future use. --></td></tr>';
                    }
                    echo '</tbody></table>';
                } else {
                    echo 'There are no posts.';
                }
                
                
                
                
                  ?>
               <!--  <table width="100%" border="0" cellspacing="0" cellpadding="2"><tbody>
                <tr><td colspan="3" style="font-size:40px; font-weight:bold;">Welcome to club0303</td></tr>
                <tr><td rowspan="3"><div style="width:150px; height:150px; background-image:url(m/b/000000-default.png); background-size:cover; background-repeat:no-repeat;"></div></td><td width="200px" style="font-size:18px; font-style:italic; border-bottom:2px solid #FFFFFF;">Shane Sorensen</td><td align="right" style="font-size:18px;">28-02-2015</td></tr>
                <tr><td colspan="2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt egestas tempor. Integer nulla mi, rutrum eu elit id, blandit pretium nulla. Nullam nec lacus semper, ornare nisl bibendum, aliquet sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin purus turpis, pulvinar vel mi et, dictum posuere mi. Donec quis sem vehicula, vulputate tortor sed, volutpat nibh. Nulla mollis urna ut risus placerat, dictum iaculis tortor rhoncus. Sed lobortis nunc ac dolor pellentesque, in faucibus nulla consectetur.</td></tr>
                <tr><td>&nbsp;</td><td align="right" style="font-style:italic;"><a href="read.php?article=000001" class="articleLink">Read more</a></td></tr>
                </tbody></table> -->
            </td>
            <td width="2px" style="background:#FFFFFF;" rowspan="2"></td>
            <td rowspan="2" width="300px" style="padding-left:5px" valign="top"><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/0303club" data-widget-id="571796988933701632">Tweets by @0303club</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></td>
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
