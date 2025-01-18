<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $remember_me = isset($_POST['remember_me']);


    if ($username == "admin" && $password == "password") {
        echo "Bienvenue, " . $username . "!<br>";
        if ($remember_me) {

            setcookie("remember_me", $username, time() + (30 * 24 * 60 * 60), "/");
            echo "Le nom d'utilisateur a ete sauvegarde.<br>";
        } else {

            if (isset($_COOKIE['remember_me'])) {
                setcookie("remember_me", "", time() - 3600, "/");
                echo "Le cookie a ete supprime.<br>";
            }
        }
    } else {
        echo "Nom d'utilisateur ou mot de passe incorrect.<br>";
    }

    // header("refresh:3;url=login.php");
}
