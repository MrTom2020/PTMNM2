<form  action="../quanlytaikhoan/ql" method="POST">
<div class="max-width text-center middle-things">
<h3 class="text-center text-up green visible-xs-block visible-sm-block" style="margin-bottom:10vh;">Hi !<?php echo isset($_SESSION['ten']) ?  $_SESSION['ten']:"" ?></h3>
<div class="row">
<div class="col-md-4 col-lg-4 col-xs-6 animated fadeIn" style="margin-bottom:5vh;">
<div class="animated features-ml">
<img src="https://img.icons8.com/emoji/50/000000/video-game-emoji.png"/>
<h3 class="fourthlabel">Danh sách game</h3>
<input type="submit" class="form-control"  name="vitien" id="vitien" value="Chơi là có thưởng">
</div>
</div>
<div class="col-md-4 col-lg-4  col-xs-6 animated fadeIn" style="margin-bottom:5vh;">
<div class="animated features-ml">
<img src="https://img.icons8.com/fluent/50/000000/file.png"/>
<h3 class="fourthlabel">Xuất file csv</h3>
<input type="submit" class="form-control"  name="capnhatvi" id="capnhatvi" value="Tạo ra file csv">
</div>
</div>
<div class="col-md-4 col-lg-4 col-xs-6 animated fadeIn">
<div class="animated features-ml">
<img src="https://img.icons8.com/ios-filled/50/26e07f/group-background-selected.png"/>
<h3 class="fourthlabel">Nhập dữ liệu từ Excel</h3>
<input type="submit" class="form-control"  name="capnhatthongtincn" id="capnhatthongtincn" value="Nhập dữ liệu từ bên ngoài">
</div>
</div>
<div class="col-md-4 col-lg-4 col-xs-6 animated fadeIn">
<div class="animated features-ml">
<img src="https://img.icons8.com/ios-filled/50/26e07f/group-background-selected.png"/>
<h3 class="fourthlabel">Biểu đồ báo cáo</h3>
<input type="submit" class="form-control"  name="danhsachtk" id="danhsachtk" value="Chọn biểu đồ báo cáo khoản thu chi.">
</div>
</div>
</div>
</div>
</form>