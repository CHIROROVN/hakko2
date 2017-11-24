<?php
App::uses('Info', 'Model');
App::uses('AppController', 'Controller');

class NewsController extends AppController {


	public $uses = array();

	public function index() {
	   $this->loadModel('Info');
       $arrData = $this->Info->find('all');
       $this->set('arrInfo', $arrData); 
	   $this->layout = 'frontend';		
	}


}
