<?php
App::uses('News', 'Model');
App::uses('AppController', 'Controller');

class HomeController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('index'));
    }
	public $uses = array();

	public function index() {		
       $this->loadModel('News');      
       $arrData = $this->News->getInfoHome(5);//find('all', array('limit' => 5,'order' => array('info_date' => 'desc')));
       $this->set('arrInfo', $arrData); 
	   $this->layout = 'frontend';
     $this -> render('/home/index');	
	}


}
