<?php
class Model_Annonce extends ORM
{
	protected $_belongs_to = array(
      	'user' => array(
			'model'       => 'user',
			'foreign_key' => 'id_user', 
      	),
   	);
}