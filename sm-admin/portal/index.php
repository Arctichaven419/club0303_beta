<?php
$ctf = date('d-m-Y \a\t i:H');
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="refresh" content="5;../../index.php">
<title>club0303 Admin Portal | sorensenmedia</title>
<style>
body {
    margin:0px;
    font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
}
</style>
</head>

<body>
<?php
if(isset($_GET["debug"])) {
    if ($_GET["debug"] == "true") {
        echo '<div style="z-index:2; background:#000000; color:#fff200;">';
        echo 'DEBUG INFORMATION:<br>';
        $userInformation = $_COOKIE["__sm_ap"];
        $userInfo = explode(";", $userInformation);
        echo 'AP_USER_STATUS:' . $userInfo[0] . '<br>';
        echo 'AP_USER:' . $userInfo[1] . '<br>';
        echo 'AP_PERM_LEVEL:' . $userInfo[2] . '<br>';
        echo 'AP_LOG_DATE:' . $_COOKIE["__sm_lt"] . '<br></div>';
    }}
?>
<div align="center" style="width:100%; z-index:1;">
<div style="width:100%; height:150px; background-image:url(m/as/banner.primary.png); background-repeat:no-repeat; background-position:center;">
</div>
Returning you to club0303 with admin permission.
</div>
</body>
</html>