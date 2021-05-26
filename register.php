<!DOCTYPE html>

<?php require_once("includes/connection.php"); ?>
<?php
	// header("location: /");
	if(isset($_POST["register"])){
	
	if(!empty($_POST['full_name']) && !empty($_POST['email']) && !empty($_POST['username']) && !empty($_POST['password'])) {
  $full_name= htmlspecialchars($_POST['full_name']);
$email=htmlspecialchars($_POST['email']);
 $username=htmlspecialchars($_POST['username']);
 $password=htmlspecialchars($_POST['password']);
 $hpassword = md5($password);
 $query=mysqli_query($con,"SELECT * FROM user WHERE username='".$username."'");
 $numrows=mysqli_num_rows($query);
if($numrows==0)
   {
	$sql="INSERT INTO user
  (full_name, email, username,password)
	VALUES('$full_name','$email', '$username', '$hpassword')";
  $result=mysqli_query($con,$sql);
 if($result){
	$message = "Аккаунт успешно зарегистрирован!";
} else {
 $message = "Неудалось сохранить данные!";
  }
	} else {
	$message = "Это имя пользователя уже существует! Пожалуйста, попробуйте другой!";
   }
	} else {
	$message = "Все поля обязательны к заполнению!";
	}
	}
	?>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>Регистрация | MorganDusty LOGS++</title>
<link href="./assets/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/jquery.form.js"></script>
</head>

<body><div class="menu"><table width="100%"><tbody><tr><td valign="top" align="left"><script>
	$(document).ready(function()
	{
		$(".menu").on("click", "a[rel!=no]", function()
		{
			//alert($(this).attr("href"));
			document.title = $(this).find("li").text() + " | MorganDusty LOGS++.";
			var url=$(this).attr("href");
			setLocation(url);
			$(".right").load(url + " #content",function(){
				$(".menu ul ul").slideUp();
				});
			
			return false;
		});

		$(".menu").on("click", "a[down]", function(){
			
			var togmenu = $(this).next();
			$(".menu ul ul").not(togmenu).slideUp();
			$(togmenu).slideToggle();
			
			
			return false;
		});

		//fastanswer
		$("#content").on("click", "a[edit=on]", function()
		{
			//alert("#answer" + ($(this).attr("editid")));
			var $answerid =  $("#answer" + ($(this).attr("editid")));
			
			
			$answerid.html("<input type=text value='" + $("#answer" + ($(this).attr("editid"))).text() + "' /><a cancelid='" + $(this).attr("editid") + "' href='' cancel=on>Отмена</a>");
			$(this).attr("edit", "off");
			return false;
		});
		$("#content").on("click", "a[edit=off]", function()
		{
			//alert("ok");
			var editbuttom = $(this);
			var $answerid =  $("#answer" + ($(this).attr("editid")));

			//alert($("#answer" + ($(this).attr("editid")) + " input").val());
			
			$.post("fastanswer.php", {
				id: ($(this).attr("editid")),
				answer: $("#answer" + ($(this).attr("editid")) + " input").val(),
				do: 1
				},
				function(data)
				{
					$(editbuttom).attr("edit", "on");
					//alert("ok" + data);
					$answerid.text(data);
				}
			);
			
			return false;
		});
		$("#content").on("click", "a[cancel=on]", function()
		{
			var $answerid =  $("#answer" + $(this).attr("cancelid"));
			$("#answer" + $(this).attr("cancelid")).text($("#answer" + $(this).attr("cancelid") + " input").attr("value"));
			$("a[editid=" + $(this).attr("cancelid") + "]").attr("edit", "on");
			return false;
		});

		$("#content").on("click", "a[del=on]", function()
		{
			var $buttom = $(this);
			if(confirm("Удалить быстрый ответ? \n Ответ: " + $("#answer" + $(this).attr("delid")).text() ) ) 
			{
				$.post("fastanswer.php", {
					id: ($(this).attr("delid")),
					answer: $("#answer" + ($(this).attr("delid")) + " input").val(),
					do: 2
					},
					function(data)
					{
						//alert(data);
						$("#tr" + $buttom.attr("delid")).detach();
					}
				);
			}
			return false;
		});
	});


	function setLocation(curLoc){
	    try {
	      history.pushState(null, null, curLoc);
	      return;
	    } catch(e) {}
	    location.hash = "#" + curLoc;
	}</script><a></a><ul><a></a><a href="/"><li>Главная</li></a>
	<a href="https://yoursite.com"><li>Сайт</li></a>
	<a href="https://vk.com/dobrov.sergey"><li>Разработчик</li></a></ul></td>
	<td valign="top" align="right"></td><td valign="top" align="right">
	<a href="/register.php" rel="no"><li>Регистрация</li></a>
	<a href="/login.php"><li>Войти</li></a></td></tr></tbody></table></div>
    <div class="right"><div id="content">
    <table width="100%" border="0">
  <tbody>
    <tr>
      <td class="top"><h1>Регистрация</h1></td>
    </tr>
    <tr>
      <td class="middel"><div class="box">
        <div class="boxtitle">Регистрация</div>Заполните регистрационные данные, после чего дождитесь одобрения администратором
	<form action="register " id="registerform" method="post"name="registerform">
	<table width="100%">
	<tr><td>Полное имя</td><td><input type="text" name="full_name"></td></tr>
	<tr><td>Email</td><td><input type="text" name="email"></td></tr>
	<tr><td>Ник</td><td><input type="text" name="username"></td></tr>
	<tr><td>Пароль</td><td><input type="password" name="password"></td></tr>
	</table>
	<input type="submit" id="register" name="register" value="Регистрация"><p><h2><?echo $message; ?></h2>
	</form></div></td>
    </tr>
    <tr>
      <td><center>
@2021 by Morgan Dusty</center></td>
    </tr>
  </tbody>
</table>
</div></div>
</body></html>