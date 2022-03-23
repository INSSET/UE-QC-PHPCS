<?php

/**
 * Vérifie que
 */

namespace UPJV\Validator;

/**
 * Class EstValide implémente les méthode build & check
 */
class EstValide implements ValidatorInterface
{
    /**
     * Ceci est de la documentation pour la fonction build
     * 
     * @param $input
     * 
     * @return bool
     */
    public function build(array $param): object
    {
        return $this;
    }

    /**
     * Ceci est de la documentation pour la fonction check
     * 
     * @param $input
     * 
     * @return bool
     */
    public function check($input): bool
    {
        return true;
    }
}
