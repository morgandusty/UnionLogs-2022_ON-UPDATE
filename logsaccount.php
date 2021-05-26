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
<tr><td class="middel"><div class="box"><div class="boxtitle">Информация об аккаунте</div>
<tr><form name="search" method="post" action="logsaccount"  id="searchform"><p style="text-align: center;">
<input maxlength="50" name="query" size="50" type="search" placeholder="Введите Ник" /></p>
<form style="text-align: center;" method="GET">
<center><input type="submit" name="search" value="Поиск"/></center></form><tbody></form></div></td></tr><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>MorganDusty LOGS++</title>
<link href="assets/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
<table width="100%" border="0">
</head>
</html>
<?php
if(isset($_GET['id']))
{
	$id=$_GET['id']; 
	require_once("includes/logs.php");
	$result=mysqli_query($con,"SELECT * FROM  accounts WHERE ID='$id'");
	while($row=mysqli_fetch_array($result))
	{
    $id=$row['ID'];
    $nickname=$row['NickName'];
    $regip=$row['RegIP'];
	$regdata=$row['RegData'];
	$lastip=$row['LastIP'];
    $lastlogin=$row['LastLogin'];
	$admin=$row['Admin'];
	$level=$row['Level'];
	$virmoney=$row['VirMoney'];
	$money=$row['Money'];
	$bank=$row['Bank'];
	$deposit=$row['pDep'];
	$leader=$row['Leader'];
	$rank=$row['Rank'];
	$helper=$row['Helper'];
	$status=$row['Online'];
	$vip=$row['VIP'];
	$viptime=$row['VipTime'];
	$jtime=$row['JailTime'];
	$playhours=$row['PlayHours'];
	$referals=$row['Referal'];
	$donat=$row['DonatMoney'];
	}
}
else if(isset($_GET['name']))
{
	$name=$_GET['name']; 
	require_once("includes/logs.php");
	$result=mysqli_query($con,"SELECT * FROM  accounts WHERE NickName='$name'");
	while($row=mysqli_fetch_array($result))
	{
    $id=$row['ID'];
    $nickname=$row['NickName'];
    $regip=$row['RegIP'];
	$regdata=$row['RegData'];
	$lastip=$row['LastIP'];
    $lastlogin=$row['LastLogin'];
	$admin=$row['Admin'];
	$level=$row['Level'];
	$virmoney=$row['VirMoney'];
	$money=$row['Money'];
	$bank=$row['Bank'];
	$deposit=$row['pDep'];
	$leader=$row['Leader'];
	$rank=$row['Rank'];
	$helper=$row['Helper'];
	$status=$row['Online'];
	$vip=$row['VIP'];
	$viptime=$row['VipTime'];
	$jtime=$row['JailTime'];
	$playhours=$row['PlayHours'];
	$referals=$row['Referal'];
	$donat=$row['DonatMoney'];
	}
} else {
	$name=$_POST['query']; 
	require_once("includes/logs.php");
	$result=mysqli_query($con,"SELECT * FROM  accounts WHERE NickName='$name'");
	while($row=mysqli_fetch_array($result))
	{
    $id=$row['ID'];
    $nickname=$row['NickName'];
    $regip=$row['RegIP'];
	$regdata=$row['RegData'];
	$lastip=$row['LastIP'];
    $lastlogin=$row['LastLogin'];
	$admin=$row['Admin'];
	$level=$row['Level'];
	$virmoney=$row['VirMoney'];
	$money=$row['Money'];
	$bank=$row['Bank'];
	$deposit=$row['pDep'];
	$leader=$row['Leader'];
	$rank=$row['Rank'];
	$helper=$row['Helper'];
	$status=$row['Online'];
	$vip=$row['VIP'];
	$viptime=$row['VipTime'];
	$jtime=$row['JailTime'];
	$playhours=$row['PlayHours'];
	$referals=$row['Referal'];
	$donat=$row['DonatMoney'];
	}
}
	$result3=mysqli_query($con,"SELECT * FROM  bannames WHERE  `Name`='$nickname'");
	while($rowa=mysqli_fetch_array($result3))
	{
    $reason=$rowa['BanReason'];
	$bantime=$rowa['BanSeconds'];
	$banadmin=$rowa['BanAdmin'];
	}
	$num = mysqli_num_rows($result3);
