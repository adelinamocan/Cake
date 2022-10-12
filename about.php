<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    </head>
<body>
<!-- headere section start page -->
<?php include 'header.php';?>



<!-- about section start  -->
<div class="heading">
    <h1>About me</h1>
</div>
<section class="about">
<div class="img">
    <img src="img/mac1.jpg" alt ="" >
</div>
<div class="content">
    <h3>About us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde numquam nemo sequi similique! Optio quo saepe, natus perspiciatis ex deserunt voluptatibus recusandae, neque impedit commodi, at et debitis repellendus quas?</p>

    <a href="#" class="btn">read more</a>
</div>
</section>
<section class="gallery">
    <h1 class="title">Our<span>Gallery</span> </h1>
    <div class="box-container">

        <div class="box">
            <img src="img/mac1.jpg" alt="">
            <div class="icons">
                <a href="#" class="fas fa-eye"></a>
                <a href="favorite.php" class="fas fa-heart"></a>
               
            </div>
    </div>
    
    <div class="box">
        <img src="img/mac2.jpg" alt="">
        <div class="icons">
            <a href="#" class="fas fa-eye"></a>
            <a href="#" class="fas fa-heart"></a>
            
        </div>
</div>

<div class="box">
    <img src="img/mac3.jpg" alt="">
    <div class="icons">
        <a href="#" class="fas fa-eye"></a>
        <a href="#" class="fas fa-heart"></a>
        
    </div>
</div>

    </div>
</section>

<div class="heading">
    <h1>Client's review</h1>
</div>
<section class="info-container">

    <div class="info">
        <img src="img/icons1.jpg" alt="">
        <div class="content">
            <h3>Delivery</h3>
            <span>Fast delivery</span>
        </div>
    </div>

    <div class="info">
        <img src="img/icons2.jpg" alt="">
        <div class="content">
            <h3> Available 24/7</h3>
            <span>Call</span>
        </div>
    </div>
    <div class="info">
        <img src="img/icons3.jpg" alt="">
        <div class="content">
            <h3>Easy payments</h3>
            <span>Cash or card</span>
        </div>
    </div>
</section>

<!--  sectiune_footer -->
<?php include 'section_footer.php';?>

<!-- footer -->       
        <footer class="footer_2">
<?php include 'footer.php';?>
</footer>
    <!-- custom js file link -->
    <script src="main.js"></script>
</body>
</html>