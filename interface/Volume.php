<?php


interface Volume
{
    /** création des méthodes abstraites
     * Une classe qui implémente cette interface doit contenir cette méthode avec un contenu
     *
     * @return string
     */
    public function getForm(): string;
}
