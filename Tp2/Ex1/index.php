<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Q1
    // $fruit = ["Apple", "Banana", "Orange", "avocadro", "Orange"];
    // for ($i = 0; $i < count($fruit); $i++) {
    //     echo $fruit[$i] . "<br >";
    // }

    // Q2
    // $notes = [12, 13, 14, 15, 17];
    // echo array_sum($notes) / count($notes);

    // Q3
    // $personnes = [
    //     "nom1" => 12,
    //     "nom2" => 23,
    //     "nom3" => 41,
    //     "nom4" => 29,
    //     "nom5" => 19
    // ];
    // foreach ($personnes as $k => $v) {
    //     echo " le Nom : $k , Age : $v <br>";
    // }

    // Q4
    // $personne = [
    //     ["nom" => "nom1", "age" => 19, "adresse" => "adresse1"],
    //     ["nom" => "nom2", "age" => 20, "adresse" => "adresse2"],
    //     ["nom" => "nom3", "age" => 22, "adresse" => "adresse3"],
    // ];
    // foreach ($personne as $per) {
    //     echo " le nom :" . $per['nom'] . " Age :" . $per['age'] . " Adresse :" . $per['adresse'] . ".<br>";
    // };

    // Q5
    // $personnes = [
    //     "personne1" => "per1@gmail.com",
    //     "personne2" => "Aper2@gmail.com",
    //     "personne3" => "per3@gmail.com",
    //     "personne4" => "Aper4@gmail.com",
    //     "personne5" => "per5@gmail.com",
    // ];
    // foreach ($personnes as $k => $v) {
    //     // if ($v[0] == 'A')
    //     if (substr($v, 0, 1) == 'A') {
    //         // echo $v, "<br>";
    //         echo "Nom: $k, Adresse e-mail: $v<br>";
    //     }
    // };

    // Q6
    // $fruit = ["Apple", "Banana", "Orange", "avocadro", "Orange"];
    // array_push($fruit, 'banana');
    // for ($i = 0; $i < count($fruit); $i++) {
    //     echo $fruit[$i] . "<br >";
    // }

    // Q7
    // $villes = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];
    // array_unshift($villes, "agadir");
    // array_push($villes, "jadida");
    // unset($villes[1]);
    // foreach ($villes as $x) {
    //     echo $x . "<br>";
    // }

    // Q8
    // $notes = [12, 15, 13, 14,];
    // $moyenne = array_sum($notes) / count($notes);
    // echo "la moynne est $moyenne";

    // Q9
    // $pays = ['maroc', 'france', 'italia', 'espania', 'suisse'];

    // $deuxpays = array_slice($pays, 0, 2);
    // print_r($deuxpays)

    // Q10
    // $personnes = [
    //     "personne1" => "per1@gmail.com",
    //     "personne2" => "Aper2@gmail.com",
    //     "personne3" => "per3@gmail.com",
    //     "personne4" => "Aper4@gmail.com",
    //     "personne5" => "per5@gmail.com",
    // ];
    // $Tkeys = array_keys($personnes);
    // // print_r($Tkeys);
    // foreach ($Tkeys as $x) {
    //     echo $x . "<br>";
    // }

    // Q11

    // $villes1 = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];
    // $villes2 = ['khouribgha', 'settat', 'mohamadia', 'tetwan', 'fes'];
    // $villefusionner = array_merge($villes1, $villes2);
    // // print_r($villefusionner)
    // foreach ($villefusionner as $x) {
    //     echo $x . "<br>";
    // };

    // Q12
    // $color = ['Blue', 'Red', 'Green', 'Yellow', 'Purple'];
    // $colorInverse = array_reverse($color);
    // print_r($colorInverse)

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
    // foreach ($personnes as $k => $v) {
    //     echo " le Nom : $k , Age : $v <br>";
    // }

    // Q15
    // $pays = ['maroc', 'france', 'italia', 'espania', 'suisse'];
    // shuffle($pays);
    // print_r($pays)

    // Q16
    // $personnes = [
    //     "nom1" => 12,
    //     "nom2" => 23,
    //     "nom3" => 41,
    //     "nom4" => 29,
    //     "nom5" => 19
    // ];
    // $personnesValue = array_values($personnes);
    // foreach ($personnesValue as $x) {
    //     echo $x, "<br>";
    // }

    // Q17
    // $villes = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];
    // function ajouterPrefixe($ville)
    // {
    //     return "Ville de " . $ville;
    // }

    // $villesmap = array_map('ajouterPrefixe', $villes);
    // print_r($villesmap)

    // Q18
    // $color1 = ['Blue', 'Green', 'Yellow'];
    // $color2 = ['Red', 'Yellow', 'Purple'];
    // $col = array_intersect($color1, $color2);
    // print_r($col)

    // Q19
    // $personnes = array(
    //     "Jean" => "0123456789",
    //     "Marie" => "0987654321",
    //     "michael" => "054987321"
    // );
    // if (array_key_exists('Jean', $personnes))
    //     echo "existe";
    // else echo " n'existe pas";

    // Q20
    // $villes = ['marrakech', 'rabat', 'casa', 'tanger', 'casa'];
    // $villedouble = array_unique($villes);
    // print_r($villes);
    // print_r($villedouble);

    // Q21
    // $personne = [
    //     ["nom" => "nom1", "age" => 19, "adresse" => "adresse1"],
    //     ["nom" => "nom2", "age" => 20, "adresse" => "adresse2"],
    //     ["nom" => "nom3", "age" => 22, "adresse" => "adresse3"],
    // ];
    // $ages = array_column($personne, 'age');
    // print_r($ages)

    // Q22
    // $personne = [
    //     ["nom" => "nom1", "age" => 19, "adresse" => "adresse1"],
    //     ["nom" => "nom2", "age" => 40, "adresse" => "adresse2"],
    //     ["nom" => "nom3", "age" => 22, "adresse" => "adresse3"],
    // ];

    // $personnefilter = array_filter($personne, function ($p) {
    //     return $p['age'] > 30;
    // });
    // print_r($personnefilter);

    // Q23
    // $pays = ['maroc', 'france', 'italia', 'espania', 'suisse'];
    // $paysTrouver = array_search('france', $pays);
    // echo $paysTrouver

    // Q24
    // $employes = [
    //     "a1" => 30000,
    //     "a2" => 25000,
    //     "a3" => 35000,
    //     "a4" => 20000,
    //     "a5" => 40000
    // ];
    // asort($employes);
    // print_r($employes)








    // _________________________________________________________________________________________________________________________________________

    // Q1
    // $fruits = ['orange', 'banana', 'avocadro', 'ananas', 'pomme'];

    // for ($i = 0; $i < count($fruits); $i++) {
    //     echo $fruits[$i] . '<br>';
    // }


    // Q2
    // $notes_eleves = [12, 13, 18, 19, 19];
    // $somme = array_sum($notes_eleves) / count($notes_eleves);
    // echo $somme;

    // Q3
    // $personne = [
    //     "nom1" => 20,
    //     "nom2" => 43,
    //     "nom3" => 23,
    //     "nom4" => 34,
    //     "nom5" => 26,
    // ];
    // foreach ($personne as $k => $v) {
    //     echo "Nom : $k , Age : $v <br>";
    // }

    // Q4
    // $personne = [
    //     ["nom" => "simo", "age" => 20, "adresse" => "marrakech"],
    //     ["nom" => "ali", "age" => 27, "adresse" => "marrakech"],
    //     ["nom" => "oussama", "age" => 23, "adresse" => "marrakech"],
    //     ["nom" => "mehdi", "age" => 21, "adresse" => "marrakech"],
    //     ["nom" => "azdine", "age" => 20, "adresse" => "marrakech"],
    // ];
    // foreach ($personne as $K) {
    //     echo "Nom :" . $K['nom'] . " age :" . $K['age'] . " adresse :" . $K['adresse'] . "<br>";
    // }

    // Q5
    // $personne = [
    //     "nom1" => 'nom1@gmail.com',
    //     "nom2" => 'nom2@gmail.com',
    //     "nom3" => 'Anom3@gmail.com',
    //     "nom4" => 'nom4@gmail.com',
    //     "nom5" => 'Anom5@gmail.com',
    // ];
    // foreach ($personne as $k => $v) {
    //     // if (str_starts_with($v, 'A')) {
    //     //     echo $v . '<br>';
    //     // }
    //     if ($v[0] == 'A') {
    //         echo $v . "<br>";
    //     }
    // }

    // Q6
    // $fruits = ['orange', 'banana', 'avocadro', 'ananas', 'pomme'];
    // array_push($fruits, "fruit-6");
    // foreach ($fruits as $a) {
    //     echo $a . '<br>';
    // }

    // Q7
    // $villes = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];
    // array_unshift($villes, 'agadir');
    // array_push($villes, 'fes');
    // unset($villes[1]);
    // var_dump($villes);

    // Q8
    // $notes = [19, 3, 18, 10];
    // echo "la moyenne est " . array_sum($notes) / count($notes);

    // Q9
    // $pays = ['maroc', 'italia', 'france', 'brazil', 'togo'];
    // var_dump(array_slice($pays, 0, 2))

    // Q10
    // $personne = [
    //     "nom1" => 'nom1@gmail.com',
    //     "nom2" => 'nom2@gmail.com',
    //     "nom3" => 'Anom3@gmail.com',
    //     "nom4" => 'nom4@gmail.com',
    //     "nom5" => 'Anom5@gmail.com',
    // ];
    // $Tableau_keys = array_keys($personne);
    // var_dump($Tableau_keys);

    // Q11

    // $villes1 = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];
    // $villes2 = ['khouribgha', 'settat', 'mohamadia', 'tetwan', 'fes'];

    // $Tableau_Merge = array_merge($villes2, $villes1);
    // var_dump($Tableau_Merge);

    // Q12
    // $color = ['Blue', 'Red', 'Green', 'Yellow', 'Purple'];
    // $T_reverse = array_reverse($color);
    // var_dump($T_reverse);

    // Q13
    // $pays = ['maroc', 'italia', 'france', 'brazil', 'togo'];
    // sort($pays);
    // var_dump($pays);

    // Q14
    // $personnes = [
    //     "nom1" => 12,
    //     "nom2" => 23,
    //     "nom3" => 41,
    //     "nom4" => 29,
    //     "nom5" => 19
    // ];

    // asort($personnes);
    // var_dump($personnes);

    // Q15
    // $pays = ['maroc', 'italia', 'france', 'brazil', 'togo'];
    // shuffle($pays);
    // var_dump($pays);


    // Q16
    // $personnes = [
    //     "personne1" => "per1@gmail.com",
    //     "personne2" => "Aper2@gmail.com",
    //     "personne3" => "per3@gmail.com",
    //     "personne4" => "Aper4@gmail.com",
    //     "personne5" => "per5@gmail.com",
    // ];

    // $personnesValue = array_values($personnes);
    // foreach ($personnesValue as $x) {
    //     echo $x, "<br>";
    // }

    // Q17
    // $villes = ['marrakech', 'rabat', 'casa', 'tanger', 'safi'];

    // $villesmap = array_map(function ($ville) {
    //     return "Ville de $ville";
    // }, $villes);
    // var_dump($villesmap);

    // Q18
    // $color1 = ['Blue', 'Green', 'Yellow'];
    // $color2 = ['Red', 'Yellow', 'Purple'];
    // $col = array_intersect($color1, $color2);
    // var_dump($col);

    // Q19
    // $personnes = [
    //     "Jean" => "0123456789",
    //     "Marie" => "0987654321",
    //     "michael" => "054987321"
    // ];
    // var_dump(array_key_exists('Jean', $personnes));

    // Q20
    // $villes = ['marrakech', 'rabat', 'casa', 'marrakech', 'casa'];
    // $viles_unique = array_unique($villes);
    // var_dump($viles_unique);

    // Q21
    // $personne = [
    //     ["nom" => "nom1", "age" => 19, "adresse" => "adresse1"],
    //     ["nom" => "nom2", "age" => 20, "adresse" => "adresse2"],
    //     ["nom" => "nom3", "age" => 22, "adresse" => "adresse3"],
    // ];

    // $personne_age = array_column($personne, 'age');
    // var_dump($personne_age);

    // Q22
    // $personne = [
    //     ["nom" => "nom1", "age" => 19, "adresse" => "adresse1"],
    //     ["nom" => "nom2", "age" => 50, "adresse" => "adresse2"],
    //     ["nom" => "nom3", "age" => 42, "adresse" => "adresse3"],
    // ];
    // $personne_filter = array_filter($personne, function ($p) {
    //     return $p['age'] > 44;
    // });
    // var_dump($personne_filter);

    // Q23
    // $pays = ['maroc', 'france', 'italia', 'espania', 'suisse'];
    // var_dump(array_search("france", $pays));

    // Q24
    // $employes = [
    //     "a1" => 30000,
    //     "a2" => 25000,
    //     "a3" => 35000,
    //     "a4" => 20000,
    //     "a5" => 40000
    // ];
    // asort($employes);
    // var_dump($employes);























    ?>
</body>

</html>