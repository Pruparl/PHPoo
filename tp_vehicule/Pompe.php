<?php
class Pompe

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


/************************/
/***** Attributs ********/
/************************/
{
    /**
     * @var string
     */
    private $typeCarburant; // le type de carburant (SP95 ou SP98)

    /**
     * @var int
     */
    private $contenanceCuve; // la taille de la cuve

    /**
     * @var int
     */
    private $contenuCuve; // le restant de la cuve

    private static $carburantAccepted = [
        'SP95',
        'SP98'
    ];

    public function __construct(
        string $typeCarburant,
        int $contenanceCuve,
        int $contenuCuve
    )

    
    /**
     * Get the value of typeCarburant
     *
     * @return  string
     */ 
    public function getTypeCarburant(): string
    {
        if(!in_array($typeCarburant, self::$carburantAccepted)){
            trigger_error(
            'Le type de carburant doit être ' . implode(' ou ', self::$carburantAccepted), E_USER_ERROR
            );
        }

        return $this->typeCarburant;
    }

    /**
     * Set the value of typeCarburant
     *
     * @param  string  $typeCarburant
     *
     * @return  self
     */ 
    public function setTypeCarburant(string $typeCarburant): self
    {
        $this->typeCarburant = $typeCarburant;

        return $this;
    }



    /**
     * Get the value of contenanceCuve
     *
     * @return  int
     */ 
    public function getContenanceCuve(): int
    {
        return $this->contenanceCuve;
    }

    /**
     * Set the value of contenanceCuve
     *
     * @param  int  $contenanceCuve
     *
     * @return  self
     */ 
    public function setContenanceCuve(int $contenanceCuve): self
    {
        $this->contenanceCuve = $contenanceCuve;

        return $this;
    }

    /**
     * Get the value of contenuCuve
     *
     * @return  int
     */ 
    public function getContenuCuve(): int
    {
        return $this->contenuCuve;
    }

    /**
     * Set the value of contenuCuve
     *
     * @param  int  $contenuCuve
     *
     * @return  self
     */ 

    public function setContenuCuve(int $contenuCuve): self
    {
    /**************/
    /** Méthodes pour le TP **/
    /**************/

        // si le contenu restant arrive à 0,
        // on redéfinie le contenu du plein
        if($contenuCuve < $this->contenanceCuve){
            $contenuCuve = $this-> contenuCuve;
        }

        $this->contenuCuve = $contenuCuve;

        return $this;
    }

}
