<!DOCTYPE HTML>

<html>

    <?php include('../includes/head.php'); ?>

    <body>

        <?php include('../includes/navbar.php'); ?>

        <h1>Test Administation</h1>

        <form class="form-inline" method="post" target="../pages/index.php">

            <label class="sr-only" for="modifTitre">Titre</label>
            <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                    <div class="input-group-text">Titre</div>
                </div>
                <input type="text" class="form-control" id="modifTitre" placeholder="Titre" name="titre">
            </div>

            <button type="submit" class="btn btn-primary mb-2">Modifier</button>
        </form>

    </body>

<html>
