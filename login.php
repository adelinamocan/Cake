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
<body>

<?php
require "conectare.php";
include 'header_conect.php';
$error = 0;
$errorText ="";



if(isset($_POST['emailAdress'])){
$emailAdress = $_POST['emailAdress'];
$password = $_POST['password'];



$result = mysqli_query($conexiune, "SELECT id_users,emailAdress,password FROM users WHERE emailAdress='$emailAdress'");
if (!$result) {
die('Invalid query: ' .mysqli_error());
} else {
$row = mysqli_fetch_assoc($result);
if($row){

    if(password_verify($password,$row['password']))
    {
        session_start();
        $_SESSION['id'] = $row['id_users'];
        $_SESSION['emailAdress'] = $row['emailAdress'];



    header("Location: home.php");
    } else {
    $error = 1;
    $errorText = "Password is not correct.";
    }
    } else { 
        $error = 1;
    $errorText = "User does not exist.";
    }
}

}
?>


<div class="space"></div>

<div class="center">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <div class="txt_field">
        <input type="text" name="emailAdress" required>
            <span></span>
            <label>Email</label>
        </div>
        <div class="txt_field">
        <input type="password" name="password" required>
            <span></span>
            <label>Password</label>
        </div>
        <div class="pass"> <a href="#">Ai uitat parola</a></div>
        <input type="submit" name="submit" value="Login">

        <div class="singup_link">
            Nu aveti un cont <a href="singup.php">Sing_up</a>
        </div>
        <?php 
if($error) { ?>
<p class="text-red"><?php echo $errorText?><p>
<?php } ?>

    </form>

</div>

</footer>
</body>
</html>
