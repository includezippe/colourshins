<?php

class _category {
	function action_index(){
		$view = new View();
		$content = new Model_category();
		$res = $content->getList();
		$view->generate('category', $res);
	}
}