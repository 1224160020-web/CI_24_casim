<?php
error_reporting(E_ALL & ~E_DEPRECATED & ~E_WARNING);
ini_set('display_errors', 0);

define('ENVIRONMENT', 'production');

/*
 * Path ke folder system
 */
$system_path = 'system';

/*
 * Path ke folder application
 */
$application_folder = 'application';

/*
 * Load bootstrap CI
 */
require_once BASEPATH.'core/CodeIgniter.php';