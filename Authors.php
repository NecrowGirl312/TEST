<?php
include "header.php";

$pdo=connect_bd();

//$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

$query = "SELECT * FROM Author";
$statement = $pdo->query($query);
$Authors = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($Authors);


// afficher toutes infos (titre par ex) d'un tableau
echo "<hr>";
foreach ($Authors as $Author ){
    //echo  "last_name:  " .$authors['last_name'] . "<br/>";
    
    //URL : Author.php?id=" .$Author['idAuthor'].";
    echo "
    <hr> 
   

    <a href=Author.php?id=$Author[idAuthor]>Author : ".$Author['name']."</a>";
}











?>