<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only. 
 * It is not recommended using it in production as it is.
 */

use Seif\App;

const DS = '/';

define('ROOT_PATH', realpath(dirname(__FILE__, 2)));
// echo ROOT_PATH;
// exit;

include_once ROOT_PATH . '/config/AppConfig.php';
include_once ROOT_PATH . '/config/SysConstants.php';

/**
 * Load the composer library
 */
$autoload = ROOT_PATH . DS . 'vendor' . DS . 'autoload.php';

if (is_file($autoload)) {
    require $autoload;
}

error_reporting(E_ALL);

try {
    new App();
} catch (Exception $e) {
    echo $e->getMessage();
}
