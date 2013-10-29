<<<<<<< HEAD
﻿<!-- Fichier: /app/View/Actualites/edit.ctp -->

<div class="page-header">

<h1>Editer le produit</h1>
=======
﻿<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un produit",array('controller'=>'Produits','action'=>'ajout_produit')) ?></td>
	</tr>
</table>
<hr/>
>>>>>>> devChris

<?php
		 
   echo $this->Form->create('Produit', array(
		'inputDefaults' => array(
			'label' => false
<<<<<<< HEAD
			)
=======
				)
>>>>>>> devChris
	));
		$optionMarques = $marques;
		echo $this->Form->input('marque_id', array(
			'options' => $optionMarques,
			'type' => 'select',
<<<<<<< HEAD
			'label' => 'Marque: '
=======
			'label' => 'Marque : '
>>>>>>> devChris
			));
		echo '</br>';
		$optionTypes = $types;
		echo $this->Form->input('type_id', array(
			'options' => $optionTypes,
			'type' => 'select',
<<<<<<< HEAD
			'label' => 'Type: '
=======
			'label' => 'Type : '
>>>>>>> devChris
		));
		echo '</br>';
		$optionMagasins = $magasins;
		echo $this->Form->input('magasin_id', array(
			'options' => $optionMagasins,
			'type' => 'select',
<<<<<<< HEAD
			'label' => 'Magasin: '
		));
		echo '</br>';
		echo $this->Form->input('nom', array('label'=>"nom"));
		echo $this->Form->input('prix_actuel', array('label'=>"prix"));
		echo $this->Form->input('volume', array('label'=>"volume"));
=======
			'label' => 'Magasin : '
		));
		echo '</br>';
		echo $this->Form->input('nom', array('label'=>"Nom : "));
		echo '</br>';
		echo $this->Form->input('prix_actuel', array('label'=>"Prix : "));
		echo '</br>';
		echo $this->Form->input('volume', array('label'=>"Volume : "));
		echo '</br>';
>>>>>>> devChris
		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('marque_id', array('type' => 'hidden'));
		echo $this->Form->input('type_id', array('type' => 'hidden'));
		echo $this->Form->input('magasin_id', array('type' => 'hidden'));
<<<<<<< HEAD
	echo $this->Form->end('Modifier');
=======
		echo $this->Form->end('Modifier');
>>>>>>> devChris
	
?>

