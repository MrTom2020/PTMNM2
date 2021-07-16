<?php
    class xuatfile extends DB
    {
        public function xf($id)
        {
            $sql = "CALL bieudotongquan('$id')";
            $row =  mysqli_query($this->con,$sql);
            return $row;
        }
    }
 ?>