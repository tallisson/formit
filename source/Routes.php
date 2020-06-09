<?php
use CoffeeCode\Router\Router;

// Route Manager
$router = new Router(URL_BASE);

// Definition of folder to the Controller
$router->namespace("Source\App");

// Settings for Default Controller
$router->group(null);
$router->get("/", "Web:home");
$router->get("/contact", "Web:contact");

// Error Controller
$router->group("ooops");
$router->get("/{errcode}", "Web:error");

// Dispatching the Request
$router->dispatch();

// Error treats
if($router->error()) {
  $router->redirect("/ooops/{$router->error()}");
}