<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un Fournisseur",array('controller'=>'Fournisseurs','action'=>'ajout_fournisseur')) ?></td>
	</tr>
</table>
<hr/>

<?php
		 
   echo $this->Form->create('Fournisseur', array(
		'inputDefaults' => array(
			'label' => false
			)
	));
		
		
		echo $this->Form->input('nom', array('label'=>"Nom : "));
		echo '</br>';
		echo $this->Form->input('adresse', array('label'=>"Adresse : "));
		echo '</br>';
		echo $this->Form->input('ville', array('label'=>"Ville : "));
		echo '</br>';
		echo $this->Form->input('CP', array('label' => 'CP : '));
		echo '</br>';
		echo $this->Form->input('mail', array('label' => 'Mail : '));
		echo '</br>';
		echo $this->Form->input('telephone', array('label' => 'Telephone : '));
		echo '</br>';
		echo $this->Form->input('id', array('label' => 'hidden'));
	echo $this->Form->end('Modifier');
	
?>

