<?php

class _category {
	function action_index(){
		$cat_id = 1;
		$page = 1;

		$route_array = explode('/', $_SERVER['REQUEST_URI']);
		if(intval($route_array[2]) > 0){
			$cat_id = intval($route_array[2]);
		}
		if(intval($route_array[3]) > 0){
			$page = intval($route_array[3]);
		}

		$view = new View();
		$content = new Model_category();

		if($content->issetStore($cat_id)){
			$list = $content->getList($cat_id, $page);

			$cat_name = $content->getCategoryName($cat_id);

			$num_pages = $content->getNumPages($cat_id);

			$res = array(
				'list' => $list,
				'cat_name' => $cat_name,
				'cat_id' => $cat_id,
				'page' => $page,
				'num_pages' => $num_pages
			);

			$view->generate('category', $res);
		}
		else{
			header('Location: /404');
		}
		
	}

}