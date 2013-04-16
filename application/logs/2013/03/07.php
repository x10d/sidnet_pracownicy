<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-03-07 12:57:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/index.php [ 19 ] in :
2013-03-07 12:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 12:57:51 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/index.php [ 19 ] in :
2013-03-07 12:57:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 12:57:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/index.php [ 19 ] in :
2013-03-07 12:57:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 12:57:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Html' not found ~ APPPATH/views/index.php [ 19 ] in :
2013-03-07 12:57:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 21:05:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/edit.php [ 6 ] in /www.apache.root/kohana.sidnet/application/views/edit.php:6
2013-03-07 21:05:18 --- DEBUG: #0 /www.apache.root/kohana.sidnet/application/views/edit.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/www.apache.roo...', 6, Array)
#1 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(61): include('/www.apache.roo...')
#2 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(348): Kohana_View::capture('/www.apache.roo...', Array)
#3 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /www.apache.root/kohana.sidnet/application/views/template/template.php(18): Kohana_View->__toString()
#5 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(61): include('/www.apache.roo...')
#6 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(348): Kohana_View::capture('/www.apache.roo...', Array)
#7 /www.apache.root/kohana.sidnet/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /www.apache.root/kohana.sidnet/application/classes/Controller/Base.php(33): Kohana_Controller_Template->after()
#9 /www.apache.root/kohana.sidnet/application/classes/Controller/Pracownicy.php(42): Controller_Base->after()
#10 /www.apache.root/kohana.sidnet/system/classes/Kohana/Controller.php(87): Controller_Pracownicy->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /www.apache.root/kohana.sidnet/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pracownicy))
#13 /www.apache.root/kohana.sidnet/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /www.apache.root/kohana.sidnet/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /www.apache.root/kohana.sidnet/index.php(118): Kohana_Request->execute()
#16 {main} in /www.apache.root/kohana.sidnet/application/views/edit.php:6
2013-03-07 21:06:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: title ~ APPPATH/views/edit.php [ 6 ] in /www.apache.root/kohana.sidnet/application/views/edit.php:6
2013-03-07 21:06:04 --- DEBUG: #0 /www.apache.root/kohana.sidnet/application/views/edit.php(6): Kohana_Core::error_handler(8, 'Undefined index...', '/www.apache.roo...', 6, Array)
#1 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(61): include('/www.apache.roo...')
#2 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(348): Kohana_View::capture('/www.apache.roo...', Array)
#3 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /www.apache.root/kohana.sidnet/application/views/template/template.php(18): Kohana_View->__toString()
#5 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(61): include('/www.apache.roo...')
#6 /www.apache.root/kohana.sidnet/system/classes/Kohana/View.php(348): Kohana_View::capture('/www.apache.roo...', Array)
#7 /www.apache.root/kohana.sidnet/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /www.apache.root/kohana.sidnet/application/classes/Controller/Base.php(33): Kohana_Controller_Template->after()
#9 /www.apache.root/kohana.sidnet/application/classes/Controller/Pracownicy.php(42): Controller_Base->after()
#10 /www.apache.root/kohana.sidnet/system/classes/Kohana/Controller.php(87): Controller_Pracownicy->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /www.apache.root/kohana.sidnet/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Pracownicy))
#13 /www.apache.root/kohana.sidnet/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /www.apache.root/kohana.sidnet/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /www.apache.root/kohana.sidnet/index.php(118): Kohana_Request->execute()
#16 {main} in /www.apache.root/kohana.sidnet/application/views/edit.php:6
2013-03-07 21:09:04 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Pracownicy.php [ 39 ] in :
2013-03-07 21:09:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 21:09:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Pracownicy.php [ 39 ] in :
2013-03-07 21:09:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 21:21:59 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH/views/template/partial/footer.php [ 1 ] in :
2013-03-07 21:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 21:22:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/template/partial/footer.php [ 1 ] in :
2013-03-07 21:22:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-03-07 21:22:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/template/partial/footer.php [ 1 ] in :
2013-03-07 21:22:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :