<?php defined('SYSPATH') or die('No direct script access.');

class Controller_File extends Controller_Template {


	public function action_index()
	{
		$this->template->title = "File - Ajoutez et gérez vos fichiers";
		$this->template->content = View::factory('file')
		->bind('user', $user)
		->bind('errors', $errors)
		->bind('message', $message)
		->bind('file', $file)
		->bind('size',$size)
		->bind('dir',$dir)
		->bind('folder',$folder)
		->bind('all_folder',$all_folder)
		->bind('all_file',$all_file)
		->bind('current',$current)
		->bind('parent',$parent);
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$id = 0;
		}

		$dir = $id;
		
		$file = ORM::factory('file')->where('id_user', '=', $user->id)->where('id_dir', '=' ,$id)->find_all();
		$folder = ORM::factory('folder')->where('id_user','=',$user->id)->where('id_parent','=',$id)->find_all();
		$current = ORM::factory('folder')->where('id','=',$id)->find();
		$parent = ORM::factory('folder')->where('id','=',$current->id_parent)->find();
		$all_folder = ORM::factory('folder')->where('id_user','=',$user->id)->find_all();
		$all_file = ORM::factory('file')->where('id_user', '=', $user->id)->find_all();


		if( count($file) == 0)
		{
			$file = FALSE;
		}

		if( count($all_folder) == 0)
		{
			$all_folder = FALSE;
		}

		if( count($all_file) == 0)
		{
			$all_file = FALSE;
		}

		if( count($folder) == 0)
		{
			$folder = FALSE;
		}



