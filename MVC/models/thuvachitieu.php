<?php
    class thuvachitieu extends DB
    {
        
        public function taochitieu($ten,$loai,$idvi,$ngaytao,$giatri,$danhmuc)
        {
            $kq = "";
            $idd = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $sql = "CALL taokhoanthuchi('$ten','$loai','$idvi','$ngaytao','$giatri','$danhmuc')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Tạo khoản chi thành công";
            }
            return $kq;
        }
    }
 ?>