<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Member extends ORM {
	public function rules()
	{
		return array(
			'firstname' => array(
				array('not_empty'),
			),
			'email' => array(
				array('not_empty'),
				array('email'),
			),
		);
	}	
}