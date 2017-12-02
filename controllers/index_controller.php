<?php

require_once 'base/base_controller.php';

class index_controller extends base_controller {

   function __construct() {
      parent::__construct();
   }

   function __destruct() {

   }

   public function index() {
      $this->title = 'Index';

      $this->build(__FUNCTION__);
   }

}

$controller = new index_controller();

$controller->index();
