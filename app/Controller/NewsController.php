<?php
App::uses('Info', 'Model');
App::uses('AppController', 'Controller');

class NewsController extends AppController {

	public $uses = array();

	public $components = array('Paginator');

	public $paginate = array(
        'Info' => array (NULL,array('*'),'limit' => 25)      
    );  

	public function index() {
	   $this->loadModel('Info');	   
       $arrData = $this->Info->find('all');
       //$this->Paginator->settings = $this->paginate;
       //$arrData = $this->Paginator->paginate('Info');       
       $this->set('arrInfo', $arrData);        
	   $this->layout = 'frontend';		
	}

	public function view($id) {	
			
	   $this->loadModel('Info');	
	   $detail = $this->Info->find('first', array('conditions' => array('info_id' => $id)));
	 /* echo '<pre>';
	   print_r($detail);
	   echo '</pre>';die;
	   $this->redirect(array(
		    'controller' => 'it_queries',
		    'action' => 'view', 
		    $this->request->data['ItQuery']['id'])
		);*/
	   $this->set('info', $detail); 
       $this->layout = 'frontend';		
	}


}
