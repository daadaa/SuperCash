<?php


class ClientsController extends AppController {

	public $uses= array('Client');	

	public function index(){
		$this->set('Client', $this->Client->find('all'));	
	}
	
	public function delete_client($id){
		if($this->Client->delete($id)){
			$this->Session->setFlash('Votre client a ete supprimé.');
			$this->redirect(array('action' => 'index'));
		}else{
			$this->Session->setFlash('Erreur');
		}
	}
	
		
	

}
?>