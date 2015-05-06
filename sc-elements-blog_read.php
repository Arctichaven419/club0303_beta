<?php
//      SCRIBABLE ELEMENTS FOR '/BLOG/READ.PHP'
//      VERSION 1.0

function club0303_blog_getPostID() {
    global $sqlReadPost, $queryReadPost, $queryReadPost2, $postid, $conn, $articleTitle;
    $sqlReadPost = "SELECT * FROM suku_blog_posts WHERE id='$postid'";
    $queryReadPost = $conn->query($sqlReadPost);
    $queryReadPost2 = $conn->query($sqlReadPost);
    while ($getTitle = $queryReadPost->fetch_assoc()) {
        $articleTitle = $getTitle["title"];
    }
}
function club0303_blog_drawEditorial() {
    global $queryReadPost2;
    if ($queryReadPost2->num_rows > 0) {
    while ($article = $queryReadPost2->fetch_assoc()) {
        echo '<tr><td colspan="2" style="font-size:40px; font-weight:bold;">' . $article["title"] . '</td><td rowspan="4" width="2px" style="background:#FFFFFF;"></td><td rowspan="5" width="400px" style="padding-left:3px;" valign="top"><div style="width:400px; height:200px; background-image:url(m/empty-sidebar.png); background-size:cover; background-repeat:no-repeat;"></div></td></tr>';
        echo '<tr><td colspan="2">';
        if (!$article["video_embed"] == "") { 
            echo '<iframe width="890" height="400" src="https://www.youtube-nocookie.com/embed/'  . $article["video_embed"] . '?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>';} else { echo '<div style="width:890px; height:400px; background-image:url(m/t/' . $article["image"] . '); background-size:cover;"></div>';
        }
        echo '</td></tr>';
        echo '<tr><td width="200px" style="font-size:18px; font-style:italic; border-bottom:2px solid #FFFFFF; padding-top:3px;">' . $article["author"] . '</td><td align="right" style="font-size:18px; padding-right:3px; padding-top:3px;">' . $article["date"] . '</td></tr>';
        echo '<tr><td colspan="2" valign="top" style="padding-top:3px; padding-right:3px; font-size:18px;">' . $article["body"] . '</td></tr>';
    }
    } else {
        $body = 'URI%20=%20' .  $_SERVER['REQUEST_URI'] . '%20%20%20%20[PLEASE%20DESCRIBE%20WHAT%20HAPPENED]';
        echo 'AwSnap! Something went wrong with some code. Please contact <a href="mailto:webmaster@sorensenmedia.x10.bz?cc=mail@0303.club&Subject=ERROR%20REPORT%20AJDGGBQ1RW&body=' . $body . '">webmaster@sorensenmedia.x10.bz</a>';
    }
}
?>