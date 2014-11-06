<?php
use Silex\Provider\FormServiceProvider;
use Silex\Provider\LocaleServiceProvider;

$app->register(new LocaleServiceProvider());

$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'locale_fallbacks' => array('zh_CN'),
));

$app->register(new FormServiceProvider());

$app->register(new Silex\Provider\TwigServiceProvider(), [
    'twig.path'    => $app['global_view_path'],
    'twig.options' => [
        'cache'            => $app['cache_path'] . '/twig',
        'strict_variables' => false,
        'debug'            => $app['debug']
    ]
]);
