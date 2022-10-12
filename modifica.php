<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    </head>
<body>


<?php
// Include config file
include 'conectare.php';
//include 
include 'header_conect.php';


if(isset($_POST['update'])){
   $id_users=$_POST['id_users'];
   $password=password_hash($_POST['password'], PASSWORD_DEFAULT);

   $query=" UPDATE  users 
   SET
      lastName='$_POST[lastName]',
      firstName='$_POST[firstName]',
      emailAdress='$_POST[emailAdress]',
      password='$password'
   
      WHERE  id_users='$_POST[id_users]'";
      $result=mysqli_query($conexiune, $query);
        if($result){
         echo '<script>alert("Data Update")</script>';  
       }
       else{
         echo '<script>alert("Eroare!")</script>';  
       }
}

mysqli_close($conexiune);


?>

<div class="center">
    <h1>Update to register</h1>
    <form action="modifica.php" method="post">
    <div class="txt_field">
            <input type="text" name="id_users" required>
            <span></span>
            <label for="id_users">Id-ul</label>
        </div>
        <div class="txt_field">
            <input type="text" name="lastName" required>
            <span></span>
            <label for="lastName">Nume</label>
        </div>
        <div class="txt_field">
            <input type="text"  name="firstName" required>
            <span></span>
            <label for="firstName">Prenume</label>
        </div>
        <div class="txt_field">
            <input type="text"  name="emailAdress" required>
            <span></span>
            <label for="emailAdress">Email</label>
        </div>
        <div class="txt_field">
            <input type="password"  name="password" required>
            <span></span>
            <label for="psw">Password</label>
        </div>
        <input type="submit" name="update" value="Update">
        <div class="singup_link">
      
        </div>
    </form>
</div>


</body>
</html?
