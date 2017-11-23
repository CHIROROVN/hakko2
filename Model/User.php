<?php
App::uses('AuthComponent', 'Controller/Component');
App::uses('Security', 'Utility', 'CstValidate');

class User extends AppModel {
     
   public $name = 'User';
   public $useTable = 'm_user';
   public $primaryKey = 'u_id';

   var $validate = array(
        'u_login' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please fill in a login id',
            ),
        ),
        'u_passwd' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please fill in a password',
            ),
        ),
    );     
    
     

    //  public function beforeSave($option = array()){     	
    //     $this->data['User']['password'] = Security::hash($this->data['User']['u_passwd']);
    //     return true;
    // }
 
}