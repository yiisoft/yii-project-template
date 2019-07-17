<?php

use hiqdev\composer\config\Builder;
use Yiisoft\Di\Container;

(function () {
    require_once __DIR__ . '/../vendor/autoload.php';

    $container = new Container(require Builder::path('web'));

    $container->get('app')->run();
})();
