<?php

App::uses('AppController', 'Controller');

class MenusController extends AppController {


	public $uses = array();

	public function index() {
			echo '<pre>';
			print_r($this->Session->read('Auth.User'));
			echo '</pre>';
		$this->layout = 'backend';
		$this -> render('/menus/index');
	}


}
