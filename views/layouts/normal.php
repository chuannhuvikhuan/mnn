<!DOCTYPE html>
<html>

   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="utf-8">

      <title id="title"><?php echo $title; ?></title>

      <!-- jquery -->
      <script src="<?php echo HOST ?>/js/jquery-3.2.1.min.js" type="text/javascript"></script>

      <!-- bootstrap -->
      <link href="<?php echo HOST; ?>/css/bootstrap.min.css"
            rel="stylesheet" type="text/css" />
      <script src="<?php echo HOST; ?>/js/bootstrap.min.js"
      type="text/javascript"></script>

      <!-- <?php echo PROJECT_NAME ?> -->
      <link href="<?php echo HOST; ?>/css/<?php echo PROJECT_NAME; ?>.min.css"
            rel="stylesheet" type="text/css" />

      <script src="<?php echo HOST; ?>/js/<?php echo PROJECT_NAME; ?>.js"
      type="text/javascript"></script>
      <script src="<?php echo HOST; ?>/js/initialize-function.js"
      type="text/javascript"></script>
      <script src="<?php echo HOST; ?>/js/vocabularies.js"
      type="text/javascript"></script>
   </head>

   <body>
      <div class="<?php echo PROJECT_NAME; ?>-chapter">
         <div id="unknown-vocabularies" class="container alert alert-danger"></div>

         <?php echo $content; ?>

         <textarea id="copy-textbox" rows="10" style="display: none"></textarea>
      </div>
   </body>
</html>
