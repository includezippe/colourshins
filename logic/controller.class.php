<?php
/**
 * Created by PhpStorm.
 * User: dmitrijdorozkin
 * Date: 06.02.14
 * Time: 21:36
 */

class Controller {

    function __construct() {

    }

    public function Action_index() {
        $model = new Model_index();
        $view = new View();
        $view->generate('index', $model->getName());
    }

}