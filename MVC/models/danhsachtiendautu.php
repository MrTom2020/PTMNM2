<?php
    class danhsachtiendautu extends DB
    {
        public function dstthu()
        {
            $kk = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $sql = "Call danhsachtiendautucuavi('$kk')";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
    
       
    }
?>