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
	
	echo $this->Form->submit('Supprimer', array('class' => 'btn'));
	echo $this->Form->end();
?>