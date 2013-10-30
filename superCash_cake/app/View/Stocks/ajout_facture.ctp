<?php
	echo $this->Form->create('Factures_fournisseur', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	$optionFournisseurs = $fournisseurs;
	echo $this->Form->input('fournisseur_id', array(
        'options' => $optionFournisseurs,
        'type' => 'select',
        'empty' => 'Choisir le fournisseur',
        'label' => 'Fournisseur: '
    	));

	echo $this->Form->input('date',array('label'=>'Date(Annee-Mois-Jour): ','dateFormat' => 'YMD'));
	echo $this->Form->hidden('prix_total');
	echo '</br>';
	$optionMagasins = $magasins;
	echo $this->Form->input('magasin_id', array(
        'options' => $optionMagasins,
        'type' => 'select',
        'empty' => 'Choisir le magasin',
        'label' => 'Magasin: '));

	echo $this->Form->submit('Valider la recherche', array('class' => 'btn'));
	echo $this->Form->end();
?>