<?php

class Marque extends AppModel {
	public $hasMany = array(
        'Produit' => array(
            'className' => 'Produit'
        ));
}

?>