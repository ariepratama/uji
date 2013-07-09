<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-30 02:25:06 --- CRITICAL: ErrorException [ 1 ]: Class 'PersistentObject' not found ~ APPPATH\classes\Controller\Uji.php [ 13 ] in :
2013-06-30 02:25:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 02:25:33 --- CRITICAL: ErrorException [ 1 ]: Class 'PersistentObject' not found ~ APPPATH\classes\Controller\Uji.php [ 13 ] in :
2013-06-30 02:25:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 02:26:01 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm_beta\classes\PersistentObject.php [ 59 ] in :
2013-06-30 02:26:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 02:26:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm_beta\classes\PersistentObject.php [ 59 ] in :
2013-06-30 02:26:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 02:28:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm_beta\classes\PersistentObject.php [ 59 ] in :
2013-06-30 02:28:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 02:30:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm_beta\classes\PersistentObject.php [ 59 ] in :
2013-06-30 02:30:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 02:30:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ MODPATH\orm_beta\classes\PersistentObject.php [ 59 ] in :
2013-06-30 02:30:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 02:30:57 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 129 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:129
2013-06-30 02:30:57 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(129): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\xampp\htdocs...', 129, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(130): Metadata_Instance->get_column_name_of(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(14): PersistentObject->get_fields()
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_fields()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:129
2013-06-30 02:31:10 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 129 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:129
2013-06-30 02:31:10 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(129): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\xampp\htdocs...', 129, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(130): Metadata_Instance->get_column_name_of(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(14): PersistentObject->get_fields()
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_fields()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:129
2013-06-30 02:35:46 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ MODPATH\orm_beta\classes\Utility.php [ 22 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Utility.php:22
2013-06-30 02:35:46 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Utility.php(22): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(129): Utility::debug(Array)
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(130): Metadata_Instance->get_column_name_of(Array)
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(16): PersistentObject->get_fields()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_fields()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Utility.php:22
2013-06-30 02:36:05 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 130 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:130
2013-06-30 02:36:05 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(130): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\xampp\htdocs...', 130, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(130): Metadata_Instance->get_column_name_of(Array)
#2 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(16): PersistentObject->get_fields()
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_fields()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:130
2013-06-30 02:38:11 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Metadata_Constants::$APP_TYPE_STRING ~ MODPATH\orm_beta\classes\PersistentObject.php [ 130 ] in :
2013-06-30 02:38:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 04:04:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Ruangan' not found ~ APPPATH\classes\Controller\Uji.php [ 29 ] in :
2013-06-30 04:04:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 04:05:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Ruangan' not found ~ APPPATH\classes\Controller\Uji.php [ 29 ] in :
2013-06-30 04:05:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 04:06:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Ruangan' not found ~ APPPATH\classes\Controller\Uji.php [ 29 ] in :
2013-06-30 04:06:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 04:06:43 --- CRITICAL: ErrorException [ 1 ]: Class 'Ruangan' not found ~ APPPATH\classes\Controller\Uji.php [ 29 ] in :
2013-06-30 04:06:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 04:06:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Ruangan' not found ~ APPPATH\classes\Controller\Uji.php [ 29 ] in :
2013-06-30 04:06:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 04:07:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''Model_'' (T_CONSTANT_ENCAPSED_STRING) ~ APPPATH\classes\Controller\Uji.php [ 29 ] in :
2013-06-30 04:07:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 04:07:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: field ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 135 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:135
2013-06-30 04:07:12 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(135): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 135, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(153): Metadata_Instance->get_table_name_of('field')
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(225): PersistentObject->get_data()
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Ruangan), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(30): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:135
2013-06-30 04:09:37 --- CRITICAL: ErrorException [ 8 ]: Undefined index: field ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 135 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:135
2013-06-30 04:09:37 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php(135): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 135, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(153): Metadata_Instance->get_table_name_of('field')
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(225): PersistentObject->get_data()
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(442): Broker::save(Object(Model_Ruangan), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(30): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Metadata\Instance.php:135
2013-06-30 04:10:24 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\Model\Ruangan.php [ 19 ] in C:\xampp\htdocs\uji\application\classes\Model\Ruangan.php:19
2013-06-30 04:10:24 --- DEBUG: #0 C:\xampp\htdocs\uji\application\classes\Model\Ruangan.php(19): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(29): Model_Ruangan->__construct('[{"name":"nama"...')
#2 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\uji\application\classes\Model\Ruangan.php:19
2013-06-30 14:03:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Uji.php [ 11 ] in :
2013-06-30 14:03:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 14:07:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Model_Ruangan ~ MODPATH\orm_beta\classes\Table\Manager.php [ 196 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:196
2013-06-30 14:07:50 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(196): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 196, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(332): Table_Manager::retrieve('Model_Ruangan', 'Model_Ruangan', Object(Metadata_Instance), Array, Array, '_id')
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(464): Broker::retrieve('Model_Ruangan', Array, true)
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(12): PersistentObject->retrieve_all()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:196
2013-06-30 14:08:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: Model_Ruangan ~ MODPATH\orm_beta\classes\Table\Manager.php [ 196 ] in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:196
2013-06-30 14:08:01 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(196): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 196, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(332): Table_Manager::retrieve('Model_Ruangan', 'Model_Ruangan', Object(Metadata_Instance), Array, Array, '_id')
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(464): Broker::retrieve('Model_Ruangan', Array, true)
#3 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(12): PersistentObject->retrieve_all()
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php:196
2013-06-30 14:11:33 --- CRITICAL: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH\classes\Controller\Uji.php [ 17 ] in C:\xampp\htdocs\uji\application\classes\Controller\Uji.php:17
2013-06-30 14:11:33 --- DEBUG: #0 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(17): Kohana_Core::error_handler(2048, 'Only variables ...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#4 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\uji\application\classes\Controller\Uji.php:17
2013-06-30 14:27:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Mahasiswa' not found ~ APPPATH\classes\Controller\Uji.php [ 13 ] in :
2013-06-30 14:27:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 14:28:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Mahasiswa' not found ~ APPPATH\classes\Controller\Uji.php [ 13 ] in :
2013-06-30 14:28:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 15:04:46 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Dosen' not found ~ APPPATH\classes\Controller\Uji.php [ 13 ] in :
2013-06-30 15:04:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 15:32:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Dosen' not found ~ APPPATH\classes\Controller\Uji.php [ 16 ] in :
2013-06-30 15:32:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 15:32:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Dosen' not found ~ APPPATH\classes\Controller\Uji.php [ 16 ] in :
2013-06-30 15:32:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 15:34:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 44 ] in :
2013-06-30 15:34:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 15:34:41 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_' not found ~ APPPATH\classes\Controller\Uji.php [ 44 ] in :
2013-06-30 15:34:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 21:54:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Dosen' not found ~ APPPATH\classes\Controller\Uji.php [ 16 ] in :
2013-06-30 21:54:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-30 21:54:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Dosen' not found ~ APPPATH\classes\Controller\Uji.php [ 16 ] in :
2013-06-30 21:54:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :