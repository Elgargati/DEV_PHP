<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Preference Page</title>
    <link href="../../bootstrap.css" rel="stylesheet">
</head>
<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['color'])) {
//     $color = $_POST['color'];
//     setcookie("bgcolor", $color, time() + 60 * 60 * 24, "/");
// }

$bgcolor = isset($_COOKIE['bgcolor']) ? $_COOKIE['bgcolor'] : "white";
?>

<body style="background-color: <?php echo $bgcolor; ?>;">
  
    <div class="container mt-5 border border-2 p-2 w-50">
        <form action="mapage.php" method="post" class="mx-5">
            <div class="form-group">
                <label for="color">Couleurs:</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="lavender" name="color" value="Lavender" >
                    <label class="form-check-label" for="lavender">Lavender</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="lightcyan" name="color" value="LightCyan">
                    <label class="form-check-label" for="lightcyan">LightCyan</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="lightpink" name="color" value="LightPink">
                    <label class="form-check-label" for="lightpink">LightPink</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">OK</button>
        </form>
    </div>
    <script>
        document.querySelectorAll('input[name="color"]').forEach((input) => {
            input.addEventListener('change', () => {
                document.body.style.backgroundColor = input.value;
            });
        });
   </script>
</body>
</html>
