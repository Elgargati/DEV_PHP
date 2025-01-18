<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">

</head>
<div class="container ">
    <h2 class="text-primary">Modifier Article</h2>

    <?php
    if (isset($_GET['id']) && isset($_GET['prix']) && isset($_GET['quantite']) && isset($_GET['designation'])) {
        $id = $_GET['id'];
        $designation = $_GET['designation'];
        $prix = $_GET['prix'];
        $quantite = $_GET['quantite'];
    } else {
        header('location:index.php');
        exit;
    }
    ?>
    <form action="update.php" method="post">
        <table class="table w-50">
            <tr class="d-none">
                <td>id :</td>
                <td><input class="form-control" type="hidden" name="id" id="id" value="<?php echo $id; ?>" readonly></td>
            </tr>
            <tr>
                <td>designation :</td>
                <td><input class="form-control" type="text" name="designation" id="designation" required value="<?php echo $designation; ?>"></td>
            </tr>
            <tr>
                <td>Prix :</td>
                <td><input class="form-control" type="text" name="prix" id="prix" required value="<?php echo $prix ?>"></td>
            </tr>
            <tr>
                <td>Quantite :</td>
                <td><input class="form-control" type="text" name="quantite" id="quantite" required value="<?php echo $quantite ?>"></td>
            </tr>
            <tr>
                <td colspan="2" class="">
                    <input class="btn btn-primary " type="submit" value="Enregistrer les modifications">
                    <input class=" btn btn-danger" type="reset" value="Annuler les modifications">
                    <a class="btn btn-secondary w-25 " href="index.php"><i class="bi bi-x-octagon-fill"></i><span class="m-1">Annuler</span></a>
                </td>
            </tr>
        </table>
    </form>

</div>



<body>

</body>

</html>