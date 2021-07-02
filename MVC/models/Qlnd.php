<?php
    class Qlnd extends DB
    {
        public function ds()
    {
       $sql = "SELECT * FROM user";
       $row = mysqli_query($this->con,$sql);
       return $row;
    }
    }
 ?>