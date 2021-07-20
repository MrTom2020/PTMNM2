<?php
    class dv extends DB
    {
        public function dsachgame()
        {
            $sql = "SELECT * FROM dichvu where loai='1'";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
    }
 ?>