<?php   
    //session_start();
    //session_unset();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de restauration 3ilienne">

    <!-- CSS -->
    <!--link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"-->
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="img/3illogo.png">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dancing+Script|Pacifico|Raleway&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <title>3ilShop</title>
    
</head><?php
     include('Navbar.php');
     ?>
<body id="haut">
<div class="container-fluid" id="As">
  <div class="row  align-items-center my-4">
    <div class="col-md-6">
        <a href="#liste1" class="list-group-item list-group-item-action active ">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Ticket n1</h5>
            <small>Envoyé il y a 3 jours</small>
          </div>
          <p class="mb-1">Statut:envoyé/traité/supprimé</p>
         
        </a>
        <a href="#liste2" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Ticket n2</h5>
            <small class="text-muted">Envoyé il y a 3 jours</small>
          </div>
          <p class="mb-1">Statut:envoyé/traité/supprimé</p>
          
        </a>
        <a href="#liste3" class="list-group-item list-group-item-action">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">Ticket n3</h5>
            <small class="text-muted">Envoyé il y a 3 jours</small>
          </div>
          <p class="mb-1">Statut:envoyé/traité/supprimé</p>
          
        </a>
      </div>
      <div class="col-md-6 ">
        <!------------------------>
          
          <!------ Include the above in your HEAD tag ---------->

         
          <a class="btn icon-btn btn-success" href="#Ajoutlist"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Ajouter un incident</a>
          <a class="btn icon-btn btn-warning" href="#Deletelist"><span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>Supprimer un incident</a>
          
          
 <!------------------------>

   </div> 
</div>       
 </div>
</body>
</html>