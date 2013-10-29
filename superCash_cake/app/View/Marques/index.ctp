<?php
	App::import("Vendor","table");
	$optionsmarques=$marques;
	$displayFields = array('Nom' => 'nom');
	 
	$actions = array('Delete' => array('/marques/suppr_marque/', 'Marque.id'),
	                 'Edit' => array('/marques/edit_marque/', 'Marque.id'));
	 
	echo $this->Table->createTable('Marque',
	                               $optionsmarques,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );
?>