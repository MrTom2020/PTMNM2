<?php
    class dsvi extends DB
    {
        public function danhsachvi()
        {
            $kk = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $sql = "SELECT * FROM vi where Userid='$kk'";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
    
       
    }
?>