<div id="menu">
	<table class="menu_table">
		<tr>
			<td>
				<?php echo $this->html->link('Produit',array('controller'=>'Produits','action'=>'index')) ?>
			</td>
			<td>
				<?php echo $this->html->link('Stock',array('controller'=>'Stocks','action'=>'index')) ?>
			</div>
			<td>
				<?php echo $this->html->link('Fournisseurs',array('controller'=>'Fournisseurs','action'=>'index')) ?>
			</td>
			<td>
				<?php echo $this->html->link('Magasin',array('controller'=>'Magasins','action'=>'index')) ?>
			</td>
			<td>
				<?php echo $this->html->link('Client',array('controller'=>'Clients','action'=>'index')) ?>
			</td>
		</tr>
	</table>
</div>
