<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 22.03.16
 * Time: 19:08
 */

 Class Home extends Controller
{
    protected function Index()
    {
        // get data
        $viewmodel = new HomeModel();



//get view
        $this->ReturnView($viewmodel->Index(),true);
    }
}