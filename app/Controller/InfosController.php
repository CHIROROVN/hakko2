<?php

App::uses('AppController', 'Controller');
App::uses('CakeTime', 'Utility');

class InfosController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'backend';        
        $this->loadModel('Info');
    }

	public $uses = array();
	public $helpers = array('Html', 'Time', 'Hakko');

	public function index() {
		$infos = $this->Info->getAllInfos();
		$this->set(compact('infos'));
		$this->render('/infos/index');
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
		$info = $this->Info->getInfoById($id);
		$this->set(compact('info'));
		$this->render('/infos/detail');
	}

	public function edit($id) {
		// $info = $this->Info->getInfoById($id);
		// $this->set(compact('info'));

		if ($this->request->is(array('post', 'put'))) {

				echo '<pre>';
				print_r($this->request->data);
				echo '</pre>';

		}else{
			$options = array('conditions' => array('Info.' . $this->Info->primaryKey => $id));
			$this->request->data = $this->Info->find('first', $options);
		}

		$this->render('/infos/edit');

	}

	public function edit_cnf($id) {

	}

	public function edit_save($id) {

	}

	public function delete($id) {
		$info = $this->Info->getInfoById($id);
		$this->set(compact('info'));
		$this->render('/infos/delete');
	}

	public function delete_save($id) {
		$data = array(
			'Info.last_kind' => DELETE,
			'Info.last_date' => "'".date('Y-m-d H:i:s')."'",
			'Info.last_ipadrs' => "'".CLIENT_IP_ADRS."'",
		);

		$this->Info->update($data, $id);
		$this->redirect(array('controller' => 'infos', 'action' => 'delete_complete'));

	}

	public function delete_complete(){
		$this->render('/infos/delete_complete');
	}


}
