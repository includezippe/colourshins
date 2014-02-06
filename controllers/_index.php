<?php
/**
 * Created by PhpStorm.
 * User: dmitrijdorozkin
 * Date: 06.02.14
 * Time: 22:02
 */

class Controller_404 extends Controller {

    function __construct() {

    }

    public function Action_index() {
        $view = new View();
        $view->generate('index');
    }

}