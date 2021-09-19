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
    //public Router $router; //?
    public function __construct() 
    {
        $this->router = new Router();
    }
    
    public function run()
    {
        $this->router->resolve();
    }
}
