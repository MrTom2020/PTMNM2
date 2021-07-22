<?php
    class capnhatdvu extends DB
    {
        public function cndv($id,$tendichvu,$loai,$noidung,$tinhtrang)
        {
            $kq = "Cập nhật thông tin thất bại";
            $sql = "CALL capnhatdv('$id','$tendichvu','$loai','$noidung','$tinhtrang')";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Cập nhật thông tin thành công";
            }
            return $kq;
        }
    }
 ?>