<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 09:27:56 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/Profil.php [ 51 ] in file:line
2013-10-09 09:27:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 09:28:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Session::intance() ~ APPPATH/views/main.php [ 41 ] in file:line
2013-10-09 09:28:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:29:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/File.php [ 5 ] in file:line
2013-10-09 10:29:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:44:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:44:54 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:38 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:40 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:40 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:40 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:40 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:41 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:45:54 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 10:49:08 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:50:41 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:50:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:50:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:51:06 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:51:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:54:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:54:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:54:48 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:54:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:54:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:54:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:54:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:54:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:54:50 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:54:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:59:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:59:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 10:59:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function action() on a non-object ~ SYSPATH/classes/Kohana/Controller.php [ 72 ] in file:line
2013-10-09 10:59:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:11:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/file.php [ 32 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:31 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 32, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/file.php [ 32 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:32 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 32, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/file.php [ 32 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:33 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 32, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/file.php [ 32 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:33 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 32, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/file.php [ 32 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:11:33 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 32, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:32
2013-10-09 11:18:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/file.php [ 31 ] in file:line
2013-10-09 11:18:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:18:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/file.php [ 31 ] in file:line
2013-10-09 11:18:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:18:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH/views/file.php [ 31 ] in file:line
2013-10-09 11:18:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 11:19:06 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 11:19:06 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 11:23:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 11:23:12 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 11:28:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 11:28:14 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-09 11:45:53 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/Controller/Connect.php [ 42 ] in file:line
2013-10-09 11:45:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/Users/rubio_n/...', 42, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(42): mkdir('/upload/$user->...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in file:line
2013-10-09 11:47:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH/messages/models/user.php [ 20 ] in file:line
2013-10-09 11:47:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 12:26:33 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): Permission denied ~ APPPATH/classes/Controller/Connect.php [ 30 ] in file:line
2013-10-09 12:26:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): Permis...', '/Users/rubio_n/...', 30, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(30): mkdir('/upload/$user->...', 511, true)
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in file:line
2013-10-09 12:51:36 --- EMERGENCY: ErrorException [ 2 ]: mkdir(): No such file or directory ~ APPPATH/classes/Controller/Connect.php [ 42 ] in file:line
2013-10-09 12:51:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mkdir(): No suc...', '/Users/rubio_n/...', 42, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(42): mkdir('/upload/$user->...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in file:line
2013-10-09 13:56:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/file.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:12
2013-10-09 13:56:23 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:12
2013-10-09 13:56:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/file.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:12
2013-10-09 13:56:37 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:12
2013-10-09 13:56:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/file.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:12
2013-10-09 13:56:53 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:12
2013-10-09 15:13:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/File.php [ 51 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:51
2013-10-09 15:13:50 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 51, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:51
2013-10-09 15:17:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/File.php [ 49 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:49
2013-10-09 15:17:25 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 49, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:49
2013-10-09 15:18:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/File.php [ 49 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:49
2013-10-09 15:18:05 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 49, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:49
2013-10-09 15:18:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/File.php [ 49 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:49
2013-10-09 15:18:07 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 49, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:49
2013-10-09 15:18:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/File.php [ 50 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:50
2013-10-09 15:18:35 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(50): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 50, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:50
2013-10-09 15:29:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filename ~ APPPATH/classes/Controller/File.php [ 49 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:49
2013-10-09 15:29:24 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 49, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:49
2013-10-09 15:31:31 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/File.php [ 41 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:31:31 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 41, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:34:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/File.php [ 41 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:34:46 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 41, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:35:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/File.php [ 41 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:35:57 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 41, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:36:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/File.php [ 41 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:36:11 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 41, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:41:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: file ~ APPPATH/classes/Controller/File.php [ 41 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 15:41:07 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(41): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 41, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:41
2013-10-09 16:08:39 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/Controller/File.php [ 89 ] in file:line
2013-10-09 16:08:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 16:09:07 --- EMERGENCY: ErrorException [ 1 ]: Class 'Image' not found ~ APPPATH/classes/Controller/File.php [ 89 ] in file:line
2013-10-09 16:09:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 16:09:19 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function errors() on a non-object ~ APPPATH/classes/Controller/File.php [ 49 ] in file:line
2013-10-09 16:09:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 18:57:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH/classes/Controller/File.php [ 54 ] in file:line
2013-10-09 18:57:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 18:57:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/File.php [ 116 ] in file:line
2013-10-09 18:57:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 18:59:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/File.php [ 117 ] in file:line
2013-10-09 18:59:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 18:59:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/File.php [ 117 ] in file:line
2013-10-09 18:59:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 18:59:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/File.php [ 117 ] in file:line
2013-10-09 18:59:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 18:59:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/File.php [ 117 ] in file:line
2013-10-09 18:59:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 18:59:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF), expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/File.php [ 117 ] in file:line
2013-10-09 18:59:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 19:00:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH/classes/Controller/File.php [ 35 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:35
2013-10-09 19:00:39 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 35, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_File->action_addfile()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/File.php:35
2013-10-09 19:10:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_file' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2013-10-09 19:10:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 19:17:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/Controller/File.php [ 21 ] in file:line
2013-10-09 19:17:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 19:30:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: file ~ APPPATH/views/file.php [ 53 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:53
2013-10-09 19:30:58 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php(53): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 53, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(46): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_File))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/file.php:53
2013-10-09 21:03:37 --- EMERGENCY: ErrorException [ 1 ]: Allowed memory size of 33554432 bytes exhausted (tried to allocate 32505856 bytes) ~ SYSPATH/classes/Kohana/Request.php [ 136 ] in file:line
2013-10-09 21:03:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 22:50:59 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function _typefile() ~ APPPATH/classes/Controller/File.php [ 88 ] in file:line
2013-10-09 22:50:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-09 23:56:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/connect.php [ 41 ] in file:line
2013-10-09 23:56:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line