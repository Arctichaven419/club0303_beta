<?php 
    if(isset($_GET["error"])) {
        $error = $_GET["error"];
    } else {
        $error = "0";
    }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>club0303 | AdminPortal by sorensenmedia</title>
<style>
body {
    margin:0px;
    font-family:Gotham, "Helvetica Neue", Helvetica, Arial, sans-serif;
    -webkit-user-select:none;
    -moz-user-select:none;
    -ms-user-select:none;
}
.loginForm {
    background:#00111b;
    color:#FFFFFF;
}
.formInput {
    border: none;
    font-size:36px;
    background:inherit;
    align-content: center;
    padding:0px;
    color: #FFFFFF;
    display:inline-block;
    text-align:center;
    width:300px;
    padding-top:3px;
    padding-bottom:3px;
}
.formInput:focus {
    outline: none;
    color:#0193f9;
}
.formSubmit {
    border:none;
    font-size:20px;
    background:#000000;
    color:#FFFFFF;
    width:300px;
    height:auto;
    padding-top:15px;
    padding-bottom:15px;
}
.formSubmit:hover {
    color:#0193f9;
    cursor:pointer;
}
.formSubmit:focus {
    outline:none;
}
.link {
    text-decoration:none;
    color:#459109;
}
</style>
</head>

<body>
<div align="center" style="width:100%">
    <img src="portal/m/as/banner.top.front.200.png" width="1300" height="200" alt="adminportal by sorensenmedia"/>
    <form action="sm.admin.login.secure.php" method="post">
    <table width="300" border="0" cellspacing="0" cellpadding="0" class="loginForm">
    <tbody>
        <tr>
            <td style="height:40px; background:#459109;" align="center" valign="middle"><strong>club0303</strong></td>
        </tr>
        <tr> <!-- SECTION.NOTIFY.FORM01.ERROR_ON_LOGIN -->
            <td style="height:30px;" align="center" valign="middle"><em><?php switch ($error) { case "0": echo ""; break; case "u": echo "Incorrect username."; break; case "p": echo "Incorrect password."; break; case "1": echo "An error occured, please email webmaster@sorensenmedia.x10.bz."; break; default: echo ""; break; } ?></em></td>
        </tr>
        <tr> <!-- SECTION.INPUT.FORM01.USERNAME -->
            <td><input type="text" class="formInput" name="submitusername" placeholder="username" required tabindex="1"></td>
        </tr>
        <tr> <!-- SECTION.INPUT.FORM01.PASSWORD -->
            <td><input type="password" class="formInput" name="submitpassword" placeholder="password" required tabindex="2"></td>
        </tr>
        <tr> <!-- SECTION.DISPLAY.FORM01.LINK.RETURN_&_NO_ACCOUNT -->
            <td style="height:50px;" align="center" valign="middle"><a class="link" href="../index.php">Return</a>&nbsp;-&nbsp;<a class="link" href="mailto:webmaster@sorensenmedia.x10.bz?subject=sm.club0303.meridian%20S6QFMIVFD7%20--%20Lost%20Account&body=Please%20type%20your%20credentials%20and%20support%20will%20contact%20you." target="_blank" tabindex="4">Lost access?</a></td>
        </tr>
        <tr> <!-- SECTION.INPUT.FORM01.SUBMIT -->
            <td><input type="submit" class="formSubmit" value="Login" tabindex="3"></td>
        </tr>
    </tbody>
</table>
</div>
</body>
</html>