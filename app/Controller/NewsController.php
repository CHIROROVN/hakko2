<?php
App::uses('News', 'Model');
App::uses('AppController', 'Controller');

class NewsController extends AppController {
	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('index', 'view'));
    }

	var $helpers = array('Paginator');
    var $paginator = array('limit' => 2);

	public function index() {
		$this->layout = 'frontend';
		$this->loadModel('News'); 
		//$this->paginate = array(  'limit' => 2  );     
		$arrData = $this->paginate("News");
		$this->set('arrInfo', $arrData);
		$this->render('/news/index');
	}

	public function view($id) {
			
	   $this->loadModel('News');	
	   $detail = $this->News->find('first', array('conditions' => array('info_id' => $id)));
	   if(!isset($detail['News']['info_id'])){
		   $this->redirect(array('controller' => 'news','action' => 'index'));
		} 
	   $this->set('info', $detail); 
       $this->layout = 'frontend';
       $this->render('/news/view');		
	}


}
