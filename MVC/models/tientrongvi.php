<?php
    class tientrongvi extends DB
    {
        public function ttv($ID)
        {
            $sql2 = "CALL phantramcuavius('$ID')";
            $row2 = mysqli_query($this->con,$sql2);
            return $row2;
         }
    }
 ?>