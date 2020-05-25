<?php  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!-- CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="img/3illogo.png">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dancing+Script|Pacifico|Raleway&display=swap" rel="stylesheet">
    
    <title>3ilShop</title>
</head>
<body>
<header>
          
          <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                  <!--a class="navbar-brand" href="#haut"--><!--/3ilSHOPa-->
                  <a class="navbar-brand" href="#haut">
                      <img src="img/3illogo.png" alt="Logo 3ilSHOP">3ilSHOP
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="choix.php">Connexion<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="Menu.php">Page d'accueil </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="Menu.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Menu
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="Boissons.php">Choix des boissons </a>
                          <a class="dropdown-item" href="Viennoiseries.php">Viennoiseries</a>
                          <a class="dropdown-item" href="Sandwich.php">Sandwich</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="Panier..php">Panier</a>
                        </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="Listetickets.php" >Contact </a>
                          <!--a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"--><!--/a-->
                      </li>
                      <li class="nav-item">
                              <a class="nav-link" href="Avis.php">Avis</a>
                             
                          </li>
                    </ul>
                  </div>
          </nav>
        </header>
        
        <!----form-->
        <form action="TraiterInsertTicket.php" method="post" >
              <div class="col-md-6">
                <div class="well well-sm">
                  
                  <fieldset>
                    <legend class="text-align:left"><h1 color:white >Nouvel incident</h1></legend> 
                    
                    <!-- Name input-->
                   <!--  <div class="form-group">
                      <label class="col-md-3 control-label text-align:left color:blue" for="name"> <h5>Nom d'utilisateur</h5> </label>
                      <div class="col-md-9">
                        <input id="name" name="name" type="text" placeholder="Your name" class="form-control">
                      </div>
                    </div> -->
            
                    
                    
                         <!--    <div class="col-md-9">
                            <select id="sujet" name="sujet" class="form-control" required="required">
                                <option value="na" selected="">Choisissez</option>
                                <option value="service">Incidents</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Autres</option>
                            </select>
                            </div> -->
                       

                    <!-- Message body -->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="message"> <h5>Message</h5></label>
                      <div class="col-md-9">
                        <textarea class="form-control" id="message" name="messag" placeholder="Entrer votre incident" rows="5"></textarea>
                      </div>
                    </div>
                    <button  class="btn btn-primary btn-lg text-left" >Ajouter</button>
                    
</form>

<!-- <a href="Listetickets.php"><button  class="btn btn-primary btn-lg " >Retour</button></a> -->

</body>
</html>