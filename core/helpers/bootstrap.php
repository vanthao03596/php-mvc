<?php
use Jenssegers\Blade\Blade;

require('core/helpers/functions.php');

$blade = new Blade('views', 'storage/views');

// render controller
$request = _get('action');
$routes = explode('/', $request);
$handler = $routes['0'];
if ($handler == '') {
    $handler = 'default';
}
$systemRender = 'controllers/' . $handler . '.php';
if (file_exists($systemRender)) {
    include($systemRender);
}

