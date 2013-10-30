<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un Magasin",array('controller'=>'Magasins','action'=>'ajout_magasin')) ?></td>
	</tr>
</table>
<hr/>

<?php

App::import("Vendor","table");
	$optionsfournisseurs=$Magasin;
	$displayFields = array( 'adresse' => 'adresse',
							'ville' => 'ville',
							'CP' => 'CP',
							'nombre_rayon'=>'nb_rayon',
							 'nombre_caisse' => 'nb_caisse',
							'surface' => 'surface',
							);


	echo '<div class="product_table">';

	$actions = array('Supprimer' => array('/Magasins/delete_magasin/', 'id'),
	                 'Modifier' => array('/Magasins/edit_magasin/', 'id'));
	 
	echo $this->Table->createTable('Magasin',
	                               $optionsfournisseurs,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );

	echo '</div>'

?>