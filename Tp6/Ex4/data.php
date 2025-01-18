<?php

if (isset($_COOKIE['user_data'])) {

    $json_data = $_COOKIE['user_data'];


    $user_data = json_decode($json_data, true);


    echo "Nom d'utilisateur : " . $user_data['username'] . "<br>";
    echo "Email : " . $user_data['email'] . "<br>";
    echo "Thème : " . $user_data['preferences']['theme'] . "<br>";
    echo "Langue : " . $user_data['preferences']['language'] . "<br>";
} else {
    echo "Le cookie 'user_data' n'est pas défini.";
}
