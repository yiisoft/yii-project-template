<?php

use hiqdev\composer\config\Builder;
use yii\di\Container;
use yii\helpers\Yii;

(function () {
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once Builder::path('defines');

    $config = require Builder::path('web');
    $container = new Container($config);
    Yii::setContainer($container);

    $container->get('app')->run();
})();
