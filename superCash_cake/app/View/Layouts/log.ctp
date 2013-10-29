<!DOCTYPE html>
<html>
	<head>
		<title>
			SuperCash Admin
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
				<h1 class="titre_accueil"><u>SuperCash Admin<u></h1>
			</div>
			<div id="log_content">				
				<?php echo $this->Session->flash(); 
					  echo $this->fetch('content'); ?>
			</div>
			<div id="footer">
				&copy 2013 - FHLM
			</div>
		</div>
	</body>
</html>
