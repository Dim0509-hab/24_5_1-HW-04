<?php
session_start();

define('ROOT', dirname(__FILE__));

require_once(ROOT . '/core/Controller.php');
require_once(ROOT . '/core/Model.php');
require_once(ROOT . '/core/View.php');

spl_autoload_register(function ($class) {
    if (file_exists(ROOT . '/controllers/' . $class . '.php')) {
        require_once(ROOT . '/controllers/' . $class . '.php');
    } elseif (file_exists(ROOT . '/models/' . $class . '.php')) {
        require_once(ROOT . '/models/' . $class . '.php');
    }
});

$url = isset($_GET['url']) ? $_GET['url'] : '';
$url = rtrim($url, '/');
$url = explode('/', $url);

$controller = $url[0] ? $url[0] . 'Controller' : 'HomeController';
$action = isset($url[1]) ? $url[1] : 'index';

try {
    $controller = new $controller();
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        throw new Exception('Метод не найден');
    }
} catch (Exception $e) {
    echo 'Ошибка: ' . $e->getMessage();
}
