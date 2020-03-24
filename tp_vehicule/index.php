<?php
/*
Créer une classe abstraite Vehicule
2 classes qui en héritent : Moto et Voiture
qui vont contenir des méthodes pour retourner :
- typeCarburant : le type de carburant (SP95 ou SP98)
- vitesseMax : la vitesse maximale du véhicule
- une vitesse (zéro par défaut)
- contenanceReservoir : la taille du réservoir
- contenuReservoir : combien de litre de carburant il contient
- le nombre de roues (lié au type de véhicule, toujours le même pour le même type)
Ajouter un construteur (__construct)
Instancier un véhicule de chaque type

Ajouter une méthode accelerer() qui prend en paramètre de combien de km/h
Empêcher que l'on puisse aller au-delà de la vitesse max
*/

require_once 'Voiture.php';
require_once 'Moto.php';
require_once 'Pompe.php';

$voiture = new Voiture('SP95', 180, 80, 50);
$moto = new Moto('SP98', 200, 30, 15);


// fatal error jetée par le setter de type de carburant
// $voiture2 = new Voiture('Diesel', 180, 80, 50);

var_dump($voiture, $moto);
echo $moto->getNbRoues();

echo '<br>' . $voiture->getVitesse() . 'km/h';
$voiture->accelerer(50);
echo '<br>' . $voiture->getVitesse() . 'km/h';
$voiture->accelerer(40);
echo '<br>' . $voiture->getVitesse() . 'km/h';
$voiture->accelerer(100);
echo '<br>' . $voiture->getVitesse() . 'km/h';


/*
Créer une classe Pompe (à essence) avec 3 attributs :
typeCarburant, contenance & contenu (de la cuve)
Dans Vehicule, ajouter une méthode fairePlein() qui prend une Pompe
en paramètre, qui remplit le réservoir du Vehicule et enlève autant
d'essence à la pompe

Bonus:
- gérer le cas où l'on ne va pas à une pompe du même type de carburant
que le véhicule : afficher un message et ne pas faire le plein
- gérer le cas où la pompe ne contient pas assez d'essence
 pour faire le plein : dans ce cas, vider la pompe

Tester tous les cas dans l'index
*/

$pompe = new Pompe ('SP98', 5000, 4000);

echo '<br> Avant le plein' ; 
var_dump($voiture, $pompe);
$voiture->fairePlein($pompe);

echo '<br> Après le plein' ; 
var_dump($voiture, $pompe);


$pompe2 = new Pompe ('SP95', 5000, 10);
echo '<br> Avant le plein' ; 
var_dump($voiture, $pompe2);

$voiture->fairePlein($pompe);
echo '<br> Après le plein' ; 
var_dump($voiture, $pompe2);

