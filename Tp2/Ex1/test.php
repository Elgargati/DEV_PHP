<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //   Q1
    // $fruits = ['fruit1', 'fruit2', 'fruit3', 'fruit4', 'fruit5'];
    // foreach ($fruits as $x)
    //     echo $x . "<br>";

    // Q2
    // $notes = [10, 13, 19, 13, 12];
    // $moyenne = array_sum($notes) / count($notes);
    // echo " la moyenne des notes est $moyenne";

    // Q3
    // $noms = [
    //     "nom1" => 19,
    //     "nom2" => 14,
    //     "nom3" => 16,
    //     "nom4" => 12,
    //     "nom5" => 14
    // ];
    // foreach ($noms as $nom => $age)
    //     echo "Nom : $nom - Age : $age <br>";

    // Q4
    // $personne = [
    //     ["nom" => "nom1", "age" => 19, "adresse" => "adresse1"],
    //     ["nom" => "nom2", "age" => 20, "adresse" => "adresse2"],
    //     ["nom" => "nom3", "age" => 22, "adresse" => "adresse3"],
    // ];
    // foreach ($personne as $x) {
    //     echo "Nom :" . $x['nom'] . " Age : " . $x['age'] . " adresse :" . $x['adresse'] . "<br>";
    // };

    // Q5
    // $emails = [
    //     "personne1" => "per1@gmail.com",
    //     "personne2" => "Aper2@gmail.com",
    //     "personne3" => "per3@gmail.com",
    //     "personne4" => "Aper4@gmail.com",
    //     "personne5" => "per5@gmail.com",
    // ];

    // foreach ($emails as $k => $v) {
    //     if (str_starts_with($v, 'A')) {
    //         echo " Nom : $k - email : $v <br>";
    //     }
    // }

    // Q6
    // $fruits = ['fruit1', 'fruit2', 'fruit3', 'fruit4', 'fruit5'];
    // array_push($fruits, 'fruit6');
    // foreach ($fruits as $x)
    //     echo $x . "<br>";

    // Q7
    // $villes = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];
    // array_unshift($villes, 'ouajda');
    // array_push($villes, 'agadir');
    // unset($villes[1]);
    // foreach ($villes as $x) {
    //     echo "$x <br>";
    // }

    // Q8
    // $notes = [12, 15, 13, 14,];
    // $moyenne = array_sum($notes) / count($notes);
    // echo "la moyenne des notes est $moyenne";

    // Q9
    // $pays = ['maroc', 'france', 'italia', 'espania', 'suisse'];
    // $T = array_slice($pays, 0, 2);
    // print_r($T)

    // Q10
    // $emails = [
    //     "personne1" => "per1@gmail.com",
    //     "personne2" => "Aper2@gmail.com",
    //     "personne3" => "per3@gmail.com",
    //     "personne4" => "Aper4@gmail.com",
    //     "personne5" => "per5@gmail.com",
    // ];
    // $keys = array_keys($emails);
    // print_r($keys);

    // Q11
    // $villes1 = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];
    // $villes2 = ['khouribgha', 'settat', 'mohamadia', 'tetwan', 'fes'];
    // $fusion = array_merge($villes1, $villes2);
    // print_r($fusion)

    // Q12
    // $color = ['Blue', 'Red', 'Green', 'Yellow', 'Purple'];
    // $colorInverse = array_reverse($color);
    // print_r($colorInverse);

    // Q13
    // $pays = ['maroc', 'france', 'italia', 'espania', 'suisse'];
    // sort($pays);
    // print_r($pays);

    // Q14
    // $personnes = [
    //     "nom1" => 12,
    //     "nom2" => 23,
    //     "nom3" => 41,
    //     "nom4" => 29,
    //     "nom5" => 19
    // ];
    // asort($personnes);
    // print_r($personnes);
    // foreach ($personnes as $k => $v)
    //     echo " Nom : $k Age : $v <br>";

    // Q15
    // $pays = ['maroc', 'france', 'italia', 'espania', 'suisse'];
    // shuffle($pays);
    // print_r($pays);

    // Q16
    // $emails = [
    //     "personne1" => "per1@gmail.com",
    //     "personne2" => "Aper2@gmail.com",
    //     "personne3" => "per3@gmail.com",
    //     "personne4" => "Aper4@gmail.com",
    //     "personne5" => "per5@gmail.com",
    // ];
    // $keys = array_values($emails);
    // print_r($keys);

    // Q17
    // $villes1 = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];
    // $vi = array_map(function ($v) {
    //     return "Ville de " . $v;
    // }, $villes1);
    // print_r($vi);

    // Q18
    // $color1 = ['Blue', 'Red', 'Yellow'];
    // $color2 = ['Red', 'Yellow', 'Purple'];
    // $col = array_intersect($color1, $color2);
    // print_r($col);

    // Q19
    // $personne = [
    //     "Jean" => "0123456789",
    //     "Marie" => "0987654321",
    //     "michael" => "054987321"
    // ];
    // if (array_key_exists('Jean', $personne))
    //     echo "existe dans le tableau";
    // else
    //     echo "N'existe pas dans le tableau";

    // Q20
    // $villes = ['marrakech', 'rabat', 'casa', 'tanger', 'marrakech', 'casa'];
    // $vidouble = array_unique($villes);
    // print_r($vidouble);


    // Q21
    // $personne = [
    //     ["nom" => "nom1", "age" => 19, "adresse" => "adresse1"],
    //     ["nom" => "nom2", "age" => 20, "adresse" => "adresse2"],
    //     ["nom" => "nom3", "age" => 22, "adresse" => "adresse3"],
    // ];
    // $ages = array_column($personne, 'adresse');
    // print_r($ages);

    // Q22
    // $personne = [
    //     ["nom" => "nom1", "age" => 19, "adresse" => "adresse1"],
    //     ["nom" => "nom2", "age" => 40, "adresse" => "adresse2"],
    //     ["nom" => "nom3", "age" => 22, "adresse" => "adresse3"],
    // ];
    // $personneFilter = array_filter($personne, function ($a) {
    //     return $a['age'] > 30;
    // });

    // Q23
    // $pays = ['maroc', 'france', 'italia', 'espania', 'suisse'];
    // $paysTrouver = array_search('espania', $pays);
    // echo $paysTrouver;

    // Q24
    // $employes = [
    //     "a1" => 30000,
    //     "a2" => 25000,
    //     "a3" => 35000,
    //     "a4" => 20000,
    //     "a5" => 40000
    // ];
    // asort($employes);
    // print_r($employes);



















    ?>
</body>

</html>