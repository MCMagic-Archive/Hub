<?php
use Cake\Routing\Router;

Router::plugin('MagicLogin', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
