<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-25 09:45:30 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:45:30 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(57): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:45:59 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:45:59 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:02 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:02 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:12 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:12 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:12 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:12 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:13 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:13 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:13 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:13 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:15 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:46:15 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:47:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:47:53 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:47:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:47:53 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:47:54 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:47:54 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:47:54 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:47:54 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(59): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:49:18 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:49:18 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(61): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:49:19 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:49:19 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(61): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:49:19 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:49:19 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(61): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:49:21 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-10' at line 1 [ SELECT `annonces`.*, `users`.`username`, `users`.`email` FROM `annonces` RIGHT JOIN `users` ON (`annonces`.`id_user` = `users`.`id`) WHERE `annonces`.`etat` = 0 ORDER BY `date` DESC LIMIT 10 OFFSET -10 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:49:21 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `annonce...', true, Array)
#1 /Users/rubio_n/Documents/Sites/freeads/application/classes/Controller/Annonces.php(61): Kohana_Database_Query->execute()
#2 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Controller.php(84): Controller_Annonces->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Annonces))
#5 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/rubio_n/Documents/Sites/freeads/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/rubio_n/Documents/Sites/freeads/index.php(117): Kohana_Request->execute()
#8 {main} in /Users/rubio_n/Documents/Sites/freeads/modules/database/classes/Kohana/Database/Query.php:251
2013-10-25 09:57:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/annonces.php [ 93 ] in file:line
2013-10-25 09:57:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 09:57:46 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/annonces.php [ 93 ] in file:line
2013-10-25 09:57:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 09:57:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/annonces.php [ 93 ] in file:line
2013-10-25 09:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 09:57:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/annonces.php [ 93 ] in file:line
2013-10-25 09:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 09:57:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/annonces.php [ 93 ] in file:line
2013-10-25 09:57:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-25 09:57:56 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/annonces.php [ 87 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/annonces.php:87
2013-10-25 09:57:56 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/annonces.php(87): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Users/rubio_n/...', 87, Array)
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
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/annonces.php:87
2013-10-25 10:22:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pages ~ APPPATH/views/annonces.php [ 8 ] in /Users/rubio_n/Documents/Sites/freeads/application/views/annonces.php:8
2013-10-25 10:22:30 --- DEBUG: #0 /Users/rubio_n/Documents/Sites/freeads/application/views/annonces.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/rubio_n/...', 8, Array)
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
#14 {main} in /Users/rubio_n/Documents/Sites/freeads/application/views/annonces.php:8