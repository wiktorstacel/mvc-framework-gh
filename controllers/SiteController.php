<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Application;
use app\core\Request;

class SiteController extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'TheCodeholic'
        ];
        return $this->render('home', $params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public static function handleContact(Request $request)
    {
        $body = $request->getBody();
        echo '<pre>';
        var_dump($body);
        echo '</pre>';
        exit;
        return 'Handling submitted data';
    }
}
