<?php $dt = isset($data["listvi"]) ? $data["listvi"]:NULL;?>
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
