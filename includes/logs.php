<?php
require("con_logs.php");

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_errno()) {
    printf("Ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}
mysqli_select_db(DB_NAME);
mysqli_query("SET character_set_results = utf8"); 
mysqli_query("SET NAMES 'utf8'");
	
	?>