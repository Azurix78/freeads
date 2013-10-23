<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Annonces extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('annonces')
		->bind('user', $user)
		->bind('message', $message)
		->bind('dept', $dept)
		->bind('categorie', $categorie)
		->bind('errors', $errors)
		->bind('annonces', $annonces);

		$this->template->title = "freeADS - Consultez plus de 10 000 petites annonces";
		// Load the user information
		$user = Auth::instance()->get_user();
		$dept = ORM::factory('depart')->find_all();
		$categorie = ORM::factory('categorie')->find_all();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$annonces = DB::select('annonces.*', 'users.username', 'users.email')
        ->from('annonces')
        ->join('users', 'RIGHT')
        ->on('annonces.id_user', '=', 'users.id')
        ->where('annonces.etat', '=', 0)
        ->order_by('date', 'desc')
        ->as_object()
        ->execute();

        if(count($annonces) == 0){ $annonces = FALSE; }
	}

	public function action_lire()
	{
		$this->template->content = View::factory('annonce')
		->bind('user', $user)
		->bind('categorie', $categorie)
		->bind('annonce', $annonce);

		$this->template->title = "freeADS - Cette annonce vous intéresse ? Contacter le vendeur grâce à notre système de messagerie";
		$user = Auth::instance()->get_user();
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
        ->where('annonces.etat', '=', 0)
        ->where('annonces.id','=',$id)
        ->as_object()
        ->execute();

		if( count($annonce)==0)
		{
			$this->redirect('/Annonces');
		}
	}

	public function action_category()
	{
		$this->template->content = View::factory('annonces')
		->bind('user', $user)
		->bind('message', $message)
		->bind('dept', $dept)
		->bind('categorie', $categorie)
		->bind('errors', $errors)
		->bind('annonces', $annonces);

		$this->template->title = "freeADS - Consultez plus de 10 000 petites annonces";
		// Load the user information
		$user = Auth::instance()->get_user();
		$dept = ORM::factory('depart')->find_all();
		$categorie = ORM::factory('categorie')->find_all();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $srch = $this->request->param('id'))
		{
			$this->redirect('/Annonces');
		}

		$check_c = ORM::factory('categorie')->where('name','=',$srch)->find();

		if($check_c->loaded())
		{
			$annonces = DB::select('annonces.*', 'users.username', 'users.email')
	        ->from('annonces')
	        ->join('users', 'RIGHT')
	        ->on('annonces.id_user', '=', 'users.id')
	        ->where('annonces.etat', '=', 0)
	        ->where('annonces.categorie','=', $srch)
	        ->order_by('date', 'desc')
	        ->as_object()
	        ->execute();
		}

        if(count($annonces) == 0){ $annonces = FALSE; }
	}

	public function action_advanced()
	{
		$this->template->content = View::factory('annonces')
		->bind('user', $user)
		->bind('message', $message)
		->bind('dept', $dept)
		->bind('categorie', $categorie)
		->bind('errors', $errors)
		->bind('annonces', $annonces);

		$this->template->title = "freeADS - notre recherche avancée vous fera économiser un temps précieux";
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
			if($this->request->post('location'))
			{
				$check_d = ORM::factory('depart')->where('name', '=', $this->request->post('location'))->find();
				if($check_d->loaded())
				{
					$loc = "ok";
				}
			}
				
			if($this->request->post('categorie'))
			{
				$check_c = ORM::factory('categorie')->where('name', '=', $this->request->post('categorie'))->find();
				if($check_c->loaded())
				{
					$cat = "ok";
				}
			}

			$srch = $this->request->post('recherche');

			if ( isset($loc) AND isset($cat) )
			{
				$annonces = DB::select('annonces.*', 'users.username', 'users.email')
		        ->from('annonces')
		        ->join('users', 'RIGHT')
		        ->on('annonces.id_user', '=', 'users.id')
		        ->where('annonces.etat', '=', 0)
		        ->where('location','=',$this->request->post('location'))
		        ->where('categorie','=',$this->request->post('categorie'))
		       	->where('title', 'LIKE', '%' . $this->request->post('recherche') . '%')
		        ->as_object()->execute();
			}
			elseif ( isset($loc) )
			{
				$annonces = DB::select('annonces.*', 'users.username', 'users.email')
		        ->from('annonces')
		        ->join('users', 'RIGHT')
		        ->on('annonces.id_user', '=', 'users.id')
		        ->where('annonces.etat', '=', 0)
		        ->where('location','=',$this->request->post('location'))
		       	->where('title', 'LIKE', '%' . $this->request->post('recherche') . '%')
		        ->as_object()->execute();
			}
			elseif( isset($cat) )
			{
				$annonces = DB::select('annonces.*', 'users.username', 'users.email')
		        ->from('annonces')
		        ->join('users', 'RIGHT')
		        ->on('annonces.id_user', '=', 'users.id')
		        ->where('annonces.etat', '=', 0)
		        ->where('categorie','=',$this->request->post('categorie'))
		       	->where('title', 'LIKE', '%' . $this->request->post('recherche') . '%')
		        ->as_object()->execute();
			}
			else
			{
				$annonces = DB::select('annonces.*', 'users.username', 'users.email')
		        ->from('annonces')
		        ->join('users', 'RIGHT')
		        ->on('annonces.id_user', '=', 'users.id')
		        ->where('annonces.etat', '=', 0)
		       	->where('title', 'LIKE', '%' . $this->request->post('recherche') . '%')
		        ->as_object()->execute();
			}
        	if(count($annonces) == 0){ $annonces = FALSE; }
		}
		else
		{
			$this->redirect('/Annonces');
		}
	}
}
