<?php


namespace Animal\Continet\Afrique;

use Animal\Elephant as ElephantInterface;

class Elephant implements ElephantInterface

{
    /**
     * @inheritDoc
     */
    public function getTailleOreille()
    {
        return 'Grandes Oreilles';
    }
}