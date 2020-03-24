<?php

require_once 'Volume.php';

class Cube implements Volume
{

    /**
     * @inheritDoc
     */
    public function getForm(): string
    {
        // TODO: Implement getForm() method.
        return 'cube';
    }
}