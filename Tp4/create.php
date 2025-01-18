<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">

</head>
<div class="container">
    <h2>Creer un nouvel article</h2>
    <form action="" method="post">
        <table class="table w-50">
            <tr>
                <td>designation</td>
                <td><input class="form-control" name="designation" id="designation" type="text" required></td>
            </tr>
            <tr>
                <td>Prix</td>
                <td><input class="form-control" name="prix" id="" type="number" step="0.01" required></td>
            </tr>
            <tr>
                <td>Quantite</td>
                <td><input class="form-control" name="quantite" type="number" step="1" required></td>
            </tr>
            <tr>
                <td colspan="2" class="">
                    <input class="btn btn-primary" type="submit" value="Creer un article">
                    <input class="btn btn-danger " type="reset" value=" Reinitialiser">
                    <a class="btn btn-secondary" href="index.php"> <i class="bi bi-x-octagon-fill"></i><span class="m-1">Annuler</span></a>
                </td>
            </tr>
        </table>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['designation']) && isset($_POST['prix']) && isset($_POST['quantite'])) {

        $designation = $_POST['designation'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        // var_dump($designation);
        // var_dump($prix);
        // var_dump($quantite);
        include "conn.php";
        $sql = "insert into article (designation,prix,quantite) values (:designation,:prix,:quantite)";
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam('designation', $designation);
        $stmt->bindParam('prix', $prix);
        $stmt->bindParam('quantite', $quantite);
        $article = $stmt->execute();
        if ($article)
            header("location:index.php?insert=true");
        else
            header("location:index.php?insert=false");
    }
    ?>
</div>

<body>

</body>

</html>