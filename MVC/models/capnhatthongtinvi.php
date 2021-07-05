<?php
    class capnhatthongtinvi extends DB
    {
        public function cn($idd,$tenvi,$tien,$loai)
        {
            $kq = "Cập nhật thông tin ví thất bại";
            $sql = "CALL capnhatthongtinvi('$idd','$tenvi','$tien','$loai')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Cập nhật thông tin ví thành công";
            }
            return $kq;
        }
    }
 ?>