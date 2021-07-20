<?php
    class themdichvu extends DB
    {
        public function themdv($tendichv,$loai,$noidung, $tenfile)
        {
            $kk = "Thêm không thành công";
            $sql = "CALL themdichvu('$tendichv','$loai','$noidung', '$tenfile')";
            if(mysqli_query($this->con,$sql))
            {
                $kk = "Thêm thành công";
            }
            return $kk;
        }
    }
?>