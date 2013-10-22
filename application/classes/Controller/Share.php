<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Share extends Controller_Template {

	public function action_index()
	{
		$this->template->title = "Share - Partager vos fichiers avec vos amis";
		$this->template->content = View::factory('share')
		->bind('user', $user)
		->bind('errors', $errors)
		->bind('message', $message)
		->bind('file', $file)
		->bind('share', $share)
		->bind('shared', $shared);
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
		
		$file = ORM::factory('file')->where('id_user', '=', $user->id)->find_all();

		if( count($file) == 0){ $file = FALSE; }

        $share = DB::select('shares.*', 'files.name', 'files.id_user','files.type', 'files.ext', 'files.url')
        ->from('shares')
        ->join('files', 'RIGHT')
        ->on('shares.id_file', '=', 'files.id')
        ->where('shares.id_owner', '=', $user->id)->as_object()->execute();

        $shared = DB::select('shares.id_owner', 'shares.email_share', 'files.id', 'files.name', 'files.id_user','files.type', 'files.ext', 'files.url')
        ->from('shares')
        ->join('files', 'LEFT')
        ->on('shares.id_file', '=', 'files.id')
        ->where('shares.email_share', '=', $user->email)->as_object()->execute();

        if( count($shared) == 0){ $shared = FALSE; }

	}

	public function action_add()
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$this->template->title = "Share - partagez vos fichiers avec vos amis !";
			$this->template->content = View::factory('share')
			->bind('user', $user)
			->bind('errors', $errors)
			->bind('message', $message)
			->bind('file', $file)
			->bind('share',$share)
			->bind('shared',$shared);

			$user = Auth::instance()->get_user();
			if (!$user)
			{
				$this->redirect('/Connect/create');
			}

			$file = ORM::factory('file')->where('id_user', '=', $user->id)->find_all();

			if( count($file) == 0){ $file = FALSE; }
			
			$share = DB::select()
        	->from('shares')
        	->join('files', 'LEFT')
        	->on('shares.id_file', '=', 'files.id')
        	->where('shares.id_owner', '=', $user->id)->as_object()->execute();

        	if( count($share) == 0){ $share = FALSE; }

        	$shared = DB::select('shares.*', 'files.name', 'files.id_user','files.type', 'files.ext', 'files.url')
        	->from('shares')
        	->join('files', 'LEFT')
        	->on('shares.id_file', '=', 'files.id')
        	->where('shares.email_share', '=', $user->email)->as_object()->execute();
	
        	if( count($shared) == 0){ $shared = FALSE; }
			
			$validation = Validation::factory($this->request->post());
			$validation->rule('email', 'not_empty')->rule('email', 'regex', array(':value', '/[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/'));
			$validation->rule('file','not_empty');

			if($validation->check())
			{
				$share = ORM::factory('file')->where('id','=',$this->request->post('file'))->find();
				$email = ORM::factory('user')->where('email','=',$this->request->post('email'))->find();

				if( ! $email->loaded())
				{
					$headers ='From: ' . $user->username . '<' . $user->email . '>\n'; 
	    			$headers .='To: ' . $this->request->post('email') . '\n'; 
	    			$headers .='Content-Type: text/plain; charset="iso-8859-1"/n'; 
	    			$headers .='Content-Transfer-Encoding: 8bit';

	    			$text = 
	    			"$user->username souhaite partager avec vous un fichier sur som site d'hébergement préféré !
	    			<br>Inscrivez vous pour accéder à vos fichiers reçus
	    			<br>http://localhost:8888/
	    			<br>L'équipe myCloud";

	    			if(mail($this->request->post('email'), 'myCloud - '.$user->username.' veut partager un fichier avec vous !', $text, $headers)
	    				AND $share->loaded())
	    			{	
	    				$share = ORM::factory('share');
						$share->id_owner = $user->id;
						$share->email_share = $this->request->post('email');
						$share->id_file = $this->request->post('file');
						$share->save();
						
						Session::instance()->set('success','Un mail d\'invitation à été envoyé.');
						$this->redirect('/Share/');
	    			}
	    			else
	    			{
	    				$message = "echec lors de l'envoi du mail d'inviation";
	    			}
	    		}
	    		else
	    		{
	    			if($share->loaded())
	    			{
	    				$share = ORM::factory('share');
						$share->id_owner = $user->id;
						$share->email_share = $this->request->post('email');
						$share->id_file = $this->request->post('file');
						$share->save();

						Session::instance()->set('success','Fichier partagé.');
	    				$this->redirect('/Share/');
	    			}
	    			else
	    			{
	    				$this->redirect('/Share/');
	    			}
	    			
	    		}

			}
				
			$errors = $validation->errors('share');
		}
		else
		{
			$this->redirect('/Share/');
		}
	}

	public function action_del()
	{
		$user = Auth::instance()->get_user();
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Share/');
		}

		$share = $share = ORM::factory('share')->where('id_owner','=',$user->id)->where('id','=',$id)->find();
		if($share->loaded())
		{
			Session::instance()->set('success','Le fichier n\'est plus partagé.');
			$share->delete();
			$this->redirect('/Share/');
		}
		else
		{
			$this->redirect('/Share/');
		}
	}

	public function action_dwl()
	{
		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Share/');
		}

		$user = Auth::instance()->get_user();
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$file = ORM::factory('file')->where('id','=',$id)->find();

		if($file->loaded())
		{
			$full_path = DOCROOT.'upload/'.$file->id_user.'/'.$file->url; // chemin système (local) vers le fichier
			$file_name = $file->name.$file->ext;
 	
			ini_set('zlib.output_compression', 0);
			$date = gmdate(DATE_RFC1123);
 	
			header('Pragma: public');
			header('Cache-Control: must-revalidate, pre-check=0, post-check=0, max-age=0');
			 
			header('Content-Tranfer-Encoding: none');
			header('Content-Length: '.filesize($full_path));
			header('Content-MD5: '.base64_encode(md5_file($full_path)));
			header('Content-Type: application/octetstream; name="'.$file_name.'"');
			header('Content-Disposition: attachment; filename="'.$file_name.'"');
			 
			header('Date: '.$date);
			header('Expires: '.gmdate(DATE_RFC1123, time()+1));
			header('Last-Modified: '.gmdate(DATE_RFC1123, filemtime($full_path)));
			 
			readfile($full_path);
			exit;
		}
		else
		{
			$this->redirect('/File/');
		}

		$this->redirect('/File/index/'.$file->id_dir);
	}

	public function action_stream()
	{
		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/Share/');
		}

		$user = Auth::instance()->get_user();
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$file = ORM::factory('file')->where('id','=',$id)->find();

		if($file->loaded())
		{
			$this->template->title = "Share - Ecouter les musiques de vos amis !";
			$this->template->content = View::factory('stream')
			->bind('user', $user)
			->bind('file', $file)
			->bind('audio',$audio);

			$audio = '/upload/'.$file->id_user.'/'.$file->url;
		}
		else
		{
			$this->redirect('/Share/');
		}
	}

}