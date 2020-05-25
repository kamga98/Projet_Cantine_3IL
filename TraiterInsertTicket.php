<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>3ilShop</title>
  </head>
  <body id="haut">
  
<?php 

    
    session_start();         
    $dbh =new PDO("mysql:host=localhost;dbname=base2","root","root");

    
    $login1 = $_SESSION['login'];
    $pass1 = $_SESSION['pass']; 
    
    
    date_default_timezone_set('Europe/Paris');

    //$date = date("d-m-Y"); $heure = date("H:i");

    $date = date('d-m-y h:i:s');
      

    $stmt = $dbh->query("SELECT id_client FROM client WHERE login ='$login1' and pass='$pass1' ");
    
    $client=$stmt->fetch();                    
  
    $id1 = $client['id_client'] ;        

    if( isset($_POST['messag']) ){

      
      
    $requete = $dbh->prepare("INSERT INTO ticket(id_ticket, messag, etat, reponse, dateouvert, dateferm, id_client)
                              VALUES(?, ?, ?, ?, ?, ?, ?)");
     $requete->execute(array(NULL, $_POST['messag'],"ouvert" , 
     NULL,$date, NULL, $id1));

     var_dump($_POST['messag']);  
     var_dump($id1);  

     if( $requete ){
       var_dump("L'insertion a réussi");  
     }
     else{
      var_dump("Echec de l'insertion");
     }
 
     var_dump($date); 
     
    }
    else{
      var_dump("Rien à afficher");    
    }

    
  // l'insertion marche mais il faut pouvoir insérer les bonnes valeurs 
  // l'identifiant est mis à jour automatiquement (id_ticket) 
  // ça dit avoir insérer mais quand on vérifie y'a R 
  
  

?>        

           
   </form>                    
  </body>
</html>
    

