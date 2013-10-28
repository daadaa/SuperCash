<?php

class Type extends AppModel {
	public $hasMany = array(
        'Produit' => array(
            'className' => 'Produit'
        ));
}

?>