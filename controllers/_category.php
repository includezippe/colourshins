<?php

class _category {
	function action_index(){
		$this->action_page();
	}

	function action_page($page=1){
		$route_array = explode('/', $_SERVER['REQUEST_URI']);
		if(intval($route_array[3]) > 0){
			$page = intval($route_array[3]);
		}

		$view = new View();
		$content = new Model_category();
		$db = new PDO('mysql:host=colourshin.mysql;dbname=colourshin_db', 'colourshin_main', 'hrgmdjnd'); $db->exec('SET NAMES utf8');

		$db->query('SELECT * FROM `store` WHERE `cat_id` = "1"');

		$res = array(
			'page' => $page
		);

		$view->generate('category', $res);

	}
}