<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-08 09:39:27 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 09:39:27 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(49): Kohana_Auth::instance()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 10:14:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Connect.php [ 50 ] in file:line
2013-10-08 10:14:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:14:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Connect.php [ 50 ] in file:line
2013-10-08 10:14:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 10:14:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Connect.php [ 50 ] in file:line
2013-10-08 10:14:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:07:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:00 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/info')
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/info', NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(70): Kohana_View::factory('user/info')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:03 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:03 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/info')
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/info', NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(70): Kohana_View::factory('user/info')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/info could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:04 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/info')
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/info', NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(70): Kohana_View::factory('user/info')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view /Home/ could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:38 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/Home/')
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('/Home/', NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(70): Kohana_View::factory('/Home/')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:39 --- EMERGENCY: View_Exception [ 0 ]: The requested view /Home/ could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:39 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/Home/')
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('/Home/', NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(70): Kohana_View::factory('/Home/')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:40 --- EMERGENCY: View_Exception [ 0 ]: The requested view /Home/ could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:07:40 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('/Home/')
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('/Home/', NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(70): Kohana_View::factory('/Home/')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 11:08:01 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:01 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(74): Kohana_Auth::instance()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:01 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:01 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(74): Kohana_Auth::instance()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:02 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:02 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(74): Kohana_Auth::instance()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:02 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:02 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(74): Kohana_Auth::instance()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:02 --- EMERGENCY: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH/classes/Kohana/Session.php [ 324 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:02 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(125): Kohana_Session->read(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(58): Kohana_Session::instance('native')
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth/File.php(21): Kohana_Auth->__construct(Object(Config_Group))
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth_File->__construct(Object(Config_Group))
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(74): Kohana_Auth::instance()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Users/rubio_n/Documents/Sites/cloudwac/index.php(118): Kohana_Request->execute()
#12 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Session.php:125
2013-10-08 11:08:20 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Connect.php [ 79 ] in file:line
2013-10-08 11:08:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:08:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Connect.php [ 79 ] in file:line
2013-10-08 11:08:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:08:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Connect.php [ 79 ] in file:line
2013-10-08 11:08:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:08:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Connect.php [ 79 ] in file:line
2013-10-08 11:08:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:10:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:10:15 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:10:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:10:16 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:10:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:10:16 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:10:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:10:16 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:10:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:10:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:10:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:10:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:10:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:10:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:10:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:10:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:10:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:10:59 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:10:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:10:59 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:10:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:11:00 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:11:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:11:00 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:11:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:11:00 --- EMERGENCY: ErrorException [ 1 ]: Cannot pass parameter 2 by reference ~ APPPATH/classes/Controller/Connect.php [ 124 ] in file:line
2013-10-08 11:11:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:14:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE) ~ APPPATH/classes/Model/user.php [ 31 ] in file:line
2013-10-08 11:14:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:15:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH/classes/Controller/Connect.php [ 94 ] in file:line
2013-10-08 11:15:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:15:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH/classes/Controller/Connect.php [ 94 ] in file:line
2013-10-08 11:15:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 11:16:59 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2013-10-08 11:16:59 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('123456')
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', '123456')
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', '123456')
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('password', '123456')
#5 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->values(Array, Array)
#6 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#13 {main} in file:line
2013-10-08 11:17:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:17:47 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:18:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:18:32 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:19:20 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant title - assumed 'title' ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:19:20 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Use of undefine...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:20:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:20:08 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:20:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:20:15 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:20:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:20:17 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 11:35:53 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:35:53 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:37:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: session_type ~ MODPATH/auth/classes/Kohana/Auth.php [ 58 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php:58
2013-10-08 11:37:38 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(58): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 58, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(59): Kohana_Auth::instance()
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1173): Model_Auth_User->filters()
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('username', 'Ricky')
#5 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('username', 'Ricky')
#6 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('username', 'Ricky')
#7 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->values(Array, Array)
#8 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#15 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php:58
2013-10-08 11:37:45 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:37:45 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:38:43 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:38:43 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:38:45 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:38:45 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:39:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:39:03 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:40:16 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:40:16 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:40:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:40:19 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 11:45:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: session_type ~ MODPATH/auth/classes/Kohana/Auth.php [ 58 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php:58
2013-10-08 11:45:59 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(58): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 58, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#2 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(59): Kohana_Auth::instance()
#3 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1173): Model_Auth_User->filters()
#4 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('username', 'Ricko')
#5 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('username', 'Ricko')
#6 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('username', 'Ricko')
#7 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Model/Auth/user.php(167): Kohana_ORM->values(Array, Array)
#8 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Connect.php(98): Model_Auth_User->create_user(Array, Array)
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Connect->action_create()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#15 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/auth/classes/Kohana/Auth.php:58
2013-10-08 12:07:36 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/Controller/Template.php [ 16 ] in file:line
2013-10-08 12:07:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:07:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/Controller/Template.php [ 16 ] in file:line
2013-10-08 12:07:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:07:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/Controller/Template.php [ 16 ] in file:line
2013-10-08 12:07:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:12:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/Controller/Template.php [ 16 ] in file:line
2013-10-08 12:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:12:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/Controller/Template.php [ 16 ] in file:line
2013-10-08 12:12:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:12:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/Controller/Template.php [ 16 ] in file:line
2013-10-08 12:12:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:12:55 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/Controller/Template.php [ 16 ] in file:line
2013-10-08 12:12:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 12:13:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user' (T_VARIABLE), expecting function (T_FUNCTION) ~ SYSPATH/classes/Kohana/Controller/Template.php [ 16 ] in file:line
2013-10-08 12:13:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 14:10:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/connect.php [ 19 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/connect.php:19
2013-10-08 14:10:49 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/connect.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 19, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(35): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/connect.php:19
2013-10-08 14:11:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 19 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php:19
2013-10-08 14:11:50 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 19, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(35): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php:19
2013-10-08 14:11:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 19 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php:19
2013-10-08 14:11:51 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 19, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(35): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php:19
2013-10-08 14:11:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 19 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php:19
2013-10-08 14:11:51 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 19, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(35): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php:19
2013-10-08 14:11:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/login.php [ 19 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php:19
2013-10-08 14:11:52 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 19, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(35): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/login.php:19
2013-10-08 14:39:27 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/main.php [ 22 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:22
2013-10-08 14:39:27 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 22, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:22
2013-10-08 14:39:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/main.php [ 22 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:22
2013-10-08 14:39:33 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 22, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:22
2013-10-08 14:41:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/main.php [ 17 ] in file:line
2013-10-08 14:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 14:41:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/main.php [ 17 ] in file:line
2013-10-08 14:41:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 14:41:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/main.php [ 17 ] in file:line
2013-10-08 14:41:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 14:41:08 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/main.php [ 17 ] in file:line
2013-10-08 14:41:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 14:41:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/views/main.php [ 17 ] in file:line
2013-10-08 14:41:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 14:41:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:41:14 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:41:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:41:14 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:41:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:41:14 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:41:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:41:15 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:44:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:44:09 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:44:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:44:11 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:46:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/views/main.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 14:46:36 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:17
2013-10-08 15:01:26 --- EMERGENCY: Kohana_Exception [ 0 ]: The mail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-08 15:01:26 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('mail')
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(35): Kohana_ORM->__get('mail')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#15 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-08 15:01:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The mail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-08 15:01:27 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('mail')
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(35): Kohana_ORM->__get('mail')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#15 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-08 15:01:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The mail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-08 15:01:27 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('mail')
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(35): Kohana_ORM->__get('mail')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#15 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-08 15:01:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The mail property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-08 15:01:27 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('mail')
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(35): Kohana_ORM->__get('mail')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#9 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#15 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:603
2013-10-08 16:29:50 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$validation' (T_VARIABLE) ~ APPPATH/classes/Controller/Profil.php [ 31 ] in file:line
2013-10-08 16:29:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 16:29:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$validation' (T_VARIABLE) ~ APPPATH/classes/Controller/Profil.php [ 31 ] in file:line
2013-10-08 16:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 16:29:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$validation' (T_VARIABLE) ~ APPPATH/classes/Controller/Profil.php [ 31 ] in file:line
2013-10-08 16:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 16:29:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$validation' (T_VARIABLE) ~ APPPATH/classes/Controller/Profil.php [ 31 ] in file:line
2013-10-08 16:29:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 16:36:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH/classes/Controller/Profil.php [ 25 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:25
2013-10-08 16:36:16 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(25): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 25, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:25
2013-10-08 16:36:44 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, string given, called in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php on line 25 and defined ~ SYSPATH/classes/Kohana/Validation.php [ 19 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php:19
2013-10-08 16:36:44 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/rubio_n/...', 19, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(25): Kohana_Validation::factory('user')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php:19
2013-10-08 16:37:58 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/register could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 16:37:58 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/register')
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/register', NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(47): Kohana_View::factory('user/register')
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php:137
2013-10-08 16:38:52 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/Profil.php [ 48 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 16:38:52 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(48): Kohana_Core::error_handler(2048, 'Only variables ...', '/Users/rubio_n/...', 48, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 16:39:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Profil.php [ 48 ] in file:line
2013-10-08 16:39:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 16:39:58 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/profil.php [ 13 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:13
2013-10-08 16:39:58 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/rubio_n/...', 13, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:13
2013-10-08 16:40:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 16:40:48 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
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
2013-10-08 16:41:46 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/profil.php [ 13 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:13
2013-10-08 16:41:46 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/rubio_n/...', 13, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:13
2013-10-08 16:42:02 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/profil.php [ 13 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:13
2013-10-08 16:42:02 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/rubio_n/...', 13, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:13
2013-10-08 16:53:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Profil.php [ 31 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:31
2013-10-08 16:53:48 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 31, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:31
2013-10-08 16:54:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/main.php [ 4 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 16:54:05 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 4, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php:4
2013-10-08 16:56:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 16 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:16
2013-10-08 16:56:29 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 16, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:16
2013-10-08 17:07:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:35 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:36 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:36 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:36 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:36 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:37 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:37 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:37 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 12 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:07:49 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:12
2013-10-08 17:25:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user ~ APPPATH/classes/Controller/Profil.php [ 31 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:31
2013-10-08 17:25:34 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 31, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:31
2013-10-08 17:33:53 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:33:53 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(41): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:39:07 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:39:07 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(41): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:40:45 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:40:45 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(41): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:44:09 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:44:09 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:49:31 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:49:31 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:52:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:52:04 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:52:06 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:52:06 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:55:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Profil.php [ 36 ] in file:line
2013-10-08 17:55:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 17:56:04 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:56:04 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:58:50 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:58:50 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:59:45 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 17:59:45 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:02:22 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:02:22 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:07:50 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:07:50 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(38): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Model_User::edit(Array)
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:10:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: array ~ APPPATH/classes/Controller/Profil.php [ 43 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:43
2013-10-08 18:10:28 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 43, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:43
2013-10-08 18:13:14 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:13:14 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(46): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:13:41 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:13:41 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(46): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:15:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:15:19 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(46): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:15:24 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:15:24 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(46): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:27:19 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:27:19 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(47): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:28:23 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:28:23 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(47): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:28:25 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 18:28:25 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(47): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 19:11:33 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 19:11:33 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(47): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 19:11:35 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 19:11:35 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(47): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 19:12:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:47
2013-10-08 19:12:16 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(47): Kohana_ORM->update()
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:47
2013-10-08 19:12:38 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:47
2013-10-08 19:12:38 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(47): Kohana_ORM->update()
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:47
2013-10-08 19:20:06 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 19:20:06 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(48): Kohana_ORM->save()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1302
2013-10-08 19:20:20 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 19:20:20 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(48): Kohana_ORM->update()
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 19:23:58 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 19:23:58 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(48): Kohana_ORM->update()
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 19:24:01 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 19:24:01 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(48): Kohana_ORM->update()
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 19:24:16 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot update user model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1357 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 19:24:16 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(48): Kohana_ORM->update()
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php:48
2013-10-08 19:25:29 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:25:29 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(48): Kohana_ORM->update()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:27:05 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:27:05 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(48): Kohana_ORM->update()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:34:22 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:34:22 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(50): Kohana_ORM->update()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:35:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Profil.php [ 36 ] in file:line
2013-10-08 19:35:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 19:35:53 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'user' not found ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-10-08 19:35:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/rubio_n/...', 377, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Kohana_Validation->check()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 19:36:35 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'username' not found ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2013-10-08 19:36:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/rubio_n/...', 377, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Kohana_Validation->check()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 19:37:30 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:37:30 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(50): Kohana_ORM->update()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:39:25 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, no array or string given ~ SYSPATH/classes/Kohana/Validation.php [ 383 ] in file:line
2013-10-08 19:39:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/rubio_n/...', 383, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php(383): call_user_func_array(false, Array)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Kohana_Validation->check()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 19:42:28 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, no array or string given ~ SYSPATH/classes/Kohana/Validation.php [ 383 ] in file:line
2013-10-08 19:42:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/rubio_n/...', 383, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php(383): call_user_func_array(false, Array)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Kohana_Validation->check()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 19:44:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Profil.php [ 36 ] in file:line
2013-10-08 19:44:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 19:44:35 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function unique_username() ~ APPPATH/classes/Controller/Profil.php [ 40 ] in file:line
2013-10-08 19:44:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 19:46:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'email' (T_STRING), expecting ')' ~ APPPATH/classes/Controller/Profil.php [ 36 ] in file:line
2013-10-08 19:46:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 19:47:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function unique_username() ~ APPPATH/classes/Controller/Profil.php [ 40 ] in file:line
2013-10-08 19:47:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 19:50:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function unique_username() ~ APPPATH/classes/Controller/Profil.php [ 40 ] in file:line
2013-10-08 19:50:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 19:51:14 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:51:14 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(50): Kohana_ORM->update()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:52:03 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:52:03 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(50): Kohana_ORM->update()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:52:06 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:52:06 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(50): Kohana_ORM->update()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:52:07 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:52:07 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php(1362): Kohana_ORM->check(NULL)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(50): Kohana_ORM->update()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/modules/orm/classes/Kohana/ORM.php:1362
2013-10-08 19:53:16 --- EMERGENCY: ErrorException [ 1 ]: Class 'User_Model' not found ~ APPPATH/classes/Controller/Profil.php [ 40 ] in file:line
2013-10-08 19:53:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 19:53:29 --- EMERGENCY: ErrorException [ 1 ]: Class 'user_Model' not found ~ APPPATH/classes/Controller/Profil.php [ 40 ] in file:line
2013-10-08 19:53:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 19:53:48 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, no array or string given ~ SYSPATH/classes/Kohana/Validation.php [ 383 ] in file:line
2013-10-08 19:53:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/rubio_n/...', 383, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php(383): call_user_func_array(false, Array)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Kohana_Validation->check()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 20:01:10 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_User::unique_username(), called in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php on line 40 and defined ~ APPPATH/classes/Model/User.php [ 11 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php:11
2013-10-08 20:01:10 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/rubio_n/...', 11, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(40): Model_User::unique_username()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php:11
2013-10-08 20:04:28 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_User::unique_username(), called in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php on line 40 and defined ~ APPPATH/classes/Model/User.php [ 11 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php:11
2013-10-08 20:04:28 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/rubio_n/...', 11, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(40): Model_User::unique_username()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php:11
2013-10-08 21:15:24 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Model_User::unique_username(), called in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php on line 40 and defined ~ APPPATH/classes/Model/User.php [ 11 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php:11
2013-10-08 21:15:24 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/rubio_n/...', 11, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(40): Model_User::unique_username()
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Model/User.php:11
2013-10-08 21:16:35 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, no array or string given ~ SYSPATH/classes/Kohana/Validation.php [ 383 ] in file:line
2013-10-08 21:16:35 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Users/rubio_n/...', 383, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Validation.php(383): call_user_func_array(false, Array)
#2 /Users/rubio_n/Documents/Sites/cloudwac/application/classes/Controller/Profil.php(43): Kohana_Validation->check()
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(84): Controller_Profil->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#9 {main} in file:line
2013-10-08 21:21:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Profil.php [ 42 ] in file:line
2013-10-08 21:21:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 22:00:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/profil.php [ 1 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:1
2013-10-08 22:00:32 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 1, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:1
2013-10-08 22:02:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/profil.php [ 1 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:1
2013-10-08 22:02:53 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 1, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:1
2013-10-08 22:03:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/profil.php [ 1 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:1
2013-10-08 22:03:26 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 1, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:1
2013-10-08 22:03:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/profil.php [ 1 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:1
2013-10-08 22:03:28 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 1, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:1
2013-10-08 22:04:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:04:08 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:04:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:04:10 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:04:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:04:10 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:04:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/profil.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:04:10 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:32:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/profil.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:32:26 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:32:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ APPPATH/views/profil.php [ 17 ] in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 22:32:38 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php(17): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 17, Array)
#1 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/cloudwac/application/views/main.php(34): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profil))
#11 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/cloudwac/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/cloudwac/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/cloudwac/application/views/profil.php:17
2013-10-08 23:03:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/Profil.php [ 72 ] in file:line
2013-10-08 23:03:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-08 23:25:31 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/Profil.php [ 74 ] in file:line
2013-10-08 23:25:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line