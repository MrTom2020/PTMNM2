<div style="width:70vw;margin-top:10vh;margin-left:15vw;">
<form action="./../quanlytaikhoan/taovi" method="POST">
<h1 class="text-center">Form tạo ví</h1>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="tenvi" id="tenvi" class="form-control" />
        <label class="form-label" for="tenvi">Tên ví</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="tienvi" id="tienvi" class="form-control" />
        <label class="form-label" for="tienvi">Tiền</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="password" name="ngaytao" id="ngaytao" class="form-control" />
    <label class="form-label" for="ngaytao">Ngày tạo</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="loaivi"  class="form-control" />
    <label class="form-label" for="loaivi">Loại ví</label>
  </div>
  <button type="submit" name="taovi" class="btn btn-primary btn-block mb-4">Đồng ý</button>
</form>
</div>