<?php
include "header.php";

//1. get data from form
var_dump($_POST);
$title=$_POST['title'];
//$description=$_POST['description'];
$years=$_POST['years'];
$author=$_POST['author'];
$price=$_POST['price'];
echo $years . "<br/>";
echo $author . "<br/>";
echo $title . "<br/>";
echo $price . "<br/>";

//2. connect to B.D
$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

//3. save data in B.D (insert into)
$query = "INSERT INTO books (title, idauthor, years, price) 
    VALUES (:title, :Author, :years, :price)";
$statement = $pdo->prepare($query);
$statement->bindValue(':title', $title, \PDO::PARAM_STR);
$statement->bindValue(':Author', $author, \PDO::PARAM_STR);
$statement->bindValue(':years', $years, \PDO::PARAM_STR);
$statement->bindValue(':price', $price, \PDO::PARAM_STR);

$statement->execute();
header('Location:books.php');


//redirect to books.php
//header('location:books.php');

?>