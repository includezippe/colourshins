<?php
/**
 * Created by PhpStorm.
 * User: dmitrijdorozkin
 * Date: 06.02.14
 * Time: 22:02
 */

class _index extends Controller {

    function __construct() {

    }

    public function _index() {
        $view = new View();
        $view->generate('index');
    }

}