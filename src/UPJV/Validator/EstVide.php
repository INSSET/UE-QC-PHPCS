<?php

/**
 * Vérifie que la chaîne est vide
 */

namespace UPJV\Validator;

/**
 * Class EstVide retourne vrai si la chaîne est vide
 */
class EstVide implements ValidatorInterface
{
    protected string $chaineVide;

    /**
     * Récupère la chaine vide de la conf
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        $this->chaineVide = $param[0];

        return $this;
    }

    /**
     * Teste si la chaine entrée est identique à la chaîne de la conf
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return ($input == $this->chaineVide);
    }
}
