<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
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
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
 
/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/View/Pages/home.ctp)...
 */

	Router::connect('/', array('controller' => 'home', 'action' => 'index'));

	Router::connect('/news', array('controller' => 'news', 'action' => 'index'));
	Router::connect('/news/index/*', array('controller' => 'news', 'action' => 'index'),array('page' => array('page'),'page' => '[0-9]+'));
	Router::connect('/news/view/:id', array('controller' => 'news', 'action' => 'view'),array('pass' => array('id'),'id' => '[0-9]+'));

	Router::connect('/cts-adm/menu', array('controller' => 'menus', 'action' => 'index'));
	Router::connect('/cts-adm/users/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/cts-adm/users/logout', array('controller' => 'users', 'action' => 'logout'));

	//Info
	Router::connect('/cts-adm/infos', array('controller' => 'infos', 'action' => 'index'));
	Router::connect('/cts-adm/infos/regist', array('controller' => 'infos', 'action' => 'regist'));
	Router::connect('/cts-adm/infos/regist_confirm', array('controller' => 'infos', 'action' => 'regist_save'));
	Router::connect('/cts-adm/infos/edit/:id', array('controller' => 'infos', 'action' => 'edit'), array('pass' => array('id'), 'id' => '[0-9]+'));
	Router::connect('/cts-adm/infos/edit/:id/confirm', array('controller' => 'infos', 'action' => 'edit_save'));
	Router::connect('/cts-adm/infos/delete/:id', array('controller' => 'infos', 'action' => 'delete'), array('pass' => array('id'), 'id' => '[0-9]+'));
    Router::connect('/cts-adm/infos/detail/:id', array('controller' => 'infos', 'action' => 'detail'), array('pass' => array('id'), 'id' => '[0-9]+'));


/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	//require CAKE . 'Config' . DS . 'routes.php';
