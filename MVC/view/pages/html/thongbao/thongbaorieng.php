<?php
    $dt = isset($_SESSION['tbcnn']) ? $_SESSION['tbcnn']:NULL;
    
     while($row = mysqli_fetch_array($dt))
    {
        echo "<form class='login-container' action='../xemthongbao/xemtb' method='POST'>
        <div class='card' style='width: 27rem;'>
        <div class='card-body'>
          <h5 class='card-title'>$row[3]</h5>
          <p class='card-text'>$row[4]</p>
          <p>Ngày đăng  <br/> $row[5]</p>
        </div>
      </div>
      <input class='dropdown-item' name='xoatb' type='submit' value='$row[0]'>Xóa</input>
      </form>";

    }
 ?>