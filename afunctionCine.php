<?php
//connect to BDD
 function connectCine_bd()
 {
    require_once 'aconnectCine.php';
    $pdo = new \PDO(DSN, USER, PASS);
    return $pdo;
 }

?>