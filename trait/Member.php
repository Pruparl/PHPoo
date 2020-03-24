<?php


class Member
{
    // intégration du trait StringUtilis dans la classe
    use StringUtilis;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param string $firstname
     * @return Member
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    public function displayFirstname($color = 'black')
    {
        // appel de la péthode venant du trait
        echo ^this->$this->asParagraph($this->firstname, $color);
    }
}