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
    // $text = file_get_contents('text.txt');
    // echo "$text";

    // Q2
    // $text = fopen('paragraphe.txt', 'r');
    // echo fread($text, 100);
    // echo "<br>";
    // echo fread($text, 100);
    // echo "<br>";
    // echo fread($text, 100);

    // Q3
    // $ville = fopen('ville.txt', 'r');

    // echo "Liste des villes : <br>";
    // while (($ligne = fgets($ville)) !== false) {
    //     echo $ligne . "<br>";
    // }

    // Q4

    // $text = fopen('ville.txt', 'r');
    // while (($caractere = fgetc($text)) == true) {
    //     echo " $caractere <br>";
    // }

    // Q5
    // $noms = file('noms.txt');
    // var_dump($noms);
    // foreach ($noms as $x) echo $x . "<br>";

    // Q6
    // $noms = fopen('noms.txt', 'w');
    // fwrite($noms, 'simo\oussama\soufiane\azdine\mehdi\n');
    // fclose($noms);
    // $nom = file('noms.txt');
    // var_dump($nom);

    // Q7
    // $email = file_put_contents('email.txt', 'new@gmail.com', FILE_APPEND);

    // Q8
    // $noms_array = file('noms.txt', FILE_IGNORE_NEW_LINES);
    // $nomA = array_map(function ($n) {
    //     return "M." . $n;
    // }, $noms_array);
    // $nom_format = implode(' , ', $nomA);
    // var_dump($nom_format);

    // Q9
    // $num_array = file('number.txt');
    // $somme = array_sum($num_array);
    // // var_dump($num_array);
    // file_put_contents('number.txt', "\n-----\n la somme : --" . $somme, FILE_APPEND);

    // Q10
    // $phrase = file('phrase.txt');
    // $phraseM = array_map('strtoupper', $phrase);
    // // var_dump($phraseM);
    // file_put_contents('phrase3.txt', implode('\n', $phraseM));
    // // $phraseslast_array = file('phrase3.txt', FILE_IGNORE_NEW_LINES);
    // $phraselast_array = file('phrase3.txt', FILE_IGNORE_NEW_LINES);
    // foreach ($phraselast_array as $a) echo $a . "<br>";

    // Q11
    $nomEmail = file('adresses.txt');
    // var_dump($nomEmail);
    $keys = [];
    $val = [];
    foreach ($nomEmail as $p) {
        $T = explode(",", $p);
        array_push($keys, $T[0]);
        array_push($val, $T[1]);
    };
    $nomEmailAsso = array_combine($keys, $val);
    var_dump($nomEmailAsso)















    ?>

</body>

</html>