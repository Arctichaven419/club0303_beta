<?php
//      SCRIBABLE ELEMENTS FOR '/INDEX.PHP'
//      VERSION 1.0

require('sc-variables.php');
function blog_index_drawFeatured() {
    global $queryRecentBlogPost;
    echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>';
    while ($latest = $queryRecentBlogPost->fetch_assoc()) {
        echo '<tr><td rowspan="3" width="550px" style="padding-right:10px;"><a href="blog/';
        if ($latest["post_type"] == "Video") {echo 'watch.php'; } else { echo 'read.php';}
        echo '?article=' . $latest["id"] . '"><div style="width:550px; height:247px; background-image:url(';
        if (!$latest["video_embed"] == "") { echo 'http://img.youtube.com/vi/' . $latest["video_embed"] . '/maxresdefault.jpg';} else { echo 'blog/m/t/' . $latest["image"]; }
        echo '); background-size:cover; background-repeat:no-repeat; background-position:center;"></div></a></td><td height="65px" style="font-size:30px;">' . $latest["title"] . '</td></tr>';
        echo '<tr><td height="27px" style="font-size:18px; font-style:italic; border-bottom:2px solid #FFFFFF;">' . $latest["author"] . '</td></tr>';
        echo '<tr><td valign="top">' . $latest["snipet"] . '</td></tr>';
    }
    echo '</tbody></table>';
}
function blog_index_drawFeed() {
    global $queryLatestBlogPosts;
    if ($queryLatestBlogPosts->num_rows > 0) {
        echo '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>';
        while ($article = $queryLatestBlogPosts->fetch_assoc()) {
            echo '<tr><td colspan="6" style="height:5px;"></td></tr><tr><td colspan="6" style="height:2px; background:#a5a5a5;"></td></tr><tr><td colspan="6" style="height:5px;"></td></tr>';
            echo '<tr><td rowspan="4" width="150px"><a href="blog/';
            if ($article["post_type"] == "Video") { echo 'watch.php';} else { echo 'read.php';}
            echo '?article=' . $article["id"] . '"><div style="width:150px; height:150px; background-image:url(';
            if (!$article["video_embed"] == "") { echo 'http://img.youtube.com/vi/' . $article["video_embed"] . '/maxresdefault.jpg';} else { echo 'blog/m/t/' . $article["image"]; }
            echo '); background-size:cover; background-repeat:no-repeat; background-position:center; border: 3px solid #FFFFFF;"></div></a></td><td rowspan="4" style="width:5px"></td></td>';
            echo '<tr><td colspan="4" style="font-size:48px; padding-left:2px;"><a href="blog/'; if ($article["post_type"] == "Video") { echo 'watch.php';} else { echo 'read.php';} echo '?article=' . $article["id"] . '" class="listingArcticleTitle">' . $article["title"] . '</a></td></tr>';
            echo '<tr><td align="center" style="width:80px; background:#0081b2;">' . $article["post_type"] . '</td><td width="200px" height="27px" style="font-size:18px; font-style:italic; padding-left:5px;">' . $article["author"] . '</td><td align="right" style="font-size:18px;">Posted on ' . $article["date"] . '</td></tr>';
            echo '<tr><td colspan="4" height="100%" valign="top" style="padding-left:2px;">' . $article["snipet"] . '</td></tr>';
            echo '<tr><td></td><td><!-- I kept this row here for future use. --></td></tr>';
            
        }
        echo '</tbody></table>';
    } else {
        echo 'There are no posts.';
    }
}
?>