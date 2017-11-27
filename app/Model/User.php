<?php
App::uses('AuthComponent', 'Controller/Component');

App::uses('AppModel', 'Model');


class User extends AppModel {
     
   public $name = 'User';
   public $useTable = 'users';
   public $primaryKey = 'u_id';

   public $validate = array(
        'username' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'Please enter login id',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'password' => array(
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
    
     

    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['passwd'])) {
            $passwordHasher = new SimplePasswordHasher();
            $this->data['User']['passwd'] = $passwordHasher->hash($this->data['User']['passwd']);
        }
        return true;
    }
 
}