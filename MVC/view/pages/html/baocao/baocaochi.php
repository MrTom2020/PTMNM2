<nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Khoản đầu tư</button>
    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Khoản thu</button>
    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">khoản chi</button>
  </div>
</nav>
<?php $dt = isset($data["listvi"]) ? $data["listvi"]:NULL;
  $dem = 0;?>
  <div class="form-outline mb-4">
   <?php 
   if($dt != NULL)
   {
    echo " <select name='tenvi' id='tenvi' class='form-select' aria-label='Default select example'>";
   while($row = mysqli_fetch_array($dt))
   {
     echo "<option value='$row[0]'>$row[1]</option>";
     $dem +=1;
   }
  echo "</select>
  <button  name='xembc' id='xembc' class='btn btn-primary btn-block mb-4'>Đồng ý</button>";
   }
    ?>
  </div>
  11111111111<p id="hi"></p>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div style="width:40vw;margin-top:10vh;margin-left:5vw;">
  789
</div>
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
  <div style="width:40vw;margin-top:10vh;margin-left:5vw;">
 456
</div>
  </div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
  <div style="width:40vw;margin-top:10vh;margin-left:5vw;">
 123
</div>
  </div>
</div>
