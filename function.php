<?php
//connect to BDD
 function connect_bd()
 {
    require_once 'connect.php';
    $pdo = new \PDO(DSN, USER, PASS);
    return $pdo;
 }

//1. crééz une fonction qui affiche hello
function displayhello() {
   echo "Hello" . "<br/>";
}

//2. crééz une fonction qui retourne un age
function getage() {
   $age = 42;
   return $age;
   
}

//3.crééz une fonction qui affiche hello suivi du prénom en parametre de la fonction.
function displayhHellol($lastname) {
   echo "Hello" . " " . $lastname;
}

//4. Crééz une fonction qui permet de recuperer les données des tables book , author et Library
function getRow($table, $idcolumn, $id) {

   $pdo=connect_bd();
   $query = "SELECT * FROM $table WHERE $idcolumn = :myId ";
   $statement = $pdo->prepare($query);
    // definie ":myid"
    $statement->bindValue(':myId', $id, \PDO::PARAM_INT);
    // execute
    $statement->execute();    
   $array = $statement->fetchAll(PDO::FETCH_ASSOC);
   return $array;
}
function deleteRow($table , $id)
{
    // 1 connect to D.B.
    $pdo=connect_bd();

    // connect to db
    //$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

    // query
    $query = "DELETE FROM $table where id=:myId";
    // query prepare with PDO 
    $statement = $pdo->prepare($query);
    // definie ":myid"
    $statement->bindValue(':myId', $id, \PDO::PARAM_INT);
    // execute
    $statement->execute();    
}






//Get data from table



?>