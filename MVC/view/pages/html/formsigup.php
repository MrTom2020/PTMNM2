<div style="width:70vw;margin-top:10vh;margin-left:15vw;">
<form action="./../dangkytaikhoan/khachdangkytaikhoan" method="POST">
   <h1 class="text-center">Form Đăng Ký</h1>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <p id="htkq1" style="color:#333333;"></p>
        <input type="text" name="hoten" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Tên đăng nhập</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="date" name="ngaysinh" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Ngày sinh</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="password" name="mk" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">Mật khẩu</label>
  </div>
  <div class="form-outline mb-4">
    <input type="password" name="xnmk"  class="form-control" />
    <label class="form-label" for="form6Example3">Xác nhận mật khẩu</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="dc" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Địa chỉ</label>
  </div>
  <div class="form-outline mb-4">
    <input type="email" name="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="sdt" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Số điện thoại</label>
  </div>
  <div class="form-outline mb-4">
    <label class="form-label" for="form6Example6">Câu hỏi bí mật</label>
    <select name="cauhoibimat" class="form-select" aria-label="Default select example">
    <option selected value="Bài hát yêu thích của bạn là gì">Bài hát yêu thích của bạn là gì</option>
    <option value="Chiếc xe bạn thích là gì">Chiếc xe bạn thích là gì</option>
    <option value="Người bạn ngưỡng mộ là ai">Người bạn ngưỡng mộ là ai</option>
    <option value="Con vật bạn yêu thích là gì">Con vật bạn yêu thích là gì</option>
</select>
  </div>
  <div class="form-outline mb-4">
    <textarea class="form-control" name="cautraloi" id="form6Example7" rows="4"></textarea>
    <label class="form-label" for="form6Example7">Câu trả lời</label>
  </div>
  <div class="form-check d-flex justify-content-center mb-4">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form6Example8"
      checked
    />
    <label class="form-check-label" for="form6Example8">Tạo một tài khoản?</label>
  </div>

  <INPUT class="btn btn-primary btn-block mb-4" TYPE="button" VALUE="Quay lại" onClick="history.go(-1);">
  <button type="submit" name="dangky" class="btn btn-primary btn-block mb-4">Đồng ý</button>
</form>
</div>