
<h1>Editer le type</h1>

<?php
		 
   echo $this->Form->create('Type', array(
		'inputDefaults' => array(
			'label' => false
			)
	));
	echo $this->Form->input('nom', array('label'=>"nom"));
	echo $this->Form->end('Modifier');
	
?>

