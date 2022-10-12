<?php 

       include "conectare.php";
       
$id = $_GET['id'];

$sql= "DELETE FROM prajituri_imagine  WHERE id = $id";
if(mysqli_query($conexiune, $sql)){
//     echo "Records were updated successfully.";
echo '<script>alert("Produs sters")</script>';
header("Refresh:0; url=cart.php");
} else {
   echo '<script>alert("Invalid")</script>';
}
?>

