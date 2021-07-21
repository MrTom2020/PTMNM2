 <?php 
    echo "<form  action='../Dichvu/dvu' method='POST'>
    <input type='submit' class='form-control'  name='qlgame' id='qlgame' value='Quay lại'>
    </from>";
    $dt = isset($data["Page1"]) ? $data["Page1"]:"";
     include_once('Game/'.$dt.'.php');
      ?>

   