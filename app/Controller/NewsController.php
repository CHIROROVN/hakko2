<?php

App::uses('AppController', 'Controller');

class NewsController extends AppController {


	public $uses = array();

	public function index() {
		$this->layout = 'frontend';
		//$this -> render('/home/index');
	}


}
