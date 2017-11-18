<?php
require_once 'utilities/tag_helper.php';

$index = 0;
?>

<div class="container">
   <div class="main-title">
      <?php echo $title; ?>
   </div>

   <?php
   $vocabular_groups = array(
       array(//1
           'ここ', 'そこ', 'あそこ', 'どこ'
       ),
       array(//2
           'こちら', 'そちら', 'あちら', 'どちら'
       ),
       array(//3
           '教室', '食堂', '事務所', '会議室', '受付', 'トイレ（お手洗い）', '部屋',
           'エレベーター', 'エスカレーター'
       ),
       array(//4
           '「お」国', '会社', 'うち'
       ),
       array(//5
           '電話', '靴', 'ネクタイ', 'ワイン', 'たばこ'
       ),
       array(//6
           '売り場', '地下', '—階', '何階'
       ),
       array(//7
           '—円', 'いくら'
       ),
       array(//8
           '百', '千', '万'
       ),
       array(//9
           '～でございます。', '「～を」見せてください', 'じゃ2', '「～を」ください'
       ),
       array(//10
           '新大阪', 'イタリア', 'スイス', 'ロビー'
       ),
   );

   $vocabulary_index = 0;

   foreach ($vocabular_groups as $group):
      ?>

      <div class="segment">
         <div class="content">

            <?php
            foreach ($group as $vocabulary):

               $vocabulary_index++;
               ?>

               <div class="vocabulary-wrapper">
                  <div class="index"><?php echo $vocabulary_index; ?></div>

                  <div class="key">
                     <?php v($vocabulary); ?>
                  </div>

                  <div class="kana"></div>
                  <div class="roumaji"></div>
                  <div class="vietnamese"></div>
                  <div class="mean"></div>
               </div>

            <?php endforeach; ?>

         </div>
      </div>

   <?php endforeach; ?>

</div>

<?php if (BUILD_TYPE == BuildType::Normal): ?>
   <script>
      $(document).ready(function () {
         OE4BN9.initialize();

         OE4BN9.initializeVocabluaryWrappers();
      });
   </script>
<?php endif; ?>
