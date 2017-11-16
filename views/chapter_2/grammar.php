<?php require_once 'utilities/tag_helper.php'; ?>

<div class="container">
   <div class="main-title">
      <?php echo $title ?>
   </div>

   <div class="heading-1">
      <span class="numbering">1.</span>
      <?php vh('これ'); ?>／
      <?php vh('それ'); ?>／
      <?php vh('あれ'); ?>
   </div>

   <div class="segment">
      <div class="content">
         <?php vbh('これ', true); ?>
         <?php vbh('それ', true); ?>
         và
         <?php vbh('あれ', true); ?>
         là những đại từ chỉ thị. Về mặt ngữ pháp chúng được dùng như những danh từ.<br />
         <?php vbh('これ', true); ?>dùng để chỉ một vật ở gần người nói.<br />
         <?php vbh('それ', true); ?>dùng để chỉ một vật ở gần người nghe.<br />
         <?php vbh('あれ', true); ?>dùng để chỉ một vật ở xa người nói và người nghe.<br />

         <span class="numbering square">1</span>&#x3000;
         <?php vbh('それ'); ?>&#x3000;
         <?php vs('は2 辞書 です か'); ?>。<br />

         &#x3000;&#x3000; Đó có phải là quyển từ điển không?<br />

         <span class="numbering square">2</span>&#x3000;
         <?php vbh('これ'); ?>&#x3000;
         <?php vs('を ください'); ?>。<br />

         &#x3000;&#x3000; Cho tôi cái này. (Bài 3)<br />
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">2.</span>
      <span class="text bold highlight d-inline-block">
         <?php vh('この'); ?>&#x0020;
         Danh từ
      </span>／
      <span class="text bold highlight d-inline-block">
         <?php vh('その'); ?>&#x0020;
         Danh từ
      </span>／
      <span class="text bold highlight d-inline-block">
         <?php vh('あの'); ?>&#x0020;
         Danh từ</span>
      </span>

   </div>

   <div class="segment">
      <div class="content">
         <?php vbh('この', true); ?>
         <?php vbh('その', true); ?>
         <?php vbh('あの', true); ?>
         bổ nghĩa cho danh từ.<br />

         <span class="text bold highlight d-inline-block">
            「<?php v('この'); ?>&#x0020;Danh từ」
         </span>
         dùng để nói tới một vật hay một người nào đó ở gần người nói.<br />
         <span class="text bold highlight d-inline-block">
            「<?php v('その'); ?>&#x0020;Danh từ」
         </span>
         dùng để nói tới một vật hay một người nào đó ở gần người nghe.<br />
         <span class="text bold highlight d-inline-block">
            「<?php v('あの'); ?>&#x0020;Danh từ」
         </span>
         dùng để nói tới một vật hay một người nào đó xa cả người nói và người nghe.<br />

         <span class="numbering square">3</span>&#x3000;
         <?php vbh('あの'); ?>&#x3000;
         <?php vs('本 は2 私 です'); ?>。<br />

         &#x3000;&#x3000;Quyển sách này là của tôi.<br />

         <span class="numbering square">4</span>&#x3000;
         <?php vbh('あの'); ?>
         <?php vs('方 は2 何方 です か'); ?>。<br />

         &#x3000;&#x3000;Vị kia là ai?<br />

         <div class="text-center">
            <img src="<?php echo HOST; ?>/imgs/chapter_2/img_0.png">
         </div>
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">3.</span>
      <?php vh('そうです'); ?>／
      <?php vh('そうじゃありません'); ?>
   </div>

   <div class="segment">
      <div class="content">
         <span class="text bold highlight d-inline-block">
            「<?php v('そうです'); ?>／
            <?php v('そうじゃありません'); ?>」
         </span>
         được dùng trong câu nghi vấn danh từ để xác định xem một nội dung nào đó là đúng hay sai.
         Khi đúng thì trả lời là
         <span class="text bold highlight d-inline-block">
            「<?php v('はい'); ?>、
            <?php v('そうです'); ?>」
         </span>
         khi sai thì là
         <span class="text bold highlight d-inline-block">
            「<?php v('いいえ'); ?>、
            <?php v('そうじゃありません'); ?>」
         </span>.<br />

         <span class="numbering square">5</span>&#x3000;
         <?php vs('それ は2 テレホンカード です か'); ?>。<br />

         &#x3000;&#x3000;Đó có phải là thẻ điện thoại không?<br />

         &#x3000;&#x3000;…
         <?php vbh('はい'); ?>、
         <?php vbh('そうです'); ?>。<br />

         &#x3000;&#x3000;…Vâng, phải.<br />

         <span class="numbering square">6</span>&#x3000;
         <?php vs('それ は2 テレホンカード です か'); ?>。<br />

         &#x3000;&#x3000;Đó có phải là thẻ điện thoại không?<br />

         &#x3000;&#x3000;…
         <?php vbh('いいえ'); ?>、
         <?php vbh('そうじゃありません'); ?>。<br />

         &#x3000;&#x3000;…Không, không phải.<br />

         Đôi lúc động từ
         <?php vbh('違います', true); ?>
         (sai, nhầm, không phải) được dùng với nghĩa tương đương với
         <?php vbh('そうじゃありません', true); ?>.<br />

         <span class="numbering square">7</span>&#x3000;
         <?php vs('それ は2 テレホンカード です か'); ?>。<br />

         &#x3000;&#x3000;Đó có phải là thẻ điện thoại không?<br />

         &#x3000;&#x3000;…
         <?php v('いいえ'); ?>、
         <?php v('違います'); ?>。<br />

         &#x3000;&#x3000;…Không, không phải.
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">4.</span>
      Câu<sub>1</sub>&#x0020;
      <?php vh('か'); ?>,
      Câu<sub>2</sub>&#x0020;
      <?php vh('か'); ?>
   </div>

   <div class="segment">
      <div class="content">
         Mẫu câu nghi vấn này dùng để hỏi về sự lựa chọn của người nghe.
         Người nghe sẽ lựa chọn Câu<sub>1</sub>&#x0020;hoặc Câu<sub>2</sub>.
         Đối với câu nghi vấn loại này, khi trả lời không dùng
         <?php vbh('はい', true); ?> hay
         <?php vbh('いいえ', true); ?> mà để nguyên câu lựa chọn.<br />

         <span class="numbering square">8</span>&#x3000;
         <?php vs('これ は2'); ?>&#x3000;
         「９」
         <?php v('です'); ?>&#x3000;
         <?php vbh('か'); ?>。
         「７」
         <?php v('です'); ?>&#x3000;
         <?php vbh('か'); ?>。<br />

         &#x3000;&#x3000;Đây là “9” hay “7”?<br />

         &#x3000;&#x3000;…「９」
         <?php v('です'); ?>。<br />

         &#x3000;&#x3000;…Đó là “9”.
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">5.</span>
      Danh từ<sub>1</sub>&#x0020;
      <?php vh('の'); ?>&#x0020;
      Danh từ<sub>2</sub>
   </div>

   <div class="segment">
      Ở Bài 1, chúng ta đã học từ
      <?php vbh('の', true); ?>
      dùng để nối hai danh từ khi Danh từ<sub>1</sub>&#x0020;bổ nghĩa cho Danh từ<sub>2</sub>.
      Ở bài này chúng ta sẽ học hai cách dùng khác của
      <?php vbh('の', true); ?> .

      <div class="heading-2">
         <span class="numbering">1)</span>
         Danh từ<sub>1</sub>&#x0020;giải thích Danh từ<sub>2</sub>&#x0020;nói về cái gì.
      </div>

      <div class="content">
         <span class="numbering square">9</span>&#x3000;
         <?php vs('これ は2 コンピューター'); ?>&#x3000;
         <?php vbh('の'); ?>&#x3000;
         <?php vs('本 です'); ?>。<br />

         &#x3000;&#x3000;Đây là quyển sách về máy vi tính.<br />
      </div>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">2)</span>
         Danh từ<sub>1</sub>&#x0020;giải thích danh từ<sub>2</sub>&#x0020;thuộc sở hữu của ai.
      </div>

      <div class="content">
         <span class="numbering square">10</span>&#x3000;
         <?php vs('これ は2 私'); ?>&#x3000;
         <?php vbh('の'); ?>&#x3000;
         <?php vs('本 です'); ?>。<br />

         &#x3000;&#x3000;Đây là quyển sách của tôi.<br />

         Danh từ<sub>2</sub>&#x0020;thường được giản lược trong trường hợp đã rõ nghĩa.
         Tuy nhiên nếu Danh từ<sub>2</sub>&#x0020;là danh từ chỉ người thì không giản lược được.<br />

         <span class="numbering square">11</span>&#x3000;
         <?php vs('あれ は2 誰'); ?>&#x3000;
         <?php vbh('の'); ?>&#x3000;
         <?php vs('かばん です か'); ?>。<br />

         &#x3000;&#x3000;Kia là cặp sách của ai?<br />

         &#x3000;&#x3000;…
         <?php v('佐藤'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php vbh('の'); ?>&#x3000;
         <?php v('です'); ?>。<br />

         &#x3000;&#x3000;…Đó là cặp sách của chị Sato.<br />


         <span class="numbering square">12</span>&#x3000;
         <?php vs('この かばん は2 貴方'); ?>&#x3000;
         <?php vbh('の'); ?>&#x3000;
         <?php vs('です か'); ?>。<br />

         &#x3000;&#x3000;Cái cặp sách này có phải là của chị?<br />

         &#x3000;&#x3000;…
         <?php vs('いいえ 私'); ?>、
         <?php vbh('の'); ?>&#x3000;
         <?php v('じゃありません'); ?>。<br />

         &#x3000;&#x3000;…Không, không phải là của tôi.<br />


         <span class="numbering square">13</span>&#x3000;
         <?php v('ミラー'); ?>
         <?php vs('さん は2'); ?>&#x3000;
         IMC&#x3000;
         <?php vbh('の'); ?>&#x3000;
         <?php vs('社員 です か'); ?>。<br />

         &#x3000;&#x3000;Anh Miller có phải là nhân viên của công ty IMC không?<br />

         &#x3000;&#x3000;…
         <?php v('はい'); ?>、
         IMC&#x3000;
         <?php vbh('の'); ?>&#x3000;
         <?php v('社員'); ?>。<br />

         &#x3000;&#x3000;…Vâng, anh ấy là nhân viên công ty IMC.<br />
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">6.</span>
      <?php vh('そうですか'); ?>
   </div>

   <div class="segment">
      <div class="content">
         <?php vbh('そうですか', true); ?>
         được dùng khi người nói tiếp nhận được thông tin mới nào đó và muốn bày thái độ tiếp nhận của mình đối với thông tin đó.<br />

         <span class="numbering square">6</span>&#x3000;
         <?php vs('この 傘 は2 貴方 の です か'); ?>。<br />

         &#x3000;&#x3000;Cái ô này có phải là của anh không?
         <br />

         &#x3000;&#x3000;…
         <?php v('いいえ'); ?>、
         <?php vs('違います'); ?>。
         <?php v('シュミット'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php vs('の です'); ?>。<br />

         &#x3000;&#x3000;Không, không phải. Của anh Schmidt.
         <br />

         &#x3000;&#x3000;…
         <?php vbh('そうですか'); ?>。<br />

         &#x3000;&#x3000;Thế này.
         <br />

      </div>
   </div>

</div>

<?php if (BUILD_TYPE == BuildType::Normal): ?>
   <script>
      $(document).ready(function () {
         OE4BN9.initialize();
      });
   </script>
<?php endif; ?>
