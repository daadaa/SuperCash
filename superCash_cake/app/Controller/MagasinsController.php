<?php

class MagasinsController extends AppController{

	public $uses= array('Magasin');	
	
	public function index(){
		$this->set('Magasin', $this->Magasin->find('all'));
	
	}
	public function ajout_magasin(){
		if ($this->request->is('post')) {
				if ($this->Magasin->save($this->request->data)) {
					$this->Session->setFlash('Votre magasin a ete sauvegarde.');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Impossible d\'ajouter votre post.');
				}
			}
	}
	
	public function delete_magasin($id){
		if($this->Magasin->delete($id)){
			$this->Session->setFlash('Votre magasin a ete supprimé.');
			$this->redirect(array('action' => 'index'));
		}else{
			$this->Session->setFlash('Erreur');
		}
	}
	
	public function edit_magasin($id = nul) {
		$this->Magasin->id = $id;
			if ($this->request->is('get')) {
				$this->request->data = $this->Magasin->read();
				
			} else {
				if ($this->Magasin->save($this->request->data)) {
					$this->Session->setFlash('Votre magasin a été mis à jour.');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Impossible de mettre à jour votre actualité');
				}
			}
	}


}
?>
