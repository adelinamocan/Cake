<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <title>Cart</title>  
    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">
    </head>
    <body>  

<?php   
//initializarea sesiunii
 session_start();  
 include 'conectare.php';
 //preia valorii din formular in variabile 
 if(isset($_POST["add_to_cart"]))  
 { 
     
      if(isset($_SESSION["shopping_cart"]))  
      {
           //seteaza in item id  valoarea din shopping cart
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
          //verifica daca acel id este in array
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                //afiseaza meniul ca si alert-script
                echo '<script>alert("Produsul a fost adaugat in cosul de cumparaturi")</script>';  
                //revine la pagina cart.php
                echo '<script>window.location="cart.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     //sterge datele de sesiune 
                     unset($_SESSION["shopping_cart"][$keys]);  
                     //afiseaza mesajul 
                     echo '<script>alert("Produsul a fost sters cu succes")</script>';  
                     echo '<script>window.location="cart.php"</script>';  
                }  
           }  
      }  
     }
  
 ?>
   
   <?php include 'header.php';?>
          <div class="wrapper">
          <a href="search.php"  id="search"><img src="search.png" alt="Logo" width="25" height="25"></a> 
           <h1 class="praji">Produse</h1><br /> 

           <div class="container_cart"> 
                
                <?php  
                //creeaza interogarea pentru a citii informatiile 
                $query = "SELECT * FROM prajituri_imagine ORDER BY price ASC";  
                //executa interogarea
                $result = mysqli_query($conexiune, $query);  
                //verifica daca a fost returnat vre-un rand
                if(mysqli_num_rows($result) > 0)  
                {  
                     while($row = mysqli_fetch_array($result))  
                     {  
                ?>  
               
                
                <div class="cart">  
                     <form method="post" action="cart.php?action=add&id= <?php echo $row["id"]; ?>">  
                          <div id="style">  
                               <img src="<?php echo $row["image"]; $id_prod = $row['id']; ?>" class="img-cart" />
                               <div>  
                               <h4 ><?php echo $row["name"]; ?></h4>  
                               <h4>$ <?php echo $row["price"]; ?></h4>  
                               <input type="text" name="quantity" class="form-control" value=" " />  
                               <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />  
                               <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
                               <input type="submit" name="add_to_cart" id="cos" class="btn" value="Add to Cart" />

                               <?php if($_SESSION['emailAdress'] == 'admin') { ?>
                             <p><a class="btn" href="stergere.php?id=<?php echo $id_prod ?>"> Remove </a> </p> 
                               <?php } ?>
                           </div>
                          </div>  
                     </form>  
                </div>  
                <?php  
                     }  
                }  
                ?>  
              <div class="space"></div> 
                <br />  
               </div>  
               
               <h1 class="praji">Cos de cumparaturi</h1>
               <div >  
                    <table >  
                         <tr>  
                              <th width="40%">Nume</th>  
                              <th width="10%">Cantitate</th>  
                              <th width="20%">Pret</th>  
                              <th width="15%">Total</th>  
                              <th width="5%">Action</th>  
                         </tr>  
                         <?php   
                         if(!empty($_SESSION["shopping_cart"]))  
                         {  
                              $total = 0;  
                              foreach($_SESSION["shopping_cart"] as $keys => $values)  
                              {  
                         ?>  
                         <tr>  
                              <td align="center"><?php echo $values["item_name"]; ?></td>  
                              <td align="center"><?php echo $values["item_quantity"]; ?></td>  
                              <td align="center">$ <?php echo $values["item_price"]; ?></td>  
                              <td align="center">$ <?php echo number_format((float)$values["item_quantity"] * (float)$values["item_price"], 2); ?></td>  
                              <td align="center"><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>">
                              <span class="text-danger">Remove</span></a></td>  
                         </tr>  
                         <?php  
                         
                                   $total = $total+((float)$values["item_quantity"]  * (float)$values["item_price"]);  
                                  }     
                         ?>  
                         <tr>  
                              <td colspan="3" class="total">Total</td>  
                              <td align="right">$ <?php echo number_format($total, 2); ?></td>  
                              <td></td>  
                         </tr>  
                         <?php  
                         }  
                         ?>  
                    </table>  
               </div>  
           <br />  
                    </div>
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


