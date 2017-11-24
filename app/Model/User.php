<?php
App::uses('AuthComponent', 'Controller/Component');
App::uses('Security', 'Utility', 'CstValidate');
App::uses('AppModel', 'Model');

class User extends AppModel {
     
   //public $name = 'User';
   public $useTable = 'm_user';
   public $primaryKey = 'u_id';

   public $validate = array(
        'u_login' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Please enter login id',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'u_passwd' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Please enter password',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );
    
     

     public function beforeSave($option = array()){     	
        $this->data['User']['password'] = Security::hash($this->data['User']['u_passwd']);
        return true;
    }
 
}