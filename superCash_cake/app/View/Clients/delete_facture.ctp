<?php 
	echo $this->Form->create('factures_client', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	
	echo $this->Form->submit('Supprimer', array('class' => 'btn'));
	echo $this->Form->end();
?>