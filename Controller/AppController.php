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
	public $components = array(    
    'Session',
    'Auth' => array(
    	'authenticate'=>array('Form' => array('userModel' => 'User')),
        'loginRedirect' => array('controller' => 'menus', 'action' => 'index'),
        'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
        'authError' => 'You must be logged in to view this page.',
        'loginError' => 'Invalid Username or Password entered, please try again.'
 
    ));
 
	// only allow the login controllers only
	public function beforeFilter() {
		//Security::setHash("md5");
		$this->Auth->userModel = 'User';
        $this->Auth->fields = array('username' => 'u_login', 'password' => 'u_passwd');
	    $this->Auth->loginAction = array('cts-adm' => false, 'controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('cts-adm' =>true,'controller' => 'menus', 'action' => 'index');
        $this->Auth->loginError = 'Username / password combination.  Please try again';
        $this->Auth->authorize = 'controller';
	}
	 
	public function isAuthorized($user) {
	    // Here is where we should verify the role and give access based on role
	     
	    return true;
	}
}
