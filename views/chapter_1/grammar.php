<?php require_once 'utilities/tag_helper.php'; ?>

<div class="container">
   <div class="main-title">
      <?php echo $title ?>
   </div>

   <div class="heading-1">
      <span class="numbering">1.</span>
      Danh từ<sub>1</sub>&#x0020;
      <?php vh('は2'); ?>&#x0020;
      Danh từ<sub>2</sub>&#x0020;
      <?php vh('です'); ?>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">1)</span>
         Trợ từ
         <?php v('は2', true); ?>
      </div>

      <div class="content">
         Trợ từ
         <?php vbh('は2', true); ?>
         biểu thị rằng danh từ đứng trước nó là chủ đề của câu.
         Người nói đặt
         <?php vbh('は2', true); ?>
         trước chủ đề mà mình muốn nói đến và lập thành câu bằng cách thêm vào sau
         <?php vbh('は2', true); ?>
         những thông tin cần thiết.<br />

         <span class="numbering square">1</span>&#x3000;
         <?php v('私'); ?>&#x3000;
         <?php vbh('は2'); ?>&#x3000;
         <?php vs('マイク•ミラー です'); ?>。<br />

         &#x3000;&#x3000;Tôi là Mike Miller.<br />

         <span class="text bold d-inline-block">[Chú ý]</span>
         <?php vbh('は2', true); ?>
         đọc là
         <?php vbh('わ', true); ?>
      </div>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">2)</span>
         <?php v('です'); ?>
      </div>

      <div class="content">
         <?php vbh('です', true); ?>
         được đặt sau danh từ làm vị ngữ để biểu thị sự phán đoán hay khẳng định.<br />

         <?php vbh('です', true); ?>
         biểu thị sự lịch sự của người nói đối với người nghe.<br />

         <?php vbh('です', true); ?>
         thay đổi hình thức trong trường hợp của câu phủ định (xem thêm Bài 2)
         hoặc thời quá khứ (xem thêm Bài 12).<br />

         <span class="numbering square">2</span>&#x3000;
         <?php vs('私 は2 エンジニア'); ?>&#x3000;
         <?php vbh('です'); ?>。<br />

         &#x3000;&#x3000;Tôi là kỹ sư.
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">2.</span>
      Danh từ<sub>1</sub>&#x0020;
      <?php vh('は2'); ?>&#x0020;
      Danh từ<sub>2</sub>&#x0020;
      <?php vh('じゃありません'); ?>
   </div>

   <div class="segment">
      <div class="content">
         <?php vbh('じゃありません', true); ?>
         là thể phủ định của
         <?php vbh('です', true); ?>
         ，và được dùng trong giao tiếp hàng ngày.
         <?php vbh('ではありません', true); ?>
         được dùng trong văn viết hoặc các bài phát biểu trang trọng.<br />

         <span class="numbering square">3</span>&#x3000;
         <?php v('サントス'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php vbh('は2'); ?>&#x3000;
         <?php v('学生'); ?>&#x3000;
         <?php vbh('じゃありません'); ?>。<br />

         &#x3000;&#x3000;Anh Santos không phải là sinh viên.<br />

         <span class="text bold d-inline-block">[Chú ý]</span>
         <?php vbh('では', true); ?>đọc là <?php vbh('でわ', true); ?>
      </div>
   </div>

   <div class="heading-1">
      <span class="numbering">3.</span>
      Câu&#x0020;<?php vh('か'); ?>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">1)</span>
         Trợ từ <?php v('か', true); ?>
      </div>

      <div class="content">
         Trợ từ
         <?php vbh('か', true); ?>
         được dùng đề biểu thị sự không chắc chắn, sự nghi vấn của người nói.
         Câu nghi vấn được tạo thành bằng cách thêm
         <?php vbh('か', true); ?>
         vào cuối câu.
         Trong câu nghi vấn chữ
         <?php vbh('か', true); ?>
         ở cuối câu được đọc với giọng cao hơn.
      </div>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">2)</span>
         Câu nghi vấn để xác nhận xem một nội dung là đúng hay sai
      </div>

      <div class="content">
         Như đã nói ở trên, một câu sẽ trở thành câu hỏi khi ta thêm
         <?php vbh('か', true); ?>
         vào cuối câu.
         Trật tự từ không thay đổi.
         Câu nghi vấn loại này xác nhận một nội dung là đúng hay sai.
         Nếu đúng thì trả lời là
         <?php vbh('はい', true); ?>,
         không đúng thì là <?php vbh('いいえ', true); ?><br />

         <span class="numbering square">4</span>&#x3000;
         <?php v('ミラー'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('アメリカ'); ?>
         <?php v('人'); ?>&#x3000;
         <?php v('です'); ?>&#x3000;
         <?php vbh('か'); ?>。<br />

         &#x3000;&#x3000;Anh Miller có phải là người Mỹ không?<br />

         &#x3000;&#x3000;…
         <?php vbh('はい'); ?>、
         <?php v('アメリカ'); ?>
         <?php v('人'); ?>&#x3000;
         <?php v('です'); ?>。<br />

         &#x3000;&#x3000;…Vâng, anh ấy là người Mỹ.<br /><br />


         <span class="numbering square">5</span>&#x3000;
         <?php v('ミラー'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php vs('は2 先生 です'); ?>&#x3000;
         <?php vbh('か'); ?>。<br />

         &#x3000;&#x3000;Anh Miller có phải là giáo viên không?<br />

         &#x3000;&#x3000;…<?php vbh('いいえ'); ?>、
         <?php v('先生'); ?>&#x3000;
         <?php vbh('じゃありません'); ?>。<br />

         &#x3000;&#x3000;…Không, anh ấy không phải là giáo viên.
      </div>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">3)</span>
         Câu nghi vấn có nghi vấn từ
      </div>

      <div class="content">
         Thay nghi vấn từ vào vị trí của thành phần câu mà bạn muốn hỏi.
         Trật tự từ không thay đổi.
         Thêm
         <?php vbh('か', true); ?>
         vào cuối câu.<br />

         <span class="numbering square">6</span>&#x3000;
         <?php vs('あの方 は2 何方 です'); ?>&#x3000;
         <?php vbh('か'); ?>。<br />

         &#x3000;&#x3000;Người kia là ai?<br />

         &#x3000;&#x3000;…[
         <?php vs('あの方 は2'); ?>
         ]
         <?php v('ミラー'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php v('です'); ?>。<br />

         &#x3000;&#x3000;…Người đó là anh Miller.
      </div>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">4.</span>
         Danh từ &#x0020;<?php v('も'); ?>
      </div>

      <div class="content">
         <?php vbh('も', true); ?>
         được dùng khi danh từ diễn tả chủ đề của câu giống với danh từ tương ứng ở câu trước.<br />

         <span class="numbering square">7</span>&#x3000;
         <?php v('ミラー'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php vs('は2 会社員 です'); ?>。<br />

         &#x3000;&#x3000;Anh Miller là nhân viên công ty.<br />

         &#x3000;&#x3000;
         <?php v('グプタ'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php vbh('も'); ?>&#x3000;
         <?php v('会社員'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Anh Gupta cũng là nhân viên công ty.
      </div>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">5.</span>
         Danh từ<sub>1</sub>&#x0020;
         <?php v('の'); ?>&#x0020;
         Danh từ<sub>2</sub>
      </div>

      <div class="content">
         <?php vbh('の', true); ?>
         nối hai danh từ với nhau, Danh từ<sub>1</sub>&#x0020;bổ nghĩa cho Danh từ<sub>2</sub>
         <?php vbh('の', true); ?>
         trong bài này biểu thị tính sở thuộc (xem thêm Bài 2 và 3 nói về cách dùng
         <?php vbh('の', true); ?>
         trong các trường hợp khác).<br />

         <span class="numbering square">8</span>&#x3000;
         <?php v('ミラー'); ?>
         <?php v('さん'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         IMC&#x3000;
         <?php vbh('の'); ?>&#x3000;
         <?php v('社員'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Anh Miller là nhân viên Công ty IMC.
      </div>
   </div>

   <div class="segment">
      <div class="heading-2">
         <span class="numbering">6.</span>
         <?php v('～さん'); ?>
      </div>

      <div class="content">
         Trong tiếng Nhật, từ
         <?php vbh('さん', true); ?>
         được dùng ngay sau họ của người nghe để thể hiện sự kính trọng khi gọi tên người đó.
         Từ <?php vbh('さん', true); ?> không dùng đối với chính bản thân người nói.<br />

         <span class="numbering square">9</span>&#x3000;
         <?php v('あの方'); ?>&#x3000;
         <?php v('は2'); ?>&#x3000;
         <?php v('ミラー'); ?>
         <?php vbh('さん'); ?>&#x3000;
         <?php v('です'); ?>。<br />
         &#x3000;&#x3000;Người kia là anh Miller.<br />

         Trong trường hợp đã biết tên của người nghe thì không dùng
         <?php vbh('貴方', true); ?>
         mà dùng
         <?php vbh('さん', true); ?>
         để gọi tên người đó.<br />

         <span class="numbering square">10</span>&#x3000;
         <?php v('鈴木'); ?>：&#x3000;
         <?php v('ミラー'); ?>
         <?php vbh('さん'); ?>&#x3000;
         <?php vs('は2 学生 です か'); ?>。<br />

         &#x3000;&#x3000;
         <?php v('ミラー'); ?>：&#x3000;
         <?php v('いいえ'); ?>、
         <?php vs('会社員 です'); ?>。<br />

         &#x3000;&#x3000;Suzuki:&#x3000;
         Anh có phải là sinh viên không?<br />
         &#x3000;&#x3000;Miller:&#x3000;
         Không, tôi là nhân viên công ty.
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
