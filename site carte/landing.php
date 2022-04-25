<?php 
    session_start();
    require_once 'config.php'; // ajout connexion bdd 
   // si la session existe pas soit si l'on est pas connecté on redirige
    if(!isset($_SESSION['user'])){
        header('Location:index.php');
        die();
    }

    // On récupere les données de l'utilisateur
    $req = $bdd->prepare('SELECT * FROM utilisateurs WHERE token = ?');
    $req->execute(array($_SESSION['user']));
    $data = $req->fetch();
   
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Espace membre</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
    <script type="javascript" src=""></script>
    </head>
  <body>

      <!-- Barre de navigation -->
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
    <section class="home"></section>
  
  <!-- Fin de la barre de navigation -->
  
  <!-- Header -->
   <header>
     <h1>Bienvunue sur notre site de carte graphique</h1>
    </header>
  <!-- Fin du header -->
  
  <!-- Section principale -->
  <section class="main">
    
    <!-- Toutes les cartes -->
    
    <div class="cards">
      
        <div class="card">
          <img src="https://www.mencorner.com/media/produits/geforce-rtx-3060-8g-gaming-v2.jpg">
          <div class="card-header">
            <h4 class="title">GeForce RTX 3080 Ti </h4>
            <h4 class="price">1749.99 €</h4>
          </div>
          <div class="card-body">
            <p>Asus GeForce RTX 3080 Ti TUF O12G GAMING (LHR) </p>
          </div>
        </div>
        
        <div class="card">
          <img src="https://media.ldlc.com/r300/ld/products/00/05/85/03/LD0005850356_1.jpg">
          <div class="card-header">
            <h4 class="title"> GeForce RTX 3060 O12G </h4>
            <h4 class="price">599.95 €</h4>
           
          </div>
          <div class="card-body">
              <p>ASUS DUAL GeForce RTX 3060 O12G (LHR) </p>
            </div>
        </div>
        
        <div class="card">
          <img src="https://media.ldlc.com/r1600/ld/products/00/05/85/04/LD0005850435_1.jpg">
          <div class="card-header">
            <h4 class="title"> GeForce RTX 3060 O12G GAMING V2 </h4>
            <h4 class="price">589.96€</h4>
          </div>
          <div class="card-body">
            <p> ASUS TUF GeForce RTX 3060 O12G GAMING V2 (LHR)</p>
          </div>
        </div>
        
       </div>
      <!-- Fin de toutes les cartes -->
    
    <!-- Video de presentation -->
    <div class="video">
      <iframe src="https://www.youtube.com/embed/MEtK828ZRNs" allowfullscreen></iframe>
    </div>
    <!-- Fin de la video de presentation -->
  </section>
  <!-- Fin de la section principale -->
  
  <!-- Pied de page -->
  <footer>
    <div class="social-media">
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
      <p><i class="fab fa-instagram"></i></p>
      <p><i class="fab fa-linkedin-in"></i></p>
    </div>
  </footer>
  <!-- Fin du pied de page -->
  
    <script>
        let nav = document.querySelector("nav");
        window.onscroll = function() {
            if(document.documentElement.scrollTop > 20){
            nav.classList.add("sticky");
            }else {
            nav.classList.remove("sticky");
            }
        }
        </script>
    </body>
</html>
