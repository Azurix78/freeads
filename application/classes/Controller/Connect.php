<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Connect extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('home')->bind('user', $user);
		$this->template->title = "freeADS - Bienvenue sur freeADS";
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
	}

	public function action_create() 
	{
		$this->template->content = View::factory('connect')
		->bind('errors', $errors)
		->bind('message', $message);
		$this->template->title = "freeADS - Inscription gratuite";
			
		if (HTTP_Request::POST == $this->request->method()) 
		{			
			try {
				// Create the user using form values
				$user = ORM::factory('user')->create_user($this->request->post(), array(
					'username',
					'password',
					'email'				
				));
				// Grant user login role
				$user->add('roles', ORM::factory('role', array('name' => 'login')));
				
				// Reset values so form is not sticky
				$_POST = array();
				
				// Create folder for user
				mkdir('./upload/'.$user->id);

				// Set success message
				Session::instance()->set('success','Inscription réussie');
				$this->redirect('/Connect/login');
				
			} catch (ORM_Validation_Exception $e) {
				
				// Set failure message
				$message = 'Informations invalides.';
				
				// Set errors using custom messages
				$errors = $e->errors('models');
			}
		}
	}
	
	public function action_login()
	{
		$this->template->content = View::factory('login')
		->bind('message', $message);
		$this->template->title = "freeADS - Connectez vous pour acceder au site !";
		

		if (HTTP_Request::POST == $this->request->method()) 
		{
			// Attempt to login user
			
			$user = Auth::instance()->login($this->request->post('username'), $this->request->post('password'), FALSE);
			
			// If successful, redirect user
			if ($user) 
			{
				$this->redirect('/Annonces');
			} 
			else 
			{
				$message = 'Mauvais Logins';
			}
		}
	}
	
	public function action_logout() 
	{
		// Log user out
		Auth::instance()->logout();
		
		// Redirect to login page
		$this->redirect('/Connect/login');
	}

}
?>