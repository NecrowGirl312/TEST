<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Liste des Livres</title>
        <link rel="stylesheet" href="book.css" />
    <body>
        <header>
            <h1>Liste des livres</h1>
        </header>
        
    </body>

    </head>

<?php
include "header.php";


$pdo=connect_bd();


// 1. connect to database avec PDO
//$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');
$query = "SELECT books.*, Author.* FROM books LEFT JOIN Author ON books.idauthor = Author.idauthor";
$statement = $pdo->query($query);
$books = $statement->fetchAll(PDO::FETCH_ASSOC);

//Var_dump($books);

// display specific information from a table
//echo $books [0]['title'];

// display all info (title for example) of a table

echo "<table style='width:40%';>
    <th style='text-align:left';>Title</th>
    <th style='text-align:left';>Author</th>
    <th style='text-align:left';>Years</th>
    <th style='text-align:left';>Price</th>
    <th style='text-align:left';>Options</th>";

// echo "<hr>";
foreach ($books as $book ){
    //echo  "Titre du livre n° :  " .$onebook['title'] . " ". "Année :  " .$onebook['Année'] . "<br/>";
    echo "
    
    <tr>
    <td>
    <a href=book.php?id=$book[idbook]>  ".$book['title']."</a>
    </td>
    <td>
    <a href=book.php?id=$book[idbook]>  ".$book['name']. " ".$book['last_name']."</a>
    </td>
    <td>
    <a href=book.php?id=$book[idbook]> ".$book['years']."</a>
    </td>
    <td>
    <a href=book.php?id=$book[idbook]> ".$book['price']."</a>
    </td>
    <td>
    <a href=createbook.php?id=$book[idbook]>Add </a> </br>
    <a href=deletebook.php?id=$book[idbook]>Delete </a> 
    </td>
    
        ";
}
echo "</tr>
</table>";
?>