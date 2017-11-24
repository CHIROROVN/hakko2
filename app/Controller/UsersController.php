<?php

App::uses('AppController', 'Controller');

class UsersController extends AppController {

	public $uses = array();
	//public $name = 'Users';
	//public $helpers = array('Js');
	public $components = array('Session');
	public $helpers = array('Form', 'Html');

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','logout'); 
        $this->loadModel('User');
    }

	public function login() {

		$this->layout = false;

		if($this->Session->check('Auth.User')){
            $this->redirect(array('controller'=>'menus','action' => 'index'));      
        }

        if ($this->request->is(array('post'))) {
        	$this->User->set($this->request->data);


        	if ($this->User->validates()) {

	        	$this->User->create();
	            if ($this->Auth->login()) {
	                $this->redirect($this->Auth->redirectUrl());
	            } else {
	                $this->Session->setFlash(__('Invalid login id or password'));
	            }
	        }else{
	        	//$this->set('validationErrorsArray', $this->User->invalidFields());
	        	//$errors = $this->User->validationErrors;

	        }
        } 


		//$this->render('/users/login');
	}

	public function logout() {
		$this->layout = false;
		$this->redirect($this->Auth->logout());
		$this->render('/users/logout');
	}
	
}