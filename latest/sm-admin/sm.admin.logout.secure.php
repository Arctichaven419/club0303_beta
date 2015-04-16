<?php
session_start();
require '../var.php';
setcookie("__sm_ap", $cookieValue, time() - 999999, "/");
setcookie("__sm_lt", date('d-m-Y \a\t H:i'), time() - 999999, "/");
setcookie("___sm_log", "true", time() - 999999, "/");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logging You Out... | sorensenmedia</title>
</head>

<body>
</body>
</html>