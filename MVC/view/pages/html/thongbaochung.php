
<nav>
        <?php include_once('menu_main/menu.php') ?>
   </nav>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"><?php
    $dt = isset($_SESSION['tbchung']) ? $_SESSION['tbchung']:NULL;
    
     while($row = mysqli_fetch_array($dt))
    {
        echo "<div class='card' style='width: 27rem;'>
        <div class='card-body'>
          <h5 class='card-title'>$row[3]</h5>
          <p class='card-text'></p>$row[4]</p>
          <p  style='margin-top:15vh;'>Ngày đăng  <br/> $row[5]</p>
        </div>
      </div>";

    }
 ?></div>