<?php
require_once 'config.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv ="X-UA-Compatible" content= "IE=edge">
  <link rel="stylesheet" href="styles.css">

  <title>Créer un site e-commerce</title>
</head>
<body>

    <nav>
    <div class="nav-content">
        <div class="logo">
                <a href="landing.php"> <img src="img/pngwing.com-ConvertImage.png" alt="logo du site"></a>
            </div>
            <ul class="nav-links">
                    <li><a href="carte.html">Nos carte graphique</a></li>
                    <li><a href="carte.php">Commander une carte</a></li>
                    <li><a href="deco.php">Deconnexion</a></li>
                <a href="connexion.php"> <img src="img/istockphoto-1209654046-170667a-ConvertImage (1).jpg" alt="Connexion"></a>
            </ul>
        </div>
    </nav> 
    <div id="container" class="form">
            <!--commande-->
                <form action="commande.html" method="POST" >
                    <h1>Commande</h1>
                    
                    <label><b>carte:</b></label> 
                    <select name="id_carte" id="select-carte">
                        <option value="">Choisisez votre carte</option>
                        <option value="1">ASUS GeForce ROG STRIX RTX 3070 O8G WHITE V2 (LHR) </option>
                        <option value="2">ASUS ROG Strix LC GeForce RTX 3090 Ti OC Edition O24G GAMING</option>
                        <option value="3">ASUS TUF RX 6800 XT O16G GAMING</option>
                        <option value="4">ASUS GeForce GTX 1650 TUF-GTX1650-O4GD6-P-GAMING</option>
                        <option value="5">ASRock Radeon RX 6500 XT Challenger ITX 4GB</option>
                        <option value="6">EVGA GeForce RTX 3070 Ti FTW3 ULTRA (LHR)</option>
                        
                    </select>
                    
                    <input type="submit"  id="submit" value="Commander">

                </form>
            
        </div>
   
</body>
</html>