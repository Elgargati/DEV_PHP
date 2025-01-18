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
    $sql = "select salle from examens";
    $stmt = $connexion->prepare($sql);
    $stmt->execute();
    $salles = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $salle = [];
    foreach ($salles as $s) {
        array_push($salle, $s['salle']);
    }
    // var_dump($salle);
    ?>
    <div>
        <form action="" method="post" class="d-flex justify-content-center mt-4">
            <select class="form-select w-50 mx-3" name="salle" id="salle">
                <option value="">choisir une salle</option>
                <?php
                foreach ($salle as $e) {
                    if ($e == $_POST['salle'])
                        echo "<option value='$e' selected>$e</option>";
                    else
                        echo "<option value='$e'>$e</option>";
                }
                ?>
            </select>
            <input class="btn btn-success" type="submit" value="recherche">
        </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['salle'])) {
        $salle = $_POST['salle'];
        $sql = 'select * from examens where salle=:salle';
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam('salle', $salle);
        $stmt->execute();
        $examens = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($examens);
    }
    if (count($examens) > 0) {

    ?>
        <table class="table  table-hover table-bordered w-75 m-auto mt-3">
            <tr class="bg-info">
                <th>id</th>
                <th>date</th>
                <th>type</th>
            </tr>
            <tbody>
                <?php
                foreach ($examens as $e) {
                    echo "<tr>";
                    echo "<td>" . $e['id'] . "</td>";
                    echo "<td>" . $e['date'] . "</td>";
                    echo "<td>" . $e['type'] . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
        echo "<div class='alert alert-danger w-50 m-auto text-center mt-4'>Choisir un salle</div>";
    } ?>

</body>

</html>