<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-09 01:24:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Uji.php [ 72 ] in :
2013-07-09 01:24:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-09 01:46:32 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:46:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(72): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:46:38 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 72 ] in :
2013-07-09 01:46:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-09 01:47:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 73 ] in :
2013-07-09 01:47:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-09 01:47:34 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:47:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(73): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:48:24 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:48:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(74): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:48:32 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:48:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(74): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:49:13 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:49:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(75): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:49:38 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:49:38 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(76): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:50:43 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(75): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:51:48 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:51:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(75): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:51:52 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Model\Waktu.php [ 14 ] in :
2013-07-09 01:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(14): json_decode(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(75): Model_Waktu->__construct(Array)
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-09 01:52:27 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _id ~ APPPATH\classes\Controller\Uji.php [ 76 ] in C:\xampp\htdocs\uji\application\classes\Controller\Uji.php:76
2013-07-09 01:52:27 --- DEBUG: #0 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(76): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 76, Array)
#1 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\uji\application\classes\Controller\Uji.php:76
2013-07-09 01:52:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Uji.php [ 76 ] in C:\xampp\htdocs\uji\application\classes\Controller\Uji.php:76
2013-07-09 01:52:43 --- DEBUG: #0 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(76): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 76, Array)
#1 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\uji\application\classes\Controller\Uji.php:76
2013-07-09 01:55:19 --- CRITICAL: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, string given ~ APPPATH\classes\Controller\Uji.php [ 73 ] in :
2013-07-09 01:55:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', 'C:\xampp\htdocs...', 73, Array)
#1 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(73): array_search(Array, '_id')
#2 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-09 01:55:35 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\orm_beta\classes\Table\Manager.php [ 173 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:173
2013-07-09 01:55:35 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(173): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 173, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Waktu), Object(Metadata_Instance))
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(80): PersistentObject->save()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:173
2013-07-09 01:59:40 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\orm_beta\classes\Table\Manager.php [ 173 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:173
2013-07-09 01:59:40 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(173): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 173, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Waktu), Object(Metadata_Instance))
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(80): PersistentObject->save()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:173
2013-07-09 02:00:06 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _cols ~ MODPATH\orm_beta\classes\DataRow.php [ 119 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:119
2013-07-09 02:00:06 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 119, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(174): DataRow->update_columns()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Waktu), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(80): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:119
2013-07-09 02:02:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _cols ~ MODPATH\orm_beta\classes\DataRow.php [ 121 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:121
2013-07-09 02:02:27 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 121, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(174): DataRow->update_columns()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Waktu), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(80): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:121
2013-07-09 02:03:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _cols ~ MODPATH\orm_beta\classes\DataRow.php [ 122 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:122
2013-07-09 02:03:01 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php(122): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 122, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(174): DataRow->update_columns()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Waktu), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(80): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:122
2013-07-09 02:03:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _cols ~ MODPATH\orm_beta\classes\DataRow.php [ 121 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:121
2013-07-09 02:03:10 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php(121): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 121, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(174): DataRow->update_columns()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Waktu), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(80): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:121
2013-07-09 02:03:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _vals ~ MODPATH\orm_beta\classes\DataRow.php [ 133 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:133
2013-07-09 02:03:23 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php(133): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 133, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(174): DataRow->update_values()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Waktu), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(80): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\DataRow.php:133
2013-07-09 02:13:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$id' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\classes\Controller\Uji.php [ 77 ] in :
2013-07-09 02:13:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-09 02:25:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Waktu::set() ~ APPPATH\classes\Controller\Uji.php [ 84 ] in :
2013-07-09 02:25:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-09 02:25:38 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Model\Waktu.php [ 34 ] in C:\xampp\htdocs\uji\application\classes\Model\Waktu.php:34
2013-07-09 02:25:38 --- DEBUG: #0 C:\xampp\htdocs\uji\application\classes\Model\Waktu.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 34, Array)
#1 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(84): Model_Waktu->set(Array)
#2 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\uji\application\classes\Model\Waktu.php:34