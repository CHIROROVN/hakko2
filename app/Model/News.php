<?php
App::uses('AppModel', 'Model');

class News extends AppModel {     
   public $name = 'Info';
   public $useTable = 't_info';
   public $primaryKey = 'info_id';  
   
   public function getInfoHome($limit)
   {
   		$qryCond = " (last_kind is NULL or last_kind <> 9) and info_dspl_flag IS NULL and ((info_start IS NULL) or info_start <= '".date("Y-m-d H:i:s")."') and ((info_end IS NULL) or info_end >= '".date("Y-m-d H:i:s")."') and info_top_flag=1" ;
   		$orderStr = 'ORDER BY info_date desc';
   		$sql = 'SELECT * FROM '.$this->useTable.' as info WHERE '.$qryCond.' '.$orderStr . ' LIMIT ' . $limit;
		
		$results = $this->query($sql);
		return $results;
   }

   public function paginate($conditions, $fields, $order, $limit, $page = 1, $recursive = null, $extra = array()) {
	    /*$qryCond = " (last_kind is NULL or last_kind <> 9) and info_dspl_flag IS NULL and ((info_start IS NULL) or DATE(info_start) <= DATE(NOW())) and ((info_end IS NULL) or DATE(info_end) >= DATE(NOW()))" ;*/
	    $qryCond = " (last_kind is NULL or last_kind <> 9) and info_dspl_flag IS NULL and ((info_start IS NULL) or info_start <= '".date("Y-m-d H:i:s")."') and ((info_end IS NULL) or info_end >= '".date("Y-m-d H:i:s")."')" ;

		/*$orderStr = '';
		foreach($order as $k => $ord) {
		   $orderStr[] = $k . ' ' . $ord;
		}
		$orderStr = 'ORDER BY '. implode(', ', $orderStr);*/
        $orderStr = 'ORDER BY info_date desc';
				 
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
		/*$qryCond = " (last_kind is NULL or last_kind <> 9) and info_dspl_flag IS NULL and ((info_start IS NULL) or DATE(info_start) <= DATE(NOW())) and ((info_end IS NULL) or DATE(info_end) >= DATE(NOW()))" ;*/

		$qryCond = " (last_kind is NULL or last_kind <> 9) and info_dspl_flag IS NULL and ((info_start IS NULL) or info_start <= '".date("Y-m-d H:i:s")."') and ((info_end IS NULL) or info_end >= '".date("Y-m-d H:i:s")."')" ;
		 
		$sql = 'SELECT COUNT(*) as count FROM '.$this->useTable.' as info WHERE '.$qryCond;
		 
		$this->recursive = -1;
		 
		$results = $this->query($sql);
		return $results[0][0]['count'];
	}
 
}