<?php
class LogoutsController extends AppController {


	public function index(){
		$this->Session->setFlash("vous avez étais déconnecter");
		$this->redirect('/');
	
	}
	
}
?>