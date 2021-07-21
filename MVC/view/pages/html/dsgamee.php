 <?php 
    echo "<iframe src='https://www.nhaccuatui.com/mh/background/C08E4AiteDUm' width='1' height='1' frameborder='0' allowfullscreen allow='autoplay'></iframe>";
    echo "<form  action='../Dichvu/dvu' method='POST'>
    <input type='submit' class='form-control'  name='qlgame' id='qlgame' value='Quay lại'>
    </from>";
    $dt = isset($data["Page1"]) ? $data["Page1"]:"";
     include_once('Game/'.$dt.'.php');
      ?>

   