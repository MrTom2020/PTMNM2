    <?php
        $page = isset($data['Page']) ? $data['Page']:"";
        require_once "MVC/view/pages/html/".$page.".php";
    ?>