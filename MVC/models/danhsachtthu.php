<?php
    class danhsachtthu extends DB
    {
        public function dsthu($id)
        {
            $sql = "CALL dachsachthu('$id')";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
    
       
    }
?>