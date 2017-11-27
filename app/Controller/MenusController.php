<?php

App::uses('AppController', 'Controller');

class MenusController extends AppController {


	public $uses = array();

	public function index() {
		$this->layout = 'backend';
		$this -> render('/menus/index');
	}


}
