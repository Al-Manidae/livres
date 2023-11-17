<?php
    require_once "../includes/connectBd.php";
    $con = connectdb();

    $req ="DELETE FROM livres WHERE ID_LIVRE = '".$_GET['id']."'";
    $con->query($req);
    
    header('Location:../views/livres.php');
?>