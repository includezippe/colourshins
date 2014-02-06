<?php
/**
 * Created by PhpStorm.
 * User: dmitrijdorozkin
 * Date: 06.02.14
 * Time: 21:54
 */

class _404 extends Controller {

    function __construct() {

    }

    public function Action_index() {
        $view = new View();
        $view->generate('404');
    }

}