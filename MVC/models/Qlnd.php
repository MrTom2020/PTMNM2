<?php
    class Qlnd extends DB
    {
        public function ds()
         {
             $sql = "SELECT * FROM user where tinhtrang != 0";
             $row = mysqli_query($this->con,$sql);
            return $row;
         }
    }
 ?>