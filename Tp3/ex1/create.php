<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Tp3/EX/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix'])) {
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        include "conn.php";

        $sql = "insert into produits (nom,description,prix) values (:nom,:description,:prix)";
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam('nom', $nom);
        $stmt->bindParam('description', $description);
        $stmt->bindParam('prix', $prix);
        $r = $stmt->execute();
        if ($r)
            echo "<div class='alert alert-success text-center mt-4 w-50 m-auto'>produit bien ajouter</div>";
        else
            echo "<div class='alert alert-success text-center mt-4 w-50 m-auto'>Produit no ajouter</div>";
    }
    ?>
</body>

</html>