<?php

require_once "../includes/connectBd.php";

 $con = connectdb();

if (isset($_POST['NOM_AUTEUR'])) {

    $NOM_AUTEUR= $_POST['NOM_AUTEUR'];
    
    $rec= $con->prepare('INSERT INTO auteur (NOM_AUTEUR) VALUES (?)');
    $rec->execute(array($NOM_AUTEUR));
    header('location: ../views/livres.php');
}

if (isset($_POST['NOM_EDITEUR'])) {

    $NOM_EDITEUR= $_POST['NOM_EDITEUR'];
    
    $rec= $con->prepare('INSERT INTO editeur (NOM_EDITEUR) VALUES (?)');
    $rec->execute(array($NOM_EDITEUR));
    header('location: ../views/livres.php');
}

if (isset($_POST['optAuteur']) && isset($_POST['optEditeur']) && isset($_POST['NOM_LIVRE'])) {

    $optAuteur= $_POST['optAuteur'];
    $optEditeur= $_POST['optEditeur'];
    $NOM_LIVRE= $_POST['NOM_LIVRE'];
    
    $rec= $con->prepare('INSERT INTO livres (ID_AUTEUR,ID_EDITEUR,NOM_LIVRE) VALUES (?,?,?)');
    $rec->execute(array($optAuteur,$optEditeur,$NOM_LIVRE));

    header('location: ../views/livres.php');
}



?>