		$size = $this->_humanreadsize($this->_get_dir_size((DOCROOT.'upload/'.$user->id)));
	}

	public function action_addfile()
	{
		$this->template->title = "File - Ajoutez et gérez vos fichiers";
		$this->template->content = View::factory('file')
		->bind('user', $user)
		->bind('errors', $errors)
		->bind('message', $message)
		->bind('file', $file)
		->bind('size',$size)
		->bind('dir',$dir)
		->bind('folder',$folder)
		->bind('all_folder',$all_folder)
		->bind('all_file',$all_file)
		->bind('current',$current)
		->bind('parent',$parent);

		$user = Auth::instance()->get_user();
		$size = $this->_humanreadsize($this->_get_dir_size((DOCROOT.'upload/'.$user->id)));
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$id = 0;
		}

		$dir = $id;
		
		$file = ORM::factory('file')->where('id_user', '=', $user->id)->where('id_dir', '=' ,$id)->find_all();
		$folder = ORM::factory('folder')->where('id_user','=',$user->id)->where('id_parent','=',$id)->find_all();
		$current = ORM::factory('folder')->where('id','=',$id)->find();
		$parent = ORM::factory('folder')->where('id','=',$current->id_parent)->find();
		$all_folder = ORM::factory('folder')->where('id_user','=',$user->id)->find_all();
		$all_file = ORM::factory('file')->where('id_user', '=', $user->id)->find_all();
		
	
		if( count($file) == 0)
		{
			$file = FALSE;
		}

		if( count($folder) == 0)
		{
			$folder = FALSE;
		}

		if (HTTP_Request::POST == $this->request->method()) 
		{	
			if($this->_sizelimit($_FILES['file']['size'],$user->id))
			{
				$validation = Validation::factory($this->request->post());
				$validation->rule('name', 'not_empty')->rule('name', 'regex', array(':value', '/[a-z0-9A-Z\-\_]+/'));

				if($validation->check())
				{
					if (isset($_FILES['file']))
            		{
            		    $filename = $this->_save_image($_FILES['file'],$user->id);
            		}
            		if ( ! $filename)
        			{
            			$message = 'Vous devez choisir un fichier à ajouter.';
        			}
        			else
        			{
        				Session::instance()->set('success','Fichier uploadé.');

        				$files = ORM::factory('file');
						$files->id_user = $user->id;
						$files->name = $this->request->post('name');
						$files->url = $filename;
						$files->type = $this->_typefile($_FILES['file']['type']);
						$files->size = $this->_humanreadsize($_FILES['file']['size']);
						$files->ext = strrchr($_FILES['file']['name'],'.');
						$files->id_dir = $id;
						$files->save();

        				$this->redirect('/File/index/'.$id);
        			}
				}
				
				$errors = $validation->errors('file');
			}
			else
			{
				$message = 'Vous dépassez la taille limite de votre hébergement.';
			}
		}
		else
		{
			$this->redirect('/File/index/'.$id);
		}
	}

	public function action_addfolder()
	{
		if (HTTP_Request::POST == $this->request->method()) 
		{

			$this->template->title = "File - Ajoutez et gérez vos fichiers";
			$this->template->content = View::factory('file')
			->bind('user', $user)
			->bind('errors', $errors)
			->bind('message', $message)
			->bind('file', $file)
			->bind('size',$size)
			->bind('dir',$dir)
			->bind('folder',$folder)
			->bind('all_folder',$all_folder)
			->bind('all_file',$all_file)
			->bind('current',$current)
			->bind('parent',$parent);

			$user = Auth::instance()->get_user();
			$size = $this->_humanreadsize($this->_get_dir_size((DOCROOT.'upload/'.$user->id)));
			
			if( ! $id = $this->request->param('id'))
			{
				$id = 0;
			}
			
			$file = ORM::factory('file')->where('id_user', '=', $user->id)->where('id_dir', '=' ,$id)->find_all();
			$folder = ORM::factory('folder')->where('id_user','=',$user->id)->where('id_parent','=',$id)->find_all();
			$current = ORM::factory('folder')->where('id','=',$id)->find();
			$parent = ORM::factory('folder')->where('id','=',$current->id_parent)->find();
			$all_folder = ORM::factory('folder')->where('id_user','=',$user->id)->find_all();
			$all_file = ORM::factory('file')->where('id_user', '=', $user->id)->find_all();

			if( count($file) == 0)
			{
				$file = FALSE;
			}

			if( count($folder) == 0)
			{
				$folder = FALSE;
			}

			if (!$user)
			{
				$this->redirect('/Connect/create');
			}
			
			$validation = Validation::factory($this->request->post());
			$validation->rule('folder', 'not_empty')->rule('folder', 'regex', array(':value', '/[a-z0-9A-Z\-\_]+/'));

			if($validation->check())
			{
				$folders = ORM::factory('folder');
				$folders->id_user = $user->id;
				$folders->id_parent = $id;
				$folders->name = $this->request->post('folder');
				$folders->save();

				$this->redirect('/File/index/'.$id);

			}
				
			$errors = $validation->errors('folder');
		}
		else
		{
			$this->redirect('/File/index/'.$id);
		}
	}

	public function action_movefile()
	{
		$this->template->title = "File - Ajoutez et gérez vos fichiers";
		$this->template->content = View::factory('file')
		->bind('user', $user)
		->bind('errors', $errors)
		->bind('message', $message)
		->bind('file', $file)
		->bind('size',$size)
		->bind('dir',$dir)
		->bind('folder',$folder)
		->bind('all_folder',$all_folder)
		->bind('all_file',$all_file)
		->bind('current',$current)
		->bind('parent',$parent);
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$id = 0;
		}

		$dir = $id;
		
		$file = ORM::factory('file')->where('id_user', '=', $user->id)->where('id_dir', '=' ,$id)->find_all();
		$folder = ORM::factory('folder')->where('id_user','=',$user->id)->where('id_parent','=',$id)->find_all();
		$current = ORM::factory('folder')->where('id','=',$id)->find();
		$parent = ORM::factory('folder')->where('id','=',$current->id_parent)->find();
		$all_folder = ORM::factory('folder')->where('id_user','=',$user->id)->find_all();
		$all_file = ORM::factory('file')->where('id_user', '=', $user->id)->find_all();


		if( count($file) == 0)
		{
			$file = FALSE;
		}

		if( count($folder) == 0)
		{
			$folder = FALSE;
		}

		$size = $this->_humanreadsize($this->_get_dir_size((DOCROOT.'upload/'.$user->id)));
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$validation = Validation::factory($this->request->post());
			$validation->rule('file_to_move', 'not_empty')->rule('file_to_move', 'Valid::digit');
			$validation->rule('folder_direction', 'not_empty')->rule('folder_direction', 'Valid::digit');

			if($validation->check())
			{
				$file = ORM::factory('file')->where('id_user', '=', $user->id)->where('id', '=' ,$this->request->post('file_to_move'))->find();
				$folder = ORM::factory('folder')->where('id_user', '=', $user->id)->where('id', '=' ,$this->request->post('folder_direction'))->find();

				if($this->request->post('folder_direction')==0 AND $file->loaded())
				{
					$file->id_dir = $this->request->post('folder_direction');
					$file->update();
					Session::instance()->set('success','Fichier déplacé.');
					$this->redirect('/File/index/');
				}
				elseif($file->loaded() AND $folder->loaded())
				{
					$file->id_dir = $this->request->post('folder_direction');
					$file->update();
					Session::instance()->set('success','Fichier déplacé.');
					$this->redirect('/File/index/');

				}
				else
				{
					$this->redirect('/File/');
				}
			}
			else
			{
				$message = "Verifiez les champs que vous avez selectionnez.";
			}
		}
		else
		{
			$this->redirect('/File/');
		}
		
		$errors = $validation->errors('file');
		
	}

	public function action_movefolder()
	{
		$this->template->title = "File - Ajoutez et gérez vos fichiers";
		$this->template->content = View::factory('file')
		->bind('user', $user)
		->bind('errors', $errors)
		->bind('message', $message)
		->bind('file', $file)
		->bind('size',$size)
		->bind('dir',$dir)
		->bind('folder',$folder)
		->bind('all_folder',$all_folder)
		->bind('all_file',$all_file)
		->bind('current',$current)
		->bind('parent',$parent);
		// Load the user information
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		if( ! $id = $this->request->param('id'))
		{
			$id = 0;
		}

		$dir = $id;
		
		$file = ORM::factory('file')->where('id_user', '=', $user->id)->where('id_dir', '=' ,$id)->find_all();
		$folder = ORM::factory('folder')->where('id_user','=',$user->id)->where('id_parent','=',$id)->find_all();
		$current = ORM::factory('folder')->where('id','=',$id)->find();
		$parent = ORM::factory('folder')->where('id','=',$current->id_parent)->find();
		$all_folder = ORM::factory('folder')->where('id_user','=',$user->id)->find_all();
		$all_file = ORM::factory('file')->where('id_user', '=', $user->id)->find_all();


		if( count($file) == 0)
		{
			$file = FALSE;
		}

		if( count($folder) == 0)
		{
			$folder = FALSE;
		}

		$size = $this->_humanreadsize($this->_get_dir_size((DOCROOT.'upload/'.$user->id)));
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$validation = Validation::factory($this->request->post());
			$validation->rule('folder_to_move', 'not_empty')->rule('folder_to_move', 'Valid::digit');
			$validation->rule('folder_folder_direction', 'not_empty')->rule('folder_folder_direction', 'Valid::digit');

			if($validation->check())
			{
				$folder = ORM::factory('folder')->where('id_user', '=', $user->id)->where('id', '=' ,$this->request->post('folder_to_move'))->find();
				$folder_dest = ORM::factory('folder')->where('id_user', '=', $user->id)->where('id', '=' ,$this->request->post('folder_folder_direction'))->find();

				if($this->request->post('folder_folder_direction')==0 AND $folder->loaded())
				{
					$folder->id_parent = $this->request->post('folder_folder_direction');
					$folder->update();
					Session::instance()->set('success','Dossier déplacé.');
					$this->redirect('/File/index/');
				}
				elseif($folder->loaded() AND $folder_dest->loaded())
				{
					$folder->id_parent = $this->request->post('folder_folder_direction');
					$folder->update();
					Session::instance()->set('success','Dossier déplacé.');
					$this->redirect('/File/index/');

				}
				else
				{
					$this->redirect('/File/');
				}
			}
			else
			{
				$message = "Verifiez les champs que vous avez selectionnez.";
			}
		}
		else
		{
			$this->redirect('/File/');
		}
		
		$errors = $validation->errors('file');
		
	}

	public function action_renamefolder()
	{
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$validation = Validation::factory($this->request->post());
			$validation->rule('rename_folder', 'not_empty')->rule('rename_folder', 'Valid::digit');
			$validation->rule('new_name_folder', 'not_empty');

			if($validation->check())
			{
				$folder = ORM::factory('folder')->where('id_user', '=', $user->id)->where('id', '=' ,$this->request->post('rename_folder'))->find();
				
				if($folder->loaded())
				{
					$folder->name = $this->request->post('new_name_folder');
					$folder->update();
					Session::instance()->set('success','Dossier renommé.');
					$this->redirect('/File/index/');

				}
				else
				{
					Session::instance()->set('success','Dossier invalide.');
					$this->redirect('/File/');
				}
			}
			else
			{
				Session::instance()->set('success','Dossiers invalides ou champs vide.');
				$this->redirect('/File/');
			}
		}
		else
		{
			$this->redirect('/File/');
		}
	}

	public function action_renamefile()
	{
		$user = Auth::instance()->get_user();
		
		// if a user is not logged in, redirect to login page
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
		
		if (HTTP_Request::POST == $this->request->method()) 
		{
			$validation = Validation::factory($this->request->post());
			$validation->rule('rename_file', 'not_empty')->rule('rename_file', 'Valid::digit');
			$validation->rule('new_name_file', 'not_empty');

			if($validation->check())
			{
				$folder = ORM::factory('file')->where('id_user', '=', $user->id)->where('id', '=' ,$this->request->post('rename_file'))->find();
				
				if($folder->loaded())
				{
					$folder->name = $this->request->post('new_name_file');
					$folder->update();
					Session::instance()->set('success','Fichier renommé.');
					$this->redirect('/File/index/');

				}
				else
				{
					Session::instance()->set('success','Fichier invalide.');
					$this->redirect('/File/');
				}
			}
			else
			{
				Session::instance()->set('success','Fichers invalides ou champs vide.');
				$this->redirect('/File/');
			}
		}
		else
		{
			$this->redirect('/File/');
		}
	}

	public function action_delfile()
	{
		$user = Auth::instance()->get_user();
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}
			
		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/File/');
		}

		$del = ORM::factory('file')->where('id','=',$id)->where('id_user','=',$user->id)->find();
		$id_dir = $del->id_dir;

		if($del->loaded())
		{
			DB::delete('shares')->where('id_file', '=', $id)->where('id_owner','=',$user->id)->execute();
			unlink(DOCROOT.'upload/'.$user->id.'/'.$del->url);
			$del->delete();
			Session::instance()->set('success','Fichier supprimé.');
			$this->redirect('/File/index/'.$id_dir);
		}
		else
		{
			$this->redirect('/File/index/'.$id_dir);
		}
	}

	public function action_dwl()
	{
		if( ! $id = $this->request->param('id'))
		{
			$this->redirect('/File/');
		}

		$user = Auth::instance()->get_user();
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$file = ORM::factory('file')->where('id','=',$id)->where('id_user','=',$user->id)->find();

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
			$this->redirect('/File/');
		}

		$user = Auth::instance()->get_user();
		if (!$user)
		{
			$this->redirect('/Connect/create');
		}

		$file = ORM::factory('file')->where('id','=',$id)->where('id_user','=',$user->id)->find();

		if($file->loaded())
		{
			$this->template->title = "File - Ecouter vos musique !";
			$this->template->content = View::factory('stream')
			->bind('user', $user)
			->bind('file', $file)
			->bind('audio',$audio);

			$audio = '/upload/'.$file->id_user.'/'.$file->url;
		}
		else
		{
			$this->redirect('/File/');
		}
	}

	// public function action_delfolder()
	// {
	// 	$user = Auth::instance()->get_user();
	// 	if (!$user)
	// 	{
	// 		$this->redirect('/Connect/create');
	// 	}
			
	// 	$id = $this->request->param('id');
	// 	$id_parent = 0;

	// 	$del = ORM::factory('folder')->where('id','=',$id)->where('id_user','=',$user->id)->find();
		
	// 	if($del->loaded())
	// 	{
	// 		$id_parent = $del->id_parent;

	// 		$folders = ORM::factory('folder')->where('id_parent','=',$id)->where('id_user','=',$user->id)->find_all();
	// 		foreach ($folders as $folder)
	// 		{
	// 			$files = ORM::factory('file')->where('id_dir','=',$folder->id)->where('id_user','=',$user->id)->find_all();
	// 			$files->delete();
	// 		}
	// 		$folders->delete();
	// 		$del->delete();


	// 		unlink(DOCROOT.'upload/'.$user->id.'/'.$del->url);
	// 		$del->delete();
	// 		Session::instance()->set('success','Fichier supprimé.');
	// 		$this->redirect('/File/index/'.$id_parent);
	// 	}
	// 	else
	// 	{
	// 		$this->redirect('/File/index/'.$id_parent);
	// 	}

	// }


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

    protected function _sizelimit($size_file,$id)
    {
        
        $directory = DOCROOT.'upload/'.$id;
        $size_folder = $this->_get_dir_size($directory);
        $size_total = $size_folder + $size_file;

        if($size_total <= 31457280)
        {
        	return TRUE;
        }

        return FALSE;
    }

    protected function _humanreadsize($size)
    {
    	$mod = 1024;
 	
    	$units = explode(' ','o Ko Mo Go To Po');
    	for ($i = 0; $size > $mod; $i++)
    	{
    	    $size /= $mod;
    	}
 	
    	return round($size, 2) . ' ' . $units[$i];
	}

	protected function _typefile($type)
	{
		switch ($type)
		{
			case (preg_match('/text.*/', $type) ? true : false) :
				return "text";
				break;
			
			case (preg_match('/audio.*/', $type) ? true : false) :
				return "audio";
				break;
			
			case (preg_match('/application.*/', $type) ? true : false) :
				return "application";
				break;
			
			case (preg_match('/video.*/', $type) ? true : false) :
				return "video";
				break;

			default:
				return "unknow";
				break;
		}
	}

	protected function _get_dir_size($directory)
	{
		$size = 0;
		foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory)) as $file)
		{
			$size+=$file->getSize();
		}
		return $size;
	}


}