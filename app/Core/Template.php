<?php

namespace App\Core;


class Template
{
    public static $viewsPath = '/../../public/views/';

    public function apply(string $viewName, array $data = [])
    {
        echo '
        <link rel="stylesheet" href="/css/pages/' . $viewName . '.css">
        ';

        extract($data, EXTR_SKIP);
        include __DIR__ . self::$viewsPath . $viewName . '.php';
    }

    public function __construct()
    {
        $partials = __DIR__ . self::$viewsPath . '_partials/';
        include $partials . '_header.php';
        include $partials . '_nav.php';
    }

    public function __destruct()
    {
        include __DIR__ . self::$viewsPath . '_partials/_footer.php';
    }
}
