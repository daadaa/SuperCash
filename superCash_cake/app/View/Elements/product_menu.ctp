<table id="sub_menu">
	<tr>
		<td><?php echo $this->html->link('Gestion des Produits',array('controller'=>'Produits','action'=>'search_product')) ?></td>
		<td><?php echo $this->html->link('Gestion des Marques',array('controller'=>'Marques','action'=>'index')) ?></td>
		<td><?php echo $this->html->link('Gestion des Types',array('controller'=>'Produits','action'=>'index')) ?></td>
	</tr>
</table>
<hr/>