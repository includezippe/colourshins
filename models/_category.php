<?php

class Model_category extends Model {
	private $subjects_on_page = 5;

	function __construct() {

	}

	/**
	 * Возвращает истину если категория сущетсвует, и на оборот
	 * @return boolean
	 */

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

	/**
	 * Возвращает имя катеории по id
	 * @return string
	 */

	public function getCategoryName($cat_id){
		$db = new PDO('mysql:host=colourshin.mysql;dbname=colourshin_db', 'colourshin_main', 'hrgmdjnd'); $db->exec('SET NAMES utf8');

		$values = $db->query('SELECT * FROM `categories` WHERE `id` = "'.$cat_id.'"'); $values = $values->fetchAll();

		$values = $values[0]['name'];

		return $values;
	}

	/**
	 * Возвращает массив товаров
	 * @return array
	 */

	public function getList($cat_id, $page){
		$db = new PDO('mysql:host=colourshin.mysql;dbname=colourshin_db', 'colourshin_main', 'hrgmdjnd'); $db->exec('SET NAMES utf8');

		$pRes = $db->query('SELECT COUNT(`id`) FROM `store` WHERE `cat_id` = "'.$cat_id.'"'); $pRes = $pRes->fetchAll();

		$count = intval($pRes[0][0]);

		$num_pages = ceil($count / $this->subjects_on_page);

		//Если страница больше чем максимальная, то она равна максимальной
		if($page > $num_pages) $page = $num_pages;

		//С чего начинать отсчет
		$start = ($page - 1) * $this->subjects_on_page;

		$values = $db->query('SELECT * FROM `store` WHERE `cat_id` = "'.$cat_id.'"  ORDER BY `id` DESC LIMIT '.$start.','.$this->subjects_on_page); 
		$values = $values->fetchAll();

		return $values;
	}

	/**
	 * Возвращает кол-во страниц для категории
	 * @return int
	 */

	public function getNumPages($cat_id){
		$db = new PDO('mysql:host=colourshin.mysql;dbname=colourshin_db', 'colourshin_main', 'hrgmdjnd'); $db->exec('SET NAMES utf8');

		$pRes = $db->query('SELECT COUNT(`id`) FROM `store` WHERE `cat_id` = "'.$cat_id.'"'); $pRes = $pRes->fetchAll();

		$count = intval($pRes[0][0]);

		$num_pages = ceil($count / $this->subjects_on_page);

		return $num_pages;
	}

}