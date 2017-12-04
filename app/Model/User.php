<?php
App::uses('AuthComponent', 'Controller/Component');

App::uses('AppModel', 'Model');


class User extends AppModel {
     
   public $name = 'User';
   public $useTable = 'm_user';
   public $primaryKey = 'u_id';

    function __construct() {
        parent::__construct();
        $this->validate = array(
            'u_login' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('Please enter login id'),
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
            'u_passwd' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('Please enter password'),
                    //'allowEmpty' => false,
                    //'required' => false,
                    //'last' => false, // Stop validation after this rule
                    //'on' => 'create', // Limit validation to 'create' or 'update' operations
                ),
            ),
        );  
    }
    
     

    public function beforeSave($options = Array()) {
        if (isset($this->data[$this->alias]['password'])) {
            $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
        }
        return true;
    }
 
}