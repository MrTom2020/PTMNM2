<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $kq = "A hu hu";
            $sql = "CALL baocaotongquan('$ID')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "A hi hi";
            }
            return $kq;
        }
    }
 ?>