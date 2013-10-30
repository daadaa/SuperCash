<?php echo $this->element('product_menu') ?>

<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link("Ajout d'un produit",array('controller'=>'Produits','action'=>'ajout_produit')) ?></td>
	</tr>
</table>
<hr/>