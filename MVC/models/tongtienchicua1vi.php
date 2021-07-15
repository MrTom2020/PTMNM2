<?php
    class tongtienchicua1vi extends DB
    {
        public function ttchi($ID)
        {
            $sql2 = "CALL tongtienchicua1vius('$ID')";
            $row2 = mysqli_query($this->con,$sql2);
            $kq = $row -> fetch_row();
            return $kq[0];
         }
    }
 ?>