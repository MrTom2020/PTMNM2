<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $kq;
            $ID = 105;
            $sql = "CALL baocaotongquan('$ID')";
            $row = mysqli_query($this->con,$sql);
            if($row)
            {
               $kq = $row;
            }
            return $kq;
        }
    }
 ?>