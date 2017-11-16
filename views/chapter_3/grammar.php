<?php require_once 'utilities/tag_helper.php'; ?>

<div class="container">
   <div class="main-title">
      <?php echo $title ?>
   </div>


</div>

<?php if (BUILD_TYPE == BuildType::Normal): ?>
   <script>
      $(document).ready(function () {
         OE4BN9.initialize();
      });
   </script>
<?php endif; ?>
