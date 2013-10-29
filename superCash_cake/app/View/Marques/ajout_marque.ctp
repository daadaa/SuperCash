<h2> Ajouter une marque </h2>

<?php
	echo $this->Form->create('Marque');
	echo $this->Form->input('nom');
	echo $this->Form->end('Enregistrer');

?>