$t=time();
if($viptime<=0) $vtime='';
else if(($viptime-$t)/60/60/24>1) { $vt=($viptime-$t)/60/60/24;
	$text1 = 'дней'; 
	$vtime = round($vt); }
else { $vt=($viptime-$t)/60/60;
	$text1 = 'час(ов)'; 
	$vtime = round($vt); }
if($jtime<=0) $jailtime = '';
else if(($jtime-$t)/60/60/24>1) { $jt=($jtime-$t)/60/60/24;
	$text2 = 'дней'; 
	$jailtime = round($jt); }
else { $jt=($jtime-$t)/60/60;
	$text2 = 'час(ов)'; 
	$jailtime = round($jt); }
if($bantime<=0) $btime = '';
else if(($bantime-$t)/60/60/24>1) { $bt=($bantime-$t)/60/60/24;
	$text3 = 'дней'; 
	$btime = round($bt); }
else { $bt=($bantime-$t)/60/60;
	$text3 = 'час(ов)'; 
	$btime = round($bt); }
if($num==0) $statusban = 'Аккаунт не забанен';
else $statusban = 'Аккаунт заблокирован';
if($vip==0) $statusvip = 'Нет VIP';
if($vip==1) $statusvip = 'VIP 1 уровня';
if($vip==2) $statusvip = 'VIP 2 уровня';
if($vip==3) $statusvip = 'VIP 3 уровня';
if($vip==5) $statusvip = 'Titan VIP';
if($vip==6) $statusvip = 'PREMIUM VIP';
if($status==0) $statusid = '(<img src=http://arcanumclub.ru/smiles/smile206.gif>был в сети '.$lastlogin.')';
else $statusid = '(<img src=http://arcanumclub.ru/smiles/smile31.gif>'.$status.')';
echo'<tr><td class="top"><h1><a href=/logsaccount?id='.$id.'>'.$nickname.'</a></h1></td></tr><tr><td class="middel">
<div class="box"><div class="boxtitle"><a href=/logsaccount?id='.$id.'>'.$nickname.'</a> '.$statusid.' </div>
<p>Уровень администратора<b style = "margin-left: 350px;">'.$admin.'</b></p> 
</p><p>Уровень хелпера<b style = "margin-left: 398px;">'.$helper.'</b></p>
<p>Уровень<b style = "margin-left: 450px;">'.$level.'</b></p>
<p>Деньги<b style = "margin-left: 458px;"><a href=/logsdbtype5search?name='.$nickname.'>'.$money.'</a></b></p>
<p>Деньги(БАНК)<b style = "margin-left: 415px;"><a href=/logsdbtype5search?name='.$nickname.'>'.$bank.'</a></b></p>
<p>Депозит<b style = "margin-left: 450px;">'.$deposit.'</b></p>
<p>Донат<b style = "margin-left: 462px;">'.$virmoney.'</b></p>
<p>Fraction<b style = "margin-left: 454px;">'.$leader.'</b></p>
<p>Rank<b style = "margin-left: 471px;">'.$rank.'</b></p>
<p>RegIP<b style = "margin-left: 466px;"><a href=/logsdbtypeipsearch?ip='.$regip.'>'.$regip.'</a></b></p>
<p>LastIP<b style = "margin-left: 466px;"><a href=/logsdbtypeipsearch?ip='.$lastip.'>'.$lastip.'</a></b></p>
<p>Последняя активность<b style = "margin-left: 365px;">'.$lastlogin.'</b></p>
<p>Регистраци аккаунта<b style = "margin-left: 372px;">'.$regdata.'</b></p>
<p>Обнуление профиля<b style = "margin-left: 371px;">0000-00-00 00:00:00</b></p>
<form style="text-align:" method="GET"><input type="submit" name="updatedb" value="Обновить профиль из бд сервера"/></form>
<form style="text-align:" method="GET"><input type="submit" name="updatedb" value="Обновить список авто из бд сервера"/></form>
</div></td></tr>
</div></td></tr>
<td class="middel">
<div class="box">
<div class="boxtitle">Доп. Информация</div>
<p>VIP Статус<b style = "margin-left: 436px;">'.$statusvip.'</b></p>
<p>VIP Time<b style = "margin-left: 450px;">'.$vtime.' '.$text1.'</b></p>
<p>Статус аккаунта<b style = "margin-left: 400px;">'.$statusban.'</b></p>
<p>Причина блокировки/ник_админа<b style = "margin-left: 289px;">'.$reason.' - '.$banadmin.'</b></p>
<p>До разбана<b style = "margin-left: 425px;">'.$btime.' '.$text3.'</b></p>
<p>Тюремное время<b style = "margin-left: 397px;">'.$jailtime.' '.$text2.'</b></p>
<p>Реферал<b style = "margin-left: 446px;">'.$referals.'</b></p>
<p>Отыграл часов<b style = "margin-left: 407px;">'.$playhours.'</b></p>
<p>Реальный донат<b style = "margin-left: 403px;">'.$donat.'</b></p>
</div>
<tr><td class="middel"><div class="box"><div class="boxtitle">Недвижимость</div>
<p>Дом(а)<b style = "margin-left: 457px;">'
?>
<?
$result=mysqli_query($con,"SELECT * FROM  houses WHERE  `Owner`='$name'"); 
while($row=mysqli_fetch_array($result))
echo 'ID:[ <a href=/logshouse?id='.$row['ID'].'><b>' .$row['ID']. '</b></a> ]  </pre>';
?>
<? echo '</a></b><br>Бизнес(ы)<b style = "margin-left: 440px;">' ?>
<?
$result=mysqli_query($con,"SELECT * FROM  businesses WHERE  `Owner`='$name'"); 
while($row=mysqli_fetch_array($result))
echo 'ID:[ <a href=/logsbusiness?id='.$row['ID'].'><b>' .$row['ID']. '</b></a> ]  </pre>';
?>
<? echo '</p><tr><td class="middel"><div class="box"><div class="boxtitle">Авто</div>' ?>
<?
$result=mysqli_query($con,"SELECT * FROM  ownable WHERE  `Owner`='$nickname'");
while($row=mysqli_fetch_array($result))
switch($row['Model'])
{
	case $row['Model']: 
		echo '<a href=/logscars?id='.$row['ID'].'><img border="0" src="/vehicle/' .$row['Model']. '.jpg" width="204" height="125" alt=""></a></pre>    ';
		break;
}
echo '<p>' .$row['Model']. '</p></pre> ';
 ?>
