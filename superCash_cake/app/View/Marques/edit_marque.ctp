<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'une marque",array('controller'=>'Marques','action'=>'ajout_marque')) ?></td>
	</tr>
</table>
<hr/>

<?php
		 
   echo $this->Form->create('Marque', array(
		'inputDefaults' => array(
			'label' => false
			)
	));
	echo $this->Form->input('nom', array('label'=>"Nom : "));
	echo '<br/>';
	echo $this->Form->input('id', array('type'=>"hidden"));
	echo $this->Form->end('Modifier');
	
?>

