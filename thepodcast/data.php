<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>The Podcast by club0303</title>
</head>

<body>
<?php
    $xml = simplexml_load_file('http://0303.club/thepodcast/itunes/sm_club0303_pub_thePodcast.xml') or die("Error");
    echo $xml;
?>
</body>
</html>