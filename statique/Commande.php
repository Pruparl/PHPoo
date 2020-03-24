<?php
class Commande
{
    /**
     * @var string
     */
    private $status = 'en cours';

    public static $acceptedStatuses = [
        'en cours',
        'envoyée',
        'annulée',
        'livrée'
    ];


    /**
     * @var int
     */
    private static $nbCommandes = 0;

    public function __construct()
    {
        self::$nbCommandes++;
    }

    /**
     * Get the value of status
     *
     * @return  string
     */ 
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @param  string  $status
     *
     * @return  self
     */ 
    public function setStatus(string $status): self
    {
        // on accède à un attribut statique avec ::$nomDeLAttribut
        if (!in_array($status, self::$acceptedStatuses)){
            trigger_error('Statut inconnu', E_USER_WARNING);
        }
        $this->status = $status;

        return $this;
    }

    /**
     * Get the value of nbCommandes
     * qui passe en Getter statique pour l'attribut statique privé $nbCommandes
     *
     * @return  int
     */ 
    public static function getNbCommandes()
    {
        return self::$nbCommandes;
    }

    public static function displayStatus()
    {
        // fatal error : this n'a pas de sens dans une méthode statique
        // car $this fait référence à l'objet qui appelle la méthode
        // et une méthode statique est une méthode de la classe elle-même
        echo 'statut : ' . $this->status;
    }
}