<?php


class ClientsController extends AppController {
	
	public $uses= array('factures_client','Client');
	
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

	public function delete_facture($id){
		if($this->factures_client->delete($id)){
			$this->Session->setFlash('La facture a ete supprimé.');
			$this->redirect(array('action' => 'index'));
		}else{
			$this->Session->setFlash('Erreur');
		}
	}
	
	
	public function detail_client($id){
		$id=2;
		if($this->request->is('get')) {
			$fact = $this->factures_client->find('all',array(
				'conditions'=>array('factures_client.client_id'=>$id)
				));
			$nom = $this->Client->find('first',array(
				'conditions'=>array('Client.id'=>$id),
				'fields'=>array('Client.nom')
				)
			);
			$prenom = $this->Client->find('first',array(
				'conditions'=>array('Client.id'=>$id),
				'fields'=>array('Client.prenom')
				)
			);
			
			$nom=$nom['Client']['nom'];
			$prenom=$prenom['Client']['prenom'];
			
			$this->set('Nom',$nom);
			$this->set('Prenom',$prenom);
			$this->set('Facture',$fact);
		} 
	
	
	}
		
	

}
?>