<?
	echo '</div></td></tr><tr><td class="middel"><div class="box">
	<div class="boxtitle">Время активности</div>';
	mysqli_query($con,"SET NAMES 'utf8'");
 	$result=mysqli_query($con,"SELECT * FROM  logs_all WHERE  `action` LIKE '%вошёл%' AND `player` LIKE '%" . $name . "%' ORDER BY date DESC LIMIT 7");
	while($row=mysqli_fetch_array($result))
	echo '<p><ul><li><a href="/logsdbsearch?date='.substr($row["date"],0,10).'&name='.$nickname.'">'.$row['date'].'</a></li></ul>';
 ?>
 <?
 echo '</div></td></tr><tr><td class="middel"><div class="box"><div class="boxtitle">Укажите дату</div>
<form action="logsdbsearch">
 <p>Выберите дату: <input type="date" name="date" id="date">
   <input type="hidden"  name="name" value="'.$nickname.'">
   <input type="submit" value="Показать"></p>
  </form>';
  ?>
	<?
	$result=mysqli_query($con,"SELECT * FROM  logs_all WHERE  `player`='$nickname' ORDER BY date DESC LIMIT 7");
	while($row=mysqli_fetch_array($result))
	echo '<p>'.$row['date'].' - '.$row['action'].'</p></pre>';
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