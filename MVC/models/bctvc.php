<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $kq = "A hu hu";
            $ID = 105;
            $sql = "CALL baocaotongquan('$ID')";
            $row = mysqli_query($this->con,$sql);
            if($row)
            {
                $kq = "A1111 hu hu";
                // while($row1 = mysqli_fetch_array($row))
                // {
                //     $kq = $row[1];
                // }
            }
            return $kq;
        }
    }
 ?>