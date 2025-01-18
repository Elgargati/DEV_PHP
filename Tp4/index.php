<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">

    <script>
        function Delete() {
            return confirm('Voulez-vous supprimer cet article ?')
        }
    </script>
</head>

<body>
    <?php
    if (isset($_GET['supp'])) {

        $supp = $_GET['supp'];
        if ($supp == 'true')
            echo "<div class='alert alert-success container mt-1'>Article supprimer avec success</div>";
        else  if ($supp == 'false')
            echo "<div class='alert alert-danger container mt-1'>Aucun Article supprimer</div>";
    }
    if (isset($_GET['insert'])) {
        $insert = $_GET['insert'];
        if ($insert == 'true')
            echo "<div class='alert alert-success container mt-1'>Article cree avec success</div>";
        else  if ($insert == 'false')
            echo "<div class='alert alert-warning container mt-1'>Aucun Article cree</div>";
    }
    ?>


    <div class="container ">
        <h1 class=" text-primary">Liste Des Articles</h1>
        <div>
            <a class="btn btn-success m-2 " href="create.php"><i class="bi bi-database-fill-add"></i><span class="m-1">Create un article</span> </i></a>
            <a class="btn btn-warning m-2 text-white" href="search.php"><i class="bi bi-search"></i><span class="m-1">Recherche un article</span></a>
        </div>

        <?php
        include("conn.php");
        try {
            $sql = "select * from article order by id";
            $stmt = $connexion->prepare($sql);
            $stmt->execute();
            $article = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($article);
        ?>
            <table class="table table-striped  table-bordered text-center ">
                <tr class="bg-info">
                    <th>ID</th>
                    <th>Desigantion</th>
                    <th>Prix</th>
                    <th>Quantite</th>
                    <th class="w-25">Action</th>

                </tr>
                <tbody>
                <?php
                foreach ($article as $e) {
                    echo "<tr>";
                    echo "<td>" . $e["id"] . "</td>";
                    echo "<td>" . $e["designation"] . "</td>";
                    echo "<td>" . $e["prix"] . " Dh</td>";
                    echo "<td>" . $e["quantite"] . "</td>";
                    echo nl2br('<td class=" d-flex justify-content-around">

                    <a class="  m-1" href="show.php?id=' . $e["id"] . '"><i class="bi bi-eye-fill fs-3 text-primary "></i></a>
                    
                    <a class="  m-1"  href="edit.php?id=' . $e["id"] . ' &designation=' . $e["designation"] . ' &prix=' . $e["prix"] . ' &quantite=' . $e["quantite"] . '"><i class="bi bi-pencil-fill fs-3 text-warning"></i></a>
                    <a class="  m-1" id="b1" onclick="Delete()" href="delete.php?id=' . $e["id"] . '"><i class="bi bi-trash3-fill fs-3 text-danger"></i></a> 
                    
                    ');
                }
            } catch (PDOException $ex) {
                $ex->getMessage();
            }
                ?>
                </tbody>
            </table>
            <!-- <i class="bi bi-4-square  text-danger" style="font-size: 50px;"></i> -->
            <!-- <i class="bi bi-calendar-check fs-1"></i> -->

            <!-- <a class="  m-1" id="b1" onclick="Delete()" href="delete.php?id=' . $e["id"] . '"><i class="bi bi-trash3-fill fs-3 text-danger"></i></a> -->

            <!-- echo nl2br("<form class='d-inline' action='delete.php' method='post'>
                    <input type='hidden' name='id' value=" . $e['id'] . ">
                    <input class='btn btn-primary' type='submit' value='Delete'>
                    </form> </td>");
                    echo "</tr>"; -->
    </div>







    <!-- <script src="script.js"></script> -->
</body>

</html>