<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Mesannonces extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('mesannonces')
		->bind('user', $user)
		->bind('message', $message)
		->bind('mesannonces', $mesannonces);
		$this->template->title = "freeADS - Gerez, creez vos annonces";
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$mesannonces = DB::select('annonces.*', 'users.username', 'users.email')
		->from('annonces')
		->join('users', 'RIGHT')
		->on('annonces.id_user', '=', 'users.id')
		->where('annonces.id_user', '=', $user->id)
		->where('annonces.etat','=',0)
		->order_by('date','desc')
		->as_object()
		->execute();

		if(count($mesannonces) == 0){ $mesannonces = FALSE; }
	}

	public function action_new()
	{
		$this->template->content = View::factory('newannonce')
		->bind('user', $user)
		->bind('message', $message)
		->bind('dept', $dept)
		->bind('categorie', $categorie)
		->bind('errors', $errors);
		$this->template->title = "freeADS - Crez votre annonce !";
		// Load the user information
		$user = Auth::instance()->get_user();
		$dept = ORM::factory('depart')->find_all();
		$categorie = ORM::factory('categorie')->find_all();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
	}

	public function action_post()
	{
		$this->template->content = View::factory('newannonce')
		->bind('user', $user)
		->bind('dept', $dept)
		->bind('categorie', $categorie)
		->bind('errors', $errors)
		->bind('message', $message);
		$this->template->title = "freeADS - Crez votre annonce !";
		// Load the user information
		$user = Auth::instance()->get_user();
		$dept = ORM::factory('depart')->find_all();
		$categorie = ORM::factory('categorie')->find_all();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if (HTTP_Request::POST == $this->request->method()) 
		{	
			$validation = Validation::factory($this->request->post());
			$validation
			->rule('title', 'not_empty')
			->rule('categorie', 'not_empty')
			->rule('location', 'not_empty')
			->rule('content', 'not_empty')
			->rule('prix', 'not_empty');
			if ($validation->check())
			{
				$check_d = ORM::factory('depart')->where('name', '=', $this->request->post('location'))->find();
				$check_c = ORM::factory('categorie')->where('name', '=', $this->request->post('categorie'))->find();

				if ($check_d->loaded() AND $check_c->loaded())
				{
					if($filename = $this->_save_image($_FILES['photo'], $user->id))
					{
						$annonce = ORM::factory('annonce');
						$annonce->id_user = $user->id;
						$annonce->title = $this->request->post('title');
						$annonce->categorie = $this->request->post('categorie');
						$annonce->location = $this->request->post('location');
						$annonce->content = $this->request->post('content');
						$annonce->price = $this->request->post('prix');
						$annonce->etat = 0;
						$annonce->picture = $filename;
						$annonce->save();
						Session::instance()->set('success','Annonce publiée');
						$this->redirect('/Mesannonces');

					}
					else
					{
						$message = "Photo invalide";
					}

				}

				$message = "informations invalides";
			}
			$errors = $validation->errors('user');
		}
		else
		{
			$this->redirect('/Mesannonces/new');
		}


	}

	public function action_edit()
	{
		$this->template->content = View::factory('editannonce')
		->bind('user', $user)
		->bind('errors', $errors)
		->bind('message', $message)
		->bind('dept', $dept)
		->bind('categorie', $categorie)
		->bind('annonce', $annonce);
		$this->template->title = "freeADS - Modifier votre annonce";
		// Load the user information
		$user = Auth::instance()->get_user();
		$dept = ORM::factory('depart')->find_all();
		$categorie = ORM::factory('categorie')->find_all();

		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Mesannonces');
		}

		$annonce = DB::select('annonces.*', 'users.username', 'users.email')
		->from('annonces')
		->join('users', 'RIGHT')
		->on('annonces.id_user', '=', 'users.id')
		->where('annonces.id_user', '=', $user->id)
		->where('annonces.id','=',$id)
		->as_object()
		->execute();

		if( count($annonce)==0)
		{
			$this->redirect('/Mesannonces');
		}

	}

	public function action_change()
	{
		$this->template->content = View::factory('editannonce')
		->bind('user', $user)
		->bind('errors', $errors)
		->bind('message', $message)
		->bind('dept', $dept)
		->bind('categorie', $categorie)
		->bind('annonce', $annonce);
		$this->template->title = "freeADS - Modifier votre annonce";
		// Load the user information
		$user = Auth::instance()->get_user();
		$dept = ORM::factory('depart')->find_all();
		$categorie = ORM::factory('categorie')->find_all();

		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Annonces');
		}

		$annonce = DB::select('annonces.*', 'users.username', 'users.email')
		->from('annonces')
		->join('users', 'RIGHT')
		->on('annonces.id_user', '=', 'users.id')
		->where('annonces.id_user', '=', $user->id)
		->where('annonces.id','=',$id)
		->as_object()
		->execute();

		if( count($annonce)==0)
		{
			$this->redirect('/Mesannonces');
		}

		if (HTTP_Request::POST == $this->request->method()) 
		{	
			$validation = Validation::factory($this->request->post());
			$validation
			->rule('title', 'not_empty')
			->rule('categorie', 'not_empty')
			->rule('location', 'not_empty')
			->rule('content', 'not_empty')
			->rule('prix', 'not_empty');
			if ($validation->check())
			{
				$check_d = ORM::factory('depart')->where('name', '=', $this->request->post('location'))->find();
				$check_c = ORM::factory('categorie')->where('name', '=', $this->request->post('categorie'))->find();

				if ($check_d->loaded() AND $check_c->loaded())
				{
					$change = ORM::factory('annonce')->where('id', '=', $id)->find();
					$change->id_user = $user->id;
					$change->title = $this->request->post('title');
					$change->categorie = $this->request->post('categorie');
					$change->location = $this->request->post('location');
					$change->content = $this->request->post('content');
					$change->price = $this->request->post('prix');
					$change->etat = 0;

					if(!empty($_FILES['photo']['name']))
					{
						if($filename = $this->_save_image($_FILES['photo'], $user->id))
						{
							unlink(DOCROOT.'upload/'.$user->id.'/'.$change->picture);
							$change->picture = $filename;
						}
						else
						{
							$message = "Photo invalide";
						}
					}

					if( $message != "Photo invalide")
					{
						$change->update();
						Session::instance()->set('success','Annonce modifiée');
						$this->redirect('/Mesannonces');
					}
				}
			}

			$message = "informations ou Photo invalides";
			$errors = $validation->errors('user');
		}

	}

	public function action_del()
	{
		$user = Auth::instance()->get_user();
		$dept = ORM::factory('depart')->find_all();
		$categorie = ORM::factory('categorie')->find_all();

		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Mesannonces');
		}

		$check_a = ORM::factory('annonce')->where('id','=',$id)->where('id_user','=',$user->id)->find();
		if($check_a->loaded())
		{
			$check_a->etat = 2;
			$check_a->update();
			Session::instance()->set('success','Annonce supprimée');
			$this->redirect('/Mesannonces');
		}
	}

	protected function _save_image($image,$id)
	{
		if (
			! Upload::valid($image) OR
			! Upload::not_empty($image)
			)
		{
			return FALSE;
		}

		$directory = DOCROOT.'upload/'.$id;
		$filename = strtolower(Text::random('alnum', 20));
		if ($file = Upload::save($image, $filename, $directory))
		{
			return $filename;
		}

		return FALSE;
	}
}
