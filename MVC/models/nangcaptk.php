<?php
    class nangcaptk extends DB
    {
        public function nc($ID)
        {
            $kq = "Cập nhật thông tin thất bại";
            $sql = "CALL nangcaptaikhoan('$ID')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Cập nhật thông tin thành công";
            }
            return $kq;
        }
    }
 ?>