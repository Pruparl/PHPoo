<?php


class User
{
    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $Lasttname;

    /**
     * @return string
     */
    public function getLasttname(): string
    {
        return $this->Lasttname;
    }

    /**
     * @return DateTime
     */
    public function getBirthdate(): DateTime{

    }

    /**
     * @param string $Lasttname
     * @return User
     */
    public function setLasttname($Lasttname): User
    {
        if(ctype_digit($Lasttname)){
            // InvalidArgumentExeption est une classe native de PHP qui hérite d'Exception
            throw new InvalidArgumentException('Le nom ne doit pas être un nombre');
        }

        $this->Lasttname = $Lasttname;
        return $this;
    }

    /** Getter
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /** Setter
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname); User
    {
        if(ctype_digit($firstname)){
            throw new Exception('Le prénom ne doit pas être un nombre');
        }

        $this->firstname = $firstname;
        return $this;
    }

}