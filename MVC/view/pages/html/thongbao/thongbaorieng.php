yyy
<?php
    $dt = isset($_SESSION['tbcnn']) ? $_SESSION['tbcnn']:NULL;
    
     while($row = mysqli_fetch_array($dt))
    {
        echo "<form class='login-container' action='../xemthongbao/xemtb' method='POST'>
        <div class='card' style='width: 27rem;'>
        <div class='card-body'>
          <h5 class='card-title'>$row[3]</h5>
          <p class='card-text'></p>$row[4]</p>
          <p style='margin-top:15vh;'>Ngày đăng  <br/> $row[5]</p>
        </div>
      </div>
      <button type='submit' name='xoatb' value='$row[0]' class='btn btn-primary'>Xóa</button>
      </form>";

    }
 ?>