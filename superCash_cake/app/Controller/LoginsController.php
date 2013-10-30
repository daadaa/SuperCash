<?php
class LoginsController extends AppController {
	public $uses= array('User');
	

	public function login(){
		if($this->request->is('post')){
			if($this->request->data['logins']['log']!=null){
				if($this->request->data['logins']['password']!=null){
					
					$id =$this->User->find('first', array(
						'conditions'=> array('User.username'=>$this->request->data['logins']['log']),
						'fields'=> array('User.id')
					));
					
					$id = $id['User']['id'];
					
					$log = $this->User->find('first',array(
						'conditions'=> array('User.username'=>$this->request->data['logins']['log'])
						)
					);
					$mdp = $this->User->find('first',array(
						'conditions'=> array(
							'User.password'=>$this->request->data['logins']['password'],
							'User.username'=>$this->request->data['logins']['log']
							)
						)
					);
					
					if($log && $mdp){
						$this->Session->write('membre',$this->request->data['logins']['log']);
						$this->redirect(array('controller'=>'homes','action'=>'index/'.$id));
					}
					else{
						$this->redirect(array('controller'=>'logs','action'=>'index'));
					}
				}
				else{
					$this->redirect(array('controller'=>'logs','action'=>'index'));
				}
			}else{
				$this->redirect(array('controller'=>'logs','action'=>'index'));
			}
		}
		
		
	
	}
	
}
?>