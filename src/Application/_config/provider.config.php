<?php

$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path'    => $app['global_view_path'],
    'twig.options' => [
        'cache'            => $app['cache_path'] . '/twig',
        'strict_variables' => false,
        'debug'            => $app['debug']
    ]
]);
