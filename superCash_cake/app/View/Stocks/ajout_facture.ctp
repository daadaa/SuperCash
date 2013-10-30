<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'une entree",array('controller'=>'Stocks','action'=>'ajout_facture')) ?></td>
	</tr>
</table>
<hr/>
<?php
	echo $this->Form->create('Factures_fournisseur', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	$optionFournisseurs = $fournisseurs;
	echo $this->Form->input('fournisseur_id', array(
        'options' => $optionFournisseurs,
        'type' => 'select',
        'empty' => 'Choisir le fournisseur',
        'label' => 'Fournisseur : '
    	));
	echo '</br>';
	echo $this->Form->input('date',array('label'=>'Date : ','dateFormat' => 'YMD'));
	echo '</br>';
	echo $this->Form->input('prix_total',array('label'=>'Prix Total : '));
	echo '</br>';
	$optionMagasins = $magasins;
	echo $this->Form->input('magasin_id', array(
        'options' => $optionMagasins,
        'type' => 'select',
        'empty' => 'Choisir le magasin',
        'label' => 'Magasin : '));
	echo '</br>';
	echo $this->Form->submit("Valider l'entree", array('class' => 'btn'));
	echo $this->Form->end();
?>