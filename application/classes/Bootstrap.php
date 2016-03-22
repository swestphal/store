<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 22.03.16
 * Time: 18:39
 */
class Bootstrap
{
    private $controller;
    private $action;
    private $request;

    public function __construct($request)
    {

        $this->request = $request;
        if (!($this->request['controller'])) {
            $this->controller = "home";
        } else {
            $this->controller = $this->request['controller'];
        }

        if ($this->request['action'] == "") {
            $this->action = "index";
        } else {
            $this->action = $this->request['action'];
        }
        echo $this->controller;
    }


    public function createController()
    {
        //check Class
        if (class_exists($this->controller)) {

            $parents = class_parents($this->controller);
            var_dump($parents);
            //check extend

            // array'Controller'=> string'Controller'
            if (in_array("Controller", $parents)) {
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else
                    //method does not exist
                    echo "<h1>method does not exist</h1>";
                return;

            } else {
                //base controller does not exits
                echo "<h1>base controller not found</h1>";
                return;
            }
        } else
            //controller class does not exist
            echo "<h1>controller class does not exist</h1>";
        return;
    }
}