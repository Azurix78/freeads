<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {


	public function action_index()
	{
		$this->template->title = "Home";
		$this->template->content = View::factory('home')->bind('user', $user);
		
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
	}

}