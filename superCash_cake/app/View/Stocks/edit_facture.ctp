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
        'label' => 'Produit: '
    	));
	echo $this->Form->input('reference',array('label'=>'Reference: '));
	echo $this->Form->input('format',array('label'=>'Format: '));
	echo $this->Form->input('quantite_pack',array('label'=>'Quantite: '));
	echo $this->Form->input('prix_unitaire_achat',array('label'=>'Prix unitaire: '));
	echo $this->Form->input('date_arrive',array('label'=>'Date(Annee-Mois-Jour): ','dateFormat' => 'YMD'));
	echo $this->Form->hidden('factures_fournisseur_id',array('value' => $facture));
	echo '</br>';

	echo $this->Form->submit('Valider la recherche', array('class' => 'btn'));
	echo $this->Form->end();

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
		 
		echo $this->Table->createTable('Lot',
		                               $optionsproduits,
		                               $displayFields,
		                               $actions,
		                               'You currently have no properties listed'
		                               );
	}
?>