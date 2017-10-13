<?php
ini_set('display_errors', 1);
ini_set('display_startup_erros', 1);
error_reporting(E_ALL);

require_once "../config_global.php";

/**
 * Autoload php
 */
require_once base_path . "/vendor/autoload.php";


$kernel = new \App\Kernel();
$kernel->run();
