<?php

class Controller
{
    public function view($view, $data = [])
    {
        if(file_exists('../app/views/'. $view . '.php'))
        {
            include '../app/views/'. $view . '.php';
        }
    }

    public function loadModel($model)
    {
        
        if(file_exists('../app/models/'. strtoLower($model) . '.php'))
        {
            include '../app/models/'. strtoLower($model) . '.php';
            return $model = new $model();
        }
    }
}