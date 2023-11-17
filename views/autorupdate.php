<?php
    require_once "../includes/head.php";
    require_once "../controllers/autorupdatecontroller.php";
?>
<body>
    <div>
        <h1>Modifier le nom de l'editeur</h1>
    </div>
    <div>
        <form action="../controllers/autorupdatecontroller.php" method="POST">
            <div>
                <input type="hidden" id="ID_AUTEUR" name="ID_AUTEUR" value="<?php echo $autor['ID_AUTEUR']; ?>">
                <label for="NOM_AUTEUR" >Nom de l'editeur</label>
                <input type="text" id="NOM_AUTEUR" name="NOM_AUTEUR" value="<?php echo $autor['NOM_AUTEUR']; ?>">
            </div>
            </div>
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>