<?php
require_once 'Chat.php';

/*
Une classe déclarée finale ne peut petre surchargée
*/
final class Siamois extends Chat
{
    /*
    La méthode ne peut pas être surchargée car déclarée finale dans Chat

    public function ronronner(): void
    {
        echo 'Ronronron';
    }
    */

    public function decrire(): string
    {
        // private ne peut être hérité, donc la classe $couleur n'a pas pu être utilisé ici
        // L'attribut privé couleur déclaré dans Chat n'est pas accessibles à ses classes filles
        // return 'Un chat de couleur : ' . $this->couleur;

        // On passe par les getters / setters pour accéder à l'attribut privé mais on peut accéder
        // directement à l'attribut protégé
        return 'Un chat de couleur ' . $this->getCouleur() . ' aux yeux ' . $this->couleurYeux;
    }
}