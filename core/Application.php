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
    public Response $response;
    public static Application $app;
    public function __construct($rootPath) 
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this; //Singleton - warto poczytać na ten temat, co tu się dokładnie dzieje
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }
    
    public function run()
    {
        echo $this->router->resolve();
    }

    //POPRAWIONY PRAWDZIWY SINGLETON
    /*class Application 
    {
        private static ?Application $instance = null; // Przechowuje jedyną instancję
        public Router $router;
        public static Application $app; 

        private function __construct($rootPath) // Konstruktor jest prywatny!
        {
            self::$app = $this;
            $this->router = new Router();
        }

        public static function getInstance($rootPath): Application
        {
            if (self::$instance === null) {
                self::$instance = new self($rootPath);
            }
            return self::$instance;
        }
    }*/

    /*SPRAWDZENIE DZIAŁANIA PRAWDZIWEGO SINGLETONA:
    $app1 = Application::getInstance('/path');
    $app2 = Application::getInstance('/another_path');

    var_dump($app1 === $app2); // true - zawsze ta sama instancja!
    */
}
