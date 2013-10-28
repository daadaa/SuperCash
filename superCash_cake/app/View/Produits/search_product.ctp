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
	echo $this->Form->input('produit',array('label' => 'Nom :'));
	echo '<br>';

	echo $this->Form->submit('Valider la recherche', array('class' => 'btn'));
	echo $this->Form->end();
?>