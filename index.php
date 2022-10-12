<?php

include 'conectare.php';

session_start();

$type_user = $_SESSION['id_users'];

if(!isset($type_user)){
  // header('location:login.php');
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conexiune, "DELETE FROM `users` WHERE id = '$delete_id'") or die('query failed');
   header('login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="css/admin_style.css">

</head>
<body>
   
<?php @include 'headrer.php'; ?>

<section class="users">

   <h1 class="title">users account</h1>

   <div class="box-container">
      <?php
         $select_users = mysqli_query($conexiune, "SELECT * FROM `users`") or die('query failed');
         if(mysqli_num_rows($select_users) > 0){
            while($fetch_users = mysqli_fetch_assoc($select_users)){
      ?>
      <div class="box">
         <p>user id : <span><?php echo $fetch_users['id_users']; ?></span></p>
         <p>LastName : <span><?php echo $fetch_users['lastName']; ?></span></p>
         <p>firstName : <span><?php echo $fetch_users['lastName']; ?></span></p>
         <p>email : <span><?php echo $fetch_users['emailAdress']; ?></span></p>
         <p>user type : <span style="color:<?php if($fetch_users['type_user'] == 'admin'){ echo 'var(--orange)'; }; ?>"><?php echo $fetch_users['type_user']; ?></span></p>
         <!-- <a href="login.php?delete=<?php echo $fetch_users['id_user']; ?>" onclick="return confirm('delete this user?');" class="delete-btn">delete</a> -->
      </div>
      <?php
         }
      }
      ?>
   </div>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>