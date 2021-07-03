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
        public function danhsachvi()
        {
            $kk = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
            $sql = "SELECT * FROM vi where Userid='$kk'";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
        public function ds()
         {
             $sql = "SELECT * FROM user where tinhtrang != 0 and loai != 5";
             $row = mysqli_query($this->con,$sql);
            return $row;
         }
    public function t($un,$pw)
    {
        $kq = 1;
        $sql = "SELECT * FROM user where username='$un' AND password='$pw'";
            $rowss = mysqli_query($this->con,$sql); 
            $r =  mysqli_fetch_array($rowss);
            if($r)
            {
                $_SESSION['iduu'] = $r[0];
                $kk = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
                $sql1 = "SELECT * FROM thongbao where Userid='$kk' and loai ='1' and tinhtrang = '1' ";
                $sql2 = "SELECT * FROM thongbao where loai ='2' ";
                $row1 = mysqli_query($this->con,$sql1);
                $row2 = mysqli_query($this->con,$sql2);
                $_SESSION['tbcnn'] = $row1;
                $_SESSION['tbchung'] = $row2;
                $kq = $r[11];
            }
            return $kq;
    }
    }
?>