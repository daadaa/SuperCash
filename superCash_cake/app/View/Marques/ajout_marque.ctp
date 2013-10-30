<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'une marque",array('controller'=>'Marques','action'=>'ajout_marque')) ?></td>
	</tr>
</table>
<hr/>

<?php
	echo $this->Form->create('Marque');
	echo '<br/>';
	echo $this->Form->input('Nom : ');
	echo '<br/>';
	echo $this->Form->end('Enregistrer');

?>