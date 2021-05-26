<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>
<?
include("header/header.php");
?>
<form name="search" method="post" ><tr><form name="search" method="post" >
<h1 style="text-align: center;"><font color="1168a6"><font size="6"><font face="Tahoma, Geneva, sans-serif"> </font></font></font></h1>
<p style="text-align: center;"><input maxlength="50" name="query" size="50" type="search" placeholder="Введите дату или любой текст" /></p>
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
<div class="boxtitle">Логи сервера</div></td>
<?php
$name=$_POST['query']; 
require_once("includes/logs.php");
$result=mysqli_query($con,"SELECT * FROM  logs_house WHERE action LIKE '%" . $name . "%' ORDER BY date DESC LIMIT 0,200");
// берем результаты из каждой строки
while($row=mysqli_fetch_array($result))
	
 echo '<p>'.$row['date'].' - '.$row['action'].'</p></pre>';
 ?></div>


<html>
<?
include("header/footer.php");
?>
</html>
<?php
}
?>