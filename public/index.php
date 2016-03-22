<?php
/**
 * Created by PhpStorm.
 * User: simonewestphal
 * Date: 22.03.16
 * Time: 18:15
 */
?>
<?php

require_once("config.php");
require_once("library/templateFunction.php");
require_once('../application/classes/Bootstrap.php');
require_once('../application/classes/Controller.php');
require_once('../application/classes/Model.php');

require_once('../application/controllers/home.php');
require_once('../application/models/home.php');




$bootstrap = new Bootstrap($_GET);

$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}






// Must pass in variables (as an array) to use in template





