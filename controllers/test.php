<?php
if(!defined('APP_RUN')) exit('No direct access allowed');

$action = route(1);

switch ($action) {
    case 'test-method-1':
        echo 'test-method-1';
        break;
    case 'test-method-1':
        echo 'test-method-2';
        break;
    default:
        view('test');
        break;
}
