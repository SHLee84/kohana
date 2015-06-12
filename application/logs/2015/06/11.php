<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-11 09:11:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function param() ~ APPPATH\classes\Controller\Test.php [ 7 ] in file:line
2015-06-11 09:11:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 09:11:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function params() ~ APPPATH\classes\Controller\Test.php [ 7 ] in file:line
2015-06-11 09:11:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 09:16:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Test.php [ 7 ] in file:line
2015-06-11 09:16:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 09:16:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::method() ~ APPPATH\classes\Controller\Test.php [ 7 ] in file:line
2015-06-11 09:16:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 09:16:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method View::post() ~ APPPATH\classes\Controller\Test.php [ 7 ] in file:line
2015-06-11 09:16:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 09:17:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::post() ~ APPPATH\classes\Controller\Test.php [ 7 ] in file:line
2015-06-11 09:17:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 09:58:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: view ~ APPPATH\classes\Controller\Test.php [ 7 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Test.php:7
2015-06-11 09:58:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Test.php(7): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 7, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Test.php:7
2015-06-11 09:58:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: test ~ APPPATH\views\part1.php [ 11 ] in C:\xampp\htdocs\kohana\application\views\part1.php:11
2015-06-11 09:58:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\part1.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 11, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\\xampp\\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\\xampp\\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Response.php(160): Kohana_View->__toString()
#5 C:\xampp\htdocs\kohana\application\classes\Controller\Test.php(8): Kohana_Response->body(Object(View))
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#9 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\kohana\application\views\part1.php:11
2015-06-11 10:30:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: start ~ APPPATH\classes\Controller\Test.php [ 28 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Test.php:28
2015-06-11 10:30:33 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Test.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\\xampp\\htdocs...', 28, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Test.php:28
2015-06-11 13:52:47 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Contest::action_details(), called in C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Contest.php [ 12 ] in C:\xampp\htdocs\kohana\application\classes\Controller\Contest.php:12
2015-06-11 13:52:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\Contest.php(12): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\xampp\\htdocs...', 12, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Contest->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\Contest.php:12
2015-06-11 23:34:53 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Contest::action_details(), called in C:\wamp\www\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Contest.php [ 11 ] in C:\wamp\www\kohana\application\classes\Controller\Contest.php:11
2015-06-11 23:34:53 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Contest.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\koh...', 11, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Contest->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Contest.php:11
2015-06-11 23:43:37 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Contest::action_details(), called in C:\wamp\www\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Contest.php [ 11 ] in C:\wamp\www\kohana\application\classes\Controller\Contest.php:11
2015-06-11 23:43:37 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Contest.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\koh...', 11, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Contest->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Contest.php:11
2015-06-11 23:43:39 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Contest::action_details(), called in C:\wamp\www\kohana\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Contest.php [ 11 ] in C:\wamp\www\kohana\application\classes\Controller\Contest.php:11
2015-06-11 23:43:39 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Contest.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\\wamp\\www\\koh...', 11, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Contest->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Contest.php:11
2015-06-11 23:43:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$id ~ APPPATH\classes\Controller\Contest.php [ 50 ] in C:\wamp\www\kohana\application\classes\Controller\Contest.php:50
2015-06-11 23:43:50 --- DEBUG: #0 C:\wamp\www\kohana\application\classes\Controller\Contest.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\\wamp\\www\\koh...', 50, Array)
#1 C:\wamp\www\kohana\system\classes\Kohana\Controller.php(84): Controller_Contest->action_details()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contest))
#4 C:\wamp\www\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\kohana\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\kohana\application\classes\Controller\Contest.php:50