<?php
// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);
// Server
$path = str_replace("/webdev/SteveHarvey/php/mvc-routing/", "/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
// Local
// $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require "src/router.php";
$router = new Router;

// Routes
$router->add("/", ["controller" => "home", "action" => "index"]);
$router->add("/products", ["controller" => "products", "action" => "index"]);
$router->add("/products/show", ["controller" => "products", "action" => "show"]);

$params = $router->matchRoute($path);

// if ($params === false) {

//     exit("No matching route");

// }

$controller = $params["controller"];
$action = $params["action"];

$controller = $params["controller"];
$action = $params["action"];

require "src/controllers/$controller.php";

$controller_object = new $controller;

$controller_object->$action();