
<h1>Editer le produit</h1>

<?php
		 
   echo $this->Form->create('Marque', array(
		'inputDefaults' => array(
			'label' => false
			)
	));
	echo $this->Form->input('nom', array('label'=>"nom"));
	echo $this->Form->input('id', array('type'=>"hidden"));
	echo $this->Form->end('Modifier');
	
?>

