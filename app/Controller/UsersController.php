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

    }

	public function login() {
		$this->layout = false;

		if($this->Session->check('Auth.User')){
            $this->redirect(array('controller'=>'menus','action' => 'index'));      
        }

        if ($this->request->is(array('post', 'put'))) {
        	//$this->User->create();

            if ($this->Auth->login()) {
                $this->Session->setFlash(__('Welcome, '. $this->Auth->user('u_login')));
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Invalid login id or password'));
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