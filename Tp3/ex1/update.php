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
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['description']) && isset($_POST['prix'])) {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $description = $_POST['description'];
        $prix = $_POST['prix'];
        include "conn.php";
        $sql = "update produits set nom=:nom, description=:description, prix=:prix where id=:id";
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->bindParam('nom', $nom);
        $stmt->bindParam('description', $description);
        $stmt->bindParam('prix', $prix);
        $stmt->execute();
        if ($stmt->rowCount() != 0) {
            echo "produit bien modifier";
        } else {
            echo "auccun modification";
        }
    }

    ?>
</body>

</html>