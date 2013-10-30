<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'une entree",array('controller'=>'Stocks','action'=>'ajout_facture')) ?></td>
	</tr>
</table>
<hr/>

<?php
	App::import("Vendor","table");
	$optionsfactures=$factures;
	$displayFields = array('Nom' => 'FournisseurJoin.nom',
							'prix_total' => 'Factures_fournisseur.prix_total',
							'Date' => 'Factures_fournisseur.date'
		);
	 
	$actions = array('Voir' => array('/stocks/index/', 'id'));
	echo '<div clas="product_table">'; 
	echo $this->Table->createTable('Factures_fournisseur',
	                               $optionsfactures,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );
	echo '</div>';
	echo '<hr/>';
	if(isset($lots)){
		$optionslots=$lots;
		$displayFields = array(
								'Reference' => 'reference',
								'Format' => 'format',
								'Quantite' => 'quantite_pack',
								'Prix unitaire' => 'prix_unitaire_achat',
								'Date' => 'date_arrive');
		 
		$actions = array();
		echo '<div clas="product_table">';
		echo $this->Table->createTable('Lot',
		                               $optionslots,
		                               $displayFields,
		                               $actions,
		                               'You currently have no properties listed'
		                               );
		echo '</div>';
	}
	

?>

