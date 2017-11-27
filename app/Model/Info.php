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

   public function paginate($conditions, $fields, $order, $limit, $page = 1, $recursive = null, $extra = array()) {
	    $qryCond = " last_kind <> 9 and info_dspl_flag IS NULL and ((info_start IS NULL) or (info_start <=> NULL and  info_start <= DATE(NOW())) and ((	info_end IS NULL) or (	info_end <=> NULL and  	info_end >= DATE(NOW())))";
		 
		$orderStr = '';
		foreach($order as $k => $ord) {
		   $orderStr[] = $k . ' ' . $ord;
		}
		$orderStr = 'ORDER BY '. implode(', ', $orderStr);
				 
		$qryFlds = '*';
		if ($fields) {
			$qryFlds = implode(', ', $fields);
		}
		
		$sql = 'SELECT '.$qryFlds.' FROM '.$useTable.' as info WHERE '.$qryCond.' '.$orderStr . ' LIMIT ' . (($page-1) * $limit) . ', ' . $limit;
		echo $sql;
		$results = $this->query($sql);
		return $results;
   }

   public function paginateCount($conditions = null, $recursive = 0, $extra = array()) {
		$qryCond = " last_kind <> 9 and info_dspl_flag IS NULL";
		 
		$sql = 'SELECT COUNT(*) as count FROM '.$useTable.' as info WHERE '.$qryCond;
		 
		$this->recursive = -1;
		 
		$results = $this->query($sql);
		return $results[0][0]['count'];
	}
 
}