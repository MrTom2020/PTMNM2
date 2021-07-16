<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <title>Trang chủ</title>
</head>
<body>
<?php
     $Page = isset($data['Page']) ? $data['Page']:"";
    require_once "MVC/view/pages/html/".$Page . ".php";
        ?>
<folder>
    <?php include_once('MVC/view/pages/html/folder/folder.php') ?>
</folder>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://quanlychitieu2030.herokuapp.com/MVC/view/pages/js/sendata.js" crossorigin="anonymous"/>
</body>
</html>