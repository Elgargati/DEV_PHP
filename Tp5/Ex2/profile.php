<?php
session_start();
if (!isset($_SESSION['isloggedin']) || $_SESSION['isloggedin'] != true) {
    header('location:login.php?isConn=false');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>

    <style>
        .cursor-pointer {
            cursor: pointer;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <?php
    $numero = $_SESSION['numero'];
    include("conn.php");
    $sqlS = 'select * from stagiaires where numero=:numero';
    $stmt = $connexion->prepare($sqlS);
    $stmt->bindParam('numero', $numero);
    $stmt->execute();
    $stagiaires = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $stagiaire = $stagiaires[0];
    // var_dump($stagiaire);
    ?>
    <div class="container w-50">
        <div class='container bg-info d-flex justify-content-between align-items-center  p-1 mt-2 rounded-1'>
            <div class='text-white p-2'>
                <h3 class="">bienvenue <?php echo $stagiaire["nom"]; ?></h3>
            </div>
            <a href='deconnecter.php' class='btn btn-danger mx-1'>Se deconnecter</a>
        </div>


        <div class='container p-1'>
            <span class="fs-4"><i id="addition" class="bi bi-dash-square cursor-pointer text-primary"></i> Information personnelles </span>
        </div>

        <div id="informations" class="bg-info m-auto p-2 rounded-1">
            <form action="update.php" method="post" class="text-white">
                <table class="d-flex justify-content-center">
                    <tr>
                        <td><label class="form-label fs-5" for="nom">Nom :</label></td>
                        <td><input class="form-control border-0 rounded-0 bg-gradient" type="text" name="nom" id="nom" value="<?php echo $stagiaire["nom"] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label class="form-label fs-5" for="prenom">Prenom :</label></td>
                        <td><input class="form-control border-0 rounded-0 bg-gradient" type="text" name="prenom" id="prenom" value="<?php echo $stagiaire["prenom"] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label class="form-label fs-5" for="tel">Telephone :</label></td>
                        <td><input class="form-control border-0 rounded-0 bg-gradient" type="tel" name="tel" id="tel" value="<?php echo $stagiaire["telephone"] ?>" required></td>
                    </tr>
                    <tr>
                        <td><label class="form-label fs-5" for="login">Login :</label></td>
                        <td><input class="form-control border-0 rounded-0 bg-gradient" type="text" name="login" id="login" value="<?php echo $stagiaire["login"] ?>" readonly required></td>
                    </tr>
                    <tr>
                        <td><label class="form-label fs-5" for="motdepasse">Mot de passe :</label></td>
                        <td><input class="form-control border-0 rounded-0 bg-gradient" type="text" name="motdepasse" id="motdepasse" value="<?php echo $stagiaire["motdepasse"] ?>" required></td>
                    </tr>
                </table>
                <div class=" w-100 d-flex justify-content-center m-2">
                    <input type="submit" value="Modifier" class="btn btn-primary w-25">
                </div>


            </form>
            <?php
            if (isset($_GET['update'])) {
                if ($_GET['update'] == 'true') {
                    echo nl2br('<div class="w-100 d-flex justify-content-center m-2">
                                        <span class="alert alert-success">Les informations bien modifier </span>
                                </div>');
                } else if ($_GET['update'] == 'false') {
                    echo nl2br('<div class="w-100 d-flex justify-content-center m-2">
                                        <span class="alert alert-warning">Aucun modification </span>
                                </div>');
                }
            }
            ?>
        </div>

        <div class='container p-1'>
            <span class="fs-4"><i id="Soustraction" class="bi bi-dash-square cursor-pointer text-primary"></i> Examens </span>
        </div>
        <?php
        $sqlE = "select id from (stagiaires inner join notes using(numero) ) inner join examens using(id) where numero=:numero";
        $stmt = $connexion->prepare($sqlE);
        $stmt->bindParam('numero', $numero);
        $r = $stmt->execute();
        if ($r) {
            $examens = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($examens);
            $Tsalle = [];
            foreach ($examens as $e) {
                array_push($Tsalle, $e['id']);
            }

        ?>
            <div id="InfoExm" class=" bg-info m-auto p-2 rounded-1">
                <div class='d-flex flex-column justify-content-center align-items-center  p-1'>
                    <table>
                        <tr>
                            <td> <span for="Identifiant" class="form-span">Identifiant :</span></td>
                            <td>
                                <form action="profile.php" method="post" id="formIdentifiant">
                                    <select name="Identifiant" id="Identifiant" class="form-control w-auto m-4">
                                        <option value="">selectioner un examen</option>
                                    <?php
                                    foreach ($Tsalle as $e) {
                                        if (isset($_POST["Identifiant"]) && $e == $_POST["Identifiant"])
                                            echo "<option value='" . $e . "'selected>" . $e . "</option>";
                                        else
                                            echo "<option value='" . $e . "'>" . $e . "</option>";
                                    }
                                }
                                    ?>
                                    </select>
                                </form>
                            </td>
                        </tr>
                    </table>
                    <?php
                    // $salle = "";
                    // $Date = "";
                    // $type = "";
                    // $note = "";
                    // $Meilleure = "";
                    // $Derniere = "";
                    // $Moyenne = "";
                    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['Identifiant'])) {
                        $id = $_POST['Identifiant'];
                        $sqlnote = "select * from (stagiaires inner join notes using (numero)) inner join examens using(id) where numero=:numero and id=:id";
                        $stmtNote = $connexion->prepare($sqlnote);
                        $stmtNote->bindParam('numero', $numero);
                        $stmtNote->bindParam('id', $id);
                        $stmtNote->execute();
                        $stagiaireInfo = $stmtNote->fetchAll(PDO::FETCH_ASSOC);
                        // var_dump($stagiaireInfo);
                        $salle = $stagiaireInfo[0]['salle'];
                        $Date = $stagiaireInfo[0]['Date'];
                        $type = $stagiaireInfo[0]['type'];
                        $note = $stagiaireInfo[0]['note'];


                        $sqlMaxN = "select max(note) from (stagiaires inner join notes using (numero)) inner join examens using(id) where numero=:numero ";
                        $sqlMinN = "select min(note) from (stagiaires inner join notes using (numero)) inner join examens using(id) where numero=:numero ";
                        $sqlAvgN = "select avg(note) from (stagiaires inner join notes using (numero)) inner join examens using(id) where numero=:numero ";

                        $stmtMax = $connexion->prepare($sqlMaxN);
                        $stmtMin = $connexion->prepare($sqlMinN);
                        $stmtAvg = $connexion->prepare($sqlAvgN);

                        $stmtMax->bindParam('numero', $numero);
                        $stmtMin->bindParam('numero', $numero);
                        $stmtAvg->bindParam('numero', $numero);

                        $stmtMax->execute();
                        $stmtMin->execute();
                        $stmtAvg->execute();

                        $NotesMax = $stmtMax->fetchAll(PDO::FETCH_ASSOC);
                        $NotesMin = $stmtMin->fetchAll(PDO::FETCH_ASSOC);
                        $NotesAvg = $stmtAvg->fetchAll(PDO::FETCH_ASSOC);

                        // var_dump($NotesMax);
                        // var_dump($NotesMin);
                        // var_dump($NotesAvg);
                        $Meilleure = $NotesMax[0]["max(note)"];
                        $Derniere = $NotesMin[0]["min(note)"];
                        $Moyenne = $NotesAvg[0]["avg(note)"];

                    ?>
                        <table class="table table-striped table-light w-50">
                            <tr>
                                <td><span>salle :</span></td>
                                <td> <?php echo $salle; ?></td>
                            </tr>
                            <tr>
                                <td><span>Date :</span></td>
                                <td><?php echo $Date; ?></td>
                            </tr>
                            <tr>
                                <td><span>Type :</span></td>
                                <td><?php echo $type; ?></td>
                            </tr>
                            <tr>
                                <td><span>Vote note :</span></td>
                                <td><?php echo $note; ?></td>
                            </tr>
                            <tr>
                                <td><span>Meilleure note:</span></td>
                                <td><?php echo $Meilleure; ?></td>
                            </tr>
                            <tr>
                                <td><span>Derniere note :</span></td>
                                <td><?php echo $Derniere; ?></td>
                            </tr>
                            <tr>
                                <td><span>Note moyenne:</span></td>
                                <td><?php echo $Moyenne;  ?> </td>
                            </tr>
                        </table>
                    <?php
                    }
                    ?>

                </div>
            </div>

    </div>

    <script src="Script1.js"></script>
</body>

</html>











<!-- $sqlMaxMinAvg = "select max(note) as maxnote, min(note) as minnote,   avg(note) as avgnote, from (stagiaires inner join notes using (numero)) inner join examens using(id) where numero=:numero "; -->