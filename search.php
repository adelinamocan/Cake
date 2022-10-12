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

        include 'conectare.php';
        include 'header.php';

    ?>
    
	
	
    	<section id="main">

    		<article >
                <form action="search.php" id="cautare" method="post">
                   <div class="form-group">
                    <label for="caut">Căutare produs:</label>
                    <input type="text" name="caut" class="searchText" value="" >
</div>
                    <input type="submit" name="submit" value="caută">

                </form>
    		</article>

            <?php
                if (isset($_POST['submit'])) {

                    $termen_cautare = $_POST['caut'];
                    $query = "SELECT * FROM produse WHERE produs_name LIKE '%" . $termen_cautare . "%'";
                    $rezultat = mysqli_query($conexiune, $query) or die ('Eroare');
                    $nr_rezultate = mysqli_num_rows($rezultat);

                    if ($nr_rezultate == 0) {
                        echo "<h2>Căutarea nu a produs rezultate.</h2>";
                    } else {
            ?>

                    <article class="from-article">
            			<header>
            				<h2>Rezultate căutare</h2>
            			</header>
                        <p><strong>Am găsit <?php echo $nr_rezultate;?> rezultate</strong></p>
                         <?php
                            while ($row = mysqli_fetch_assoc($rezultat)) {
                                echo "<hr class=\"short\">";
                                echo "<p>Id: " . $row['id_produs'] . "</p>";
                                echo "<p>Denumire produs: " . $row['produs_name'] . "</p>";
                                echo "<p>Descriere: " . $row['produs_den'] . "</p>";
                                echo "<p>Poza: <img id='img_search' src='" . $row['produs_img'] . "   ' /> </p>"; 
                            }
                         ?>
                       
            		</article>

            <?php
                    }
                }
            ?>
    	</section>
                <!--  sectiune_footer -->
<?php include 'section_footer.php';?>
<!-- footer -->
        <footer class="footer_2">
<?php include 'footer.php';?>
</footer>
	<script src="main.js"></script>
</body>
</html>
