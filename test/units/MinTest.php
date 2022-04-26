<?php

namespace PHPUnit\Framework\TestCase;
use UPJV\Validator\Min;

require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorEngine.php';
require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorInterface.php';
require_once __DIR__ . '/../../src/UPJV/Validator/Min.php';

/**
 * @covers \UPJV\Validator\Min
 */
class MinTest extends \PHPUnit\Framework\TestCase
{
    public function testBuild(): object
    {
        $validateur = new Min();
        $obj = $validateur->build( [2]);
        $this->assertInstanceOf(\UPJV\Validator\ValidatorInterface::class , $obj);
        return $obj;
    }

    /**
     * @depends testBuild
     */
    public function testCheckValide( object $obj ): void
    {
        $this->assertEquals(true, $obj->check(3));
    }

    /**
     * @depends testBuild
     */
    public function testCheckNotValide( object $obj ): void
    {
        $this->assertEquals(false, $obj->check(1));
    }

}