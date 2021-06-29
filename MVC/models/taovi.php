<?php
    class taovi extends DB
    {
    public function taovi1($tenvi,$tien,$ngaytao,$loai)
    {
        $ten1 = isset($_SESSION['ten']) ?  $_SESSION['ten']:"2";
       // $kq = 1;
        $sql2 = "CALL danhsachnguoidung('$ten')";
        $resut1 = mysqli_query($conn,$sql2);
        $k = mysqli_fetch_array($resut1);
        //$sql = "CALL taovi('$tenvi','$tien','$k','$ngaytao','$loai')";
       // $rowss = mysqli_query($this->con,$sql);
        //if(mysqli_query($this->con,$sql))
        {
            $kq = $k[0];
        }
            return $kq;
    }
    }
?>