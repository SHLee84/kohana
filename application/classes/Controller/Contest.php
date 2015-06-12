<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contest extends Controller {

	public function action_index()
	{
		$view = View::factory('contest/all');
		$this->response->body($view);
	}

	public function action_details()
	{

		/*
		 * Adding
		 * 
		$member = ORM::factory('Member');
		$member->firstname = "Test";
		$member->email = "test@test.com";

		try
		{
			$member->save();
		}
		catch (ORM_Validation_Exception $e)
		{
		$errors = $e->errors('Member');
		}

		*/

		/*
		 * Edit
		 *
		$member = ORM::factory('Member', 10);
		if ($member->loaded())
		{
			$member->firstname = 'New Name';
			$member->email = 'new_test@test.com';
			try
			{
				$member->save();
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors('Member');
			}			
		}
		*/
		$text = $this->request->param('
			id');
		$view = View::factory('contest/entry')->set('content', $text);
		$this->response->body($view);
	}
}