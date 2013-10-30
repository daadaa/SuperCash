<?php
	echo 'M.'.$Nom.' '.$Prenom;
?>
<?php

App::import("Vendor","table");
	$optionsfournisseurs=$Facture;
	$displayFields = array('prix_total' => 'prix_total',
							'date' => 'date',
							);


	echo '<div class="product_table">';

	$actions = array('Supprimer' => array('/Clients/delete_facture/', 'id'));
	 
	echo $this->Table->createTable('factures_client',
	                               $optionsfournisseurs,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );

	echo '</div>'

?>