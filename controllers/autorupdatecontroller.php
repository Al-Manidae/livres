<?php
    require_once "../includes/connectBd.php";
    $con = connectdb();

    $req ="SELECT * FROM auteur WHERE ID_AUTEUR = '".$_GET['id']."'";
    $response = $con->query($req);
    $autor = $response->fetch();

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $ID_AUTEUR = $_POST['ID_AUTEUR'];
        $NOM_AUTEUR = $_POST['NOM_AUTEUR'];

        $reqUpdate ="UPDATE auteur SET ID_AUTEUR= '$ID_AUTEUR', NOM_AUTEUR='$NOM_AUTEUR' where ID_AUTEUR='$ID_AUTEUR'";

        $con->exec($reqUpdate);

        header('Location:../views/livres.php');
        exit;
    }
?>