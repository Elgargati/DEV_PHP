<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $personne = [
    //     "nom1" => ["prenom1", 'ville1', 20],
    //     "nom2" => ["prenom2", 'ville2', 20],
    //     "nom3" => ["prenom3", 'ville3', 20]
    // ];
    // foreach ($personne as $k => $v) {
    //     echo $k . "<br>";
    //     foreach ($v as $x) {
    //         echo $x . "<br>";
    //     }
    // };
    // print_r($personne);


    // $T = [[5, 4, 6], [7, 1, 3], [8, 9, 7]];
    // // foreach ($T as $x) {
    // //     foreach ($x as $m) {
    // //         echo $m;
    // //     }
    // // };


    // $personnes = [
    //     "Alice" => [
    //         "prenom" => "Alice",
    //         "ville" => "Paris",
    //         "age" => 30
    //     ],
    //     "Bob" => [
    //         "prenom" => "Bob",
    //         "ville" => "Londres",
    //         "age" => 25
    //     ],
    //     "Claire" => [
    //         "prenom" => "Claire",
    //         "ville" => "New York",
    //         "age" => 35
    //     ],
    //     "David" => [
    //         "prenom" => "David",
    //         "ville" => "Berlin",
    //         "age" => 40
    //     ],
    //     "Emma" => [
    //         "prenom" => "Emma",
    //         "ville" => "Rome",
    //         "age" => 20
    //     ]
    // ];
    // echo "<table border='1'>";
    // foreach ($personnes as $personne => $x) {
    //     echo "<tr><th colspan='2' align='center'> $personne  </th></tr>";
    //     foreach ($x as $k => $v) {
    //         echo "<tr><td>  $k </td><td> $v </td></td>";
    //     }
    // }
    // echo "</table>";

    // // Q1
    // $personne = [
    //     "nom1" => ["prenom1", 'ville1', 20],
    //     "nom2" => ["prenom2", 'ville2', 20],
    //     "nom3" => ["prenom3", 'ville3', 20]
    // ];

    // foreach ($personne as $k => $v) {
    //     echo $k . "<br>";
    //     foreach ($v as $x) {
    //         echo $x;
    //     }
    //     echo "<br>";
    // }

    // Q2
    $personnes = [
        "Alice" => [
            "prenom" => "Alice",
            "ville" => "Paris",
            "age" => 30
        ],
        "Bob" => [
            "prenom" => "Bob",
            "ville" => "Londres",
            "age" => 25
        ],
        "Claire" => [
            "prenom" => "Claire",
            "ville" => "New York",
            "age" => 35
        ],
        "David" => [
            "prenom" => "David",
            "ville" => "Berlin",
            "age" => 40
        ],
        "Emma" => [
            "prenom" => "Emma",
            "ville" => "Rome",
            "age" => 20
        ]
    ];

    foreach ($personnes as $k => $v) {
        echo $k . '<br>';
        foreach ($v as $x => $y) {
            echo "$x => $y <br>";
        }
    }










    ?>
</body>

</html>