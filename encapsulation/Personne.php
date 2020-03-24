<?php
class Personne
{
    /**
     * @var string
     */
    private $prenom;

    /**
     * Getter de l'attribut prenom :
     * retourne la valeur de l'attribut
     * 
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Setter de l'attribut prenom : permet de modifier la valeur de l'attribut
     * 
     * @param string $value
     */
    public function getPrenom($value)
    {
        if (ctype_digit($value)){
            // on lance un warning
            trigger_error("Un nombre n'est pas un prénom", E_USER_WARNING);

            return;
        }

        $this->prenom = $value;
    }

        /**
     * @var string
     */
    private $nom;

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     * 
     * @return self
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }
}