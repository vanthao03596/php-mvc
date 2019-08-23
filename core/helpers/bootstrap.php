<?php

use Jenssegers\Blade\Blade;

$blade = new Blade('views', 'storage/views');

function view($view, $vars = []) {
    global $blade;
    echo $blade->render($view, $vars);
}
