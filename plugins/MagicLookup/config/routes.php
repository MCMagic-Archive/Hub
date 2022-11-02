<?php
use Cake\Routing\Router;

Router::plugin('MagicLookup', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
