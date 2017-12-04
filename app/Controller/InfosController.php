<?php

App::uses('AppController', 'Controller');
App::uses('CakeTime', 'Utility');

class InfosController extends AppController {

	public function beforeFilter() {
        parent::beforeFilter();
        $this->layout = 'backend';
        $this->loadModel('Info');
    }

	public $uses = array();
	public $helpers = array('Html', 'Time', 'Hakko');
	public $components = array('Paginator');

	public function index() {
		$this->Paginator->settings = array(
	        'conditions' => array('last_kind <>' => DELETE),
	        'order' => 'info_date desc',
	        'limit' => LIMIT_PAGE,
	    );

	    $infos = $this->Paginator->paginate('Info');

		$this->set(compact('infos'));
		$this->render('/infos/index');
	}

	public function regist() {
		if($this->Session->check('InfoData')) $this->Session->delete('InfoData');
		if ($this->request->is(array('post'))) {
        	$this->Info->set($this->request->data);

        	if(empty($this->request->data['Info']['info_type']) || $this->request->data['Info']['info_type'] != 3){
        		$this->Info->validator()->remove('info3_contents');
        	}

        	if(empty($this->request->data['Info']['info2_file']['name'])){
        		$this->Info->validator()->remove('info2_file');
        	}

        	if(empty($this->request->data['Info']['info3_img']['name'])){
        		$this->Info->validator()->remove('info3_img');
        	}

        	if(empty($this->request->data['Info']['info3_file']['name'])){
        		$this->Info->validator()->remove('info3_file');
        	}        	

        	if ($this->Info->validates()) {
	        	$this->Info->create();
	        	if(!empty($this->request->data['Info']['info_year']) || !empty($this->request->data['Info']['info_month']) || !empty($this->request->data['Info']['info_day'])){
		        	$info_hour = !empty($this->request->data['Info']['info_hour']) ? $this->request->data['Info']['info_hour'] : '00';
		        	$info_minute = !empty($this->request->data['Info']['info_minute']) ? $this->request->data['Info']['info_minute'] : '00';
		        	$infoDate = $this->request->data['Info']['info_year'].'-'.$this->request->data['Info']['info_month'].'-'.$this->request->data['Info']['info_day'].' '.$info_hour.':'.$info_minute . ':00';
		        	$this->request->data['Info']['info_date'] = date('Y-m-d H:i:s', strtotime($infoDate));
		        }else{
		        	$this->request->data['Info']['info_date'] = NULL;
		        }

	        	if(!empty($this->request->data['Info']['info2_file']['name'])){
	        		$info2File = $this->request->data['Info']['info2_file']['name'];
	        		$arrInfo2FileExt = explode(".", $info2File);
	        		$info2FileName = $arrInfo2FileExt[0].'_'.rand(time(), 999).'.'.$arrInfo2FileExt[1];
	        		$info2FileUpload = UPLOAD_PATH . 'files/'. $info2FileName;

	        		move_uploaded_file($this->request->data['Info']['info2_file']['tmp_name'], $info2FileUpload);
	        		$this->request->data['Info']['info2_file_tmp'] = 'uploads/infos/files/'.$info2FileName;
	        	}else{
	        		$this->request->data['Info']['info2_file_tmp'] = NULL;
	        	}


	        	if(!empty($this->request->data['Info']['info3_img']['name'])){
	        		$info3Img = $this->request->data['Info']['info3_img']['name'];
	        		$arrInfo3ImgExt = explode(".", $info3Img);
	        		$info3ImgName = $arrInfo3ImgExt[0].'_'.rand(time(), 999).'.'.$arrInfo3ImgExt[1];

	        		$info3ImgUpload = UPLOAD_PATH . 'images/' . $info3ImgName;
	        		move_uploaded_file($this->request->data['Info']['info3_img']['tmp_name'], $info3ImgUpload);
	        		$this->request->data['Info']['info3_img_tmp'] = 'uploads/infos/images/'.$info3ImgName;
	        	}else{
	        		$this->request->data['Info']['info3_img_tmp'] = NULL;
	        	}

	        	if(!empty($this->request->data['Info']['info3_file']['name'])){
	        		$info3File = $this->request->data['Info']['info3_file']['name'];
	        		$arrInfo3FileExt = explode(".", $info3File);
	        		$info3FileName = $arrInfo3FileExt[0].'_'.rand(time(), 999).'.'.$arrInfo3FileExt[1];
	        		$info3FileUpload = UPLOAD_PATH . 'files/'. $info3FileName;
	        		move_uploaded_file($this->request->data['Info']['info3_file']['tmp_name'], $info3FileUpload);
	        		$this->request->data['Info']['info3_file_tmp'] = 'uploads/infos/files/'.$info3FileName;
	        	}else{
	        		$this->request->data['Info']['info3_file_tmp'] = NULL;
	        	}

	        	if(!empty($this->request->data['Info']['year_start']) || !empty($this->request->data['Info']['month_start']) || !empty($this->request->data['Info']['day_start'])){
		        	$hour_start = !empty($this->request->data['Info']['hour_start']) ? $this->request->data['Info']['hour_start'] : '00';
		        	$minute_start = !empty($this->request->data['Info']['minute_start']) ? $this->request->data['Info']['minute_start'] : '00';
		        	$dateStart = $this->request->data['Info']['year_start'].'-'.$this->request->data['Info']['month_start'].'-'.$this->request->data['Info']['day_start'].' '.$hour_start.':'.$minute_start . ': 00';
		        	$this->request->data['Info']['info_start'] = date('Y-m-d H:i:s', strtotime($dateStart));
		        }else{
		        	$this->request->data['Info']['info_start'] = NULL;
		        }

		        if(!empty($this->request->data['Info']['year_end']) || !empty($this->request->data['Info']['month_end']) || !empty($this->request->data['Info']['day_end'])){
		        	$hour_end = !empty($this->request->data['Info']['hour_end']) ? $this->request->data['Info']['hour_end'] : '00';
		        	$minute_end = !empty($this->request->data['Info']['minute_end']) ? $this->request->data['Info']['minute_end'] : '00';
		        	$dateEnd = $this->request->data['Info']['year_end'].'-'.$this->request->data['Info']['month_end'].'-'.$this->request->data['Info']['day_end'].' '.$hour_end.':'.$minute_end . ':00';
		        	$this->request->data['Info']['info_end'] = date('Y-m-d H:i:s', strtotime($dateEnd));
		        }else{
		        	$this->request->data['Info']['info_end'] = NULL;
		        }

	        	$this->request->data['Info']['info_dspl_flag'] = !empty($this->request->data['Info']['info_dspl_flag']) ? $this->request->data['Info']['info_dspl_flag'] : NULL;
	        	$this->request->data['Info']['info_dspl_flag'] = !empty($this->request->data['Info']['info_dspl_flag']) ? $this->request->data['Info']['info_dspl_flag'] : NULL;

	        	$this->Session->write('InfoData', $this->request->data);

	        	return $this->redirect(array('controller' => 'infos', 'action' => 'regist_cnf'));

	        }else{
	        	if(empty($this->request->data['Info']['info_type'])){
	        		$this->Info->validationErrors['info_type'][0] = __('Please enter info type');       	
	        	}

	        	// if(empty($this->request->data['info']['info_year']) && empty($this->request->data['info']['info_month']) && empty($this->request->data['info']['info_day'])){
	        	// 	unset($errors['info_date']);
	        	// }

    			$this->set('errors', $this->Info->validationErrors);	        	
	        }
        }
        $this->render('/infos/regist'); 
	}

