<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un Magasin",array('controller'=>'Magasins','action'=>'ajout_magasin')) ?></td>
	</tr>
</table>
<hr/>

<?php 
	echo $this->Form->create('Magasin', array(
		'inputDefaults' => array(
			'label' => false
			)
		));
	
	echo '</br>';
	echo $this->Form->input('adresse', array(
        'label' => 'Adresse : '       
    	));
	echo '</br>';
	echo $this->Form->input('ville', array(
        'label' => 'Ville : '       
    	));
	echo '</br>';
	echo $this->Form->input('CP', array(
        'label' => 'CP : '       
    	));
	echo '</br>';
	echo $this->Form->input('nb_rayon', array(
        'label' => 'Nombre rayon : '       
    	));
	echo '</br>';
	echo $this->Form->input('nb_caisse', array(
        'label' => 'Nombre caisse : '       
    	));
	echo '</br>';
	echo $this->Form->input('surface', array(
        'label' => 'Surface : '       
    	));
	echo '</br>';

	echo $this->Form->submit('Ajouter', array('class' => 'btn'));
	echo $this->Form->end();
?>