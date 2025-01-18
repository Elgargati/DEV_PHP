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
    // echo $text;

    // Q2
    // $paragraph = fopen('paragraph.txt', 'r');
    // echo fread($paragraph, 20) . '<br>';
    // echo fread($paragraph, 10);

    // Q3
    // $villes = fopen('villes.txt', 'r');
    // while (($ligne = fgets($villes)) !== false) {
    //     echo $ligne . '<br>';
    // };

    // Q4
    // $paragraph = fopen('phrase.txt', 'r');
    // while (($cara = fgetc($paragraph)) !== false) {
    //     echo $cara . '<br>';
    // }

    // Q5
    // $nom = file('nom.txt');
    // var_dump($nom)

    // Q6
    // $noms = fopen('noms.txt', 'w');
    // $list = ['mohammed', 'mehdi', 'oussama', 'salah'];
    // for ($i = 0; $i < count($list); $i++) {
    //     fwrite($noms, $list[$i] . '\n');
    // }
    // fclose($noms);

    // Q7
    // $adresse = file_put_contents('adresses.txt', 'new@gmail.com');

    // Q8
    // $noms = file('nom.txt');
    // $nomsW = array_map(function ($v) {
    //     return "M." . $v;
    // }, $noms);
    // $n = implode(',', $nomsW);
    // echo ($n);

    // Q9
    // $num_array = file('number.txt');
    // $somme = array_sum($num_array);
    // var_dump($num_array);
    // file_put_contents('number.txt', "\n --------\n la somme --:" . $somme, FILE_APPEND)

    // Q10
    $phrase = file('phrase.txt');
    $phraseM = array_map('strtoupper', $phrase);
    // var_dump($phraseM);
    // file_put_contents('phrase3.txt', implode('\n', $phraseM));
    $phraseslast_array = file('phrase3.txt', FILE_IGNORE_NEW_LINES);
    // $phraselast_array = file('phrase3.txt', FILE_IGNORE_NEW_LINES);
    // foreach ($phraselast_array as $a) echo $a . "<br>";




    ?>
</body>

</html>