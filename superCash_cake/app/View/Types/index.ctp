<?php
	App::import("Vendor","table");
	$optionstypes=$types;
	$displayFields = array('Nom' => 'nom',
							'Parent' => 'ref' );
	 
	$actions = array('Delete' => array('/types/suppr_type/', 'Type.id'),
	                 'Edit' => array('/types/edit_type/', 'Type.id'));
	 
	echo $this->Table->createTable('Type',
	                               $optionstypes,
	                               $displayFields,
	                               $actions,
	                               'You currently have no properties listed'
	                               );
?>