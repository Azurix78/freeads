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
}
