<?php
    require_once "../includes/connectBd.php";
    $con = connectdb();

    $req ="DELETE FROM editeur WHERE ID_EDITEUR = '".$_GET['id']."'";
    $con->query($req);
    
    header('Location:../views/livres.php');
?>