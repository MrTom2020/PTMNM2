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
                $kq = array();
                $sql = "CALL tongtienchi('$ID')";
                $row = mysqli_query($this->con,$sql);
                $kq = $row -> fetch_row();
                return $kq[0];
            }
    }
 ?>