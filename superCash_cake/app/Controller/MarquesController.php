<?php
	class MarquesController extends AppController{
		function index(){
			$marques = $this->Marque->find('all',array(
				'fields' => array('Marque.*')
				));
			$this->set('marques',$marques);
		}
	}

?>