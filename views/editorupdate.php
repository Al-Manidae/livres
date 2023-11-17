<?php
    require_once "../includes/head.php";
    require_once "../controllers/editorupdatecontroller.php";
?>
<body>
    <div>
        <h1>Modifier le nom de l'editeur</h1>
    </div>
    <div>
        <form action="../controllers/editorupdatecontroller.php" method="POST">
            <div>
                <input type="hidden" id="ID_EDITEUR" name="ID_EDITEUR" value="<?php echo $editor['ID_EDITEUR']; ?>">
                <label for="NOM_EDITEUR" >Nom de l'editeur</label>
                <input type="text" id="NOM_EDITEUR" name="NOM_EDITEUR" value="<?php echo $editor['NOM_EDITEUR']; ?>">
            </div>
            </div>
            <button type="submit">Enregistrer</button>
        </form>
    </div>
</body>