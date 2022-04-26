<?php

namespace PHPUnit\Framework\TestCase;
use UPJV\Validator\InferieurA;

require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorEngine.php';
require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorInterface.php';
require_once __DIR__ . '/../../src/UPJV/Validator/InferieurA.php';

/**
 * @covers \UPJV\Validator\InferieurA
 */
class InferieurATest extends \PHPUnit\Framework\TestCase
{
    public function testBuild(): object
    {
        $validateur = new InferieurA();
        $obj = $validateur->build( [18]);
        $this->assertInstanceOf(\UPJV\Validator\ValidatorInterface::class , $obj);
        return $obj;
    }

    /**
     * @depends testBuild
     */
    public function testCheckValide( object $obj ): void
    {
        $this->assertEquals(true, $obj->check(15));
    }

    /**
     * @depends testBuild
     */
    public function testCheckNotValide( object $obj ): void
    {
        $this->assertEquals(false, $obj->check(23));
    }

}