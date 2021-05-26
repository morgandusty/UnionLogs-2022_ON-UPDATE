<?php 
session_start();
if(!isset($_SESSION["session_username"])) {
	header("location:login.php");
} else {
?>
<?
include("header/header.php");
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MorganDusty LOGS++</title>
<link href="assets/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<table width="100%" border="0">
</head>
<h1 style="text-align: center;"><font color="1168a6"><font size="6"><font face="Tahoma, Geneva, sans-serif"> </font></font></font></h1>
<tr><td class="middel"><div class="box"><div class="boxtitle">Поиск аккаунта</div>
<form name="search" method="post" action="searchaccount">
Сервер: <select>
	<option>Richmond</option>
</select>  VIP: <select name="vip">
	<option>VIP-1</option>
	<option>VIP-2</option>
	<option>VIP-3</option>
	<option>VIP-4</option>
	<option>Titan</option>
	<option>Premium</option>
</select>  Номер телефона: <input name="phone"/><br>
Уровень: <input name="levelot"/>  Уровень до: <input name="leveldo"/><br>
Уважение от: <input name="repot"/>  Уважение до: <input name="repdo"/><br>
Деньги(На руках) от: <input name="moneyot"/>  Деньги(На руках) до: <input name="moneydo"/><br>
Деньги(Банк) от: <input name="bankot"/>  Деньги(Банк) до: <input name="bankdo"/><br>
Деньги(Депозит) от: <input name="depot"/>  Деньги(Депозит) до: <input name="depdo"/><br>
Фишки от: <input name="fishkiot"/>  Фишки до: <input name="fishkido"/><br>
Донат от: <input name="donatot"/>  Донат до: <input name="donatdo"/><br>
<input type="submit" name="search" value="Поиск"/></form>
<tr><td class="middel"><div class="box"><div class="boxtitle">Результат поиска</div>
<?
echo '<br>
<table width="100%"><tr>
<td><b>Ник</b></td>
<td><b>Уровень</b></td>
<td><b>Деньги(На руках)</b></td>
<td><b>Деньги(Банк)</b></td>
<td><b>Деньги(Депозит)</b></td>
<td><b>Донат</b></td>
<td><b>Фишки</b></td>
<td><b>Номер</b></td>
<td><b>Випка</b></td>
<td><b>Заходил</b></td>
<td><b>Привязка</b></td></tr><br>';
?>
<?
	$vip=$_POST['vip'];
	$phone=$_POST['phone'];
	$levelot=$_POST['levelot']; 
	$leveldo=$_POST['leveldo'];
	$repot=$_POST['repot'];
	$repdo=$_POST['repdo'];
	$moneyot=$_POST['moneyot'];
	$moneydo=$_POST['moneydo'];
	$bankot=$_POST['bankot'];
	$bankdo=$_POST['bankdo'];
	$depot=$_POST['depot'];
	$depdo=$_POST['depdo'];
	$fishkiot=$_POST['fishkiot'];
	$fishkido=$_POST['fishkido'];
	$donatot=$_POST['donatot'];
	$donatdo=$_POST['donatdo'];
	require_once("includes/logs.php");
	if($vip>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE VIP ='$vip'");
	if($phone>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE TelNum ='$phone'");
	if($levelot>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE Level >= '$levelot'");
	if($leveldo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE Level <= '$leveldo'");
	if($levelot>0 && $leveldo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE `Level` >= '$levelot' AND `Level` <= '$leveldo'");
	if($repot>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE Exp >= '$repot'");
	if($repdo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE Exp <= '$repdo'");
	if($repot>0 && $repdo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE `Exp` >= '$repot' AND `Exp` <= '$repdo'");
	if($moneyot>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE Money >= '$moneyot'");
	if($moneydo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE Money <= '$moneydo'");
	if($moneyot>0 && $moneydo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE `Money` >= '$moneyot' AND `Money` <= '$moneydo'");
	if($bankot>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE Bank >= '$bankot'");
	if($bankdo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE Bank <= '$bankdo'");
	if($bankot>0 && $bankdo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE `Bank` >= '$bankot' AND `Bank` <= '$bankdo'");
	if($depot>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE pDep >= '$depot'");
	if($depdo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE pDep <= '$depdo'");
	if($depot>0 && $depdo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE `pDep` >= '$depot' AND `pDep` <= '$depdo'");
	if($donatot>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE VirMoney >= '$donatot'");
	if($donatdo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE VirMoney <= '$donatdo'");
	if($donatot>0 && $donatdo>0) $result=mysqli_query($con,"SELECT * FROM  accounts WHERE `VirMoney` >= '$donatot' AND `VirMoney` <= '$donatdo'");
	//$result=mysqli_query($con,"SELECT * FROM  accounts WHERE `Level` >= '$levelot' AND `Level` <= '$leveldo' UNION SELECT * FROM  accounts WHERE `Exp` >= '$repot' AND `Exp` <= '$repdo' UNION SELECT * FROM  accounts WHERE `Money` >= '$moneyot' AND `Money` <= '$moneydo' SELECT * FROM  accounts WHERE `Bank` >= '$bankot' AND `Bank` <= '$bankdo' UNION SELECT * FROM  accounts WHERE `pDep` >= '$depot' AND `pDep` <= '$depdo' UNION SELECT * FROM  accounts WHERE `VirMoney` >= '$donatot' AND `VirMoney` <= '$donatdo'");
	while($row=mysqli_fetch_array($result))
	echo '<tr>
<td> <a href=/logsaccount?name=' .$row['NickName']. '>' .$row['NickName']. '</a></td>
<td>' .$row['Level']. '</td>
<td> <a href=/logsdbtype5search?name=' .$row['NickName']. '>' .$row['Money']. '</a></td>
<td> <a href=/logsdbtype5search?name=' .$row['NickName']. '>' .$row['Bank']. '</a></td>
<td> <a href=/logsdbtype5search?name=' .$row['NickName']. '>' .$row['pDep']. '</a></td>
<td>' .$row['VirMoney']. '</td>
<td>' .$row['pFirstCase']. '</td>
<td>' .$row['TelNum']. '</td>
<td>' .$row['VIP']. '</td>
<td>' .$row['LastLogin']. '</td>
<td>' .$row['Mail'] . '</td></tr>';
?>
<?
echo '</table>';
?>
</html>

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