<?php
    class taovi extends DB
    {
    public function taovi1($tenvi,$tien,$ngaytao,$loai)
    {
        $kq = 0;
        $ten1 = isset($_SESSION['ten']) ?  $_SESSION['ten']:"2";
        $sql = "CALL taovi('$tenvi','$tien','$ten1','$ngaytao','$loai')";
        if(mysqli_query($this->con,$sql))
        {
            $kq = 1;
        }
            return $tenvi . $tien . $ngaytao .$loai;
    }
    }
?>