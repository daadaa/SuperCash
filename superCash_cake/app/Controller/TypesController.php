<?php
	class TypesController extends AppController{
		public function array_union_recursive($array1, $array2)
		{
		    foreach ($array2 as $key => $value)
		    {
		        if(is_array($value))
		        {
		            $array1[$key] = array_union_recursive($array1[$key], $array2[$key]);
		        }
		        else
		        {
		            $array1[$key] = $value;
		        }
		    }
		    return $array1;
		}
		public function index(){
			$types_parent = $this->Type->find('all',array(
					'conditions' => array('ref' => '0')
				));
			$types = $this->Type->find('all', array(
				'joins' => array(
					array(
						'table' => 'types',
						'alias' => 'TypeJoin',
						'type' => 'INNER',
						'conditions' => array(
							'TypeJoin.id = Type.ref'
						)
					),
				),
				'fields' => array('TypeJoin.*', 'Type.*'),
			));
			$types = array_merge($types_parent, $types);
			foreach ($types as $key => $value) {
				if($types[$key]['Type']['ref'] == 0) $types[$key]['Type']['ref'] = 'Pas de parent';
				$nb = count($types[$key]);
				if($nb == 2){
					$types[$key]['Type']['ref'] = $value['TypeJoin']['nom'];
				}
			}
			$this->set('types',$types);
		}
		public function suppr_type($id){
			$ref = $this->Type->find('first', array(
				'fields' => array('ref'),
				'conditions' => array('Type.id' => $id)
				));
			$ref=$ref['Type']['ref'];
			if($ref != 0){
				if ($this->Type->delete($id)) {
					$this->Session->setFlash('Votre type a ete supprime.');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Impossible de supprimer le type.');
				}
			}else{
				$this->Session->setFlash('Vous ne pouvez pas supprimer un type mère.');
			}

		}

		public function ajout_type(){
			$types = $this->Type->find('list', array(
			'fields' => array('nom')
			));
		$this->set('types', $types);
			if ($this->request->is('post')) {
				if($this->request->data['Type']['ref'] != ''){
					if ($this->Type->save($this->request->data)) {
						$this->Session->setFlash('Votre type a ete sauvegarde.');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Impossible d\'ajouter votre type.');
					}
				}else{
					$this->request->data['Type']['ref'] = '0';
					if ($this->Type->save($this->request->data)) {
						$this->Session->setFlash('Votre type a ete sauvegarde.');
						$this->redirect(array('action' => 'index'));
					} else {
						$this->Session->setFlash('Impossible d\'ajouter votre type.');
					}
				}
			}
		}

		public function edit_type($id){
			$this->Type->id = $id;
			if ($this->request->is('get')) {
				$this->request->data = $this->Type->read();
				
			} else {
				if ($this->Type->save($this->request->data)) {
					$this->Session->setFlash('Votre type a été mis à jour.');
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash('Impossible de mettre à jour votre type');
				}
			}
		}
	}

?>