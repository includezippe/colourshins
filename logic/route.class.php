<?php
/**
 * Created by PhpStorm.
 * User: dmitrijdorozkin
 * Date: 06.02.14
 * Time: 21:36
 */
class Route {
	function __construct() {

	}

	public static function Start() {
		$controller_name = 'index';
		$action_name = 'index';
	    $action_parameters = array();


		$route_array = explode('/', $_SERVER['REQUEST_URI']);

		if(!empty($route_array[1])) {
			$controller_name = $route_array[1];
		}

        if(isset($route_array[2]) and (intval($route_array[2]) > 0)){
            $cat_id = intval($route_array[2]);
        }

        if(isset($route_array[3]) and (intval($route_array[3]) > 0)){
            $page = intval($route_array[3]);
        }

        if(isset($route_array[4]) && $route_array[4] != ''){
            $season =  mysql_real_escape_string($route_array[4]);
        }

		$model_name = '_' . $controller_name;
		$controller_name = '_' . $controller_name;
		$action_name = 'action_' . $action_name;



		if(file_exists(Q_PATH.'/models/'.$model_name.'.php')) {
			include Q_PATH.'/models/'.$model_name.'.php';
		}

		if(file_exists(Q_PATH.'/controllers/'.$controller_name.'.php')) {
			include Q_PATH.'/controllers/'.$controller_name.'.php';
		}
		else {
			header('Location: /404');
			exit;
		}

		$controller = new $controller_name();
		
		if(method_exists($controller, $action_name)){
			$controller->$action_name();
		}
		else{
			$action_name = 'action_index';
			$controller->$action_name();
		}
		
	}

}
