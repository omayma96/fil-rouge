<?php 

$message_send = false;
if(isset($_POST['email']) && $_POST['email'] != ''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

        $name = $_POST['name'];
   
        $subject = $_POST['subject']; 
        $email = $_POST['email'];
        $message = $_POST['message'];
 
    
        $to = "omayma.hajjami@gmail.com";
    
        $body = "";
    
        $body .= "From : ".$name. "\r\n";
        $body .= "Email : ".$email. "\r\n";
        $body .= "Message : ".$message. "\r\n";
    
       mail($to,$subject,$body);
    
        // header("Location: contact.php");

        $message_send = true;
    
    } 

}


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
            <!-- <link rel="stylesheet" href="css/footer.css"> -->
            <link rel="stylesheet" href="css/contact.css">
    
    
    
            <!-- Fin pages css-->
    
            <!--Début FONT -->
            <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
            <!--Fin FONT -->
    
        <title>Omayma Hajjami</title>
    </head>
    <body>
        <?php
            if($message_send):
        ?>
            <h3> Merci pour votre message </h3>

        <?php

        else : 

        ?>
      <!--===============================================Navbar desktop==================================================-->
      <div class="navbar">
            <ul class="nav">
                <li><a class="nav_item" href="index.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-niche-pour-chien-50.png" alt="accueil" ></a></li>
                <li><a class="nav_item" href="propos.html"><img class="nav_item--img" src="maquette/Asset/logo/icons8-compétences-de-développement-30.png" alt="compétences"></a></li>
                <li><a class="nav_item" href="portfolio.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-visible-60.png" alt="portfolio"></a></li>
                <li><a class="nav_item" href="contact.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-contact-d'affaires-50.png" alt="contact"></a></li>
                <li><a class="nav_item" href="admin/login/login.php"><img class="nav_item--img" src="maquette/Asset/logo/icons8-personne-femme-50.png" alt="login"></a></li>
            </ul>
        </div>
      <!--==================================================Fin Navbar desktop========================================= -->

       <!-- Début du text-->
       <div class="contact_image">

        <div class="contact_text">
          
           <h2 class="contact_text_title">Contact</h2>
           
           <p class="contact_text_para">UNE IDéE ? UN PROJET ? N'HéSITEZ PAS à ME CONTACTER</p>
           <div class="container">

    <!--==================================================formulaire de contact ========================================= -->
           <div class="contact_text_info">
            <form class="input-fields" method="POST" action="include/message.php">
                <div class="name"><input type="text" id="name" name="name" placeholder="Votre nom" required/></div>
                <div class="email"><input type="email" id="email" name="email" placeholder="Address email" required/></div>
                <div class="subject"><input type="text" id="subject" name="subject" placeholder="Sujet" required/></div>
                <div class="message"><textarea id="message"  name="message" placeholder="Description de votre projet … Merci de détailler le plus possible votre besoin" required></textarea></div>
                <div class="submit"><input type="submit" class="contact-button" value="ENVOYER VOTRE MESSAGE" required/> </div>
            </form>
        
           <ul>
               <il><a  class="contact_text_reseaux--icon" href="https://www.facebook.com/omaymahajjami1"><img class="contact_text_reseaux--icon" src="maquette/Asset/logo/icons8-facebook-48.png"></a></il>
               <il><a  class="contact_text_reseaux--icon" href="https://www.instagram.com/omaymahajjami/"><img class="contact_text_reseaux--icon" src="maquette/Asset/logo/icons8-instagram-24.png"></a></il>
               <il><a  class="contact_text_reseaux--icon" href="https://www.linkedin.com/in/omayma-hajjami-a57a8217a/"><img class="contact_text_reseaux--icon" src="maquette/Asset/logo/icons8-linkedin-24.png"></a></il>
               <il><a  class="contact_text_reseaux--icon" href="https://github.com/omayma96"><img class="contact_text_reseaux--icon" src="maquette/Asset/logo/icons8-github-2-24.png"></a></il>
               <il><a  class="contact_text_reseaux--icon" href="https://twitter.com/HajjamiOmayma"><img class="contact_text_reseaux--icon" src="maquette/Asset/logo/icons8-twitter-24.png"></a></il>
           </ul>

       </div>
       
       <div class="contact_text_map" id="map">
           
       </div>

   </div>
   <!--Fin du text -->
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
<script>
// let map = google.maps.Map;

function initMap() {
 let map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: 33.990297, lng: -6.736309 },
    zoom: 4
  });
}


    // function initMap() {
    //     var location = {lat:33.990297 , lng:-6.736309 };
    //     var map = new google.maps.Map(document.getElementById("map"),{
    //         zoom: 4, 
    //         center: location
    //     });
        
    // }

</script>
<script defer 
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCoox9ZW1j0e_zOHd33Ovta403Jg6ZWTb8&callback=initMap"></script>

<?php

    endif;
?>
</body>
</html>