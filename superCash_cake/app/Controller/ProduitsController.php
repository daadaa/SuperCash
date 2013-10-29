<?php

class ProduitsController extends AppController{
	public $uses= array('Marque','Magasin','Type','Produit');

	public function edit_produit($id = null) {
		$this->Produit->id = $id;

		if ($this->request->is('get')) {
			$this->request->data = $this->Produit->read();
			$types = $this->Type->find('list', array(
			'fields' => array('nom')
			));
			$this->set('types', $types);
			
			$marques = $this->Marque->find('list', array(
			'fields' => array('nom')
			));
			$this->set('marques', $marques);

			$magasins = $this->Magasin->find('list', array(
				'fields' => array('ville')
				));
			$this->set('magasins', $magasins);

			$produits = $this->Produit->find('all', array(
				'joins' => array(
					array(
						'table' => 'types',
						'alias' => 'TypeJoin',
						'type' => 'INNER',
						'conditions' => array(
							'TypeJoin.id = Produit.type_id'
						)
					),
					array(
						'table' => 'magasins',
						'alias' => 'MagasinJoin',
						'type' => 'INNER',
						'conditions' => array(
							'MagasinJoin.id = Produit.magasin_id'
						)
					),
					array(
						'table' => 'marques',
						'alias' => 'MarqueJoin',
						'type' => 'INNER',
						'conditions' => array(
							'MarqueJoin.id = Produit.marque_id'
						)
					),
				),
				'conditions' => array(
					'TypeJoin.id' => $this->request->data['Produit']['type_id'],
					'MagasinJoin.id' =>  $this->request->data['Produit']['magasin_id'],
					'Produit.nom LIKE' => '%'.$this->request->data['Produit']['nom'].'%'
				),
				'fields' => array('TypeJoin.*', 'Produit.*', 'MagasinJoin.*', 'MarqueJoin.*'),
			));
	
		} else {
			if ($this->Produit->save($this->request->data)) {
				$this->Session->setFlash('Votre Produit a été mis à jour.');
				$this->redirect(array('action' => 'search_product'));
			} else {
				$this->Session->setFlash('Impossible de mettre à jour votre actualité');
			}
		}
	}
	
	public function search_product(){
		$types = $this->Type->find('list', array(
			'fields' => array('nom')
			));
		$this->set('types', $types);

		$magasins = $this->Magasin->find('list', array(
			'fields' => array('ville')
			));
		$this->set('magasins', $magasins);
		$this->set('produits',null);
		if ($this->request->is('post')) {
			if($this->request->data['Produit']['type_id'] == '' && $this->request->data['Produit']['magasin_id'] == ''){
				$test = $this->Produit->find('all', array(
				    'joins' => array(
				        array(
				            'table' => 'types',
				            'alias' => 'TypeJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'TypeJoin.id = Produit.type_id'
				            )
				        ),
				        array(
				        	'table' => 'magasins',
				            'alias' => 'MagasinJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'MagasinJoin.id = Produit.magasin_id'
				            )
				        ),
				        array(
				        	'table' => 'marques',
				            'alias' => 'MarqueJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'MarqueJoin.id = Produit.marque_id'
				            )
				        ),
				    ),
				    'fields' => array('TypeJoin.*', 'Produit.*', 'MagasinJoin.*', 'MarqueJoin.*'),
				));
			}else if($this->request->data['Produit']['type_id'] == '' && $this->request->data['Produit']['magasin_id'] != ''){
				$test = $this->Produit->find('all', array(
				    'joins' => array(
				        array(
				            'table' => 'types',
				            'alias' => 'TypeJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'TypeJoin.id = Produit.type_id'
				            )
				        ),
				        array(
				        	'table' => 'magasins',
				            'alias' => 'MagasinJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'MagasinJoin.id = Produit.magasin_id'
				            )
				        ),
				        array(
				        	'table' => 'marques',
				            'alias' => 'MarqueJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'MarqueJoin.id = Produit.marque_id'
				            )
				        ),
				    ),
				    'conditions' => array(
				        'MagasinJoin.id' =>  $this->request->data['Produit']['magasin_id'],
				        'Produit.nom LIKE' => '%'.$this->request->data['Produit']['nom'].'%'
				    ),
				    'fields' => array('TypeJoin.*', 'Produit.*', 'MagasinJoin.*', 'MarqueJoin.*'),
				));
			}else if($this->request->data['Produit']['type_id'] != '' && $this->request->data['Produit']['magasin_id'] == ''){
				$test = $this->Produit->find('all', array(
				    'joins' => array(
				        array(
				            'table' => 'types',
				            'alias' => 'TypeJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'TypeJoin.id = Produit.type_id'
				            )
				        ),
				        array(
				        	'table' => 'magasins',
				            'alias' => 'MagasinJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'MagasinJoin.id = Produit.magasin_id'
				            )
				        ),
				        array(
				        	'table' => 'marques',
				            'alias' => 'MarqueJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'MarqueJoin.id = Produit.marque_id'
				            )
				        ),
				    ),
				    'conditions' => array(
				        'TypeJoin.id' => $this->request->data['Produit']['type_id'],
				        'Produit.nom LIKE' => '%'.$this->request->data['Produit']['nom'].'%'
				    ),
				    'fields' => array('TypeJoin.*', 'Produit.*', 'MagasinJoin.*', 'MarqueJoin.*'),
				));
			}else{
				$test = $this->Produit->find('all', array(
				    'joins' => array(
				        array(
				            'table' => 'types',
				            'alias' => 'TypeJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'TypeJoin.id = Produit.type_id'
				            )
				        ),
				        array(
				        	'table' => 'magasins',
				            'alias' => 'MagasinJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'MagasinJoin.id = Produit.magasin_id'
				            )
				        ),
				        array(
				        	'table' => 'marques',
				            'alias' => 'MarqueJoin',
				            'type' => 'INNER',
				            'conditions' => array(
				                'MarqueJoin.id = Produit.marque_id'
				            )
				        ),
				    ),
				    'conditions' => array(
				        'TypeJoin.id' => $this->request->data['Produit']['type_id'],
				        'MagasinJoin.id' => $this->request->data['Produit']['magasin_id'],
				        'Produit.nom LIKE' => '%'.$this->request->data['Produit']['nom'].'%'
				    ),
				    'fields' => array('TypeJoin.*', 'Produit.*', 'MagasinJoin.*', 'MarqueJoin.*'),
				));
			}
			$this->set('produits',$test);
		}
	}

	public function ajout_produit(){
		$marques = $this->Marque->find('list', array(
			'fields' => array('nom')
			));
		$this->set('marques', $marques);
		$types = $this->Type->find('list', array(
			'fields' => array('nom')
			));
		$this->set('types', $types);
		$magasins = $this->Magasin->find('list', array(
			'fields' => array('ville')
			));
		$this->set('magasins', $magasins);
		if ($this->request->is('post')) {
				if ($this->Produit->save($this->request->data)) {
					$this->Session->setFlash('Votre produit a ete sauvegarde.');
					$this->redirect(array('action' => 'ajout_produit'));
				} else {
					$this->Session->setFlash('Impossible d\'ajouter votre post.');
				}
			}
	}

	public function suppr_produit($id){
		if ($this->Produit->delete($id)) {
					$this->Session->setFlash('Votre produit a ete supprime.');
					$this->redirect(array('action' => 'search_product'));
				} else {
					$this->Session->setFlash('Impossible de supprimer le produit.');
				}
	}

}
?>