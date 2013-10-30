<h2> Ajouter un type </h2>

<?php
	echo $this->Form->create('Type');
	echo $this->Form->input('nom');
	$optionTypes = $types;
	echo $this->Form->input('ref', array(
        'options' => $optionTypes,
        'type' => 'select',
        'empty' => 'Choisir le parent',
        'label' => 'Type '
    	));

	echo '</br>';
	echo $this->Form->end('Enregistrer');

?>