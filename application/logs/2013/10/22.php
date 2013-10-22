<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-22 10:24:56 --- EMERGENCY: Kohana_Exception [ 0 ]: The save property does not exist in the Model_Depart class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-22 10:24:56 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('save')
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(130): Kohana_ORM->__get('save')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:603
2013-10-22 11:19:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Mesannonces.php [ 46 ] in file:line
2013-10-22 11:19:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 12:28:55 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Kohana_ORM::where(), called in /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Mesannonces.php on line 72 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1849 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1849
2013-10-22 12:28:55 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1849): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/rubio_n/...', 1849, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Mesannonces.php(72): Kohana_ORM->where('name', '02 - Aisne')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Mesannonces->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mesannonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1849
2013-10-22 13:46:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/Mesannonces.php [ 68 ] in file:line
2013-10-22 13:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 13:46:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/Mesannonces.php [ 92 ] in file:line
2013-10-22 13:46:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 17:52:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::unique_key() ~ MODPATH/orm/classes/Kohana/Auth/ORM.php [ 80 ] in file:line
2013-10-22 17:52:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-22 17:52:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:52:48 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:52:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:52:57 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:53:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:53:41 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:53:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:53:43 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:55:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:55:09 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:55:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:55:47 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:56:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:56:13 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:56:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:56:18 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:57:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:57:09 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:57:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:57:20 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:57:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: roles ~ MODPATH/orm/classes/Kohana/ORM.php [ 1540 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 17:57:46 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1540): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 1540, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/Auth/ORM.php(90): Kohana_ORM->has('roles', Object(Model_Role))
#3 /Users/rubio_n/Documents/Sites/freeads/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('bibi', 'salusalu', false)
#4 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Connect.php(70): Kohana_Auth->login('bibi', 'salusalu', false)
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Connect->action_login()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Connect))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#11 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:1540
2013-10-22 22:40:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Controller/Mesannonces.php [ 76 ] in /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Mesannonces.php:76
2013-10-22 22:40:37 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Mesannonces.php(76): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/rubio_n/...', 76, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Mesannonces->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mesannonces))
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#7 {main} in /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Mesannonces.php:76
2013-10-22 22:57:01 --- EMERGENCY: Kohana_Exception [ 0 ]: The prix property does not exist in the Model_Annonce class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:702
2013-10-22 22:57:01 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('prix', '100')
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Mesannonces.php(83): Kohana_ORM->__set('prix', '100')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Mesannonces->action_post()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mesannonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php:702
2013-10-22 22:58:10 --- EMERGENCY: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`freeads`.`annonces`, CONSTRAINT `annonces_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE) [ INSERT INTO `annonces` (`title`, `categorie`, `location`, `content`, `price`, `picture`) VALUES ('Poêle de marque Mirus', 'MAISON', '93 - Seine St Denis', 'Suite à rénovation de résidence secondaire\nVend ancien poêle Mirus en fonte émaillé de couleur vert pour buche de 33 cm, en parfait état.\nLargeur 27 cm Longeur 47 cm Hauteur 53 cm', '100', 'lbel8vntqcis3vwgm6pc') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 22:58:10 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `an...', false, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/rubio_n/Documents/Sites/freeads/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Mesannonces.php(85): Kohana_ORM->save()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Mesannonces->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mesannonces))
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#10 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-22 23:18:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/newannonce.php [ 10 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/newannonce.php:10
2013-10-22 23:18:05 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/newannonce.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 10, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#3 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/rubio_n/Documents/Sites/freeads/application/views/main.php(44): Kohana_View->__toString()
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(61): include('/Users/rubio_n/...')
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/rubio_n/...', Array)
#7 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller/Template.php(47): Kohana_View->render()
#8 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mesannonces))
#11 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/newannonce.php:10