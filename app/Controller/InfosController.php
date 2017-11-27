<?php

App::uses('AppController', 'Controller');

class InfosController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'backend';
        $this->loadModel('Info');
    }

	public $uses = array();

	public function index() {

		//$this -> render('/infos/index');
	}

	public function regist() {
		if ($this->request->is(array('post'))) {

        	$this->Info->set($this->request->data);

        	if ($this->Info->validates()) {
	        	$this->Info->create();
	            if ($this->Info->save($this->request->data)) {
					//$this->Flash->success(__('The info has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					//$this->Flash->error(__('The info could not be saved. Please, try again.'));
				}
	        }
        } 
	}

	public function regist_cnf() {

	}

	public function regist_save() {

	}

	public function detail($id) {

	}

	public function edit($id) {

	}

	public function edit_cnf($id) {

	}

	public function edit_save($id) {

	}

	public function delete($id) {

	}

	public function delete_save($id) {
		//$this->layout = false;
	}


}
