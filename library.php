<?php
include "header.php";
$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');
/*
displayhello();
displayhHellol( 'Stana');
echo getage();
*/

/*
//creation tableau
$library=[
    0 => [
        "id"=> 1,
        "name"=>"Stana",
        "laste_name"=>"AYANNE"
    ],

    1 =>[
        "id"=> 2,
        "name"=>"Stelly",
        "laste_name"=>"AYANNE"
    ],

    2=> [
        "id"=> 3,
        "name"=>"Nelly",
        "laste_name"=>"AYANNE"
    ]

    ];


echo $library[0]['id'];
var_dump($library);

echo "<hr>";
foreach ($library as $onelibrary){
echo  "name :  " .$onelibrary['name']  . "<br/>";
}
*/

$pdo=connect_bd();

//$pdo = new \PDO('mysql:host=localhost;dbname=book', 'root', '');

$query = "SELECT * FROM library";
$statement = $pdo->query($query);
$library = $statement->fetchAll(PDO::FETCH_ASSOC);

var_dump($library);


// afficher toutes infos (titre par ex) d'un tableau
echo "<hr>";
foreach ($library as $bookstores ){
    //echo  "last_name:  " .$authors['last_name'] . "<br/>";
    
    //URL : Author.php?id=" .$Author['idAuthor'].";
    /*
    echo "
    <hr> 
   

    <a href=bookstores.php?id=$library[idlibrary]>bookstores : ".$bookstores['name']."</a>";

    */
}






?>