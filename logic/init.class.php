<?php
class Init {
    private function _getPages() {
        $url = !isset($_GET['url']) ? "main" : $_GET['url'];
        $url = rtrim($url,"/");
        $url = explode("/",$url);
        return $url;
    }

    function __construct() {
        session_start();
       // isset($_SESSION['cart']) ? ;
        $url = $this->_getPages();
        switch($url[0]) {
            case "main":
            case "news":

                break;
            case "cats":

                break;
            case "static":

                break;
            case "order":
                break;
            default:
                include("./view/404.php");
        }
    }

    function addToCart($id){
        if(isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id]++;
            return true;
        } else {
            $_SESSION['cart'][$id] = 1;
            return true;
        }
    }

}

?>