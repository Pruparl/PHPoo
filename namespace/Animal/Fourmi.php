<?php


namespace Animal;

// use avec alias pour un namespace et non pour une classe
use Animal\Continent as Monde;

class Fourmi
{
    public function voirElephantAfrique()
    {
        // Animal\Continent\Afrique\Elephant :
        // nom de la classe relativeemnt au namespace dans lequel on se trouve
        $elephant = new Continent\Afrique\Elephant();

        echo 'Je vois un éléphant avec de ' . $elephant->getTailleOreille() . '.';
    }

    public function voirElephant(string $continent)
    {
        if($continent == 'afrique'){
            $elephant = new Monde\Afrique\Elephant();
        } elseif($continent == 'asie'){
            $elephant = new Monde\Asie\Elephant();
        }

        if(isset($elephant)){
            echo 'Je vois un éléphant avec de ' . $elephant->getTailleOreille() . '.';
        }
    }
}