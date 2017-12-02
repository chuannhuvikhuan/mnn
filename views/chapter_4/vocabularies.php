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
           '起きます', '寝ます', '働きます', '休みます', '勉強します', '終わります'
       ),
       array(//2
           'デパート', '銀行', '郵便局', '図書館', '美術館'
       ),
       array(//3
           '今', '—時', '—分', '半', '何時', '何分'
       ),
       array(//4
           '午前', '午後'
       ),
       array(//5
           '朝', '昼', '晩'
       ),
       array(//6
           '一昨日', '昨日', '今日', '明日', '明後日'
       ),
       array(//7
           '今朝', '今晩'
       ),
       array(//8
           '休み', '昼休み'
       ),
       array(//9
           '毎朝', '毎晩', '毎日'
       ),
       array(//10
           '月曜日', '火曜日', '水曜日', '木曜日', '金曜日', '土曜日', '日曜日', '何曜日'
       ),
       array(//11
           '番号', '何番'
       ),
       array(//12
           '～から', '～まで'
       ),
       array(//13
           '～と～'
       ),
       array(//14
           'そちら2', '大変ですね。', 'えーと'
       ),
       array(//15
           'お願いします。', 'かしこまりました。', 'お問い尾鷲の番号', '「どうも」ありがとうございました'
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
