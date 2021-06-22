<?php
    class modeldktk extends DB
    {
        public function checkus($username,$password,$ngaysinh,$diachi,$email,$cauhoibimat,$sdt,$cautraloi)
        {
            $kq = "Đăng ký tài khoản không thành công";
            $sql = "CALL themtaikhoan('$username','$password','$ngaysinh','$diachi','$email','$cauhoibimat','$sdt','$cautraloi')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Đăng ký tài khoản thành công";
            }
            return $kq;
        }
    }
?>