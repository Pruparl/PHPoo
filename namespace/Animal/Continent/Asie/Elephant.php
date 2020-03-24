<?php


namespace Animal\Continent\Asie;

use Animal\Elephant as ElephantInterface;

class Elephant implements ElephantInterface
{
    /**
     * @inheritDoc
     */
    public function getTailleOreille()
    {
        return 'Petites Oreilles';
    }
}