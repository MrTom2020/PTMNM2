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
  <p id="hi"></p>
<form method="POST" action="../guifile/senddata" enctype="multipart/form-data">
  <input type="file" name="file">
  <button type="submit" name="btnguifile">124</button>
</form>