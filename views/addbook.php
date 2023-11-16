<?php
    require_once "../includes/head.php";
    require_once "../controllers/addcontroller.php";
    require_once "../controllers/livrescontroller.php";
?>

    <body>
        <form action="../controllers/addcontroller.php" method="post">
            <fieldset>
                <legend>Nouvel auteur</legend>     
                <input type="text" name="NOM_AUTEUR" id="NOM_AUTEUR" placeholder="Nom de l'auteur">
                <input type="submit" value="Envoyer">
            </fieldset>
        </form>
        <form action="../controllers/addcontroller.php" method="post">
            <fieldset>
                <legend>Nouvel éditeur</legend>       
                <input type="text" name="NOM_EDITEUR" id="NOM_EDITEUR" placeholder="Nom de l'éditeur">
                <input type="submit" value="Envoyer" required>
            </fieldset>
        </form>
        <form action="../controllers/addcontroller.php" method="post">
            <fieldset>
                <legend>Nouveau livre</legend>
                <div>
                    <label for="optAuteur">Auteur</label>
                    <select name="optAuteur" id="optAuteur" required>
                        <?php
                        foreach($lignesAuteur as $ligneAuteur) {
                            echo '
                                <option value="'.$ligneAuteur['ID_AUTEUR'].'">'.$ligneAuteur['NOM_AUTEUR'].'</option>
                            ';
                        }
                        ?>
                    </select>
                    <label for="optEditeur">Editeur</label>
                    <select name="optEditeur" id="optEditeur" required>
                        <?php
                        foreach($lignesEditeur as $ligneEditeur) {
                            echo '
                                <option value="'.$ligneEditeur['ID_EDITEUR'].'">'.$ligneEditeur['NOM_EDITEUR'].'</option>
                            ';
                        }
                        ?>
                    </select>
                </div>
                <div>
                    <label for="NOM_LIVRE">Nom du livre</label>
                    <input type="text" name="NOM_LIVRE" id="NOM_LIVRE" placeholder="Nom du livre" required>
                </div>
                <div>                    
                    <input type="submit" value="Envoyer">
                </div>
            </fieldset>
        </form>
    </body>

</html>