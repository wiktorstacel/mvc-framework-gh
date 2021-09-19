<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\core;

/**
 * Description of Router
 *
 * @author Samsung
 */
class Router 
{
    protected $routes = [];
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
    
    public function resolve()
    {
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';
        exit;
    }
}
