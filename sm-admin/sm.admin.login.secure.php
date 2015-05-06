<?php
session_start();
require '../var.php';
?>
<?php
    //error_reporting( error_reporting() & ~E_NOTICE )
    ?>
<?php
$submitUsername = $_POST["submitusername"];
if (strpos($submitUsername,'--DEBUG') !== false) {
    $debug = true;
    $tempsubmitUsername = explode("--",$submitUsername);
    $submitUsername = $tempsubmitUsername[0];
} else {
    $debug = "";
}
$submitPassword = sha1($_POST["submitpassword"]);


if (!$conn) {
    die("Could not Connect to Database. " . mysqli_connect_error());
}

$sqlCheckUsername = "SELECT * FROM suku_blog_users WHERE username='$submitUsername'";
$queryCheckUsername = $conn->query($sqlCheckUsername);

if ($queryCheckUsername->num_rows > 0) {
    while($row = $queryCheckUsername->fetch_assoc()) {
        if (!$debug == true) {
            $smuser = true;
            $_SESSION["smTempUN"] = $row["username"];
            $_SESSION["smTempPer"] = $row["permission"];
        } else {
            echo '<script>console.log("SERVER.RESPONSE  :  USER_FOUND")</script>';
        }
    }
} else {
    echo "ERROR CODE = u;<br>SUBMITUSERNAME = " . $submitUsername ."<br>SUBMITPASSWORD = " . $_POST["submitpassword"] . "<br>SUBMITPASSWORD_SHA1 = " . $submitPassword;
    if (!$debug == true) {
        header("Location: index.php?error=u");
        exit;
    } else {
        echo '<script>console.log("SERVER.RESPONSE  :  USER_NOT_FOUND     !!!")</script>';
    }
}

$sqlCheckPassword = "SELECT * FROM suku_blog_users WHERE username='$submitUsername' AND password='$submitPassword'";
$queryCheckPassword = $conn->query($sqlCheckPassword);
if ($queryCheckPassword->num_rows > 0) {
    while($info = $queryCheckPassword->fetch_assoc()) {
        if (!$debug == true) {
            $smpass = true;
            $smUsername = $info["username"];
            $smPermission = $info["permission"];
        } else {
            echo '<script>console.log("SERVER.RESPONSE  :  PASSWORD_MATCH")</script>';
        }
    }
} else {
    echo "ERROR CODE = p;<br>SUBMITUSERNAME = " . $submitUsername ."<br>SUBMITPASSWORD = " . $_POST["submitpassword"] . "<br>SUBMITPASSWORD_SHA1 = " . $submitPassword;
    if(!$debug == true) {
        header("Location: index.php?error=p");
        exit;
    } else {
        echo '<script>console.log("SERVER.RESPONSE  :  PASSWORD_NOT_MATCH     !!!")</script>';
    }
}
if ($debug !== true) {
    if ($smuser == true && $smpass == true) {
        header("Location: portal/index.php");
        $cookieValue = "true;" . $smUsername . ";" . $smPermission;
        date_default_timezone_set('America/Chicago');
        setcookie("__sm_ap", $cookieValue, time() + 3600, "/");
        setcookie("__sm_lt", date('d-m-Y \a\t H:i'), time() + 3600, "/");
        setcookie("___sm_log", "true", time() + 3600, "/");
    } else {
        header("Location: index.php?error=1");
    }
} else {
    echo "<br><br>Debug information has been posted to the console.";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php if ($debug == true) { echo 'DEBUG STATE | ';} ?>Logging You In... | sorensenmedia</title>
</head>

<body>
<?php 
//echo "ERROR CODE = 0;<br>SUBMITUSERNAME = " . $submitUsername ."<br>SUBMITPASSWORD = " . $_POST["submitpassword"] . "<br>SUBMITPASSWORD_SHA1 = " . $submitPassword;
?>
</body>
</html>