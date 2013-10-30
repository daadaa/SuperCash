<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un type",array('controller'=>'Types','action'=>'ajout_type')) ?></td>
	</tr>
</table>
<hr/>

<?php
	echo $this->Form->create('Type');
	echo $this->Form->input('nom',array('label' => 'Nom : '));
	$optionTypes = $types;
	echo '</br>';
	echo $this->Form->input('ref', array(
        'options' => $optionTypes,
        'type' => 'select',
        'empty' => 'Choisir le parent',
        'label' => 'Type : '
    	));

	echo '</br>';
	echo $this->Form->end('Enregistrer');

?>