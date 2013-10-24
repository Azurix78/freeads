<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Messagerie extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('messagerie')
		->bind('user', $user)
		->bind('message', $message)
		->bind('messages', $messages)
		->bind('errors', $errors);
		$this->template->title = "freeADS - Utilisez notre système de messagerie avancée";
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$messages = ORM::factory('message')->where('etat_rec','<',2)->where('id_rec','=',$user->id)->order_by('date','desc')->find_all();
		$errors = "Vous n'avez pas de message.";

		if(count($messages) == 0)
		{
			$messages = FALSE;
		}
	}

	public function action_sended()
	{
		$this->template->content = View::factory('messagerie')
		->bind('user', $user)
		->bind('message', $message)
		->bind('messages', $messages)
		->bind('errors', $errors);
		$this->template->title = "freeADS - Utilisez notre système de messagerie avancée";
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$messages = ORM::factory('message')->where('id_sender','=',$user->id)->order_by('date','desc')->find_all();
		$errors = "Vous n'avez pas envoyé de message.";

		if(count($messages) == 0)
		{
			$messages = FALSE;
		}
	}

	public function action_deleted()
	{
		$this->template->content = View::factory('messagerie')
		->bind('user', $user)
		->bind('message', $message)
		->bind('messages', $messages)
		->bind('errors', $errors);
		$this->template->title = "freeADS - Utilisez notre système de messagerie avancée";
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$messages = ORM::factory('message')->where('id_rec','=',$user->id)->where('etat_rec','=',2)->order_by('date','desc')->find_all();
		$errors = "Vous n'avez pas de message dans votre corbeille.";

		if(count($messages) == 0)
		{
			$messages = FALSE;
		}
	}

	public function action_new()
	{
		$this->template->content = View::factory('newmessage')
		->bind('user', $user)
		->bind('message', $message)
		->bind('errors',$errors)
		->bind('annonce', $annonce);
		$this->template->title = "freeADS - Utilisez notre système de messagerie avancée";
		// Load the user information
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Annonces');
		}

		$annonce = ORM::factory('annonce')->where('id','=',$id)->find();
		if( ! $annonce->loaded())
		{
			$this->redirect('/Annonces');
		}
	}

	public function action_send()
	{
		$this->template->content = View::factory('newmessage')
		->bind('user', $user)
		->bind('message', $message)
		->bind('errors',$errors);
		$this->template->title = "freeADS - Utilisez notre système de messagerie avancée";
		// Load the user information
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Mesannonces');
		}

		if (HTTP_Request::POST == $this->request->method()) 
		{	
			$validation = Validation::factory($this->request->post());
			$validation
			->rule('title', 'not_empty')
			->rule('content', 'not_empty');
			if ($validation->check())
			{
				$annonce = ORM::factory('annonce')->where('id','=',$id)->find();
				if ($annonce->loaded())
				{
					$messages = ORM::factory('message');
					$messages->id_sender = $user->id;
					$messages->id_rec = $annonce->id_user;
					$messages->id_annonce = $annonce->id;
					$messages->title = $this->request->post('title');
					$messages->message = $this->request->post('content');
					$messages->etat_rec = 0;
					$messages->etat_sender = 0;
					$messages->save();
					Session::instance()->set('success','Message envoyé');
					$this->redirect('/Annonces/lire/'.$id);
				}
				$message = "informations invalides";
			}
			$errors = $validation->errors('user');
		}
		else
		{
			$this->redirect('/Annonces/');
		}
	}

	public function action_lire()
	{
		$this->template->content = View::factory('message')
		->bind('user', $user)
		->bind('message', $message)
		->bind('messages',$messages)
		->bind('users',$users)
		->bind('annonce',$annonce)
		->bind('errors', $errors);
		$this->template->title = "freeADS - Utilisez notre système de messagerie avancée";
		// Load the user information
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Messagerie');
		}

		$messages = ORM::factory('message')->where('id','=',$id)->find();
		if ( ! $messages->loaded())
		{
			$this->redirect('/Messagerie');
		}
		if($user->id == $messages->id_rec)
		{
			if($messages->etat_rec == 0)
			{
				$messages->etat_rec = 1;
				$messages->update();
			}
		}
		$annonce = ORM::factory('annonce')->where('id','=',$messages->id_annonce)->find();
		$users = ORM::factory('user')->where('id','=',$messages->id_sender)->find();
	}

	public function action_del()
	{
		$user = Auth::instance()->get_user();
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Messagerie');
		}

		$messages = ORM::factory('message')->where('id_rec', '=' , $user->id)->where('id','=',$id)->find();
		if($messages->loaded())
		{
			if($messages->etat_rec != 2)
			{
				if($user->id == $messages->id_sender)
				{
					$messages->etat_sender = 2;
					$messages->update();
					Session::instance()->set('success','Message mit dans la corbeille');
					$this->redirect('/Messagerie');
				}
				else
				{
					$messages->etat_rec = 2;
					$messages->update();
					Session::instance()->set('success','Message mit dans la corbeille');
					$this->redirect('/Messagerie');
				}
			}
			else
			{
				if($user->id == $messages->id_sender)
				{
					$messages->etat_sender = 9;
				}
				else
				{
					$messages->etat_rec = 9;
				}

				$messages->update();
				Session::instance()->set('success','Message supprimé');
				$this->redirect('/Messagerie');
			}
		}
		else
		{
			$this->redirect('/Messagerie');
		}
	}

	public function action_reply()
	{
		$this->template->content = View::factory('message')
		->bind('user', $user)
		->bind('message', $message)
		->bind('messages',$messages)
		->bind('users',$users)
		->bind('annonce',$annonce)
		->bind('errors', $errors);
		$this->template->title = "freeADS - Utilisez notre système de messagerie avancée";
		$user = Auth::instance()->get_user();

		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Messagerie');
		}

		if (HTTP_Request::POST == $this->request->method()) 
		{	
			$validation = Validation::factory($this->request->post());
			$validation
			->rule('reply', 'not_empty');

			$messages = ORM::factory('message')->where('id','=',$id)->find();
			if ($validation->check())
			{
				if ($messages->loaded())
				{
					$reply = ORM::factory('message');
					$reply->etat_sender = 0;
					$reply->etat_rec = 0;
					$reply->title = "RE : ".$messages->title;
					$reply->message = $this->request->post('reply');
					$reply->id_rec = $messages->id_sender;
					$reply->id_sender = $user->id;
					$reply->id_annonce = $messages->id;
					$reply->save();

					Session::instance()->set('success','Réponse envoyée');
					$this->redirect('/Messagerie');
				}
				$message = "informations invalides";
			}

			$annonce = ORM::factory('annonce')->where('id','=',$messages->id_annonce)->find();
			$users = ORM::factory('user')->where('id','=',$messages->id_sender)->find();
			$errors = $validation->errors('user');
		}
		else
		{
			$this->redirect('/Annonces/');
		}
	}
}
