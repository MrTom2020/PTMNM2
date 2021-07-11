<?php 
    class Controller
    {
        public function model($model)
        {
              require_once "MVC/models/" .$model. ".php";
              return new $model;
        }
        public function view($view,$data =[],$data2=[])
        {
            require_once("MVC/view/".$view.".php");
        }

    }
?>