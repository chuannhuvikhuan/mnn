<?php require_once 'utilities/tag_helper.php'; ?>

<div class="container">

   <?php
   $files = glob(CONTROLLER_PATH . '*.php');

   foreach ($files as $file):
      ?>

      <?php
      $file_name = basename($file);

      $file_name = substr($file_name, 0, -15);

      if (strpos($file_name, 'chapter_') === 0) :
         ?>

         <b><?php echo str_replace('_', ' ', $file_name); ?></b>

         <ul>
            <li>
               <a href="../<?php echo $file_name; ?>/vocabularies.min.html">
                  vocabularies
               </a>
            </li>

            <li>
               <a href="../<?php echo $file_name; ?>/grammar.min.html">
                  grammar
               </a>
            </li>
         </ul>

      <?php endif; ?>

   <?php endforeach; ?>

</div>
