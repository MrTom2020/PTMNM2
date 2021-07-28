<?php
    class thongtinvi extends DB
    {
        public function ttv($ID)
        {
            $sql2 = "CALL thongtinvi('$ID')";
            $row2 = mysqli_query($this->con,$sql2);
            return $row2;
         }
    }
 ?>