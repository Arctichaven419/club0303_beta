<?php
require '../var.php'; require '../varBlog.php'; require '../sc-elements.php'; require '../sc-elements-blog_read.php';
if (isset($_GET["article"])) { $postid = $_GET["article"]; } else { header("Location: ../index.php"); }
if(isset($_COOKIE["___sm_log"])) { if($_COOKIE["___sm_log"] == "true") { $ap_admin = true; } else { $ap_admin = false; } $ap_tmp = explode(";", $_COOKIE["__sm_ap"]); $ap_usr = $ap_tmp[1]; } else { $ap_admin = false; }

club0303_blog_getPostID();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $articleTitle ?> | club0303</title>
<?php club0303_linkCSS_Layer1(); ?>
</head>

<body>
<div align="center" style="width:100vw; height:100vh;">
<?php club0303_drawHeaderLayer1(); if($ap_admin == true) { scribable_drawBarPost_layer1(); } ?>

<div class="contentContainer">
<div style="height:30px;"></div>
<table width="100%" border="0" cellspacing="0" cellpadding="0"><tbody>
<?php club0303_blog_drawEditorial() ?>
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

</div>
</div>
</body>
</html>