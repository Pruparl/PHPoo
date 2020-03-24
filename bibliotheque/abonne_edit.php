<?php

use App\FlashMessage;
use Model\Abonne;

require_once 'App/init.php';

$errors = [];

/**
 * adapter la page pour la faire fonctionner en modification quand on reçoit un id en GET :
 * 1 - ajouter une méthode statique find() à la classe Abonne qui prend un id en paramètre
 * qui retourne un objet Abonne à partir d'une requête SQL
 * 2 - modifier la méthode save() pour qu'elle fasse un update si l'abonne à un id
 */

$abonne = new Abonne();

if(!empty($_POST)) {
    $abonne->setPrenom($_POST['prenom']);

    if ($abonne->validate($errors)){
        $abonne->save();

        FlashMessage::set("L'abonné est enregistré");

        header('Location: abonnes.php');
        die;
    }

}

include 'layout/top.php';
?>
<h1>Edition Abonné</h1>

<?php
if(!empty($errors)) :
?>
    <div class="alert alert-danger">
        <strong>Le formulaire contient des erreurs</strong><br>
        <?= implode('<br>', $errors) ?>
    </div>

<?php
endif;
?>

<form method="post">
    <div class="form-group">
        <label>Prenom</label>
        <input type="text" name="prenom" class="form-control" value="<? $abonne->getPrenom() ?>">
    </div>
    <div class="text-rught"></div>
        <button class="btn btn-primary" type="submit">
            Enregistrer
        </button>
        <a href="abonnes.php" class="btn btn-secondary">
            Retour
        </a>
    </div>
</form>

<?php
include 'layout/bottom.php';
?>
