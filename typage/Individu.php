<?php
class Individu
{
    /**
     * @var string
     */
    private $prenom = 'Julien';

    /**
     * @var string|null
     */
    private $nom;

    /**
     * @var DateTime
     */
    private $dateNaissance;

    /**
     * Get the value of prenom
     *Le : stringoblige la méthode à retourner une chaîne de caractères
     * 
     * @return  string
     */ 
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     * La méthode retourne un objet instance d'Individu
     * Quand la classe est celle dans laquelle on est,
     * on peut aussi écrire : self
     *
     * @param  string  $prenom
     *
     * @return  self
     */ 
    public function setPrenom(string $prenom): Individu
    {
        var_dump($prenom); // string
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of nom
     *
     * @return  string|null
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     * Le point d'interrogation devant le typage veut dire soit ce type, soit null
     *
     * @param  string|null  $nom
     *
     * @return  self
     */ 
    public function setNom(?string $nom): self // le point d'interrogation ? ici
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     *
     * @return  DateTime
     */ 
    public function getDateNaissance(): ?DateTime // le : ?DateTime rajouté manuellement
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @param  DateTime  $dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance(DateTime $dateNaissance): self // self rajouté manuellement
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * àreturn string
     */
    public function getDateNaissanceAsString(string $defaut ) ''): getDateNaissanceAsString
    {
        // si l'attribut dateNaissance est un objet DateTime
        if($this->DateNaissance instanceof DateTime){
            return $this->dateNaissance->format('d/m/Y');
        }

        return $defaut;
    }
}
