<?php

App::import("Vendor","table");
	$optionsfournisseurs=$fournisseurs;
	$displayFields = array('nom' => 'nom',
							'adresse' => 'adresse',
							'ville' => 'ville',
							'CP' => 'CP',
							'mail' => 'mail',
							'telephone' => 'telephone',
							);
	echo $this->Html->link('Ajouter un fournisseur', array('controller' => 'fournisseurs', 'action' => 'ajout_fournisseur')); 
	 
	$actions = array('Supprimer' => array('/fournisseurs/delete_fournisseur/', 'id'),
	                 'Modifier' => array('/fournisseurs/edit_fournisseur/', 'id'));
	 
	echo $this->Table->createTable('Fournisseur',
	                               $optionsfournisseurs,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );

?>