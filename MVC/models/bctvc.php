<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $sql = "CALL baocaotongquan('$ID')";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
        public function bieudotongquat($ID)
        {
            $sql2 = "CALL bieudotongquan('$ID')";
            $row2 = mysqli_query($this->con,$sql2);
            return $row2;
         }
    }
 ?>