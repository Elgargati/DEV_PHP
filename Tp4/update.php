<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])  && isset($_POST['designation']) && isset($_POST['prix']) && isset($_POST['quantite'])) {
    include "conn.php";
    try {
        $id = $_POST['id'];
        $designation = $_POST['designation'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];


        $sql = "update article set designation=:designation, prix=:prix, quantite=:quantite where id=:id";
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->bindParam('designation', $designation);
        $stmt->bindParam('prix', $prix);
        $stmt->bindParam('quantite', $quantite);

        $r = $stmt->execute();
        if ($r)
            if ($stmt->rowCount() != 0) {
                header("location:show.php?id=$id&update=true");
            } else {
                header("location:show.php?id=$id&update=false");
            }
    } catch (PDOException $e) {
        $e->getMessage();
    }
} else {
    header('location:index.php');
}
