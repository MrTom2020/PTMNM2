<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $kq = "123";
            $sql = "CALL baocaotongquan('$ID')";
            $row = mysqli_query($this->con,$sql);
            while($row2 = mysqli_fetch_array($row))
           {
               $kq = $row2[1];
           }
            return $kq;
        }
    }
 ?>