<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Tp 1 ex1</h1>

    <?php
    // 1
    // echo "Bonjour PHP <br>";

    // // 2
    // $prenom="mohammed";
    // $nom="el gargati";
    // echo "Bonjour ",$prenom," ",$nom ,"<br>";

    // // 3
    // $a=3;
    // $b=7;
    // echo "l'addition de $a + $b =",$a+$b,"<br>";
    // echo "la soustraction de $a - $b =",$a-$b,"<br>";
    // echo "la multiplication de $a * $b =",$a*$b,"<br>";
    // echo "la division de $a / $b =",$a/$b,"<br>";

    // 4
    // $a=2;
    // if ($a%2==0){
    //     echo "pair";
    // } 
    // else
    // {
    //     echo "impair";
    // }

    // 5

    // for($i=1;$i<=10;$i++){
    //     echo $i,"<br>";
    // }

    // 6
    // $a=9;
    // echo "la multiplication de $a : <br>";
    // for($i=1;$i<=10;$i++){
    //     echo "$a * $i= ",$i*$a ,"<br>";
    // }

    // 7
    // $i=1;
    // while($i<=20){
    //     echo $i ,"<br>";
    //     $i++;
    // }

    // 8
    // $tab= array(1,2,3,4,5,6,3);
    // $somme=0;

    // // foreach($tab as $x)
    // // {
    // //     $somme+=$x;
    // // }

    // $somme=array_sum($tab);

    // echo "la somme est ",$somme;

    // 9
    // function paire($n){
    //     if ($n%2==0)
    //     {
    //         return True;
    //     }else
    //     {
    //         return false;
    //     }
    // }
    // $a=5;
    // if (paire($a)){
    //     echo "le nombre $a est pair";
    // }else
    // {
    //     echo "le nombre $a est impair";
    // }

    // 10
    // function majuscule($a){
    //     return strtoupper($a);
    // }

    // $b="Marrakech";
    // echo majuscule($b);

    // 11
    // $tab=array("elven","essaouira","marrakech","rabat");
    // foreach($tab as $x){
    //     if(strpos($x,'e')!==false){
    //         echo $x ,"<br>" ;
    //     }
    // }

    // 12
    // echo "Salut PHP, nous sommes le ", date('D-M-Y');


    // 13
    // $heure = date('H');
    // if ($heure >= 6 && $heure <= 12) {
    //     echo "Bonjour";
    // } elseif ($heure >= 12 && $heure <= 18) {
    //     echo "Bon apres-midi";
    // } else {
    //     echo "Bonsoir";
    // }

    // 14
    // function calcul_age($date_naissance)
    // {
    //     $date_naissance = new DateTime($date_naissance);
    //     $date_aujourduit = new DateTime();
    //     $difference =    $date_aujourduit->diff($date_naissance);
    //     return $difference->y;
    // }

    // $date_naissance = "2004-07-26";
    // echo "l'age est ", calcul_age($date_naissance);






    // _________________________________________________________________________________________________________________________________________







    // Q1
    // echo "Bonjour php";


    // Q2
    // $prenom = 'Mohammed ';
    // $nom = 'El gargati';
    // echo "Bonjour $prenom $nom";

    // Q3
    // $a = 10;
    // $b = 5;
    // echo "l'addition : $a + $b = " . $a + $b . "<br>";
    // echo "soustraction : $a - $b = " . $a - $b . "<br>";
    // echo "Multiplication : $a * $b = " . $a * $b . "<br>";
    // echo "Division : $a / $b = " . $a / $b . "<br>";

    // Q4
    // $a = 4;
    // if ($a % 2 == 0)
    //     echo "paire";
    // else
    //     echo "impaire";

    // Q5
    // for ($i = 1; $i <= 10; $i++) {
    //     echo "$i <br>";
    // }

    // Q6
    // $a = 4;
    // echo " la table de multiplication de $a :" . "<br>";
    // for ($i = 1; $i <= 10; $i++) {
    //     echo "$a * $i =" . $a * $i . "<br>";;
    // }

    // Q7
    // $i = 1;
    // while ($i <= 20) {
    //     echo "$i" . "<br>";
    //     $i++;
    // }

    // Q8
    // $T = [12, 13, 16, 12, 12];
    // echo array_sum($T);

    // Q9
    // function paire($a)
    // {
    //     if ($a % 2 == 0)
    //         return true;
    //     else
    //         return false;
    // }
    // $a = 2;

    // if (paire($a)) {
    //     echo "le nombre $a est pair";
    // } else {
    //     echo "le nombre $a est impair";
    // }

    // Q10
    // function majuscule($a)
    // {
    //     return strtoupper($a);
    // }

    // $b = "Marrakech";
    // echo majuscule($b);

    // Q11
    // $T = ["elven", "essaouira", "marrakech", "rabat"];
    // foreach ($T as $x) {
    //     // if ($x[0] == 'e')
    //     if (str_starts_with($x, 'e'))
    //         echo "$x <br>";
    // }

    // Q12
    // $d = date('d-m-Y');
    // echo $d . "<br>";
    // echo "Salut PHP, nous sommes le " . $d;

    // Q13
    // $heure = date('H');
    // if ($heure >= 6 && $heure <= 12) {
    //     echo "Bonjeur";
    // } else if ($heure >= 12 && $heure <= 18) {
    //     echo "Bon apres-midi";
    // } else {
    //     echo "Bonsoir";
    // }

    // function calcul_age($date_naissance)
    // {
    //     $date_naissance = new DateTime($date_naissance);
    //     $date_aujourduit = new DateTime();
    //     $difference =   $date_aujourduit->diff($date_naissance);
    //     return $difference->y;
    // }

    // $date_naissance = "2004-07-26";
    // echo "l'age est ", calcul_age($date_naissance);


    // Q14
    // function calcul_age($date)
    // {
    //     $date_naissance = new DateTime($date);
    //     $datetoday = new DateTime();
    //     $difference =    $datetoday->diff($date_naissance);

    //     return $difference->y;
    // }
    // $date = "2004-07-26";
    // echo calcul_age($date);




    // _________________________________________________________________________________________________________________________________________





    // Q1
    // echo "Bonjour, Php!";

    // Q2
    // $prenom = 'mohammed';
    // $nom = 'el gargati';

    // echo "Bonjour $prenom  $nom";

    // Q3
    // $a = 1;
    // $b = 2;
    // echo "addition : " . $a + $b . '<br>';
    // echo "soustraction : " . $a - $b . '<br>';
    // echo "Multiplication : " . $a * $b . '<br>';
    // echo "division : " . $a / $b . '<br>';

    // Q4
    // $a = 5;
    // if ($a % 2 == 0)
    //     echo 'paire';
    // else
    //     echo "impaire";

    // Q5
    // for ($i = 1; $i <= 10; $i++) {
    //     echo "$i <br>";
    // }

    // Q6
    // $a = 4;
    // for ($i = 1; $i <= 10; $i++) {
    //     echo "$a * $i = " . $a * $i . '<br>';
    // }

    // Q7
    // $i = 1;
    // while ($i <= 20) {
    //     echo "$i <br>";
    //     $i++;
    // }

    // Q8
    // $T = [11, 23, 12, 1, 4, 2, 5, 2, 122, 23];
    // $somme = 0;
    // foreach ($T as $x) {
    //     $somme += $x;
    // }
    // // $somme = array_sum($T);
    // echo $somme;

    // Q9
    // function checkNumber($n)
    // {
    //     if ($n % 2 == 0)
    //         return true;
    //     else
    //         return false;
    // }

    // $a = checkNumber(74);
    // if ($a)
    //     echo 'paire';
    // else
    //     echo 'impaire';

    // Q10
    // function majuscule($a)
    // {
    //     return strtoupper($a);
    // }
    // echo majuscule('marrakech vive');

    // Q11
    // $T = ['emarrakech', 'safi', 'ecasa', 'rabat', 'tanger'];
    // $y = [];
    // foreach ($T as $x) {
    //     if ($x[0] == 'e')
    //         array_push($y, $x);

    //     // if (str_starts_with($x, 'e')) {
    //     //     array_push($y, $x);
    //     //     // echo $x;
    //     // }
    // }
    // var_dump($y);

    // Q12
    // $date = date('d-m-Y');
    // echo  "Salut PHP, nous sommes le $date";

    // Q13
    // $heure = date('H');
    // if ($heure > 6 && $heure < 12) {
    //     echo 'Bonjour';
    // } else if ($heure > 12 && $heure < 18) {
    //     echo 'Bon apres-midi';
    // } else {
    //     echo 'Bonsoir';
    // }

    // // Q14
    // function dateNaissance($d)
    // {
    //     $date_naissance = new DateTime($d);
    //     $date_aujourduit = new DateTime();
    //     $age = $date_aujourduit->diff($date_naissance);
    //     return $age->y;
    // }
    // $d = "2004-07-26";
    // echo dateNaissance($d);

    ?>

</body>

</html>