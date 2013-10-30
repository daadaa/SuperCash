<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'une marque",array('controller'=>'Marques','action'=>'ajout_marque')) ?></td>
	</tr>
</table>
<hr/>

<?php
	echo '<div class="product_table">';
	
	App::import("Vendor","table");
	$optionsmarques=$marques;
	$displayFields = array('Nom' => 'nom');
	 
	$actions = array('Delete' => array('/marques/suppr_marque/', 'Marque.id'),
	                 'Edit' => array('/marques/edit_marque/', 'Marque.id'));
	 
	echo $this->Table->createTable('Marque',
	                               $optionsmarques,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );

	echo '</div>';
?>