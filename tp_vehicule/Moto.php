<?php
require_once 'Vehicule.php';

class Moto extends Vehicule
/*
- typeCarburant : le type de carburant (SP95 ou SP98)
- vitesseMax : la vitesse maximale du véhicule
- une vitesse (zéro par défaut)
- contenanceReservoir : la taille du réservoir
- contenuReservoir : combien de litre de carburant il contient
- le nombre de roues (lié au type de véhicule, toujours le même pour le même type)
Ajouter un construteur (__construct)
Instancier un véhicule de chaque type
*/

{
    const NB_ROUES = 2;

    public function getNbRoues(): int
    {
        return self::NB_ROUES;
    }

    /**
     * @var string
     */
    private $constructeur =''; // le constructeur du véhicule

}