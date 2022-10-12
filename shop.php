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
<!-- headere section start page -->
<?php include 'header.php';?>


<!-- category start -->
<div class="heading">
  <h1>Our Shop</h1>
 </div>

<section class="category">
    
<h1 class="title">Our <span> Category</span>
</h1>

<div class="box-container">
    <a href="cart.php" class="box">
        <img src="img/mac1.jpg" alt=" ">
        <h3>Prajituri</h3>
        </a>
    <a href="#" class="box">
        <img src="img/torturi_aniversare.jpg" alt=" ">
        <h3>Torturi </h3>
    </a>
</div>
</section>

<!--  sectiune_footer -->
<?php include 'section_footer.php';?>
<!---footer--->
        <footer class="footer_2">
<?php include 'footer.php';?>
</footer>
        
    <!-- custom js file link -->
    <script src="main.js"></script>
</body>
</html>