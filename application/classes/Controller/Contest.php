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
		
		if ($_POST)
		{
			$view = View::factory('contest/entry');
			$post_data = $_POST;

			$member = (isset($post_data["id"])) ? 
				ORM::factory('Member', $post_data["id"]) : ORM::factory('Member');
			$member->firstname = $post_data["firstname"];
			$member->email = $post_data["email"];

			try
			{
				$member->save();
			}
			catch (ORM_Validation_Exception $e)
			{
				$errors = $e->errors('Member');
				$view->set("errors", $errors);
			}
			$this->redirect(Route::get('default')->uri(array(
				'controller'	=> 'contest',
				'action'		=> 'details',
				'id'			=> $member->id,
			)));
		}
		else if (isset($id))
		{
			$member = ORM::factory('Member', $id);
			if ($member->loaded())
			{
				$view = View::factory('contest/entry');
				$view->set("id", $id);
				$view->set("firstname", $member->firstname);
				$view->set("email", $member->email);
			}
			else
			{
				$this->redirect(Route::get('default')->uri(array(
						'controller'	=> 'contest',
						'action'		=> 'details',
				)));
			}
		} 
		else
		{
			$view = View::factory('contest/entry');
		}
		$this->response->body($view);
	}
}