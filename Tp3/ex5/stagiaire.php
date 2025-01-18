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
    $numero = "";
    $nom = "";
    $prenom = "";
    $telephone = "";
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['numero'])) {
        $numero = $_POST['numero'];
        include "conn.php";
        $sql = 'select * from stagiaires where numero=:numero';
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam('numero', $numero);
        $stmt->execute();
        $stagiaire = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($stagiaire) > 0) {
            // var_dump($stagiaire);
            $numero = $stagiaire[0]['numero'];
            $nom = $stagiaire[0]['nom'];
            $prenom = $stagiaire[0]['prenom'];
            $telephone = $stagiaire[0]['telephone'];
        } else {
            // var_dump($stagiaire);
            $numero = $_POST['numero'];
            $nom = "not found";
            $prenom = "not found";
            $telephone = "not found";
        }
    }
    ?>

    <div class="d-flex justify-content-center align-items-center flex-wrap vh-100">
        <form action="" method="post" class="bg-primary w-50 p-3 rounded-5">
            <h2 class="text-center fw-bold text-uppercase text-white">Recherche un stagiaire</h2>
            <div class="d-flex align-items-center m-4">
                <label class="form-label fw-bold text-uppercase mx-3 w-25 text-white" for="numero">numero :</label>
                <input class="form-control rounded-5" type="number" step="1" name="numero" id="numero" value="<?php echo $numero; ?>">
                <input class="btn btn-outline-light bg-danger w-75 m-2 fw-bold" type="submit" value="recherche">
            </div>
            <div class="d-flex align-items-center m-4">
                <label class="form-label fw-bold text-uppercase mx-3 w-25 text-white" for="nom">nom
                    :</label>
                <input class="form-control rounded-5" type="text" name="nom" id="nom" value="<?php echo $nom; ?>" readonly>
            </div>
            <div class="d-flex align-items-center m-4">
                <label class="form-label fw-bold text-uppercase mx-3 w-25 text-white" for="prenom">prenom :</label>
                <input class="form-control rounded-5" type="text" name="prenom" id="prenom" value="<?php echo $prenom; ?>" readonly>
            </div>
            <div class="d-flex align-items-center m-4">
                <label class="form-label fw-bold text-uppercase mx-3 w-25 text-white" for="telephone">telephone :</label>
                <input class="form-control rounded-5" type="text" name="telephone" id="telephone" value="<?php echo $telephone; ?>" readonly>
            </div>
        </form>
    </div>


</body>

</html>