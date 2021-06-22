<?php
  $Page = isset($data['Page']) ? $data['Page']:"";
   require_once "MVC/view/pages/html/".$Page.".php";
?>