	public function regist_cnf() {
		$this->request->data = array();
		if($this->Session->check('InfoData')){
			$this->request->data = $this->Session->read('InfoData');
		}

		$this->Info->set($this->request->data);
		
		$this->render('/infos/regist_cnf');
	}

	public function regist_back() {
		$this->request->data = array();
		if($this->Session->check('InfoData')){
			$this->request->data = $this->Session->read('InfoData');			
		}

		if(!empty($this->request->data['Info']['info2_file']['name'])){
			$this->request->data['Info']['info2_file'] = $this->request->data['Info']['info2_file_tmp'];
		}else{
			$this->request->data['Info']['info2_file']  = @$this->request->data['Info']['info2_file_old'];
		}

		if(!empty($this->request->data['Info']['info3_img']['name'])){
			$this->request->data['Info']['info3_img'] = $this->request->data['Info']['info3_img_tmp'];
		}else{
			$this->request->data['Info']['info3_img']  = @$this->request->data['Info']['info3_img_old'];
		}

		if(!empty($this->request->data['Info']['info3_file']['name'])){
			$this->request->data['Info']['info3_file'] = $this->request->data['Info']['info3_file_tmp'];
		}else{
			$this->request->data['Info']['info3_file']  = @$this->request->data['Info']['info3_file_old'];
		}

		$this->Info->set($this->request->data);

		$this->render('/infos/regist');
	}

