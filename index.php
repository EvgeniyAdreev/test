<?php

echo "Ветка master" . "<br>";
echo "Ветка iss53" . "<br>";
echo "Ветка test" . "<br>";
echo "Ветка test2" . "<br>";
//echo phpinfo();

exit;

// Общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Подключение файлов
define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Router.php');

// Установка соединения с БД

// Вызов Router
$router = new Router();
$router->run();

      
