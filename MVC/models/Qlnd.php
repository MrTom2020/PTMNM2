<?php
    class Qlnd extends DB
    {
        public function ds()
         {
             $sql = "SELECT * FROM user where tinhtrang != 0";
             $row = mysqli_query($this->con,$sql);
            return $row;
         }
         public function dsndbvh()
         {
             $sql = "SELECT * FROM user where tinhtrang = 0";
             $row = mysqli_query($this->con,$sql);
            return $row;
         }
         public function kpuss($id)
         {
             $kq = "Khôi phục thất bại";
            $sql = "CALL capnhattinhtrang('$id')";
             $row = mysqli_query($this->con,$sql);
             if($row)
             {
                $kq = "Khôi phục thành công";
             }
            return $kq;
         }

    }
 ?>