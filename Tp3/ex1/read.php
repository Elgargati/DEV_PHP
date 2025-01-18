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
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include "conn.php";
        $sql = 'select * from produits';
        $stmt = $connexion->prepare($sql);
        $stmt->execute();
        $produits = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    ?>
    <div>
        <h2 class="text-center">les produits</h2>
        <table class="table table-striped table-hover w-75 m-auto ">
            <tr>
                <th>Nom</th>
                <th>description</th>
                <th>prix</th>
            </tr>
            <tbody>
                <?php
                if (count($produits)) {
                    foreach ($produits as $s) {
                ?>
                        <tr>
                            <td><?php echo $s['nom'] ?></td>
                            <td><?php echo $s['description'] ?></td>
                            <td><?php echo $s['prix'] ?></td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="3">auccun produits</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>