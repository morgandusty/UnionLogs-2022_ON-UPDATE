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
<tr><td class="middel"><div class="box"><div class="boxtitle">Информация об автомобиле</div>
<meta charset="utf-8">
<title>MorganDusty LOGS++</title>
<link href="assets/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<table width="100%" border="0">
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id']; 
	require_once("includes/logs.php");
	$result=mysqli_query($con,"SELECT * FROM  ownable WHERE ID='$id'");
	while($row=mysqli_fetch_array($result))
	{
    $id=$row['ID'];
    $owner=$row['Owner'];
	$keyer=$row['Keyer'];
	$shtrafer=$row['Shtrafer'];
	$cost=$row['Cost'];
	$number=$row['Number'];
	$register=$row['Register'];
	$color_1=$row['Color_1'];
	$color_2=$row['Color_2'];
	$park1=$row['ParkedInGarage'];
	$launch1=$row['Launch'];
	$supreme1=$row['Supreme'];
	$twinturbo1=$row['TwinTurbo'];
	}
switch($color_1)
{
	case 0: $color_1 = 'Черный';
	case 1: $color_1 = 'Белый';
	default: $color_1;
}
switch($color_2)
{
	case 0:  $color_2 = 'Черный';
	case 1: $color_2 = 'Белый';
	default: $color_2;
}
if($launch1 == 1) $launch = 'Есть';
else $launch = 'Нет';
if($supreme1 == 1) $supreme = 'Есть';
else $supreme = 'Нет';
if($park1 == 1) $park = 'Припаркованно';
else $park = 'Не припаркованно';
if($twinturbo1 == 1) $twinturbo = 'Есть';
else $twinturbo = 'Нет';
}
 ?>
 <?
$result=mysqli_query($con,"SELECT * FROM  ownable WHERE  `ID`='$id'");
while($row=mysqli_fetch_array($result))
switch($row['Model'])
{
	case $row['Model']: 
		echo '<img border="0" src="/vehicle/' .$row['Model']. '.jpg" width="204" height="125" alt=""></pre>    ';
		break;
}
echo '<p>' .$row['Model']. '</p></pre> ';
echo '<p>ID автомобиля<b style = "margin-left: 318px;">'.$id.'</b></p> 
<p>Владелец<b style = "margin-left: 350px;"><a href=/logsaccount?name='.$owner.'>'.$owner.'</a></b></p> 
<p>Доступ имеется<b style = "margin-left: 314px;"><a href=/logsaccount?name='.$owner.'>'.$keyer.'</a></b></p>
<p>Цвет #1<b style = "margin-left: 356px;">'.$color_1.'</b></p>
<p>Цвет #2<b style = "margin-left: 356px;">'.$color_2.'</b></p>
<p>Штраф<b style = "margin-left: 358px;">'.$shtrafer.'</b></p>
<p>Гос. Цена<b style = "margin-left: 346px;">'.$cost.'</b></p>
<p>Номера<b style = "margin-left: 356px;">'.$number.'</b></p>
<p>Регистрация<b style = "margin-left: 332px;">'.$register.'</b></p>
<p>Парковка в гараже/интерьере<b style = "margin-left: 217px;">'.$park.'</b></p>
<p>Лаунч<b style = "margin-left: 367px;">'.$launch.'</b></p>
<p>Суприм<b style = "margin-left: 358px;">'.$supreme.'</b></p>
<p>Твин-турбо<b style = "margin-left: 337px;">'.$twinturbo.'</p>';
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