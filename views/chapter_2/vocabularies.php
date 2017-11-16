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
           'これ', 'それ', 'あれ'
       ),
       array(//2
           'この～', 'その～', 'あの～'
       ),
       array(//3
           '本', '辞書', '雑誌', '新聞', 'ノート', '手帳', '名詞', 'カード', 'テレホンカード'
       ),
       array(//4
           '鉛筆', 'ボールペン', 'シャープペンシル'
       ),
       array(//5
           '鍵', '時計', '傘', 'かばん'
       ),
       array(//6
           '[カセット]テープ', 'テープルコーダー', 'テレビ', 'ラジオ', 'カメラ', 'コンピューター', '自動車'
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
