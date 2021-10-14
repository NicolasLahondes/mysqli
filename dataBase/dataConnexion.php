<?php

$dbBooks = "localhost";
$dbUsername = "root";
$dbPassword = "nevolepasmesdonnéescindy";
$dbName = "mysqlphplink";

// $conn = mysqli_connect($dbBooks,$dbUsername,$dbPassword,$dbName);

try {
    //Setting bdd connexion
    $bddConn = new PDO("mysql:host=$dbBooks;dbname=$dbName", $dbUsername, $dbPassword);
    // If error generate exception
    $bddConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Get the idea of error
    echo $e->getCode();
    // Display entire error msg
    die('Erreur :' . $e->getMessage());
}
