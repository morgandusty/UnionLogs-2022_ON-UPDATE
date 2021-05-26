<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>
<?
include("header/header.php");
?>
<form name="search" method="post" action="logsdbtypeipsearch"  id="searchform" ><tr><form name="search" method="post" >
<h1 style="text-align: center;"><font color="1168a6"><font size="6"><font face="Tahoma, Geneva, sans-serif"> </font></font></font></h1>
<p style="text-align: center;"><input maxlength="50" name="query" size="50" type="search" placeholder="Введите IP" /></p>
<form style="text-align: center;" method="GET"><center><input type="submit" name="search" value="Поиск"/></center></form><tbody></form><html>
	<head>
		<title>MorganDusty LOGS++</title>
	<link href="assets/styles.css" rel="stylesheet" type="text/css">
	<tr>
	<h1 style="text-align: center;"><font color="1168a6"><font size="6"><font face="Tahoma, Geneva, sans-serif"> </font></font></font></h1>

	
	<tbody>
	

    </form>
	
</html>
<tr>
<td class="middel"><div class="box">
<div class="boxtitle">Аккаунты с одинаковыми IP</div></td>
<?php
require_once("includes/logs.php");
if(isset($_GET['ip']))
{
	$ip=$_GET['ip']; 
	require_once("includes/logs.php");
	$result=mysqli_query($con,"SELECT * FROM  accounts WHERE RegIP='$ip' ORDER BY LastLogin DESC LIMIT 0,200");
} else {
	$name=$_POST['query']; 
	require_once("includes/logs.php");
	$result=mysqli_query($con,"SELECT * FROM  accounts WHERE RegIP LIKE '%" . $name . "%' ORDER BY LastLogin DESC LIMIT 0,200");
}
while($row=mysqli_fetch_array($result))
//if(isset($_POST['search']))
echo '<p>Ник: <a href=/logsaccount?id='.$row['ID'].'>'.$row['NickName'].'</a> | IP При регистрации: <a href=/logsdbtypeipsearch?ip='.$row['RegIP'].'>'.$row['RegIP'].'</a> | IP При последнем входе: <a href=/logsdbtypeipsearch?ip='.$row['LastIP'].'>'.$row['LastIP'].'</a> | Последний вход: '.$row['LastLogin'].'  | Дата регистрации: '.$row['RegData'].'</p></pre>';
$num = mysqli_num_rows($result);
echo '<b>Всего аккаунтов: ' .$num. '</b>';
?>
</div>


<html>
<footer class="main-footer">
    <?
include("header/footer.php");
?>
    </footer>
</html>
<?php
}
?>