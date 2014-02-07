<?php

class Model_category extends Model {

	function __construct() {

	}

	public function getCategoryName($cat_id){
		$values = array(
			array(
				'id' => '1',
				'name' => 'Yamaha'
			),
			array(
				'id' => '2',
				'name' => 'Honda'
			)
		);

		$cat_id = $cat_id - 1;

		return $values[$cat_id];
	}


	public function getList(){
		

		return $values;
	}

}