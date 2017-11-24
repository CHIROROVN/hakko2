<?php
App::uses('Info', 'Model');
App::uses('AppController', 'Controller');

class HomeController extends AppController {


	public $uses = array();

	public function index() {		
       $this->loadModel('Info');
       $arrData = $this->Info->find('all', array('limit' => 5,'order' => array('info_date' => 'desc')));
       $this->set('arrInfo', $arrData); 
	   $this->layout = 'frontend';		
	}


}
