<?php
session_start();
?>
<?php require_once("includes/connection.php"); ?>
<?php
	if(isset($_SESSION["username"])){
	// вывод "Session is set"; // в целях проверки
	header("Location: login_check.php");
	}

	if(isset($_POST["login"])){

	if(!empty($_POST['username']) && !empty($_POST['password'])) {
	$username=htmlspecialchars($_POST['username']);
	$password=htmlspecialchars($_POST['password']);
	$hpassword = md5($password);
	$query =mysqli_query($con,"SELECT * FROM user WHERE username='".$username."' AND password='".$hpassword."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
		$admin=$row['admin'];
	}
	if($username == $dbusername && $hpassword == $dbpassword)
	{
		if($admin > 0)
		{
			$_SESSION['session_username']=$username;	 
			header("location: login_check.php");
		} else {
			$message =  "Вы не являетесь администратором! Доступ закрыт!";
		}
	}
	} else {
	$message =  "Неправильное имя пользователя или пароль!";
 }
	} else {
    $message = "Все поля обязательны к заполнению!";
	}
	}
	?>
<html>
<head>
<meta charset="utf-8">
<title>MorganDusty LOGS++</title>
<link href="assets/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.form.js"></script>
</head>

<body><div class="menu"><table width="100%"><tr><td valign="top" align="left"><script>


	</script>
	<a></a><ul><a></a>
	<a href="/"><li>Главная</li></a>
	<a href="https://yoursite.com"><li>Сайт</li></a>
	<a href="https://vk.com/dobrov.sergey"><li>Разработчик</li></a></ul></td>
	<td valign="top" align="right"></td>
	<td valign="top" align="right">
	 <a href="/register.php" rel="no"><li>Регистрация</li></a> 
	<a href="/login.php"><li>Войти</li></a></td></tr></tbody></table></div>
    
    <div class="right"><div id="content">
    <table width="100%" border="0">
  <tbody>
    <tr>
      <td class="top"><h1>Войти</h1></td>
    </tr>
    <tr>
      <td class="middel"><div class="box">
        <div id="login" class="boxtitle">Войти</div>
		<form name="loginform" id="loginform" action="" method="POST"> 
		<table width='100%'>
		<tr><td>Ник</td><td><input type='text' name="username"></td></tr>
		<tr><td>Пароль</td><td><input type='password' name="password"></td></tr>
		</table>
		<input type=submit name='login' value='Войти'><p><h2><?echo $message; ?></h2>
		</form></div></td>
    </tr>
    <html>
<?
include("header/footer.php");
?>
</html>
</table>
</div></div></body>
</html>