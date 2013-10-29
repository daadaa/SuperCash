<?php 
	echo $this->Form->create('Produit', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	$optionTypes = $types;
	echo $this->Form->input('type_id', array(
        'options' => $optionTypes,
        'type' => 'select',
        'empty' => 'Choisir le type',
        'label' => 'Type: '
    	));
	echo '</br>';
	$optionMagasins = $magasins;
	echo $this->Form->input('magasin_id', array(
        'options' => $optionMagasins,
        'type' => 'select',
        'empty' => 'Choisir le magasin',
        'label' => 'Magasin: '
    	));
	echo '</br>';
	echo $this->Form->input('nom',array('label' => 'Nom: '));
	echo '<br>';

	echo $this->Form->submit('Valider la recherche', array('class' => 'btn'));
	echo $this->Form->end();

	App::import("Vendor","table");
	if($produits){
		$optionsproduits=$produits;
		$displayFields = array('Nom' => 'Produit.nom',
								'Type' => 'TypeJoin.nom',
								'Marque' => 'MarqueJoin.nom',
								'Magasin' => 'MagasinJoin.ville');
		 
		$actions = array('Delete' => array('/produits/suppr_produit/', 'Produit.id'),
		                 'Edit' => array('/produits/edit_produit/', 'Produit.id'));
		 
		echo $this->Table->createTable('Marque',
		                               $optionsproduits,
		                               $displayFields,
		                               $actions,
		                               'You currently have no properties listed'
		                               );
	}
?>