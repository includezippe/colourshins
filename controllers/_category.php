<?php

class _category {
	function action_index(){
		$view = new View();
		$content = new Model_category();

		$res = $content->getList();

		foreach ($res as $key => $value) {
			$cat_id = $value['cat_id'];
			$cat_name = $content->getCategoryName($cat_id);
			array_push($res[$key], $cat_name);
		}


		$view->generate('category', $res);
	}

	function action_filter(){
		
	}
}