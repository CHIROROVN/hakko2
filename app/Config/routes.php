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
	Router::connect('/news/view/*', array('controller' => 'news', 'action' => 'view'),array('id' => '[0-9]+'));

	Router::connect('/cts-adm/menu', array('controller' => 'menus', 'action' => 'index'));
	Router::connect('/cts-adm/users/login', array('controller' => 'users', 'action' => 'login'));
	Router::connect('/cts-adm/users/logout', array('controller' => 'users', 'action' => 'logout'));

    

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
