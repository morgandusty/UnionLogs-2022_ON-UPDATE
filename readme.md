<!-- 
           ___  __    ___   _        __      ___       __  _____      
  /\/\    /___\/__\  / _ \ /_\    /\ \ \    /   \/\ /\/ _\/__   \/\_/\
 /    \  //  // \// / /_\///_\\  /  \/ /   / /\ / / \ \ \   / /\/\_ _/
/ /\/\ \/ \_// _  \/ /_\\/  _  \/ /\  /   / /_//\ \_/ /\ \ / /    / \ 
\/    \/\___/\/ \_/\____/\_/ \_/\_\ \/   /___,'  \___/\__/ \/     \_/  -->

# НАПИСАЛ И ДОРАБОТАЛ https://vk.com/dobrov.sergey
## база test.sql включает в себя "логин и пароль" - test
### регистрация отключается через register.php 
#### замените <?php
####	// header("location: /");
####	if(isset($_POST["register"])){
## на
#### <?php
####	header("location: /");
####	if(isset($_POST["register"])){

# ПОСЛЕ СОЗДАНИЯ АККАУНТА НА САЙТЕ В БАЗЕ ДАННЫХ В ПОЛЕ "ADMIN" СТАВИМ 1 ДЛЯ РАЗРЕШЕНИЕ ВХОДА И 0 ДЛЯ ЗАПРЕТА!!!
