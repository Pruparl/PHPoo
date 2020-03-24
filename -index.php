<?php
class utilisateur{

    /**
     * Un commentaire de documentation (avec /** )
     * 
     * Attribut (ou propriété) de la classe (= variable interne)
     * Un tag pour préciser le type de la variable et éventuellement sa description
     * @var string le prénom de l'utilisateur
     */
    public $prenom = 'Julien';

    /**
     * Un attribut sans valeur par défaut ( = null)
     * 
     * une chaîne de caractère ou null
     * @var string|null
     * 
     */
    public $nom;

    /**
     * un attribut privé
     * 
     * @var int
     */
    private $age = 20;

    /**
     * Une méthode = une fonction interne à la classe
     * 
     * @return string
     * 
     */

    public function nomComplet()
    {
        // $this dans une méthode fait référence à l'objet qui appelle la méthode
        return rtrim($this->prenom . ' ' . $this->nom);
        // rtrim ou ltrim, lecture à partir r (right) ou l (left)
    }



    /**
     * 
     * @return string
     */
    public function infos()
    {
        // on peut accéder
        return $this->nomComplet() . ', ' . $this->age. ' ans';
    }

    // Ecrire une méthode qui fait vieillir l'utilisateur d'un an
    /**
     * 
     * @return null
     */
    public function anniversaire()
    {
        $this->age++;
    }



}


// instanciation de la classe = création d'un objet à partir de la classe
$moi = new utilisateur();

// la flèche pour accéder à l'attribut de l'objet
echo $moi->prenom;

$toi = new utilisateur();

// affectation d'une valeur à l'attribut prenom de l'objet
$toi->prenom = 'Thomas';

echo '<br>' . $moi->prenom; // Julien
echo '<br>' . $toi->prenom; // Thomas

// on ne peut pas faire un echo sur un objet
// echo $moi;

var_dump($moi->nom); // null

$toi->nom = 'Dupont';

// appel de la méthode nomComplet
echo $toi->nomComplet();

echo '<br>' . $moi->nomComplet();

// Fatal error : impossible d'accéder à un attribut privé depuis un objet utilisateur
// echo $moi->age;

echo '<br>' . $toi->infos(); // 20 ans
// appel à la méthode
$toi->anniversaire();
echo '<br>' . $toi->infos(); // 21 ans


var_dump($toi);

// à éviter de faire
$toi->adresse = '2 rue sedaine';
// c'est une création d'attribut à la volée
// pour rajouter un attribut, le rajouter à la classe plutôt qu'à un objet, comme ici

var_dump($toi);

// création d'un tableau en objet
// l'objet appartient à la classe de base en PHP : stdClass
$array = ['pseudo' => 'Ben', 'email' => 'Ben@gmail.com'];

// conversion du tableau en objet
$obj = (object)$array;

var_dump($toi);

// qui ne marche pas, erreur : array ti string conversion
// $str = (string)$array;

$lui = new stdClass();
$lui->nomComplet = 'Julien Anest';

var_dump($lui);


// retourne la classe à laquelle appartient un objet
echo get_class($moi); // utilisateur

echo get_class($toi);
