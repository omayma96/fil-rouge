

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--icon de site-->
        <link rel="icon" type="image/png" href="img/profil.png"/>
        <!-- fin icon-->

        <!-- Début pages css -->
        <link rel="stylesheet" href="css/header.css">

        <!-- Fin pages css-->

        <!--Début FONT -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!--Fin FONT -->

    <title>Omayma Hajjami</title>
</head>
<body>

    
    <!--=======================================Début Header============================================--->
   

        <!--===================================Navbar desktop==========================================-->
        <div class="navbar">
            <ul class="nav">
                <li><a class="nav_item" href="index.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-niche-pour-chien-50.png" alt="accueil" ></a></li>
                <li><a class="nav_item" href="propos.html"><img class="nav_item--img" src="maquette/Asset/logo/icons8-compétences-de-développement-30.png" alt="compétences"></a></li>
                <li><a class="nav_item" href="portfolio.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-visible-60.png" alt="portfolio"></a></li>
                <li><a class="nav_item" href="contact.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-contact-d'affaires-50.png" alt="contact"></a></li>
                <li><a class="nav_item" href="admin/login/login.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-personne-femme-50.png" alt="login"></a></li>
            </ul>
        </div>
        <!--==================================Fin Navbar desktop -======================================-->



    <!-- =====================================Début du text==============================================-->
        <div class="hero_image">

             <div class="hero_text">
           
                    <h2 class="hero_text_title">Je suis <strong class="hero_text_title--name" id="text"></strong><br>une développeuse web Full Stack</h2>
                    <a class="hero_text_button" href="contact.php">Contactez moi</a> 

                    <ul class="hero_text_reseaux">
                        <il><a  class="hero_text_reseaux--icon" href="https://www.facebook.com/omaymahajjami1"><img class="hero_text_reseaux--icon" src="maquette/Asset/logo/icons8-facebook-48.png"></a></il>
                        <il><a  class="hero_text_reseaux--icon" href="https://www.instagram.com/omaymahajjami/"><img class="hero_text_reseaux--icon" src="maquette/Asset/logo/icons8-instagram-24.png"></a></il>
                        <il><a  class="hero_text_reseaux--icon" href="https://www.linkedin.com/in/omayma-hajjami-a57a8217a/"><img class="hero_text_reseaux--icon" src="maquette/Asset/logo/icons8-linkedin-24.png"></a></il>
                        <il><a  class="hero_text_reseaux--icon" href="https://github.com/omayma96"><img class="hero_text_reseaux--icon" src="maquette/Asset/logo/icons8-github-2-24.png"></a></il>
                        <il><a  class="hero_text_reseaux--icon" href="https://twitter.com/HajjamiOmayma"><img class="hero_text_reseaux--icon" src="maquette/Asset/logo/icons8-twitter-24.png"></a></il>
                    </ul>
            </div> 
  
    <!--========================================Fin du text===================================================-->



      <!--=============================================== Fin Header=======================================--->

              <!-- ======================================Menu burger=======================================-->

              <i id="burger" class="material-icons" onclick="burger()">menu</i>
              <i id="quit" class="material-icons" onclick="quit()">fermer</i>
              
                <div id="links">
                     <a href="index.html">Home</a>
                     <a href="propos.html">A propos de moi</a>
                     <a href="portfolio.html">Portfolio</a>
                     <a href="contact.php">Contact</a>
                </div>
      
            </div> 
              <!-- ======================================Fin menu burger=====================================-->
              

<script type="text/javascript" src="js/burger.js"></script>
<script type="text/javascript" src="js/typing.js"></script>

    
</body>
</html>