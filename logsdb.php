<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>
<?
include("header/header.php");
?>
<h1 style="text-align: center;"><font color="1168a6"><font size="6"><font face="Tahoma, Geneva, sans-serif"> </font></font></font></h1><html>
	<head>
		<title>MorganDusty LOGS++</title>
	<link href="assets/styles.css" rel="stylesheet" type="text/css">

	
</html>
<tr>
<td class="middel"><div class="box">
<a href=searchaccount.php><li>Поиск аккаунта</li></a>
<a href=logsaccount.php><li>Поиск аккаунта(по нику)</li></a>
<a href=logsdbsearch.php><li>Поиск во всех логах</li></a>
<a href=logsdbtype1search.php><li>Поиск в логах домов</li></a>
<a href=logsdbtype2search.php><li>Поиск в логах бизнесов</li></a>
<a href=logsdbtype3search.php><li>Поиск в логах авто</li></a>
<a href=logsdbtype4search.php><li>Поиск в логах администрации</li></a>
<a href=logsdbtype5search.php><li>Поиск в логах денег</li></a>
<a href=logsdbtype6search.php><li>Поиск в логах чата</li></a>
<a href=logsdbtypeipsearch.php><li>Поиск аккаунтов с одинаковыми IP</li></a></div>


<html>
<?
include("header/footer.php");
?>
</html>
<?php
}
?>