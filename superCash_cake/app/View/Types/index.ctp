<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un type",array('controller'=>'Types','action'=>'ajout_type')) ?></td>
	</tr>
</table>
<hr/>

<?php
	App::import("Vendor","table");
	$optionstypes=$types;
	$displayFields = array('Nom' => 'nom',
							'Parent' => 'ref' );
	 
	$actions = array('Delete' => array('/types/suppr_type/', 'Type.id'),
	                 'Edit' => array('/types/edit_type/', 'Type.id'));
	echo '<div class="product_table">';
	echo $this->Table->createTable('Type',
	                               $optionstypes,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );
	echo '</div>'
?>