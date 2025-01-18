<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['tel']) && isset($_POST['motdepasse'])) {
    $numero = $_SESSION['numero'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tel = $_POST['tel'];
    $motdepasse = $_POST['motdepasse'];
    include "conn.php";
    $sql = "update stagiaires set motdepasse=:motdepasse,  nom=:nom, prenom=:prenom, telephone=:tel where numero=:numero";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam('numero', $numero);
    $stmt->bindParam('nom', $nom);
    $stmt->bindParam('prenom', $prenom);
    $stmt->bindParam('tel', $tel);
    $stmt->bindParam('motdepasse', $motdepasse);
    $r = $stmt->execute();
    if ($r) {
        if ($stmt->rowCount() != 0) {
            header('location:profile.php?update=true');
        } else {
            header('location:profile.php?update=false');
        }
    }
} else {
    header('location:profile.php');
}
