<!-- Fichier: /app/View/Actualites/edit.ctp -->

<div class="page-header">

<h1>Editer le fournisseur</h1>

<?php
		 
   echo $this->Form->create('Fournisseur', array(
		'inputDefaults' => array(
			'label' => false
			)
	));
		
		
		echo $this->Form->input('nom', array('label'=>"nom"));
		echo $this->Form->input('adresse', array('label'=>"prix"));
		echo $this->Form->input('ville', array('label'=>"volume"));
		echo $this->Form->input('CP', array('label' => 'CP'));
		echo $this->Form->input('mail', array('label' => 'mail'));
		echo $this->Form->input('telephone', array('label' => 'telephone'));
		echo $this->Form->input('id', array('label' => 'hidden'));
	echo $this->Form->end('Modifier');
	
?>

