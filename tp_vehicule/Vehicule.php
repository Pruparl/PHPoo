<?php
abstract class Vehicule

/*
Créer une classe abstraite Vehicule                     fait
2 classes qui en héritent : Moto et Voiture             fait
qui vont contenir des méthodes pour retourner :
- typeCarburant : le type de carburant (SP95 ou SP98)
- vitesseMax : la vitesse maximale du véhicule
- une vitesse (zéro par défaut)
- contenanceReservoir : la taille du réservoir
- contenuReservoir : combien de litre de carburant il contient
- le nombre de roues (lié au type de véhicule, toujours le même pour le même type)
Ajouter un construteur (__construct)
Instancier un véhicule de chaque type

    Bonus :
Ajouter une méthode accelerer qui prend en paramètre le nombre de Km/h
Emppêcher de dépasser la vitesse max
*/

{
    /**
     * @var string
     */
    private $typeCarburant; // le type de carburant (SP95 ou SP98)
    
    /**
     * @var int
     */
    private $vitesseMax; // la vitesse maximale du véhicule

    /**
     * @var int
     */
    private $vitesse =0; // zéro par défaut

    /**
     * @var int
     */
    private $contenanceReservoir; // la taille du réservoir

    private static $carburantAccepted = [
        'SP95',
        'SP98'
    ];

    /**
     * @var int
     */
    private $contenuReservoir; // combien de litre de carburant il contient

    public function __construct(
        string $typeCarburant,
        int $vitesseMax,
        int $contenanceReservoir,
        int $contenuReservoir
    ){
        $this
            ->setTypeCarburant($typeCarburant)
            ->setVitesseMax($vitesseMax)
            ->setContenanceReservoir($contenanceReservoir)
            ->setContenuReservoir($contenuReservoir)
            ;
    }

/************************
 * Les Getters et Setters
************************/

    /**
     * Get the value of typeCarburant
     *
     * @return  string
     */ 
    public function getTypeCarburant(): string
    {
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
        if(!in_array($typeCarburant, self::$carburantAccepted)){
            trigger_error(
                'Le type de carburant doit être ' . implode(' ou ', self::$carburantAccepted), E_USER_ERROR
            );
        }

        $this->typeCarburant = $typeCarburant;

        return $this;
    }

    /**
     * Get the value of vitesseMax
     *
     * @return  int
     */ 
    public function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    /**
     * Set the value of vitesseMax
     *
     * @param  int  $vitesseMax
     *
     * @return  self
     */ 
    public function setVitesseMax(int $vitesseMax): self
    {
        $this->vitesseMax = $vitesseMax;

        return $this;
    }

    /**
     * Get the value of vitesse
     *
     * @return  int
     */ 
    public function getVitesse(): int
    {
        return $this->vitesse;
    }

    /**
     * Set the value of vitesse
     *
     * @param  int  $vitesse
     *
     * @return  self
     */ 
    public function setVitesse(int $vitesse): self
    {
        // si la vitesse dépasse la vitesse Max,
        // on redéfinie la vitesse à la valeur de la vitesse max du véhicule
        if($vitesse > $this->vitesseMax){
            $vitesse = $this->vitesseMax;
        }
        $this->vitesse = $vitesse;

        return $this;
    }

    /**
     * Get the value of contenanceReservoir
     *
     * @return  int
     */ 
    public function getContenanceReservoir(): int
    {
        return $this->contenanceReservoir;
    }

    /**
     * Set the value of contenanceReservoir
     *
     * @param  int  $contenanceReservoir
     *
     * @return  self
     */ 
    public function setContenanceReservoir(int $contenanceReservoir): self
    {
        $this->contenanceReservoir = $contenanceReservoir;

        return $this;
    }

    /**
     * Get the value of contenuReservoir
     *
     * @return  int
     */ 
    public function getContenuReservoir(): int
    {
        return $this->contenuReservoir;
    }

    /**
     * Set the value of contenuReservoir
     *
     * @param  int  $contenuReservoir
     *
     * @return  self
     */ 
    public function setContenuReservoir(int $contenuReservoir): self
    {
        $this->contenuReservoir = $contenuReservoir;

        return $this;
    }

    public function accelerer(int $kmh): void
    {
        $this->setVitesse($this->vitesse += $kmh);
    }

    
    /**************/
    /** Méthodes pour le TP **/
    /**************/

    // public function fairePlein(Pompe $pompe) {
        // this : le véhicule
        // pompe : la pompe
        // $this->getContenuReservoir()
        // ou
        // $this->ContenuReservoir

        // le contenu de la cuve de la pompe
        // $pompe->getContenuCuve();
        // $pompe->getContenuCuve(newValue);

        // augmentation du contenu réservoir du véhicule, jusqu'à son max

        // $this->setContenuReservoir($this->ContenuReservoir += $ContenanceReservoir);

        // diminution du contenu cuve, jusqu'à 0 min
        //if($this->setContenuCuve($this->ContenuCuve -= [$ContenuReservoir -- $ContenuReservoir]);   )};

        /*************/
        /** Corrigé **/
        /*************/

        public function fairePlein(Pompe $pompe)
        {
            if($this->TypeCarburant != $pompe->getTypeCarburant)
            {
                echo 'Stop ! Erreur de pompe';

                // pour ne pas faire le plein :
                return;
            }

            // quantité de crurant nécessaire pour faire le plein
            $besoinCarburant = $this->ContenanceReservoir - $this->contenuReservoir;


            if($besoinCarburant > $pompe->getContenuCuve())
            {
                // on redéfinit le besoin avec le contenu de la pompe
                $besoinCarburant = $pompe->getContenuCuve();
            }

            // MAJ du contenu du réservoir
            $this->setContenuCuve($this->ContenuReservoir + $besoinCarburant);

            // MAJ du contenu de la cuve de la pompe
            $pompe->setContenu($pompe->getContenu() - $besoinCarburant);
        }

    abstract public function getNbRoues(): int;

}