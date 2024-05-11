<?php
require_once 'autoload.php';
use Core\Router\Router;
use Core\Dispatcher\Dispatcher;

$uri = $_SERVER['REQUEST_URI'];
try {
    $route = (new Router())->getRoute($uri);
    $page = (new Dispatcher($route))->getPage();
    echo $page->render();
} catch (Exception $e) {
    echo $e->getMessage();
}