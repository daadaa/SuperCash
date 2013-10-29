<?php

class UsersController extends AppController{
	function signup(){
		if($this->request->is('post')){
			$data = $this->request->data;
			$data['User']['id'] = null;
			// if(!empty($data['User']['mdp'])){
			// 	$data['User']['mdp'] = Security::hash($data['User']['mdp']);
			// } 
			// debug($data);
			if($this->User->save($data, true, array('login', 'mdp'))){
				$this->Session->setFlash('UserAdmin créé.');
			}
		}
	}
}

?>