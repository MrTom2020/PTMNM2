<?php
    class danhsachdv extends DB
    {
        public function dsdvu()
        {
            $sql = "SELECT * FROM  dichvu";
            $row = mysqli_query($this->con,$sql);
            return $row;
        }
    
       
    }
?>