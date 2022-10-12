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

<!-- Home section start -->
<section class="home" id="home">
    
    <div class="slides-container">

        <div class="slide active">
                <div class="content">
                    <span>Bine ati venit!</span>
                    <h3>Cofetaria Carmen</h3>
                </div>
        <div class="img">
            <img src="img/img1-home.jpg"alt="imaginea 1 home">
        </div>
        </div>
        <div class="slide ">
            <div class="content">
                <span>Prajituri</span>
                <h3>Cofetaria Carmen</h3>
                <a href="prajituri.php" class="btn">Shop now</a>
            </div>
        <div class="img">
        <img src="img_prajituri/snickers.jpg"alt="imaginea 1 home">
        </div>
        </div>

        <div class="slide ">
            <div class="content">
                <span>Torturi</span>
                <h3>Cofetaria Carmen</h3>
                <a href="torturi.php" class="btn">Shop now</a>
            </div>
        <div class="img">
            <img src="img/torturi_aniversare.jpg"alt="imaginea 1 home">
        </div>
        </div>
       
   
    </div>
            <div id="next-slide" class="fas fa-angle-double-right" onclick="next()"></div>
            <div id="prev-slide" class="fas fa-angle-double-left " onclick="prev()"></div>

</section>




<div class="space"></div>
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