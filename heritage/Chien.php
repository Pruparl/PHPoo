<?php
require_once 'Animal.php';

/*
La classe Chien hérite de la classe Animal
*/

class Chien extends Animal
{
    /**
     * Implémentation de la méthode abstraite crier définir dans Animl
     * = sa définition concrète
     */
    public function crier(): string
    {
        return 'Ouaf';
    }

    public function mangerSucre(): void
    {
        echo 'Miam';
    }

}