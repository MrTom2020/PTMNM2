<?php
    class testbc extends DB
    {
        public function testt()
        {
            $dataPoints = array( );
            for($k = 0; $k < 100;$k++)
            {
              array_push($dataPoints,array("label"=>"Chrome", "y"=>$k));
            }
            return $dataPoints;
        }
    }
?>