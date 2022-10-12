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


</header>
<div class="space"></div>
<!-- contact -->
<?php
// Include config file
include 'conectare.php';

//preia valorii din formular in variabile 
if (isset($_POST['trimite'])) {
    //daca s-a efectuat trimiterea formularului
//înregistrăm în baza de date

$nume = $_POST['nume'];
$prenume = $_POST['prenume'];
$email = $_POST['email'];
$mesaj = $_POST['mesaj'];

//inserare in baza de date
$query = "INSERT INTO contact (nume, prenume, email, mesaj)
VALUES ('$nume', '$prenume', '$email', '$mesaj');";
//se conecteaza cu baza de date
$result=mysqli_query($conexiune, $query);
if (!$result) {
    echo "<h2> Eroare! <h2>";
} 
else {

    echo "<h1 class='contact_title'>Mesajul dumneavostra a fost trimis!</h1>";
    echo "<h2 class='contact_title'>Incercam sa va raspundem in scurt timp: ".$nume .$prenume."  </h2>";
    }
}


?>

<section id="contact">
    <div id="mesajul">

        <p id="call"><i class="	fa fa-volume-control-phone"></i> Contacteaza-ma aici</p>
        <form action="contact.php"  method="post" id="contact-forms">
            <input class="c1" type="text" name="nume" class="form-el" placeholder="Nume" required />
            <br>
            <input class="c1" type="text" name="prenume" class="form-el" placeholder="Prenume" required />
            <br>
            <input class="c1" type="email" name="email" class="form-el" placeholder="Email" required />
            <br>
            <textarea name="mesaj" class="form-el" rows="4" placeholder="Mesaj" required></textarea>
            <br>
            <input id="c4" type="submit" name="trimite" value="Trimite">
        </form>
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
