<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Messagerie extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('messagerie')->bind('user', $user)->bind('message', $message);;
		$this->template->title = "freeADS - Utilisez notre système de messagerie avancée";
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
	}
}
