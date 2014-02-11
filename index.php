<?php

    header('Content-type: text/html; Charset=utf-8');

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    define("Q_PATH", dirname(__FILE__));
    define('WWW', $_SERVER['SERVER_NAME']);

    include Q_PATH."/boot.php";

