<?php
$pdo = new \PDO('mysql:host=localhost;dbname=cinema' , 'root' , '');
include "aaheader2.php";
?>

    <section>   
         <div class="card-body">
                <a href="https://www.pathe.fr/films" class="text-white" >Tous les films à l'affiche</a>
        </div>
        </section>  

        <section>
            <div class="image-container" >
                <img src="Avenger.png" alt="Avengers :Engame" >
                <img src="TR.png" alt="Tokyo Revengers" >
                <img src="Avatar.jpg" alt="Avatar" >
                <img src="Hunger Game.png" alt="Hunger Game" >
            </div>          
         </section>    

         



<?php
include "afooterCine.php";
?>
