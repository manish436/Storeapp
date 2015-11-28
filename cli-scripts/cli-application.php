<?php

/*
 * This file is used to set enviroment and quick start Zend library, 
 * so that we will be able to call Model and other library functions.
 */

// Define path to application directory
defined('APPLICATION_PATH') || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/../application'));

defined('APPLICATION_DATA_PATH') || define('APPLICATION_DATA_PATH', realpath(dirname(__FILE__) . '/../datafiles'));


// Define application environment
defined('APPLICATION_ENV') || define('APPLICATION_ENV', 'development');

// Ensure library/ is on include_path
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(APPLICATION_PATH . '/../library'),
    get_include_path(),
)));

/** Zend_Application */
require_once 'Zend/Application.php';

// Create application, bootstrap, and run
$application = new Zend_Application(
        APPLICATION_ENV, APPLICATION_PATH . '/configs/application.ini'
);
$application->bootstrap();
