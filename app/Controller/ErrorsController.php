<?php
App::uses('AppController', 'Controller');
class ErrorsController extends AppController {
    public $name = 'Errors';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow();
    }

    public function deny() {
        $this->layout = 'backend';
        $this->render('error403');
    }
    
    function notfound(){
    	$this->layout = 'backend';
    	$this->render('error404');
    }
}