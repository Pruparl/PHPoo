<?php


namespace Animal\Continet\Afrique;


class Gazelle
{
    public function voirElephant()
    {
        /*
         * Animal\Continent\Afrique\Elephant
         * car sans utiliser le nom complet de la classe et sans use,
         * la classe est celle qui se trouve dans le namespace dans lequel on est
         */
        $elephant = new Elephant();

        echo 'Je vois un éléphant avec de ' . $elephant->getTailleOreille() . '.';
    }

    public function etreVue()
    {
        /**
         * L'antislash initial faut revenir à la racine des namespaces
         * La classe Touriste n'a pas de namespace
         * La classe attendue serait Animal\Continent\Afrique\Touriste
         */
        $touriste = new \Tourist();

        $touriste->voirGazelle();
    }
}