<?php
App::uses('AppModel', 'Model');

class Info extends AppModel {
     
   public $name = 'Info';
   public $useTable = 't_info';
   public $primaryKey = 'info_id';

   public $validate = array(
        'info_title' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => 'タイトルを入力してください。',
                //'message' => __('info_title_require'),
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'info_year' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => '年を選択してください。',
                //'message' => __('info_date_require'),
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'month' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => '月を選択してください。',
                //'message' => __('info_date_require'),
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'day' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => '日を選択してください。',
                //'message' => __('info_date_require'),
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'info_hour' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => '時を選択してください。',
                //'message' => __('info_date_require'),
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'info_minute' => array(
            'notBlank' => array(
                'rule' => array('notBlank'),
                'message' => '分を選択してください。',
                //'message' => __('info_date_require'),
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );  

 
}