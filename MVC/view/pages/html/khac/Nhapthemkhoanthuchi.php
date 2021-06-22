<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Khoản đầu tư</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Khoản thu</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">khoản chi</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div style="width:70vw;margin-top:10vh;margin-left:15vw;">
<form action="./../nhapkhoanthuchi/themkhoanthuchi" method="POST">
   <h1 class="text-center">Form Nhập khoản đầu tư</h1>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="tenloaidautu" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Tên loại đầu tư</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="date" id="form6Example2" name="ngaygddt" class="form-control" />
        <label class="form-label" for="form6Example2">Ngày giao dịch</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" name="gtdt" class="form-control" />
    <label class="form-label" for="form6Example3">giá trị</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="dmdt"  class="form-control" />
    <label class="form-label" for="form6Example3">Danh mục</label>
  </div>
  <button type="submit" name="dydt" class="btn btn-primary btn-block mb-4">Đồng ý</button>
</form>
</div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <div style="width:70vw;margin-top:10vh;margin-left:15vw;">
  <form action="./../nhapkhoanthuchi/themkhoanthuchi" method="POST">
   <h1 class="text-center">Form Nhập khoản chi</h1>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="tenkhoanchi" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Tên khoản chi</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" name="ngaygdkc" class="form-control" />
        <label class="form-label" for="form6Example2">Ngày giao dịch</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="text" id="form6Example3" name="gtkc" class="form-control" />
    <label class="form-label" for="form6Example3">giá trị</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="dmkc"  class="form-control" />
    <label class="form-label" for="form6Example3">Danh mục</label>
  </div>
  <button type="submit" name="dykc" class="btn btn-primary btn-block mb-4">Đồng ý</button>
</form>
</div>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  <div style="width:70vw;margin-top:10vh;margin-left:15vw;">
  <form action="./../nhapkhoanthuchi/themkhoanthuchi" method="POST">
   <h1 class="text-center">Form Nhập khoản thu</h1>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="tenkhoanthu" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Tên khoản thu</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" name="ngaygdkt" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Ngày giao dịch</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="gtkt" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">giá trị</label>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="dmkt"  class="form-control" />
    <label class="form-label" for="form6Example3">Danh mục</label>
  </div>
  <button type="submit" name="dykt" class="btn btn-primary btn-block mb-4">Đồng ý</button>
</form>
</div>
  </div>
</div>
