<?php 
include 'conexion.php';

$id = $_GET['id'];

$del = $con -> prepare("DELETE FROM productos WHERE id = ? ");
$del->bind_param("i",$id);

if ($del->execute()) {
    header("location:index.php");
}else{
    echo "no elimina";
}

$del->close();
$con->close();

?>