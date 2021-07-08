<?php
    class bctvc extends DB
    {
        public function bc($ID)
        {
            $kq = "A hu hu";
            $ID = 105;
            $sql = "CALL baocaotongquan('$ID')";
            $row = mysqli_query($this->con,$sql);
            if($row)
            {
                while ($row2 = $row -> fetch_row())
                {
                    $kq ="Tên ". $row2[0]. "giá trị ". $row2[1]. "Ngày tạo ".$row2[2]. "Danh mục ".$row2[3]. "Loại ví ".$row2[4];
                }
               // $kq = "A1111 hu hu";
                // while($row1 = mysqli_fetch_array($row))
                // {
                //     $kq = $row[1];
                // }
            }
            return $kq;
        }
    }
 ?>