	public function regist_save() {
		$info = array();
		if($this->Session->check('InfoData')){
			$info = $this->Session->read('InfoData');			
		}

		$this->request->data['Info']['info_title'] = $info['Info']['info_title'];
		$this->request->data['Info']['info_date'] = $info['Info']['info_date'];	
		$this->request->data['Info']['info_type'] = $info['Info']['info_type'];

		if($info['Info']['info_type'] == 1){					
			$this->request->data['Info']['info1_url'] = $info['Info']['info1_url'];

		}elseif($info['Info']['info_type'] == 2){
			$this->request->data['Info']['info2_file'] = $info['Info']['info2_file_tmp'];
		}else{
			$this->request->data['Info']['info3_contents'] = $info['Info']['info3_contents'];
			$this->request->data['Info']['info3_img'] = $info['Info']['info3_img_tmp'];
			$this->request->data['Info']['info3_url'] = $info['Info']['info3_url'];
			$this->request->data['Info']['info3_mail'] = $info['Info']['info3_mail'];
			$this->request->data['Info']['info3_file'] = $info['Info']['info3_file_tmp'];
			$this->request->data['Info']['info3_filename'] = $info['Info']['info3_filename'];
		}
		
		$this->request->data['Info']['info_dspl_flag'] = $info['Info']['info_dspl_flag'];
		$this->request->data['Info']['info_top_flag'] = $info['Info']['info_top_flag'];

		$this->request->data['Info']['info_start'] = $info['Info']['info_start'];
		$this->request->data['Info']['info_end'] = $info['Info']['info_end'];
		$this->request->data['Info']['last_date'] = date('Y-m-d H:i:s');
		$this->request->data['Info']['last_kind'] = INSERT;
		$this->request->data['Info']['last_ipadrs'] = CLIENT_IP_ADRS;
		$this->request->data['Info']['last_user'] = $this->Auth->user('u_id');

		if ($this->Info->save($this->request->data['Info'])) {
			$this->Flash->success(__('msg_cts-adm_regist_success', array('key'=>'flash')));
			if($this->Session->check('InfoData')) $this->Session->delete('InfoData');
			return $this->redirect(array('controller'=>'infos','action' => 'index'));
		} else {
			$this->Flash->error(__('msg_cts-adm_regist_danger', array('key'=>'flash')));
			$info = array();
			if($this->Session->check('InfoData')){
				$info = $this->Session->read('InfoData');			
			}
			$this->set(compact('info'));

			return $this->render('/infos/regist_cnf');
		}

	}

	public function detail($id) {
		$info = $this->Info->getInfoById($id);
		$this->set(compact('info'));
		$this->render('/infos/detail');
	}

