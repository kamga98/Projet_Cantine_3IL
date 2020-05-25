<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de restauration 3ilienne">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="img/3illogo.png">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dancing+Script|Pacifico|Raleway&display=swap" rel="stylesheet">
    
    <title>3ilShop</title>
  </head>  
  <body id="haut">   
  <!-- <h1> Liste des tickets</h1>  -->
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

  </header>
<?php 
  session_start();
  $dbh=new PDO("mysql:host=localhost;dbname=base2","root","root");

  //$login1 = $_SESSION['login'];
  //$pass1 = $_SESSION['pass'];  

  $login1 = $_SESSION['login'];
  $pass1 = $_SESSION['pass'];    
 

  $stmt = $dbh->query("SELECT id_client FROM client WHERE login ='$login1' and pass='$pass1' ");
  
  $client=$stmt->fetch();  

 // $id1 = $client['id_client'] ; 

  $id1 =  $_GET["id_ticket"] ; 

  var_dump($_GET["id_ticket"]); 
  
  $stmt1 = $dbh->query("SELECT * FROM ticket WHERE id_ticket ='$id1' ");

  var_dump($stmt1);

  $tic = $stmt1->fetch(); 
  $i=1;
 
  
//   var_dump($tickets); 

  //foreach ($tickets as $tic ) {?>          

 
                <div class="well well-sm">
                  <form class="form-horizontal" action="Listetickets.php" method="post">
                  <fieldset>
                    <legend class="text-align:left"><h1 color:white >Ticket </h1></legend> 
                    
                    <!-- ouverture-->
                    <div class="form-group">
                      <label class="col-md-3 control-label text-align:left color:blue" for="opened"> <h5>Date d'envoi</h5> </label>
                      <div class="col-md-9">
                        <input id="name" name="name" type="text"  class="form-control" disabled placeholder=<?= $tic['dateouvert'] ?>>
                      </div>
                    </div>
            
                    <!-- fermeture-->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="closed"> <h5>Date de fermeture</h5></label>
                      <div class="col-md-9">
                        <input id="email" name="email" type="text" class="form-control" disabled placeholder=<?= $tic['dateferm'] ?>  >
                      </div>
                    </div>

                     <!-- Statut-->
                     <div class="form-group">
                      <label class="col-md-3 control-label" for="email"> <h5>Statut</h5></label>
                      <div class="col-md-9">
                        <input id="email" name="email" type="text" class="form-control"  disabled placeholder=<?= $tic['etat'] ?> >
                      </div>
                    </div>
                    

                    
                    <!-- Message body -->
                    <div class="form-group">
                      <label class="col-md-3 control-label" for="message"> <h5>Message</h5></label>
                      <div class="col-md-9">
                        <textarea class="form-control" id="message" name="message"  rows="5" disabled><?= $tic['messag'] ?> </textarea>
                      </div>
                    </div>
            
                    <!-- Form actions -->
                    <div class="form-group">
                      <div class="col-md-12 ">
                      <button  type="submit" class="btn btn-primary btn-lg " >Retour</button>
                       
                      </div>
                    </div>
                  </fieldset>
                  </form>
                 <!-- <a href="supprimerticket.php?id_ticket=<!?=$tic['id_ticket']?>"><button  class="btn btn-primary btn-lg text-left" >Supprimer</button></a>  -->

                </div>
              
        <!--/div-->
                            <!------ finformcontact---------->

                  
                           
                            <!-- <a class="btn icon-btn btn-success" href="ContactUs.php"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Ajouter un incident</a> -->
                            <!-- <a class="btn icon-btn btn-lg" href="supprimerticket.php"><span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>Supprimer un incident</a> -->
                            <?php 
                            //  }
                              ?>

</body>

</html>