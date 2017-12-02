<?php

require_once 'base/base_controller.php';

class chapter_4_controller extends base_controller {

   function __construct() {
      parent::__construct();
   }

   function __destruct() {

   }

   public function vocabularies() {
      $this->title = 'Bài 4 - Từ vựng';

      $this->build(__FUNCTION__);
   }

   public function grammar() {
      $this->title = 'Bài 4 - Giải thích ngữ pháp';

      $this->build(__FUNCTION__);
   }

}

$controller = new chapter_4_controller();

$controller->vocabularies();
$controller->grammar();
