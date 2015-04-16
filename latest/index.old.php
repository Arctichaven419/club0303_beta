<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome | Club0303</title>
<style>
body {
    margin:0px;
    background:url(m/ui/gl/background-v01.png);
    background-size:cover;
    background-repeat:no-repeat;
    color:#FFFFFF;
}
@font-face {
    font-family: 'furore';
    src: url('m/f/furore-webfont.eot');
    src: url('m/f/furore-webfont.eot?#iefix') format('embedded-opentype'),
         url('m/f/furore-webfont.woff2') format('woff2'),
         url('m/f/furore-webfont.woff') format('woff'),
         url('m/f/furore-webfont.ttf') format('truetype'),
         url('m/f/furore-webfont.svg#furoreregular') format('svg');
    font-weight: normal;
    font-style: normal;
}
@font-face {
    font-family: 'bpreplay';
    src: url('m/f/bpreplay.eot');
    src: url('m/f/bpreplay.eot?#iefix') format('embedded-opentype'),
         url('m/f/bpreplay.woff2') format('woff2'),
         url('m/f/bpreplay.woff') format('woff'),
         url('m/f/bpreplay.ttf') format('truetype'),
         url('m/f/bpreplay.svg#bpreplayregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
@font-face {
    font-family: 'sonsie';
    src: url('m/f/sonsieone.eot');
    src: url('m/f/sonsieone.eot?#iefix') format('embedded-opentype'),
         url('m/f/sonsieone.woff2') format('woff2'),
         url('m/f/sonsieone.woff') format('woff'),
         url('m/f/sonsieone.ttf') format('truetype'),
         url('m/f/sonsieone.svg#sonsie_oneregular') format('svg');
    font-weight: normal;
    font-style: normal;

}
.navBar {
    z-index:10;
    width:100vw;
    position:fixed;
}
.navOptions01 {
    width:1308px;
    height:0px;
    /* background:linear-gradient(#252525, #252525, #252525, #4D4D4D); */
    background: blue;
    position: static;
    z-index:12;
}
.navOptions02 {
    width:1308px;
    height:0px;
    /* background:linear-gradient(#252525, #252525, #25E04B); */
    background: green;
    display:table;
    z-index:12;
}
.navMenu {
    background: linear-gradient(to left, #264f05, #232323, #232323);
    border-left:solid #ffffff 2px;
    border-bottom:solid #ffffff 2px;
    font-family:furore;
    font-size:20px;
}
.navSocial {
    width:308;
    background: linear-gradient(to right, #264f05, #232323, #232323);
    border-right:solid #ffffff 2px;
    border-bottom:solid #ffffff 2px;
    font-family:furore;
    font-size:20px;
    transition: background 0.2s ease;
}
.contentContainer {
    width:100px;
    background:blue;
    padding-top:60px;
    z-index:1;
}
</style>
<script src="j/jquery.js"></script>
<script src="j/sm.tmg.nav.01.js"></script>
</head>

<body>
<div align="center" style="width:100vw; height:100vh;">
<div class="navBar">
<table width="100%" border="0" cellspacing="0" style="z-index:200;">
    <tbody>
        <tr>
            <td colspan="5" height="0px" style="background:#252525; border-bottom:solid #ffffff 2px;" align="center">
                <div class="navOptions01"></div>
                <div class="navOptions02"></div>
                </td>
            <!-- <td style="background:#252525;"></td>
            <td colspan="2" style="background:#252525; border-bottom:solid #ffffff 2px;"></td> -->
        </tr>
        <tr>
            <td rowspan="2"></td>
            <td width="300px" height="60px" align="right" valign="middle" class="navMenu" style="cursor:pointer; transition:background 0.2s ease;">Menu<!-- <div style="width:308; height:60px;"></div> --></td>
            <td width="690px" rowspan="2" height="70px" align="center" style="background: linear-gradient(#252525, #0d578b); border-left:solid #ffffff 2px; border-bottom:solid #ffffff 2px; border-right:solid #ffffff 2px; font-family:sonsie; font-size:46px;">Club0303</td>
            <td width="300px" height="60px" class="navSocial"><div id="navSocial" style="width:308px; height:60px; cursor:pointer; vertical-align:middle;">Social</div></td>
            <td rowspan="2"></td>
        </tr>
        <tr>
            <td></td>
            <!-- <td height="10px"></td>-->
            <td></td>
        </tr>
    </tbody>
</table>
</div>




<div class="contentContainer">
Welcome
</div>
</div>
</body>
</html>