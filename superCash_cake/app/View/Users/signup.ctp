<h2> Enregistrer un admin </h2>

<?php
	echo $this->Form->create('User');
	echo $this->Form->input('login');
	echo $this->Form->input('mdp');
	echo $this->Form->end('Enregistrer');

?>