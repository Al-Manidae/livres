<?php
    require_once "../includes/connectBd.php";
    $con = connectdb();

    $req ="SELECT * FROM editeur WHERE ID_EDITEUR = '".$_GET['id']."'";
    $response = $con->query($req);
    $editor = $response->fetch();

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $ID_EDITEUR = $_POST['ID_EDITEUR'];
        $NOM_EDITEUR = $_POST['NOM_EDITEUR'];

        $reqUpdate ="UPDATE editeur SET ID_EDITEUR= '$ID_EDITEUR', NOM_EDITEUR='$NOM_EDITEUR' where ID_EDITEUR='$ID_EDITEUR'";

        $con->exec($reqUpdate);
        
        header('Location:../views/livres.php');
        exit;
    }
?>