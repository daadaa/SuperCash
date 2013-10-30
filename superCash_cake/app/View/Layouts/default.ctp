<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php echo $this->html->link('SuperCash Admin',array('controller'=>'Homes','action'=>'index')) ?>
		</title>
		
		<?php
			echo $this->Html->charset(); 
			echo $this->Html->meta('icon');
			echo $this->Html->css('default_gabarit');
	
			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<h1 class="titre_header"><?php echo $this->html->link('SuperCash Admin',array('controller'=>'Homes','action'=>'index')) ?></h1>
			</div>
			<?php echo $this->element('logout') ?>
			<?php echo $this->element('menu') ?>
			<div id="content">				
				<?php echo $this->Session->flash(); 
					  echo $this->fetch('content'); ?>
			</div>
			<div id="footer">
				&copy 2013 - FHLM
			</div>
		</div>
	</body>
</html>
