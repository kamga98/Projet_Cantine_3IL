<?php
    
    ?>

<!-- Required meta tags -->
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 <meta name="description" content="Site de restauration 3ilienne">

 <!-- CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link rel="stylesheet" href="Style.css">
 <link rel="shortcut icon" href="img/3illogo.png">
 <link href="https://fonts.googleapis.com/css?family=Anton|Pacifico|Raleway&display=swap" rel="stylesheet">
 <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
 <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
 <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">


<!------ Include the above in your HEAD tag ---------->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Site de restauration 3ilienne">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="shortcut icon" href="img/3illogo.png">
    <link href="https://fonts.googleapis.com/css?family=Anton|Dancing+Script|Pacifico|Raleway&display=swap" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>3ilShop</title>
</head>


<!------ Include the above in your HEAD tag ---------->
<body id="haut">
<?php
     include('Navbar.php');
     ?>
<div class="container" id="contactbox" >
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nom d'utilisateur</label>
                            <input type="text" class="form-control" id="Username" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Sujet</label>
                            <select id="sujet" name="sujet" class="form-control" required="required">
                                <option value="na" selected="">Choisissez</option>
                                <option value="service">Panne de service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Autres</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Envoyer</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Our office</legend>
            <address>
                <strong>3il Shop</strong><br>
                43 Rue Sainte-Anne<br>
                Limoges,France 87000<br>
                
            </address>
            <address>
                <!--strong--><!--/strong--><!--br-->
                <a href="mailto:#">galamol@3il.fr</a>
            </address>
            </form>
        </div>
    </div>
</div>
</body>

</html>


