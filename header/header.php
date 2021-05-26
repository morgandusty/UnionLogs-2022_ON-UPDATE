<?php 
require_once("includes/logs.php");
?>
<div class="menu"><table width="100%"><tr><td><ul>
<a href=logsindex.php><li>Главная</li></a>
<a href=logsall.php><li>Все логи</li></a>
<a href=logsdbtype1.php><li>Логи домов</li></a>
<a href=logsdbtype2.php><li>Логи бизнесов</li></a>
<a href=logsdbtype3.php><li>Логи авто</li></a>
<a href=logsdbtype4.php><li>Логи администрации</li></a>
<a href=logsdbtype5.php><li>Логи денег</li></a>
<a href=logsdbtype6.php><li>Логи чата</li></a>
<a href=admins.php><li>Админы</li></a>
<a href=leaders.php><li>Лидеры</li></a>
<a href=logsdb.php><li>Поиск в бд сервера</li></a></script>
<a><ul><td valign="top" align="right"></td><td valign="top" align="right">
<a href rel=no><li><a href=/logsaccount?name=<?php echo $_SESSION['session_username'];?>><?php echo $_SESSION['session_username'];?></a></li></a>
<a href=logout.php><li>Выйти</li></a></td></tr></table></div>