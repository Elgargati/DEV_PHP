<?php
$host = 'localhost';
$database = 'mydbtp3';
$user = 'root';
$password = '';
try {
    $connexion = new PDO("mysql:host=$host;dbname=$database", $user, $password);
    // echo 'bien';
} catch (PDOException $e) {
    $e->getMessage();
}
