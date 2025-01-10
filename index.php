<?php
// Autoload classes
spl_autoload_register(function ($class) {
    require_once __DIR__ . '/app/' . str_replace('\\', '/', $class) . '.php';
});

// Parse the URL
$url = isset($_GET['url']) ? explode('/', trim($_GET['url'], '/')) : ['Home'];
$controllerName = ucfirst($url[0]) . 'Controller';
$action = $url[1] ?? 'Home';

// Load and call the controller
$controllerPath = __DIR__ . '/app/controllers/' . $controllerName . '.php';


if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controller = new $controllerName();
    $controller->$action();
} else {
    die("Controller file not found: $controllerPath");
}
?>