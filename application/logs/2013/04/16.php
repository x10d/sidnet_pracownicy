<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-04-16 13:28:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_users' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:28:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:28:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:28:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:29:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:29:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:39:10 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:39:26 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:39:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:39:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:39:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:39:37 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_user' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:39:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:42:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php:1299
2013-04-16 13:42:19 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(41): Kohana_ORM->save()
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php:1299
2013-04-16 13:42:35 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php:1299
2013-04-16 13:42:35 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(41): Kohana_ORM->save()
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php:1299
2013-04-16 13:50:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Auth.php [ 39 ] in :
2013-04-16 13:50:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:51:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Auth.php [ 39 ] in :
2013-04-16 13:51:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:51:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Auth.php [ 39 ] in :
2013-04-16 13:51:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:51:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Auth.php [ 39 ] in :
2013-04-16 13:51:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:52:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Auth.php [ 39 ] in :
2013-04-16 13:52:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:52:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Auth.php [ 39 ] in :
2013-04-16 13:52:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:52:14 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/Auth.php [ 39 ] in :
2013-04-16 13:52:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:52:34 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:52:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 13:58:09 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 13:58:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 14:03:31 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 14:03:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 14:04:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-04-16 14:04:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-04-16 14:04:44 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'sidnet_kohana.Roles_Users' doesn't exist [ INSERT INTO `Roles_Users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:04:44 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `Ro...', false, Array)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(39): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:06:05 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:06:05 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(39): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:06:18 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:06:18 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(39): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:06:38 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:06:38 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(39): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:08:20 --- EMERGENCY: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:08:20 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(39): Kohana_ORM->add('roles', Object(Model_Role))
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/database/classes/Kohana/Database/Query.php:251
2013-04-16 14:11:38 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php:1299
2013-04-16 14:11:38 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(38): Kohana_ORM->save()
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php:1299
2013-04-16 14:19:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/classes/Controller/Auth.php [ 11 ] in /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php:11
2013-04-16 14:19:31 --- DEBUG: #0 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(11): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/sidnet...', 11, Array)
#1 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php:11
2013-04-16 14:48:55 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1272 ] in /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php:1299
2013-04-16 14:48:55 --- DEBUG: #0 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1299): Kohana_ORM->check(NULL)
#1 /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php(1418): Kohana_ORM->create(NULL)
#2 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(30): Kohana_ORM->save()
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/sidnet_pracownicy/modules/orm/classes/Kohana/ORM.php:1299
2013-04-16 14:53:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/classes/Controller/Auth.php [ 17 ] in /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php:17
2013-04-16 14:53:30 --- DEBUG: #0 /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/sidnet...', 17, Array)
#1 /var/www/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/sidnet_pracownicy/application/classes/Controller/Auth.php:17