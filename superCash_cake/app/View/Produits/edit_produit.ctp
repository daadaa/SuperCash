<!-- Fichier: /app/View/Actualites/edit.ctp -->

<div class="page-header">

<h1>Editer le produit</h1>

<?php
		 
   echo $this->Form->create('Produit', array(
		'inputDefaults' => array(
			'label' => false
			)
	));
		$optionMarques = $marques;
		echo $this->Form->input('marque_id', array(
			'options' => $optionMarques,
			'type' => 'select',
			'label' => 'Marque: '
			));
		echo '</br>';
		$optionTypes = $types;
		echo $this->Form->input('type_id', array(
			'options' => $optionTypes,
			'type' => 'select',
			'label' => 'Type: '
		));
		echo '</br>';
		$optionMagasins = $magasins;
		echo $this->Form->input('magasin_id', array(
			'options' => $optionMagasins,
			'type' => 'select',
			'label' => 'Magasin: '
		));
		echo '</br>';
		echo $this->Form->input('nom', array('label'=>"nom"));
		echo $this->Form->input('prix_actuel', array('label'=>"prix"));
		echo $this->Form->input('volume', array('label'=>"volume"));
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('marque_id', array('type' => 'hidden'));
		echo $this->Form->input('type_id', array('type' => 'hidden'));
		echo $this->Form->input('magasin_id', array('type' => 'hidden'));
	echo $this->Form->end('Modifier');
	
?>

