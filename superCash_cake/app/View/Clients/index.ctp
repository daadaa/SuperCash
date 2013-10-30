<?php 
	
App::import("Vendor","table");
	$optionsfournisseurs=$Client;
	$displayFields = array('nom' => 'nom',
							'adresse' => 'adresse',
							'ville' => 'ville',
							'CP' => 'CP',
							'SIRET' => 'SIRET',
							'telephone' => 'telephone',
							'mail' => 'mail',
							'prenom' => 'prenom'
							);


	echo '<div class="product_table">';

	$actions = array('Supprimer' => array('/clients/delete_client/', 'id'),
	                 'Detail' => array('/clients/detail_fournisseur/', 'id'));
	 
	echo $this->Table->createTable('Client',
	                               $optionsfournisseurs,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );

	echo '</div>'
	



?>