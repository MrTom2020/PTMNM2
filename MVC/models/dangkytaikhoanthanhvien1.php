<?php
    class dangkytaikhoanthanhvien1 extends DB
    {
        public function dk($hoten, $mk,$ngaysinh,$dc,$email,$cauhoibimat,$sdt,$cautraloi,$ngaytg)
        {
            $kq = "";
            $idd = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $sql = "CALL themtaikhoantv('$hoten','$mk','$ngaysinh','$dc','$email','$cauhoibimat','$cautraloi','$sdt','$ngaytg','$idd')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Đăng ký tài khoản thành công";
            }
            return $kq;
        }
    }
 ?>