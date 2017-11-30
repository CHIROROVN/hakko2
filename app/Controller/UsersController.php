<?php

App::uses('AppController', 'Controller');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class UsersController extends AppController {

	public $uses = array();
	public $name = 'Users';
	public $components = array('Session', 'Auth');
	public $helpers = array('Form', 'Html');

	public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = false;
    }

	public function login() {
		$this->layout = false;

		if($this->Session->check('Auth.User')){
            $this->redirect(array('controller'=>'menus','action' => 'index'));      
        }

        if ($this->request->is(array('post'))) {
        	$this->User->set($this->request->data);
        	if ($this->User->validates()) {
	            if ($this->Auth->login()) {
	                return $this->redirect(array('controller' => 'menus', 'action' => 'index'));
	            } else {
	                $this->Flash->error(__('login_erorr', array('key'=>'flash')));
	            }
	        }
        }
        return $this->render('/users/login');

	 }

	public function logout() {
		$this->layout = false;
		//$this->redirect($this->Auth->logout());
		$this->Session->delete('Auth.User');
		$this->Session->delete('User');
		$this->Session->destroy();
		return $this->render('/users/logout');
	}
	
}