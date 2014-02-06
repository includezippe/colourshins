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

		return $values[$cat_id];
	}

	public function getList(){
		$values = array(
			array(
				'id' => '1',
				'cat_id' => '1',
				'name' => 'GT-I9003',
				'caliber' => '177mm'
			),
			array(
				'id' => '2',
				'cat_id' => '2',
				'name' => 'BH-F233',
				'caliber' => '181mm'
			),
			array(
				'id' => '3',
				'cat_id' => '2',
				'name' => 'BN-G965',
				'caliber' => '189mm'
			),
			array(
				'id' => '4',
				'cat_id' => '1',
				'name' => 'GT-Y7500',
				'caliber' => '165mm'
			)
		);

		return $values;
	}

}