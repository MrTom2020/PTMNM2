<?php
    $ds = isset($data["dsgame"]) ? $data["dsgame"]:NULL;
    if($ds)
    {
        while($row = mysqli_fetch_array($ds))
        {
            echo $row[1];
        }
        echo '123333';
    }
 ?>