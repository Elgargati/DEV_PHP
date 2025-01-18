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
        <?php
        if (isset($_GET['update'])) {
            $update = $_GET['update'];
            // var_dump($update);
            if ($update == 'true')
                echo '<div class="alert alert-success w-50">Article modifie avec succes </div>';
            else if ($update == 'false')
                echo '<div class="alert alert-warning w-50 ">Aucun modification dans article </div>';
        }

        ?>
        <h2 class="h2 text-primary">Details</h2>
        <?php
        if (isset($_GET['id'])) {
            include "conn.php";
            try {
                $id = $_GET['id'];
                $sql = "select * from article where id=:id";
                $stmt = $connexion->prepare($sql);
                $stmt->bindParam('id', $id);
                $stmt->execute();
                $article = $stmt->fetchAll(PDO::FETCH_ASSOC);


                if (count($article) == 0) {

                    echo '<div class="alert alert-danger">Introvable</div>';
                } else {
                    $id = $article[0]['id'];
                    $designation = $article[0]['designation'];
                    $prix = $article[0]['prix'];
                    $quantite = $article[0]['quantite'];


                    echo " <table class='table table-striped w-50' >";
                    echo "<tr><td>Id</td><td>" . $id . "</td></tr>";
                    echo "<tr><td>designation</td><td>" . $designation . "</td></tr>";
                    echo "<tr><td>prix</td><td>" . $prix . "</td></tr>";
                    echo "<tr><td>Quantite</td><td>" . $quantite . "</td></tr>";
                    echo "</table>";
                }
            } catch (PDOException $e) {
                $e->getMessage();
            }
        } else {
            header('location:index.php');
            // header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        }
        ?>
        <a class="btn btn-primary " href="index.php"><i class="bi bi-arrow-return-right"></i> <span>Roteur a la liste des articles</span></a>
        <?php
        echo "<a class='btn btn-warning  m-1' href='edit.php?id=$id&designation=$designation&prix=$prix&quantite=$quantite'>Modifier</a>";
        echo "<a class='btn btn-danger  m-1' href='delete.php?id=$id'>Supprimer</a>";

        ?>
    </div>
</body>

</html>