<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un Fournisseur",array('controller'=>'Fournisseurs','action'=>'ajout_fournisseur')) ?></td>
	</tr>
</table>
<hr/>

<?php

App::import("Vendor","table");
	$optionsfournisseurs=$fournisseurs;
	$displayFields = array('nom' => 'nom',
							'adresse' => 'adresse',
							'ville' => 'ville',
							'CP' => 'CP',
							'mail' => 'mail',
							'telephone' => 'telephone',
							);


	echo '<div class="product_table">';

	$actions = array('Delete' => array('/fournisseurs/delete_fournisseur/', 'id'),
	                 'Edit' => array('/fournisseurs/edit_fournisseur/', 'id'));
	 
	echo $this->Table->createTable('Fournisseur',
	                               $optionsfournisseurs,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );

	echo '</div>'

?>