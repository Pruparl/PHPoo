<?php

require_once 'Volume.php';
require_once 'Texture.php';

/**
 * Une Classe peut implémenter plusieurs interfaces
 */
class Brique implements Volume, Texture
{

    /**
     * @inheritDoc
     */
    public function getMatiere(): string
    {
        return 'terre';
    }

    /**
     * @inheritDoc
     */
    public function getCouleur(): string
    {
        return 'rouge';
    }

    /**
     * @inheritDoc
     */
    public function getForm(): string
    {
        return 'parallépipède rectangle';
    }
}