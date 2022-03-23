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
     * ceci est de la documentation pour la fonction build
     */
    public function build(array $param): object
    {
        return $this;
    }

    /**
     * ceci est de la documentation pour la fonction check
     */
    public function check($input): bool
    {
        return true;
    }
}
