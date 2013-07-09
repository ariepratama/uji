<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-08 04:17:06 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'name' in 'where clause' [ DELETE FROM `Model_Ruangan` WHERE `name` = '7666' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-08 04:17:06 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(237): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(345): Table_Manager::delete('Model_Ruangan', Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(486): Broker::delete('Model_Ruangan', Array)
#4 C:\xampp\htdocs\uji\application\classes\Controller\Test.php(9): PersistentObject->delete()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-08 04:24:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Ruangancolumn=nama' not found ~ APPPATH\classes\Controller\Uji.php [ 67 ] in :
2013-07-08 04:24:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 04:25:36 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Ruangancolumn=nama' not found ~ APPPATH\classes\Controller\Uji.php [ 67 ] in :
2013-07-08 04:25:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 04:27:07 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '= '123'' at line 1 [ DELETE FROM `Model_Ruangan` WHERE = '123' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-08 04:27:07 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(4, 'DELETE FROM `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(237): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(345): Table_Manager::delete('Model_Ruangan', Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(486): Broker::delete('Model_Ruangan', Array)
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(69): PersistentObject->delete()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_delete()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-08 04:27:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 63 ] in :
2013-07-08 04:27:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 04:28:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Ruangancolumn=nama' not found ~ APPPATH\classes\Controller\Uji.php [ 63 ] in :
2013-07-08 04:28:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 04:28:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Ruangancolumn=nama' not found ~ APPPATH\classes\Controller\Uji.php [ 63 ] in :
2013-07-08 04:28:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 04:29:08 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Ruangancolumn=nama' not found ~ APPPATH\classes\Controller\Uji.php [ 63 ] in :
2013-07-08 04:29:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 04:29:19 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Ruangancolumn=nama' not found ~ APPPATH\classes\Controller\Uji.php [ 63 ] in :
2013-07-08 04:29:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 08:10:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 57 ] in :
2013-07-08 08:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 17:53:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 57 ] in :
2013-07-08 17:53:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 17:53:49 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 57 ] in :
2013-07-08 17:53:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 22:17:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 57 ] in :
2013-07-08 22:17:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 22:28:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Ruangan/' not found ~ APPPATH\classes\Controller\Uji.php [ 57 ] in :
2013-07-08 22:28:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-08 22:34:00 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 57 ] in :
2013-07-08 22:34:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :