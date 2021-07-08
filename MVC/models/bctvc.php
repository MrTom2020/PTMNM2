<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $kq = "123";
            $sql = "CALL baocaotongquan('$ID')";
            $row = mysqli_query($this->con,$sql);
            $kq = $row;
            while($row2 = mysqli_fetch_array($row))
           {
               $kq = "12345678";
           }
            return $kq;
        }
    }
 ?>