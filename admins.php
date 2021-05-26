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
<div class="boxtitle">Список Администрации</div></td><p>
<?
echo '<br>
<table width="100%"><tr>
<td><b>Ник</b></td>
<td><b>Админ</b></td>
<td><b>Уровень</b></td>
<td><b>Деньги(На руках)</b></td>
<td><b>Деньги(Банк)</b></td>
<td><b>Деньги(Депозит)</b></td>
<td><b>Донат</b></td>
<td><b>Номер</b></td>
<td><b>Випка</b></td>
<td><b>Заходил</b></td>
<td><b>Привязка</b></td>
<td><b>Префикс</b></td></tr><br>';
?>
<?php

$result=mysqli_query($con,'SELECT * FROM  accounts WHERE Admin > 0 ORDER BY Admin DESC LIMIT 0,200');
// берем результаты из каждой строки
while($row=mysqli_fetch_array($result))
 echo '<tr>
<td> <a href=/logsaccount?name=' .$row['NickName']. '>' .$row['NickName']. '</a></td>
<td>' .$row['Admin'].' уровень</td>
<td>' .$row['Level']. ' lvl</td>
<td> <a href=/logsdbtype5search?name=' .$row['NickName']. '>' .$row['Money']. '</a></td>
<td> <a href=/logsdbtype5search?name=' .$row['NickName']. '>' .$row['Bank']. '</a></td>
<td> <a href=/logsdbtype5search?name=' .$row['NickName']. '>' .$row['pDep']. '</a></td>
<td>' .$row['VirMoney'].'</td>
<td>' .$row['TelNum']. '</td>
<td>' .$row['VIP']. '</td>
<td>' .$row['LastLogin']. '</td>
<td>' .$row['Mail'] . '</td>
<td>' .$row['AdminPrefix'] . '</td></tr>';
// echo '<p><a href=/logsaccount?name='.$row['NickName'].'>'.$row['NickName'].'</a> - '.$row['Level'].'(lvl) - '.$row['Admin'].' - '.$row['AdminPrefix'].'</p></pre>';
 ?>
</div>

<?
echo '</table>';
$result=mysqli_query($con,'SELECT * FROM  accounts WHERE Admin > 0 ORDER BY Admin DESC LIMIT 0,200');
// берем результаты из каждой строки
while($row=mysqli_fetch_array($result))
$num = mysqli_num_rows($result);
echo '<p><b>Всего администраторов: ' .$num. '</b>';
?>
<html>
<?
include("header/footer.php");
?>
</html>
<?php
}
?>