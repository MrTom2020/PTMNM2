<?php
    class taovi extends DB
    {
    public function taovi($tenvi,$tien,$userid,$ngaytao,$loai)
    {
        $kq = 1;
        $sql = "CALL taovi('$tenvi','$tien','$userid','$ngaytao','$loai')";
            $rowss = mysqli_query($this->con,$sql);

            if(mysqli_num_rows($rowss) > 0)
            {
                $kq = 0;
            }
            return $kq;
    }
    }
?>