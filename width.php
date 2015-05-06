<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TEST ENVIRONMENT</title>
<script src="j/jquery.js"></script>
</head>

<body>
<script>
var screenWidth = $(window).width();
var spacerWidth = screenWidth / 2;

$(window).resize(function() {
    var screenWidth = $(window).width();
    var spacerWidth = screenWidth / 2;
});
</script>
<div id="display"><script>document.write(spacerWidth); $(window).resize(function() { document.write(spacerWidth) })</script></div>
</body>
</html>