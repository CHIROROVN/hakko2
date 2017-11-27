<?php
App::uses('AppModel', 'Model');

class Info extends AppModel {     
   
   public $useTable = 't_info';
   public $primaryKey = 'info_id';

   public function paginate($conditions, $fields, $order, $limit, $page = 1, $recursive = null, $extra = array()) {	   
		$qryCond = " (last_kind is NULL or last_kind <> 9) and info_dspl_flag IS NULL and ((info_start IS NULL) or DATE(info_start) <= DATE(NOW())) and ((info_end IS NULL) or DATE(info_end) >= DATE(NOW()))" ;
		$orderStr = '';
		foreach($order as $k => $ord) {
		   $orderStr[] = $k . ' ' . $ord;
		}
		$orderStr = 'ORDER BY '. implode(', ', $orderStr);
				 
		$qryFlds = '*';
		if ($fields) {
			$qryFlds = implode(', ', $fields);
		}
		
		$sql = 'SELECT '.$qryFlds.' FROM '.$this->useTable.' as info WHERE '.$qryCond.' '.$orderStr . ' LIMIT ' . (($page-1) * $limit) . ', ' . $limit;
		//echo $sql;
		$results = $this->query($sql);
		return $results;
   }

   public function paginateCount($conditions = null, $recursive = 0, $extra = array()) {
		$qryCond = " (last_kind is NULL or last_kind <> 9) and info_dspl_flag IS NULL and ((info_start IS NULL) or DATE(info_start) <= DATE(NOW())) and ((info_end IS NULL) or DATE(info_end) >= DATE(NOW()))" ;
		 
		$sql = 'SELECT COUNT(*) as count FROM '.$this->useTable.' as info WHERE '.$qryCond;
		 
		$this->recursive = -1;
		 
		$results = $this->query($sql);
		return $results[0][0]['count'];
	}
 
}