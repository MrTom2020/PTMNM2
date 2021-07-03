
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<nav>
        <?php include_once('menu_main/menu.php') ?>
   </nav>
   123333
  <?php
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
    echo '123';
 ?>
</body>
</html>