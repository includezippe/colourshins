<?php
/**
 * Created by PhpStorm.
 * User: dmitrijdorozkin
 * Date: 06.02.14
 * Time: 21:36
 */

class Model {
    public $_db;

    function __construct() {
        $this->_db = new PDO('mysql:host=colourshin.mysql;dbname=colourshin_db', 'colourshin_main', 'hrgmdjnd'); $this->_db->exec('SET NAMES utf8');
    }

}