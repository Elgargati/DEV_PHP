<?php
$host = "localhost";
$database = "mydata";
$user = "root";
$password = "";

try {
    $connexion = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // echo "Connexion bien établie<br>";
} catch (PDOException $e) {
    echo "Erreur!!!";
}
