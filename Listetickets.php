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
<h1> Liste des tickets</h1>  
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

  <ul>
  <?php 
  session_start();
  $dbh=new PDO("mysql:host=localhost;dbname=base2","root","root");

  //$login1 = $_SESSION['login'];
  //$pass1 = $_SESSION['pass'];  

  $login1 = $_SESSION['login'];
  $pass1 = $_SESSION['pass'];    
 

  $stmt = $dbh->query("SELECT id_client FROM client WHERE login ='$login1' and pass='$pass1' ");
  
  $client=$stmt->fetch();  

  $id1 = $client['id_client'] ; 
  
  $stmt1 = $dbh->query("SELECT * FROM ticket WHERE id_client ='$id1' ");

  $tickets = $stmt1->fetchAll(PDO::FETCH_ASSOC); 
  $i=1;
  
//   var_dump($tickets); 
?>
 
<div class="col-md-6">
<div> 
<!-- <select class="custom-select" href="tickettries.php">
  <option selected>Tout</option>
  <option value="1" >Ouvert</option>
  <option value="2" >Fermé</option>
  <option value="3" href="tickettries.php"
  >En attente</option>
  <option value="3" href="tickettries.php">Annulé</option>
</select> -->
<!-- <form action="tickettries.php" method="post" >
          <div class="form-group">
             <input type="text" name="trier" id="typeticket"  class="form-control" aria-describedby="emailHelp" placeholder="Etat du ticket">
          </div>
          <div class="col-md-5 text-center ">
          <a class="btn icon-btn btn-warning text-align:left" ><span class="glyphicon btn-glyphicon glyphicon-minus img-circle text-warning"></span>Trier</a>
          </div>  
</form>  -->     
</div>                    
</div>
</div>
                      

    
  <?php foreach ($tickets as $tic ) { 

if($tic['etat']=="ouvert"|| $tic['etat']=="en attente" || $tic['etat']== "ferme" ){?>
  <li>
  <div class="container-fluid" id="As">
  <div class="row  align-items-center">

        <div class="col-md-6">
          <a href="Ticket.php?id_ticket=<?=$tic['id_ticket']?> " class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                           
                            <h5 class="mb-1">Ticket <?= $i ?></h5> 
                            <?php
                            $i++;
                            ?>
                              <!-- <h5 class="mb-1">Ticket 1</h5> -->
                              <small class="text-muted"><?= substr($tic['dateouvert'],0,-7) ?></small>
                            </div>
                            <p class="mb-1">Statut : <?= $tic['etat'] ?></p>                          
                          </a>
  </div>
        </div>
  </div>
  </li>          
      
  <?php 
}
  
 
  }
  ?>  
   <a href="AjoutTicket.php"><button  class="btn btn-primary btn-lg text-left" >Ajouter</button></a> 


  </body>
</html>