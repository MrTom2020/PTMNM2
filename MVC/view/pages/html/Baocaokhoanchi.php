<nav>
        <?php include_once('menu_main/menu.php'); ?>
   </nav>
   <section style="height:80vh;">
     <?php include_once('chart/chart_pie.php'); ?>
   </section>
   <section style="width:50vw;float:right;margin-top:-75vh;">
   <?php 
      $Page = isset($data['Page']) ? $data['Page']:"";
      include_once('baocao/'.$Page.'.php');
       ?>
   </section>