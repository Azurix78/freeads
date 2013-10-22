<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profil extends Controller_Template {


	public function action_index()
	{
		$this->template->title = "Votre profil";
		$this->template->content = View::factory('profil')->bind('user', $user)->bind('errors', $errors)->bind('message', $message);
		
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
	}

	public function action_edit()
	{
		$user = Auth::instance()->get_user();
		$model = Model::factory('user');

		if (HTTP_Request::POST == $this->request->method()) 
		{	
				$validation = Validation::factory($this->request->post());
				$validation
    				->rule('username', 'not_empty')
   					->rule('email', 'not_empty')
   					->rule('email', 'regex', array(':value', '/[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/'));
   				
   				if($this->request->post('email') != $user->email)
   				{
   					$validation->rule('email', array($model, 'unique_email'));
   				}
   				if($this->request->post('username') != $user->username)
   				{
   					$validation->rule('username', array($model, 'unique_username'));
   				}

   				if ($validation->check())
        		{
		            $model = ORM::factory('user');
		            $model->where('username','=',$user->username)->find();
					$model->username = $this->request->post('username');
					$model->email = $this->request->post('email');
					$model->update();
					Session::instance()->set('success','Profil mit à jour.');
					$this->redirect('/Profil/');
		        }
			
			$errors = $validation->errors('user');

			$this->template->title = "Votre profil";
			$this->template->content = View::factory('profil')->bind('user', $user)->bind('errors', $errors)->bind('message', $message);
		}
		else
		{
			$this->redirect('/Profil');
		}
	}

	public function action_password()
	{
		$user = Auth::instance()->get_user();

		if (HTTP_Request::POST == $this->request->method()) 
		{	
				$validation = Validation::factory($this->request->post());
				$validation
    				->rule('password', 'not_empty')
    				->rule('password', 'min_length', array(':value', '6'))
   					->rule('old', 'not_empty')
   					->rule('old', 'min_length', array(':value', '6'));
   				if ($validation->check())
        		{
   					if(Auth::instance()->hash($this->request->post('old')) == $user->password)
   					{
   						$model = ORM::factory('user');
		            	$model->where('username','=',$user->username)->find();
						$model->password = $this->request->post('password');
						$model->update();
						Session::instance()->set('success','Votre password a été modifié.');
						$this->redirect('/Profil/');
   					}


						$message = 'Mauvais password';
   				}

   			$errors = $validation->errors('user');

			$this->template->title = "Votre profil";
			$this->template->content = View::factory('profil')->bind('user', $user)->bind('errors', $errors)->bind('message', $message);
		}
		else
		{
			$this->redirect('/Profil');
		}
	}

}