<<<<<<< HEAD
<?php
=======
<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'une marque",array('controller'=>'Marques','action'=>'add_marque')) ?></td>
	</tr>
</table>
<hr/>

<?php
	echo '<div class="product_table">';
	
>>>>>>> devChris
	App::import("Vendor","table");
	$optionsmarques=$marques;
	$displayFields = array('Nom' => 'nom');
	 
<<<<<<< HEAD
	$actions = array('Delete' => array('/marques/suppr_marque/', 'Marque.id'),
	                 'Edit' => array('/marques/edit_marque/', 'Marque.id'));
=======
	$actions = array('Delete Marque' => array('/marques/delete_marque/', 'Marque.id'),
	                 'Edit Marque' => array('/marques/edit_marque/', 'Marque.id'));
>>>>>>> devChris
	 
	echo $this->Table->createTable('Marque',
	                               $optionsmarques,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );
<<<<<<< HEAD
=======
	echo '</div>';
>>>>>>> devChris
?>