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
<div class="boxtitle">Список Лидеров</div></td><p>
<?
echo '<br>
<table width="100%"><tr>
<td><b>Ник</b></td>
<td><b>Фракция</b></td>
<td><b>Деньги</b></td>
<td><b>Ранг#1</b></td>
<td><b>Ранг#2/b></td>
<td><b>Ранг#3</b></td>
<td><b>Ранг#4</b></td>
<td><b>Ранг#5</b></td>
<td><b>Ранг#6/b></td>
<td><b>Ранг#7</b></td>
<td><b>Ранг#8</b></td>
<td><b>Ранг#9</b></td><br>';
?>
<?php
$result=mysqli_query($con,"SELECT * FROM  orgsinfo WHERE Leader != 'None' ORDER BY Leader DESC LIMIT 0,200");
while($row=mysqli_fetch_array($result))
echo '<tr>
<td> <a href=/logsaccount?name=' .$row['Leader']. '>' .$row['Leader']. '</a></td>
<td>' .$row['Name']. '</td>
<td>' .$row['Bank']. ' </td>
<td>' .$row['Rank_1']. '</a></td>
<td>' .$row['Rank_2']. '</a></td>
<td>' .$row['Rank_3']. '</a></td>
<td>' .$row['Rank_4'].'</td>
<td>' .$row['Rank_5']. '</td>
<td>' .$row['Rank_6']. '</td>
<td>' .$row['Rank_7']. '</td>
<td>' .$row['Rank_8']. '</td>
<td>' .$row['Rank_9']. '</td>';
?>
<?
// echo '<p><a href=/logsaccount?name='.$row['NickName'].'>'.$row['NickName'].'</a> - '.$row['Level'].'(lvl) - '.$row['Admin'].' - '.$row['AdminPrefix'].'</p></pre>';
 ?>
</div>

<?
echo '</table>';
$result=mysqli_query($con,"SELECT * FROM  orgsinfo WHERE Leader != 'None' ORDER BY Leader DESC LIMIT 0,200");
while($row=mysqli_fetch_array($result))
$num = mysqli_num_rows($result);
echo '<p><b>Всего лидеров: ' .$num. ' из 28</b>';
?>
<html>
<?
include("header/footer.php");
?>
</html>
<?php
}
?>