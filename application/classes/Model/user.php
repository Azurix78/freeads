<?php
class Model_User extends Model_Auth_User
{
	public static function get_password_validation($values)
	{
	    return Validation::factory($values)
	        ->rule('password', 'min_length', array(':value', 6))
	        ->rule('password_confirm', 'matches', array(':validation', ':field', 'password'));
	}

	public static function unique_username($username)
	{
		$user = ORM::factory('user')->where('username', '=' , $username)->find();
		if($user->loaded())
		{
			return FALSE;
		}

		return TRUE;
	}

	public static function unique_email($email)
	{
		$user = ORM::factory('user')->where('email', '=' , $email)->find();
		if($user->loaded())
		{
			return FALSE;
		}

		return TRUE;
	}

	public static function edit($array)
	{
		
	}
}