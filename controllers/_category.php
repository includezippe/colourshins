<?php

class _category extends Controller {
	function action_index(){
		$cat_id = 1;
		$page = 1;
		$season = false;


		$view = new View();
		$content = new Model_category();

		if($content->issetStore($cat_id, $season)){
			$list = $content->getList($cat_id, $page, $season);

			$cat_name = $content->getCategoryName($cat_id);

			$num_pages = $content->getNumPages($cat_id, $season);

			$res = array(
				'list' => $list,
				'cat_name' => $cat_name,
				'cat_id' => $cat_id,
				'page' => $page,
				'num_pages' => $num_pages,
				'season' => $season
			);

			$view->generate('category', $res);
		}
		else{
			header('Location: /404');
		}
		
	}

}