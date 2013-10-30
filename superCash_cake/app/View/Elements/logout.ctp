<div id="logout">
	M.<?php  echo $this->Session->read('membre');
	?>
	<br><?php echo $this->html->link('Se deconnecter', array('controller' => 'logouts', 'action' => 'index')); ?>
</div>