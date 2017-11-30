<?php
App::uses('AppModel', 'Model');

class Info extends AppModel {     
   public $name = 'Info';
   public $useTable = 't_info';
   public $primaryKey = 'info_id';
   
    function __construct() {

        parent::__construct();
        $this->validate = array(
            'info_title' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('info_title_require')
                ),
            ),
            'info2_file' => array(
                'extension' => array(
                    'rule' => array('extension', array('pdf', 'doc', 'docx', 'xls', 'xlsx', 'csv', 'txt')),
                    'message' => __('info2_file_ext'),
                    'allowEmpty' => true,
                ),
                'fileSize' => array(
                    'rule' => array('fileSize', '<=', '10MB'),
                    'message' => __('info2_file_size'),
                    'allowEmpty' => true,
                ),
            ),
            'info3_contents' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('info3_contents_require'),
                ),
            ),
            'info3_img' => array(
                'extension' => array(
                    'rule' => array('extension', array('gif', 'jpeg', 'png', 'jpg')),
                    'message' => __('info3_img_ext'),
                    'allowEmpty' => true,
                ),
                'fileSize' => array(
                    'rule' => array('fileSize', '<=', '10MB'),
                    'message' => __('info3_img_size'),
                    'allowEmpty' => true,
                ),
            ),
            'info3_file' => array(
                'extension' => array(
                    'rule' => array('extension', array('pdf', 'doc', 'docx', 'xls', 'xlsx', 'csv', 'txt')),
                    'message' => __('info3_file_ext'),
                    'allowEmpty' => true,
                ),
                'fileSize' => array(
                    'rule' => array('fileSize', '<=', '10MB'),
                    'message' => __('info3_file_size'),
                    'allowEmpty' => true,
                ),
            ),
            'info_year' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('info_year_require')
                ),
            ),
            'info_month' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('info_month_require')
                ),
            ),
            'info_day' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('info_day_require')
                ),
            ),
            'info_hour' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('info_hour_require')
                ),
            ),
            'info_minute' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('info_minute_require')
                ),
            ),
            'info_type' => array(
                'notBlank' => array(
                    'rule' => array('notBlank'),
                    'message' => __('info_type_require')
                ),
            ),
            'info3_mail' => array(
                'email' => array(
                    'rule' => array('email'),
                    'message' => __('info3_mail_mail'),
                    'allowEmpty' => true,
                ),
            ),

        );  
    }

    //get list info for backend 
   public function getAllInfos(){
        return $this->Paginator->paginates('all', array(
                //'fields' => array('ifo_id','info_title', 'info_date', 'info_type', 'info1_url'),                
                'conditions' => array('last_kind <>' => DELETE),
                'order' => 'info_date DESC',
                'recursive' => -1
        ));
   }

    //get info by id backend 
   public function getInfoById($id){
        return $this->find('first', array(
                //'fields' => array('ifo_id','info_title', 'info_date', 'info_type', 'info1_url'),                
                'conditions' => array(
                        'last_kind <>' => DELETE,
                        'info_id' => $id
                ),
                'recursive' => -1
        ));
   }

   //update info by id backend 
    public function update($data, $id){
        return $this->updateAll($data, array('info_id' => $id));
    }

}