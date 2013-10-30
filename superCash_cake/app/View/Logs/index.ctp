<div id="box_msg_accueil" >
	<marquee direction="left" scrollamount="8">Bienvenue, merci de vous connecter pour accèder au site! </marquee>
</div>	
<div id="box_connexion">
	
		<?php echo $this->Form->create('Login', array('controller'=> 'logins', 'action'=>'login'));?>
		<?php echo $this->Form->create('logins', array('controller'=> 'logins', 'action'=>'login'));?>
		<table>
			<tr>
				<td><span class="text_connexion"> Login :</span></td>
				<td><?php echo $this->Form->input('log',array('label' => false,'class'=>'input_connexion')); ?></td>
			</tr>
			<tr>
				<td><span class="text_connexion"> Mot de passe :</span></td>
				<td><?php echo $this->Form->input('password',array('label' => false,'class'=>'input_connexion')); ?></td>
			</tr>
			<tr><td><?php echo $this->Form->end("Se connecter",array('class'=>'submit_connexion'));
					//echo $this->Form->submit('Connexion', array('class'=>'sub_connexion'));?></td>
			</tr>
		</table>
</div>
