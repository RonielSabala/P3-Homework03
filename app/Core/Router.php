<?php

namespace App\Core;


class Router
{
    public function dispatch()
    {
        global $pdo;

        // Obtener URI
        $uri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

        // Rutas y controladores asociados
        $default_uri = ['page' => 'home',  'controller' => \App\Controllers\HomeController::class];
        $routes = [
            ''            => $default_uri,
            'home.php'    => $default_uri,
            'index.php'   => $default_uri,
            'details.php' => ['page' => 'home',   'controller' => \App\Controllers\DetailsController::class],
            'edit.php'    => ['page' => 'home',   'controller' => \App\Controllers\EditController::class],
            'delete.php'  => ['page' => 'home',   'controller' => \App\Controllers\DeleteController::class],
            'report.php'  => ['page' => 'report', 'controller' => \App\Controllers\ReportController::class],
        ];

        // Obtener ruta
        if (isset($routes[$uri])) {
            $page = $routes[$uri]['page'];
            $controller = new $routes[$uri]['controller']();
        } else {
            header("HTTP/1.0 404 Not Found");
            exit("Página no encontrada...");
        }

        // Manejar solicitud
        define('CURRENT_PAGE', $page);
        $template = new Template();
        $controller->handle($template, $pdo);
    }
}
