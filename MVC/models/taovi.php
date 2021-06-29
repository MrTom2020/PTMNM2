<?php
    class taovi extends DB
    {
    public function taovi1($tenvi,$tien,$ngaytao,$loai)
    {
       $kk = isset($_SESSION['iduu']) ? $_SESSION['iduu']:"";
        $kq = 0;
       $ten1 = isset($_SESSION['ten']) ?  $_SESSION['ten']:"2";
       $sql = "CALL taovi('$tenvi','$tien','$kk','$ngaytao','$loai')";
       mysqli_query($this->con,$sql);
       return $ten1;
    }
    }
?>