	public function edit($id) {
		if (!$this->Info->exists($id)) {
                $this->redirect(array('controller' => 'infos', 'action' => 'index'));
            }
        $this->set('id', $id);

		if ($this->request->is(array('post', 'put'))) {
			$this->Info->set($this->request->data);
			$this->set('id', $id);
			if(empty($this->request->data['Info']['info_type']) || $this->request->data['Info']['info_type'] != 3){
        		$this->Info->validator()->remove('info3_contents');
        	}

        	if(empty($this->request->data['Info']['info2_file']['name'])){
        		$this->Info->validator()->remove('info2_file');
        	}

        	if(empty($this->request->data['Info']['info3_img']['name'])){
        		$this->Info->validator()->remove('info3_img');
        	}

        	if(empty($this->request->data['Info']['info3_file']['name'])){
        		$this->Info->validator()->remove('info3_file');
        	}

			if ($this->Info->validates()) {
				$this->Info->set($this->request->data);

				if(!empty($this->request->data['Info']['info_year']) || !empty($this->request->data['Info']['info_month']) || !empty($this->request->data['Info']['info_day'])){
		        	$info_hour = !empty($this->request->data['Info']['info_hour']) ? $this->request->data['Info']['info_hour'] : '00';
		        	$info_minute = !empty($this->request->data['Info']['info_minute']) ? $this->request->data['Info']['info_minute'] : '00';
		        	$infoDate = $this->request->data['Info']['info_year'].'-'.$this->request->data['Info']['info_month'].'-'.$this->request->data['Info']['info_day'].' '.$info_hour.':'.$info_minute . ':00';
		        	$this->request->data['Info']['info_date'] = date('Y-m-d H:i:s', strtotime($infoDate));
		        }else{
		        	$this->request->data['Info']['info_date'] = NULL;
		        }

		        if($this->request->data['Info']['info2_file_radio'] == 1){
		        	if(!empty($this->request->data['Info']['info2_file']['name'])){
		        		$info2File = $this->request->data['Info']['info2_file']['name'];
		        		$arrInfo2FileExt = explode(".", $info2File);
		        		$info2FileName = $arrInfo2FileExt[0].'_'.rand(time(), 999).'.'.$arrInfo2FileExt[1];
		        		$info2FileUpload = UPLOAD_PATH . 'files/' . $info2FileName;
		        		move_uploaded_file($this->request->data['Info']['info2_file']['tmp_name'], $info2FileUpload);
		        		$this->request->data['Info']['info2_file_tmp'] = 'uploads/infos/files/'.$info2FileName;
		        	}else{
		        		$this->request->data['Info']['info2_file_tmp'] = NULL;
		        	}
		        }elseif($this->request->data['Info']['info2_file_radio'] == 3){
		        	$this->request->data['Info']['info2_file_tmp'] = NULL;
		        }else{
		        	$this->request->data['Info']['info2_file_tmp'] = $this->request->data['Info']['info2_file_old'];
		        }

		        if($this->request->data['Info']['info3_img_radio'] == 1){
		        	if(!empty($this->request->data['Info']['info3_img']['name'])){
		        		$info3Img = $this->request->data['Info']['info3_img']['name'];
		        		$arrInfo3ImgExt = explode(".", $info3Img);
		        		$info3ImgName = $arrInfo3ImgExt[0].'_'.rand(time(), 999).'.'.$arrInfo3ImgExt[1];

		        		$info3ImgUpload = UPLOAD_PATH . 'images/' . $info3ImgName;
		        		move_uploaded_file($this->request->data['Info']['info3_img']['tmp_name'], $info3ImgUpload);
		        		$this->request->data['Info']['info3_img_tmp'] = 'uploads/infos/images/'.$info3ImgName;
		        	}else{
		        		$this->request->data['Info']['info3_img_tmp'] = NULL;
		        	}
		        }elseif($this->request->data['Info']['info3_img_radio'] == 3){
		        	$this->request->data['Info']['info3_img_tmp'] = NULL;
		        }else{
		        	$this->request->data['Info']['info3_img_tmp'] = $this->request->data['Info']['info3_img_old'];
		        }
		  
	        	if($this->request->data['Info']['info3_file_radio'] == 1){
		        	if(!empty($this->request->data['Info']['info3_file']['name'])){
			        	$info3File = $this->request->data['Info']['info3_file']['name'];
		        		$arrInfo3FileExt = explode(".", $info3File);
		        		$info3FileName = $arrInfo3FileExt[0].'_'.rand(time(), 999).'.'.$arrInfo3FileExt[1];

		        		$info3FileUpload = UPLOAD_PATH . 'files/' . $info3FileName;
		        		move_uploaded_file($this->request->data['Info']['info3_file']['tmp_name'], $info3FileUpload);
		        		$this->request->data['Info']['info3_file_tmp'] = 'uploads/infos/files/'.$info3FileName;
		        	}else{
		        		$this->request->data['Info']['info3_file_tmp'] = NULL;
		        	}
		        }elseif($this->request->data['Info']['info3_file_radio'] == 3){
		        	$this->request->data['Info']['info3_file_tmp'] = NULL;
		        }else{
		        	$this->request->data['Info']['info3_file_tmp'] = $this->request->data['Info']['info3_file_old'];
		        }

	        	if(!empty($this->request->data['Info']['year_start']) || !empty($this->request->data['Info']['month_start']) || !empty($this->request->data['Info']['day_start'])){
		        	$hour_start = !empty($this->request->data['Info']['hour_start']) ? $this->request->data['Info']['hour_start'] : '00';
		        	$minute_start = !empty($this->request->data['Info']['minute_start']) ? $this->request->data['Info']['minute_start'] : '00';
		        	$dateStart = $this->request->data['Info']['year_start'].'-'.$this->request->data['Info']['month_start'].'-'.$this->request->data['Info']['day_start'].' '.$hour_start.':'.$minute_start . ':00';
		        	$this->request->data['Info']['info_start'] = date('Y-m-d H:i:s', strtotime($dateStart));
		        }else{
		        	$this->request->data['Info']['info_start'] = NULL;
		        }

		        if(!empty($this->request->data['Info']['year_end']) || !empty($this->request->data['Info']['month_end']) || !empty($this->request->data['Info']['day_end'])){
		        	$hour_end = !empty($this->request->data['Info']['hour_end']) ? $this->request->data['Info']['hour_end'] : '00';
		        	$minute_end = !empty($this->request->data['Info']['minute_end']) ? $this->request->data['Info']['minute_end'] : '00';
		        	$dateEnd = $this->request->data['Info']['year_end'].'-'.$this->request->data['Info']['month_end'].'-'.$this->request->data['Info']['day_end'].' '.$hour_end.':'.$minute_end . ':00';
		        	$this->request->data['Info']['info_end'] = date('Y-m-d H:i:s', strtotime($dateEnd));
		        }else{
		        	$this->request->data['Info']['info_end'] = NULL;
		        }

	        	$this->request->data['Info']['info_dspl_flag'] = !empty($this->request->data['Info']['info_dspl_flag']) ? $this->request->data['Info']['info_dspl_flag'] : NULL;
	        	$this->request->data['Info']['info_dspl_flag'] = !empty($this->request->data['Info']['info_dspl_flag']) ? $this->request->data['Info']['info_dspl_flag'] : NULL;

	        	$this->Session->write('InfoUpdate', $this->request->data);

	        	return $this->redirect('/' . ADMIN_PREFIX . '/infos/edit_cnf/' . $id);
	        	
			}else{
				
				$info_date = $this->request->data['Info']['info_year'] . '-' . $this->request->data['Info']['info_month'] . '-' . $this->request->data['Info']['info_day'] . ' ' . $this->request->data['Info']['info_hour'] . ':' . $this->request->data['Info']['info_minute'] . ':' . '00';
        		$this->request->data['Info']['info_date'] = date('Y-m-d H:i:s', strtotime($info_date));

        		$info_start = $this->request->data['Info']['year_start'] . '-' . $this->request->data['Info']['month_start'] . '-' . $this->request->data['Info']['day_start'] . ' ' . $this->request->data['Info']['hour_start'] . ':' . $this->request->data['Info']['minute_start'] . ':' . '00';
        		$this->request->data['Info']['info_start'] = date('Y-m-d H:i:s', strtotime($info_start));

        		$info_end = $this->request->data['Info']['year_end'] . '-' . $this->request->data['Info']['month_end'] . '-' . $this->request->data['Info']['day_end'] . ' ' . $this->request->data['Info']['hour_end'] . ':' . $this->request->data['Info']['minute_end'] . ':' . '00';
        		$this->request->data['Info']['info_end'] = date('Y-m-d H:i:s', strtotime($info_end));
	        	
	        	if(empty($this->request->data['Info']['info_type'])){
	        		$this->Info->validationErrors['info_type'][0] = __('Please enter info type');
	        	}

				$this->set('errors', $this->Info->validationErrors);	   
			}				

		}else{
			$options = array('conditions' => array('Info.' . $this->Info->primaryKey => $id));
			$this->request->data = $this->Info->find('first', $options);
		}

		$this->render('/infos/edit');
	}

