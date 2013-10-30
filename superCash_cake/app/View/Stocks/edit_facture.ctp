<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'une entree",array('controller'=>'Stocks','action'=>'ajout_facture')) ?></td>
	</tr>
</table>
<hr/>
<h2>Entrez le contenu de l'entree</h2>
<?php
	
	echo $this->Form->create('Lot', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	$optionProduits = $produits;
	echo $this->Form->input('produit_id', array(
        'options' => $optionProduits,
        'type' => 'select',
        'empty' => 'Choisir le produit',
        'label' => 'Produit : '
    	));
	echo '</br>';
	echo $this->Form->input('reference',array('label'=>'Reference : '));
	echo '</br>';
	echo $this->Form->input('format',array('label'=>'Format : '));
	echo '</br>';
	echo $this->Form->input('quantite_pack',array('label'=>'Quantite : '));
	echo '</br>';
	echo $this->Form->input('prix_unitaire_achat',array('label'=>'Prix unitaire : '));
	echo '</br>';
	echo $this->Form->input('date_arrive',array('label'=>'Date : ','dateFormat' => 'YMD'));
	echo '</br>';
	echo $this->Form->hidden('factures_fournisseur_id',array('value' => $facture));
	
	echo $this->Form->submit('Valider la recherche', array('class' => 'btn'));
	echo $this->Form->end();
	
	//echo '<div class="product_table">';
	
	App::import("Vendor","table");
	if($produitsFacture){
		$optionsproduits=$produitsFacture;
		$displayFields = array('Nom' => 'ProduitJoin.nom',
								'Reference' => 'reference',
								'Format' => 'format',
								'Quantite' => 'quantite_pack',
								'Prix unitaire' => 'prix_unitaire_achat',
								'Date' => 'date_arrive');
		 
		$actions = array('Delete' => array('/stocks/suppr_lot/', 'id'));
		echo '<hr/>';
		echo '<div class="product_table">';
		echo $this->Table->createTable('Lot',
		                               $optionsproduits,
		                               $displayFields,
		                               $actions,
		                               'You currently have no properties listed'
		                               );
		echo '</div>';
	}
	
?>