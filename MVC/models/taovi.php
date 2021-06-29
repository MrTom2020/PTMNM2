<?php
    class taovi extends DB
    {
    public function taovi1($tenvi,$tien,$ngaytao,$loai)
    {
        $ten1 = isset($_SESSION['ten']) ?  $_SESSION['ten']:"2";
       // $kq = 1;
       // $sql2 = "CALL danhsachnguoidung('$ten1')";
       // $resut1 = mysqli_query($conn,$sql2);
       // if($resut1)
        {
        //    $k = mysqli_fetch_array($resut1);
            $kq = 1;
        }
        //$sql = "CALL taovi('$tenvi','$tien','$k','$ngaytao','$loai')";
       // $rowss = mysqli_query($this->con,$sql);
        //if(mysqli_query($this->con,$sql))
            return $kq;
    }
    }
?>