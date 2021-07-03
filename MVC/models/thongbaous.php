<?php
    class thongbaous extends DB
    {
         public function tbcn($userid,$tentacgia,$tieude,$noidung,$ngaydang)
         {
             $kq = "Thông báo thất bại";
            $sql = "CALL thongbaocanhan('$userid','$tentacgia','$tieude','$noidung','$ngaydang')";
             $row = mysqli_query($this->con,$sql);
             if($row)
             {
                $kq = "Thông báo thành công";
             }
            return $kq;
         }

    }
 ?>