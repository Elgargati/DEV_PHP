<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include "conn.php";
    $sql = "delete from article where id=:id";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam('id', $id);

    $article = $stmt->execute();
    // var_dump($article);
    if ($article)
        if ($stmt->rowCount() == 0)
            header('location:index.php?supp=false');
        else
            header('location:index.php?supp=true');
} else {
    header('location:index.php');
}
