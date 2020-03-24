<?php

require_once 'Volume.php';

class Sphere implements Volume
{

    /**
     * @inheritDoc
     */
    public function getForm(): string
    {
        //
        return 'sphère';
    }
}