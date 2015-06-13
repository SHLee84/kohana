<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contest extends Controller {

	public function action_index()
	{
		$member = ORM::factory('Member')->find_all();
		$view = View::factory('contest/all')->set("members", $member);
		$this->response->body($view);
	}

	public function action_details()
	{
		$id = $this->request->param('id');
		$view = View::factory('contest/entry');
		
		if ($_POST)
		{
			$post_data = $_POST;
			if (isset($post_data["id"]))
			{
				$member = ORM::factory('Member', $post_data["id"]);
			}
			else
			{
				$member = ORM::factory('Member');
			}
			$member->firstname = $post_data["firstname"];
			$member->email = $post_data["email"];

			try
			{
				$member->save();
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors('Member');
			}
		}
		else if (isset($id))
		{
			$member = ORM::factory('Member', $id);
			if ($member->loaded())
			{
				$view->set("id", $id);
				$view->set("firstname", $member->firstname);
				$view->set("email", $member->email);	
			}
		} 
		else
		{
			$view = View::factory('contest/entry');
		}
		$this->response->body($view);
	}
}