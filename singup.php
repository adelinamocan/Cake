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
//nu exista eroare
$error=0;
$errorText=" ";


//preia valorii din formular in variabile 
if (isset($_POST['submit'])) {
    //daca s-a efectuat trimiterea formularului
//înregistrăm în baza de date

$lastName = $_POST['lastName'];
$firstName = $_POST['firstName'];
$password = $_POST['password'];
//criparea parolei
$password=password_hash($password, PASSWORD_DEFAULT);
header('Location: login.php');
$emailAdress =$_POST['emailAdress'];
//inserare in baza de date
try{
$query = "INSERT INTO users (lastName,firstName,emailAdress,password)
        VALUES ('$lastName', '$firstName', '$emailAdress', '$password')";
//se conecteaza cu baza de date
$result=mysqli_query($conexiune, $query);
if (!$result) {
    echo '<script>alert("Invalid")</script>';
              } 
        else {
            echo '<script>alert("Ai fost inregistrat!")</script>';
              }
            }
catch(Exception $e){
    // exista eroare
    $error=1;
    $errorText="Acest utilizator exista deja!";
}
}
mysqli_close($conexiune);
?>
<div class="space"></div>

<div class="center">
    <h1>Register</h1>
    <form action="singup.php" method="post">
        <div class="txt_field">
            <input type="text" name="lastName" required>
            <span></span>
            <label for="firstName">Nume</label>
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
        <input type="submit" name="submit" value="Submit">
        <div class="singup_link">
            <a href="login.php">Login</a>
        </div>
        <?php 
if($error) { ?>
<p class="text-red"><?php echo $errorText?><p>
<?php } ?>
    </form>
</div>

</body>
</html>