<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == "GET" && isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {

    header("Location:Profile.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">

    <title>Document</title>
    <style>
        /* body {
            background: #a2a9b0;
            background: linear-gradient(to right, #98b6e1, #8eccf6);
        } */

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .cursor-pointer {
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="container vh-100">
        <div class="w-50 bg-info m-auto p-3 border-0 shadow rounded-3 mt-3">

            <form action="" method="post" class="d-flex flex-column">
                <div class="m-1">
                    <label class="form-label fw-bold">Login :</label>
                    <input type="text" class="form-control" id="login" name="login" placeholder="Login" required>
                </div>
                <div class="m-1">
                    <label class="form-label fw-bold">Mot de passe :</label>
                    <input type="password" class="form-control" id="pass" name="pass" placeholder="Password" required>
                </div>
                <?php
                if (isset($_GET['invalid'])) {
                    if ($_GET['invalid'] == 'true') {
                        echo '<div  class="m-1">';
                        echo '  <h4 class="text-danger">Donnees incorrectes </h4>';
                        echo "</div>";
                    }
                }
                if (isset($_GET['isConn'])) {
                    if ($_GET['isConn'] == 'false') {
                        echo '<div  class="m-1 d-flex justify-content-center">';
                        echo '  <h4 class="text-danger fs-2">Vous devez vous connectez </h4>';
                        echo "</div>";
                    }
                }
                ?>
                <div class="m-4">
                    <input class="btn btn-primary btn-login text-uppercase fw-bold w-100" type="submit" value="Login">
                </div>

                <hr class="my-4">
            </form>
        </div>

    </div>
    <?php
    // if (isset($_GET["isConn"])) {
    //     // $isConn = $_GET["isConn"];
    //     echo "<div class='alert alert-danger w-50 m-auto d-block text-center'>Vous devez vous connectez <div>";
    // }
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login']) && isset($_POST['pass'])) {
        include "conn.php";
        $login = $_POST['login'];
        $pass =  $_POST['pass'];
        $sql = "select * from stagiaires where login=:login and motdepasse=:pass";
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam('login', $login);
        $stmt->bindParam('pass', $pass);
        $stmt->execute();
        $stagiaire = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($stagiaire);

        if (count($stagiaire) > 0) {
            $loginStagiaire = $stagiaire[0]['login'];
            $passStagiaire = $stagiaire[0]['motdepasse'];
            if ($login == $loginStagiaire && $pass == $passStagiaire) {
                session_start();
                $_SESSION['isloggedin'] = true;
                $_SESSION['numero'] = $stagiaire[0]['numero'];
                header("location:profile.php");
                exit;
            }
        } else {
            // echo 'login ou mot de passe incorrect';
            header('location:login.php?invalid=true');
        }
    }

    ?>
</body>

</html>