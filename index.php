<?php
header('Content-type: text/html; Charset=utf-8');
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html>
<head>
<title>Первая страница.</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="/css/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/js/jquery.js"></script>
    <script>
    </script>
</head>
<body onresize="resize()" onload="resize()">
<img src="/img/menu.png" class="menubg">
<div id="menu">
<a href="#" class="links">каталог</a><a href="#" class="links">доставка</a><a href="#" class="links">калькулятор</a><a href="#" class="links">помощь</a></div>
<img src="/img/head.png" class="logo">
<img src="/img/logobg.jpg" id="bg">
<div id="content">
    <?php
    define("Q_PATH",dirname(__FILE__));
    include Q_PATH."/boot.php";

    //require_once("logic/init.class.php");
    //new Init();

    ?>

</div>
</body>
</html>
