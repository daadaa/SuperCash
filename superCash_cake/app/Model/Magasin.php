<?php

class Magasin extends AppModel {
	public $actAs = array('Containable');
    public $hasMany = array('Produit');
}

?>