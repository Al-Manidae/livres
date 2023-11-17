<?php
    require_once "../includes/head.php";
    require_once "../controllers/bookupdatecontroller.php";
?>
<body>
    <div>
        <h1 class="">Modifier le livre</h1>
    </div>
    <div class="">
        <form action="../controllers/bookupdatecontroller.php" method="POST">
            <input type="hidden" id="ID_LIVRE" name="ID_LIVRE" value="<?php echo $service['ID_LIVRE']; ?>">
            <div>
                <label for="optAuteur">Auteur du livre</label>
                <!-- <input type="text" id="NOM_AUTEUR" name="nomserv" value="<?php echo $service['NOM_AUTEUR']; ?>">                 -->
                <select name="optAuteur" id="NOM_AUTEUR" required>
                    <?php
                    foreach($lignesAuteur as $ligneAuteur) {
                        echo '
                            <option value="'.$ligneAuteur['ID_AUTEUR'].'">'.$ligneAuteur['NOM_AUTEUR'].'</option>
                        ';
                    }
                    ?>
                </select>
            </div>
            <div>
                <label for="optEditeur">Editeur du livre</label>
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
                <label for="NOM_LIVRE">Nom du  du livre</label>
                <input type="text" name="NOM_LIVRE" id="NOM_LIVRE" placeholder="Nom du livre" value="<?php echo $service['NOM_LIVRE']; ?>">
            </div>
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>