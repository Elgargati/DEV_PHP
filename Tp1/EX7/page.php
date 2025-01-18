<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['choix']) == true) {
    //     if ($_POST['choix'] == 'oui') {
    //         echo "Je suis d'accord";
    //     } elseif ($_POST['choix'] == 'no') {
    //         echo "Je ne suis pas d'accord";
    //     } else {
    //         echo "Je ne sais pas mon decsision";
    //     }
    // } else {
    //     header("Location:index.html");
    // }
    // if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['choix'])) {
    //     $choix = $_POST['choix'];
    //     switch ($choix) {
    //         case 'oui':
    //             echo "Je suis d'accord";
    //             break;
    //         case 'no':
    //             echo "Je ne suis pas d'accord";
    //             break;
    //         case 'sais':
    //             echo "Je ne sais pas mon decsision";
    //     }
    // }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['choix'])) {
        $choix = $_POST['choix'];
        switch ($choix) {

            case 'oui';
                echo "Je suis d'accord";
                break;

            case 'no';
                echo "Je ne suis pas d'accord";
                break;

            case 'sais';
                echo "je ne sais pas mon decsision";
        }
    }

    ?>
</body>

</html>