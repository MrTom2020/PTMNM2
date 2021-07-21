<?php
    $ds = isset($data["dsgame"]) ? $data["dsgame"]:NULL;
    echo "<div class='row'>";
    echo "<form  action='dsgamee/nsk' method='POST'>";
    if($ds)
    {
        echo "<form  action='dsgamee/nsk' method='POST'>";
        while($row = mysqli_fetch_array($ds))
        {
           echo "<div class='col-md-4 col-lg-4 col-xs-6 animated fadeIn' style='margin-bottom:5vh;'>
           <div class='animated features-ml'>
           <img src='https://img.icons8.com/emoji/50/000000/video-game-emoji.png'/>
           <h3 class='fourthlabel'>$row[1]</h3>
           <input type='submit' class='form-control'  name='game1' id='$row[0]' value='$row[4]'>
           </div>
           </div>";
        }
    }
    echo "</form>";
    echo "</div>";
 ?>