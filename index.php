<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once __DIR__.'/vendor/autoload.php';
use app\core\Application;

$app = new Application();

$app->router->get('/', function(){
    return "Hello World";
});

$app->router->get('/contact', function(){
    return "Contact";
});

$app->run();