<?php
    $dt = isset($_SESSION['tbchung']) ? $_SESSION['tbchung']:NULL;
    
     while($row = mysqli_fetch_array($dt))
    {
        echo "<div class='card' style='width: 27rem;'>
        <div class='card-body'>
          <h5 class='card-title'>$row[3]</h5>
          <p class='card-text' style='margin-bottom:15vh;'></p>$row[4]</p>
          <p>Ngày đăng  <br/> $row[5]</p>
        </div>
      </div>";

    }
 ?>