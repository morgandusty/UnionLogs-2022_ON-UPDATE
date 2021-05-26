<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MorganDusty LOGS++</title>
<link href="assets/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
</head>
</html>
<?
include("header/header.php");
?>
<body><div class="menu"><table width="100%"><tr><td valign="top" align="left"><script>
	</script></td></a></td></tr></table></div>
    <div class="right"><div id="content">
    <table width="100%" border="0">
  <tbody>
    <tr>
      <td class="top"><h1>Серверы: <a href="logsindex" >Richmond</a></h1></td>
    </tr>
    <tr>
      <td class="middel"><div class="box">
        <div class="boxtitle">Добрый день</div><p>Вы попали на сайт логов от Morgan Dusty.</div></td>
    </tr>
    <?
include("header/footer.php");
?>
  </tbody>
</table>
</div></div></body>
</html>
<?php
}
?>