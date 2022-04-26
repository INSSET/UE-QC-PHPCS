<?php

namespace PHPUnit\Framework\TestCase;
use UPJV\Validator\IdentiqueA;

require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorEngine.php';
require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorInterface.php';
require_once __DIR__ . '/../../src/UPJV/Validator/IdentiqueA.php';

/**
 * @covers \UPJV\Validator\IdentiqueA
 */
class IdentiqueATest extends \PHPUnit\Framework\TestCase
{
    public function testBuild(): object
    {
        $validateur = new IdentiqueA();
        $obj = $validateur->build( ['Mathis']);
        $this->assertInstanceOf(\UPJV\Validator\ValidatorInterface::class , $obj);
        return $obj;
    }

    /**
     * @depends testBuild
     */
    public function testCheckValide( object $obj ): void
    {
        $this->assertEquals(true, $obj->check('Mathis'));
    }

    /**
     * @depends testBuild
     */
    public function testCheckNotValide( object $obj ): void
    {
        $this->assertEquals(false, $obj->check('mathis'));
    }

}
