<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-24 00:20:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH/views/messagerie.php [ 12 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/messagerie.php:12
2013-10-24 00:20:08 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/messagerie.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 12, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/messagerie.php:12
2013-10-24 00:38:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Messagerie.php [ 22 ] in file:line
2013-10-24 00:38:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 08:42:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/newmessage.php [ 10 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:10
2013-10-24 08:42:12 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 10, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:10
2013-10-24 08:43:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: categorie ~ APPPATH/views/newmessage.php [ 20 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:20
2013-10-24 08:43:02 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 20, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:20
2013-10-24 09:45:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_user ~ APPPATH/views/annonce.php [ 43 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php:43
2013-10-24 09:45:17 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/rubio_n/...', 43, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php:43
2013-10-24 09:49:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_user ~ APPPATH/views/annonce.php [ 43 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php:43
2013-10-24 09:49:20 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/rubio_n/...', 43, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php:43
2013-10-24 09:57:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id_user ~ APPPATH/views/annonce.php [ 43 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php:43
2013-10-24 09:57:37 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/rubio_n/...', 43, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/annonce.php:43
2013-10-24 10:15:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: messages ~ APPPATH/classes/Controller/Messagerie.php [ 67 ] in /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Messagerie.php:67
2013-10-24 10:15:49 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Messagerie.php(67): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 67, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Messagerie->action_send()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Messagerie.php:67
2013-10-24 10:21:58 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: annonce ~ APPPATH/views/newmessage.php [ 7 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:7
2013-10-24 10:21:58 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 7, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:7
2013-10-24 10:33:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: annonce ~ APPPATH/views/newmessage.php [ 7 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:7
2013-10-24 10:33:54 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 7, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:7
2013-10-24 10:36:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Messagerie.php [ 97 ] in file:line
2013-10-24 10:36:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 10:36:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Messagerie.php [ 97 ] in file:line
2013-10-24 10:36:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 10:37:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH/classes/Controller/Messagerie.php [ 97 ] in file:line
2013-10-24 10:37:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 10:38:43 --- EMERGENCY: Kohana_Exception [ 0 ]: The content property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 10:38:43 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('content')
#1 /Users/rubio_n/Documents/Sites/freeads/application/views/messagerie.php(16): Kohana_ORM->__get('content')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#15 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 11:06:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Messagerie.php [ 133 ] in file:line
2013-10-24 11:06:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 11:06:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Messagerie.php [ 133 ] in file:line
2013-10-24 11:06:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 11:06:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Messagerie.php [ 133 ] in file:line
2013-10-24 11:06:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-24 11:06:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: annonce ~ APPPATH/views/newmessage.php [ 7 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:7
2013-10-24 11:06:50 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 7, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/newmessage.php:7
2013-10-24 11:20:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 11:20:33 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Messagerie.php(135): Kohana_ORM->__get('id_user')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Messagerie->action_lire()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 11:20:35 --- EMERGENCY: Kohana_Exception [ 0 ]: The id_user property does not exist in the Model_Message class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 11:20:35 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('id_user')
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Messagerie.php(135): Kohana_ORM->__get('id_user')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Messagerie->action_lire()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Messagerie))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-24 12:24:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Messagerie.php [ 74 ] in file:line
2013-10-24 12:24:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line