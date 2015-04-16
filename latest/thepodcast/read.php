<?php
require '../var.php';
require '../varBlog.php';
if (isset($_GET["article"])) {
    $postid = $_GET["article"];
} else {
    header("Location: index.php");
}

$sqlReadPost = "SELECT * FROM suku_thepodcast_posts WHERE id='$postid'";
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
<title><?php echo $articleTitle ?> | ThePodcast</title>
<link rel="stylesheet" href="../c/sm.thepodcast.style.global.css">
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
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>
<?php
    if ($queryReadPost2->num_rows > 0) {
    while ($article = $queryReadPost2->fetch_assoc()) {
        echo '<tr><td colspan="2" style="font-size:40px; font-weight:bold;">' . $article["title"] . '</td><td rowspan="4" width="2px" style="background:#FFFFFF;"></td><td rowspan="5" width="400px" style="padding-left:3px;" valign="top"><div style="width:400px; height:200px; background-image:url(m/empty-sidebar.png); background-size:cover; background-repeat:no-repeat;"></div></td></tr>';
        echo '<tr><td>';
        echo '<div style="width:400px; height:400px; background-image:url(m/i/' . $article["image"] . '); background-size:cover;"></div>';
        echo '</td><td align="center" valign="middle"><audio controls><source src="' . $article["src"] .'" type="audio/mpeg"></audio></td></tr>';
        echo '<tr><td width="200px" style="font-size:18px; font-style:italic; border-bottom:2px solid #FFFFFF; padding-top:3px;">' . $article["hosts"] . '</td><td align="right" style="font-size:18px; padding-right:3px; padding-top:3px;">' . $article["pubDate"] . '</td></tr>';
        echo '<tr><td colspan="2" valign="top" style="padding-top:3px; padding-right:3px; font-size:18px;">' . $article["description"] . '</td></tr>';
    }
    } else {
        $body = 'URI%20=%20' .  $_SERVER['REQUEST_URI'] . '%20%20%20%20[PLEASE%20DESCRIBE%20WHAT%20HAPPENED]';
        echo 'AwSnap! Something went wrong with some code. Please contact <a href="mailto:webmaster@sorensenmedia.x10.bz?cc=mail@0303.club&Subject=ERROR%20REPORT%20AJDGGBQ1RW&body=' . $body . '">';
    }
?>
<tr>
<td colspan="2" width="890px" style="padding-top:15px;" valign="top" align="center"><div id="disqus_thread"></div>
<script type="text/javascript">
    /* * * CONFIGURATION VARIABLES * * */
    var disqus_shortname = 'club0303podcast';
    var disqus_identifier = 'thepodcast.<?php echo $postid; ?>';
    
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




<!-- <iframe width="1024" height="576" src="https://www.youtube-nocookie.com/embed/OVMuwa-HRCQ?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe> -->
</div>
</div>
</body>
</html>