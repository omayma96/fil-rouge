<?php include('./include/db.php'); 

?>
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
   
            <link rel="stylesheet" href="css/portfolio.css">
            
    
    
            <!-- Fin pages css-->
    
            <!--Début FONT -->
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

            <!--Fin FONT -->
    
        <title>Omayma Hajjami</title>
    </head>
<body>         
        

        

            <!--Navbar desktop-->
            <div class="navbar">
                <ul class="nav">
                    <li><a class="nav_item" href="index.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-niche-pour-chien-50.png" alt="accueil" ></a></li>
                    <li><a class="nav_item" href="propos.html"><img class="nav_item--img" src="maquette/Asset/logo/icons8-compétences-de-développement-30.png" alt="compétences"></a></li>
                    <li><a class="nav_item" href="portfolioo.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-visible-60.png" alt="portfolio"></a></li>
                    <li><a class="nav_item" href="contact.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-contact-d'affaires-50.png" alt="contact"></a></li>
                    <li><a class="nav_item" href="login.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-personne-femme-50.png" alt="login"></a></li>
                </ul>
            </div>
            <!--Fin Navbar desktop -->
            <div class="portfolio_text"> 
       
      
                    <!-- <a href="propos.html"><img class="portfolio_text_img--g" src="maquette/Asset/logo/back_arrow_5821.png"></a>
                    <a href="contact.html"><img class="portfolio_text_img--d" src="maquette/Asset/logo/forwardarrow_haciaadelante_4836.png"></a>
                    -->
                <!-- <h2 class="portfolio_text_title">Projets</h2>
                <div class="main">
                
<div id="myBtnContainer" >
    <button class="btn active" onclick="filterSelection('all')"> Tout</button>
    <button class="btn" onclick="filterSelection('html')"> Html/css </button>
    <button class="btn" onclick="filterSelection('js')"> Javascript</button>
    <button class="btn" onclick="filterSelection('php')"> Php</button>
    <button class="btn" onclick="filterSelection('wp')"> Wordpress</button>
  </div>
                <div class="portfolio_text_projets row">

                    <div class="column wp">
                        <img class="portfolio_text_projets--p1" src="maquette/Asset/projet/site houseLuxy.PNG">
                    </div>
                    
                    <div class="column html">
                        <a href="projet1.html"><img class="portfolio_text_projets--p2" src="maquette/Asset/projet/Site hypernova.PNG"></a>
                    </div>
                   
                    <div class="column js">
                        <img class="portfolio_text_projets--p3" src="maquette/Asset/projet/site covid.PNG">
                    </div>
                   
                    <div class="column wp">
                        <img class="portfolio_text_projets--p4" src="maquette/Asset/projet/site knowmaroc.PNG">

                    </div>
            </div>
        </div> -->
        <section id="portfolio" class="portfolio ">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                </div>


                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">

                   <?php
                    $query5 = "SELECT * FROM portfolio";
$runquery5= mysqli_query($db,$query5);
while($data5=mysqli_fetch_array($runquery5)){
    ?>
                  <div class="col-lg-4 col-md-6 portfolio-item">
                        <div class="portfolio-wrap">
                            <img src="img/<?=$data5['projectpic']?>" class="img-fluid" alt="">
                            <div class="portfolio-links" title="<?=$data5['projectname']?>">
                                
                                <a href="img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                                <a href="<?=$data5['projectlink']?>" target="_blank" title="Visit <?=$data5['projectname']?>"><i class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                                <?php
}
                    ?>
                    

                    
                       

                </div>

            </div>
        </section>

    </div>
         <!--Début des projets -->


            <!-- Fin des projets -->

            <i id="burger" class="material-icons" onclick="burger()">menu</i>
            <i id="quit" class="material-icons" onclick="quit()">fermer</i>
            
              <div id="links">
                   <a href="index.html">Home</a>
                   <a href="propos.html">A propos de moi</a>
                   <a href="portfolio.html">Portfolio</a>
                   <a href="contact.html">Contact</a>
              </div>
    
              
            <!--Fin menu burger-->
            
            
<script type="text/javascript" src="js/burger.js"></script>
<script type="text/javascript" src="js/filtrer.js"></script>


</body>
</html>