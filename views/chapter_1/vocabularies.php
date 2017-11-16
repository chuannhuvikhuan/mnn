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
           '私', '私たち', '貴方', 'あの人', 'あの方', '皆さん'
       ),
       array(//2
           '～さん', '～ちゃん', '～君', '～人'
       ),
       array(//3
           '先生', '教師', '学生', '会社員', '社員', '銀行員', '医者', '研究者', 'エンジニア'
       ),
       array(//4
           '大学', '病院'
       ),
       array(//5
           '電気'
       ),
       array(//6
           '誰', '何方', '—歳', '何歳', 'お幾つ'
       ),
       array(//7
           'はい', 'いいえ'
       ),
       array(//8
           '失礼ですが', 'お名前は？', '初めまして。', 'どうぞよろしく[お願いします]。', 'こちらは～です。',
           '～から来ました。'
       ),
       array(//9
           'アメリカ', 'イギリス', 'インド', 'インドネシア', '韓国', 'タイ', '中国', 'ドイツ', '日本',
           'フランス', 'ブラジル'
       ),
       array(//10
           '桜大学', '富士大学', 'パワーでんき', 'ブラジルエアー', '神戸病院'
       ),
       array(//11
           'エジプト', 'オーストラリア', 'カナダ', 'サウジアラビア', 'シンガポール', 'スペイン', 'フィリピン',
           'ベトナム', 'マレーシア', 'メキシコ', 'ロシア'
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
