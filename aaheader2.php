<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="acinema.css">
    <title>Mon Site</title>
</head>
<body>

<div class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">

                <div class="navbar-header">
                    <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span
                                class="icon-bar"></span><span class="icon-bar"></span><span
                                class="icon-bar"></span></button>
                    <img  src="alogoCinema.png" alt="photo logo" width="90px" img-align = "right"/>
                </div>

                <div class="card-header">
                    <img src="panier.png" alt="photo panier" width="20px" id="panier-icon"/>
                    <span id="panier-count">0</span>
                </div>

                <div class="navbar-collapse collapse" id="mobile_menu">
                    <ul class="nav navbar-nav">
                        <li><a href="acine.php">FILMS</a></li>
                        <li><a href="alieuCine.php">CINEMAS</a></li>
                        <li><a href="abooking.php">RESERVATION</a></li>
                    </ul>

                    <ul class="nav navbar-nav">
                        <li>
                            <form action="" class="navbar-form">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="search" name="search" id="" placeholder="Search movies..."
                                               class="form-control">
                                        <span class="input-group-addon"><span
                                                    class="glyphicon glyphicon-search"></span></span>
                                    </div>
                                </div>
                            </form>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">  
                        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span
                                    class="glyphicon glyphicon-log-in"></span> Login / Sign Up <span
                                    class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Sign Up</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
    // JavaScript pour la gestion du panier
    var panierCount = 0;

    // Ajouter un élément au panier
    function addToPanier() {
        panierCount++;
        updatePanierCount();
    }

    // Mettre à jour le nombre d'éléments dans le panier
    function updatePanierCount() {
        var panierCountElement = document.getElementById('panier-count');
        panierCountElement.innerText = panierCount;
    }

    // Ajouter un gestionnaire d'événements pour le clic sur l'icône du panier
    document.getElementById('panier-icon').addEventListener('click', addToPanier);
</script>

</body>
</html>

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
