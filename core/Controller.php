<?php

namespace app\core;

class Controller
{
    public function render($view, $params = [])
    {
        //Application::$app działa jak globalna zmienna, więc nie ma znaczenia, 
        //że obiekt klasy Controller został utworzony przez Application.
        //Application::$app przechowuje wszystkie zależności, które zostały wstrzyknięte do Application w jej konstruktorze.
        //Application::$app pełni rolę kontenera usług, pozwalając na dostęp do zależności w dowolnym miejscu.
        return Application::$app->router->renderView($view, $params); //
    }

}