	public function edit_cnf($id) {
		$this->request->data = array();
		if($this->Session->check('InfoUpdate')){
			$this->request->data = $this->Session->read('InfoUpdate');
		}

		$this->Info->set($this->request->data);
		$this->set(compact('id'));
		$this->render('/infos/edit_cnf');
	}

	public function edit_back($id) {
		$this->request->data = array();
		$this->set('id', $id);
		if($this->Session->check('InfoUpdate')){
			$this->request->data = $this->Session->read('InfoUpdate');			
		}

		if(!empty($this->request->data['Info']['info2_file']['name'])){
			$this->request->data['Info']['info2_file'] = $this->request->data['Info']['info2_file_tmp'];
		}else{
			$this->request->data['Info']['info2_file']  = $this->request->data['Info']['info2_file_old'];
		}

		if(!empty($this->request->data['Info']['info3_img']['name'])){
			$this->request->data['Info']['info3_img'] = $this->request->data['Info']['info3_img_tmp'];
		}else{
			$this->request->data['Info']['info3_img']  = $this->request->data['Info']['info3_img_old'];
		}

		if(!empty($this->request->data['Info']['info3_file']['name'])){
			$this->request->data['Info']['info3_file'] = $this->request->data['Info']['info3_file_tmp'];
		}else{
			$this->request->data['Info']['info3_file']  = $this->request->data['Info']['info3_file_old'];
		}

		$this->Info->set($this->request->data);

		$this->render('/infos/edit');
	}

