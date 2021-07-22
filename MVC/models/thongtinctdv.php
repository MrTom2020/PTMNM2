<?php
    class thongtinctdv extends DB
    {
        public function ttdv($ID)
        {
            $sql2 = "CALL thongtin1dv('$ID')";
            $row2 = mysqli_query($this->con,$sql2);
            return $row2;
         }
    }
 ?>