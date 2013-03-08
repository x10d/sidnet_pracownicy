<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-08 09:54:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Kohana_Valid::exact_length() ~ SYSPATH/classes/Kohana/Valid.php [ 73 ] in /www.apache.root/sidnet_pracownicy/system/classes/Kohana/Valid.php:73
2013-03-08 09:54:26 --- DEBUG: #0 /www.apache.root/sidnet_pracownicy/system/classes/Kohana/Valid.php(73): Kohana_Core::error_handler(2, 'Missing argumen...', '/www.apache.roo...', 73, Array)
#1 [internal function]: Kohana_Valid::exact_length(11)
#2 /www.apache.root/sidnet_pracownicy/system/classes/Kohana/Validation.php(391): ReflectionMethod->invokeArgs(NULL, Array)
#3 /www.apache.root/sidnet_pracownicy/application/classes/Controller/Pracownicy.php(18): Kohana_Validation->check()
#4 /www.apache.root/sidnet_pracownicy/system/classes/Kohana/Controller.php(84): Controller_Pracownicy->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 /www.apache.root/sidnet_pracownicy/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pracownicy))
#7 /www.apache.root/sidnet_pracownicy/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /www.apache.root/sidnet_pracownicy/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /www.apache.root/sidnet_pracownicy/index.php(118): Kohana_Request->execute()
#10 {main} in /www.apache.root/sidnet_pracownicy/system/classes/Kohana/Valid.php:73