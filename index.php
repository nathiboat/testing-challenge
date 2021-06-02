<?php

/**
 * This is a small bootstrap file.
 * If you visit this file in a browser you will see a HTML (unstyled) view.
 * Once all the tests pass the view will be populated with data.
 */

define('ROOT_PATH', __DIR__ . '/');

require ROOT_PATH . 'vendor/autoload.php';
require ROOT_PATH . 'app/queries.php';
require ROOT_PATH . 'views/index.php';
