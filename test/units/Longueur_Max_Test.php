<?php

namespace PHPUnit\Framework\TestCase;
use UPJV\Validator\LongueurMax;

require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorEngine.php';
require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorInterface.php';
require_once __DIR__ . '/../../src/UPJV/Validator/LongueurMax.php';

/**
 * @covers \UPJV\Validator\LongueurMax
 */
class Longueur_Max_Test extends \PHPUnit\Framework\TestCase
{
    public function testBuild(): object
    {
        $validateur = new LongueurMax();
        $obj = $validateur->build([4]);
        $this->assertInstanceOf(\UPJV\Validator\ValidatorInterface::class , $obj);
        return $obj;
    }

    /**
     * @depends testBuild
     */
    public function testcheckValide( object $obj ): void
    {
        $this->assertEquals(true, $obj->check("léa"));
    }

    /**
     * @depends testBuild
     */
    public function testcheckNotValide( object $obj ): void
    {
       
       $this->assertEquals(false, $obj->check("cyril"));
    }

}