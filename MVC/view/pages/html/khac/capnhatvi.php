<div style="width:70vw;margin-top:10vh;margin-left:15vw;">
  <form action="./../cnthongtinvi/cnttv" method="POST">
  <?php $dt = isset($data["listvi"]) ? $data["listvi"]:NULL;
  $dem = 0;?>
   <h1 class="text-center">Form cập nhật ví</h1>
   <div class="form-outline mb-4">
   <?php 
   if($dt != NULL)
   {
   echo "<select name='idvicn' class='form-select' aria-label='Default select example'>";
   while($row = mysqli_fetch_array($dt))
   {
     echo "<option value='$row[0]'>$row[1]</option>";
     $dem +=1;
   }
  echo "</select>";
   }
    ?>
     <label class="form-label" for="form6Example6"><?php echo $d = $dem != 0 ? "Ví":"Hiện tại bạn chưa có ví"; ?></label>
  </div>
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" name="tenvicn" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">Tên ví mới</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" name="tiencn" class="form-control" />
        <label class="form-label" for="form6Example2">Tiền</label>
      </div>
    </div>
  </div>
  <div class="form-outline mb-4">
    <input type="text" name="loaivicn"  class="form-control" />
    <label class="form-label" for="form6Example3">Loại ví</label>
  </div>
  <?php 
  if($dem != 0)
  { 
    echo "<button type='submit' name='dongycn' class='btn btn-primary btn-block mb-4'>Đồng ý</button>";
  }
  else
  {
    echo "<button type='submit' name='dongycn' class='btn btn-primary btn-block mb-4' disabled>Đồng ý</button>";
  }
  ?>
</form>
</div>