<?php

require_once 'constants.php';

define('PROJECT_NAME', 'OE4BN9');

define('HOST', '../..');
//define('HOST', 'https://cdn.rawgit.com/.../OE4BN9/POST');

define('ROOT_PATH', __DIR__);

define('BUILD_PATH', ROOT_PATH . '\\build\\');
define('BUILD_TYPE', BuildType::Normal);
define('LESS_PATH', ROOT_PATH . '\\less\\');

define('CONTROLLER_PATH', ROOT_PATH . '\\controllers\\');

define('VIEWS_PATH', ROOT_PATH . '\\views\\');
define('VIEWS_LAYOUTS_PATH', VIEWS_PATH . '\\layouts\\');
