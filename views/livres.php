<?php
    require_once "../includes/head.php";
    require_once "../controllers/livrescontroller.php";
?>

    <body>
        
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
                        </tr>
                    ';
                }
                ?>
            </tbody>
        </table>

        
    </body>

</html>