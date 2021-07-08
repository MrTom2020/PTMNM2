<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $kq = "A hu hu";
            $sql = "CALL baocaotongquan('$ID')";
            $row = mysqli_query($this->con,$sql);
            if($row)
            {
                $row2 = mysqli_fetch_array($row);
                $kq = $row2[1];
            }
            return $kq;
        }
    }
 ?>