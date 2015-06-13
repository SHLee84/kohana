<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contest extends Controller {

	// localhost/kohana/contest/
	public function action_index()
	{
		$member = ORM::factory('Member')->find_all();
		$view = View::factory('contest/all')->set("members", $member);
		$this->response->body($view);
	}

	// localhost/kohana/contest/details/{id}
	public function action_details()
	{
		$id = $this->request->param('id');
		
		if ($_POST)
		{

			$post_data = $_POST;
			$view = View::factory('contest/entry');

			// check for duplicate
			$member = ORM::factory('Member')
				->where('email', '=', $post_data["email"])
				->find();

			if ($member->loaded())
			{
				$view->set("errors", array("email" => "Email already exists"));
				if (isset($post_data["id"]))
				{
					$view->set("id", $post_data["id"]);
				}
				$view->set("firstname", $post_data["firstname"]);
				$view->set("email", $post_data["email"]);
			}
			else
			{
				// Create/Update operation

				// if id value is known, do update. create new otherwise.
				$member = (isset($post_data["id"])) ? 
					ORM::factory('Member', $post_data["id"]) : 
					ORM::factory('Member');
				$member->firstname = $post_data["firstname"];
				$member->email = $post_data["email"];

				try
				{
					$member->save();
				}
				catch (ORM_Validation_Exception $e)
				{
					$view->set("errors", $e->errors('Member'));
				}
				// when save is successful, redirect to edit page
				$this->redirect(Route::get('default')->uri(array(
					'controller'	=> 'contest',
					'action'		=> 'details',
					'id'			=> $member->id,
				)));
			}
		}
		else if (isset($id))
		{
			// Read operation
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
				// if there is no Member is found with the id, send to add new
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