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

        if(!empty($route_array[2])) {
            $action_name = $route_array[2];
        }

        $model_name = 'Model_' . $controller_name;
        $controller_name = 'Controller_' . $controller_name;
        $action_name = 'Action_' . $action_name;

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
        $controller->$action_name();
    }

}
