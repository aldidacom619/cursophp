<?php 
include 'conexion.php';
$id = $_GET['id'];
echo $id;
   
   $del = $con->prepare("DELETE FROM productos WHERE id = ? ");
   $del->bind_param("i",$id);

   if($del->execute())
   {
      header("location:index.php");
   }
   else
    {
       echo "no guardo";
    }
    $del->close();
    $con->close();

 
 

?>
