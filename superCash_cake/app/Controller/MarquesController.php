<?php
	class MarquesController extends AppController{
		function index(){
			$marques = $this->Marque->find('all',array(
				'fields' => array('Marque.*')
				));
			$this->set('marques',$marques);
		}
		public function suppr_marque($id){
			if ($this->Marque->delete($id)) {
				$this->Session->setFlash('Votre marque a ete supprime.');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('Impossible de supprimer la marque.');
			}
		}

		public function ajout_marque(){
			if ($this->request->is('post')) {
				if ($this->Marque->save($this->request->data)) {
					$this->Session->setFlash('Votre marque a ete sauvegarde.');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Impossible d\'ajouter votre marque.');
				}
			}
		}

		public function edit_marque($id){
			$this->Marque->id = $id;
			if ($this->request->is('get')) {
				echo 'something';
				$this->request->data = $this->Marque->read();
				
			} else {
				if ($this->Marque->save($this->request->data)) {
					$this->Session->setFlash('Votre marque a été mis à jour.');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Impossible de mettre à jour votre marque');
				}
			}
		}
	}

?>