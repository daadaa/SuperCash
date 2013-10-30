<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un produit",array('controller'=>'Produits','action'=>'ajout_produit')) ?></td>
	</tr>
</table>
<hr/>

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
			'label' => 'Marque : '
			));
		echo '</br>';
		$optionTypes = $types;
		echo $this->Form->input('type_id', array(
			'options' => $optionTypes,
			'type' => 'select',
			'label' => 'Type : '
		));
		echo '</br>';
		$optionMagasins = $magasins;
		echo $this->Form->input('magasin_id', array(
			'options' => $optionMagasins,
			'type' => 'select',
			'label' => 'Magasin : '
		));
		echo '</br>';
		echo $this->Form->input('nom', array('label'=>"Nom : "));
		echo '</br>';
		echo $this->Form->input('prix_actuel', array('label'=>"Prix : "));
		echo '</br>';
		echo $this->Form->input('volume', array('label'=>"Volume : "));
		echo '</br>';

		echo $this->Form->input('id', array('type' => 'hidden'));
		echo $this->Form->input('marque_id', array('type' => 'hidden'));
		echo $this->Form->input('type_id', array('type' => 'hidden'));
		echo $this->Form->input('magasin_id', array('type' => 'hidden'));
		echo $this->Form->end('Modifier');
	
?>

