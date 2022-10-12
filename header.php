<?php
echo '
<header class="header">
    <a href="home.php" class="logo"><i class="fas fa-shopping-basket"></i>Cake</a>
    <nav class="navbar">
        <a  href="home.php" title="Home"> Home </a>
        <a  href="shop.php" title="Shop"> Shop </a>
         <a href="about.php" title="About">About</a>
         <a href="contact.php" title="Contact">Contact</a>
         <a href="cart.php" ><div class="fas fa-shopping-cart "></div></a>
         <a href="login.php"> <div id="	fas fa-user-alt" class="fas fa-user-alt"></div></a>
    
    </nav>

    <div class="dropdown">
        <img src="menu.png" class="menu-icon" alt="menu-icon" onclick="myFunction()"> </img>
        <a href="cart.php" ><img src="cart.png" class="menu-icon" alt="menu-icon" > </img></a>
        <a href="login.php" ><img src="login.png" class="menu-icon" alt="menu-icon" > </img></a>
        <div id="myDropdown" class="dropdown-content" onclick="hideFunction()">
        <a  href="home.php" title="Home"> Home </a>
        <a  href="shop.php" title="Shop"> Shop </a>
         <a href="about.php" title="About">about</a>
         <a href="contact.php" title="Contact">Contact</a> 
      </div>
    </div>
</header>
'
?>