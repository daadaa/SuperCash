﻿<div>
	<div class="msg_accueil" >
		<marquee direction="left" scrollamount="8">bienvenue, merci de vous connecter pour accèder au site :</marquee>
	</div>	
	<div id="connexion">
	<div id="connexion_text">
		<?php echo $this->Form->create('Connect', array('controller'=> 'connect', 'action'=>'index'));?>
		<table class="table_connexion">
		<tr>
			<td><span class="log"> login :</span></td>
			<td><?php echo $this->Form->input('log',array('label' => false,'class'=>'input_log')); ?></td>
		</tr>
		<tr>
			<td><span class="log"> mot de passe :</span></td>
			<td><?php echo $this->Form->input('password',array('label' => false,'class'=>'input_log')); ?></td>
		</tr>
		<tr><td><?php echo $this->Form->end("connexion",array('class'=>'sub_connexion'));//echo $this->Form->submit('Connexion', array('class'=>'sub_connexion'));?></td></tr>
		</table>
	</div>	
	</div>

</div>