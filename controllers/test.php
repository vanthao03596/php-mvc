<?php
if(!defined('APP_RUN')) exit('No direct access allowed');
require 'models/test.php';

$action = route(1);

switch ($action) {
    case 'test-method-1':
        $users = getUsers();
        echo '<pre>';
        print_r($users);
        break;
    default:
        view('test');
        break;
}
