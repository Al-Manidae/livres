<?php
    require_once "../includes/connectBd.php";
    $con = connectdb();

    $req ="DELETE FROM auteur WHERE ID_AUTEUR = '".$_GET['id']."'";
    $con->query($req);
    
    header('Location:../views/livres.php');
?>