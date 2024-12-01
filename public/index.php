<?php 
    require "../bootstrap.php";

    use core\Controller;

    try {
        $controller = new Controller;
        $controller = $controller->load();
        diedump($controller);

    } catch(\Exception $e) {
        diedump($e->getMessage());
    }

    // $method = new Method;
    // $method = $method->getMethod();

    // $parameters = new Parameters;
    // $parameters = $parameters->getParameters();

    // $controller->$method($parameters);

?>