<?php

/**
 * Vérifie que la date correspondent bien
 */

namespace UPJV\Validator;

/**
 * Class Avant implémente les méthode build & check
 */
class Avant implements ValidatorInterface
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
        $d = explode('-', $input);

        return (mktime(0, 0, 0, $d[1], $d[0], $d[2]) < $this->size);
    }
}
