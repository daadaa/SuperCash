<?php 
	echo $this->Form->create('Fournisseur', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	
	echo $this->Form->input('nom', array(
        'label' => 'Nom: '       
    	));
	echo '</br>';
	echo $this->Form->input('adresse', array(
        'label' => 'adresse: '       
    	));
	echo '</br>';
	echo $this->Form->input('ville', array(
        'label' => 'ville: '       
    	));
	echo '</br>';
	echo $this->Form->input('CP', array(
        'label' => 'CP: '       
    	));
	echo '</br>';
	echo $this->Form->input('mail', array(
        'label' => 'mail: '       
    	));
	echo '</br>';
	echo $this->Form->input('telephone', array(
        'label' => 'telephone: '       
    	));
	echo '</br>';

	echo $this->Form->submit('Ajouter', array('class' => 'btn'));
	echo $this->Form->end();
?>