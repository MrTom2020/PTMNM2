<?php
    class modelcon extends DB
    {
     public function getname()
         {
             $sql = "SELECT * FROM user";
             $rows = mysqli_query($this->con,$sql);
             $mang = array();
             while($row = mysqli_fetch_array($rows))
             {
                 $mang[] = $row;
             }
           return json_encode($mang);
        }
        public function checkus($un)
        {
            $kq = "bạn có thể đặt tên tài khoản";
            $sql = "SELECT * FROM user where username='$un'";
            $rowss = mysqli_query($this->con,$sql);

            if(mysqli_num_rows($rowss) > 0)
            {
                $kq = "Đã Có người đặt tên tài khoản";
            }
            return $kq;
        }
    public function t($un,$pw)
    {
        $kq = 1;
        $sql = "SELECT * FROM user where username='$un' AND password='$pw'";
            $rowss = mysqli_query($this->con,$sql); 
            if(mysqli_num_rows($rowss) > 0)
            {
                $kq = $rowss[0];
            }
            return $kq;
    }
    }
?>