<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace app\core;

/**
 * Description of Application
 *
 * @author Samsung
 */
class Application 
{
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public function __construct($rootPath) 
    {
        self::$ROOT_DIR = $rootPath;
        $this->request = new Request();
        $this->router = new Router($this->request);
    }
    
    public function run()
    {
        echo $this->router->resolve();
    }
}
