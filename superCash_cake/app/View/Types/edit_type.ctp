<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un type",array('controller'=>'Types','action'=>'ajout_type')) ?></td>
	</tr>
</table>
<hr/>

<?php
		 
   echo $this->Form->create('Type', array(
		'inputDefaults' => array(
			'label' => false
			)
	));
	echo $this->Form->input('nom', array('label'=>"Nom : "));
	echo '</br>';
	echo $this->Form->end('Modifier');
	
?>

