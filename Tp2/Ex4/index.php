<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // Q1
    // $handle = file_get_contents('test.txt');
    // echo $handle;

    // Q2
    // $handle = fopen('paragraphe.txt', 'r');
    // echo "Les 100 premiers chatacteres : <br>" . fread($handle, 100) .  "<br>";

    // echo "Les 100 chatacteres suivants : <br>" . fread($handle, 100) .  "<br>";

    // fclose($handle);

    // Q3
    $handle = fopen('ville.txt', 'r');

    // echo fgets($handle) . "<br>";
    // echo fgets($handle) . "<br>";
    // echo fgets($handle) . "<br>";
    // echo fgets($handle) . "<br>";
    // echo fgets($handle) . "<br>";

    // while (($ligne = fgets($handle)) !== false) {
    //     echo $ligne . "<br>";
    // }

    // Q4
    // $handle = fopen('phrase.txt', 'r');

    // while (!feof($handle)) {
    //     echo fgetc($handle) . "<br>";
    // }



    // fclose($handle);

    // Q5
    // $noms_array = file('noms.txt');
    // print_r($noms_array);

    // Q6
    // $handle = fopen('noms.txt', 'w');
    // fwrite($handle, 'mohammed \ mehdi \ oussama \ salah \n ');
    // fclose($handle);
    // $handle_array = file("noms.txt");
    // print_r($handle_array);

    // Q7
    // $adresses = "email1@example.com\nemail2@example.com\nemail3@example.com\nemail4@example.com\nemail5@example.com\n";

    // file_put_contents('email.txt', $adresses);

    // $new_email = "newemail@exemple.ma\n";

    // file_put_contents('email.txt', $new_email, FILE_APPEND);

    // $email_array = file('email.txt');
    // print_r($email_array);

    // Q8

    // $noms_array = file('noms.txt', FILE_IGNORE_NEW_LINES);

    // $nomsA = array_map(function ($n) {
    //     return "M." . $n;
    // }, $noms_array);
    // $noms_formates = implode(' , ',  $nomsA);
    // print_r($noms_formates);
    // var_dump($noms_formates);

    // Q9
    // $number_array = file('number.txt', FILE_IGNORE_NEW_LINES);
    // $sum_array = array_sum($number_array);
    // file_put_contents('number.txt', "\n---\nsomme = " . $sum_array, FILE_APPEND);
    // echo "La somme des nombres est : " . $sum_array;

    // Q10
    // $phrases_array = file('phrase.txt', FILE_IGNORE_NEW_LINES);

    // $phrases_majuscules = array_map('strtoupper', $phrases_array);

    // file_put_contents('phrase.txt', implode("\n", $phrases_majuscules));

    // $phraseslast_array = file('phrase.txt', FILE_IGNORE_NEW_LINES);


    // foreach ($phraseslast_array as $a) echo $a . "<br>";

    // Q11
    // $emailListe = file('adresses.txt', FILE_IGNORE_NEW_LINES);
    // $keys = [];
    // $val = [];
    // foreach ($emailListe as $p) {
    //     $T = explode(",", $p);
    //     array_push($keys, $T[0]);
    //     array_push($val, $T[1]);
    // }
    // var_dump($keys);
    // var_dump($val);
    // $tabA = array_combine($keys, $val);
    // foreach ($tabA as $k => $v) {
    //     echo $k . ":" . $v . "<br>";
    // }












    ?>
</body>

</html>