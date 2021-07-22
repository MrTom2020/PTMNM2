<?php
    class capnhatthongtinus extends DB
    {
        public function cn($ID,$ngaysinh,$mk,$dc,$email,$sdt,$cauhoibimat,$cautraloi)
        {
            $kq = "Cập nhật thông tin thất bại";
            $sql = "CALL capnhatthongtin('$ID','$ngaysinh','$mk','$dc','$email','$sdt','$cauhoibimat','$cautraloi')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Cập nhật thông tin thành công";
            }
            return $kq;
        }
    }
 ?>