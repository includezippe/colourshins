<?php
/**
 * Created by PhpStorm.
 * User: dmitrijdorozkin
 * Date: 06.02.14
 * Time: 21:36
 */

class View {

    function __construct() {

    }

    public function generate($view,$data=array()) {
        include Q_PATH.'/view/main.php';
    }

}