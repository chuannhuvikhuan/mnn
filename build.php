<?php

require_once './settings.php';

$files = glob(CONTROLLER_PATH . '*.php');
foreach ($files as $file) {
   require_once $file;
   echo $file;
}

print("BUILD FINISH !!!\n");
