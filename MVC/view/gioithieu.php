<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
</head>
<body>
    <?php
        $page = isset($data['Page']) ? $data['Page']:"";
        require_once "MVC/view/pages/html/".$page.".php";
    ?>
     <folder>
    <?php include_once('MVC/view/pages/html/folder/folder.php') ?>
    </folder>
</body>
</html>