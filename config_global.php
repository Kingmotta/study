<?php

declare(strict_types=1);
/**
 *  Url for public folder
 */
define('public_path',  __DIR__."/public");

/**
 *  Base path url
 */
define('base_path', __DIR__);

/**
 *  Define first path
 */
define('first_path', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
