<?php

return array(
	'username' => array(
        'not_empty' => 'Vous devez remplir ce champ.',
        'min_length' => 'le nom d\'utilisateur doit faire au moins :param2 caractère.',
        'max_length' => 'le nom d\'utilisateur doit faire moins de :param2 caractère.',
        'username_available' => 'Ce nom d\'utilisateur est déjà utilisé.',
    ),
	'email' => array(
		'not_empty' => 'L\'adresse email doit être valide',
		'min_length' => 'This email is too short, it must be at least :param2 characters long',
		'max_length' => 'This email is too long, it cannot exceed :param2 characters',
		'email' =>	'L\'adresse email doit être valide',
		'email_available' => 'L\'adresse email est déjà utilisée.',
	),
	'password' => array(
		'not_empty' => 'Vous devez rentrer un mot de passe.',
		'min_length' => 'Le mot de passe doit faire au moins :param2 caractère.',
	)
);
?>