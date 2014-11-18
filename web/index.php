<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Application\Application;

try {
    $app = new Application('app', [
        'root_path' => __DIR__ . '/..',
        'debug'     => false,
    ]);
    $app->run();
} catch (Exception $e) {
    echo '异常：', $e->getMessage();
}
