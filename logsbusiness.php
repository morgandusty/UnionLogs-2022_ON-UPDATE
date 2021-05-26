<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>

<?
include("header/header.php");
?>

<h1 style="text-align: center;"><font color="1168a6"><font size="6"><font face="Tahoma, Geneva, sans-serif"> </font></font></font></h1>
<tr><td class="middel"><div class="box"><div class="boxtitle">Информация о бизнесе</div>
<meta charset="utf-8">
<title>MorganDusty LOGS++</title>
<link href="assets/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<table width="100%" border="0">
<?php
$id=$_GET['id']; 
require_once("includes/logs.php");
$result=mysqli_query($con,"SELECT * FROM  businesses WHERE ID='$id'");
while($row=mysqli_fetch_array($result))
	
echo '<p>ID бизнеса<b style = "margin-left: 324px;">'.$row['ID'].'</b><br>
Бизнес<b style = "margin-left: 350px;">'.$row['Name'].'</a></b><br>
Владелец<b style = "margin-left: 333px;"><a href=/logsaccount?name='.$row['Owner'].'>'.$row['Owner'].'</a></b><br>
Заместитель<b style = "margin-left: 316px;"><font color="#FFFF00">Скоро</font></a></b><br>
Налог<b style = "margin-left: 354px;">'.$row['Level'].'</b><br>
Гос. Цена<b style = "margin-left: 332px;">'.$row['Cost'].'</b></p><br>';
 ?>
<html>
  <?
include("header/footer.php");
?>
</table>
</div></div></body>
</html>
<?php
}
?>