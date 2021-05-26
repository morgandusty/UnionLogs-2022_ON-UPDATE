<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>
<?
include("header/header.php");
?>
<html>
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
<div class="boxtitle">Логи сервера</div></td><p>
<?php
require_once("includes/logs.php");
$result=mysqli_query($con,'SELECT * FROM  logs_car ORDER BY date DESC LIMIT 0,200');
// берем результаты из каждой строки
while($row=mysqli_fetch_array($result))
	
 echo '<p>'.$row['date'].' - '.$row['action'].'</p></pre>';
 ?>
</div>

<html>
<?
include("header/footer.php");
?>
</html>
<?php
}
?>