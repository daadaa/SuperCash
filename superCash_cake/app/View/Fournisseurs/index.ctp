<<<<<<< HEAD
=======
<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un Fournisseur",array('controller'=>'Fournisseurs','action'=>'ajout_fournisseur')) ?></td>
	</tr>
</table>
<hr/>

>>>>>>> devChris
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
<<<<<<< HEAD
	echo $this->Html->link('Ajouter un fournisseur', array('controller' => 'fournisseurs', 'action' => 'ajout_fournisseur')); 
	 
=======
	//echo $this->Html->link('Ajouter un fournisseur', array('controller' => 'fournisseurs', 'action' => 'ajout_fournisseur')); 
	
	echo '<div class="product_table">';
>>>>>>> devChris
	$actions = array('Supprimer' => array('/fournisseurs/delete_fournisseur/', 'id'),
	                 'Modifier' => array('/fournisseurs/edit_fournisseur/', 'id'));
	 
	echo $this->Table->createTable('Fournisseur',
	                               $optionsfournisseurs,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );
<<<<<<< HEAD

=======
	echo '</div>'
>>>>>>> devChris
?>