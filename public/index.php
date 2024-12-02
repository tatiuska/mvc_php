<?php 
    require "../bootstrap.php";

    use core\Controller;
    use core\Method;

    // diedump(app\classes\Uri::uri());

    try {
        $controller = new Controller;
        $controller = $controller->load();

        $method = new Method;
        $method = $method->load($controller);

        $controller->$method();

        diedump($controller);

    } catch(\Exception $e) {
        diedump($e->getMessage());
    }


    // $parameters = new Parameters;
    // $parameters = $parameters->getParameters();

    // $controller->$method($parameters);

?>