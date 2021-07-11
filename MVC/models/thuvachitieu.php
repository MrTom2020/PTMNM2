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
        public function danhsachvi()
        {
            $kk = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $sql = "SELECT * FROM vi where Userid='$kk'";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
        public function tongtienc($ID)
            {
             $kq;
             $r;
             $sql = "SELECT * FROM user where iduser = '$ID'";
             $row = mysqli_query($this->con,$sql);
             if($row)
             {
                $r =  mysqli_fetch_array($row);
             }
             else
             {
                 $kq = "111111";
             }
             return $r[1];
            }
    }
 ?>