	public function edit_save($id) {
		$info = array();
		if($this->Session->check('InfoUpdate')){
			$info = $this->Session->read('InfoUpdate');			
		}

		$this->request->data['Info']['info_title'] = "'".$info['Info']['info_title']."'";

		if(!empty($info['Info']['info_date'])){
			$this->request->data['Info']['info_date'] = "'".$info['Info']['info_date']."'";
		}else{
			$this->request->data['Info']['info_date'] = NULL;
		}

		$this->request->data['Info']['info_type'] = $info['Info']['info_type'];

		if($info['Info']['info_type'] == 1){					
			$this->request->data['Info']['info1_url'] = "'".$info['Info']['info1_url']."'";
		}elseif($info['Info']['info_type'] == 2){			
			$this->request->data['Info']['info2_file'] = "'".$info['Info']['info2_file_tmp']."'";
		}else{
			$this->request->data['Info']['info3_contents'] = "'".$info['Info']['info3_contents']."'";
			$this->request->data['Info']['info3_img'] = "'".$info['Info']['info3_img_tmp']."'";
			$this->request->data['Info']['info3_url'] = "'".$info['Info']['info3_url']."'";
			$this->request->data['Info']['info3_mail'] = "'".$info['Info']['info3_mail']."'";
			$this->request->data['Info']['info3_file'] = "'".$info['Info']['info3_file_tmp']."'";
			$this->request->data['Info']['info3_filename'] = "'".$info['Info']['info3_filename']."'";
		}
		
		$this->request->data['Info']['info_dspl_flag'] = $info['Info']['info_dspl_flag'];
		$this->request->data['Info']['info_top_flag'] = $info['Info']['info_top_flag'];

		if(!empty($info['Info']['info_start'])){
			$this->request->data['Info']['info_start'] = "'".$info['Info']['info_start']."'";
		}else{
			$this->request->data['Info']['info_start'] = NULL;
		}
		if(!empty($info['Info']['info_end'])){
			$this->request->data['Info']['info_end'] = "'".$info['Info']['info_end']."'";
		}else{
			$this->request->data['Info']['info_end'] = NULL;
		}
		
		$this->request->data['Info']['last_date'] = "'".date('Y-m-d H:i:s')."'";
		$this->request->data['Info']['last_kind'] = UPDATE;
		$this->request->data['Info']['last_ipadrs'] = "'".CLIENT_IP_ADRS."'";
		$this->request->data['Info']['last_user'] = $this->Auth->user('u_id');

		if ($this->Info->update($this->request->data['Info'], $id)) {
			$this->Flash->success(__('msg_cts-adm_edit_success', array('key'=>'flash')));
			if($this->Session->check('InfoUpdate')) $this->Session->delete('InfoUpdate');
			return $this->redirect(array('controller'=>'infos','action' => 'index'));
		} else {
			$this->Flash->error(__('msg_cts-adm_edit_danger', array('key'=>'flash')));
			$info = array();
			if($this->Session->check('InfoUpdate')){
				$info = $this->Session->read('InfoUpdate');			
			}

			$this->set(compact('info'));
			return $this->redirect('/' . ADMIN_PREFIX . '/infos/edit_cnf/' . $id);
		}
	}

	public function delete($id) {
		$info = $this->Info->getInfoById($id);
		$this->set(compact('info'));
		$this->render('/infos/delete');
	}

	public function delete_save($id) {
		$data = array(
			'Info.last_kind' => DELETE,
			'Info.last_date' => "'".date('Y-m-d H:i:s')."'",
			'Info.last_ipadrs' => "'".CLIENT_IP_ADRS."'",
		);

		if($this->Info->update($data, $id)){
			$this->Flash->success(__('msg_cts-adm_del_success', array('key'=>'flash')));
			$this->redirect(array('controller' => 'infos', 'action' => 'delete_complete'));
		}else{
			$this->Flash->error(__('msg_cts-adm_del_danger', array('key'=>'flash')));
			$this->redirect(array('controller' => 'infos', 'action' => 'delete'));
		}
	}

	public function delete_complete(){
		$this->render('/infos/delete_complete');
	}

}
