<nav>
        <?php include_once('menu_main/menu.php'); ?>
   </nav>
   <section style="height:80vh;">
     <?php 
       $Page2 = isset($data['Page2']) ? $data['Page2']:"";
      include_once('chart/'.$Page2.'.php'); 
     ?>
   </section>
   <section style="width:50vw;float:right;margin-top:-75vh;">
   <?php 
      $Page = isset($data['Page1']) ? $data['Page1']:"";
      include_once('baocao/'.$Page.'.php');
       ?>
       <?php  $dataa = isset($_SESSION['Page3']) ? $_SESSION['Page3']:NULL;
	while($row = mysqli_fetch_array($dataa))
	{
		echo $row[1];
	}
	?>
   </section>