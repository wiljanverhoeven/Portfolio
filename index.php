<?php
require_once './app/controllers/HomeController.php';
require_once './app/controllers/PortfolioPageController.php';
require_once './app/controllers/OverMijController.php';
require_once './app/controllers/ContactController.php';
require_once './app/controllers/ProjectController.php';
require_once './database.php';

$request = $_SERVER['REQUEST_URI'];

// Remove query strings if present
if (strpos($request, '?') !== false) {
    $request = strtok($request, '?');
}

// Trim any trailing slashes
$request = rtrim($request, '/');

// Default to home if the request is empty
if (empty($request) || $request == '/' || $request == '/portfolio') {
    $request = '/portfolio/home'; // Set /home as the default route
}

// Route handling
switch ($request) {
    case '/portfolio/home':
        $controller = new HomeController();
        $controller->index();
        break;
    case '/portfolio/portfoliopage':
        $controller = new PortfolioPageController($pdo);
        $controller->index();
        break;
    case '/portfolio/overmij':
        $controller = new OverMijController();
        $controller->index();
        break;
    case '/portfolio/contact':
        $controller = new ContactController();
        $controller->index();
        break;
    case '/portfolio/project':
        $controller = new ProjectController($pdo);
        $controller->index();
        break;
    default:
        echo '404 Not Found';
        break;
}
