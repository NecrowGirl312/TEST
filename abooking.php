<?php
$pdo = new \PDO('mysql:host=localhost;dbname=cinema' , 'root' , '');

include "aaheader2.php";

?>

<body>

    <h1>Réservation</h1>

    <div class="film-details">
        <h2>Nom du film</h2>
        <p>Synopsis du film...</p>

        <form action="process_reservation.php" method="post">
            <label for="nombre_billets">Nombre de billets :</label>
            <input type="number" name="nombre_billets" id="nombre_billets" min="1" required>

            <!-- Intégrer ici le plan interactif de la salle de cinéma avec les sièges -->

            <button type="submit" class="btn btn-primary mt-3">Réserver</button>
        </form>
    </div>
</div>

</body>

</html>

<?php
include "afooterCine.php";
?>
