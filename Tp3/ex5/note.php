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
    include "conn.php";

    $sqlS = "select numero from stagiaires ";
    $sqlE = "select id from examens";


    $stmtS = $connexion->prepare($sqlS);
    $stmtE = $connexion->prepare($sqlE);

    $stmtS->execute();
    $stmtE->execute();

    $resultatS = $stmtS->fetchAll(PDO::FETCH_ASSOC);
    $resultatE = $stmtE->fetchAll(PDO::FETCH_ASSOC);

    $tableauS = [];
    $tableauE = [];

    foreach ($resultatS as $e) {
        array_push($tableauS, $e['numero']);
    }
    foreach ($resultatE as $e) {
        array_push($tableauE, $e['id']);
    }
    // var_dump($tableauS);
    // var_dump($tableauE);
    ?>
    <div class="mt-5">

        <form action="" method="post">
            <div class="d-flex justify-content-center">
                <label class="form-label mx-3" for="">Examen :</label>
                <select class="form-select w-25" name="id">
                    <option value="*">*</option>
                    <?php
                    foreach ($tableauE as $e) {
                        if ($e == $_POST['id'])
                            echo "<option value='$e' selected>$e</option>";
                        else
                            echo "<option value='$e'>$e</option>";
                    }
                    ?>
                </select>

                <label class="form-label mx-3" for="">Stagiaire :</label>
                <select class="form-select w-25" name="numero">
                    <option value="*">*</option>
                    <?php
                    foreach ($tableauS as $e) {
                        if ($e == $_POST['numero'])
                            echo "<option value='$e' selected>$e</option>";
                        else
                            echo "<option value='$e'>$e</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <input class="btn btn-success w-50 m-auto" type="submit" value="Rechercher">
            </div>
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id']) && isset($_POST['numero'])) {
        $id = $_POST['id'];
        $numero = $_POST['numero'];
        if ($numero != '*' and $id != '*') {

            $sql = "select * from notes where numero=:numero and id=:id ";
            $stmt = $connexion->prepare($sql);
            $stmt->bindParam('numero', $numero);
            $stmt->bindParam('id', $id);
            $stmt->execute();
        } else if ($numero == '*' and $id == '*') {

            $sql = "select * from notes";
            $stmt = $connexion->prepare($sql);
            $stmt->execute();
        } else if ($numero != '*' and $id == '*') {

            $sql = "select * from notes where numero=:numero ";
            $stmt = $connexion->prepare($sql);
            $stmt->bindParam('numero', $numero);
            $stmt->execute();
        } else if ($numero == '*' and $id != '*') {

            $sql = "select * from notes where id=:id ";
            $stmt = $connexion->prepare($sql);
            $stmt->bindParam('id', $id);
            $stmt->execute();
        }
        $resultat = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($resultat);
        if (count($resultat)) {
    ?>
            <table class="table table-bordered table-hover w-75 m-auto mt-3">
                <tr>
                    <th>Stagiaire</th>
                    <th>Examen</th>
                    <th>Note</th>
                </tr>
                <tbody>
                    <?php
                    foreach ($resultat as $e) {
                        echo '<tr>';
                        echo "<td>" . $e['numero'] . "</td>";
                        echo "<td>" . $e['id'] . "</td>";
                        echo "<td>" . $e['note'] . "</td>";
                        echo '</tr>';
                    }
                    ?>
                </tbody>
            </table>
    <?php
        } else {
            echo "<div class='alert alert-danger w-50 m-auto text-center mt-4'>Not found</div>";
        }
    } ?>

</body>

</html>