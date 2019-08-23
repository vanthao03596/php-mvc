<?php

/**
 * Clean whitespace from string
 *
 * @param  string $value
 * @return string
 */
function safedata($value)
{
    $value = trim($value);
    return $value;
}

/**
 * shortcut function
 *
 * @param  string $param
 * @return string
 */
function _post($param, $defvalue = '')
{
    if (!isset($_POST[$param])) {
        return $defvalue;
    }
    return safedata($_POST[$param]);
}

/**
 * @param $param
 * @param string $defvalue
 * @return string
 */
function _get($param, $defvalue = '')
{
    if (!isset($_GET[$param])) {
        return $defvalue;
    }
    return safedata($_GET[$param]);
}

/**
 * @param $view
 * @param array $vars
 * @return string
 */
function view($view, $vars = []) {
    global $blade;
    echo $blade->render($view, $vars);
}

/**
 * @param $id
 * @param string $default
 * @return string
 */
function route($id, $default = '')
{
    global $routes;
    if (isset($routes[$id]) && $routes[$id] != '') {
        return $routes[$id];
    } else {
        return $default;
    }
}
