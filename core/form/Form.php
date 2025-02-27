<?php

namespace app\core\form;
use app\core\Model;

class Form
{
    public static function begin($action, $methos)
    {
        echo sprintf('<form action="%s" method="%s">', $action, $methos);
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }   

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }

}
