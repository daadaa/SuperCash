<?php
	App::import("Vendor","table");
	$optionsfactures=$factures;
	$displayFields = array('Nom' => 'FournisseurJoin.nom',
							'prix_total' => 'Factures_fournisseur.prix_total',
							'Date' => 'Factures_fournisseur.date'
		);
	 
	$actions = array('Voir' => array('/stocks/index/', 'id'));
	 
	echo $this->Table->createTable('Factures_fournisseur',
	                               $optionsfactures,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );
	if(isset($lots)){
		$optionslots=$lots;
		$displayFields = array(
								'Reference' => 'reference',
								'Format' => 'format',
								'Quantite' => 'quantite_pack',
								'Prix unitaire' => 'prix_unitaire_achat',
								'Date' => 'date_arrive');
		 
		$actions = array();
		 
		echo $this->Table->createTable('Lot',
		                               $optionslots,
		                               $displayFields,
		                               $actions,
		                               'You currently have no properties listed'
		                               );
	}

?>