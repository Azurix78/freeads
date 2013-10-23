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