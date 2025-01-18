<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Tp5/Ex3/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div id="mydiv">
        <div class="d-flex justify-content-between">
            <h3>Lorem, ipsum dolor.</h3>
            <a href="preference.php" class="btn btn-danger mx-2">select color</a>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda magni ut suscipit!
            Praesentium saepe nihil voluptatibus et, reiciendis distinctio maxime est,
            ex voluptate asperiores corrupti omnis? Saepe ipsa adipisci dolorum dolorem aspernatur.Necessitatibus!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nobis fuga repellendus at eos saepe magnam
            facilis et
            sit voluptates eligendi
            doloremque maiores sed odio,
            ex repellat suscipit nisi in.
            Praesentium saepe nihil voluptatibus et, reiciendis distinctio maxime est,
            ex voluptate asperiores corrupti omnis? Saepe ipsa adipisci dolorum dolorem aspernatur.Necessitatibus!
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nobis fuga repellendus at eos saepe magnam
            facilis et
            sit voluptates eligendi
            doloremque maiores sed odio,
            ex repellat suscipit nisi in.
        </p>
    </div>
    <?php
    if (isset($_COOKIE['color'])) {
        $color = $_COOKIE['color'];
        echo '<script> document.body.style.backgroundColor ="' . $color . '";  </script>';
    }
    ?>
</body>

</html>