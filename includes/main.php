<?
    if(!defined("Arizona")) return require_once '../../public/pages/404norule.php';
?>
<?
    $servername = 'YourName';
	// Кол-во серверов
	$servermon = 0;
	
	$nameserver1 = 'Servername1';
	
	
		switch ($url[0])
		{	
		    case 'search':
			{
				if(!empty($_SESSION['account_id']) && $_SESSION['account_logged'] == 'try')
		        {
				    $title = 'Поиск игроков | '.$servername.' Role Play';
				    $page = 'public/pages/search.php';
				    $background = 'headershort';
				    $script = '
<script src="assets/d996e368/yii.js"></script>
<script src="assets/d996e368/yii.validation.js"></script>
<script src="assets/d996e368/yii.captcha.js"></script>
<script src="assets/d996e368/yii.activeForm.js"></script>
<script src="public\js\search.js"></script>';
				}
				else header("Location: /login");
				break;
			}
            case 'addnew':
			{
				if(!empty($_SESSION['account_id']) && $_SESSION['account_logged'] == 'try' && $_SESSION['admin'] == 'true')
		        {
					$title = 'Создание новости | '.$servername.' Role Play';
				    $page = 'public/pages/addnew.php';
				    $background = 'headershort';
				}
				else header("Location: /");
				break;
			}	
			case 'donatelog':
			{
				if(!empty($_SESSION['account_id']) && $_SESSION['account_logged'] == 'try' && $_SESSION['admin'] == 'true')
		        {
		        	require_once('engine/donatelog.php');
					$title = 'Лог доната | '.$servername.' Role Play';
				    $page = 'public/pages/donatelog.php';
				    $background = 'headershort';
				}
				else header("Location: /");
				break;
			}	
			case 'setserver':
			{
				if(!empty($_SESSION['account_id']) && $_SESSION['account_logged'] == 'try' && $_SESSION['admin'] == 'true')
		        {
					$title = 'Настройки сервера | '.$servername.' Role Play';
				    $page = 'public/pages/setserver.php';
				    $background = 'headershort';
				}
				else header("Location: /");
				break;
			}	
			case 'rating':
		    {
			    $title = 'Рейтинг | '.$servername.' Role Play';
				require_once('engine/rating.php');
				$background = 'headershort';
				$page = 'public/pages/rating.php';
				break;
			}
			case 'organization':
		    {
			    $title = 'Организации | '.$servername.' Role Play';
				require_once('engine/organization.php');
				$background = 'headershort';
				$page = 'public/pages/organization.php';
				break;
			}
			case 'serverlog':
		    {
			    $title = 'Логи Сервера | '.$servername.' Role Play';
				require_once('engine/serverlog.php');
				$background = 'headershort';
				$page = 'public/pages/serverlog.php';
				break;
			}
			case 'forum':
		    {
			    $title = 'Форум | '.$servername.' Role Play';
				//require_once('engine/forum.php');
				$background = 'headershort';
				header("Location: https://yourforum.com");
				break;
			}
			case 'restore':
			{
				$title = 'Восстановление доступа | '.$servername.' Role Play';
				$page = 'public/pages/user/restore.php';
				$background = 'headershort';
				$script = '
<script src="assets/d996e368/yii.js"></script>
<script src="assets/d996e368/yii.validation.js"></script>
<script src="assets/d996e368/yii.activeForm.js"></script>
<script src="public\js\restore.js"></script>';
				break;
			}
			case 'howtostart':
			{
				$title = 'Как начать игру | '.$servername.' Role Play';
				$page = 'public/pages/howtostart.php';
				$background = 'header';
				break;
			}
			case 'news':
		    {
			    $title = 'Новости | '.$servername.' Role Play';
				require_once('engine/news.php');
				$background = 'headershort';
				$page = 'public/pages/news.php';
				break;
			}
			case 'nice':
		    {
			    $title = 'Статус оплаты | '.$servername.' Role Play';
				//require_once('engine/nice.php');
				$background = 'headershort';
				$background1 = 'shop';
				$page = 'public/pages/nice.php';
				break;
			}
			case 'view':
		    {
				require_once('engine/view.php');
				$title = ''.$ntitle.' | '.$servername.' Role Play';
				$background = 'headershort';
				$page = 'public/pages/view.php';
				break;
			}
			case 'maps':
			{
				$title = 'Карты штатов | '.$servername.' Role Play';
				$page = 'public/pages/maps.php';
				$background = 'headershort';
				break;
			}
			case 'changepass':
			{
				if(!empty($_SESSION['account_id']) && $_SESSION['account_logged'] == 'try')
		        { 
			        $title = 'Смена пароля | '.$servername.' Role Play';
				    $page = 'public/pages/user/changepass.php';
				    $background = 'header';
		            $background1 = 'login';
					$script = '
<script src="assets/d996e368/yii.js"></script>
<script src="assets/d996e368/yii.validation.js"></script>
<script src="assets/d996e368/yii.captcha.js"></script>
<script src="assets/d996e368/yii.activeForm.js"></script>
<script src="public\js\pass.js"></script>';
			    }
				else header("Location: /login");
				break;
			}
			case 'changecode':
			{
				if(!empty($_SESSION['account_id']) && $_SESSION['account_logged'] == 'try')
		        { 
			        $title = 'Смена секретного кода | '.$servername.' Role Play';
				    $page = 'public/pages/user/changecode.php';
				    $background = 'header';
		            $background1 = 'login';
					$script = '
<script src="assets/d996e368/yii.js"></script>
<script src="assets/d996e368/yii.validation.js"></script>
<script src="assets/d996e368/yii.captcha.js"></script>
<script src="assets/d996e368/yii.activeForm.js"></script>
<script src="public\js\code.js"></script>';
			    }
				else header("Location: /login");
				break;
			}
			case 'auction':
			{
				$title = 'Аукционы | '.$servername.' Role Play';
				$page = 'public/pages/auction.php';
				$background = 'headershort';
				$background1 = 'shop';
				break;
			}
            case 'donate':
            {
			    $title = 'Магазин | '.$servername.' Role Play';
				require_once('engine/donate.php');
				$page = 'public/pages/donate.php';
				$background = 'headershort';
				$background1 = 'shop';
				$script = '
<script src="assets/d996e368/yii.js"></script>
<script src="assets/d996e368/yii.validation.js"></script>
<script src="assets/d996e368/yii.captcha.js"></script>
<script src="assets/d996e368/yii.activeForm.js"></script>';
				break;
			}
            case 'error':
			{
				$title = 'Unknown Property';
				$page = 'public/pages/error.php';
				$background = 'headershort';
				$background1 = 'shop';
				break;
			}			
			case 'fail':
			{
				$title = 'Ошибка оплаты | '.$servername.' Role Play';
				$page = 'public/pages/fail.php';
				$background = 'headershort';
				break;
			}		
			default:
			{
                $title = 'Ошибка #404';
				$background = 'headershort';
				$background1 = 'shop';
				$page = 'public/pages/404.php';
			}
		}	
	}
?>