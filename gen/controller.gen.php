<?php 
	$pg = (isset($_GET['pg']))? $_GET['pg']: 'home';
	$pcId = $_SERVER['HTTP_USER_AGENT'];
if(isset($_SESSION['id'])){
	$user =new user($_SESSION['id']);
	if($user->getsession_ID()==session_id()){
		$logged = true;	
		$Uid = $_SESSION['id'];
	}else{
		$logged = false;
	}
}else{
	$logged = false;
}
			//previous page checker
            $prev = isset($_COOKIE['prev'])? $_COOKIE['prev']:"";
            $cur = isset($_COOKIE['cur'])? $_COOKIE['cur']:"";
		if ($pg!='out'&&$pg!='log'&&$pg!='action') {
            $prev = ($cur==$pg)? $prev:$cur;
            $cur = ($cur==$pg)? $cur:$pg;
            setcookie('prev', $prev , time() + (86400 * 30), "/");
            setcookie('cur', $cur, time() + (86400 * 30), "/");
        }
$temp = './inc/index.inc.php';
switch ($pg) {
	case 'home':
		$page = './inc/home.inc.php';
		if(isset($_POST['search']))
			$page = 'inc/space.inc.php';
		break;
	case 'terms':
		$page = './inc/terms.inc.php';
		break;
	case 'about':
		$page = './inc/about-contact.inc.php';
		break;
	case 'search':
		$page = './inc/search.inc.php';
		break;
	case 'login':
		$page = './inc/login.inc.php';
		break;
	case 'signup':
		$n = (isset($_GET['n']))? $_GET['n']:'email';
		switch ($n) {
    		case 'Step-1':
				$page = './vws/signup-01.vws.php';
       		break;
    		case 'Step-2':
				$page = './vws/signup-02.vws.php';
       		break;
    		case 'Step-3':
				$page = './vws/signup-03.vws.php';
       		break;
    		default:
				$page = './vws/signup-01.vws.php';
        	break;
		}
		break;
	case 'efie':
		$page = './inc/host-efie.inc.php';
		break;
	case 'workspace':
		$page = './inc/host-workspace.inc.php';
		break;
	case 'book':
		$tp = isset($tp)? 'efie':'workspace';
		$page = './inc/book-'.$tp.'.inc.php';
		break;
	case 'dashboard':
		$page = './inc/dashboard.inc.php';
		break;
	case 'view':
		$page = './inc/view-efie.inc.php';
		break;
	case 'book':
		$page = './inc/book-efie.inc.php';
		break;
	case 'profile':
		$page = './inc/profile.inc.php';
		break;
	case 'out':
		$temp = './gen/signout.gen.php';
		break;
	case 'log':
		$temp = './gen/login.gen.php';
		break;
	case 'action':
		$temp = './gen/action.gen.php';
		break;
	case 'q':
		$page = './vws/spaceitem.vws.php';
		break;
	default:
		$page = './inc/home.inc.php';
		break;
}
 ?>