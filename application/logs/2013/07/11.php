<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-11 00:03:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'mahasiswa' in 'field list' [ UPDATE `Model_MataKuliah` SET `nama` = 'Struktur data', `mahasiswa` = '13509007', `_id` = 'IF2030' WHERE `_id` = 'IF2030' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 00:03:03 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `Model_M...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(174): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(87): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 00:03:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'mahasiswa' in 'field list' [ UPDATE `Model_MataKuliah` SET `nama` = 'Struktur data', `mahasiswa` = '13509007', `_id` = 'IF2030' WHERE `_id` = 'IF2030' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 00:03:13 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `Model_M...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(174): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(87): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 00:05:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\pages\uji1.php [ 425 ] in :
2013-07-11 00:05:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-11 01:29:44 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '123456789' for key 'PRIMARY' [ INSERT INTO `Model_Orang` (`nama`, `umur`, `jenis_kelamin`, `agama`, `_key`, `_id`) VALUES ('hai', '22', 'p', '1289', '9c8f9815680e3f6f435b29def2489829', '123456789') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 01:29:44 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(106): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(145): Table_Manager::insert_data_chunck(Object(DataRow))
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(246): Table_Manager::insert_data(Array, 'Model_MataKulia...')
#4 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#5 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(45): PersistentObject->save()
#6 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 01:29:49 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'IF2031' for key 'PRIMARY' [ INSERT INTO `Model_MataKuliah` (`nama`, `dosen`, `_id`, `_key`) VALUES ('Struktur data 2', '123456789', 'IF2031', '63027b9e80daceef0030997bdfbed67d') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 01:29:49 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(106): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(111): Table_Manager::insert_data_chunck(Object(DataRow))
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(136): Table_Manager::insert_and_unset(Array, 'Model_MataKulia...')
#4 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(246): Table_Manager::insert_data(Array, 'Model_MataKulia...')
#5 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#6 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(45): PersistentObject->save()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#10 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 01:56:40 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '12345' for key 'PRIMARY' [ INSERT INTO `Model_Orang` (`nama`, `umur`, `jenis_kelamin`, `agama`, `_key`, `_id`) VALUES ('asdf', 'asdf', 'asdf', 'asdf', '9c8f9815680e3f6f435b29def2489829', '12345') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 01:56:40 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(108): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(114): Table_Manager::insert_data_chunck(Object(DataRow))
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(139): Table_Manager::insert_and_unset(Array, 'Model_Orang')
#4 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(246): Table_Manager::insert_data(Array, 'Model_Orang')
#5 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_Dosen), Object(Metadata_Instance))
#6 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(45): PersistentObject->save()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#10 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:00:06 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '12345' for key 'PRIMARY' [ INSERT INTO `Model_Dosen` (`nip`, `jurusan`, `fakultas`, `jabatan`, `_id`, `_key`) VALUES ('12345', 'dsfa', 'awef', 'fawe', '12345', '9c8f9815680e3f6f435b29def2489829') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:00:06 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(108): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(114): Table_Manager::insert_data_chunck(Object(DataRow))
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(132): Table_Manager::insert_and_unset(Array, 'Model_Dosen')
#4 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(246): Table_Manager::insert_data(Array, 'Model_MataKulia...')
#5 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#6 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(45): PersistentObject->save()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#10 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:00:15 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '12345' for key 'PRIMARY' [ INSERT INTO `Model_Dosen` (`nip`, `jurusan`, `fakultas`, `jabatan`, `_id`, `_key`) VALUES ('12345', 'dsfa', 'awef', 'fawe', '12345', '9c8f9815680e3f6f435b29def2489829') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:00:15 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(108): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(114): Table_Manager::insert_data_chunck(Object(DataRow))
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(132): Table_Manager::insert_and_unset(Array, 'Model_Dosen')
#4 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(246): Table_Manager::insert_data(Array, 'Model_MataKulia...')
#5 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#6 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(45): PersistentObject->save()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#10 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:06:20 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '12345' for key 'PRIMARY' [ INSERT INTO `Model_Dosen` (`nip`, `jurusan`, `fakultas`, `jabatan`, `_id`, `_key`) VALUES ('12345', 'dsfa', 'awef', 'fawe', '12345', '9c8f9815680e3f6f435b29def2489829') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:06:20 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(108): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(114): Table_Manager::insert_data_chunck(Object(DataRow))
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(132): Table_Manager::insert_and_unset(Array, 'Model_Dosen')
#4 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(246): Table_Manager::insert_data(Array, 'Model_MataKulia...')
#5 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#6 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(45): PersistentObject->save()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#10 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:17:09 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '12345' for key 'PRIMARY' [ INSERT INTO `Model_Dosen` (`nip`, `jurusan`, `fakultas`, `jabatan`, `_id`, `_key`) VALUES ('12345', 'dsfa', 'awef', 'fawe', '12345', '9c8f9815680e3f6f435b29def2489829') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:17:09 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Mo...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(108): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(114): Table_Manager::insert_data_chunck(Object(DataRow))
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(132): Table_Manager::insert_and_unset(Array, 'Model_Dosen')
#4 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(246): Table_Manager::insert_data(Array, 'Model_MataKulia...')
#5 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#6 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(45): PersistentObject->save()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_save()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#10 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:22:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'mahasiswa' in 'field list' [ UPDATE `Model_MataKuliah` SET `nama` = 'asdf', `mahasiswa` = '13509007', `_id` = 'if2039' WHERE `_id` = 'if2039' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:22:21 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `Model_M...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(182): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(87): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:22:28 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'mahasiswa' in 'field list' [ UPDATE `Model_MataKuliah` SET `nama` = 'asdf', `mahasiswa` = '13509007', `_id` = 'if2039' WHERE `_id` = 'if2039' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 02:22:28 --- DEBUG: #0 C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `Model_M...', false, Array)
#1 C:\xampp\htdocs\uji\modules\orm_beta\classes\Table\Manager.php(182): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\uji\modules\orm_beta\classes\Broker.php(249): Table_Manager::update_data(Array)
#3 C:\xampp\htdocs\uji\modules\orm_beta\classes\PersistentObject.php(456): Broker::save(Object(Model_MataKuliah), Object(Metadata_Instance))
#4 C:\xampp\htdocs\uji\application\classes\Controller\Uji.php(87): PersistentObject->save()
#5 C:\xampp\htdocs\uji\system\classes\Kohana\Controller.php(84): Controller_Uji->action_update()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Uji))
#8 C:\xampp\htdocs\uji\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\uji\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\uji\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\uji\modules\database\classes\Kohana\Database\Query.php:251
2013-07-11 12:18:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::base_url() ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 157 ] in :
2013-07-11 12:18:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-11 12:18:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method URL::base_url() ~ MODPATH\orm_beta\classes\Metadata\Instance.php [ 157 ] in :
2013-07-11 12:18:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-11 16:23:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Mahasiswa1' not found ~ APPPATH\classes\Controller\Uji.php [ 16 ] in :
2013-07-11 16:23:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-11 16:23:30 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Mahasiswa1' not found ~ APPPATH\classes\Controller\Uji.php [ 16 ] in :
2013-07-11 16:23:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :