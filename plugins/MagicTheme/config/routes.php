<?php
use Cake\Routing\Router;

Router::plugin('MagicTheme', function ($routes) {
    $routes->fallbacks('InflectedRoute');
});
