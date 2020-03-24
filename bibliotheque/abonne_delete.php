<?php

use App\FlashMessage;
use Model\Abonne;

require_once 'App/init.php';

$abonne = Abonne::find($_GET['id']);

// ajouter une méthode dans Abonne pour savoir si l'abonné a des emprunts
// Supprimer s'il n'en a pas, renvoyer un message d'erreur sinon

if($abonne->hasEmprunts()){
    FlashMessage::set("L'abonn ne peut pas être suprimé", 'error');
} else{
    $abonne->delete();

    FlashMessage::set("L'abonné est supprimé");
}

header('Location: abonnes.php');

