<?php
include "header.php";

var_dump($_GET);
//pour acceder à une cellule du tableau
echo $_GET['id'];

//Le 08-23_2023 
//1. Connect to DB
//$pdo = new \PDO('mysql:host=localhost;dbname=book' , 'root' , '');

//Query : SELECT * FROM book where id=$id;
/* ne jamais utiliser cela car pas sécurisé
$query = "SELECT * FROM book where id=$id";
$statement = $pdo->query($query);
$book = $statement->fetch(PDO::FETCH_ASSOC);
*/
$id=$_GET['id'];
//query with id
$query = "SELECT * FROM books where idbook=:myId";
//query prepare with PDO
//$statement = $pdo->prepare($query);
//definie ":myid"
//$statement->bindValue(':myId' , $id, \PDO::PARAM_INT );
// execute
//$statement->execute();
//get data
//$books = $statement->fetch(PDO::FETCH_ASSOC);

$book=getRow("books" , "idbook", $id);
//var_dump($book);



echo "ID : " . $book[0]['idauthor'] . "<br>".
     "Title :  " . $book[0]['title'] . "<br>".
     "Description :  " . $book[0]['description'] . "<br>";

?>