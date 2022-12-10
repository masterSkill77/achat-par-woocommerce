<?php

/**
 * Plugin Name: API Rest
 * Author: Clairmont RAJAONARISON
 */

require_once 'vendor/autoload.php';

require dirname(__FILE__) . '/constant.php';

use PluginsTest\Initialisation;

register_activation_hook(__FILE__, 'create_table');

function create_table()
{
    Initialisation::setup();
}
