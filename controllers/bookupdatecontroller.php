<?php
    require_once "../includes/connectBd.php";
    $con = connectdb();    

    $requeteAuteur = 'SELECT * FROM auteur';
    $responseAuteur = $con->query($requeteAuteur);
    $lignesAuteur = $responseAuteur->fetchAll();

    $requeteEditeur = 'SELECT * FROM editeur';
    $responseEditeur = $con->query($requeteEditeur);
    $lignesEditeur = $responseEditeur->fetchAll();

    $req ="SELECT livres.ID_LIVRE , livres.NOM_LIVRE , auteur.NOM_AUTEUR, editeur.NOM_EDITEUR FROM livres JOIN auteur ON auteur.ID_AUTEUR = livres.ID_AUTEUR JOIN editeur ON editeur.ID_EDITEUR = livres.ID_AUTEUR WHERE ID_LIVRE = '".$_GET['id']."'";
    $response = $con->query($req);
    $service = $response->fetch();

    if($_SERVER['REQUEST_METHOD']==='POST'){
        $ID_LIVRE= $_POST['ID_LIVRE'];
        $optAuteur= $_POST['optAuteur'];
        $optEditeur= $_POST['optEditeur'];
        $NOM_LIVRE= $_POST['NOM_LIVRE'];

        $reqUpdate ="UPDATE livres SET ID_AUTEUR='$optAuteur', ID_EDITEUR='$optEditeur',NOM_LIVRE='$NOM_LIVRE' where ID_LIVRE='$ID_LIVRE'";
        
        $con->exec($reqUpdate);

        header('Location:../views/livres.php');
        exit;
    }
?>