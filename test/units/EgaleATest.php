<?php

namespace PHPUnit\Framework\TestCase;
use UPJV\Validator\EgaleA;

require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorEngine.php';
require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorInterface.php';
require_once __DIR__ . '/../../src/UPJV/Validator/EgaleA.php';

/**
 * @covers \UPJV\Validator\Min
 */
class EgaleATest extends \PHPUnit\Framework\TestCase
{
    public function testBuild(): object
    {
        $validateur = new EgaleA();
        $obj = $validateur->build( [7]);
        $this->assertInstanceOf(\UPJV\Validator\ValidatorInterface::class , $obj);
        return $obj;
    }

    /**
     * @depends testBuild
     */
    public function testCheckValide( object $obj ): void
    {
        $this->assertEquals(true, $obj->check("Clement"));
    }

    /**
     * @depends testBuild
     */
    public function testCheckNotValide( object $obj ): void
    {
        $this->assertEquals(false, $obj->check("Tintin"));
    }

}