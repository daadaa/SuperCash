<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un magasin",array('controller'=>'magasin','action'=>'ajout_magasin')) ?></td>
	</tr>
</table>
<hr/>
<?php 
	echo $this->Form->create('Magasin', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	
	echo $this->Form->submit('Supprimer', array('class' => 'btn'));
	echo $this->Form->end();
?>