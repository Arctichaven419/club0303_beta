<?php
require '../var.php';
require '../varBlog.php';
if (isset($_GET["article"])) {
    $postid = $_GET["article"];
} else {
    header("Location: ../index.php");
}

$sqlReadPost = "SELECT * FROM suku_blog_posts WHERE id='$postid'";
$queryReadPost = $conn->query($sqlReadPost);
$queryReadPost2 = $conn->query($sqlReadPost);
while ($getTitle = $queryReadPost->fetch_assoc()) {
    $articleTitle = $getTitle["title"];
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $articleTitle ?> | club0303</title>
<link rel="stylesheet" href="../c/sm.club0303.style.global.css">
<!-- LOAD OSM PLAYER ASSETS -->
<script src="../j/jquery.js"></script>
<link rel="stylesheet" href="../videojs/video-js.css">
<link rel="stylesheet" href="../videojs/videojs.watermark.css">
<script src="../videojs/video.js"></script>
<script src="../videojs/videojs.watermark.js"></script>
<script src="../videojs/videojs.youtube.js"></script>
<script>
    videojs.options.flash.swf = "../videojs/video-js.swf"
</script>
</head>

<body>
<div align="center" style="width:100vw; height:100vh;">
<div class="pageHeader">
<div class="Headbar">
</div>
<table width="1300" border="0" cellspacing="0" cellpadding="0" style="border-top:#FFFFFF 2px solid;">
    <tbody>
        <tr>
            <td>&nbsp;</td>
            <td width="200"><a href="../index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Home</div></div></td>
            <td width="200"><a href="../video/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Videos</div></div></td>
            <td width="200"><a href="" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Forum</div></div></td>
            <td width="200"><a href="../stream/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">Live</div></div></td>
            <td width="200"><a href="../thepodcast/index.php" class="buttonLink"><div class="button"><div style="display:table-cell; vertical-align:middle; font-size:24px;" align="center">The Podcast</div></div></td>
            <td>&nbsp;</td>
        </tr>
    </tbody>
</table>
</div>

<div class="contentContainer">
<div style="height:30px;"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>
<?php
    if ($queryReadPost2->num_rows > 0) {
    while ($article = $queryReadPost2->fetch_assoc()) {
        echo '<tr><td colspan="2" style="font-size:40px; font-weight:bold;">' . $article["title"] . '</td><td rowspan="4" width="2px" style="background:#FFFFFF;"></td><td rowspan="5" width="400px" style="padding-left:3px;" valign="top"><div style="width:400px; height:200px; background-image:url(m/empty-sidebar.png); background-size:cover; background-repeat:no-repeat;"></div></td></tr>';
        echo '<tr><td colspan="2">';
            echo '<video id="video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="890" height="400"';
            if($article["video_src"] == "amzn") {
                echo "data-setup='{}'";
                echo'><source src="http://sorensenmedia.s3.amazonaws.com/hosted/club0303/' . $article["video_amzn_embed"] . '.mp4" type="video/mp4"></video>';
            } elseif($article["video_src"] == "yt") {
                echo "data-setup='{";
                echo '"techOrder": ["youtube"], "src": "http://www.youtube.com/watch?v=' . $article["video_embed"] . '"';
                echo "}'";
                echo' source src="" ></video>';
                }
            echo '</td></tr>';
        echo '<tr><td width="200px" style="font-size:18px; font-style:italic; border-bottom:2px solid #FFFFFF; padding-top:3px;">' . $article["author"] . '</td><td align="right" style="font-size:18px; padding-right:3px; padding-top:3px;">' . $article["date"] . '</td></tr>';
        echo '<tr><td colspan="2" valign="top" style="padding-top:3px; padding-right:3px; font-size:18px;">' . $article["body"] . '</td></tr>';
    }
    } else {
        $body = 'URI%20=%20' .  $_SERVER['REQUEST_URI'] . '%20%20%20%20[PLEASE%20DESCRIBE%20WHAT%20HAPPENED]';
        echo 'AwSnap! Something went wrong with some code. Please contact <a href="mailto:webmaster@sorensenmedia.x10.bz?cc=mail@0303.club&Subject=ERROR%20REPORT%20AJDGGBQ1RW&body=' . $body . '">webmaster@sorensenmedia.x10.bz</a>';
    }
?>
<tr>
<td colspan="2" width="890px" style="padding-top:15px;" valign="top" align="center"><div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'club0303';
    var disqus_identifier = '<?php echo $postid; ?>';
    
    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript></td>
<td></td>
</tr>

</tbody></table>
<script>
var my_video_id = videojs('video');
// Set value to the plugin
my_video_id.watermark({
  file: 'm/v/watermark.png',
  //file: 'http://www.videojs.com/img/logo.png',
  xpos: 100,
  ypos: 0,
  xrepeat: 0,
  opacity: 1.0
  });
</script>




<!-- <iframe width="1024" height="576" src="https://www.youtube-nocookie.com/embed/OVMuwa-HRCQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
</div>
</div>
</body>
</html>