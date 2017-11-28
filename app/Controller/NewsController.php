<?php
App::uses('News', 'Model');
App::uses('AppController', 'Controller');

class NewsController extends AppController {
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('index', 'view'));
    }

	public $uses = array();	

	var $helpers = array('Paginator');
    var $paginator = array('limit' => 2);

	public function index() {
	   	
	   $this->loadModel('News');	   
       //$arrData = $this->Info->find('all');
       //$this->Paginator->settings = $this->paginate;
       //$arrData = $this->Paginator->paginate('Info');  
       $this->paginate = array(  'limit' => 2  );     
       $arrData = $this->paginate("News");

      /* echo '<pre>';
       print_r($arrData);
       echo '</pre>';die;*/
       $this->set('arrInfo', $arrData);        
	   $this->layout = 'frontend';		
	}

	public function view($id) {	
			
	   $this->loadModel('News');	
	   $detail = $this->News->find('first', array('conditions' => array('info_id' => $id)));
	   /*echo '<pre>';
	   print_r($detail);
	   echo '</pre>';die;*/
	   if(!isset($detail['News']['info_id'])){
		   $this->redirect(array('controller' => 'news','action' => 'index'));
		}   
	   $this->set('info', $detail); 
       $this->layout = 'frontend';		
	}


}
