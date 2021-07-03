<?php
    class xtb extends DB
    {
        public function xoatb($id)
        {
            $kq = "Xóa không thành công";
            $sql = "update thongbao set tinhtrang = 0 where ID = '$id'";
            if(mysqli_query($this->con,$sql))
            {
                $kq = "Xóa thành công";
            }
            return $kq;
        }
    }
 ?>