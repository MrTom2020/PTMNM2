<?php
    class vicuathanhvien extends DB
    {
        public function vithanhvien()
            {
                $kk = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
                $sql = "CALL vicuathanhvien('$kk')";
                $row = mysqli_query($this->con,$sql);
                return $row;
            }
    }
 ?>