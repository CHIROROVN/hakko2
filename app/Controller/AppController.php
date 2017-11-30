<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
use Cake\Network\Exception\NotFoundException;
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	// Pass settings in $components array
        public $components = array(
            'Flash',
            'Session',
            'Auth' => array(
                'loginAction' => array(
                    'controller' => 'users',
                    'action' => 'login',
                    'plugin' => 'cts-adm'
                ),
                'loginRedirect' => array('controller' => 'menus', 'action' => 'index'),
                'logoutRedirect' => array('controller' => 'users', 'action' => 'logout'),
                'authenticate' => array(
                    'Form' => array(
                        'scope' => array('last_kind <>' => DELETE),
                        'passwordHasher' => 'Blowfish',                        
                        'fields' => array(
                              'username' => 'password',
                              'password' => 'password'
                            ),
                        'userModel' => 'User',
                        'userFields' => null,
                    )
                )
            )
        );

	public function beforeFilter() {
      //  $this->Auth->scope = array('last_kind' => 0);
		Security::setHash('sha1');
		$this->Auth->allow(array('login', 'error404', 'error500'));
        if($this->request->here == '/cts-adm' || $this->request->here == '/cts-adm/') $this->redirect(array('controller' => 'menus', 'action' => 'index'));
	}

}
