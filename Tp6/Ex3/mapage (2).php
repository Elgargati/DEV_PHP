<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>My Page</title>
        <link rel="stylesheet" href="../../bootstrap.css">
    <style>
        img {
            position: absolute;
            right: 0;
            top: 0;
        }
    </style>
</head>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['color'])) {
    $color = $_POST['color'];
    setcookie("bgcolor", $color, time() + 60 * 60 * 24, "/");
}
$bgcolor = isset($_POST['color']) ? $_POST['color'] : "white";
?>

<body style="background-color: <?php echo $bgcolor; ?>;">
    <div class="container mt-2">
        <h1 class="display-4">Welcome to My Page</h1>
        <a href="preference.php">
            <img src="photo.jpg" alt="Profile Photo" width="50px" height="50px" class="rounded-circle mx-3">
        </a>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo similique voluptate soluta non libero id dolore accusamus molestias
        maxime sit aliquam ratione doloribus numquam, ab vero velit iste aut aperiam..</p>
    </div>
</body>

</html>