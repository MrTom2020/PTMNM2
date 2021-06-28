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
        public function kt($username)
        {
            $kq = "";
            $sql = "CALL danhsachus('$username')";
            if($username)
            {
            $r = mysqli_query($this->con,$sql);
            if($r)
            {
                $row = mysqli_fetch_array($r);
                if($row[0] == 0)
                {
                    $kq = "Tên đăng nhập Bạn có thể dùng thông tin đó";
                }
                else
                {
                    $kq = "Tên đăng nhập Đã có người dùng thông tin đó";
                }
            }
        }
        else{
            $kq = "Tên đăng nhập";
        }
            return $kq;
        }
        public function kt2($password)
        {
            $kq = "Email";
            $sql = "CALL danhsachemail('$password')";
            if($password)
            {
            $r = mysqli_query($this->con,$sql);
            if($r)
            {
                $row = mysqli_fetch_array($r);
                if($row[0] == 0)
                {
                    $kq = "Email Bạn có thể dùng thông tin đó";
                }
                else
                {
                    $kq = "Email Đã có người dùng thông tin đó";
                }
            }
        }
        else{
            $kq = "Email";
        }
            return $kq;
        }
    }
    
?>