<?php
session_start();
if (!isset($_SESSION['isloggedin']) && isset($_SESSION['isloggedin']) != true) {
    header('location:login.php');
    exit;
}
// if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_SESSION['isloggedin'] == true) {
//     header('location:login.php?connecte=true');
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="bootstrap-icons-1.11.2/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<?php
$id = $_SESSION['id'];
// var_dump($id);
include "conn.php";
$sql = "select * from user where id=:id";
$stmt = $connexion->prepare($sql);
$stmt->bindParam('id', $id);
$stmt->execute();
$user = $stmt->fetchAll(PDO::FETCH_ASSOC);

$nom = $user[0]['nom'];
$prenom = $user[0]['prenom'];
?>
<div class="container m-auto">
    <p>Bienvenue <?php echo " $prenom $nom"; ?></p>
    <span><a class="btn btn-danger" href="deconnecter.php">Deconnecter</a></span>
</div>

<body>

</body>

</html>