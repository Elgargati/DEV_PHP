<?php
// session_start();

// if (isset($_GET['connecte']) && isset($_SESSION['isloggedin']) && $_SESSION['isloggedin'] == true) {
//     $connecte = $_GET['connecte'];
//     if ($connecte == 'true') {
//         header('location:profile.php');
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body class="">
    <div class="container vh-100">
        <div class="w-50  m-auto bg-light mt-3 rounded-2">
            <form class="p-2" action="" method="post">
                <div class="text-center">
                    <h2>Sign up</h2>
                </div>
                <div>
                    <label class="form-label" for="login">Nom d'utilisateur :</label>
                    <input class="form-control" type="text" name="utilisateur" id="utilisateur" placeholder="Nom d'utilisateur :" required>
                </div>
                <div>
                    <label class="form-label" for="motDePasse">Mot passe :</label>
                    <input class="form-control" type="password" name="motDePasse" id="motDePasse" placeholder="Password" required>
                </div>
                <?php
                if (isset($_GET['invalid'])) {
                    if ($_GET['invalid'] == 'true') {
                        echo '<div  class="m-1">';
                        echo '  <span class="text-danger">Donnees incorrectes </span>';
                        echo "</div>";
                    }
                }
                ?>

                <div class="d-flex m-2">
                    <input class="btn btn-primary w-100" type="submit" id="BtnSubmit" value="Login">
                </div>
                <div>
                    <hr class="my-4">
                </div>
            </form>
        </div>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['utilisateur']) && isset($_POST['motDePasse'])) {
        include "conn.php";
        $utilisateur = $_POST['utilisateur'];
        $motDePasse = $_POST['motDePasse'];

        $sql = "select * from user where nomUtilisateur=:utilisateur and MotDePasse=:motDePasse";
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam('utilisateur', $utilisateur);
        $stmt->bindParam('motDePasse', $motDePasse);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if (count($users) > 0) {
            session_start();
            $_SESSION['isloggedin'] = true;
            $_SESSION['id'] = $users[0]['id'];
            header('location:profile.php');
        } else {
            header('location:login.php?invalid=true');
        }
    } else {
        header('loaction:login.php');
    }
    ?>
</body>

</html>