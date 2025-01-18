<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $theme = $_POST['theme'];
    $language = $_POST['language'];


    $user_data = [
        "username" => $username,
        "email" => $email,
        "preferences" => [
            "theme" => $theme,
            "language" => $language
        ]
    ];


    $json_data = json_encode($user_data);


    setcookie("user_data", $json_data, time() + 60 * 60 * 24, "/");


    header("Location: data.php");
    exit();
}
