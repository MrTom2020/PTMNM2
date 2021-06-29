<?php
    class taovi extends DB
    {
    public function taovi($tenvi,$tien,$ngaytao,$loai)
    {
        $ten = isset($_SESSION['ten']) ?  $_SESSION['ten']:"";
        $kq = 1;
        $sql2 = "CALL danhsachnguoidung('$ten')";
        $k = mysqli_fetch_array($sql2);
        $sql = "CALL taovi('$tenvi','$tien','$k','$ngaytao','$loai')";
       // $rowss = mysqli_query($this->con,$sql);
        if(mysqli_query($this->con,$sql))
        {
            $kq = 0;
        }
            return $kq;
    }
    }
?>