<?php

defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

require_once APP_DIR . 'middlewares' . DIRECTORY_SEPARATOR . 'StudentMiddleware.php';

$config['middlewares'] = [
    'StudentMiddleware' => new StudentMiddleware()
];