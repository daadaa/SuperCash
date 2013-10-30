<?php echo $this->element('product_menu') ?>
<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un produit",array('controller'=>'Produits','action'=>'ajout_produit')) ?></td>
	</tr>
</table>
<hr/>
<?php 
	echo '<div id="product_search_bar">';
	
	echo $this->Form->create('Produit', array(
		'inputDefaults' => array(
			'label' => false, 
			'div' => false
			)
		));
	$optionTypes = $types;
	echo $this->Form->input('type_id', array(
        'options' => $optionTypes,
        'type' => 'select',
        'empty' => 'Choisir le type',
        'label' => 'Type: ',
		'class' => 'search_bar_detail'
    	));
	$optionMagasins = $magasins;
	echo $this->Form->input('magasin_id', array(
        'options' => $optionMagasins,
        'type' => 'select',
        'empty' => 'Choisir le magasin',
        'label' => 'Magasin: ',
		'class' => 'search_bar_detail'
    	));

	echo $this->Form->input('nom',array('label' => 'Nom: ',
		'class' => 'search_bar_detail'));

	echo $this->Form->submit('Valider la recherche', array('class' => 'btn',
			'class' => 'search_bar_detail',
			'div' => false));
	echo $this->Form->end();

	echo '</div>';
	
	echo '<div class="product_table">';

	App::import("Vendor","table");
	if($produits){
		$optionsproduits=$produits;
		$displayFields = array('Nom' => 'Produit.nom',
								'Volume' => 'Produit.volume',
								'Prix' => 'Produit.prix_actuel',
								'Type' => 'TypeJoin.nom',
								'Marque' => 'MarqueJoin.nom',
								'Magasin' => 'MagasinJoin.ville');
		 
		$actions = array('Delete' => array('/produits/suppr_produit/', 'Produit.id'),
		                 'Edit' => array('/produits/edit_produit/', 'Produit.id'));
		 
		echo $this->Table->createTable('Marque',
		                               $optionsproduits,
		                               $displayFields,
		                               $actions,
		                               'You currently have no properties listed'
		                               );
	}

	echo '</div>';
?>