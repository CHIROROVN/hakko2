<?php
App::uses('Info', 'Model');
App::uses('AppController', 'Controller');

class NewsController extends AppController {

	public $uses = array();	

	var $helpers = array('Paginator');
    var $paginator = array('limit' => 2);

	public function index() {
	   	
	   $this->loadModel('Info');	   
       //$arrData = $this->Info->find('all');
       //$this->Paginator->settings = $this->paginate;
       //$arrData = $this->Paginator->paginate('Info');  
       $this->paginate = array(  'limit' => 2,     
       'order' => array('info_date' => 'desc'),//giảm dần theo id
      );     
       $arrData = $this->paginate("Info");

      /* echo '<pre>';
       print_r($arrData);
       echo '</pre>';die;*/
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
