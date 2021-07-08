<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $sql = "CALL baocaotongquan('$ID')";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
    }
 ?>