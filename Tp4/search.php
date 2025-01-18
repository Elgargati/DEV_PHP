<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">


</head>

<body>

    <div class="container">
        <h2>Recherche un Article</h2>
        <form action="" method="post">
            <table class="table w-50">
                <tr>
                    <td> <label for="id" class="form-label">ID :</label></td>
                    <td><input class="form-control" name="id" type="number" step="1" placeholder="Search" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input class="btn btn-primary" type="submit" value="Rechercher">
                        <input class="btn btn-danger" type="reset" value="Reinitialiser">
                        <a class="btn btn-secondary" href="index.php"><i class="bi bi-x-octagon-fill"></i><span class="m-1">Annuler</span></a>
                    </td>
                </tr>
            </table>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
            $id = $_POST['id'];
            include "conn.php";
            $sql = "select * from article where id=:id";
            $stmt = $connexion->prepare($sql);
            $stmt->bindParam('id', $id);
            $stmt->execute();
            $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($article);
            if (count($article) == 0)
                echo "<div class='alert alert-danger'>Introvable</div>";
            else {

                echo '<h2 class="h2">Details</h2>';
                echo " <table class='table table-striped w-50' >";
                echo "<tr><td>Id</td><td>" . $article[0]['id'] . "</td></tr>";
                echo "<tr><td>designation</td><td>" . $article[0]['designation'] . "</td></tr>";
                echo "<tr><td>prix</td><td>" . $article[0]['prix'] . "</td></tr>";
                echo "<tr><td>Quantite</td><td>" . $article[0]['quantite'] . "</td></tr>";
                echo "</table>";
            }
        }
        ?>
    </div>
</body>

</html>