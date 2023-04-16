<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion facturation</title>
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" >
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;400;500;600;700;800&display=swap" 
    rel="stylesheet">
</head>
<body>
     <!-- Start Header -->
     <div class="header">
        <div class="container">
          <h3>Gestion facturation</h3>
          <div class="links">
              <!-- <i class="fa-solid fa-bars"></i> -->
              <i class="fa-solid fa-bars toggel-menu"></i>

            <ul>
              <li><a href="#services">Accueil</a></li>
              <li><a href="#portfolio">Products</a></li>
              <li><a href="#about">sales</a></li>
              <li><a href="#contact">facture</a></li>
              <li><a href="#contact">list</a></li>
              <li><a href="./includes/logout.inc.php">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Header --> 
    
      <!-- start produit -->
      <div class="produit">
        <div class="container">
        <div class="text">
        <h3>list de produit</h3>
            <h4><a href="./produit.php">New Produit</a></h4>
            <a href="produit.php" class="getion-produit">gestion de produit</a>
        </div>
        </div>
      </div>


      <!-- end produit -->
</body>
</html>