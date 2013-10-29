<?php

class FournisseursController extends AppController{
	public $uses= array('Fournisseur');
	
	public function index(){
		$this->set('fournisseurs', $this->Fournisseur->find('all'));
	
	}
	
	public function edit_fournisseur($id = nul) {
		$this->Fournisseur->id = $id;
			if ($this->request->is('get')) {
				$this->request->data = $this->Fournisseur->read();
				
			} else {
				if ($this->Fournisseur->save($this->request->data)) {
					$this->Session->setFlash('Votre Fournisseur a été mis à jour.');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Impossible de mettre à jour votre actualité');
				}
			}
	}
	
	

	public function ajout_Fournisseur(){
		if ($this->request->is('post')) {
				if ($this->Fournisseur->save($this->request->data)) {
					$this->Session->setFlash('Votre Fournisseur a ete sauvegarde.');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Impossible d\'ajouter votre post.');
				}
			}
	}

	public function delete_Fournisseur($id){
		if($this->Fournisseur->delete($id)){
			$this->Session->setFlash('Votre Fournisseur a ete supprimé.');
			$this->redirect(array('action' => 'index'));
		}else{
			$this->Session->setFlash('Erreur');
		}
	}

}
?>