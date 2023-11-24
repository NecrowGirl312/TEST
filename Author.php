<?php
var_dump($_GET);
//pour acceder à une cellule du tableau
echo $_GET['id'];

$pdo = new \PDO('mysql:host=localhost;dbname=book' , 'root' , '');

$id=$_GET['id'];
$query = "SELECT * FROM Authors where idAuthor=:myId";
$statement = $pdo->prepare($query);
$statement->bindValue(':myId' , $id, \PDO::PARAM_INT );
$statement->execute();
$Author = $statement->fetch(PDO::FETCH_ASSOC);

var_dump($Author);


?>