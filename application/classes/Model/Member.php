<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Member extends ORM {
	protected $_rules = array(
		'firstname' => array(
			'not_empty' => NULL,
		),
		'email' => array(
			'not_empty' => NULL,
			'email' => 'email',
		),
	);
}