<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-27 22:14:37 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\MySQL.php:75
2013-06-27 22:14:37 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(NULL, '????create tabl...', false, Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\init.php(17): Kohana_Database_Query->execute()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\uji\application\bootstrap.php(120): Kohana_Core::modules(Array)
#6 C:\xampp\htdocs\uji\index.php(102): require('C:\xampp\htdocs...')
#7 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\MySQL.php:75
2013-06-27 22:18:06 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ MODPATH\orm_beta\init.php [ 10 ] in :
2013-06-27 22:18:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-27 22:18:07 --- CRITICAL: ErrorException [ 1 ]: Class 'DB' not found ~ MODPATH\orm_beta\init.php [ 10 ] in :
2013-06-27 22:18:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-27 22:23:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Uji.php [ 7 ] in :
2013-06-27 22:23:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-27 22:23:24 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/uji1.php could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\uji\system\classes\Kohana\View.php:137
2013-06-27 22:23:24 --- DEBUG: #0 C:\xampp\htdocs\uji\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/uji1.php')
#1 C:\xampp\htdocs\uji\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/uji1.php', NULL)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(7): Kohana_View::factory('pages/uji1.php')
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\uji\system\classes\Kohana\View.php:137