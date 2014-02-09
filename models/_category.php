<?php

class Model_category extends Model {

	function __construct() {

	}

	public function issetStore($cat_id){
		$db = new PDO('mysql:host=colourshin.mysql;dbname=colourshin_db', 'colourshin_main', 'hrgmdjnd'); $db->exec('SET NAMES utf8');

		$pRes = $db->query('SELECT COUNT(`id`) FROM `store` WHERE `cat_id` = "'.$cat_id.'"'); $pRes = $pRes->fetchAll();

		$count = intval($pRes[0][0]);

		if($count == 0){
			return false;
		}
		else{
			return true;
		}
	}

	public function getCategoryName($cat_id){
		$db = new PDO('mysql:host=colourshin.mysql;dbname=colourshin_db', 'colourshin_main', 'hrgmdjnd'); $db->exec('SET NAMES utf8');

		$values = $db->query('SELECT * FROM `categories` WHERE `id` = "'.$cat_id.'"'); $values = $values->fetchAll();

		$values = $values[0]['name'];

		return $values;
	}


	public function getList($cat_id, $page){
		$db = new PDO('mysql:host=colourshin.mysql;dbname=colourshin_db', 'colourshin_main', 'hrgmdjnd'); $db->exec('SET NAMES utf8');

		$pRes = $db->query('SELECT COUNT(`id`) FROM `store` WHERE `cat_id` = "'.$cat_id.'"'); $pRes = $pRes->fetchAll();

		$count = intval($pRes[0][0]);

		$values = $db->query('SELECT * FROM `store` WHERE `cat_id` = "'.$cat_id.'"'); $values = $values->fetchAll();

		return $values;
	}

}