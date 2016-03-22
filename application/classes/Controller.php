<?php

/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 22.03.16
 * Time: 18:55
 */
abstract class Controller
{
    protected $action;
    protected $request;

    public function __construct($action, $request)
    {
        $this->action = $action;
        $this->request = $request;
    }

    public function executeAction()
    {
        // return method from the controller given in action  (e.g. Index )
        return $this->{$this->action}();
    }

    protected function ReturnView($viewmodel, $fullview)
    {
        //e.g. views/Home/index.php

        $view = '../application/views/' . get_class($this) . '/' . $this->action . '.php';
        if ($fullview) {

            require_once('../application/views/main.php');
        } else {
            require_once($view);
        }
    }
}