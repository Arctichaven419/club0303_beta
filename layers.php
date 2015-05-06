<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>v4.0.0.010 -- Layers Test</title>
<style>
body {
    margin:0px;
}
.one {
    width:300px;
    height:300px;
    background:blue;
    z-index:1;
    top:100px;
    left:100px;
    position:fixed;
}
.two {
    width:300px;
    height:300px;
    background: green;
    z-index:2;
    top:50px;
    left:50px;
    position:fixed;
}
.three {
    width:100vw;
    height:75px;
    background: red;
    z-index:3;
    position:fixed;
}
.four {
    width:300px;
    height:1000px;
    background:linear-gradient(pink, blue);
}
</style>
</head>

<body>
<div class="one"></div>
<div class="two"></div>
<div class="three"></div>
<div class="four"></div>
</body>
</html>