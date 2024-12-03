<?php 
    require "../bootstrap.php";

    use core\Controller;
    use core\Method;
    use core\Parameters;

    // diedump(app\classes\Uri::uri());

    try {
        $controller = new Controller;
        $controller = $controller->load();

        $method = new Method;
        $method = $method->load($controller);

        $parameters = new Parameters;
        $parameters = $parameters->load();

        $controller->$method($parameters);

        diedump($controller);

    } catch(\Exception $e) {
        diedump($e->getMessage());
    }


    // $parameters = new Parameters;
    // $parameters = $parameters->getParameters();

    // $controller->$method($parameters);

?>