<?php

/*
|--------------------------------------------------------------------------
| Disable direct access
|--------------------------------------------------------------------------
|
*/

if(!defined('APP_RUN')) exit('No direct access allowed');

/*
|--------------------------------------------------------------------------
| Application Build Number to handle cache & updates
|--------------------------------------------------------------------------
|
*/

define('APP_MODE','default');

/*
|--------------------------------------------------------------------------
| To load composer autoload
|--------------------------------------------------------------------------
|
*/

require 'vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Start the Application
|--------------------------------------------------------------------------
|
*/

require 'core/helpers/bootstrap.php';
