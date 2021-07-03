
 <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
  </li>
</ul>
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
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
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
  </div>
  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>