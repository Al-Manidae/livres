<?php
    require_once "../includes/head.php";
    require_once "../controllers/livrescontroller.php";
?>

    <body>
        
        <div>
            <a href="addbook.php">
                <button>Ajouter des elements</button>
            </a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Liste des auteurs</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lignesAuteur as $ligneAuteur) {
                    echo '
                        <tr>
                            <td>'.$ligneAuteur['NOM_AUTEUR'].'</td>
                            <td><a href="autorupdate.php?id='.$ligneAuteur['ID_AUTEUR'].'">Modifier</a></td>
                            <td><a href="../controllers/autordelete.php?id='.$ligneAuteur['ID_AUTEUR'].'">Supprimer</a></td>
                        </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
        
        <table>
            <thead>
                <tr>
                    <th>Liste des éditeurs</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lignesEditeur as $ligneEditeur) {
                    echo '
                        <tr>
                            <td>'.$ligneEditeur['NOM_EDITEUR'].'</td>
                            <td><a href="editorupdate.php?id='.$ligneEditeur['ID_EDITEUR'].'">Modifier</a></td>
                            <td><a href="../controllers/editordelete.php?id='.$ligneEditeur['ID_EDITEUR'].'">Supprimer</a></td>
                        </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
        
        <table>
            <thead>
                <tr>
                    <th colspan="3">Liste des livres</th>
                </tr>
                <tr>
                    <th>Auteur</th>
                    <th>Editeur</th>
                    <th>Nom du livre</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($lignesLivre as $ligneLivre) {
                    echo '
                        <tr>
                            <td>'.$ligneLivre['NOM_AUTEUR'].'</td>
                            <td>'.$ligneLivre['NOM_EDITEUR'].'</td>
                            <td>'.$ligneLivre['NOM_LIVRE'].'</td>
                            <td><a href="bookupdate.php?id='.$ligneLivre['ID_LIVRE'].'">Modifier</a></td>
                            <td><a href="../controllers/bookdelete.php?id='.$ligneLivre['ID_LIVRE'].'">Supprimer</a></td>
                        </tr>
                    ';
                }
                ?>
            </tbody>
        </table>

        
    </body>

</html>