<div style="width:70vw;margin-top:10vh;margin-left:15vw;">
<?php
$tt = isset($data['thongtin']) ? $data['thongtin']:"";
while($row = mysqli_fetch_array($tt))
{
    echo '123';
}
echo "<form action='./../dangkytaikhoanthanhvien/khachdangkytaikhoantv' method='POST'>
<h1 class='text-center'>Form cập nhật thông tin</h1>
  <div class='row mb-4'>
    <div class='col'>
      <div class='form-outline'>
        <input type='date' name='ngaysinhcn' id='form6Example2' class='form-control' />
        <label class='form-label' for='form6Example2'>Ngày sinh</label>
      </div>
    </div>
  </div>
  <div class='form-outline mb-4'>
    <input type='password' name='mkcn' id='form6Example3' class='form-control' />
    <label class='form-label' for='form6Example3'>Mật khẩu</label>
  </div>
  <div class='form-outline mb-4'>
    <input type='password' name='xnmkcn'  class='form-control' />
    <label class='form-label' for='form6Example3'>Xác nhận mật khẩu</label>
  </div>
  <div class='form-outline mb-4'>
    <input type='text' name='dccn' id='form6Example4' class='form-control' />
    <label class='form-label' for='form6Example4'>Địa chỉ</label>
  </div>
  <div class='form-outline mb-4'>
    <input type='email' name='emailtv' id='form6Example5' class='form-control' />
    <label class='form-label' for='form6Example5'>Email</label>
  </div>
  <div class='form-outline mb-4'>
    <input type='text' name='sdtcn' id='form6Example6' class='form-control' />
    <label class='form-label' for='form6Example6'>Số điện thoại</label>
  </div>
  <div class='form-outline mb-4'>
  <select name='cauhoibimatcn' class='form-select' aria-label='Default select example'>
    <option selected value='Bài hát yêu thích của bạn là gì'>Bài hát yêu thích của bạn là gì</option>
    <option value='Chiếc xe bạn thích là gì'>Chiếc xe bạn thích là gì</option>
    <option value='Người bạn ngưỡng mộ là ai'>Người bạn ngưỡng mộ là ai</option>
    <option value='Con vật bạn yêu thích là gì'>Con vật bạn yêu thích là gì</option>
</select>
    <label class='form-label' for='form6Example6'>Câu hỏi bí mật</label>
  </div>
  <div class='form-outline mb-4'>
    <textarea class='form-control' name='cautraloicn' id='form6Example7' rows='4'></textarea>
    <label class='form-label' for='form6Example7'>Câu trả lời</label>
  </div>
  <button type='submit' name='dongycn' class='btn btn-primary btn-block mb-4'>Đồng ý</button>
</form>";
?>
</div>