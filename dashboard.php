<?php 
session_start();
if(isset($_SESSION['email'])){
    header('location:');
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
        <link rel="stylesheet" href="css/dashboard.css">




        <!-- Fin pages css-->

        <!--Début FONT -->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        <!--Fin FONT -->

    <title>Omayma Hajjami</title>
</head>
<body>
    


<nav class="navbar navbar-dark bg-dark">
    <button class="btn btn-outline-success " type="submit"><a  href="logout.php">Se déconnecter</button>
  </form>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Setup/Edit</span>
          
        </h6>
      
          <li class="nav-item">
            <a class="nav-link" href="?editportfolio=true">
              <span data-feather="archive"></span>
              Edit Portfolio
            </a>
          </li>
          
        </ul>

      
      </div>
    </nav>

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
<?php
    
     if(isset($_GET['editportfolio'])){
      include('portfolio.php');
     } ?>
     
    </main>
  </div>
</div>
</body>
</html>