<?php

require_once "../includes/connectBd.php" ;

$con = connectdb();

$requeteAuteur = 'SELECT * FROM auteur';
$responseAuteur = $con->query($requeteAuteur);
$lignesAuteur = $responseAuteur->fetchAll();

$requeteEditeur = 'SELECT * FROM editeur';
$responseEditeur = $con->query($requeteEditeur);
$lignesEditeur = $responseEditeur->fetchAll();

$requeteLivre = 'SELECT livres.ID_LIVRE , livres.NOM_LIVRE , auteur.NOM_AUTEUR, editeur.NOM_EDITEUR FROM livres JOIN auteur ON auteur.ID_AUTEUR = livres.ID_AUTEUR JOIN editeur ON editeur.ID_EDITEUR = livres.ID_AUTEUR;';
$responseLivre = $con->query($requeteLivre);
$lignesLivre = $responseLivre->fetchAll();

?>