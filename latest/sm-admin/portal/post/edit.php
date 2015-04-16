<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>club0303 Admin Portal | sorensenmedia</title>
</head>

<body>
<?php
echo 'DEBUG INFORMATION:<br>';
$userInformation = $_COOKIE["sm_club0303_admin"];
$userInfo = explode(";", $userInformation);
echo 'IS_USER:' . $userInfo[0] . '<br>';
echo 'USERNAME:' . $userInfo[1] . '<br>';
echo 'PERMISSION:' . $userInfo[2] . '<br>';
?>
<input type="text" value="<?php echo "something goes here"; ?>">
</body>
</html>