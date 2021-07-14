<?php
    class danhsachtienchicuavi extends DB
    {
        public function dstchi()
        {
            $kk = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $sql = "Call danhsachtienchicua1vi('$kk')";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
    
       
    }
?>