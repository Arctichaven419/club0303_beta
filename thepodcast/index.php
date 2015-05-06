<?php
require '../var.php';
require '../varBlog.php';
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome | ThePodcast</title>
<link rel="stylesheet" href="../c/sm.thepodcast.style.global.css">
</head>

<body>
<div align="center">
<div style="width:100%; height:100vh;">
<div class="pageHeader">
<div class="Headbar">
</div>
<table width="1300" border="0" cellspacing="0" cellpadding="0" style="border-top:#0193f9 2px solid;">
    <tbody>
        <tr>
            <td>&nbsp;</td>
            <td width="200"><a href="index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Home</div></div></td>
            <td width="200"><a href="../video/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Episodes</div></div></td>
            <td width="200"><a href="" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">iTunes</div></div></td>
            <td width="200"><a href="../stream/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Live</div></div></td>
            <td width="200"><a href="../index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">club0303</div></div></td>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
</div>


<div class="contentContainer">
<div style="height:30px;"></div>
<table width="1300" border="0" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td height="100px" style="background:#00111b;">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                        <tr>
                            <td align="center" style="font-family:sonsie; font-size:36px;">Season 1 | ThePodcast</td>
                        </tr>
                    </tbody>
                </table>
            </td>
            <td width="5px" rowspan="3"></td>
            <td width="2px" style="background:#FFFFFF;" rowspan="3"></td>
            <td rowspan="3" width="300px" style="padding-left:5px" valign="top"><a class="twitter-timeline" data-dnt="true" href="https://twitter.com/club0303podcast" data-widget-id="576613610333609985">Tweets by @club0303podcast</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></td>
        </tr>
        <tr>
            <td valign="top">
                
                <?php
                if ($queryLatestThePodcastPosts->num_rows > 0) {
                    echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>';
                    while ($article = $queryLatestThePodcastPosts->fetch_assoc()) {
                        echo '<tr><td colspan="4" style="font-size:40px; font-weight:bold; padding-left:2px;">' . $article["title"] . '</td></tr>';
                        echo '<tr><td rowspan="3" width="150px"><a href="read.php?article=' . $article["id"] . '"><div style="width:150px; height:150px; background-image:url(m/i/' . $article["image"] .'); background-size:cover; background-repeat:no-repeat; background-position:center; border: 3px solid #FFFFFF;"></div></a></td><td rowspan="3" style="width:5px"></td><td width="200px" height="27px" style="font-size:18px; font-style:italic; border-bottom:2px solid #FFFFFF; padding-left:2px;">' . $article["hosts"] . '</td><td align="right" style="font-size:18px;">' . $article["pubDate"] . '</td></tr>';
                        echo '<tr><td colspan="2" valign="top" style="padding-left:2px;">' . $article["deck"] . '</td></tr>';
                        echo '<tr><td>&nbsp;</td><td>&nbsp;<!-- I kept this row here for future use. --></td></tr>';
                        echo '<tr><td colspan="4" style="height:5px;"></td></tr><tr><td colspan="4" style="height:2px; background:#a5a5a5;"></td></tr><tr><td colspan="4" style="height:5px;"></td></tr>';
                    }
                    echo '</tbody></table>';
                } else {
                    echo '<span style="font-size:32px;">:(</span><br>There are no posts.';
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
