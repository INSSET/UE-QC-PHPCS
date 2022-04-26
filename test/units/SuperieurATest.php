<?php

namespace PHPUnit\Framework\TestCase;
use UPJV\Validator\SuperieurA;

require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorEngine.php';
require_once __DIR__ . '/../../src/UPJV/Validator/ValidatorInterface.php';
require_once __DIR__ . '/../../src/UPJV/Validator/SuperieurA.php';

/**
 * @covers \UPJV\Validator\Min
 */
class SuperieurATest extends \PHPUnit\Framework\TestCase
{
    public function testBuild(): object
    {
        $validateur = new SuperieurA();
        $obj = $validateur->build( [19]);
        $this->assertInstanceOf(\UPJV\Validator\ValidatorInterface::class, $obj);
        return $obj;
    }

    /**
     * @depends testBuild
     */
    public function testCheckValide( object $obj ): void
    {
        $this->assertEquals(true, $obj->check(20));
    }

    /**
     * @depends testBuild
     */
    public function testCheckNotValide( object $obj ): void
    {
        $this->assertEquals(false, $obj->check(18));
    }
}