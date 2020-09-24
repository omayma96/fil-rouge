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
<body >         
        

        

            <!--Navbar desktop-->
            <div class="navbar1">
            <ul class="nav1">
                <li><a class="nav1_item" href="index.php"><img class="nav1_item--img" src="maquette/Asset/logo/icons8-niche-pour-chien-50.png" alt="accueil" ></a></li>
                <li><a class="nav1_item" href="propos.html"><img class="nav1_item--img" src="maquette/Asset/logo/icons8-compétences-de-développement-30.png" alt="compétences"></a></li>
                <li><a class="nav1_item" href="portfolio.php"><img class="nav1_item--img" src="maquette/Asset/logo/icons8-visible-60.png" alt="portfolio"></a></li>
                <li><a class="nav1_item" href="contact.php"><img class="nav1_item--img" src="maquette/Asset/logo/icons8-contact-d'affaires-50.png" alt="contact"></a></li>
                <li><a class="nav1_item" href="admin/login/login.php"><img class="nav1_item--img" src="maquette/Asset/logo/icons8-personne-femme-50.png" alt="login"></a></li>
            </ul>
        </div>
            <!--Fin Navbar desktop -->
            <div class="portfolio_text" id="wrap"> 
       
      
                   
                <h2 class="portfolio_text_title">Projets</h2>
         
        <section id="portfolio" class="portfolio section-bg">
            <div class="container">


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
                                
                                <a href="img/<?=$data5['projectpic']?>" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus">voir</i></a>
                                <a href="<?=$data5['projectlink']?>" target="_blank" title="Visit <?=$data5['projectname']?>"><i class="bx bx-link">visiter</i></a>
                               
                        
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

</body>
</html>