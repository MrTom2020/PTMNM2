<?php
    class modeldktk extends DB
    {
        public function checkus($username,$password,$ngaysinh,$diachi,$email,$cauhoibimat,$sdt,$cautraloi,$ngaytg)
        {
            $kq = "Đăng ký tài khoản không thành công";
            $sql = "CALL themtaikhoan('$username','$password','$ngaysinh','$diachi','$email','$cauhoibimat','$cautraloi','$sdt','$ngaytg')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Đăng ký tài khoản thành công";
            }
            return $kq;
        }
        public function kt($username,$email)
        {
            $kq = "Đã có người dùng thông tin đó";
            $sql = "CALL danhsachus('$username','$email')";
            $r = mysqli_query($this->con,$sql);
            if($r)
            {
                $row = mysqli_fetch_array($r);
                $kq = $row[0];
                // if($row != 1)
                // {
                //     $kq = "Bạn có thể dùng thông tin đó";
                // }
            }
            return $kq;
        }
    }
    
?>