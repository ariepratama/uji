<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-07 22:29:21 --- CRITICAL: ErrorException [ 2 ]: next() expects parameter 1 to be array, null given ~ MODPATH\orm_beta\classes\Table\Manager.php [ 252 ] in :
2013-07-07 22:29:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'next() expects ...', 'C:\xampp\htdocs...', 252, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(252): next(NULL)
#2 C:\xampp\htdocs\uji\modules\orm_beta\init.php(20): Table_Manager::force_alter_table('asdf', Array, Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\uji\application\bootstrap.php(120): Kohana_Core::modules(Array)
#5 C:\xampp\htdocs\uji\index.php(102): require('C:\xampp\htdocs...')
#6 {main} in :
2013-07-07 22:33:17 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\orm_beta\classes\Table\Manager.php [ 252 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:252
2013-07-07 22:33:17 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(252): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 252, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\init.php(19): Table_Manager::force_alter_table('asdf', Array, Array)
#2 C:\xampp\htdocs\uji\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\uji\application\bootstrap.php(120): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\uji\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:252
2013-07-07 22:33:43 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ MODPATH\orm_beta\classes\Table\Manager.php [ 252 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:252
2013-07-07 22:33:43 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(252): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 252, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\init.php(19): Table_Manager::force_alter_table('asdf', Array, Array)
#2 C:\xampp\htdocs\uji\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\uji\application\bootstrap.php(120): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\uji\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:252
2013-07-07 22:34:06 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\orm_beta\classes\Table\Manager.php [ 253 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:253
2013-07-07 22:34:06 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(253): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 253, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\init.php(19): Table_Manager::force_alter_table('asdf', Array, Array)
#2 C:\xampp\htdocs\uji\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\uji\application\bootstrap.php(120): Kohana_Core::modules(Array)
#4 C:\xampp\htdocs\uji\index.php(102): require('C:\xampp\htdocs...')
#5 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:253
2013-07-07 22:35:29 --- CRITICAL: Database_Exception [ 1146 ]: Table 'uji.asdf' doesn't exist [ alter table asdf add column asdf integer ,add column fefe varchar(123)  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-07 22:35:29 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(NULL, 'alter table asd...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(258): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\init.php(19): Table_Manager::force_alter_table('asdf', Array, Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\uji\application\bootstrap.php(120): Kohana_Core::modules(Array)
#5 C:\xampp\htdocs\uji\index.php(102): require('C:\xampp\htdocs...')
#6 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-07 22:38:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'lantai' in 'field list' [ INSERT INTO `Model_Ruangan` (`nama`, `lantai`, `_id`, `_key`) VALUES ('123', '3', 3, '0416d827acb0d05d8714d24b229d69b4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-07 22:38:56 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(101): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(106): Table_Manager::insert_data_chunck(Object(DataRow))
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(131): Table_Manager::insert_and_unset(Array, 'Model_Ruangan')
#4 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(246): Table_Manager::insert_data(Array, 'Model_Ruangan')
#5 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Ruangan), Object(Metadata_Instance))
#6 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(45): PersistentObject->save()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#10 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-07 22:39:43 --- CRITICAL: Database_Exception [ 1060 ]: Duplicate column name 'lantai' [ alter table model_ruangan add column lantai integer  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-07 22:39:43 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(NULL, 'alter table mod...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(256): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\init.php(19): Table_Manager::force_add_column_to('model_ruangan', Array, Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\uji\application\bootstrap.php(120): Kohana_Core::modules(Array)
#5 C:\xampp\htdocs\uji\index.php(102): require('C:\xampp\htdocs...')
#6 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-07 22:39:47 --- CRITICAL: Database_Exception [ 1060 ]: Duplicate column name 'lantai' [ alter table model_ruangan add column lantai integer  ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-07 22:39:47 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(NULL, 'alter table mod...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(256): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\init.php(19): Table_Manager::force_add_column_to('model_ruangan', Array, Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Core.php(602): require_once('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\uji\application\bootstrap.php(120): Kohana_Core::modules(Array)
#5 C:\xampp\htdocs\uji\index.php(102): require('C:\xampp\htdocs...')
#6 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-07 22:40:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$exception' (T_VARIABLE), expecting identifier (T_STRING) or namespace (T_NAMESPACE) or \\ (T_NS_SEPARATOR) ~ MODPATH\orm_beta\init.php [ 20 ] in :
2013-07-07 22:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-07 22:40:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$e' (T_VARIABLE), expecting identifier (T_STRING) or namespace (T_NAMESPACE) or \\ (T_NS_SEPARATOR) ~ MODPATH\orm_beta\init.php [ 20 ] in :
2013-07-07 22:40:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-07 22:40:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting variable (T_VARIABLE) ~ MODPATH\orm_beta\init.php [ 20 ] in :
2013-07-07 22:40:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-07 22:41:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: lantai ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 96 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:96
2013-07-07 22:41:34 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(96): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 96, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(504): Metadata_Instance->is_attribute_object('lantai')
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(469): PersistentObject->assign_value(Array)
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(17): PersistentObject->retrieve_all()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:96
2013-07-07 22:42:11 --- CRITICAL: ErrorException [ 8 ]: Undefined index: lantai ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 96 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:96
2013-07-07 22:42:11 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(96): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 96, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(504): Metadata_Instance->is_attribute_object('lantai')
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(469): PersistentObject->assign_value(Array)
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(17): PersistentObject->retrieve_all()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:96
2013-07-07 22:43:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: lantai ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 96 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:96
2013-07-07 22:43:37 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(96): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 96, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(504): Metadata_Instance->is_attribute_object('lantai')
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(469): PersistentObject->assign_value(Array)
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(17): PersistentObject->retrieve_all()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:96
2013-07-07 23:37:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: lantai ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 96 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:96
2013-07-07 23:37:09 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(96): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 96, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(505): Metadata_Instance->is_attribute_object('lantai')
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(470): PersistentObject->assign_value(Array)
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(17): PersistentObject->retrieve_all()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:96