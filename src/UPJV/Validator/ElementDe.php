<?php

/**
 * Vérifie si l'element est celui d'un tableau ou pas
 */

namespace UPJV\Validator;

/**
 * Class ElementDe implémente les méthode build & check
 */
class ElementDe implements ValidatorInterface
{
    protected array $tableau;
    /**
     * Function build récupère l'objet
     *
     * @param array $param
     *
     * @return object
     */
    public function build(array $param): object
    {
        $this->tableau = $param[0];

        return $this;
    }

    /**
     * Function check verifie si cet un élément d'un tableau
     *
     * @param $input
     *
     * @return bool
     */
    public function check($input): bool
    {
        return in_array($input, $this->tableau);
    }
}
