<?php
require("constants.php");
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if (mysqli_connect_errno()) {
    printf("Ошибка подключения: %s\n", mysqli_connect_error());
    exit();
}
mysqli_select_db(DB_NAME);
	?>