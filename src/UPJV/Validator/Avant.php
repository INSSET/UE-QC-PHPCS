<?php

/**
 * Vérifie que la date correspondent bien
 */

namespace UPJV\Validator;

/**
 * Class AvantDate implémente les méthode build & check
 */
class AvantDate implements ValidatorInterface
{
    protected int $size;

    /**
     * Récupère la taille minimum spécifier dans la conf
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        $this->size = $param[0];

        return $this;
    }

    /**
     * Test la longueur de la chaine de caractères
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return (strlen($input) >= $this->size);
    }
}