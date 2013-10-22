<div>
	<div class="msg_accueil" >
		<marquee direction="left" scrollamount="8">bienvenue, merci de vous connecter pour accèder au site :</marquee>
	</div>	
	<div id="connexion">
		<?php echo $this->Form->create('Connect');?>
		<span class="log"> login :</span><?php echo $this->Form->input('log',array('label' => false),'class'=>'input_log'); ?>
		<br>
		<span class="log"> mot de passe : </span> <?php echo $this->Form->input('mdp',array('label' => false),'class'=>'input_log'); ?>
		
	</div>

</div>