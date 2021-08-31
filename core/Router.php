<?php 
//echo $_GET['url'];
// http:21 				contr=site   method=index
// http:21/shop  		contr = shop method=index
// http:21/shop/sports  contr = shop method=sports

namespace core;
//use controllers\SiteController;

class Router{
	public function __construct(){
		$url = isset($_GET['url'])?$_GET['url']:'Site';
        $url = explode("/", $url);  // $url[0]='shop' $url[1]='sports'
		$file = 'controllers/'.$url[0].'Controller.php';
		if(file_exists($file))
		{
			require_once $file;
            $path = 'controllers\\'.$url[0].'Controller';

            $strContr = 'controllers/' . $url[0] . 'Controller'; //'siteController'
            $actionMethod = isset($url[1])?$url[1]:'index';
            $contr = new $path;
			$contr->$actionMethod();	// siteController->users
		}
		else {
			echo 'Страница не найдена';
			
		}

	}
}




