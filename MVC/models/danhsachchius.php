<?php
    class danhsachchius extends DB
    {
        public function dschi($id)
        {
            $sql = "CALL dachsachchi('$id')";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
    
       
    }
?>