<?php
    class tongtienchiu extends DB
    {
        public function tongtienc($ID)
            {
                $kq = array();
                $sql = "CALL tongtienchi('$ID')";
                $row = mysqli_query($this->con,$sql);
                $kq = $row -> fetch_row();
                return $kq[0];
            }
    }
 ?>