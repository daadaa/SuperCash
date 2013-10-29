<?php 
	echo $this->Form->create('Fournisseur', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	
	echo $this->Form->submit('Supprimer', array('class' => 'btn'));
	echo $this->Form->end();
?>