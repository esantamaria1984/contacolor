<?php

    spl_autoload_register(function($class)
    {
        include __DIR__ . '/../app/controllers/' . $class . '.php';
    });

    $controller = new HomeController();

    $controller->index();

?>