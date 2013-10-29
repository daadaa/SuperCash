<?php
class User extends AppModel {
	public $validate =array(
		'login' => array(
			array(
				'rule' => 'alphanumeric',
				'required' => true,
				'allowEmpty' => false,
				'message' => "Votre pseudo est incorrect"
			),
			array(
				'rule' => 'isUnique',
				'message' => 'Ce pseudo est déjà utilisé'
			)
		),
		'mdp' => array(
			'rule' => 'notEmpty',
			'message' => "Vous devez entrer un mot de passe",
			'allowEmpty' => false
		)
	);

}
?>